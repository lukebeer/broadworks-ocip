<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated14; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated14\DeviceManagementFileType;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\AccessDeviceType;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
     * Request to delete a sip device type file.
 *             The response is either SuccessResponse or ErrorResponse.
 *             Replaced By: SystemSIPDeviceTypeFileDeleteRequest14sp8
 */
class SystemSIPDeviceTypeFileDeleteRequest extends ComplexType implements ComplexInterface
{
    public    $name       = __CLASS__;
    protected $deviceType = null;
    protected $fileType   = null;

    public function __construct(
         $deviceType,
         $fileType
    ) {
        $this->setDeviceType($deviceType);
        $this->setFileType($fileType);
    }

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
     * A file type (file key) for an access device file managed by the Device Management System on BroadWorks.
     */
    public function setFileType($fileType = null)
    {
        $this->fileType = ($fileType InstanceOf DeviceManagementFileType)
             ? $fileType
             : new DeviceManagementFileType($fileType);
    }

    /**
     * A file type (file key) for an access device file managed by the Device Management System on BroadWorks.
     */
    public function getFileType()
    {
        return (!$this->fileType) ?: $this->fileType->getValue();
    }
}
