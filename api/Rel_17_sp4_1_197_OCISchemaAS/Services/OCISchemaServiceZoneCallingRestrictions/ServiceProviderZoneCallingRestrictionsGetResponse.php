<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceZoneCallingRestrictions; 

use Broadworks_OCIP\core\Builder\Types\PrimitiveType;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Response to ServiceProviderZoneCallingRestrictionsGetRequest
 */
class ServiceProviderZoneCallingRestrictionsGetResponse extends ComplexType implements ComplexInterface
{
    public    $name                                          = 'ServiceProviderZoneCallingRestrictionsGetResponse';
    protected $enableZoneCallingRestrictions                 = null;
    protected $enableOriginationRoamingRestrictions          = null;
    protected $enableEmergencyOriginationRoamingRestrictions = null;
    protected $enableTerminationRoamingRestrictions          = null;

    /**
     * @return ServiceProviderZoneCallingRestrictionsGetResponse
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * 
     */
    public function setEnableZoneCallingRestrictions($enableZoneCallingRestrictions = null)
    {
        if (!$enableZoneCallingRestrictions) return $this;
        $this->enableZoneCallingRestrictions = new PrimitiveType($enableZoneCallingRestrictions);
        $this->enableZoneCallingRestrictions->setName('enableZoneCallingRestrictions');
        return $this;
    }

    /**
     * 
     * @return xs:boolean
     */
    public function getEnableZoneCallingRestrictions()
    {
        return $this->enableZoneCallingRestrictions->getValue();
    }

    /**
     * 
     */
    public function setEnableOriginationRoamingRestrictions($enableOriginationRoamingRestrictions = null)
    {
        if (!$enableOriginationRoamingRestrictions) return $this;
        $this->enableOriginationRoamingRestrictions = new PrimitiveType($enableOriginationRoamingRestrictions);
        $this->enableOriginationRoamingRestrictions->setName('enableOriginationRoamingRestrictions');
        return $this;
    }

    /**
     * 
     * @return xs:boolean
     */
    public function getEnableOriginationRoamingRestrictions()
    {
        return $this->enableOriginationRoamingRestrictions->getValue();
    }

    /**
     * 
     */
    public function setEnableEmergencyOriginationRoamingRestrictions($enableEmergencyOriginationRoamingRestrictions = null)
    {
        if (!$enableEmergencyOriginationRoamingRestrictions) return $this;
        $this->enableEmergencyOriginationRoamingRestrictions = new PrimitiveType($enableEmergencyOriginationRoamingRestrictions);
        $this->enableEmergencyOriginationRoamingRestrictions->setName('enableEmergencyOriginationRoamingRestrictions');
        return $this;
    }

    /**
     * 
     * @return xs:boolean
     */
    public function getEnableEmergencyOriginationRoamingRestrictions()
    {
        return $this->enableEmergencyOriginationRoamingRestrictions->getValue();
    }

    /**
     * 
     */
    public function setEnableTerminationRoamingRestrictions($enableTerminationRoamingRestrictions = null)
    {
        if (!$enableTerminationRoamingRestrictions) return $this;
        $this->enableTerminationRoamingRestrictions = new PrimitiveType($enableTerminationRoamingRestrictions);
        $this->enableTerminationRoamingRestrictions->setName('enableTerminationRoamingRestrictions');
        return $this;
    }

    /**
     * 
     * @return xs:boolean
     */
    public function getEnableTerminationRoamingRestrictions()
    {
        return $this->enableTerminationRoamingRestrictions->getValue();
    }
}
