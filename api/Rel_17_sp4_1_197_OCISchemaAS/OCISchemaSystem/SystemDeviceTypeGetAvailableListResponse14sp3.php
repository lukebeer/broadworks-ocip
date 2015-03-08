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
    public    $name       = __CLASS__;
    protected $deviceType = null;
    protected $typeInfo   = null;


    /**
     * Access device type.
     */
    public function setDeviceType($deviceType = null)
    {
        $this->deviceType = ($deviceType InstanceOf AccessDeviceType)
             ? $deviceType
             : new AccessDeviceType($deviceType);
    }

    /**
     * Access device type.
     */
    public function getDeviceType()
    {
        return (!$this->deviceType) ?: $this->deviceType->getValue();
    }

    /**
     * 
     */
    public function setTypeInfo($typeInfo = null)
    {
        $this->typeInfo = $typeInfo;
    }

    /**
     * 
     */
    public function getTypeInfo()
    {
        return (!$this->typeInfo) ?: $this->typeInfo->getValue();
    }
}
