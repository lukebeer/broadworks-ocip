<?php
/**
 * This file is part of http://github.com/LukeBeer/BroadworksOCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem; 

use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem\NetworkServerDescription;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\TransportProtocol;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\NetAddress;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\Port1025;
use BroadworksOCIP\Builder\Types\PrimitiveType;
use BroadworksOCIP\Builder\Types\ComplexInterface;
use BroadworksOCIP\Builder\Types\ComplexType;
use BroadworksOCIP\Response\ResponseOutput;
use BroadworksOCIP\Client\Client;


/**
 * Request to add a routing Network Server to the system.
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class SystemNetworkRoutingServerAddRequest extends ComplexType implements ComplexInterface
{
    public    $elementName = 'SystemNetworkRoutingServerAddRequest';
    protected $netAddress;
    protected $port;
    protected $transportProtocol;
    protected $poll;
    protected $description;

    public function __construct(
         $netAddress = '',
         $port = null,
         $transportProtocol = '',
         $poll = '',
         $description = null
    ) {
        $this->setNetAddress($netAddress);
        $this->setPort($port);
        $this->setTransportProtocol($transportProtocol);
        $this->setPoll($poll);
        $this->setDescription($description);
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
    public function setNetAddress($netAddress = null)
    {
        $this->netAddress = ($netAddress InstanceOf NetAddress)
             ? $netAddress
             : new NetAddress($netAddress);
        $this->netAddress->setElementName('netAddress');
        return $this;
    }

    /**
     * 
     * @return NetAddress $netAddress
     */
    public function getNetAddress()
    {
        return ($this->netAddress)
            ? $this->netAddress->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setPort($port = null)
    {
        $this->port = ($port InstanceOf Port1025)
             ? $port
             : new Port1025($port);
        $this->port->setElementName('port');
        return $this;
    }

    /**
     * 
     * @return Port1025 $port
     */
    public function getPort()
    {
        return ($this->port)
            ? $this->port->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setTransportProtocol($transportProtocol = null)
    {
        $this->transportProtocol = ($transportProtocol InstanceOf TransportProtocol)
             ? $transportProtocol
             : new TransportProtocol($transportProtocol);
        $this->transportProtocol->setElementName('transportProtocol');
        return $this;
    }

    /**
     * 
     * @return TransportProtocol $transportProtocol
     */
    public function getTransportProtocol()
    {
        return ($this->transportProtocol)
            ? $this->transportProtocol->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setPoll($poll = null)
    {
        $this->poll = new PrimitiveType($poll);
        $this->poll->setElementName('poll');
        return $this;
    }

    /**
     * 
     * @return boolean $poll
     */
    public function getPoll()
    {
        return ($this->poll)
            ? $this->poll->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setDescription($description = null)
    {
        $this->description = ($description InstanceOf NetworkServerDescription)
             ? $description
             : new NetworkServerDescription($description);
        $this->description->setElementName('description');
        return $this;
    }

    /**
     * 
     * @return NetworkServerDescription $description
     */
    public function getDescription()
    {
        return ($this->description)
            ? $this->description->getElementValue()
            : null;
    }
}
