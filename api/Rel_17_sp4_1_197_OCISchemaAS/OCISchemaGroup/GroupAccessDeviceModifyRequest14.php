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
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ServiceProviderId;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\TransportProtocol;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\AccessDeviceName;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\FileResource;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\NetAddress;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\Port1025;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\GroupId;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\URL;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
     * Request to modify a specified group access device.
 *         The response is either SuccessResponse or ErrorResponse.
 */
class GroupAccessDeviceModifyRequest14 extends ComplexType implements ComplexInterface
{
    public    $name                                        = __CLASS__;
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
     * Service Provider Id uniquely identifies a service provider.
     *         NOTE: The service provider id has a maximum length of 30 bytes, not 30 characters.
     */
    public function setServiceProviderId($serviceProviderId = null)
    {
        $this->serviceProviderId = ($serviceProviderId InstanceOf ServiceProviderId)
             ? $serviceProviderId
             : new ServiceProviderId($serviceProviderId);
    }

    /**
     * Service Provider Id uniquely identifies a service provider.
     *         NOTE: The service provider id has a maximum length of 30 bytes, not 30 characters.
     */
    public function getServiceProviderId()
    {
        return (!$this->serviceProviderId) ?: $this->serviceProviderId->getValue();
    }

    /**
     * Group Id identifies a group within a service provider or enterprise. The group id is not
     *         unique system wide. It must be combined with a service provider id to be unique across the system.
     */
    public function setGroupId($groupId = null)
    {
        $this->groupId = ($groupId InstanceOf GroupId)
             ? $groupId
             : new GroupId($groupId);
    }

