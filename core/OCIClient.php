<?php
require_once 'OCISession.php';
require_once 'OCIResponse.php';
require_once 'HTTP/Request2.php';
Factory::getOCISchemaLogin();
Factory::getOCISchemaUser();

class OCIClient {
    public $request    = null;
    public $response   = null;
    public $ociBuilder = null;

    private $session = null;
    private $timeout = 4;
    private $isAuthed = false;

    public function __construct($url) {
        $this->errorControl = &CoreFactory::getErrorControl();
        $this->url = $url;
    }

    public function authenticate($userId) {
        $this->isAuthed = false;
        $this->session      = CoreFactory::getOCISession($this->url, $userId);
        $this->ociBuilder   = CoreFactory::getOCIBuilder($this->session->getSessionId());
        $msg = OCISchemaLogin::AuthenticationRequest($this->session->getUserId());
        if (($this->send($msg)) && ($this->getResponse())) {
            $this->setCookieFromResponse();
            $this->setNonceFromResponse();
            $this->addCookieToRequest();
            $this->isAuthed = true;
            return true;
        }
        return false;
    }

    public function login($userId=null, $pass=null) {
        if (isset($userId) && (isset($pass))) {
            $this->authenticate($userId);
            $this->session->setSignedPassword($pass);
        }
        if ($this->isAuthed) {
            $msg = OCISchemaLogin::LoginRequest14sp4($this->session->getUserId(), $this->session->getSignedPassword());
            if (($this->send($msg)) && ($this->getResponse())) $this->session->setLoggedIn();
            return true;
        }
        return false;
    }

    public function getRequest() {
        if ($this->request == null) {
            $this->request = new HTTP_Request2(
                $this->session->getUrl(),
                HTTP_Request2::METHOD_POST,
                array('timeout' => $this->timeout)
            );
            $this->request->setHeader(array(
                'Content-Type'	=> 'text/xml; charset=utf-8',
                'Accept' => 'application/soap+xml, application/dime, multipart/related, text/*',
                'User-Agent' => 'Axis/1.3',
                'SOAPAction' => '""',
                'Cache-Control' => 'no-cache',
                'Pragma' => 'no-cache',
                'Connection' => null,
                'Accept-Encoding' => null
            ));
        }
        return $this->request;
    }

    public function send($cmd) {
        if (gettype($cmd) == 'array') $cmd = $this->ociBuilder->build($cmd);
        $this->getRequest();
        $this->getRequest()->setBody($cmd);
        try {
            $this->response = $this->getRequest()->send();
        } catch (HTTP_Request2_MessageException $e) {
            $this->errorControl->addError($e->getMessage());
        }
        if ($this->response->getStatus() == 200) {
            return true;
        } else {
            $this->errorControl->addError("Error code returned: {$this->response->getStatus()}");
            return false;
        }
    }

    private function setCookieFromResponse() {
        $this->session->setCookie($this->response->getCookies());
    }

    private function addCookieToRequest() {
        $cookie = $this->session->getCookie();
        $this->getRequest()->addCookie($cookie[0]['name'], $cookie[0]['value']);
    }

    private function setNonceFromResponse() {
        $response = $this->response->getBody();
        $start_pos = stripos($response, '&lt;nonce&gt;') + 13;
        $end_pos = stripos($response, '&lt;/nonce&gt;');
        $len = $end_pos - $start_pos;
        $nonce = substr($response, $start_pos, $len);
        $this->session->setNonce($nonce);
    }

    public function getLastRequestMsg() {
        return html_entity_decode($this->getRequest()->getBody());
    }

    public function getLastResponseMsg() {
        return html_entity_decode($this->response->getBody());
    }

    public function getResponse() {
        $response = html_entity_decode($this->response->getBody());
        $response =  new OCIResponse($response);
        return $response->getResponse();
    }
    public function getSessionId() {
        return $this->session->getSessionId();
    }
}