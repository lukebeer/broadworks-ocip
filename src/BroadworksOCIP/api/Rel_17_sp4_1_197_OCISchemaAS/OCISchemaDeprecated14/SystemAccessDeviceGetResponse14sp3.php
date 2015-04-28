<?php
/**
 * This file is part of http://github.com/LukeBeer/BroadworksOCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated14; 

use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\MobilityManagerProvisioningUserName;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\AccessDevicePhysicalLocation;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\MobilityManagerServiceKey;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\AccessDeviceSerialNumber;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\AccessDeviceDescription;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\AccessDeviceMACAddress;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\UnboundedPositiveInt;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\AccessDeviceProtocol;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\AccessDeviceStatus;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\TransportProtocol;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\AccessDeviceType;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\NetAddress;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\Port1025;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\URL;
use BroadworksOCIP\Builder\Types\PrimitiveType;
use BroadworksOCIP\Builder\Types\ComplexInterface;
use BroadworksOCIP\Builder\Types\ComplexType;
use BroadworksOCIP\Response\ResponseOutput;
use BroadworksOCIP\Client\Client;


/**
 * Response to SystemAccessDeviceGetRequest14sp3
 *         Replaced By: SystemAccessDeviceGetResponse14sp6
 */
class SystemAccessDeviceGetResponse14sp3 extends ComplexType implements ComplexInterface
{
    public    $elementName = 'SystemAccessDeviceGetResponse14sp3';
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
    protected $mobilityManagerProvisioningURL;
    protected $mobilityManagerProvisioningUserName;
    protected $mobilityManagerDefaultOriginatingServiceKey;
    protected $mobilityManagerDefaultTerminatingServiceKey;

