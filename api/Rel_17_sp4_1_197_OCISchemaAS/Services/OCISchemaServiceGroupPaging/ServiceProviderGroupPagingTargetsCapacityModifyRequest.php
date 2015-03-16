<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceGroupPaging; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceGroupPaging\GroupPagingMaxTargetCapacity;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ServiceProviderId;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Modify the maximum number of target users per paging group configured for a service provider.
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class ServiceProviderGroupPagingTargetsCapacityModifyRequest extends ComplexType implements ComplexInterface
{
    public    $name = 'ServiceProviderGroupPagingTargetsCapacityModifyRequest';
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
        $this->serviceProviderId->setName('serviceProviderId');
        return $this;
    }

    /**
     * 
     * @return ServiceProviderId $serviceProviderId
     */
    public function getServiceProviderId()
    {
        return ($this->serviceProviderId) ? $this->serviceProviderId->getValue() : null;
    }

    /**
     * 
     */
    public function setMaximumTargetUsers($maximumTargetUsers = null)
    {
        $this->maximumTargetUsers = ($maximumTargetUsers InstanceOf GroupPagingMaxTargetCapacity)
             ? $maximumTargetUsers
             : new GroupPagingMaxTargetCapacity($maximumTargetUsers);
        $this->maximumTargetUsers->setName('maximumTargetUsers');
        return $this;
    }

    /**
     * 
     * @return GroupPagingMaxTargetCapacity $maximumTargetUsers
     */
    public function getMaximumTargetUsers()
    {
        return ($this->maximumTargetUsers) ? $this->maximumTargetUsers->getValue() : null;
    }
}
