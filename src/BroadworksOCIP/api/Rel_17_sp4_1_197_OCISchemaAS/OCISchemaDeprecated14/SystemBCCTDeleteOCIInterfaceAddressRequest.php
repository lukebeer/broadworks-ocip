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
 * Delete an OCI entry in the Broadworks Common Communication Transport (BCCT) protocol to interface mapping table.
 *         The response is either SuccessResponse or ErrorResponse.
 */
class SystemBCCTDeleteOCIInterfaceAddressRequest extends ComplexType implements ComplexInterface
{
    public    $elementName = 'SystemBCCTDeleteOCIInterfaceAddressRequest';
    protected $interfaceNetAddress;

    public function __construct(
         $interfaceNetAddress = ''
    ) {
        $this->setInterfaceNetAddress($interfaceNetAddress);
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
