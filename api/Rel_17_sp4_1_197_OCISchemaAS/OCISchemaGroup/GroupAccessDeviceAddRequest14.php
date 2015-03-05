<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaGroup; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ServiceProviderId;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\GroupId;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\AccessDeviceName;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\AccessDeviceType;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\AccessDeviceProtocol;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\NetAddress;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\Port1025;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\AccessDeviceMACAddress;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\AccessDeviceSerialNumber;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\AccessDeviceDescription;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\AccessDevicePhysicalLocation;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\TransportProtocol;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\URL;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\MobilityManagerProvisioningUserName;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\MobilityManagerProvisioningPassword;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\MobilityManagerServiceKey;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\xs:boolean;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\DeviceManagementUserNamePassword16;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Request to add a group access device.
 *         The response is either SuccessResponse or ErrorResponse.
 */
class GroupAccessDeviceAddRequest14 extends ComplexType implements ComplexInterface
{
    public    $name = __CLASS__;

    public function __construct(
             $serviceProviderId,
             $groupId,
             $deviceName,
             $deviceType,
             $protocol=null,
             $netAddress=null,
             $port=null,
             $outboundProxyServerNetAddress=null,
             $stunServerNetAddress=null,
             $macAddress=null,
             $serialNumber=null,
             $description=null,
             $physicalLocation=null,
             $transportProtocol=null,
             $mobilityManagerProvisioningURL=null,
             $mobilityManagerProvisioningUserName=null,
             $mobilityManagerProvisioningPassword=null,
             $mobilityManagerDefaultOriginatingServiceKey=null,
             $mobilityManagerDefaultTerminatingServiceKey=null,
             $useCustomUserNamePassword=null,
             DeviceManagementUserNamePassword16 $accessDeviceCredentials=null
    ) {
        $this->serviceProviderId                           = new ServiceProviderId($serviceProviderId);
        $this->groupId                                     = new GroupId($groupId);
        $this->deviceName                                  = new AccessDeviceName($deviceName);
        $this->deviceType                                  = new AccessDeviceType($deviceType);
        $this->protocol                                    = new AccessDeviceProtocol($protocol);
        $this->netAddress                                  = new NetAddress($netAddress);
        $this->port                                        = new Port1025($port);
        $this->outboundProxyServerNetAddress               = new NetAddress($outboundProxyServerNetAddress);
        $this->stunServerNetAddress                        = new NetAddress($stunServerNetAddress);
        $this->macAddress                                  = new AccessDeviceMACAddress($macAddress);
        $this->serialNumber                                = new AccessDeviceSerialNumber($serialNumber);
        $this->description                                 = new AccessDeviceDescription($description);
        $this->physicalLocation                            = new AccessDevicePhysicalLocation($physicalLocation);
        $this->transportProtocol                           = new TransportProtocol($transportProtocol);
        $this->mobilityManagerProvisioningURL              = new URL($mobilityManagerProvisioningURL);
        $this->mobilityManagerProvisioningUserName         = new MobilityManagerProvisioningUserName($mobilityManagerProvisioningUserName);
        $this->mobilityManagerProvisioningPassword         = new MobilityManagerProvisioningPassword($mobilityManagerProvisioningPassword);
        $this->mobilityManagerDefaultOriginatingServiceKey = new MobilityManagerServiceKey($mobilityManagerDefaultOriginatingServiceKey);
        $this->mobilityManagerDefaultTerminatingServiceKey = new MobilityManagerServiceKey($mobilityManagerDefaultTerminatingServiceKey);
        $this->useCustomUserNamePassword                   = $useCustomUserNamePassword;
        $this->accessDeviceCredentials                     = $accessDeviceCredentials;
        $this->args                                        = func_get_args();
    }

    public function setServiceProviderId($serviceProviderId)
    {
        $serviceProviderId and $this->serviceProviderId = new ServiceProviderId($serviceProviderId);
    }

    public function getServiceProviderId()
    {
        return (!$this->serviceProviderId) ?: $this->serviceProviderId->value();
    }

    public function setGroupId($groupId)
    {
        $groupId and $this->groupId = new GroupId($groupId);
    }

    public function getGroupId()
    {
        return (!$this->groupId) ?: $this->groupId->value();
    }

    public function setDeviceName($deviceName)
    {
        $deviceName and $this->deviceName = new AccessDeviceName($deviceName);
    }

    public function getDeviceName()
    {
        return (!$this->deviceName) ?: $this->deviceName->value();
    }

    public function setDeviceType($deviceType)
    {
        $deviceType and $this->deviceType = new AccessDeviceType($deviceType);
    }

    public function getDeviceType()
    {
        return (!$this->deviceType) ?: $this->deviceType->value();
    }

    public function setProtocol($protocol)
    {
        $protocol and $this->protocol = new AccessDeviceProtocol($protocol);
    }

    public function getProtocol()
    {
        return (!$this->protocol) ?: $this->protocol->value();
    }

    public function setNetAddress($netAddress)
    {
        $netAddress and $this->netAddress = new NetAddress($netAddress);
    }

    public function getNetAddress()
    {
        return (!$this->netAddress) ?: $this->netAddress->value();
    }

    public function setPort($port)
    {
        $port and $this->port = new Port1025($port);
    }

    public function getPort()
    {
        return (!$this->port) ?: $this->port->value();
    }

