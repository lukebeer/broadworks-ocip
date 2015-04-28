<?php

/*
 * This file is part of the Broadworks OCIP package https://github.com/LukeBeer/BroadworksOCIP
 *
 * Copyright (c) 2015 Luke Berezynskyj (aka Luke Beer)
 *
 * @author Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace BroadworksOCIP\Client;

use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaLogin\AuthenticationRequest;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaLogin\LoginRequest14sp4;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaLogin\LogoutRequest;
use BroadworksOCIP\Builder\Types\ComplexType;
use BroadworksOCIP\Client\Transport\TransportInterface;
use BroadworksOCIP\Console\CommandGenerator;
use BroadworksOCIP\Console\Console;
use BroadworksOCIP\Output\OutputInterface;
use BroadworksOCIP\Response\ResponseOutput;
use BroadworksOCIP\Factory;
use Illuminate\Support\Facades\Auth;


/**
 * Class Client - Main controller for the whole framework exposing methods for requests and responses.
 *
 * @package BroadworksOCIP\Client
 */
class Client
{
    public $ociBuilder;
    private $session;
    private $timeout = 4;
    private $autoLogout = true;
    private $requestMsg;
    private $responseType = false;
    private $appendToResponse = [];

    /**
     * Constructor, gateway to another dimension.
     * Creates and sets a new session and command builder instance
     * Sets the logging interface
     *
     * @param TransportInterface $transport
     */
    public function __construct(TransportInterface &$transport)
    {
        $this->transport = &$transport;
        $this->session = Factory::getSession();
        $this->ociBuilder = Factory::getBuilder($this->session);
        $this->errorControl = Factory::getErrorControl();
        $this->transport->updateSession($this->session);
    }

    /**
     * Destructor will send a LogoutRequest if autoLogout is true.
     */
    public function __destruct()
    {
        if ($this->autoLogout) {
            $this->logout();
            $this->transport->destruct();
        }
    }

    /**
     * Sends a LogoutRequest to Broadworks and destroys session.
     *
     * @return void
     */
    public function logout()
    {
        if ($this->session->getLoggedIn()) {
            $msg = new LogoutRequest($this->session->getUserId(), 'Client Logout');
            $this->send($msg);
            $this->session->setLoggedOut();
        }
    }

    /**
     * If required, generates the XML message from a ComplexType object.
     * Method send() is called on the Transport object to send data to Broadworks.
     *
     * @param ComplexType|string $msg
     * @return mixed
     */
    public function send($msg)
    {
        $this->requestMsg = $msg;
        $this->responseType = (is_object($this->requestMsg)) ? $msg->getResponseType() : null;
        $msg = $this->ociBuilder->build($msg);
        $this->errorControl->clearLastError();
        return $this->transport->send($msg);
    }

    /**
     * Second and final stage of login process.
     * Sends a LoginRequest to attempt authentication with Broadworks.
     *
     * @param null $userId
     * @param null $pass
     * @return bool
     */
    public function login($userId = null, $pass = null)
    {
        if (($userId and $pass) and $this->authenticate($userId)) {
            $this->session->setSignedPassword($pass);
            $msg = new LoginRequest14sp4($this->session->getUserId(), $this->session->getSignedPassword());
            if (($this->send($msg)) && ($this->getResponse())) {
                $this->session->setLoggedIn();
                return true;
            }
        }
        return false;
    }

    /**
     * First stage of login process.
     * Sends initial AuthenticationRequest to obtain nonce used for LoginRequest.
     *
     * @param null $userId
     * @return bool
     */
    public function authenticate($userId = null)
    {
        if ($userId) {
            $this->session->setUserId($userId);
            $msg = new AuthenticationRequest($this->session->getUserId());
            if (($this->send($msg)) && ($this->getResponse() InstanceOf ComplexType)) {
                $this->session->setNonce($this->getResponse()->getNonce());
                return true;
            }
        }
        return false;
    }

    /**
     * Provides method to obtain the last response from Broadworks and return requested response type.
     *
     * @param int $outputType
     * @param bool $responseType
     * @return mixed
     */
    public function getResponse($outputType = ResponseOutput::STD, $responseType = false)
    {
        $responseType = $responseType ?: $this->responseType;
        return $this->transport->getResponse($responseType, $outputType, $this->appendToResponse);
    }

    /**
     * Returns transport object.
     *
     * @return \BroadworksOCIP\Client\Transport\TransportInterface|null
     */
    public function setTransport(&$transport)
    {
        $this->transport = &$transport;
    }

    /**
     * Returns session object.
     *
     * @return \BroadworksOCIP\Session\Session|null
     */
    public function getSession()
    {
        return $this->session;
    }

    /**
     * Sets session object.
     *
     * @param $session
     * @return mixed
     */
    public function setSession($session)
    {
        $this->session = $session;
        $this->ociBuilder = Factory::getBuilder($this->session->getSessionId());
        return $session;
    }

    /**
     * Returns last request message.
     *
     * @return null
     */
    public function getLastRequestMsg()
    {
        return $this->requestMsg;
    }

    /**
     * Returns last response message.
     *
     * @return mixed
     */
    public function getLastResponseMsg()
    {
        return $this->transport->getLastResponseBody();
    }

    /**
     * Returns session id.
     *
     * @return null|number
     */
    public function getSessionId()
    {
        return $this->session->getSessionId();
    }

    /**
     * Initializes interactive OCIP console as CLI.
     *
     * @param OutputInterface $outputInterface
     */
    public function console(OutputInterface $outputInterface)
    {
        $commandGenerator = new CommandGenerator(OCI_PATH . '/api/Rel_17_sp4_1_197_OCISchemaAS');
        $console = new Console($commandGenerator->getCommands(), $outputInterface, $this);
        $console->init();
    }

    /**
     * Sets timeout on transport for pending requests.
     *
     * @param int $timeout
     */
    public function setTimeout($timeout = 4)
    {
        $this->timeout = $timeout;
    }

    /**
     * Appends additional elements into response before serializing into requested response type.
     * Used so responses such as userGetResponse17sp4 can be automatically mapped into a userAddRequest17sp4 for example.
     * In this case, a userAddRequest17sp4 requires element userId however userGetResponse17sp4 doesn't include it.
     *
     * @param \BroadworksOCIP\Builder\Types\SimpleType|ComplexType $element
     * @return $this
     */
    public function addElementToResponse($element)
    {
        $this->appendToResponse[] = $element;
        return $this;
    }

    /**
     * Empties appendToResponse array.
     */
    public function clearAdditionalResponseElements()
    {
        $this->appendToResponse = [];
    }
}
