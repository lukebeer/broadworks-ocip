<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\DeviceManagementTagName;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\AccessDeviceName;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Request to delete static configuration tags for a system access device.
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class SystemAccessDeviceCustomTagDeleteListRequest extends ComplexType implements ComplexInterface
{
    public    $name        = __CLASS__;
    protected $deviceName  = null;
    protected $tagName     = null;

    public function __construct(
         $deviceName,
         $tagName = null
    ) {
        $this->setDeviceName($deviceName);
        $this->setTagName($tagName);
    }

    public function setDeviceName($deviceName = null)
    {
        $this->deviceName = ($deviceName InstanceOf AccessDeviceName)
             ? $deviceName
             : new AccessDeviceName($deviceName);
    }

    public function getDeviceName()
    {
        return (!$this->deviceName) ?: $this->deviceName->value();
    }

    public function setTagName($tagName = null)
    {
        $this->tagName = ($tagName InstanceOf DeviceManagementTagName)
             ? $tagName
             : new DeviceManagementTagName($tagName);
    }

    public function getTagName()
    {
        return (!$this->tagName) ?: $this->tagName->value();
    }
}
