<?php
/**
 * This file is part of http://github.com/LukeBeer/BroadworksOCIP
 *
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace BroadworksOCIP;

use BroadworksOCIP\Builder\Builder;
use BroadworksOCIP\Client\Client;
use BroadworksOCIP\Client\Transport\SOAPTransport;
use BroadworksOCIP\Client\Transport\TCPTransport;
use BroadworksOCIP\Client\Transport\TransportInterface;
use BroadworksOCIP\Logging\ErrorControl;
use BroadworksOCIP\Session\Session;


/**
 * Class Factory - Factory for object retrieval.
 *
 * @package BroadworksOCIP
 */
class Factory
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

    public static function getTCPClient($host = "127.0.0.1", $port = 2208, $timeout = 4, $sockshost = null, $socksport = null)
    {
        $transport = new TCPTransport($host, $port, $timeout, $sockshost, $socksport);
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
