<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated16; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\DeviceManagementFileFormat;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\AccessDeviceName;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated16\SystemAccessDeviceFileGetResponse14sp8;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Request to get a device profile file.
 *         The response is either SystemAccessDeviceFileGetResponse14sp8 or ErrorResponse.
 *         Replaced by: SystemAccessDeviceFileGetRequest16sp1
 */
class SystemAccessDeviceFileGetRequest14sp8 extends ComplexType implements ComplexInterface
{
    public    $responseType = 'Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated16\SystemAccessDeviceFileGetResponse14sp8';
    public    $name       = __CLASS__;
    protected $deviceName = null;
    protected $fileFormat = null;

    public function __construct(
         $deviceName,
         $fileFormat
    ) {
        $this->setDeviceName($deviceName);
        $this->setFileFormat($fileFormat);
    }

    /**
     * @return SystemAccessDeviceFileGetResponse14sp8
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * Access device name.
     */
    public function setDeviceName($deviceName = null)
    {
        $this->deviceName = ($deviceName InstanceOf AccessDeviceName)
             ? $deviceName
             : new AccessDeviceName($deviceName);
    }

    /**
     * Access device name.
     */
    public function getDeviceName()
    {
        return (!$this->deviceName) ?: $this->deviceName->getValue();
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
