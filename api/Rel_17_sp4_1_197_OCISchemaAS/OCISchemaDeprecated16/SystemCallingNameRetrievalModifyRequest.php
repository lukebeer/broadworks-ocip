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
    public    $name                    = 'SystemCallingNameRetrievalModifyRequest';
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
     * @return mixed $response
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * 
     */
    public function setQueryTimerMilliSeconds($queryTimerMilliSeconds = null)
    {
        if (!$queryTimerMilliSeconds) return $this;
        $this->queryTimerMilliSeconds = ($queryTimerMilliSeconds InstanceOf CallingNameRetrievalQueryTimerMilliSeconds)
             ? $queryTimerMilliSeconds
             : new CallingNameRetrievalQueryTimerMilliSeconds($queryTimerMilliSeconds);
        $this->queryTimerMilliSeconds->setName('queryTimerMilliSeconds');
        return $this;
    }

    /**
     * 
     * @return CallingNameRetrievalQueryTimerMilliSeconds $queryTimerMilliSeconds
     */
    public function getQueryTimerMilliSeconds()
    {
        return $this->queryTimerMilliSeconds->getValue();
    }

    /**
     * 
     */
    public function setServerNetAddress($serverNetAddress = null)
    {
        if (!$serverNetAddress) return $this;
        $this->serverNetAddress = ($serverNetAddress InstanceOf NetAddress)
             ? $serverNetAddress
             : new NetAddress($serverNetAddress);
        $this->serverNetAddress->setName('serverNetAddress');
        return $this;
    }

    /**
     * 
     * @return NetAddress $serverNetAddress
     */
    public function getServerNetAddress()
    {
        return $this->serverNetAddress->getValue();
    }

    /**
     * 
     */
    public function setServerPort($serverPort = null)
    {
        if (!$serverPort) return $this;
        $this->serverPort = ($serverPort InstanceOf Port1025)
             ? $serverPort
             : new Port1025($serverPort);
        $this->serverPort->setName('serverPort');
        return $this;
    }

    /**
     * 
     * @return Port1025 $serverPort
     */
    public function getServerPort()
    {
        return $this->serverPort->getValue();
    }

    /**
     * 
     */
    public function setServerTransportProtocol($serverTransportProtocol = null)
    {
        if (!$serverTransportProtocol) return $this;
        $this->serverTransportProtocol = ($serverTransportProtocol InstanceOf TransportProtocol)
             ? $serverTransportProtocol
             : new TransportProtocol($serverTransportProtocol);
        $this->serverTransportProtocol->setName('serverTransportProtocol');
        return $this;
    }

    /**
     * 
     * @return TransportProtocol $serverTransportProtocol
     */
    public function getServerTransportProtocol()
    {
        return $this->serverTransportProtocol->getValue();
    }
}
