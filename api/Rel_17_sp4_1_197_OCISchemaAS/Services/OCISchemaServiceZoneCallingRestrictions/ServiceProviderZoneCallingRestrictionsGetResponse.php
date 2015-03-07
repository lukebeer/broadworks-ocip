<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceZoneCallingRestrictions; 


use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Response to ServiceProviderZoneCallingRestrictionsGetRequest
 */
class ServiceProviderZoneCallingRestrictionsGetResponse extends ComplexType implements ComplexInterface
{
    public    $name                                           = __CLASS__;
    protected $enableZoneCallingRestrictions                  = null;
    protected $enableOriginationRoamingRestrictions           = null;
    protected $enableEmergencyOriginationRoamingRestrictions  = null;
    protected $enableTerminationRoamingRestrictions           = null;


    public function setEnableZoneCallingRestrictions(xs:boolean $enableZoneCallingRestrictions = null)
    {
    }

    public function getEnableZoneCallingRestrictions()
    {
        return (!$this->enableZoneCallingRestrictions) ?: $this->enableZoneCallingRestrictions->value();
    }

    public function setEnableOriginationRoamingRestrictions(xs:boolean $enableOriginationRoamingRestrictions = null)
    {
    }

    public function getEnableOriginationRoamingRestrictions()
    {
        return (!$this->enableOriginationRoamingRestrictions) ?: $this->enableOriginationRoamingRestrictions->value();
    }

    public function setEnableEmergencyOriginationRoamingRestrictions(xs:boolean $enableEmergencyOriginationRoamingRestrictions = null)
    {
    }

    public function getEnableEmergencyOriginationRoamingRestrictions()
    {
        return (!$this->enableEmergencyOriginationRoamingRestrictions) ?: $this->enableEmergencyOriginationRoamingRestrictions->value();
    }

    public function setEnableTerminationRoamingRestrictions(xs:boolean $enableTerminationRoamingRestrictions = null)
    {
    }

    public function getEnableTerminationRoamingRestrictions()
    {
        return (!$this->enableTerminationRoamingRestrictions) ?: $this->enableTerminationRoamingRestrictions->value();
    }
}
