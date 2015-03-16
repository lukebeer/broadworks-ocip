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
    public    $name = 'ServiceProviderZoneCallingRestrictionsGetResponse';
    protected $enableZoneCallingRestrictions;
    protected $enableOriginationRoamingRestrictions;
    protected $enableEmergencyOriginationRoamingRestrictions;
    protected $enableTerminationRoamingRestrictions;

    /**
     * @return \Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceZoneCallingRestrictions\ServiceProviderZoneCallingRestrictionsGetResponse $response
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
        $this->enableZoneCallingRestrictions = new PrimitiveType($enableZoneCallingRestrictions);
        $this->enableZoneCallingRestrictions->setName('enableZoneCallingRestrictions');
        return $this;
    }

    /**
     * 
     * @return boolean $enableZoneCallingRestrictions
     */
    public function getEnableZoneCallingRestrictions()
    {
        return ($this->enableZoneCallingRestrictions) ? $this->enableZoneCallingRestrictions->getValue() : null;
    }

    /**
     * 
     */
    public function setEnableOriginationRoamingRestrictions($enableOriginationRoamingRestrictions = null)
    {
        $this->enableOriginationRoamingRestrictions = new PrimitiveType($enableOriginationRoamingRestrictions);
        $this->enableOriginationRoamingRestrictions->setName('enableOriginationRoamingRestrictions');
        return $this;
    }

    /**
     * 
     * @return boolean $enableOriginationRoamingRestrictions
     */
    public function getEnableOriginationRoamingRestrictions()
    {
        return ($this->enableOriginationRoamingRestrictions) ? $this->enableOriginationRoamingRestrictions->getValue() : null;
    }

    /**
     * 
     */
    public function setEnableEmergencyOriginationRoamingRestrictions($enableEmergencyOriginationRoamingRestrictions = null)
    {
        $this->enableEmergencyOriginationRoamingRestrictions = new PrimitiveType($enableEmergencyOriginationRoamingRestrictions);
        $this->enableEmergencyOriginationRoamingRestrictions->setName('enableEmergencyOriginationRoamingRestrictions');
        return $this;
    }

    /**
     * 
     * @return boolean $enableEmergencyOriginationRoamingRestrictions
     */
    public function getEnableEmergencyOriginationRoamingRestrictions()
    {
        return ($this->enableEmergencyOriginationRoamingRestrictions) ? $this->enableEmergencyOriginationRoamingRestrictions->getValue() : null;
    }

    /**
     * 
     */
    public function setEnableTerminationRoamingRestrictions($enableTerminationRoamingRestrictions = null)
    {
        $this->enableTerminationRoamingRestrictions = new PrimitiveType($enableTerminationRoamingRestrictions);
        $this->enableTerminationRoamingRestrictions->setName('enableTerminationRoamingRestrictions');
        return $this;
    }

    /**
     * 
     * @return boolean $enableTerminationRoamingRestrictions
     */
    public function getEnableTerminationRoamingRestrictions()
    {
        return ($this->enableTerminationRoamingRestrictions) ? $this->enableTerminationRoamingRestrictions->getValue() : null;
    }
}
