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
    public    $name = 'GroupGroupPagingTargetsCapacityGetResponse';
    protected $maximumTargetUsersFromServiceProvider;
    protected $maximumTargetUsers;

    /**
     * @return \Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceGroupPaging\GroupGroupPagingTargetsCapacityGetResponse $response
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
        $this->maximumTargetUsersFromServiceProvider = ($maximumTargetUsersFromServiceProvider InstanceOf GroupPagingMaxTargetCapacity)
             ? $maximumTargetUsersFromServiceProvider
             : new GroupPagingMaxTargetCapacity($maximumTargetUsersFromServiceProvider);
        $this->maximumTargetUsersFromServiceProvider->setName('maximumTargetUsersFromServiceProvider');
        return $this;
    }

    /**
     * 
     * @return GroupPagingMaxTargetCapacity $maximumTargetUsersFromServiceProvider
     */
    public function getMaximumTargetUsersFromServiceProvider()
    {
        return ($this->maximumTargetUsersFromServiceProvider) ? $this->maximumTargetUsersFromServiceProvider->getValue() : null;
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
