<?php
/**
 * This file is part of http://github.com/LukeBeer/BroadworksOCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceZoneCallingRestrictions; 

use BroadworksOCIP\Builder\Types\PrimitiveType;
use BroadworksOCIP\Builder\Types\ComplexInterface;
use BroadworksOCIP\Builder\Types\ComplexType;
use BroadworksOCIP\Response\ResponseOutput;
use BroadworksOCIP\Client\Client;


/**
 * Response to ServiceProviderZoneCallingRestrictionsGetRequest
 */
class ServiceProviderZoneCallingRestrictionsGetResponse extends ComplexType implements ComplexInterface
{
    public    $elementName = 'ServiceProviderZoneCallingRestrictionsGetResponse';
    protected $enableZoneCallingRestrictions;
    protected $enableOriginationRoamingRestrictions;
    protected $enableEmergencyOriginationRoamingRestrictions;
    protected $enableTerminationRoamingRestrictions;

    /**
     * @return \BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceZoneCallingRestrictions\ServiceProviderZoneCallingRestrictionsGetResponse $response
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
        $this->enableZoneCallingRestrictions->setElementName('enableZoneCallingRestrictions');
        return $this;
    }

    /**
     * 
     * @return boolean $enableZoneCallingRestrictions
     */
    public function getEnableZoneCallingRestrictions()
    {
        return ($this->enableZoneCallingRestrictions)
            ? $this->enableZoneCallingRestrictions->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setEnableOriginationRoamingRestrictions($enableOriginationRoamingRestrictions = null)
    {
        $this->enableOriginationRoamingRestrictions = new PrimitiveType($enableOriginationRoamingRestrictions);
        $this->enableOriginationRoamingRestrictions->setElementName('enableOriginationRoamingRestrictions');
        return $this;
    }

    /**
     * 
     * @return boolean $enableOriginationRoamingRestrictions
     */
    public function getEnableOriginationRoamingRestrictions()
    {
        return ($this->enableOriginationRoamingRestrictions)
            ? $this->enableOriginationRoamingRestrictions->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setEnableEmergencyOriginationRoamingRestrictions($enableEmergencyOriginationRoamingRestrictions = null)
    {
        $this->enableEmergencyOriginationRoamingRestrictions = new PrimitiveType($enableEmergencyOriginationRoamingRestrictions);
        $this->enableEmergencyOriginationRoamingRestrictions->setElementName('enableEmergencyOriginationRoamingRestrictions');
        return $this;
    }

    /**
     * 
     * @return boolean $enableEmergencyOriginationRoamingRestrictions
     */
    public function getEnableEmergencyOriginationRoamingRestrictions()
    {
        return ($this->enableEmergencyOriginationRoamingRestrictions)
            ? $this->enableEmergencyOriginationRoamingRestrictions->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setEnableTerminationRoamingRestrictions($enableTerminationRoamingRestrictions = null)
    {
        $this->enableTerminationRoamingRestrictions = new PrimitiveType($enableTerminationRoamingRestrictions);
        $this->enableTerminationRoamingRestrictions->setElementName('enableTerminationRoamingRestrictions');
        return $this;
    }

    /**
     * 
     * @return boolean $enableTerminationRoamingRestrictions
     */
    public function getEnableTerminationRoamingRestrictions()
    {
        return ($this->enableTerminationRoamingRestrictions)
            ? $this->enableTerminationRoamingRestrictions->getElementValue()
            : null;
    }
}
