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
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\AccessDeviceProtocol;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\UnboundedPositiveInt;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\AccessDeviceStatus;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\TransportProtocol;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\AccessDeviceType;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\NetAddress;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\Port1025;
use Broadworks_OCIP\core\Builder\Types\PrimitiveType;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Response to SystemAccessDeviceGetRequest.
 *         Replaced By: SystemAccessDeviceGetResponse14sp3
 */
class SystemAccessDeviceGetResponse extends ComplexType implements ComplexInterface
{
    public    $name = 'SystemAccessDeviceGetResponse';
    protected $deviceType;
    protected $protocol;
    protected $netAddress;
    protected $port;
    protected $outboundProxyServerNetAddress;
    protected $stunServerNetAddress;
    protected $macAddress;
    protected $serialNumber;
    protected $description;
    protected $numberOfPorts;
    protected $numberOfAssignedPorts;
    protected $status;
    protected $physicalLocation;
    protected $transportProtocol;

    /**
     * @return \Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated14\SystemAccessDeviceGetResponse $response
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
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
    public function setNumberOfPorts(UnboundedPositiveInt $numberOfPorts = null)
    {
        $this->numberOfPorts = ($numberOfPorts InstanceOf UnboundedPositiveInt)
             ? $numberOfPorts
             : new UnboundedPositiveInt($numberOfPorts);
        $this->numberOfPorts->setName('numberOfPorts');
        return $this;
    }

    /**
     * 
     * @return UnboundedPositiveInt $numberOfPorts
     */
    public function getNumberOfPorts()
    {
        return $this->numberOfPorts;
    }

    /**
     * 
     */
    public function setNumberOfAssignedPorts($numberOfAssignedPorts = null)
    {
        $this->numberOfAssignedPorts = new PrimitiveType($numberOfAssignedPorts);
        $this->numberOfAssignedPorts->setName('numberOfAssignedPorts');
        return $this;
    }

    /**
     * 
     * @return int $numberOfAssignedPorts
     */
    public function getNumberOfAssignedPorts()
    {
        return ($this->numberOfAssignedPorts) ? $this->numberOfAssignedPorts->getValue() : null;
    }

    /**
     * 
     */
    public function setStatus($status = null)
    {
        $this->status = ($status InstanceOf AccessDeviceStatus)
             ? $status
             : new AccessDeviceStatus($status);
        $this->status->setName('status');
        return $this;
    }

    /**
     * 
     * @return AccessDeviceStatus $status
     */
    public function getStatus()
    {
        return ($this->status) ? $this->status->getValue() : null;
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
}
