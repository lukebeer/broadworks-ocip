<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaGroup; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\AccessDeviceEnhancedConfigurationMode;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\MobilityManagerProvisioningUserName;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\MobilityManagerProvisioningPassword;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\DeviceManagementUserNamePassword16;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\AccessDevicePhysicalLocation;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\MobilityManagerServiceKey;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\AccessDeviceSerialNumber;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\AccessDeviceDescription;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\AccessDeviceMACAddress;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\AccessDeviceProtocol;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\TransportProtocol;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ServiceProviderId;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\AccessDeviceName;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\FileResource;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\NetAddress;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\Port1025;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\GroupId;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\URL;
use Broadworks_OCIP\core\Builder\Types\PrimitiveType;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Request to modify a specified group access device.
 *         The response is either SuccessResponse or ErrorResponse.
 */
class GroupAccessDeviceModifyRequest14 extends ComplexType implements ComplexInterface
{
    public    $name                                        = 'GroupAccessDeviceModifyRequest14';
    protected $serviceProviderId                           = null;
    protected $groupId                                     = null;
    protected $deviceName                                  = null;
    protected $protocol                                    = null;
    protected $netAddress                                  = null;
    protected $port                                        = null;
    protected $outboundProxyServerNetAddress               = null;
    protected $stunServerNetAddress                        = null;
    protected $macAddress                                  = null;
    protected $serialNumber                                = null;
    protected $description                                 = null;
    protected $configurationMode                           = null;
    protected $configurationFile                           = null;
    protected $physicalLocation                            = null;
    protected $transportProtocol                           = null;
    protected $mobilityManagerProvisioningURL              = null;
    protected $mobilityManagerProvisioningUserName         = null;
    protected $mobilityManagerProvisioningPassword         = null;
    protected $mobilityManagerDefaultOriginatingServiceKey = null;
    protected $mobilityManagerDefaultTerminatingServiceKey = null;
    protected $useCustomUserNamePassword                   = null;
    protected $accessDeviceCredentials                     = null;

    public function __construct(
         $serviceProviderId,
         $groupId,
         $deviceName,
         $protocol = null,
         $netAddress = null,
         $port = null,
         $outboundProxyServerNetAddress = null,
         $stunServerNetAddress = null,
         $macAddress = null,
         $serialNumber = null,
         $description = null,
         $configurationMode = null,
         FileResource $configurationFile = null,
         $physicalLocation = null,
         $transportProtocol = null,
         $mobilityManagerProvisioningURL = null,
         $mobilityManagerProvisioningUserName = null,
         $mobilityManagerProvisioningPassword = null,
         $mobilityManagerDefaultOriginatingServiceKey = null,
         $mobilityManagerDefaultTerminatingServiceKey = null,
         $useCustomUserNamePassword = null,
         DeviceManagementUserNamePassword16 $accessDeviceCredentials = null
    ) {
        $this->setServiceProviderId($serviceProviderId);
        $this->setGroupId($groupId);
        $this->setDeviceName($deviceName);
        $this->setProtocol($protocol);
        $this->setNetAddress($netAddress);
        $this->setPort($port);
        $this->setOutboundProxyServerNetAddress($outboundProxyServerNetAddress);
        $this->setStunServerNetAddress($stunServerNetAddress);
        $this->setMacAddress($macAddress);
        $this->setSerialNumber($serialNumber);
        $this->setDescription($description);
        $this->setConfigurationMode($configurationMode);
        $this->setConfigurationFile($configurationFile);
        $this->setPhysicalLocation($physicalLocation);
        $this->setTransportProtocol($transportProtocol);
        $this->setMobilityManagerProvisioningURL($mobilityManagerProvisioningURL);
        $this->setMobilityManagerProvisioningUserName($mobilityManagerProvisioningUserName);
        $this->setMobilityManagerProvisioningPassword($mobilityManagerProvisioningPassword);
        $this->setMobilityManagerDefaultOriginatingServiceKey($mobilityManagerDefaultOriginatingServiceKey);
        $this->setMobilityManagerDefaultTerminatingServiceKey($mobilityManagerDefaultTerminatingServiceKey);
        $this->setUseCustomUserNamePassword($useCustomUserNamePassword);
        $this->setAccessDeviceCredentials($accessDeviceCredentials);
    }

