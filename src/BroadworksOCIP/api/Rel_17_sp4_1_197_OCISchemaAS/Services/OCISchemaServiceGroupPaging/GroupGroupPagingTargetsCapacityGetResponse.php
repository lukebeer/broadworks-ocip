<?php
/**
 * This file is part of http://github.com/LukeBeer/BroadworksOCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceGroupPaging; 

use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceGroupPaging\GroupPagingMaxTargetCapacity;
use BroadworksOCIP\Builder\Types\ComplexInterface;
use BroadworksOCIP\Builder\Types\ComplexType;
use BroadworksOCIP\Response\ResponseOutput;
use BroadworksOCIP\Client\Client;


/**
 * Response to GroupGroupPagingTargetsCapacityGetRequest.
 */
class GroupGroupPagingTargetsCapacityGetResponse extends ComplexType implements ComplexInterface
{
    public    $elementName = 'GroupGroupPagingTargetsCapacityGetResponse';
    protected $maximumTargetUsersFromServiceProvider;
    protected $maximumTargetUsers;

    /**
     * @return \BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceGroupPaging\GroupGroupPagingTargetsCapacityGetResponse $response
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
        $this->maximumTargetUsersFromServiceProvider->setElementName('maximumTargetUsersFromServiceProvider');
        return $this;
    }

    /**
     * 
     * @return GroupPagingMaxTargetCapacity $maximumTargetUsersFromServiceProvider
     */
    public function getMaximumTargetUsersFromServiceProvider()
    {
        return ($this->maximumTargetUsersFromServiceProvider)
            ? $this->maximumTargetUsersFromServiceProvider->getElementValue()
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
