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
    const     RESPONSE_TYPE                                  = 'Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceZoneCallingRestrictions\ServiceProviderZoneCallingRestrictionsGetResponse';
    public    $name                                          = __CLASS__;
    protected $enableZoneCallingRestrictions                 = null;
    protected $enableOriginationRoamingRestrictions          = null;
    protected $enableEmergencyOriginationRoamingRestrictions = null;
    protected $enableTerminationRoamingRestrictions          = null;


    /**
     * 
     */
    public function setEnableZoneCallingRestrictions($enableZoneCallingRestrictions = null)
    {
        $this->enableZoneCallingRestrictions = (boolean) $enableZoneCallingRestrictions;
    }

    /**
     * 
     */
    public function getEnableZoneCallingRestrictions()
    {
        return (!$this->enableZoneCallingRestrictions) ?: $this->enableZoneCallingRestrictions->getValue();
    }

    /**
     * 
     */
    public function setEnableOriginationRoamingRestrictions($enableOriginationRoamingRestrictions = null)
    {
        $this->enableOriginationRoamingRestrictions = (boolean) $enableOriginationRoamingRestrictions;
    }

    /**
     * 
     */
    public function getEnableOriginationRoamingRestrictions()
    {
        return (!$this->enableOriginationRoamingRestrictions) ?: $this->enableOriginationRoamingRestrictions->getValue();
    }

    /**
     * 
     */
    public function setEnableEmergencyOriginationRoamingRestrictions($enableEmergencyOriginationRoamingRestrictions = null)
    {
        $this->enableEmergencyOriginationRoamingRestrictions = (boolean) $enableEmergencyOriginationRoamingRestrictions;
    }

    /**
     * 
     */
    public function getEnableEmergencyOriginationRoamingRestrictions()
    {
        return (!$this->enableEmergencyOriginationRoamingRestrictions) ?: $this->enableEmergencyOriginationRoamingRestrictions->getValue();
    }

    /**
     * 
     */
    public function setEnableTerminationRoamingRestrictions($enableTerminationRoamingRestrictions = null)
    {
        $this->enableTerminationRoamingRestrictions = (boolean) $enableTerminationRoamingRestrictions;
    }

    /**
     * 
     */
    public function getEnableTerminationRoamingRestrictions()
    {
        return (!$this->enableTerminationRoamingRestrictions) ?: $this->enableTerminationRoamingRestrictions->getValue();
    }
}