    /**
     * @return mixed $response
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * 
     */
    public function setServiceProviderId($serviceProviderId = null)
    {
        if (!$serviceProviderId) return $this;
        $this->serviceProviderId = ($serviceProviderId InstanceOf ServiceProviderId)
             ? $serviceProviderId
             : new ServiceProviderId($serviceProviderId);
        $this->serviceProviderId->setName('serviceProviderId');
        return $this;
    }

    /**
     * 
     * @return ServiceProviderId $serviceProviderId
     */
    public function getServiceProviderId()
    {
        return $this->serviceProviderId->getValue();
    }

    /**
     * 
     */
    public function setGroupId($groupId = null)
    {
        if (!$groupId) return $this;
        $this->groupId = ($groupId InstanceOf GroupId)
             ? $groupId
             : new GroupId($groupId);
        $this->groupId->setName('groupId');
        return $this;
    }

    /**
     * 
     * @return GroupId $groupId
     */
    public function getGroupId()
    {
        return $this->groupId->getValue();
    }

    /**
     * 
     */
    public function setDeviceName($deviceName = null)
    {
        if (!$deviceName) return $this;
        $this->deviceName = ($deviceName InstanceOf AccessDeviceName)
             ? $deviceName
             : new AccessDeviceName($deviceName);
        $this->deviceName->setName('deviceName');
        return $this;
    }

    /**
     * 
     * @return AccessDeviceName $deviceName
     */
    public function getDeviceName()
    {
        return $this->deviceName->getValue();
    }

    /**
     * 
     */
    public function setProtocol($protocol = null)
    {
        if (!$protocol) return $this;
        $this->protocol = ($protocol InstanceOf AccessDeviceProtocol)
             ? $protocol
             : new AccessDeviceProtocol($protocol);
        $this->protocol->setName('protocol');
        return $this;
    }

    /**
     * 
     * @return AccessDeviceProtocol $protocol
     */
    public function getProtocol()
    {
        return $this->protocol->getValue();
    }

    /**
     * 
     */
    public function setNetAddress($netAddress = null)
    {
        if (!$netAddress) return $this;
        $this->netAddress = ($netAddress InstanceOf NetAddress)
             ? $netAddress
             : new NetAddress($netAddress);
        $this->netAddress->setName('netAddress');
        return $this;
    }

    /**
     * 
     * @return NetAddress $netAddress
     */
    public function getNetAddress()
    {
        return $this->netAddress->getValue();
    }

    /**
     * 
     */
    public function setPort($port = null)
    {
        if (!$port) return $this;
        $this->port = ($port InstanceOf Port1025)
             ? $port
             : new Port1025($port);
        $this->port->setName('port');
        return $this;
    }

    /**
     * 
     * @return Port1025 $port
     */
    public function getPort()
    {
        return $this->port->getValue();
    }

    /**
     * 
     */
    public function setOutboundProxyServerNetAddress($outboundProxyServerNetAddress = null)
    {
        if (!$outboundProxyServerNetAddress) return $this;
        $this->outboundProxyServerNetAddress = ($outboundProxyServerNetAddress InstanceOf NetAddress)
             ? $outboundProxyServerNetAddress
             : new NetAddress($outboundProxyServerNetAddress);
        $this->outboundProxyServerNetAddress->setName('outboundProxyServerNetAddress');
        return $this;
    }

    /**
     * 
     * @return NetAddress $outboundProxyServerNetAddress
     */
    public function getOutboundProxyServerNetAddress()
    {
        return $this->outboundProxyServerNetAddress->getValue();
    }

    /**
     * 
     */
    public function setStunServerNetAddress($stunServerNetAddress = null)
    {
        if (!$stunServerNetAddress) return $this;
        $this->stunServerNetAddress = ($stunServerNetAddress InstanceOf NetAddress)
             ? $stunServerNetAddress
             : new NetAddress($stunServerNetAddress);
        $this->stunServerNetAddress->setName('stunServerNetAddress');
        return $this;
    }

    /**
     * 
     * @return NetAddress $stunServerNetAddress
     */
    public function getStunServerNetAddress()
    {
        return $this->stunServerNetAddress->getValue();
    }

    /**
     * 
     */
    public function setMacAddress($macAddress = null)
    {
        if (!$macAddress) return $this;
        $this->macAddress = ($macAddress InstanceOf AccessDeviceMACAddress)
             ? $macAddress
             : new AccessDeviceMACAddress($macAddress);
        $this->macAddress->setName('macAddress');
        return $this;
    }

