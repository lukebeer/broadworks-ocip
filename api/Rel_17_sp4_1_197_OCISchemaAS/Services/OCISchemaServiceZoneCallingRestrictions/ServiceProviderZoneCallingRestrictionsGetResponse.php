<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceZoneCallingRestrictions; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\xs:boolean;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Response to ServiceProviderZoneCallingRestrictionsGetRequest
 */
class ServiceProviderZoneCallingRestrictionsGetResponse extends ComplexType implements ComplexInterface
{
    public    $name = __CLASS__;

    public function __construct(
             $enableZoneCallingRestrictions,
             $enableOriginationRoamingRestrictions,
             $enableEmergencyOriginationRoamingRestrictions,
             $enableTerminationRoamingRestrictions
    ) {
        $this->enableZoneCallingRestrictions                 = $enableZoneCallingRestrictions;
        $this->enableOriginationRoamingRestrictions          = $enableOriginationRoamingRestrictions;
        $this->enableEmergencyOriginationRoamingRestrictions = $enableEmergencyOriginationRoamingRestrictions;
        $this->enableTerminationRoamingRestrictions          = $enableTerminationRoamingRestrictions;
        $this->args                                          = func_get_args();
    }

    public function setEnableZoneCallingRestrictions($enableZoneCallingRestrictions)
    {
        $enableZoneCallingRestrictions and $this->enableZoneCallingRestrictions = new xs:boolean($enableZoneCallingRestrictions);
    }

    public function getEnableZoneCallingRestrictions()
    {
        return (!$this->enableZoneCallingRestrictions) ?: $this->enableZoneCallingRestrictions->value();
    }

    public function setEnableOriginationRoamingRestrictions($enableOriginationRoamingRestrictions)
    {
        $enableOriginationRoamingRestrictions and $this->enableOriginationRoamingRestrictions = new xs:boolean($enableOriginationRoamingRestrictions);
    }

    public function getEnableOriginationRoamingRestrictions()
    {
        return (!$this->enableOriginationRoamingRestrictions) ?: $this->enableOriginationRoamingRestrictions->value();
    }

    public function setEnableEmergencyOriginationRoamingRestrictions($enableEmergencyOriginationRoamingRestrictions)
    {
        $enableEmergencyOriginationRoamingRestrictions and $this->enableEmergencyOriginationRoamingRestrictions = new xs:boolean($enableEmergencyOriginationRoamingRestrictions);
    }

    public function getEnableEmergencyOriginationRoamingRestrictions()
    {
        return (!$this->enableEmergencyOriginationRoamingRestrictions) ?: $this->enableEmergencyOriginationRoamingRestrictions->value();
    }

    public function setEnableTerminationRoamingRestrictions($enableTerminationRoamingRestrictions)
    {
        $enableTerminationRoamingRestrictions and $this->enableTerminationRoamingRestrictions = new xs:boolean($enableTerminationRoamingRestrictions);
    }

    public function getEnableTerminationRoamingRestrictions()
    {
        return (!$this->enableTerminationRoamingRestrictions) ?: $this->enableTerminationRoamingRestrictions->value();
    }
}