    /**
     * @return \BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated14\SystemAccessDeviceGetResponse14sp3 $response
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
        $this->deviceType->setElementName('deviceType');
        return $this;
    }

    /**
     * 
     * @return AccessDeviceType $deviceType
     */
    public function getDeviceType()
    {
        return ($this->deviceType)
            ? $this->deviceType->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setProtocol($protocol = null)
    {
        $this->protocol = ($protocol InstanceOf AccessDeviceProtocol)
             ? $protocol
             : new AccessDeviceProtocol($protocol);
        $this->protocol->setElementName('protocol');
        return $this;
    }

    /**
     * 
     * @return AccessDeviceProtocol $protocol
     */
    public function getProtocol()
    {
        return ($this->protocol)
            ? $this->protocol->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setNetAddress($netAddress = null)
    {
        $this->netAddress = ($netAddress InstanceOf NetAddress)
             ? $netAddress
             : new NetAddress($netAddress);
        $this->netAddress->setElementName('netAddress');
        return $this;
    }

    /**
     * 
     * @return NetAddress $netAddress
     */
    public function getNetAddress()
    {
        return ($this->netAddress)
            ? $this->netAddress->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setPort($port = null)
    {
        $this->port = ($port InstanceOf Port1025)
             ? $port
             : new Port1025($port);
        $this->port->setElementName('port');
        return $this;
    }

    /**
     * 
     * @return Port1025 $port
     */
    public function getPort()
    {
        return ($this->port)
            ? $this->port->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setOutboundProxyServerNetAddress($outboundProxyServerNetAddress = null)
    {
        $this->outboundProxyServerNetAddress = ($outboundProxyServerNetAddress InstanceOf NetAddress)
             ? $outboundProxyServerNetAddress
             : new NetAddress($outboundProxyServerNetAddress);
        $this->outboundProxyServerNetAddress->setElementName('outboundProxyServerNetAddress');
        return $this;
    }

    /**
     * 
     * @return NetAddress $outboundProxyServerNetAddress
     */
    public function getOutboundProxyServerNetAddress()
    {
        return ($this->outboundProxyServerNetAddress)
            ? $this->outboundProxyServerNetAddress->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setStunServerNetAddress($stunServerNetAddress = null)
    {
        $this->stunServerNetAddress = ($stunServerNetAddress InstanceOf NetAddress)
             ? $stunServerNetAddress
             : new NetAddress($stunServerNetAddress);
        $this->stunServerNetAddress->setElementName('stunServerNetAddress');
        return $this;
    }

    /**
     * 
     * @return NetAddress $stunServerNetAddress
     */
    public function getStunServerNetAddress()
    {
        return ($this->stunServerNetAddress)
            ? $this->stunServerNetAddress->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setMacAddress($macAddress = null)
    {
        $this->macAddress = ($macAddress InstanceOf AccessDeviceMACAddress)
             ? $macAddress
             : new AccessDeviceMACAddress($macAddress);
        $this->macAddress->setElementName('macAddress');
        return $this;
    }

    /**
     * 
     * @return AccessDeviceMACAddress $macAddress
     */
    public function getMacAddress()
    {
        return ($this->macAddress)
            ? $this->macAddress->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setSerialNumber($serialNumber = null)
    {
        $this->serialNumber = ($serialNumber InstanceOf AccessDeviceSerialNumber)
             ? $serialNumber
             : new AccessDeviceSerialNumber($serialNumber);
        $this->serialNumber->setElementName('serialNumber');
        return $this;
    }

    /**
     * 
     * @return AccessDeviceSerialNumber $serialNumber
     */
    public function getSerialNumber()
    {
        return ($this->serialNumber)
            ? $this->serialNumber->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setDescription($description = null)
    {
        $this->description = ($description InstanceOf AccessDeviceDescription)
             ? $description
             : new AccessDeviceDescription($description);
        $this->description->setElementName('description');
        return $this;
    }

    /**
     * 
     * @return AccessDeviceDescription $description
     */
    public function getDescription()
    {
        return ($this->description)
            ? $this->description->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setNumberOfPorts(UnboundedPositiveInt $numberOfPorts = null)
    {
        $this->numberOfPorts = ($numberOfPorts InstanceOf UnboundedPositiveInt)
             ? $numberOfPorts
             : new UnboundedPositiveInt($numberOfPorts);
        $this->numberOfPorts->setElementName('numberOfPorts');
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
        $this->numberOfAssignedPorts->setElementName('numberOfAssignedPorts');
        return $this;
    }

    /**
     * 
     * @return int $numberOfAssignedPorts
     */
    public function getNumberOfAssignedPorts()
    {
        return ($this->numberOfAssignedPorts)
            ? $this->numberOfAssignedPorts->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setStatus($status = null)
    {
        $this->status = ($status InstanceOf AccessDeviceStatus)
             ? $status
             : new AccessDeviceStatus($status);
        $this->status->setElementName('status');
        return $this;
    }

    /**
     * 
     * @return AccessDeviceStatus $status
     */
    public function getStatus()
    {
        return ($this->status)
            ? $this->status->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setPhysicalLocation($physicalLocation = null)
    {
        $this->physicalLocation = ($physicalLocation InstanceOf AccessDevicePhysicalLocation)
             ? $physicalLocation
             : new AccessDevicePhysicalLocation($physicalLocation);
        $this->physicalLocation->setElementName('physicalLocation');
        return $this;
    }

    /**
     * 
     * @return AccessDevicePhysicalLocation $physicalLocation
     */
    public function getPhysicalLocation()
    {
        return ($this->physicalLocation)
            ? $this->physicalLocation->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setTransportProtocol($transportProtocol = null)
    {
        $this->transportProtocol = ($transportProtocol InstanceOf TransportProtocol)
             ? $transportProtocol
             : new TransportProtocol($transportProtocol);
        $this->transportProtocol->setElementName('transportProtocol');
        return $this;
    }

    /**
     * 
     * @return TransportProtocol $transportProtocol
     */
    public function getTransportProtocol()
    {
        return ($this->transportProtocol)
            ? $this->transportProtocol->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setMobilityManagerProvisioningURL($mobilityManagerProvisioningURL = null)
    {
        $this->mobilityManagerProvisioningURL = ($mobilityManagerProvisioningURL InstanceOf URL)
             ? $mobilityManagerProvisioningURL
             : new URL($mobilityManagerProvisioningURL);
        $this->mobilityManagerProvisioningURL->setElementName('mobilityManagerProvisioningURL');
        return $this;
    }

    /**
     * 
     * @return URL $mobilityManagerProvisioningURL
     */
    public function getMobilityManagerProvisioningURL()
    {
        return ($this->mobilityManagerProvisioningURL)
            ? $this->mobilityManagerProvisioningURL->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setMobilityManagerProvisioningUserName($mobilityManagerProvisioningUserName = null)
    {
        $this->mobilityManagerProvisioningUserName = ($mobilityManagerProvisioningUserName InstanceOf MobilityManagerProvisioningUserName)
             ? $mobilityManagerProvisioningUserName
             : new MobilityManagerProvisioningUserName($mobilityManagerProvisioningUserName);
        $this->mobilityManagerProvisioningUserName->setElementName('mobilityManagerProvisioningUserName');
        return $this;
    }

    /**
     * 
     * @return MobilityManagerProvisioningUserName $mobilityManagerProvisioningUserName
     */
    public function getMobilityManagerProvisioningUserName()
    {
        return ($this->mobilityManagerProvisioningUserName)
            ? $this->mobilityManagerProvisioningUserName->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setMobilityManagerDefaultOriginatingServiceKey($mobilityManagerDefaultOriginatingServiceKey = null)
    {
        $this->mobilityManagerDefaultOriginatingServiceKey = ($mobilityManagerDefaultOriginatingServiceKey InstanceOf MobilityManagerServiceKey)
             ? $mobilityManagerDefaultOriginatingServiceKey
             : new MobilityManagerServiceKey($mobilityManagerDefaultOriginatingServiceKey);
        $this->mobilityManagerDefaultOriginatingServiceKey->setElementName('mobilityManagerDefaultOriginatingServiceKey');
        return $this;
    }

    /**
     * 
     * @return MobilityManagerServiceKey $mobilityManagerDefaultOriginatingServiceKey
     */
    public function getMobilityManagerDefaultOriginatingServiceKey()
    {
        return ($this->mobilityManagerDefaultOriginatingServiceKey)
            ? $this->mobilityManagerDefaultOriginatingServiceKey->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setMobilityManagerDefaultTerminatingServiceKey($mobilityManagerDefaultTerminatingServiceKey = null)
    {
        $this->mobilityManagerDefaultTerminatingServiceKey = ($mobilityManagerDefaultTerminatingServiceKey InstanceOf MobilityManagerServiceKey)
             ? $mobilityManagerDefaultTerminatingServiceKey
             : new MobilityManagerServiceKey($mobilityManagerDefaultTerminatingServiceKey);
        $this->mobilityManagerDefaultTerminatingServiceKey->setElementName('mobilityManagerDefaultTerminatingServiceKey');
        return $this;
    }

    /**
     * 
     * @return MobilityManagerServiceKey $mobilityManagerDefaultTerminatingServiceKey
     */
    public function getMobilityManagerDefaultTerminatingServiceKey()
    {
        return ($this->mobilityManagerDefaultTerminatingServiceKey)
            ? $this->mobilityManagerDefaultTerminatingServiceKey->getElementValue()
            : null;
    }
}
