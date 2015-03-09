<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated16; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated16\CallingNameRetrievalQueryTimerMilliSeconds;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\TransportProtocol;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\NetAddress;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\Port1025;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated16\SystemCallingNameRetrievalModifyResponse;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Modifies the system's calling name retrieval attributes.
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class SystemCallingNameRetrievalModifyRequest extends ComplexType implements ComplexInterface
{
    public    $name                    = __CLASS__;
    protected $queryTimerMilliSeconds  = null;
    protected $serverNetAddress        = null;
    protected $serverPort              = null;
    protected $serverTransportProtocol = null;

    public function __construct(
         $queryTimerMilliSeconds = null,
         $serverNetAddress = null,
         $serverPort = null,
         $serverTransportProtocol = null
    ) {
        $this->setQueryTimerMilliSeconds($queryTimerMilliSeconds);
        $this->setServerNetAddress($serverNetAddress);
        $this->setServerPort($serverPort);
        $this->setServerTransportProtocol($serverTransportProtocol);
    }

    /**
     * @return SystemCallingNameRetrievalModifyResponse
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * Query timer milli-seconds.
     */
    public function setQueryTimerMilliSeconds($queryTimerMilliSeconds = null)
    {
        $this->queryTimerMilliSeconds = ($queryTimerMilliSeconds InstanceOf CallingNameRetrievalQueryTimerMilliSeconds)
             ? $queryTimerMilliSeconds
             : new CallingNameRetrievalQueryTimerMilliSeconds($queryTimerMilliSeconds);
    }

    /**
     * Query timer milli-seconds.
     */
    public function getQueryTimerMilliSeconds()
    {
        return (!$this->queryTimerMilliSeconds) ?: $this->queryTimerMilliSeconds->getValue();
    }

    /**
     * IP Address, hostname, or domain.
     */
    public function setServerNetAddress($serverNetAddress = null)
    {
        $this->serverNetAddress = ($serverNetAddress InstanceOf NetAddress)
             ? $serverNetAddress
             : new NetAddress($serverNetAddress);
    }

    /**
     * IP Address, hostname, or domain.
     */
    public function getServerNetAddress()
    {
        return (!$this->serverNetAddress) ?: $this->serverNetAddress->getValue();
    }

    /**
     * TCP/IP Port number above the well-known range.
     */
    public function setServerPort($serverPort = null)
    {
        $this->serverPort = ($serverPort InstanceOf Port1025)
             ? $serverPort
             : new Port1025($serverPort);
    }

    /**
     * TCP/IP Port number above the well-known range.
     */
    public function getServerPort()
    {
        return (!$this->serverPort) ?: $this->serverPort->getValue();
    }

    /**
     * Network Transport Protocol.
     */
    public function setServerTransportProtocol($serverTransportProtocol = null)
    {
        $this->serverTransportProtocol = ($serverTransportProtocol InstanceOf TransportProtocol)
             ? $serverTransportProtocol
             : new TransportProtocol($serverTransportProtocol);
    }

    /**
     * Network Transport Protocol.
     */
    public function getServerTransportProtocol()
    {
        return (!$this->serverTransportProtocol) ?: $this->serverTransportProtocol->getValue();
    }
}
