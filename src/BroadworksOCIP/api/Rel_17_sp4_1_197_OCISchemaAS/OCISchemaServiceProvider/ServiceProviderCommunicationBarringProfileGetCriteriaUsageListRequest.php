<?php
/**
 * This file is part of http://github.com/LukeBeer/BroadworksOCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceProvider; 

use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\CommunicationBarringCriteriaName;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ServiceProviderId;
use BroadworksOCIP\Builder\Types\ComplexInterface;
use BroadworksOCIP\Builder\Types\ComplexType;
use BroadworksOCIP\Response\ResponseOutput;
use BroadworksOCIP\Client\Client;


/**
 * Get a list of Communication Barring profiles within a service provider that have a given Communication Barring Criteria assigned.
 *         The response is either a ServiceProviderCommunicationBarringProfileGetCriteriaUsageListResponse 
 *         or an ErrorResponse.
 */
class ServiceProviderCommunicationBarringProfileGetCriteriaUsageListRequest extends ComplexType implements ComplexInterface
{
    public    $responseType = 'BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceProvider\ServiceProviderCommunicationBarringProfileGetCriteriaUsageListResponse';
    public    $elementName = 'ServiceProviderCommunicationBarringProfileGetCriteriaUsageListRequest';
    protected $serviceProviderId;
    protected $criteriaName;

    public function __construct(
         $serviceProviderId = '',
         $criteriaName = ''
    ) {
        $this->setServiceProviderId($serviceProviderId);
        $this->setCriteriaName($criteriaName);
    }

    /**
     * @return \BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceProvider\ServiceProviderCommunicationBarringProfileGetCriteriaUsageListResponse $response
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
    public function setCriteriaName($criteriaName = null)
    {
        $this->criteriaName = ($criteriaName InstanceOf CommunicationBarringCriteriaName)
             ? $criteriaName
             : new CommunicationBarringCriteriaName($criteriaName);
        $this->criteriaName->setElementName('criteriaName');
        return $this;
    }

    /**
     * 
     * @return CommunicationBarringCriteriaName $criteriaName
     */
    public function getCriteriaName()
    {
        return ($this->criteriaName)
            ? $this->criteriaName->getElementValue()
            : null;
    }
}
