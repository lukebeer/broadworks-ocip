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
        static $instance;
        if (!is_object($instance)) {
            $instance = new ErrorControl();
        }
        return $instance;
    }

    public static function getBuilder($sessionId)
    {
        return new Builder($sessionId);
    }

    public static function getClient(TransportInterface &$transport)
    {
        return new Client($transport);
    }

    public static function getTCPClient($host = "127.0.0.1", $port = 2208, $timeout = 4)
    {
        $transport = new TCPTransport($host, $port, $timeout);
        return self::getClient($transport);
    }

    public static function getSOAPClient($url, $timeout = 30, $autoLogout = true, $followRedirects = true, $proxy = null)
    {
        $transport = new SOAPTransport($url, $timeout, $autoLogout, $followRedirects, $proxy);
        return self::getClient($transport);
    }

    public static function getSession()
    {
        return new Session();
    }
}