<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceZoneCallingRestrictions; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ServiceProviderId;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
     * Modifies the Service Provider/Enterprise level Zone Calling Restrictions Policies.
 *         The response is SuccessResponse or an ErrorResponse.
 */
class ServiceProviderZoneCallingRestrictionsModifyRequest extends ComplexType implements ComplexInterface
{
    public    $name                                          = __CLASS__;
    protected $serviceProviderId                             = null;
    protected $enableZoneCallingRestrictions                 = null;
    protected $enableOriginationRoamingRestrictions          = null;
    protected $enableEmergencyOriginationRoamingRestrictions = null;
    protected $enableTerminationRoamingRestrictions          = null;

    public function __construct(
         $serviceProviderId,
         $enableZoneCallingRestrictions = null,
         $enableOriginationRoamingRestrictions = null,
         $enableEmergencyOriginationRoamingRestrictions = null,
         $enableTerminationRoamingRestrictions = null
    ) {
        $this->setServiceProviderId($serviceProviderId);
        $this->setEnableZoneCallingRestrictions($enableZoneCallingRestrictions);
        $this->setEnableOriginationRoamingRestrictions($enableOriginationRoamingRestrictions);
        $this->setEnableEmergencyOriginationRoamingRestrictions($enableEmergencyOriginationRoamingRestrictions);
        $this->setEnableTerminationRoamingRestrictions($enableTerminationRoamingRestrictions);
    }

    /**
     * Service Provider Id uniquely identifies a service provider.
     *         NOTE: The service provider id has a maximum length of 30 bytes, not 30 characters.
     */
    public function setServiceProviderId($serviceProviderId = null)
    {
        $this->serviceProviderId = ($serviceProviderId InstanceOf ServiceProviderId)
             ? $serviceProviderId
             : new ServiceProviderId($serviceProviderId);
    }

    /**
     * Service Provider Id uniquely identifies a service provider.
     *         NOTE: The service provider id has a maximum length of 30 bytes, not 30 characters.
     */
    public function getServiceProviderId()
    {
        return (!$this->serviceProviderId) ?: $this->serviceProviderId->getValue();
    }

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
