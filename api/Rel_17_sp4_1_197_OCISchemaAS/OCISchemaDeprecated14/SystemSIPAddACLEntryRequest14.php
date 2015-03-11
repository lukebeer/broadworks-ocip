<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated14; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem\NetworkACLEntryDescription;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem\SIPACLTransportProtocol;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\NetAddress;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Add an entry to the SIP access control list.
 *         The response is either SuccessResponse or ErrorResponse.
 */
class SystemSIPAddACLEntryRequest14 extends ComplexType implements ComplexInterface
{
    public    $name              = 'SystemSIPAddACLEntryRequest14';
    protected $netAddress        = null;
    protected $transportProtocol = null;
    protected $description       = null;

    public function __construct(
         $netAddress,
         $transportProtocol,
         $description = null
    ) {
        $this->setNetAddress($netAddress);
        $this->setTransportProtocol($transportProtocol);
        $this->setDescription($description);
    }

    /**
     * @return 
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
     * @return NetAddress
     */
    public function getNetAddress()
    {
        return $this->netAddress->getValue();
    }

    /**
     * 
     */
    public function setTransportProtocol($transportProtocol = null)
    {
        if (!$transportProtocol) return $this;
        $this->transportProtocol = ($transportProtocol InstanceOf SIPACLTransportProtocol)
             ? $transportProtocol
             : new SIPACLTransportProtocol($transportProtocol);
        $this->transportProtocol->setName('transportProtocol');
        return $this;
    }

    /**
     * 
     * @return SIPACLTransportProtocol
     */
    public function getTransportProtocol()
    {
        return $this->transportProtocol->getValue();
    }

    /**
     * 
     */
    public function setDescription($description = null)
    {
        if (!$description) return $this;
        $this->description = ($description InstanceOf NetworkACLEntryDescription)
             ? $description
             : new NetworkACLEntryDescription($description);
        $this->description->setName('description');
        return $this;
    }

    /**
     * 
     * @return NetworkACLEntryDescription
     */
    public function getDescription()
    {
        return $this->description->getValue();
    }
}
