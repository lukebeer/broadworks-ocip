<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 *
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\core\Session;

/**
 * Class Session - Portable Session object used to store details of the current authenticated session.
 *
 * @package Broadworks_OCIP\core\Session
 */
class Session
{
    private $url = null;
    private $userId = null;
    private $pass = null;
    private $sessionId = null;
    private $nonce = null;
    private $cookie = null;
    private $loggedIn = false;
    private $transport = null;
    private $clearpass = null;


    public function __construct()
    {
        $this->sessionId = $this->getSessionId();
    }

    public function getSessionId()
    {
        if ($this->sessionId == null) {
            $this->sessionId = abs(rand(0, 1000000000000000000));
        }
        return $this->sessionId;
    }

    public function setSessionId($sessionId)
    {
        $this->sessionId = $sessionId;
    }

    public function setSignedPassword($pass = null)
    {
        if ($this->nonce && $pass) {
            $this->pass = md5($this->nonce . ":" . sha1($pass));
            $this->clearpass = "$this->nonce:$pass";
        }
    }

    public function setLoggedOut()
    {
        $this->loggedIn = false;
    }

    public function getLoggedIn()
    {
        return $this->loggedIn;
    }

    public function setLoggedIn()
    {
        $this->loggedIn = true;
    }

    public function getSignedPassword()
    {
        return $this->pass;
    }

    public function getUrl()
    {
        return $this->url;
    }

    public function setUrl($url)
    {
        if (isset($url)) $this->url = $url;
    }

    public function getUserId()
    {
        return $this->userId;
    }

    public function setUserId($userId)
    {
        $this->userId = $userId;
    }

    public function getNonce()
    {
        return $this->nonce;
    }

    public function setNonce($nonce)
    {
        $this->nonce = $nonce;
    }

    public function getCookie()
    {
        return $this->cookie;
    }

    public function setCookie($cookie)
    {
        if (isset($this->cookie)) $this->cookie = null;
        $this->cookie = $cookie;
    }

    public function getTransport()
    {
        return $this->transport;
    }

    public function setTransport($type)
    {
        $this->transport = $type;
    }
}
