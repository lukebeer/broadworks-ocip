<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaEnterprise; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\SessionAdmissionControlGroupName;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaEnterprise\EnterpriseAccessDevice;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ServiceProviderId;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Request to delete one or more devices from an enterprise level session admission control group.
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class EnterpriseSessionAdmissionControlGroupDeleteDeviceListRequest extends ComplexType implements ComplexInterface
{
    public    $name = 'EnterpriseSessionAdmissionControlGroupDeleteDeviceListRequest';
    protected $serviceProviderId;
    protected $name;
    protected $devices;

    public function __construct(
         $serviceProviderId = '',
         $name = '',
         EnterpriseAccessDevice $devices = null
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
    public function setName($name = null)
    {
        $this->name = ($name InstanceOf SessionAdmissionControlGroupName)
             ? $name
             : new SessionAdmissionControlGroupName($name);
        $this->name->setName('name');
        return $this;
    }

    /**
     * 
     * @return SessionAdmissionControlGroupName $name
     */
    public function getName()
    {
        return ($this->name) ? $this->name->getValue() : null;
    }

    /**
     * 
     */
    public function setDevices(EnterpriseAccessDevice $devices = null)
    {
        $this->devices = ($devices InstanceOf EnterpriseAccessDevice)
             ? $devices
             : new EnterpriseAccessDevice($devices);
        $this->devices->setName('devices');
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
