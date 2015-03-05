<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\NetAddress;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\OutgoingDN;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\xs:boolean;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ExternalEmergencyRoutingConnectionTimeoutSeconds;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Response to SystemExternalEmergencyRoutingParametersGetRequest13mp13.
 *         Contains a list of system External Emergency Routing parameters.
 */
class SystemExternalEmergencyRoutingParametersGetResponse13mp13 extends ComplexType implements ComplexInterface
{
    public    $name = __CLASS__;

    public function __construct(
             $serviceURI=null,
             $defaultEmergencyNumber=null,
             $isActive,
             $supportsDNSSRV,
             $connectionTimeoutSeconds
    ) {
        $this->serviceURI               = new NetAddress($serviceURI);
        $this->defaultEmergencyNumber   = new OutgoingDN($defaultEmergencyNumber);
        $this->isActive                 = $isActive;
        $this->supportsDNSSRV           = $supportsDNSSRV;
        $this->connectionTimeoutSeconds = $connectionTimeoutSeconds;
        $this->args                     = func_get_args();
    }

    public function setServiceURI($serviceURI)
    {
        $serviceURI and $this->serviceURI = new NetAddress($serviceURI);
    }

    public function getServiceURI()
    {
        return (!$this->serviceURI) ?: $this->serviceURI->value();
    }

    public function setDefaultEmergencyNumber($defaultEmergencyNumber)
    {
        $defaultEmergencyNumber and $this->defaultEmergencyNumber = new OutgoingDN($defaultEmergencyNumber);
    }

    public function getDefaultEmergencyNumber()
    {
        return (!$this->defaultEmergencyNumber) ?: $this->defaultEmergencyNumber->value();
    }

    public function setIsActive($isActive)
    {
        $isActive and $this->isActive = new xs:boolean($isActive);
    }

    public function getIsActive()
    {
        return (!$this->isActive) ?: $this->isActive->value();
    }

    public function setSupportsDNSSRV($supportsDNSSRV)
    {
        $supportsDNSSRV and $this->supportsDNSSRV = new xs:boolean($supportsDNSSRV);
    }

    public function getSupportsDNSSRV()
    {
        return (!$this->supportsDNSSRV) ?: $this->supportsDNSSRV->value();
    }

    public function setConnectionTimeoutSeconds($connectionTimeoutSeconds)
    {
        $connectionTimeoutSeconds and $this->connectionTimeoutSeconds = new ExternalEmergencyRoutingConnectionTimeoutSeconds($connectionTimeoutSeconds);
    }

    public function getConnectionTimeoutSeconds()
    {
        return (!$this->connectionTimeoutSeconds) ?: $this->connectionTimeoutSeconds->value();
    }
}
