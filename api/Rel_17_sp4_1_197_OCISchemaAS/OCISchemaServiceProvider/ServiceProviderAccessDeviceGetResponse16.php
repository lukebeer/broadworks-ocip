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
use Broadworks_OCIP\core\Builder\Types\PrimitiveType;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Response to ServiceProviderAccessDeviceGetRequest16.
 */
class ServiceProviderAccessDeviceGetResponse16 extends ComplexType implements ComplexInterface
{
    public    $name                                        = 'ServiceProviderAccessDeviceGetResponse16';
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
     * @return ServiceProviderAccessDeviceGetResponse16
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
        if (!$deviceType) return $this;
        $this->deviceType = ($deviceType InstanceOf AccessDeviceType)
             ? $deviceType
             : new AccessDeviceType($deviceType);
        $this->deviceType->setName('deviceType');
        return $this;
    }

    /**
     * 
     * @return AccessDeviceType
     */
    public function getDeviceType()
    {
        return $this->deviceType->getValue();
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
     * @return AccessDeviceProtocol
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
     * @return NetAddress
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
     * @return Port1025
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
     * @return NetAddress
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
     * @return NetAddress
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
     * @return AccessDeviceMACAddress
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
     * @return AccessDeviceSerialNumber
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
     * @return AccessDeviceDescription
     */
    public function getDescription()
    {
        return $this->description->getValue();
    }

    /**
     * 
     */
    public function setNumberOfPorts(UnboundedPositiveInt $numberOfPorts = null)
    {
        if (!$numberOfPorts) return $this;
        $this->numberOfPorts = $numberOfPorts;
        $this->numberOfPorts->setName('numberOfPorts');
        return $this;
    }

    /**
     * 
     * @return UnboundedPositiveInt
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
        if (!$numberOfAssignedPorts) return $this;
        $this->numberOfAssignedPorts = new PrimitiveType($numberOfAssignedPorts);
        $this->numberOfAssignedPorts->setName('numberOfAssignedPorts');
        return $this;
    }

    /**
     * 
     * @return xs:int
     */
    public function getNumberOfAssignedPorts()
    {
        return $this->numberOfAssignedPorts->getValue();
    }

    /**
     * 
     */
    public function setStatus($status = null)
    {
        if (!$status) return $this;
        $this->status = ($status InstanceOf AccessDeviceStatus)
             ? $status
             : new AccessDeviceStatus($status);
        $this->status->setName('status');
        return $this;
    }

    /**
     * 
     * @return AccessDeviceStatus
     */
    public function getStatus()
    {
        return $this->status->getValue();
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
     * @return AccessDevicePhysicalLocation
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
     * @return TransportProtocol
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
     * @return URL
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
     * @return MobilityManagerProvisioningUserName
     */
    public function getMobilityManagerProvisioningUserName()
    {
        return $this->mobilityManagerProvisioningUserName->getValue();
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
     * @return MobilityManagerServiceKey
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
     * @return MobilityManagerServiceKey
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
     * @return xs:boolean
     */
    public function getUseCustomUserNamePassword()
    {
        return $this->useCustomUserNamePassword->getValue();
    }

    /**
     * 
     */
    public function setUserName($userName = null)
    {
        if (!$userName) return $this;
        $this->userName = ($userName InstanceOf UserId)
             ? $userName
             : new UserId($userName);
        $this->userName->setName('userName');
        return $this;
    }

    /**
     * 
     * @return UserId
     */
    public function getUserName()
    {
        return $this->userName->getValue();
    }
}
