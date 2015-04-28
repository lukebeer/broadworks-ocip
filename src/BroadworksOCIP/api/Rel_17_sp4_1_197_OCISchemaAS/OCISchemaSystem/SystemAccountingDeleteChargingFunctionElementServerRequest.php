<?php
/**
 * This file is part of http://github.com/LukeBeer/BroadworksOCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem; 

use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem\NetAddressExtended;
use BroadworksOCIP\Builder\Types\ComplexInterface;
use BroadworksOCIP\Builder\Types\ComplexType;
use BroadworksOCIP\Response\ResponseOutput;
use BroadworksOCIP\Client\Client;


/**
 * Request to delete a ChargingFunctionElementServer from the system.
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class SystemAccountingDeleteChargingFunctionElementServerRequest extends ComplexType implements ComplexInterface
{
    public    $elementName = 'SystemAccountingDeleteChargingFunctionElementServerRequest';
    protected $address;

    public function __construct(
         $address = ''
    ) {
        $this->setAddress($address);
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
    public function setAddress($address = null)
    {
        $this->address = ($address InstanceOf NetAddressExtended)
             ? $address
             : new NetAddressExtended($address);
        $this->address->setElementName('address');
        return $this;
    }

    /**
     * 
     * @return NetAddressExtended $address
     */
    public function getAddress()
    {
        return ($this->address)
            ? $this->address->getElementValue()
            : null;
    }
}
