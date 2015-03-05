<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated14; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\AccessDeviceType;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\AccessDeviceProtocol;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\NetAddress;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\Port1025;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\AccessDeviceMACAddress;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\AccessDeviceSerialNumber;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\AccessDeviceDescription;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\UnboundedPositiveInt;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\xs:int;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\AccessDeviceStatus;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\AccessDevicePhysicalLocation;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\TransportProtocol;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\URL;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\MobilityManagerProvisioningUserName;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\MobilityManagerServiceKey;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Response to ServiceProviderAccessDeviceGetRequest14sp3.
 *         Replaced By: ServiceProviderAccessDeviceGetRequest14sp6
 */
class ServiceProviderAccessDeviceGetResponse14sp3 extends ComplexType implements ComplexInterface
{
    public    $name = __CLASS__;

    public function __construct(
             $deviceType,
             $protocol,
             $netAddress=null,
             $port=null,
             $outboundProxyServerNetAddress=null,
             $stunServerNetAddress=null,
             $macAddress=null,
             $serialNumber=null,
             $description=null,
             UnboundedPositiveInt $numberOfPorts,
             $numberOfAssignedPorts,
             $status,
             $physicalLocation=null,
             $transportProtocol=null,
             $mobilityManagerProvisioningURL=null,
             $mobilityManagerProvisioningUserName=null,
             $mobilityManagerDefaultOriginatingServiceKey=null,
             $mobilityManagerDefaultTerminatingServiceKey=null
    ) {
        $this->deviceType                                  = new AccessDeviceType($deviceType);
        $this->protocol                                    = new AccessDeviceProtocol($protocol);
        $this->netAddress                                  = new NetAddress($netAddress);
        $this->port                                        = new Port1025($port);
        $this->outboundProxyServerNetAddress               = new NetAddress($outboundProxyServerNetAddress);
        $this->stunServerNetAddress                        = new NetAddress($stunServerNetAddress);
        $this->macAddress                                  = new AccessDeviceMACAddress($macAddress);
        $this->serialNumber                                = new AccessDeviceSerialNumber($serialNumber);
        $this->description                                 = new AccessDeviceDescription($description);
        $this->numberOfPorts                               = $numberOfPorts;
        $this->numberOfAssignedPorts                       = $numberOfAssignedPorts;
        $this->status                                      = new AccessDeviceStatus($status);
        $this->physicalLocation                            = new AccessDevicePhysicalLocation($physicalLocation);
        $this->transportProtocol                           = new TransportProtocol($transportProtocol);
        $this->mobilityManagerProvisioningURL              = new URL($mobilityManagerProvisioningURL);
        $this->mobilityManagerProvisioningUserName         = new MobilityManagerProvisioningUserName($mobilityManagerProvisioningUserName);
        $this->mobilityManagerDefaultOriginatingServiceKey = new MobilityManagerServiceKey($mobilityManagerDefaultOriginatingServiceKey);
        $this->mobilityManagerDefaultTerminatingServiceKey = new MobilityManagerServiceKey($mobilityManagerDefaultTerminatingServiceKey);
        $this->args                                        = func_get_args();
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

    public function setNumberOfPorts($numberOfPorts)
    {
        $numberOfPorts and $this->numberOfPorts = new UnboundedPositiveInt($numberOfPorts);
    }

    public function getNumberOfPorts()
    {
        return (!$this->numberOfPorts) ?: $this->numberOfPorts->value();
    }

    public function setNumberOfAssignedPorts($numberOfAssignedPorts)
    {
        $numberOfAssignedPorts and $this->numberOfAssignedPorts = new xs:int($numberOfAssignedPorts);
    }

    public function getNumberOfAssignedPorts()
    {
        return (!$this->numberOfAssignedPorts) ?: $this->numberOfAssignedPorts->value();
    }

    public function setStatus($status)
    {
        $status and $this->status = new AccessDeviceStatus($status);
    }

    public function getStatus()
    {
        return (!$this->status) ?: $this->status->value();
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
}
