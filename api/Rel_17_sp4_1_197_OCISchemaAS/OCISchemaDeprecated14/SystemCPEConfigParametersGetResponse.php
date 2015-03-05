<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated14; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\xs:boolean;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\DeviceManagementFTPConnectTimeoutSeconds;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\DeviceManagementFTPFileTransferTimeoutSeconds;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Response to SystemCPEConfigParametersGetListRequest.
 *         Contains a list of system CPE Config parameters.
 *         Replaced By: SystemCPEConfigParametersGetResponse14sp6
 */
class SystemCPEConfigParametersGetResponse extends ComplexType implements ComplexInterface
{
    public    $name = __CLASS__;

    public function __construct(
             $enableIPDeviceManagement,
             $ftpConnectTimeoutSeconds,
             $ftpFileTransferTimeoutSeconds
    ) {
        $this->enableIPDeviceManagement      = $enableIPDeviceManagement;
        $this->ftpConnectTimeoutSeconds      = $ftpConnectTimeoutSeconds;
        $this->ftpFileTransferTimeoutSeconds = $ftpFileTransferTimeoutSeconds;
        $this->args                          = func_get_args();
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
}
