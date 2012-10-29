<?php
class OCISession {
    private $host      = null;
    private $userId    = null;
    private $pass      = null; # This is stored as a signed password, added protection of removing clear-text password from session obj
    private $sessionId = null; # We create and re-use this in the XML BroadSoft Document
    private $nonce     = null; # Nonce is handed back to us in a response, used to sign the password
    private $cookie    = null; # Cookie from headers, JSESSIONID
    private $loggedIn = false;

    public function __construct($host, $userId) {
        $this->host = $host;
        $this->userId = $userId;
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

    public function getSessionId() {
        if ($this->sessionId == null) {
            $this->sessionId = abs(rand(0, 1000000000000000000));
        }
        return $this->sessionId;
    }

    public function getLoggedIn()       { return $this->getLoggedIn(); }
    public function getSignedPassword() { return $this->pass;   }
    public function getHost()           { return $this->host;   }
    public function getUserId()         { return $this->userId; }

    public function setNonce($nonce) { $this->nonce = $nonce; }
    public function getNonce()       { return $this->nonce;   }

    public function setCookie($cookie) { $this->cookie = $cookie; }
    public function getCookie()        { return $this->cookie;    }
}