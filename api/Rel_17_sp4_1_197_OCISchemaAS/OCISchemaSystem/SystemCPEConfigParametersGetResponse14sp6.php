<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem\DeviceManagementPauseBetweenFileRebuildMilliseconds;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem\DeviceManagementFTPFileTransferTimeoutSeconds;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem\DeviceManagementFTPConnectTimeoutSeconds;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem\DeviceManagementMaxBusyTimeMinutes;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\NetAddress;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Response to SystemCPEConfigParametersGetListRequest14sp6.
 *         Contains a list of system CPE Config parameters.
 */
class SystemCPEConfigParametersGetResponse14sp6 extends ComplexType implements ComplexInterface
{
    public    $name                                 = __CLASS__;
    protected $enableIPDeviceManagement             = null;
    protected $ftpConnectTimeoutSeconds             = null;
    protected $ftpFileTransferTimeoutSeconds        = null;
    protected $pauseBetweenFileRebuildMilliseconds  = null;
    protected $maxBusyTimeMinutes                   = null;
    protected $deviceAccessAppServerClusterName     = null;


    public function setEnableIPDeviceManagement(xs:boolean $enableIPDeviceManagement = null)
    {
    }

    public function getEnableIPDeviceManagement()
    {
        return (!$this->enableIPDeviceManagement) ?: $this->enableIPDeviceManagement->value();
    }

    public function setFtpConnectTimeoutSeconds($ftpConnectTimeoutSeconds = null)
    {
        $this->ftpConnectTimeoutSeconds = ($ftpConnectTimeoutSeconds InstanceOf DeviceManagementFTPConnectTimeoutSeconds)
             ? $ftpConnectTimeoutSeconds
             : new DeviceManagementFTPConnectTimeoutSeconds($ftpConnectTimeoutSeconds);
    }

    public function getFtpConnectTimeoutSeconds()
    {
        return (!$this->ftpConnectTimeoutSeconds) ?: $this->ftpConnectTimeoutSeconds->value();
    }

    public function setFtpFileTransferTimeoutSeconds($ftpFileTransferTimeoutSeconds = null)
    {
        $this->ftpFileTransferTimeoutSeconds = ($ftpFileTransferTimeoutSeconds InstanceOf DeviceManagementFTPFileTransferTimeoutSeconds)
             ? $ftpFileTransferTimeoutSeconds
             : new DeviceManagementFTPFileTransferTimeoutSeconds($ftpFileTransferTimeoutSeconds);
    }

    public function getFtpFileTransferTimeoutSeconds()
    {
        return (!$this->ftpFileTransferTimeoutSeconds) ?: $this->ftpFileTransferTimeoutSeconds->value();
    }

    public function setPauseBetweenFileRebuildMilliseconds($pauseBetweenFileRebuildMilliseconds = null)
    {
        $this->pauseBetweenFileRebuildMilliseconds = ($pauseBetweenFileRebuildMilliseconds InstanceOf DeviceManagementPauseBetweenFileRebuildMilliseconds)
             ? $pauseBetweenFileRebuildMilliseconds
             : new DeviceManagementPauseBetweenFileRebuildMilliseconds($pauseBetweenFileRebuildMilliseconds);
    }

    public function getPauseBetweenFileRebuildMilliseconds()
    {
        return (!$this->pauseBetweenFileRebuildMilliseconds) ?: $this->pauseBetweenFileRebuildMilliseconds->value();
    }

    public function setMaxBusyTimeMinutes($maxBusyTimeMinutes = null)
    {
        $this->maxBusyTimeMinutes = ($maxBusyTimeMinutes InstanceOf DeviceManagementMaxBusyTimeMinutes)
             ? $maxBusyTimeMinutes
             : new DeviceManagementMaxBusyTimeMinutes($maxBusyTimeMinutes);
    }

    public function getMaxBusyTimeMinutes()
    {
        return (!$this->maxBusyTimeMinutes) ?: $this->maxBusyTimeMinutes->value();
    }

    public function setDeviceAccessAppServerClusterName($deviceAccessAppServerClusterName = null)
    {
        $this->deviceAccessAppServerClusterName = ($deviceAccessAppServerClusterName InstanceOf NetAddress)
             ? $deviceAccessAppServerClusterName
             : new NetAddress($deviceAccessAppServerClusterName);
    }

    public function getDeviceAccessAppServerClusterName()
    {
        return (!$this->deviceAccessAppServerClusterName) ?: $this->deviceAccessAppServerClusterName->value();
    }
}