    /**
     * 
     * @return AccessDeviceMACAddress $macAddress
     */
    public function getMacAddress()
    {
        return $this->macAddress->getValue();
    }

    /**
     * 
     */
    public function setSerialNumber($serialNumber = null)
    {
        if (!$serialNumber) return $this;
        $this->serialNumber = ($serialNumber InstanceOf AccessDeviceSerialNumber)
             ? $serialNumber
             : new AccessDeviceSerialNumber($serialNumber);
        $this->serialNumber->setName('serialNumber');
        return $this;
    }

    /**
     * 
     * @return AccessDeviceSerialNumber $serialNumber
     */
    public function getSerialNumber()
    {
        return $this->serialNumber->getValue();
    }

    /**
     * 
     */
    public function setDescription($description = null)
    {
        if (!$description) return $this;
        $this->description = ($description InstanceOf AccessDeviceDescription)
             ? $description
             : new AccessDeviceDescription($description);
        $this->description->setName('description');
        return $this;
    }

    /**
     * 
     * @return AccessDeviceDescription $description
     */
    public function getDescription()
    {
        return $this->description->getValue();
    }

    /**
     * 
     */
    public function setConfigurationMode($configurationMode = null)
    {
        if (!$configurationMode) return $this;
        $this->configurationMode = ($configurationMode InstanceOf AccessDeviceEnhancedConfigurationMode)
             ? $configurationMode
             : new AccessDeviceEnhancedConfigurationMode($configurationMode);
        $this->configurationMode->setName('configurationMode');
        return $this;
    }

    /**
     * 
     * @return AccessDeviceEnhancedConfigurationMode $configurationMode
     */
    public function getConfigurationMode()
    {
        return $this->configurationMode->getValue();
    }

    /**
     * 
     */
    public function setConfigurationFile(FileResource $configurationFile = null)
    {
        if (!$configurationFile) return $this;
        $this->configurationFile = $configurationFile;
        $this->configurationFile->setName('configurationFile');
        return $this;
    }

    /**
     * 
     * @return FileResource $configurationFile
     */
    public function getConfigurationFile()
    {
        return $this->configurationFile;
    }

    /**
     * 
     */
    public function setPhysicalLocation($physicalLocation = null)
    {
        if (!$physicalLocation) return $this;
        $this->physicalLocation = ($physicalLocation InstanceOf AccessDevicePhysicalLocation)
             ? $physicalLocation
             : new AccessDevicePhysicalLocation($physicalLocation);
        $this->physicalLocation->setName('physicalLocation');
        return $this;
    }

    /**
     * 
     * @return AccessDevicePhysicalLocation $physicalLocation
     */
    public function getPhysicalLocation()
    {
        return $this->physicalLocation->getValue();
    }

    /**
     * 
     */
    public function setTransportProtocol($transportProtocol = null)
    {
        if (!$transportProtocol) return $this;
        $this->transportProtocol = ($transportProtocol InstanceOf TransportProtocol)
             ? $transportProtocol
             : new TransportProtocol($transportProtocol);
        $this->transportProtocol->setName('transportProtocol');
        return $this;
    }

    /**
     * 
     * @return TransportProtocol $transportProtocol
     */
    public function getTransportProtocol()
    {
        return $this->transportProtocol->getValue();
    }

    /**
     * 
     */
    public function setMobilityManagerProvisioningURL($mobilityManagerProvisioningURL = null)
    {
        if (!$mobilityManagerProvisioningURL) return $this;
        $this->mobilityManagerProvisioningURL = ($mobilityManagerProvisioningURL InstanceOf URL)
             ? $mobilityManagerProvisioningURL
             : new URL($mobilityManagerProvisioningURL);
        $this->mobilityManagerProvisioningURL->setName('mobilityManagerProvisioningURL');
        return $this;
    }

    /**
     * 
     * @return URL $mobilityManagerProvisioningURL
     */
    public function getMobilityManagerProvisioningURL()
    {
        return $this->mobilityManagerProvisioningURL->getValue();
    }

    /**
     * 
     */
    public function setMobilityManagerProvisioningUserName($mobilityManagerProvisioningUserName = null)
    {
        if (!$mobilityManagerProvisioningUserName) return $this;
        $this->mobilityManagerProvisioningUserName = ($mobilityManagerProvisioningUserName InstanceOf MobilityManagerProvisioningUserName)
             ? $mobilityManagerProvisioningUserName
             : new MobilityManagerProvisioningUserName($mobilityManagerProvisioningUserName);
        $this->mobilityManagerProvisioningUserName->setName('mobilityManagerProvisioningUserName');
        return $this;
    }

