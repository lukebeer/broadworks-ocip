<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem\NetworkServerDescription;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\TransportProtocol;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\NetAddress;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\Port1025;
use Broadworks_OCIP\core\Builder\Types\PrimitiveType;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Request to modify a routing Network Server in the system.
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class SystemNetworkRoutingServerModifyRequest extends ComplexType implements ComplexInterface
{
    public    $name              = 'SystemNetworkRoutingServerModifyRequest';
    protected $netAddress        = null;
    protected $port              = null;
    protected $transportProtocol = null;
    protected $poll              = null;
    protected $description       = null;

    public function __construct(
         $netAddress,
         $port = null,
         $transportProtocol = null,
         $poll = null,
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
        if (!$netAddress) return $this;
        $this->netAddress = ($netAddress InstanceOf NetAddress)
             ? $netAddress
             : new NetAddress($netAddress);
        $this->netAddress->setName('netAddress');
        return $this;
    }

    /**
     * 
     * @return NetAddress $netAddress
     */
    public function getNetAddress()
    {
        return $this->netAddress->getValue();
    }

    /**
     * 
     */
    public function setPort($port = null)
    {
        if (!$port) return $this;
        $this->port = ($port InstanceOf Port1025)
             ? $port
             : new Port1025($port);
        $this->port->setName('port');
        return $this;
    }

    /**
     * 
     * @return Port1025 $port
     */
    public function getPort()
    {
        return $this->port->getValue();
    }

    /**
     * 
     */
    public function setTransportProtocol($transportProtocol = null)
    {
        if (!$transportProtocol) return $this;
        $this->transportProtocol = ($transportProtocol InstanceOf TransportProtocol)
             ? $transportProtocol
             : new TransportProtocol($transportProtocol);
        $this->transportProtocol->setName('transportProtocol');
        return $this;
    }

    /**
     * 
     * @return TransportProtocol $transportProtocol
     */
    public function getTransportProtocol()
    {
        return $this->transportProtocol->getValue();
    }

    /**
     * 
     */
    public function setPoll($poll = null)
    {
        if (!$poll) return $this;
        $this->poll = new PrimitiveType($poll);
        $this->poll->setName('poll');
        return $this;
    }

    /**
     * 
     * @return boolean $poll
     */
    public function getPoll()
    {
        return $this->poll->getValue();
    }

    /**
     * 
     */
    public function setDescription($description = null)
    {
        if (!$description) return $this;
        $this->description = ($description InstanceOf NetworkServerDescription)
             ? $description
             : new NetworkServerDescription($description);
        $this->description->setName('description');
        return $this;
    }

    /**
     * 
     * @return NetworkServerDescription $description
     */
    public function getDescription()
    {
        return $this->description->getValue();
    }
}