    /**
     * Group Id identifies a group within a service provider or enterprise. The group id is not
     *         unique system wide. It must be combined with a service provider id to be unique across the system.
     */
    public function getGroupId()
    {
        return (!$this->groupId) ?: $this->groupId->getValue();
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
     * Access device protocol.
     */
    public function setProtocol($protocol = null)
    {
        $this->protocol = ($protocol InstanceOf AccessDeviceProtocol)
             ? $protocol
             : new AccessDeviceProtocol($protocol);
    }

    /**
     * Access device protocol.
     */
    public function getProtocol()
    {
        return (!$this->protocol) ?: $this->protocol->getValue();
    }

    /**
     * IP Address, hostname, or domain.
     */
    public function setNetAddress($netAddress = null)
    {
        $this->netAddress = ($netAddress InstanceOf NetAddress)
             ? $netAddress
             : new NetAddress($netAddress);
    }

    /**
     * IP Address, hostname, or domain.
     */
    public function getNetAddress()
    {
        return (!$this->netAddress) ?: $this->netAddress->getValue();
    }

    /**
     * TCP/IP Port number above the well-known range.
     */
    public function setPort($port = null)
    {
        $this->port = ($port InstanceOf Port1025)
             ? $port
             : new Port1025($port);
    }

    /**
     * TCP/IP Port number above the well-known range.
     */
    public function getPort()
    {
        return (!$this->port) ?: $this->port->getValue();
    }

    /**
     * IP Address, hostname, or domain.
     */
    public function setOutboundProxyServerNetAddress($outboundProxyServerNetAddress = null)
    {
        $this->outboundProxyServerNetAddress = ($outboundProxyServerNetAddress InstanceOf NetAddress)
             ? $outboundProxyServerNetAddress
             : new NetAddress($outboundProxyServerNetAddress);
    }

    /**
     * IP Address, hostname, or domain.
     */
    public function getOutboundProxyServerNetAddress()
    {
        return (!$this->outboundProxyServerNetAddress) ?: $this->outboundProxyServerNetAddress->getValue();
    }

    /**
     * IP Address, hostname, or domain.
     */
    public function setStunServerNetAddress($stunServerNetAddress = null)
    {
        $this->stunServerNetAddress = ($stunServerNetAddress InstanceOf NetAddress)
             ? $stunServerNetAddress
             : new NetAddress($stunServerNetAddress);
    }

    /**
     * IP Address, hostname, or domain.
     */
    public function getStunServerNetAddress()
    {
        return (!$this->stunServerNetAddress) ?: $this->stunServerNetAddress->getValue();
    }

    /**
     * Access device MAC address.
     */
    public function setMacAddress($macAddress = null)
    {
        $this->macAddress = ($macAddress InstanceOf AccessDeviceMACAddress)
             ? $macAddress
             : new AccessDeviceMACAddress($macAddress);
    }

    /**
     * Access device MAC address.
     */
    public function getMacAddress()
    {
        return (!$this->macAddress) ?: $this->macAddress->getValue();
    }

    /**
     * Access device serial number.
     */
    public function setSerialNumber($serialNumber = null)
    {
        $this->serialNumber = ($serialNumber InstanceOf AccessDeviceSerialNumber)
             ? $serialNumber
             : new AccessDeviceSerialNumber($serialNumber);
    }

    /**
     * Access device serial number.
     */
    public function getSerialNumber()
    {
        return (!$this->serialNumber) ?: $this->serialNumber->getValue();
    }

    /**
     * Access device description.
     */
    public function setDescription($description = null)
    {
        $this->description = ($description InstanceOf AccessDeviceDescription)
             ? $description
             : new AccessDeviceDescription($description);
    }

    /**
     * Access device description.
     */
    public function getDescription()
    {
        return (!$this->description) ?: $this->description->getValue();
    }

    /**
     * Choices for the access device configuration mode.
     */
    public function setConfigurationMode($configurationMode = null)
    {
        $this->configurationMode = ($configurationMode InstanceOf AccessDeviceEnhancedConfigurationMode)
             ? $configurationMode
             : new AccessDeviceEnhancedConfigurationMode($configurationMode);
    }

    /**
     * Choices for the access device configuration mode.
     */
    public function getConfigurationMode()
    {
        return (!$this->configurationMode) ?: $this->configurationMode->getValue();
    }

    /**
     * Represents either an existing file for the application server to use, or
     *         the contents of a file to transfer.
     */
    public function setConfigurationFile(FileResource $configurationFile = null)
    {
        $this->configurationFile = FileResource $configurationFile;
    }

    /**
     * Represents either an existing file for the application server to use, or
     *         the contents of a file to transfer.
     */
    public function getConfigurationFile()
    {
        return (!$this->configurationFile) ?: $this->configurationFile->getValue();
    }

    /**
     * Physical geographic location of the device, used in conjunction with the Physical Location user service.
     */
    public function setPhysicalLocation($physicalLocation = null)
    {
        $this->physicalLocation = ($physicalLocation InstanceOf AccessDevicePhysicalLocation)
             ? $physicalLocation
             : new AccessDevicePhysicalLocation($physicalLocation);
    }

    /**
     * Physical geographic location of the device, used in conjunction with the Physical Location user service.
     */
    public function getPhysicalLocation()
    {
        return (!$this->physicalLocation) ?: $this->physicalLocation->getValue();
    }

    /**
     * Network Transport Protocol.
     */
    public function setTransportProtocol($transportProtocol = null)
    {
        $this->transportProtocol = ($transportProtocol InstanceOf TransportProtocol)
             ? $transportProtocol
             : new TransportProtocol($transportProtocol);
    }

    /**
     * Network Transport Protocol.
     */
    public function getTransportProtocol()
    {
        return (!$this->transportProtocol) ?: $this->transportProtocol->getValue();
    }

    /**
     * URL.
     */
    public function setMobilityManagerProvisioningURL($mobilityManagerProvisioningURL = null)
    {
        $this->mobilityManagerProvisioningURL = ($mobilityManagerProvisioningURL InstanceOf URL)
             ? $mobilityManagerProvisioningURL
             : new URL($mobilityManagerProvisioningURL);
    }

    /**
     * URL.
     */
    public function getMobilityManagerProvisioningURL()
    {
        return (!$this->mobilityManagerProvisioningURL) ?: $this->mobilityManagerProvisioningURL->getValue();
    }

    /**
     * Mobility Manager provisioning user name
     */
    public function setMobilityManagerProvisioningUserName($mobilityManagerProvisioningUserName = null)
    {
        $this->mobilityManagerProvisioningUserName = ($mobilityManagerProvisioningUserName InstanceOf MobilityManagerProvisioningUserName)
             ? $mobilityManagerProvisioningUserName
             : new MobilityManagerProvisioningUserName($mobilityManagerProvisioningUserName);
    }

    /**
     * Mobility Manager provisioning user name
     */
    public function getMobilityManagerProvisioningUserName()
    {
        return (!$this->mobilityManagerProvisioningUserName) ?: $this->mobilityManagerProvisioningUserName->getValue();
    }

    /**
     * Mobility Manager provisioning password
     */
    public function setMobilityManagerProvisioningPassword($mobilityManagerProvisioningPassword = null)
    {
        $this->mobilityManagerProvisioningPassword = ($mobilityManagerProvisioningPassword InstanceOf MobilityManagerProvisioningPassword)
             ? $mobilityManagerProvisioningPassword
             : new MobilityManagerProvisioningPassword($mobilityManagerProvisioningPassword);
    }

    /**
     * Mobility Manager provisioning password
     */
    public function getMobilityManagerProvisioningPassword()
    {
        return (!$this->mobilityManagerProvisioningPassword) ?: $this->mobilityManagerProvisioningPassword->getValue();
    }

    /**
     * Mobility Manager service key
     */
    public function setMobilityManagerDefaultOriginatingServiceKey($mobilityManagerDefaultOriginatingServiceKey = null)
    {
        $this->mobilityManagerDefaultOriginatingServiceKey = ($mobilityManagerDefaultOriginatingServiceKey InstanceOf MobilityManagerServiceKey)
             ? $mobilityManagerDefaultOriginatingServiceKey
             : new MobilityManagerServiceKey($mobilityManagerDefaultOriginatingServiceKey);
    }

    /**
     * Mobility Manager service key
     */
    public function getMobilityManagerDefaultOriginatingServiceKey()
    {
        return (!$this->mobilityManagerDefaultOriginatingServiceKey) ?: $this->mobilityManagerDefaultOriginatingServiceKey->getValue();
    }

    /**
     * Mobility Manager service key
     */
    public function setMobilityManagerDefaultTerminatingServiceKey($mobilityManagerDefaultTerminatingServiceKey = null)
    {
        $this->mobilityManagerDefaultTerminatingServiceKey = ($mobilityManagerDefaultTerminatingServiceKey InstanceOf MobilityManagerServiceKey)
             ? $mobilityManagerDefaultTerminatingServiceKey
             : new MobilityManagerServiceKey($mobilityManagerDefaultTerminatingServiceKey);
    }

    /**
     * Mobility Manager service key
     */
    public function getMobilityManagerDefaultTerminatingServiceKey()
    {
        return (!$this->mobilityManagerDefaultTerminatingServiceKey) ?: $this->mobilityManagerDefaultTerminatingServiceKey->getValue();
    }

    /**
     * 
     */
    public function setUseCustomUserNamePassword($useCustomUserNamePassword = null)
    {
        $this->useCustomUserNamePassword = (boolean) $useCustomUserNamePassword;
    }

    /**
     * 
     */
    public function getUseCustomUserNamePassword()
    {
        return (!$this->useCustomUserNamePassword) ?: $this->useCustomUserNamePassword->getValue();
    }

    /**
     * Access device credentials.
     */
    public function setAccessDeviceCredentials(DeviceManagementUserNamePassword16 $accessDeviceCredentials = null)
    {
        $this->accessDeviceCredentials = DeviceManagementUserNamePassword16 $accessDeviceCredentials;
    }

    /**
     * Access device credentials.
     */
    public function getAccessDeviceCredentials()
    {
        return (!$this->accessDeviceCredentials) ?: $this->accessDeviceCredentials->getValue();
    }
}