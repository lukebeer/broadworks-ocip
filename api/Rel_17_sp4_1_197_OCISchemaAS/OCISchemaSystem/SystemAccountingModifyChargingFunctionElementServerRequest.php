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
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Request to modify a ChargingFunctionElementServer in the system.
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class SystemAccountingModifyChargingFunctionElementServerRequest extends ComplexType implements ComplexInterface
{
    public    $name         = __CLASS__;
    protected $address      = null;
    protected $type         = null;
    protected $description  = null;

    public function __construct(
         $address,
         $type = null,
         $description = null
    ) {
        $this->setAddress($address);
        $this->setType($type);
        $this->setDescription($description);
    }

    public function setAddress($address = null)
    {
        $this->address = ($address InstanceOf NetAddressExtended)
             ? $address
             : new NetAddressExtended($address);
    }

    public function getAddress()
    {
        return (!$this->address) ?: $this->address->value();
    }

    public function setType($type = null)
    {
        $this->type = ($type InstanceOf ChargingFunctionElementServerType)
             ? $type
             : new ChargingFunctionElementServerType($type);
    }

    public function getType()
    {
        return (!$this->type) ?: $this->type->value();
    }

    public function setDescription($description = null)
    {
        $this->description = ($description InstanceOf ChargingFunctionElementServerDescription)
             ? $description
             : new ChargingFunctionElementServerDescription($description);
    }

    public function getDescription()
    {
        return (!$this->description) ?: $this->description->value();
    }
}
