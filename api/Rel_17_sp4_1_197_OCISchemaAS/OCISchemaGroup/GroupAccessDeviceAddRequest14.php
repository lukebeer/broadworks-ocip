<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaGroup; 

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
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\AccessDeviceType;
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
 * Request to add a group access device.
 *         The response is either SuccessResponse or ErrorResponse.
 */
class GroupAccessDeviceAddRequest14 extends ComplexType implements ComplexInterface
{
    public    $name = 'GroupAccessDeviceAddRequest14';
    protected $serviceProviderId;
    protected $groupId;
    protected $deviceName;
    protected $deviceType;
    protected $protocol;
    protected $netAddress;
    protected $port;
    protected $outboundProxyServerNetAddress;
    protected $stunServerNetAddress;
    protected $macAddress;
    protected $serialNumber;
    protected $description;
    protected $physicalLocation;
    protected $transportProtocol;
    protected $mobilityManagerProvisioningURL;
    protected $mobilityManagerProvisioningUserName;
    protected $mobilityManagerProvisioningPassword;
    protected $mobilityManagerDefaultOriginatingServiceKey;
    protected $mobilityManagerDefaultTerminatingServiceKey;
    protected $useCustomUserNamePassword;
    protected $accessDeviceCredentials;

    public function __construct(
         $serviceProviderId = '',
         $groupId = '',
         $deviceName = '',
         $deviceType = '',
         $protocol = null,
         $netAddress = null,
         $port = null,
         $outboundProxyServerNetAddress = null,
         $stunServerNetAddress = null,
         $macAddress = null,
         $serialNumber = null,
         $description = null,
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
        $this->setDeviceType($deviceType);
        $this->setProtocol($protocol);
        $this->setNetAddress($netAddress);
        $this->setPort($port);
        $this->setOutboundProxyServerNetAddress($outboundProxyServerNetAddress);
        $this->setStunServerNetAddress($stunServerNetAddress);
        $this->setMacAddress($macAddress);
        $this->setSerialNumber($serialNumber);
        $this->setDescription($description);
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
        return ($this->serviceProviderId) ? $this->serviceProviderId->getValue() : null;
    }

    /**
     * 
     */
    public function setGroupId($groupId = null)
    {
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
        return ($this->groupId) ? $this->groupId->getValue() : null;
    }

    /**
     * 
     */
    public function setDeviceName($deviceName = null)
    {
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
        return ($this->deviceName) ? $this->deviceName->getValue() : null;
    }

    /**
     * 
     */
    public function setDeviceType($deviceType = null)
    {
        $this->deviceType = ($deviceType InstanceOf AccessDeviceType)
             ? $deviceType
             : new AccessDeviceType($deviceType);
        $this->deviceType->setName('deviceType');
        return $this;
    }

    /**
     * 
     * @return AccessDeviceType $deviceType
     */
    public function getDeviceType()
    {
        return ($this->deviceType) ? $this->deviceType->getValue() : null;
    }

    /**
     * 
     */
    public function setProtocol($protocol = null)
    {
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
        return ($this->protocol) ? $this->protocol->getValue() : null;
    }

    /**
     * 
     */
    public function setNetAddress($netAddress = null)
    {
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
        return ($this->netAddress) ? $this->netAddress->getValue() : null;
    }

    /**
     * 
     */
    public function setPort($port = null)
    {
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
        return ($this->port) ? $this->port->getValue() : null;
    }

    /**
     * 
     */
    public function setOutboundProxyServerNetAddress($outboundProxyServerNetAddress = null)
    {
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
        return ($this->outboundProxyServerNetAddress) ? $this->outboundProxyServerNetAddress->getValue() : null;
    }

    /**
     * 
     */
    public function setStunServerNetAddress($stunServerNetAddress = null)
    {
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
        return ($this->stunServerNetAddress) ? $this->stunServerNetAddress->getValue() : null;
    }

    /**
     * 
     */
    public function setMacAddress($macAddress = null)
    {
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
        return ($this->macAddress) ? $this->macAddress->getValue() : null;
    }

    /**
     * 
     */
    public function setSerialNumber($serialNumber = null)
    {
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
        return ($this->serialNumber) ? $this->serialNumber->getValue() : null;
    }

    /**
     * 
     */
    public function setDescription($description = null)
    {
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
        return ($this->description) ? $this->description->getValue() : null;
    }

    /**
     * 
     */
    public function setPhysicalLocation($physicalLocation = null)
    {
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
        return ($this->physicalLocation) ? $this->physicalLocation->getValue() : null;
    }

    /**
     * 
     */
    public function setTransportProtocol($transportProtocol = null)
    {
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
        return ($this->transportProtocol) ? $this->transportProtocol->getValue() : null;
    }

    /**
     * 
     */
    public function setMobilityManagerProvisioningURL($mobilityManagerProvisioningURL = null)
    {
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
        return ($this->mobilityManagerProvisioningURL) ? $this->mobilityManagerProvisioningURL->getValue() : null;
    }

    /**
     * 
     */
    public function setMobilityManagerProvisioningUserName($mobilityManagerProvisioningUserName = null)
    {
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
        return ($this->mobilityManagerProvisioningUserName) ? $this->mobilityManagerProvisioningUserName->getValue() : null;
    }

    /**
     * 
     */
    public function setMobilityManagerProvisioningPassword($mobilityManagerProvisioningPassword = null)
    {
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
        return ($this->mobilityManagerProvisioningPassword) ? $this->mobilityManagerProvisioningPassword->getValue() : null;
    }

    /**
     * 
     */
    public function setMobilityManagerDefaultOriginatingServiceKey($mobilityManagerDefaultOriginatingServiceKey = null)
    {
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
        return ($this->mobilityManagerDefaultOriginatingServiceKey) ? $this->mobilityManagerDefaultOriginatingServiceKey->getValue() : null;
    }

    /**
     * 
     */
    public function setMobilityManagerDefaultTerminatingServiceKey($mobilityManagerDefaultTerminatingServiceKey = null)
    {
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
        return ($this->mobilityManagerDefaultTerminatingServiceKey) ? $this->mobilityManagerDefaultTerminatingServiceKey->getValue() : null;
    }

    /**
     * 
     */
    public function setUseCustomUserNamePassword($useCustomUserNamePassword = null)
    {
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
        return ($this->useCustomUserNamePassword) ? $this->useCustomUserNamePassword->getValue() : null;
    }

    /**
     * 
     */
    public function setAccessDeviceCredentials(DeviceManagementUserNamePassword16 $accessDeviceCredentials = null)
    {
        $this->accessDeviceCredentials = ($accessDeviceCredentials InstanceOf DeviceManagementUserNamePassword16)
             ? $accessDeviceCredentials
             : new DeviceManagementUserNamePassword16($accessDeviceCredentials);
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
