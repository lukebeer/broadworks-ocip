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
 * Request to get the list of device files managed by the Device Management System, on a per-device type basis.
 *         The response is either SystemSIPDeviceTypeFileGetListResponse14sp8 or ErrorResponse.
 */
class SystemSIPDeviceTypeFileGetListRequest14sp8 extends ComplexType implements ComplexInterface
{
    public    $name        = __CLASS__;
    protected $deviceType  = null;

    public function __construct(
         $deviceType
    ) {
        $this->setDeviceType($deviceType);
    }

    public function setDeviceType($deviceType = null)
    {
        $this->deviceType = ($deviceType InstanceOf AccessDeviceType)
             ? $deviceType
             : new AccessDeviceType($deviceType);
    }

    public function getDeviceType()
    {
        return (!$this->deviceType) ?: $this->deviceType->value();
    }
}
