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
 * Request to set the level of integration that a device type has in relation to BroadWorks services.
 *         The response is either SuccessResponse or ErrorResponse.
 */
class SystemSIPDeviceTypeServiceModifyRequest extends ComplexType implements ComplexInterface
{
    public    $name                          = __CLASS__;
    protected $deviceType                    = null;
    protected $supportsPolycomPhoneServices  = null;

    public function __construct(
         $deviceType,
         $supportsPolycomPhoneServices = null
    ) {
        $this->setDeviceType($deviceType);
        $this->setSupportsPolycomPhoneServices($supportsPolycomPhoneServices);
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

    public function setSupportsPolycomPhoneServices(xs:boolean $supportsPolycomPhoneServices = null)
    {
    }

    public function getSupportsPolycomPhoneServices()
    {
        return (!$this->supportsPolycomPhoneServices) ?: $this->supportsPolycomPhoneServices->value();
    }
}
