<?php
/**
 * This file is part of http://github.com/LukeBeer/BroadworksOCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaEnterprise; 

use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\SessionAdmissionControlGroupName;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaEnterprise\EnterpriseAccessDevice;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ServiceProviderId;
use BroadworksOCIP\Builder\Types\ComplexInterface;
use BroadworksOCIP\Builder\Types\ComplexType;
use BroadworksOCIP\Response\ResponseOutput;
use BroadworksOCIP\Client\Client;


/**
 * Request to add one or more devices to an enterprise level session admission control group.
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class EnterpriseSessionAdmissionControlGroupAddDeviceListRequest extends ComplexType implements ComplexInterface
{
    public    $elementName = 'EnterpriseSessionAdmissionControlGroupAddDeviceListRequest';
    protected $serviceProviderId;
    protected $name;
    protected $devices;

    public function __construct(
         $serviceProviderId = '',
         $name = '',
         $devices = null
    ) {
        $this->setServiceProviderId($serviceProviderId);
        $this->setName($name);
        $this->setDevices($devices);
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
        $this->serviceProviderId->setElementName('serviceProviderId');
        return $this;
    }

    /**
     * 
     * @return ServiceProviderId $serviceProviderId
     */
    public function getServiceProviderId()
    {
        return ($this->serviceProviderId)
            ? $this->serviceProviderId->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setName($name = null)
    {
        $this->name = ($name InstanceOf SessionAdmissionControlGroupName)
             ? $name
             : new SessionAdmissionControlGroupName($name);
        $this->name->setElementName('name');
        return $this;
    }

    /**
     * 
     * @return SessionAdmissionControlGroupName $name
     */
    public function getName()
    {
        return ($this->name)
            ? $this->name->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setDevices(EnterpriseAccessDevice $devices = null)
    {
        $this->devices = ($devices InstanceOf EnterpriseAccessDevice)
             ? $devices
             : new EnterpriseAccessDevice($devices);
        $this->devices->setElementName('devices');
        return $this;
    }

    /**
     * 
     * @return EnterpriseAccessDevice $devices
     */
    public function getDevices()
    {
        return $this->devices;
    }
}
