<?php
/**
 * This file is part of http://github.com/LukeBeer/BroadworksOCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceGroupPaging; 

use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceGroupPaging\GroupPagingMaxTargetCapacity;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ServiceProviderId;
use BroadworksOCIP\Builder\Types\ComplexInterface;
use BroadworksOCIP\Builder\Types\ComplexType;
use BroadworksOCIP\Response\ResponseOutput;
use BroadworksOCIP\Client\Client;


/**
 * Modify the maximum number of target users per paging group configured for a service provider.
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class ServiceProviderGroupPagingTargetsCapacityModifyRequest extends ComplexType implements ComplexInterface
{
    public    $elementName = 'ServiceProviderGroupPagingTargetsCapacityModifyRequest';
    protected $serviceProviderId;
    protected $maximumTargetUsers;

    public function __construct(
         $serviceProviderId = '',
         $maximumTargetUsers = null
    ) {
        $this->setServiceProviderId($serviceProviderId);
        $this->setMaximumTargetUsers($maximumTargetUsers);
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
    public function setMaximumTargetUsers($maximumTargetUsers = null)
    {
        $this->maximumTargetUsers = ($maximumTargetUsers InstanceOf GroupPagingMaxTargetCapacity)
             ? $maximumTargetUsers
             : new GroupPagingMaxTargetCapacity($maximumTargetUsers);
        $this->maximumTargetUsers->setElementName('maximumTargetUsers');
        return $this;
    }

    /**
     * 
     * @return GroupPagingMaxTargetCapacity $maximumTargetUsers
     */
    public function getMaximumTargetUsers()
    {
        return ($this->maximumTargetUsers)
            ? $this->maximumTargetUsers->getElementValue()
            : null;
    }
}
