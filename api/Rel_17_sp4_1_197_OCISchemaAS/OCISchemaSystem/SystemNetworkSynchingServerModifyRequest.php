<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem\NetworkServerDescription;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\NetAddress;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\Port1025;
use Broadworks_OCIP\core\Builder\Types\PrimitiveType;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Request to modify a Network Server in the system.
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class SystemNetworkSynchingServerModifyRequest extends ComplexType implements ComplexInterface
{
    public    $name = 'SystemNetworkSynchingServerModifyRequest';
    protected $netAddress;
    protected $port;
    protected $description;
    protected $becomePreferred;

    public function __construct(
         $netAddress = '',
         $port = null,
         $description = null,
         $becomePreferred = null
    ) {
        $this->setNetAddress($netAddress);
        $this->setPort($port);
        $this->setDescription($description);
        $this->setBecomePreferred($becomePreferred);
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
        $this->netAddress->setName('netAddress');
        return $this;
    }

    /**
     * 
     * @return NetAddress $netAddress
     */
    public function getNetAddress()
    {
        return ($this->netAddress) ? $this->netAddress->getValue() : null;
    }

    /**
     * 
     */
    public function setPort($port = null)
    {
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
        return ($this->port) ? $this->port->getValue() : null;
    }

    /**
     * 
     */
    public function setDescription($description = null)
    {
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
        return ($this->description) ? $this->description->getValue() : null;
    }

    /**
     * 
     */
    public function setBecomePreferred($becomePreferred = null)
    {
        $this->becomePreferred = new PrimitiveType($becomePreferred);
        $this->becomePreferred->setName('becomePreferred');
        return $this;
    }

    /**
     * 
     * @return boolean $becomePreferred
     */
    public function getBecomePreferred()
    {
        return ($this->becomePreferred) ? $this->becomePreferred->getValue() : null;
    }
}
