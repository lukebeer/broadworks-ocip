<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem\ExternalEmergencyRoutingConnectionTimeoutSeconds;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\OutgoingDN;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\NetAddress;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Response to SystemExternalEmergencyRoutingParametersGetRequest13mp13.
 *         Contains a list of system External Emergency Routing parameters.
 */
class SystemExternalEmergencyRoutingParametersGetResponse13mp13 extends ComplexType implements ComplexInterface
{
    public    $name                      = __CLASS__;
    protected $serviceURI                = null;
    protected $defaultEmergencyNumber    = null;
    protected $isActive                  = null;
    protected $supportsDNSSRV            = null;
    protected $connectionTimeoutSeconds  = null;


    public function setServiceURI($serviceURI = null)
    {
        $this->serviceURI = ($serviceURI InstanceOf NetAddress)
             ? $serviceURI
             : new NetAddress($serviceURI);
    }

    public function getServiceURI()
    {
        return (!$this->serviceURI) ?: $this->serviceURI->value();
    }

    public function setDefaultEmergencyNumber($defaultEmergencyNumber = null)
    {
        $this->defaultEmergencyNumber = ($defaultEmergencyNumber InstanceOf OutgoingDN)
             ? $defaultEmergencyNumber
             : new OutgoingDN($defaultEmergencyNumber);
    }

    public function getDefaultEmergencyNumber()
    {
        return (!$this->defaultEmergencyNumber) ?: $this->defaultEmergencyNumber->value();
    }

    public function setIsActive(xs:boolean $isActive = null)
    {
    }

    public function getIsActive()
    {
        return (!$this->isActive) ?: $this->isActive->value();
    }

    public function setSupportsDNSSRV(xs:boolean $supportsDNSSRV = null)
    {
    }

    public function getSupportsDNSSRV()
    {
        return (!$this->supportsDNSSRV) ?: $this->supportsDNSSRV->value();
    }

    public function setConnectionTimeoutSeconds($connectionTimeoutSeconds = null)
    {
        $this->connectionTimeoutSeconds = ($connectionTimeoutSeconds InstanceOf ExternalEmergencyRoutingConnectionTimeoutSeconds)
             ? $connectionTimeoutSeconds
             : new ExternalEmergencyRoutingConnectionTimeoutSeconds($connectionTimeoutSeconds);
    }

    public function getConnectionTimeoutSeconds()
    {
        return (!$this->connectionTimeoutSeconds) ?: $this->connectionTimeoutSeconds->value();
    }
}
