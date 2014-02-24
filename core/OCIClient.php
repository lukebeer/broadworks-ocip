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
    private $autoLogout = true;

    public function __construct($url, $autoLogout) {
        $this->errorControl = &CoreFactory::getErrorControl();
        $this->url = $url;
        $this->autoLogout = $autoLogout;
    }

    public function __destruct() {
        if ($this->autoLogout) $this->logout();
    }

    public function authenticate($userId) {
        $this->session      = CoreFactory::getOCISession($this->url, $userId);
        $this->ociBuilder   = CoreFactory::getOCIBuilder($this->session->getSessionId());
        $msg = OCISchemaLogin::AuthenticationRequest($this->session->getUserId());
        if (($this->send($msg)) && ($this->getResponse())) {
            $this->setCookieFromResponse();
            $this->setNonceFromResponse();
            $this->addCookieToRequest();
            return true;
        }
        return false;
    }

    public function login($userId=null, $pass=null) {
        if (isset($userId) && (isset($pass))) {
            if ($this->authenticate($userId)) {
                $this->session->setSignedPassword($pass);
                $msg = OCISchemaLogin::LoginRequest14sp4($this->session->getUserId(), $this->session->getSignedPassword());
                if (($this->send($msg)) && ($this->getResponse())) {
                    $this->session->setLoggedIn();
                    return true;
                }
            }
        }
        return false;
    }

    public function logout() {
        $msg = OCISchemaLogin::LogoutRequest($this->session->getUserId(), "Client Logout");
        $this->send($msg);
        $this->session->setLoggedOut();
    }

    public function getRequest() {
        $this->request = new HTTP_Request2(
            $this->session->getUrl(),
            HTTP_Request2::METHOD_POST,
            array(
                'timeout' => $this->timeout,
                'ssl_verify_peer' => FALSE
            )
        );
        $this->request->setHeader(array(
            'Content-Type'  => 'text/xml; charset=utf-8',
            'Accept' => 'application/soap+xml, application/dime, multipart/related, text/*',
            'User-Agent' => 'Axis/1.3',
            'SOAPAction' => '""',
            'Cache-Control' => 'no-cache',
            'Pragma' => 'no-cache',
            'Connection' => null,
            'Accept-Encoding' => null
        ));
        if ($this->session->getCookie()) {
            $this->addCookieToRequest();
        }
        return $this->request;
    }

    public function send($cmd) {
        if (gettype($cmd) == 'array') $cmd = $this->ociBuilder->build($cmd);
        $this->getRequest();
        $this->getRequest()->setBody($cmd);
        try {
            $this->response = $this->request->send();
        } catch (HTTP_Request2_MessageException $e) {
            $this->errorControl->addError($e->getMessage());
            $this->response = null;
            return false;
        }
        if (is_object($this->response)) {
            if ($this->response->getStatus() == 200) {
                return true;
            } else {
                $this->errorControl->addError("Error code returned: {$this->response->getStatus()}");
                $this->response = null;
                return false;
            }
        }
    }

    private function setCookieFromResponse() {
        $this->session->setCookie($this->response->getCookies());
    }

    private function addCookieToRequest() {
        $cookie = $this->session->getCookie();
        $this->request->addCookie($cookie[0]['name'], $cookie[0]['value']);
    }

    public function getSession() {
        return $this->session;
    }

    public function setSession($session) {
        $this->session = $session;
        $this->getRequest();
        $this->ociBuilder = CoreFactory::getOCIBuilder($this->session->getSessionId());
        return $session;
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
        return html_entity_decode($this->request->getBody());
    }

    public function getLastResponseMsg() {
        return html_entity_decode($this->response->getBody());
    }

    public function getResponse() {
        if (is_object($this->response)) {
            $response = html_entity_decode($this->response->getBody());
            $response = new OCIResponse($response);
            return $response->getResponse();
        } else {
            return null;
        }
    }
    public function getSessionId() {
        return $this->session->getSessionId();
    }

    public function setTimeout($timeout=4) {
        $this->timeout = $timeout;
    }
}
