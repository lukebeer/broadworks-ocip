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
 * Response to SystemCallingNameRetrievalGetRequest14.
 */
class SystemCallingNameRetrievalGetResponse14 extends ComplexType implements ComplexInterface
{
    public    $name = 'SystemCallingNameRetrievalGetResponse14';
    protected $queryTimerMilliSeconds;
    protected $serverNetAddress;
    protected $serverPort;
    protected $serverTransportProtocol;

    /**
     * @return \Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated16\SystemCallingNameRetrievalGetResponse14 $response
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
        return ($this->queryTimerMilliSeconds) ? $this->queryTimerMilliSeconds->getValue() : null;
    }

    /**
     * 
     */
    public function setServerNetAddress($serverNetAddress = null)
    {
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
        return ($this->serverNetAddress) ? $this->serverNetAddress->getValue() : null;
    }

    /**
     * 
     */
    public function setServerPort($serverPort = null)
    {
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
        return ($this->serverPort) ? $this->serverPort->getValue() : null;
    }

    /**
     * 
     */
    public function setServerTransportProtocol($serverTransportProtocol = null)
    {
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
        return ($this->serverTransportProtocol) ? $this->serverTransportProtocol->getValue() : null;
    }
}
