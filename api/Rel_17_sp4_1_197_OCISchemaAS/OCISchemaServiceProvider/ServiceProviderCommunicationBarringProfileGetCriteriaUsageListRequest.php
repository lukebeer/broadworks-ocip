<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceProvider; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\CommunicationBarringCriteriaName;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ServiceProviderId;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceProvider\ServiceProviderCommunicationBarringProfileGetCriteriaUsageListResponse;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Get a list of Communication Barring profiles within a service provider that have a given Communication Barring Criteria assigned.
 *         The response is either a ServiceProviderCommunicationBarringProfileGetCriteriaUsageListResponse 
 *         or an ErrorResponse.
 */
class ServiceProviderCommunicationBarringProfileGetCriteriaUsageListRequest extends ComplexType implements ComplexInterface
{
    public    $responseType      = 'Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceProvider\ServiceProviderCommunicationBarringProfileGetCriteriaUsageListResponse';
    public    $name              = __CLASS__;
    protected $serviceProviderId = null;
    protected $criteriaName      = null;

    public function __construct(
         $serviceProviderId,
         $criteriaName
    ) {
        $this->setServiceProviderId($serviceProviderId);
        $this->setCriteriaName($criteriaName);
    }

    /**
     * @return ServiceProviderCommunicationBarringProfileGetCriteriaUsageListResponse
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
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
     * Communication Barring Criteria Name
     */
    public function setCriteriaName($criteriaName = null)
    {
        $this->criteriaName = ($criteriaName InstanceOf CommunicationBarringCriteriaName)
             ? $criteriaName
             : new CommunicationBarringCriteriaName($criteriaName);
    }

    /**
     * Communication Barring Criteria Name
     */
    public function getCriteriaName()
    {
        return (!$this->criteriaName) ?: $this->criteriaName->getValue();
    }
}
