<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated14; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem\DeviceManagementFTPFileTransferTimeoutSeconds;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem\DeviceManagementFTPConnectTimeoutSeconds;
use Broadworks_OCIP\core\Builder\Types\PrimitiveType;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Response to SystemCPEConfigParametersGetListRequest.
 *         Contains a list of system CPE Config parameters.
 *         Replaced By: SystemCPEConfigParametersGetResponse14sp6
 */
class SystemCPEConfigParametersGetResponse extends ComplexType implements ComplexInterface
{
    public    $name = 'SystemCPEConfigParametersGetResponse';
    protected $enableIPDeviceManagement;
    protected $ftpConnectTimeoutSeconds;
    protected $ftpFileTransferTimeoutSeconds;

    /**
     * @return \Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated14\SystemCPEConfigParametersGetResponse $response
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * 
     */
    public function setEnableIPDeviceManagement($enableIPDeviceManagement = null)
    {
        $this->enableIPDeviceManagement = new PrimitiveType($enableIPDeviceManagement);
        $this->enableIPDeviceManagement->setName('enableIPDeviceManagement');
        return $this;
    }

    /**
     * 
     * @return boolean $enableIPDeviceManagement
     */
    public function getEnableIPDeviceManagement()
    {
        return ($this->enableIPDeviceManagement) ? $this->enableIPDeviceManagement->getValue() : null;
    }

    /**
     * 
     */
    public function setFtpConnectTimeoutSeconds($ftpConnectTimeoutSeconds = null)
    {
        $this->ftpConnectTimeoutSeconds = ($ftpConnectTimeoutSeconds InstanceOf DeviceManagementFTPConnectTimeoutSeconds)
             ? $ftpConnectTimeoutSeconds
             : new DeviceManagementFTPConnectTimeoutSeconds($ftpConnectTimeoutSeconds);
        $this->ftpConnectTimeoutSeconds->setName('ftpConnectTimeoutSeconds');
        return $this;
    }

    /**
     * 
     * @return DeviceManagementFTPConnectTimeoutSeconds $ftpConnectTimeoutSeconds
     */
    public function getFtpConnectTimeoutSeconds()
    {
        return ($this->ftpConnectTimeoutSeconds) ? $this->ftpConnectTimeoutSeconds->getValue() : null;
    }

    /**
     * 
     */
    public function setFtpFileTransferTimeoutSeconds($ftpFileTransferTimeoutSeconds = null)
    {
        $this->ftpFileTransferTimeoutSeconds = ($ftpFileTransferTimeoutSeconds InstanceOf DeviceManagementFTPFileTransferTimeoutSeconds)
             ? $ftpFileTransferTimeoutSeconds
             : new DeviceManagementFTPFileTransferTimeoutSeconds($ftpFileTransferTimeoutSeconds);
        $this->ftpFileTransferTimeoutSeconds->setName('ftpFileTransferTimeoutSeconds');
        return $this;
    }

    /**
     * 
     * @return DeviceManagementFTPFileTransferTimeoutSeconds $ftpFileTransferTimeoutSeconds
     */
    public function getFtpFileTransferTimeoutSeconds()
    {
        return ($this->ftpFileTransferTimeoutSeconds) ? $this->ftpFileTransferTimeoutSeconds->getValue() : null;
    }
}
