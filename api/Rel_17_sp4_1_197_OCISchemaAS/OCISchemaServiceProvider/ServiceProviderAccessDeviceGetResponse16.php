<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceProvider; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\MobilityManagerProvisioningUserName;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\AccessDevicePhysicalLocation;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\MobilityManagerServiceKey;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\AccessDeviceSerialNumber;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\AccessDeviceDescription;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\AccessDeviceMACAddress;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\UnboundedPositiveInt;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\AccessDeviceProtocol;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\AccessDeviceStatus;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\TransportProtocol;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\AccessDeviceType;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\NetAddress;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\Port1025;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\UserId;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\URL;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
     * Response to ServiceProviderAccessDeviceGetRequest16.
 */
class ServiceProviderAccessDeviceGetResponse16 extends ComplexType implements ComplexInterface
{
    public    $name                                        = __CLASS__;
    protected $deviceType                                  = null;
    protected $protocol                                    = null;
    protected $netAddress                                  = null;
    protected $port                                        = null;
    protected $outboundProxyServerNetAddress               = null;
    protected $stunServerNetAddress                        = null;
    protected $macAddress                                  = null;
    protected $serialNumber                                = null;
    protected $description                                 = null;
    protected $numberOfPorts                               = null;
    protected $numberOfAssignedPorts                       = null;
    protected $status                                      = null;
    protected $physicalLocation                            = null;
    protected $transportProtocol                           = null;
    protected $mobilityManagerProvisioningURL              = null;
    protected $mobilityManagerProvisioningUserName         = null;
    protected $mobilityManagerDefaultOriginatingServiceKey = null;
    protected $mobilityManagerDefaultTerminatingServiceKey = null;
    protected $useCustomUserNamePassword                   = null;
    protected $userName                                    = null;


    /**
     * Access device type.
     */
    public function setDeviceType($deviceType = null)
    {
        $this->deviceType = ($deviceType InstanceOf AccessDeviceType)
             ? $deviceType
             : new AccessDeviceType($deviceType);
    }

    /**
     * Access device type.
     */
    public function getDeviceType()
    {
        return (!$this->deviceType) ?: $this->deviceType->getValue();
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
     * Unbounded Quantity. Can either be unlimited or a positive int quantity.
     */
    public function setNumberOfPorts(UnboundedPositiveInt $numberOfPorts = null)
    {
        $this->numberOfPorts =  $numberOfPorts;
    }

    /**
     * Unbounded Quantity. Can either be unlimited or a positive int quantity.
     */
    public function getNumberOfPorts()
    {
        return (!$this->numberOfPorts) ?: $this->numberOfPorts->getValue();
    }

    /**
     * 
     */
    public function setNumberOfAssignedPorts($numberOfAssignedPorts = null)
    {
        $this->numberOfAssignedPorts = (int) $numberOfAssignedPorts;
    }

    /**
     * 
     */
    public function getNumberOfAssignedPorts()
    {
        return (!$this->numberOfAssignedPorts) ?: $this->numberOfAssignedPorts->getValue();
    }

    /**
     * Choices for the access device status.
     */
    public function setStatus($status = null)
    {
        $this->status = ($status InstanceOf AccessDeviceStatus)
             ? $status
             : new AccessDeviceStatus($status);
    }

    /**
     * Choices for the access device status.
     */
    public function getStatus()
    {
        return (!$this->status) ?: $this->status->getValue();
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
     * A user id consists of a user-portion optionally followed by an @ sign and a domain name.
     *         If the domain is not specified, it is assumed to be the system default domain.
     *         The domain is required when adding normal users and virtual users, i.e. Auto Attendants,
     *         Hunt Groups, Call Centers....
     *         The domain must not be specified for system-level and service-provider-level administrators.
     */
    public function setUserName($userName = null)
    {
        $this->userName = ($userName InstanceOf UserId)
             ? $userName
             : new UserId($userName);
    }

    /**
     * A user id consists of a user-portion optionally followed by an @ sign and a domain name.
     *         If the domain is not specified, it is assumed to be the system default domain.
     *         The domain is required when adding normal users and virtual users, i.e. Auto Attendants,
     *         Hunt Groups, Call Centers....
     *         The domain must not be specified for system-level and service-provider-level administrators.
     */
    public function getUserName()
    {
        return (!$this->userName) ?: $this->userName->getValue();
    }
}
