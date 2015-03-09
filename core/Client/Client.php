<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 *
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\core\Client;


use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaLogin\AuthenticationRequest;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaLogin\LoginRequest14sp4;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaLogin\LogoutRequest;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Client\Transport\TransportInterface;
use Broadworks_OCIP\core\Console\CommandGenerator;
use Broadworks_OCIP\core\Console\Console;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\CoreFactory;
use Symfony\Component\Console\Output\OutputInterface;


require_once 'HTTP/Request2.php';


class Client
{
    public $ociBuilder = null;
    private $session = null;
    private $timeout = 4;
    private $autoLogout = true;
    private $requestMsg = null;
    private $responseType = null;


    public function __construct(TransportInterface $transport)
    {
        $this->transport = $transport;
        $this->session = CoreFactory::getSession();
        $this->ociBuilder = CoreFactory::getBuilder($this->session);
        $this->errorControl = CoreFactory::getErrorControl();
        $this->transport->updateSession($this->session);
    }

    public function __destruct()
    {
        if ($this->autoLogout) {
            $this->logout();
            $this->transport->destruct();
        }
    }

    public function logout()
    {
        if ($this->session->getLoggedIn()) {
            $msg = new LogoutRequest($this->session->getUserId(), "Client Logout");
            $this->send($msg);
            $this->session->setLoggedOut();
        }
    }

    public function send($msg)
    {
        $this->requestMsg = $msg;
        $this->responseType = (is_object($this->requestMsg)) ? $msg->getResponseType() : null;
        $msg = $this->ociBuilder->build($msg);
        $this->errorControl->clearLastError();
        return $this->transport->send($msg);
    }

    public function login($userId = null, $pass = null)
    {
        if (isset($userId) && (isset($pass))) {
            if ($this->authenticate($userId)) {
                $this->session->setSignedPassword($pass);
                $msg = new LoginRequest14sp4($this->session->getUserId(), $this->session->getSignedPassword());
                if (($this->send($msg)) && ($this->getResponse())) {
                    $this->session->setLoggedIn();
                    return true;
                }
            }
        }
        return false;
    }

    public function authenticate($userId = null)
    {
        if ($userId) $this->session->setUserId($userId);
        $msg = new AuthenticationRequest($this->session->getUserId());
        if (($this->send($msg)) && ($this->getResponse())) {
            $this->session->setNonce($this->getResponse()->getNonce());
            return true;
        }
        return false;
    }

    public function getResponse($outputType = ResponseOutput::STD)
    {;
        return $this->transport->getResponse($this->responseType, $outputType);
    }

    public function getSession()
    {
        return $this->session;
    }

    public function setSession($session)
    {
        $this->session = $session;
        $this->ociBuilder = CoreFactory::getBuilder($this->session->getSessionId());
        return $session;
    }

    public function getLastRequestMsg()
    {
        return $this->requestMsg;
    }

    public function getLastResponseMsg()
    {
        return $this->transport->getLastResponseBody();
    }

    public function getSessionId()
    {
        return $this->session->getSessionId();
    }

    public function console(OutputInterface $outputInterface)
    {
        $commandGenerator = new CommandGenerator(OCI_PATH . '/api/php/Rel_17.sp4_1.197_OCISchemaAS');
        $console = new Console($commandGenerator->getCommands(), $outputInterface, $this);
        $console->init();
    }

    public function setTimeout($timeout = 4)
    {
        $this->timeout = $timeout;
    }
}
