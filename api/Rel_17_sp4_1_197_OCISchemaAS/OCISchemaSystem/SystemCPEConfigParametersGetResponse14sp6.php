<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\xs:boolean;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\DeviceManagementFTPConnectTimeoutSeconds;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\DeviceManagementFTPFileTransferTimeoutSeconds;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\DeviceManagementPauseBetweenFileRebuildMilliseconds;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\DeviceManagementMaxBusyTimeMinutes;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\NetAddress;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Response to SystemCPEConfigParametersGetListRequest14sp6.
 *         Contains a list of system CPE Config parameters.
 */
class SystemCPEConfigParametersGetResponse14sp6 extends ComplexType implements ComplexInterface
{
    public    $name = __CLASS__;

    public function __construct(
             $enableIPDeviceManagement,
             $ftpConnectTimeoutSeconds,
             $ftpFileTransferTimeoutSeconds,
             $pauseBetweenFileRebuildMilliseconds,
             $maxBusyTimeMinutes,
             $deviceAccessAppServerClusterName=null
    ) {
        $this->enableIPDeviceManagement            = $enableIPDeviceManagement;
        $this->ftpConnectTimeoutSeconds            = $ftpConnectTimeoutSeconds;
        $this->ftpFileTransferTimeoutSeconds       = $ftpFileTransferTimeoutSeconds;
        $this->pauseBetweenFileRebuildMilliseconds = $pauseBetweenFileRebuildMilliseconds;
        $this->maxBusyTimeMinutes                  = $maxBusyTimeMinutes;
        $this->deviceAccessAppServerClusterName    = new NetAddress($deviceAccessAppServerClusterName);
        $this->args                                = func_get_args();
    }

    public function setEnableIPDeviceManagement($enableIPDeviceManagement)
    {
        $enableIPDeviceManagement and $this->enableIPDeviceManagement = new xs:boolean($enableIPDeviceManagement);
    }

    public function getEnableIPDeviceManagement()
    {
        return (!$this->enableIPDeviceManagement) ?: $this->enableIPDeviceManagement->value();
    }

    public function setFtpConnectTimeoutSeconds($ftpConnectTimeoutSeconds)
    {
        $ftpConnectTimeoutSeconds and $this->ftpConnectTimeoutSeconds = new DeviceManagementFTPConnectTimeoutSeconds($ftpConnectTimeoutSeconds);
    }

    public function getFtpConnectTimeoutSeconds()
    {
        return (!$this->ftpConnectTimeoutSeconds) ?: $this->ftpConnectTimeoutSeconds->value();
    }

    public function setFtpFileTransferTimeoutSeconds($ftpFileTransferTimeoutSeconds)
    {
        $ftpFileTransferTimeoutSeconds and $this->ftpFileTransferTimeoutSeconds = new DeviceManagementFTPFileTransferTimeoutSeconds($ftpFileTransferTimeoutSeconds);
    }

    public function getFtpFileTransferTimeoutSeconds()
    {
        return (!$this->ftpFileTransferTimeoutSeconds) ?: $this->ftpFileTransferTimeoutSeconds->value();
    }

    public function setPauseBetweenFileRebuildMilliseconds($pauseBetweenFileRebuildMilliseconds)
    {
        $pauseBetweenFileRebuildMilliseconds and $this->pauseBetweenFileRebuildMilliseconds = new DeviceManagementPauseBetweenFileRebuildMilliseconds($pauseBetweenFileRebuildMilliseconds);
    }

    public function getPauseBetweenFileRebuildMilliseconds()
    {
        return (!$this->pauseBetweenFileRebuildMilliseconds) ?: $this->pauseBetweenFileRebuildMilliseconds->value();
    }

    public function setMaxBusyTimeMinutes($maxBusyTimeMinutes)
    {
        $maxBusyTimeMinutes and $this->maxBusyTimeMinutes = new DeviceManagementMaxBusyTimeMinutes($maxBusyTimeMinutes);
    }

    public function getMaxBusyTimeMinutes()
    {
        return (!$this->maxBusyTimeMinutes) ?: $this->maxBusyTimeMinutes->value();
    }

    public function setDeviceAccessAppServerClusterName($deviceAccessAppServerClusterName)
    {
        $deviceAccessAppServerClusterName and $this->deviceAccessAppServerClusterName = new NetAddress($deviceAccessAppServerClusterName);
    }

    public function getDeviceAccessAppServerClusterName()
    {
        return (!$this->deviceAccessAppServerClusterName) ?: $this->deviceAccessAppServerClusterName->value();
    }
}