    public function setOutboundProxyServerNetAddress($outboundProxyServerNetAddress)
    {
        $outboundProxyServerNetAddress and $this->outboundProxyServerNetAddress = new NetAddress($outboundProxyServerNetAddress);
    }

    public function getOutboundProxyServerNetAddress()
    {
        return (!$this->outboundProxyServerNetAddress) ?: $this->outboundProxyServerNetAddress->value();
    }

    public function setStunServerNetAddress($stunServerNetAddress)
    {
        $stunServerNetAddress and $this->stunServerNetAddress = new NetAddress($stunServerNetAddress);
    }

    public function getStunServerNetAddress()
    {
        return (!$this->stunServerNetAddress) ?: $this->stunServerNetAddress->value();
    }

    public function setMacAddress($macAddress)
    {
        $macAddress and $this->macAddress = new AccessDeviceMACAddress($macAddress);
    }

    public function getMacAddress()
    {
        return (!$this->macAddress) ?: $this->macAddress->value();
    }

    public function setSerialNumber($serialNumber)
    {
        $serialNumber and $this->serialNumber = new AccessDeviceSerialNumber($serialNumber);
    }

    public function getSerialNumber()
    {
        return (!$this->serialNumber) ?: $this->serialNumber->value();
    }

    public function setDescription($description)
    {
        $description and $this->description = new AccessDeviceDescription($description);
    }

    public function getDescription()
    {
        return (!$this->description) ?: $this->description->value();
    }

    public function setPhysicalLocation($physicalLocation)
    {
        $physicalLocation and $this->physicalLocation = new AccessDevicePhysicalLocation($physicalLocation);
    }

    public function getPhysicalLocation()
    {
        return (!$this->physicalLocation) ?: $this->physicalLocation->value();
    }

    public function setTransportProtocol($transportProtocol)
    {
        $transportProtocol and $this->transportProtocol = new TransportProtocol($transportProtocol);
    }

    public function getTransportProtocol()
    {
        return (!$this->transportProtocol) ?: $this->transportProtocol->value();
    }

    public function setMobilityManagerProvisioningURL($mobilityManagerProvisioningURL)
    {
        $mobilityManagerProvisioningURL and $this->mobilityManagerProvisioningURL = new URL($mobilityManagerProvisioningURL);
    }

    public function getMobilityManagerProvisioningURL()
    {
        return (!$this->mobilityManagerProvisioningURL) ?: $this->mobilityManagerProvisioningURL->value();
    }

    public function setMobilityManagerProvisioningUserName($mobilityManagerProvisioningUserName)
    {
        $mobilityManagerProvisioningUserName and $this->mobilityManagerProvisioningUserName = new MobilityManagerProvisioningUserName($mobilityManagerProvisioningUserName);
    }

    public function getMobilityManagerProvisioningUserName()
    {
        return (!$this->mobilityManagerProvisioningUserName) ?: $this->mobilityManagerProvisioningUserName->value();
    }

    public function setMobilityManagerProvisioningPassword($mobilityManagerProvisioningPassword)
    {
        $mobilityManagerProvisioningPassword and $this->mobilityManagerProvisioningPassword = new MobilityManagerProvisioningPassword($mobilityManagerProvisioningPassword);
    }

    public function getMobilityManagerProvisioningPassword()
    {
        return (!$this->mobilityManagerProvisioningPassword) ?: $this->mobilityManagerProvisioningPassword->value();
    }

    public function setMobilityManagerDefaultOriginatingServiceKey($mobilityManagerDefaultOriginatingServiceKey)
    {
        $mobilityManagerDefaultOriginatingServiceKey and $this->mobilityManagerDefaultOriginatingServiceKey = new MobilityManagerServiceKey($mobilityManagerDefaultOriginatingServiceKey);
    }

    public function getMobilityManagerDefaultOriginatingServiceKey()
    {
        return (!$this->mobilityManagerDefaultOriginatingServiceKey) ?: $this->mobilityManagerDefaultOriginatingServiceKey->value();
    }

    public function setMobilityManagerDefaultTerminatingServiceKey($mobilityManagerDefaultTerminatingServiceKey)
    {
        $mobilityManagerDefaultTerminatingServiceKey and $this->mobilityManagerDefaultTerminatingServiceKey = new MobilityManagerServiceKey($mobilityManagerDefaultTerminatingServiceKey);
    }

    public function getMobilityManagerDefaultTerminatingServiceKey()
    {
        return (!$this->mobilityManagerDefaultTerminatingServiceKey) ?: $this->mobilityManagerDefaultTerminatingServiceKey->value();
    }

    public function setUseCustomUserNamePassword($useCustomUserNamePassword)
    {
        $useCustomUserNamePassword and $this->useCustomUserNamePassword = new xs:boolean($useCustomUserNamePassword);
    }

    public function getUseCustomUserNamePassword()
    {
        return (!$this->useCustomUserNamePassword) ?: $this->useCustomUserNamePassword->value();
    }

    public function setAccessDeviceCredentials($accessDeviceCredentials)
    {
        $accessDeviceCredentials and $this->accessDeviceCredentials = new DeviceManagementUserNamePassword16($accessDeviceCredentials);
    }

    public function getAccessDeviceCredentials()
    {
        return (!$this->accessDeviceCredentials) ?: $this->accessDeviceCredentials->value();
    }
}