    /**
     * 
     * @return MobilityManagerProvisioningUserName $mobilityManagerProvisioningUserName
     */
    public function getMobilityManagerProvisioningUserName()
    {
        return $this->mobilityManagerProvisioningUserName->getValue();
    }

    /**
     * 
     */
    public function setMobilityManagerProvisioningPassword($mobilityManagerProvisioningPassword = null)
    {
        if (!$mobilityManagerProvisioningPassword) return $this;
        $this->mobilityManagerProvisioningPassword = ($mobilityManagerProvisioningPassword InstanceOf MobilityManagerProvisioningPassword)
             ? $mobilityManagerProvisioningPassword
             : new MobilityManagerProvisioningPassword($mobilityManagerProvisioningPassword);
        $this->mobilityManagerProvisioningPassword->setName('mobilityManagerProvisioningPassword');
        return $this;
    }

    /**
     * 
     * @return MobilityManagerProvisioningPassword $mobilityManagerProvisioningPassword
     */
    public function getMobilityManagerProvisioningPassword()
    {
        return $this->mobilityManagerProvisioningPassword->getValue();
    }

    /**
     * 
     */
    public function setMobilityManagerDefaultOriginatingServiceKey($mobilityManagerDefaultOriginatingServiceKey = null)
    {
        if (!$mobilityManagerDefaultOriginatingServiceKey) return $this;
        $this->mobilityManagerDefaultOriginatingServiceKey = ($mobilityManagerDefaultOriginatingServiceKey InstanceOf MobilityManagerServiceKey)
             ? $mobilityManagerDefaultOriginatingServiceKey
             : new MobilityManagerServiceKey($mobilityManagerDefaultOriginatingServiceKey);
        $this->mobilityManagerDefaultOriginatingServiceKey->setName('mobilityManagerDefaultOriginatingServiceKey');
        return $this;
    }

    /**
     * 
     * @return MobilityManagerServiceKey $mobilityManagerDefaultOriginatingServiceKey
     */
    public function getMobilityManagerDefaultOriginatingServiceKey()
    {
        return $this->mobilityManagerDefaultOriginatingServiceKey->getValue();
    }

    /**
     * 
     */
    public function setMobilityManagerDefaultTerminatingServiceKey($mobilityManagerDefaultTerminatingServiceKey = null)
    {
        if (!$mobilityManagerDefaultTerminatingServiceKey) return $this;
        $this->mobilityManagerDefaultTerminatingServiceKey = ($mobilityManagerDefaultTerminatingServiceKey InstanceOf MobilityManagerServiceKey)
             ? $mobilityManagerDefaultTerminatingServiceKey
             : new MobilityManagerServiceKey($mobilityManagerDefaultTerminatingServiceKey);
        $this->mobilityManagerDefaultTerminatingServiceKey->setName('mobilityManagerDefaultTerminatingServiceKey');
        return $this;
    }

    /**
     * 
     * @return MobilityManagerServiceKey $mobilityManagerDefaultTerminatingServiceKey
     */
    public function getMobilityManagerDefaultTerminatingServiceKey()
    {
        return $this->mobilityManagerDefaultTerminatingServiceKey->getValue();
    }

    /**
     * 
     */
    public function setUseCustomUserNamePassword($useCustomUserNamePassword = null)
    {
        if (!$useCustomUserNamePassword) return $this;
        $this->useCustomUserNamePassword = new PrimitiveType($useCustomUserNamePassword);
        $this->useCustomUserNamePassword->setName('useCustomUserNamePassword');
        return $this;
    }

    /**
     * 
     * @return boolean $useCustomUserNamePassword
     */
    public function getUseCustomUserNamePassword()
    {
        return $this->useCustomUserNamePassword->getValue();
    }

    /**
     * 
     */
    public function setAccessDeviceCredentials(DeviceManagementUserNamePassword16 $accessDeviceCredentials = null)
    {
        if (!$accessDeviceCredentials) return $this;
        $this->accessDeviceCredentials = $accessDeviceCredentials;
        $this->accessDeviceCredentials->setName('accessDeviceCredentials');
        return $this;
    }

    /**
     * 
     * @return DeviceManagementUserNamePassword16 $accessDeviceCredentials
     */
    public function getAccessDeviceCredentials()
    {
        return $this->accessDeviceCredentials;
    }
}
