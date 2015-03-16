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
use Broadworks_OCIP\core\Builder\Types\PrimitiveType;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Response to SystemCPEConfigParametersGetListRequest14sp6.
 *         Contains a list of system CPE Config parameters.
 */
class SystemCPEConfigParametersGetResponse14sp6 extends ComplexType implements ComplexInterface
{
    public    $elementName = 'SystemCPEConfigParametersGetResponse14sp6';
    protected $enableIPDeviceManagement;
    protected $ftpConnectTimeoutSeconds;
    protected $ftpFileTransferTimeoutSeconds;
    protected $pauseBetweenFileRebuildMilliseconds;
    protected $maxBusyTimeMinutes;
    protected $deviceAccessAppServerClusterName;

    /**
     * @return \Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem\SystemCPEConfigParametersGetResponse14sp6 $response
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

    /**
     * 
     */
    public function setPauseBetweenFileRebuildMilliseconds($pauseBetweenFileRebuildMilliseconds = null)
    {
        $this->pauseBetweenFileRebuildMilliseconds = ($pauseBetweenFileRebuildMilliseconds InstanceOf DeviceManagementPauseBetweenFileRebuildMilliseconds)
             ? $pauseBetweenFileRebuildMilliseconds
             : new DeviceManagementPauseBetweenFileRebuildMilliseconds($pauseBetweenFileRebuildMilliseconds);
        $this->pauseBetweenFileRebuildMilliseconds->setElementName('pauseBetweenFileRebuildMilliseconds');
        return $this;
    }

    /**
     * 
     * @return DeviceManagementPauseBetweenFileRebuildMilliseconds $pauseBetweenFileRebuildMilliseconds
     */
    public function getPauseBetweenFileRebuildMilliseconds()
    {
        return ($this->pauseBetweenFileRebuildMilliseconds)
            ? $this->pauseBetweenFileRebuildMilliseconds->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setMaxBusyTimeMinutes($maxBusyTimeMinutes = null)
    {
        $this->maxBusyTimeMinutes = ($maxBusyTimeMinutes InstanceOf DeviceManagementMaxBusyTimeMinutes)
             ? $maxBusyTimeMinutes
             : new DeviceManagementMaxBusyTimeMinutes($maxBusyTimeMinutes);
        $this->maxBusyTimeMinutes->setElementName('maxBusyTimeMinutes');
        return $this;
    }

    /**
     * 
     * @return DeviceManagementMaxBusyTimeMinutes $maxBusyTimeMinutes
     */
    public function getMaxBusyTimeMinutes()
    {
        return ($this->maxBusyTimeMinutes)
            ? $this->maxBusyTimeMinutes->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setDeviceAccessAppServerClusterName($deviceAccessAppServerClusterName = null)
    {
        $this->deviceAccessAppServerClusterName = ($deviceAccessAppServerClusterName InstanceOf NetAddress)
             ? $deviceAccessAppServerClusterName
             : new NetAddress($deviceAccessAppServerClusterName);
        $this->deviceAccessAppServerClusterName->setElementName('deviceAccessAppServerClusterName');
        return $this;
    }

    /**
     * 
     * @return NetAddress $deviceAccessAppServerClusterName
     */
    public function getDeviceAccessAppServerClusterName()
    {
        return ($this->deviceAccessAppServerClusterName)
            ? $this->deviceAccessAppServerClusterName->getElementValue()
            : null;
    }
}
