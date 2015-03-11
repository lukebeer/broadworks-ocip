<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem\ChargingFunctionElementServerDescription;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem\ChargingFunctionElementServerType;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem\NetAddressExtended;
use Broadworks_OCIP\core\Builder\Types\PrimitiveType;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Request to add a ChargingFunctionElement Server to the system.
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class SystemAccountingAddChargingFunctionElementServerRequest extends ComplexType implements ComplexInterface
{
    public    $name                 = 'SystemAccountingAddChargingFunctionElementServerRequest';
    protected $address              = null;
    protected $isNetAddressExtended = null;
    protected $type                 = null;
    protected $description          = null;

    public function __construct(
         $address,
         $isNetAddressExtended,
         $type,
         $description = null
    ) {
        $this->setAddress($address);
        $this->setIsNetAddressExtended($isNetAddressExtended);
        $this->setType($type);
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
    public function setAddress($address = null)
    {
        if (!$address) return $this;
        $this->address = ($address InstanceOf NetAddressExtended)
             ? $address
             : new NetAddressExtended($address);
        $this->address->setName('address');
        return $this;
    }

    /**
     * 
     * @return NetAddressExtended
     */
    public function getAddress()
    {
        return $this->address->getValue();
    }

    /**
     * 
     */
    public function setIsNetAddressExtended($isNetAddressExtended = null)
    {
        if (!$isNetAddressExtended) return $this;
        $this->isNetAddressExtended = new PrimitiveType($isNetAddressExtended);
        $this->isNetAddressExtended->setName('isNetAddressExtended');
        return $this;
    }

    /**
     * 
     * @return xs:boolean
     */
    public function getIsNetAddressExtended()
    {
        return $this->isNetAddressExtended->getValue();
    }

    /**
     * 
     */
    public function setType($type = null)
    {
        if (!$type) return $this;
        $this->type = ($type InstanceOf ChargingFunctionElementServerType)
             ? $type
             : new ChargingFunctionElementServerType($type);
        $this->type->setName('type');
        return $this;
    }

    /**
     * 
     * @return ChargingFunctionElementServerType
     */
    public function getType()
    {
        return $this->type->getValue();
    }

    /**
     * 
     */
    public function setDescription($description = null)
    {
        if (!$description) return $this;
        $this->description = ($description InstanceOf ChargingFunctionElementServerDescription)
             ? $description
             : new ChargingFunctionElementServerDescription($description);
        $this->description->setName('description');
        return $this;
    }

    /**
     * 
     * @return ChargingFunctionElementServerDescription
     */
    public function getDescription()
    {
        return $this->description->getValue();
    }
}
