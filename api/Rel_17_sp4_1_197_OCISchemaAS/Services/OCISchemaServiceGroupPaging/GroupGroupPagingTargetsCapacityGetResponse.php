<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceGroupPaging; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceGroupPaging\GroupPagingMaxTargetCapacity;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Response to GroupGroupPagingTargetsCapacityGetRequest.
 */
class GroupGroupPagingTargetsCapacityGetResponse extends ComplexType implements ComplexInterface
{
    public    $name                                  = 'GroupGroupPagingTargetsCapacityGetResponse';
    protected $maximumTargetUsersFromServiceProvider = null;
    protected $maximumTargetUsers                    = null;

    /**
     * @return GroupGroupPagingTargetsCapacityGetResponse
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * 
     */
    public function setMaximumTargetUsersFromServiceProvider($maximumTargetUsersFromServiceProvider = null)
    {
        if (!$maximumTargetUsersFromServiceProvider) return $this;
        $this->maximumTargetUsersFromServiceProvider = ($maximumTargetUsersFromServiceProvider InstanceOf GroupPagingMaxTargetCapacity)
             ? $maximumTargetUsersFromServiceProvider
             : new GroupPagingMaxTargetCapacity($maximumTargetUsersFromServiceProvider);
        $this->maximumTargetUsersFromServiceProvider->setName('maximumTargetUsersFromServiceProvider');
        return $this;
    }

    /**
     * 
     * @return GroupPagingMaxTargetCapacity
     */
    public function getMaximumTargetUsersFromServiceProvider()
    {
        return $this->maximumTargetUsersFromServiceProvider->getValue();
    }

    /**
     * 
     */
    public function setMaximumTargetUsers($maximumTargetUsers = null)
    {
        if (!$maximumTargetUsers) return $this;
        $this->maximumTargetUsers = ($maximumTargetUsers InstanceOf GroupPagingMaxTargetCapacity)
             ? $maximumTargetUsers
             : new GroupPagingMaxTargetCapacity($maximumTargetUsers);
        $this->maximumTargetUsers->setName('maximumTargetUsers');
        return $this;
    }

    /**
     * 
     * @return GroupPagingMaxTargetCapacity
     */
    public function getMaximumTargetUsers()
    {
        return $this->maximumTargetUsers->getValue();
    }
}
