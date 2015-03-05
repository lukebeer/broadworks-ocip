<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\AccessDeviceType;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Response to SystemDeviceTypeGetAvailableListRequest14sp3.
 */
class SystemDeviceTypeGetAvailableListResponse14sp3 extends ComplexType implements ComplexInterface
{
    public    $name = __CLASS__;

    public function __construct(
             $deviceType=null,
             $typeInfo=null
    ) {
        $this->deviceType = new AccessDeviceType($deviceType);
        $this->typeInfo   = $typeInfo;
        $this->args       = func_get_args();
    }

    public function setDeviceType($deviceType)
    {
        $deviceType and $this->deviceType = new AccessDeviceType($deviceType);
    }

    public function getDeviceType()
    {
        return (!$this->deviceType) ?: $this->deviceType->value();
    }

    public function setTypeInfo($typeInfo)
    {
        $typeInfo and $this->typeInfo = new ($typeInfo);
    }

    public function getTypeInfo()
    {
        return (!$this->typeInfo) ?: $this->typeInfo->value();
    }
}
