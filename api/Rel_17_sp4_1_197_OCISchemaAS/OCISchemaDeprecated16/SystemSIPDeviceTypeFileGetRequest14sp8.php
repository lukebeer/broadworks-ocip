<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated16; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\DeviceManagementFileFormat;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\AccessDeviceType;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
     * Request to get a sip device type file.
 *           The response is either SystemSIPDeviceTypeFileGetResponse14sp8 or ErrorResponse.
 */
class SystemSIPDeviceTypeFileGetRequest14sp8 extends ComplexType implements ComplexInterface
{
    const     RESPONSE_TYPE = 'Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated16\SystemSIPDeviceTypeFileGetResponse14sp8';
    public    $name       = __CLASS__;
    protected $deviceType = null;
    protected $fileFormat = null;

    public function __construct(
         $deviceType,
         $fileFormat
    ) {
        $this->setDeviceType($deviceType);
        $this->setFileFormat($fileFormat);
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
     * The file name format for an access device file managed by the Device Management System on BroadWorks.
     */
    public function setFileFormat($fileFormat = null)
    {
        $this->fileFormat = ($fileFormat InstanceOf DeviceManagementFileFormat)
             ? $fileFormat
             : new DeviceManagementFileFormat($fileFormat);
    }

    /**
     * The file name format for an access device file managed by the Device Management System on BroadWorks.
     */
    public function getFileFormat()
    {
        return (!$this->fileFormat) ?: $this->fileFormat->getValue();
    }
}
