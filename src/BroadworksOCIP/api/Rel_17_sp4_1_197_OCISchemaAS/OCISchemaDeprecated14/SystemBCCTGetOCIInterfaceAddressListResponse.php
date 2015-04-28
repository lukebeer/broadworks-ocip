<?php
/**
 * This file is part of http://github.com/LukeBeer/BroadworksOCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated14; 

use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\NetAddress;
use BroadworksOCIP\Builder\Types\ComplexInterface;
use BroadworksOCIP\Builder\Types\ComplexType;
use BroadworksOCIP\Response\ResponseOutput;
use BroadworksOCIP\Client\Client;


/**
 * Response to SystemBCCTGetOCIInterfaceAddressListRequest.
 */
class SystemBCCTGetOCIInterfaceAddressListResponse extends ComplexType implements ComplexInterface
{
    public    $elementName = 'SystemBCCTGetOCIInterfaceAddressListResponse';
    protected $interfaceNetAddress;

    /**
     * @return \BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated14\SystemBCCTGetOCIInterfaceAddressListResponse $response
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * 
     */
    public function setInterfaceNetAddress($interfaceNetAddress = null)
    {
        $this->interfaceNetAddress = ($interfaceNetAddress InstanceOf NetAddress)
             ? $interfaceNetAddress
             : new NetAddress($interfaceNetAddress);
        $this->interfaceNetAddress->setElementName('interfaceNetAddress');
        return $this;
    }

    /**
     * 
     * @return NetAddress $interfaceNetAddress
     */
    public function getInterfaceNetAddress()
    {
        return ($this->interfaceNetAddress)
            ? $this->interfaceNetAddress->getElementValue()
            : null;
    }
}
