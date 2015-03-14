<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 *
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP;

use Broadworks_OCIP\core\Builder\Builder;
use Broadworks_OCIP\core\Client\Client;
use Broadworks_OCIP\core\Client\Transport\SOAPTransport;
use Broadworks_OCIP\core\Client\Transport\TCPTransport;
use Broadworks_OCIP\core\Client\Transport\TransportInterface;
use Broadworks_OCIP\core\Logging\ErrorControl;
use Broadworks_OCIP\core\Session\Session;


/**
 * Class CoreFactory - CoreFactory for object retrieval.
 *
 * @package Broadworks_OCIP
 */
class CoreFactory
{
    public static function &getErrorControl()
    {
        require_once(OCI_PATH . "/core/Logging/ErrorControl.php");
        static $instance;
        if (!is_object($instance)) {
            $instance = new ErrorControl();
        }
        return $instance;
    }

    public static function getBuilder($sessionId)
    {
        require_once(OCI_PATH . "/core/Builder/Builder.php");
        $instance = new Builder($sessionId);
        return $instance;
    }

    public static function getClient(TransportInterface &$transport)
    {
        require_once(OCI_PATH . "/core/Client/Client.php");
        $instance = new Client($transport);
        return $instance;
    }

    public static function getTCPTransport($host = "127.0.0.1", $port = 2208, $timeout = 4)
    {
        require_once(OCI_PATH . "/core/Client/Transport/TCPTransport.php");
        $instance = new TCPTransport($host, $port, $timeout);
        return $instance;
    }

    public static function getSOAPTransport($url, $timeout = 30, $autoLogout = true, $followRedirects = true, $proxy = null)
    {
        require_once(OCI_PATH . "/core/Client/Transport/SOAPTransport.php");
        $instance = new SOAPTransport($url, $timeout, $autoLogout, $followRedirects, $proxy);
        return $instance;
    }

    public static function getSession()
    {
        require_once(OCI_PATH . "/core/Session/Session.php");
        $instance = new Session();
        return $instance;
    }
}