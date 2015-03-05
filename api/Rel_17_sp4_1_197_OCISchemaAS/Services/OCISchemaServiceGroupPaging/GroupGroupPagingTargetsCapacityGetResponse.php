<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceGroupPaging; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\GroupPagingMaxTargetCapacity;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Response to GroupGroupPagingTargetsCapacityGetRequest.
 */
class GroupGroupPagingTargetsCapacityGetResponse extends ComplexType implements ComplexInterface
{
    public    $name = __CLASS__;

    public function __construct(
             $maximumTargetUsersFromServiceProvider,
             $maximumTargetUsers
    ) {
        $this->maximumTargetUsersFromServiceProvider = $maximumTargetUsersFromServiceProvider;
        $this->maximumTargetUsers                    = $maximumTargetUsers;
        $this->args                                  = func_get_args();
    }

    public function setMaximumTargetUsersFromServiceProvider($maximumTargetUsersFromServiceProvider)
    {
        $maximumTargetUsersFromServiceProvider and $this->maximumTargetUsersFromServiceProvider = new GroupPagingMaxTargetCapacity($maximumTargetUsersFromServiceProvider);
    }

    public function getMaximumTargetUsersFromServiceProvider()
    {
        return (!$this->maximumTargetUsersFromServiceProvider) ?: $this->maximumTargetUsersFromServiceProvider->value();
    }

    public function setMaximumTargetUsers($maximumTargetUsers)
    {
        $maximumTargetUsers and $this->maximumTargetUsers = new GroupPagingMaxTargetCapacity($maximumTargetUsers);
    }

    public function getMaximumTargetUsers()
    {
        return (!$this->maximumTargetUsers) ?: $this->maximumTargetUsers->value();
    }
}
