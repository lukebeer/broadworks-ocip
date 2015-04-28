<?php
/**
 * This file is part of http://github.com/LukeBeer/BroadworksOCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem; 

use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem\NetworkACLEntryDescription;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\NetAddress;
use BroadworksOCIP\Builder\Types\PrimitiveType;
use BroadworksOCIP\Builder\Types\ComplexInterface;
use BroadworksOCIP\Builder\Types\ComplexType;
use BroadworksOCIP\Response\ResponseOutput;
use BroadworksOCIP\Client\Client;


/**
 * Add an entry to the OCI Reporting Access Control List.
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class SystemOCIReportingAddACLEntryRequest13mp9 extends ComplexType implements ComplexInterface
{
    public    $elementName = 'SystemOCIReportingAddACLEntryRequest13mp9';
    protected $netAddress;
    protected $description;
    protected $restrictMessages;

    public function __construct(
         $netAddress = '',
         $description = null,
         $restrictMessages = ''
    ) {
        $this->setNetAddress($netAddress);
        $this->setDescription($description);
        $this->setRestrictMessages($restrictMessages);
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
    public function setDescription($description = null)
    {
        $this->description = ($description InstanceOf NetworkACLEntryDescription)
             ? $description
             : new NetworkACLEntryDescription($description);
        $this->description->setElementName('description');
        return $this;
    }

    /**
     * 
     * @return NetworkACLEntryDescription $description
     */
    public function getDescription()
    {
        return ($this->description)
            ? $this->description->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setRestrictMessages($restrictMessages = null)
    {
        $this->restrictMessages = new PrimitiveType($restrictMessages);
        $this->restrictMessages->setElementName('restrictMessages');
        return $this;
    }

    /**
     * 
     * @return boolean $restrictMessages
     */
    public function getRestrictMessages()
    {
        return ($this->restrictMessages)
            ? $this->restrictMessages->getElementValue()
            : null;
    }
}
