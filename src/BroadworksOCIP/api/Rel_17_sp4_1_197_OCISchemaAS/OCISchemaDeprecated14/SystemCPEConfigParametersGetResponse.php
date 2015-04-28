<?php
/**
 * This file is part of http://github.com/LukeBeer/BroadworksOCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated14; 

use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem\DeviceManagementFTPFileTransferTimeoutSeconds;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem\DeviceManagementFTPConnectTimeoutSeconds;
use BroadworksOCIP\Builder\Types\PrimitiveType;
use BroadworksOCIP\Builder\Types\ComplexInterface;
use BroadworksOCIP\Builder\Types\ComplexType;
use BroadworksOCIP\Response\ResponseOutput;
use BroadworksOCIP\Client\Client;


/**
 * Response to SystemCPEConfigParametersGetListRequest.
 *         Contains a list of system CPE Config parameters.
 *         Replaced By: SystemCPEConfigParametersGetResponse14sp6
 */
class SystemCPEConfigParametersGetResponse extends ComplexType implements ComplexInterface
{
    public    $elementName = 'SystemCPEConfigParametersGetResponse';
    protected $enableIPDeviceManagement;
    protected $ftpConnectTimeoutSeconds;
    protected $ftpFileTransferTimeoutSeconds;

    /**
     * @return \BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated14\SystemCPEConfigParametersGetResponse $response
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
        $this->enableIPDeviceManagement->setElementName('enableIPDeviceManagement');
        return $this;
    }

    /**
     * 
     * @return boolean $enableIPDeviceManagement
     */
    public function getEnableIPDeviceManagement()
    {
        return ($this->enableIPDeviceManagement)
            ? $this->enableIPDeviceManagement->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setFtpConnectTimeoutSeconds($ftpConnectTimeoutSeconds = null)
    {
        $this->ftpConnectTimeoutSeconds = ($ftpConnectTimeoutSeconds InstanceOf DeviceManagementFTPConnectTimeoutSeconds)
             ? $ftpConnectTimeoutSeconds
             : new DeviceManagementFTPConnectTimeoutSeconds($ftpConnectTimeoutSeconds);
        $this->ftpConnectTimeoutSeconds->setElementName('ftpConnectTimeoutSeconds');
        return $this;
    }

    /**
     * 
     * @return DeviceManagementFTPConnectTimeoutSeconds $ftpConnectTimeoutSeconds
     */
    public function getFtpConnectTimeoutSeconds()
    {
        return ($this->ftpConnectTimeoutSeconds)
            ? $this->ftpConnectTimeoutSeconds->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setFtpFileTransferTimeoutSeconds($ftpFileTransferTimeoutSeconds = null)
    {
        $this->ftpFileTransferTimeoutSeconds = ($ftpFileTransferTimeoutSeconds InstanceOf DeviceManagementFTPFileTransferTimeoutSeconds)
             ? $ftpFileTransferTimeoutSeconds
             : new DeviceManagementFTPFileTransferTimeoutSeconds($ftpFileTransferTimeoutSeconds);
        $this->ftpFileTransferTimeoutSeconds->setElementName('ftpFileTransferTimeoutSeconds');
        return $this;
    }

    /**
     * 
     * @return DeviceManagementFTPFileTransferTimeoutSeconds $ftpFileTransferTimeoutSeconds
     */
    public function getFtpFileTransferTimeoutSeconds()
    {
        return ($this->ftpFileTransferTimeoutSeconds)
            ? $this->ftpFileTransferTimeoutSeconds->getElementValue()
            : null;
    }
}
