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
    const     RESPONSE_TYPE                  = 'Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated14\SystemCPEConfigParametersGetResponse';
    public    $name                          = __CLASS__;
    protected $enableIPDeviceManagement      = null;
    protected $ftpConnectTimeoutSeconds      = null;
    protected $ftpFileTransferTimeoutSeconds = null;


    /**
     * 
     */
    public function setEnableIPDeviceManagement($enableIPDeviceManagement = null)
    {
        $this->enableIPDeviceManagement = (boolean) $enableIPDeviceManagement;
    }

    /**
     * 
     */
    public function getEnableIPDeviceManagement()
    {
        return (!$this->enableIPDeviceManagement) ?: $this->enableIPDeviceManagement->getValue();
    }

    /**
     * FTP connect timeout in seconds
     */
    public function setFtpConnectTimeoutSeconds($ftpConnectTimeoutSeconds = null)
    {
        $this->ftpConnectTimeoutSeconds = ($ftpConnectTimeoutSeconds InstanceOf DeviceManagementFTPConnectTimeoutSeconds)
             ? $ftpConnectTimeoutSeconds
             : new DeviceManagementFTPConnectTimeoutSeconds($ftpConnectTimeoutSeconds);
    }

    /**
     * FTP connect timeout in seconds
     */
    public function getFtpConnectTimeoutSeconds()
    {
        return (!$this->ftpConnectTimeoutSeconds) ?: $this->ftpConnectTimeoutSeconds->getValue();
    }

    /**
     * FTP file transfer timeout in seconds
     */
    public function setFtpFileTransferTimeoutSeconds($ftpFileTransferTimeoutSeconds = null)
    {
        $this->ftpFileTransferTimeoutSeconds = ($ftpFileTransferTimeoutSeconds InstanceOf DeviceManagementFTPFileTransferTimeoutSeconds)
             ? $ftpFileTransferTimeoutSeconds
             : new DeviceManagementFTPFileTransferTimeoutSeconds($ftpFileTransferTimeoutSeconds);
    }

    /**
     * FTP file transfer timeout in seconds
     */
    public function getFtpFileTransferTimeoutSeconds()
    {
        return (!$this->ftpFileTransferTimeoutSeconds) ?: $this->ftpFileTransferTimeoutSeconds->getValue();
    }
}
