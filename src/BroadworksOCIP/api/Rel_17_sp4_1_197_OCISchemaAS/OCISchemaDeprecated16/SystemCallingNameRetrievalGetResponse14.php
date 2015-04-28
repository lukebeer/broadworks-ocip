<?php
/**
 * This file is part of http://github.com/LukeBeer/BroadworksOCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated16; 

use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated16\CallingNameRetrievalQueryTimerMilliSeconds;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\TransportProtocol;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\NetAddress;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\Port1025;
use BroadworksOCIP\Builder\Types\ComplexInterface;
use BroadworksOCIP\Builder\Types\ComplexType;
use BroadworksOCIP\Response\ResponseOutput;
use BroadworksOCIP\Client\Client;


/**
 * Response to SystemCallingNameRetrievalGetRequest14.
 */
class SystemCallingNameRetrievalGetResponse14 extends ComplexType implements ComplexInterface
{
    public    $elementName = 'SystemCallingNameRetrievalGetResponse14';
    protected $queryTimerMilliSeconds;
    protected $serverNetAddress;
    protected $serverPort;
    protected $serverTransportProtocol;

    /**
     * @return \BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated16\SystemCallingNameRetrievalGetResponse14 $response
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
        $this->queryTimerMilliSeconds->setElementName('queryTimerMilliSeconds');
        return $this;
    }

    /**
     * 
     * @return CallingNameRetrievalQueryTimerMilliSeconds $queryTimerMilliSeconds
     */
    public function getQueryTimerMilliSeconds()
    {
        return ($this->queryTimerMilliSeconds)
            ? $this->queryTimerMilliSeconds->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setServerNetAddress($serverNetAddress = null)
    {
        $this->serverNetAddress = ($serverNetAddress InstanceOf NetAddress)
             ? $serverNetAddress
             : new NetAddress($serverNetAddress);
        $this->serverNetAddress->setElementName('serverNetAddress');
        return $this;
    }

    /**
     * 
     * @return NetAddress $serverNetAddress
     */
    public function getServerNetAddress()
    {
        return ($this->serverNetAddress)
            ? $this->serverNetAddress->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setServerPort($serverPort = null)
    {
        $this->serverPort = ($serverPort InstanceOf Port1025)
             ? $serverPort
             : new Port1025($serverPort);
        $this->serverPort->setElementName('serverPort');
        return $this;
    }

    /**
     * 
     * @return Port1025 $serverPort
     */
    public function getServerPort()
    {
        return ($this->serverPort)
            ? $this->serverPort->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setServerTransportProtocol($serverTransportProtocol = null)
    {
        $this->serverTransportProtocol = ($serverTransportProtocol InstanceOf TransportProtocol)
             ? $serverTransportProtocol
             : new TransportProtocol($serverTransportProtocol);
        $this->serverTransportProtocol->setElementName('serverTransportProtocol');
        return $this;
    }

    /**
     * 
     * @return TransportProtocol $serverTransportProtocol
     */
    public function getServerTransportProtocol()
    {
        return ($this->serverTransportProtocol)
            ? $this->serverTransportProtocol->getElementValue()
            : null;
    }
}
