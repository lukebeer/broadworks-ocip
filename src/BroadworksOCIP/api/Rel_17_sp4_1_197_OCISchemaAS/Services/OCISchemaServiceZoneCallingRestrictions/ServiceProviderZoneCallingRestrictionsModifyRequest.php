<?php
/**
 * This file is part of http://github.com/LukeBeer/BroadworksOCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceZoneCallingRestrictions; 

use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ServiceProviderId;
use BroadworksOCIP\Builder\Types\PrimitiveType;
use BroadworksOCIP\Builder\Types\ComplexInterface;
use BroadworksOCIP\Builder\Types\ComplexType;
use BroadworksOCIP\Response\ResponseOutput;
use BroadworksOCIP\Client\Client;


/**
 * Modifies the Service Provider/Enterprise level Zone Calling Restrictions Policies.
 *         The response is SuccessResponse or an ErrorResponse.
 */
class ServiceProviderZoneCallingRestrictionsModifyRequest extends ComplexType implements ComplexInterface
{
    public    $elementName = 'ServiceProviderZoneCallingRestrictionsModifyRequest';
    protected $serviceProviderId;
    protected $enableZoneCallingRestrictions;
    protected $enableOriginationRoamingRestrictions;
    protected $enableEmergencyOriginationRoamingRestrictions;
    protected $enableTerminationRoamingRestrictions;

    public function __construct(
         $serviceProviderId = '',
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
        $this->serviceProviderId->setElementName('serviceProviderId');
        return $this;
    }

    /**
     * 
     * @return ServiceProviderId $serviceProviderId
     */
    public function getServiceProviderId()
    {
        return ($this->serviceProviderId)
            ? $this->serviceProviderId->getElementValue()
            : null;
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
