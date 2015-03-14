<?php

/*
 * This file is part of the Broadworks OCIP package https://github.com/LukeBeer/Broadworks_OCIP
 *
 * Copyright (c) 2015 Luke Berezynskyj (aka Luke Beer)
 *
 * @author Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\core\Session;

/**
 * Class Session - Portable Session object used to store details of the current authenticated session.
 *
 * @package Broadworks_OCIP\core\Session
 */
class Session
{
    private $url;
    private $userId;
    private $pass;
    private $sessionId;
    private $nonce;
    private $cookie;
    private $loggedIn = false;
    private $transport;
    private $clearpass;

    /**
     * Constructor, assigns sessionId.
     */
    public function __construct()
    {
        $this->sessionId = $this->getSessionId();
    }

    /**
     * @return number
     */
    public function getSessionId()
    {
        if ($this->sessionId === null) {
            $this->sessionId = abs(rand(0, 1000000000000000000));
        }
        return $this->sessionId;
    }

    /**
     * @param $sessionId
     */
    public function setSessionId($sessionId)
    {
        $this->sessionId = $sessionId;
    }

    /**
     * @param null $pass
     */
    public function setSignedPassword($pass = null)
    {
        if ($pass && $this->nonce) {
            $this->pass = md5($this->nonce . ':' . sha1($pass));
            $this->clearpass = "$this->nonce:$pass";
        }
    }

    /**
     *
     */
    public function setLoggedOut()
    {
        $this->loggedIn = false;
    }

    /**
     * @return bool
     */
    public function getLoggedIn()
    {
        return $this->loggedIn;
    }

    /**
     * @return $this
     */
    public function setLoggedIn()
    {
        $this->loggedIn = true;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getSignedPassword()
    {
        return $this->pass;
    }

    /**
     * @return mixed
     */
    public function getUrl()
    {
        return $this->url;
    }

    /**
     * @param $url
     * @return $this
     */
    public function setUrl($url)
    {
        $this->url = $url;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getUserId()
    {
        return $this->userId;
    }

    /**
     * @param $userId
     * @return $this
     */
    public function setUserId($userId)
    {
        $this->userId = $userId;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getNonce()
    {
        return $this->nonce;
    }

    /**
     * @param $nonce
     * @return $this
     */
    public function setNonce($nonce)
    {
        $this->nonce = $nonce;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getCookie()
    {
        return $this->cookie;
    }

    /**
     * @param $cookie
     * @return $this
     */
    public function setCookie($cookie)
    {
        $this->cookie = $cookie;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getTransport()
    {
        return $this->transport;
    }

    /**
     * @param $type
     * @return $this
     */
    public function setTransport($type)
    {
        $this->transport = $type;
        return $this;
    }
}
