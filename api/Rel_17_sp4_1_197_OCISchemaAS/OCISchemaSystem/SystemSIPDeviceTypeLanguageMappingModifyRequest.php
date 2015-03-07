<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem\DeviceManagementLanguageMapping;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\AccessDeviceType;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Request to modify the device language name that is mapped to a BroadWorks language name. The request can be used to map many languages.
 *         The response is either SuccessResponse or ErrorResponse.
 */
class SystemSIPDeviceTypeLanguageMappingModifyRequest extends ComplexType implements ComplexInterface
{
    public    $name             = __CLASS__;
    protected $deviceType       = null;
    protected $languageMapping  = null;

    public function __construct(
         $deviceType,
         DeviceManagementLanguageMapping $languageMapping = null
    ) {
        $this->setDeviceType($deviceType);
        $this->setLanguageMapping($languageMapping);
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

    public function setLanguageMapping(DeviceManagementLanguageMapping $languageMapping = null)
    {
    }

    public function getLanguageMapping()
    {
        return (!$this->languageMapping) ?: $this->languageMapping->value();
    }
}
