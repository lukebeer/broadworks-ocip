<?php
class OCISession {
    private $url       = null;
    private $userId    = null;
    private $pass      = null;
    private $sessionId = null;
    private $nonce     = null;
    private $cookie    = null;
    private $loggedIn  = false;

    public function __construct($url, $userId) {
        $this->url      = $url;
        $this->userId    = $userId;
        $this->sessionId = $this->getSessionId();
    }

    public function setSignedPassword($pass=null) {
        if ($this->nonce && $pass) {
            $this->pass = md5($this->nonce . ":" . sha1($pass));
        }
    }

    public function setLoggedIn() {
        $this->loggedIn = true;
    }

    public function setLoggedOut() {
        $this->loggedIn = false;
    }

    public function getSessionId() {
        if ($this->sessionId == null) {
            $this->sessionId = abs(rand(0, 1000000000000000000));
        }
        return $this->sessionId;
    }

    public function getLoggedIn()       { return $this->getLoggedIn(); }
    public function getSignedPassword() { return $this->pass;   }
    public function getUrl()            { return $this->url;    }
    public function getUserId()         { return $this->userId; }

    public function setNonce($nonce)    { $this->nonce = $nonce; }
    public function getNonce()          { return $this->nonce;   }

    public function setCookie($cookie)  { $this->cookie = $cookie; }
    public function getCookie()         { return $this->cookie;    }
}