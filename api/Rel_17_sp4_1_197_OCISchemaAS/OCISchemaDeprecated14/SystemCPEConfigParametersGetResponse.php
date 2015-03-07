<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated14; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem\DeviceManagementFTPFileTransferTimeoutSeconds;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem\DeviceManagementFTPConnectTimeoutSeconds;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Response to SystemCPEConfigParametersGetListRequest.
 *         Contains a list of system CPE Config parameters.
 *         Replaced By: SystemCPEConfigParametersGetResponse14sp6
 */
class SystemCPEConfigParametersGetResponse extends ComplexType implements ComplexInterface
{
    public    $name                           = __CLASS__;
    protected $enableIPDeviceManagement       = null;
    protected $ftpConnectTimeoutSeconds       = null;
    protected $ftpFileTransferTimeoutSeconds  = null;


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
}
