<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated14; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\AccessDevicePhysicalLocation;
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
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Response to ServiceProviderAccessDeviceGetRequest14.
 *         Replaced By: ServiceProviderAccessDeviceGetResponse14sp3
 */
class ServiceProviderAccessDeviceGetResponse14 extends ComplexType implements ComplexInterface
{
    public    $name                           = __CLASS__;
    protected $deviceType                     = null;
    protected $protocol                       = null;
    protected $netAddress                     = null;
    protected $port                           = null;
    protected $outboundProxyServerNetAddress  = null;
    protected $stunServerNetAddress           = null;
    protected $macAddress                     = null;
    protected $serialNumber                   = null;
    protected $description                    = null;
    protected $numberOfPorts                  = null;
    protected $numberOfAssignedPorts          = null;
    protected $status                         = null;
    protected $physicalLocation               = null;
    protected $transportProtocol              = null;


    public function setDeviceType($deviceType = null)
    {
        $this->deviceType = ($deviceType InstanceOf AccessDeviceType)
             ? $deviceType
             : new AccessDeviceType($deviceType);
    }

    public function getDeviceType()
    {
        return (!$this->deviceType) ?: $this->deviceType->value();
    }

    public function setProtocol($protocol = null)
    {
        $this->protocol = ($protocol InstanceOf AccessDeviceProtocol)
             ? $protocol
             : new AccessDeviceProtocol($protocol);
    }

    public function getProtocol()
    {
        return (!$this->protocol) ?: $this->protocol->value();
    }

    public function setNetAddress($netAddress = null)
    {
        $this->netAddress = ($netAddress InstanceOf NetAddress)
             ? $netAddress
             : new NetAddress($netAddress);
    }

    public function getNetAddress()
    {
        return (!$this->netAddress) ?: $this->netAddress->value();
    }

    public function setPort($port = null)
    {
        $this->port = ($port InstanceOf Port1025)
             ? $port
             : new Port1025($port);
    }

    public function getPort()
    {
        return (!$this->port) ?: $this->port->value();
    }

    public function setOutboundProxyServerNetAddress($outboundProxyServerNetAddress = null)
    {
        $this->outboundProxyServerNetAddress = ($outboundProxyServerNetAddress InstanceOf NetAddress)
             ? $outboundProxyServerNetAddress
             : new NetAddress($outboundProxyServerNetAddress);
    }

    public function getOutboundProxyServerNetAddress()
    {
        return (!$this->outboundProxyServerNetAddress) ?: $this->outboundProxyServerNetAddress->value();
    }

    public function setStunServerNetAddress($stunServerNetAddress = null)
    {
        $this->stunServerNetAddress = ($stunServerNetAddress InstanceOf NetAddress)
             ? $stunServerNetAddress
             : new NetAddress($stunServerNetAddress);
    }

    public function getStunServerNetAddress()
    {
        return (!$this->stunServerNetAddress) ?: $this->stunServerNetAddress->value();
    }

    public function setMacAddress($macAddress = null)
    {
        $this->macAddress = ($macAddress InstanceOf AccessDeviceMACAddress)
             ? $macAddress
             : new AccessDeviceMACAddress($macAddress);
    }

    public function getMacAddress()
    {
        return (!$this->macAddress) ?: $this->macAddress->value();
    }

    public function setSerialNumber($serialNumber = null)
    {
        $this->serialNumber = ($serialNumber InstanceOf AccessDeviceSerialNumber)
             ? $serialNumber
             : new AccessDeviceSerialNumber($serialNumber);
    }

    public function getSerialNumber()
    {
        return (!$this->serialNumber) ?: $this->serialNumber->value();
    }

    public function setDescription($description = null)
    {
        $this->description = ($description InstanceOf AccessDeviceDescription)
             ? $description
             : new AccessDeviceDescription($description);
    }

    public function getDescription()
    {
        return (!$this->description) ?: $this->description->value();
    }

    public function setNumberOfPorts(UnboundedPositiveInt $numberOfPorts = null)
    {
    }

    public function getNumberOfPorts()
    {
        return (!$this->numberOfPorts) ?: $this->numberOfPorts->value();
    }

    public function setNumberOfAssignedPorts(xs:int $numberOfAssignedPorts = null)
    {
    }

    public function getNumberOfAssignedPorts()
    {
        return (!$this->numberOfAssignedPorts) ?: $this->numberOfAssignedPorts->value();
    }

    public function setStatus($status = null)
    {
        $this->status = ($status InstanceOf AccessDeviceStatus)
             ? $status
             : new AccessDeviceStatus($status);
    }

    public function getStatus()
    {
        return (!$this->status) ?: $this->status->value();
    }

    public function setPhysicalLocation($physicalLocation = null)
    {
        $this->physicalLocation = ($physicalLocation InstanceOf AccessDevicePhysicalLocation)
             ? $physicalLocation
             : new AccessDevicePhysicalLocation($physicalLocation);
    }

    public function getPhysicalLocation()
    {
        return (!$this->physicalLocation) ?: $this->physicalLocation->value();
    }

    public function setTransportProtocol($transportProtocol = null)
    {
        $this->transportProtocol = ($transportProtocol InstanceOf TransportProtocol)
             ? $transportProtocol
             : new TransportProtocol($transportProtocol);
    }

    public function getTransportProtocol()
    {
        return (!$this->transportProtocol) ?: $this->transportProtocol->value();
    }
}
