<?php
require_once 'OCISession.php';
class OCIClient {
    public $request      = null;
    public $response     = null;
    public $errorControl = null;
    public $ociBuilder   = null;

    private $session    = null;
    private $timeout    = null;

    public function __construct($url, $userId, $pass, $errorControl=null, $timeout=4) {
        require_once 'HTTP/Request2.php';
        $this->errorControl = $errorControl;
        $this->session      = CoreFactory::getOCISession($url, $userId);
        $this->ociBuilder   = CoreFactory::getOCIBuilder($this->session->getSessionId());
        $msg = $this->ociBuilder->build(OCISchemaLogin::AuthenticationRequest($this->session->getUserId()));
        if ($this->send($msg)) {
            $this->setCookieFromResponse();
            $this->setNonceFromResponse();
            $this->addCookieToRequest();
            $this->session->setSignedPassword($pass);
            $msg = $this->ociBuilder->build(OCISchemaLogin::LoginRequest14sp4($this->session->getUserId(), $this->session->getSignedPassword()));
            if ($this->send($msg)) {
                $this->session->setLoggedIn();
            }
        } else {
            die("Failed to construct OCIClient, invalid credentials.");
        }
    }

    public function getRequest() {
        if ($this->request == null) {
            $this->request = new HTTP_Request2($this->session->getUrl(), [
                'timeout'     => $this->timeout,
                'readTimeout' => $this->timeout
            ]);
            $this->request->setMethod(HTTP_Request2::METHOD_POST)->setHeader([
                'Content-Type'	=> 'text/xml; charset=utf-8',
                'Accept' => 'application/soap+xml, application/dime, multipart/related, text/*',
                'User-Agent' => 'Axis/1.3',
                'SOAPAction' => '""',
                'Cache-Control' => 'no-cache',
                'Pragma' => 'no-cache',
                'Connection' => null,
                'Accept-Encoding' => null
            ]);
        }
        return $this->request;
    }

    public function send($cmd) {
        $this->getRequest();
        $this->getRequest()->setBody($cmd);
        $this->response = $this->getRequest()->send();
        if ($this->response->getStatus() == 200) {
            if ($this->getXMLResponseBody()) {
                $this->session->setLoggedIn();
                return true;
            }
        } else {
            $this->getXMLResponseBody();
            $this->errorControl->addError("Error code returned: {$this->response->getStatus()}");
        }
        return false;
    }

    private function setCookieFromResponse() {
        $this->session->setCookie($this->response->getCookies());
    }

    private function addCookieToRequest() {
        $cookie = $this->session->getCookie();
        $this->getRequest()->addCookie($cookie[0]['name'],$cookie[0]['value']);
    }

    private function setNonceFromResponse() {
        $response = $this->response->getBody();
        $start_pos = stripos($response, '&lt;nonce&gt;') + 13;
        $end_pos = stripos($response, '&lt;/nonce&gt;');
        $len = $end_pos - $start_pos;
        $nonce = substr($response, $start_pos, $len);
        $this->session->setNonce($nonce);
    }

    public function getResponseBody() {
        return html_entity_decode($this->response->getBody());
    }

    public function getXMLResponseBody() {
        $response = $this->getResponseBody();
        if (preg_match('/<command .*>(.*)<\/command>/', $response, $regs)) {
            $utf8 = utf8_encode($regs[0]);
            return simplexml_load_string($utf8);
        } elseif (preg_match('/ErrorResponse/', $response)) {
            preg_match('/<summaryEnglish>(.*)<\/summaryEnglish>/', $response, $summaryEnglish);
            preg_match('/<detail>(.*)/', $response, $summary);
            $this->errorControl->addError("{$summaryEnglish[1]} :: {$summary[1]}");
        } elseif (preg_match('/<string>(.*)<\/string>/', $response, $string)) {
            $this->errorControl->addError($string[1]);
            return true;
        } elseif (preg_match('/SuccessResponse/', $response)) {
            return true;
        } else {
            $this->errorControl->addError("Unable to parse response {$this->getResponseBody()}");
            return false;
        }
        return false;
    }

    public function getSessionId() {
        return $this->session->getSessionId();
    }
}