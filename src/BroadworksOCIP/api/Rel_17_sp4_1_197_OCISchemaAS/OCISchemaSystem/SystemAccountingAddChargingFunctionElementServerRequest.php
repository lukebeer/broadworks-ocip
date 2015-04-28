<?php
/**
 * This file is part of http://github.com/LukeBeer/BroadworksOCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem; 

use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem\ChargingFunctionElementServerDescription;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem\ChargingFunctionElementServerType;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem\NetAddressExtended;
use BroadworksOCIP\Builder\Types\PrimitiveType;
use BroadworksOCIP\Builder\Types\ComplexInterface;
use BroadworksOCIP\Builder\Types\ComplexType;
use BroadworksOCIP\Response\ResponseOutput;
use BroadworksOCIP\Client\Client;


/**
 * Request to add a ChargingFunctionElement Server to the system.
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class SystemAccountingAddChargingFunctionElementServerRequest extends ComplexType implements ComplexInterface
{
    public    $elementName = 'SystemAccountingAddChargingFunctionElementServerRequest';
    protected $address;
    protected $isNetAddressExtended;
    protected $type;
    protected $description;

    public function __construct(
         $address = '',
         $isNetAddressExtended = '',
         $type = '',
         $description = null
    ) {
        $this->setAddress($address);
        $this->setIsNetAddressExtended($isNetAddressExtended);
        $this->setType($type);
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

    /**
     * 
     */
    public function setIsNetAddressExtended($isNetAddressExtended = null)
    {
        $this->isNetAddressExtended = new PrimitiveType($isNetAddressExtended);
        $this->isNetAddressExtended->setElementName('isNetAddressExtended');
        return $this;
    }

    /**
     * 
     * @return boolean $isNetAddressExtended
     */
    public function getIsNetAddressExtended()
    {
        return ($this->isNetAddressExtended)
            ? $this->isNetAddressExtended->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setType($type = null)
    {
        $this->type = ($type InstanceOf ChargingFunctionElementServerType)
             ? $type
             : new ChargingFunctionElementServerType($type);
        $this->type->setElementName('type');
        return $this;
    }

    /**
     * 
     * @return ChargingFunctionElementServerType $type
     */
    public function getType()
    {
        return ($this->type)
            ? $this->type->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setDescription($description = null)
    {
        $this->description = ($description InstanceOf ChargingFunctionElementServerDescription)
             ? $description
             : new ChargingFunctionElementServerDescription($description);
        $this->description->setElementName('description');
        return $this;
    }

    /**
     * 
     * @return ChargingFunctionElementServerDescription $description
     */
    public function getDescription()
    {
        return ($this->description)
            ? $this->description->getElementValue()
            : null;
    }
}
