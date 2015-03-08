<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceGroupPaging; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceGroupPaging\GroupPagingMaxTargetCapacity;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
     * Response to GroupGroupPagingTargetsCapacityGetRequest.
 */
class GroupGroupPagingTargetsCapacityGetResponse extends ComplexType implements ComplexInterface
{
    const     RESPONSE_TYPE                          = 'Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceGroupPaging\GroupGroupPagingTargetsCapacityGetResponse';
    public    $name                                  = __CLASS__;
    protected $maximumTargetUsersFromServiceProvider = null;
    protected $maximumTargetUsers                    = null;


    /**
     * Maximum number of targets per Paging Group
     */
    public function setMaximumTargetUsersFromServiceProvider($maximumTargetUsersFromServiceProvider = null)
    {
        $this->maximumTargetUsersFromServiceProvider = ($maximumTargetUsersFromServiceProvider InstanceOf GroupPagingMaxTargetCapacity)
             ? $maximumTargetUsersFromServiceProvider
             : new GroupPagingMaxTargetCapacity($maximumTargetUsersFromServiceProvider);
    }

    /**
     * Maximum number of targets per Paging Group
     */
    public function getMaximumTargetUsersFromServiceProvider()
    {
        return (!$this->maximumTargetUsersFromServiceProvider) ?: $this->maximumTargetUsersFromServiceProvider->getValue();
    }

    /**
     * Maximum number of targets per Paging Group
     */
    public function setMaximumTargetUsers($maximumTargetUsers = null)
    {
        $this->maximumTargetUsers = ($maximumTargetUsers InstanceOf GroupPagingMaxTargetCapacity)
             ? $maximumTargetUsers
             : new GroupPagingMaxTargetCapacity($maximumTargetUsers);
    }

    /**
     * Maximum number of targets per Paging Group
     */
    public function getMaximumTargetUsers()
    {
        return (!$this->maximumTargetUsers) ?: $this->maximumTargetUsers->getValue();
    }
}
