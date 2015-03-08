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
     * Response to ServiceProviderGroupPagingTargetsCapacityGetRequest.
 */
class ServiceProviderGroupPagingTargetsCapacityGetResponse extends ComplexType implements ComplexInterface
{
    const     RESPONSE_TYPE       = 'Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceGroupPaging\ServiceProviderGroupPagingTargetsCapacityGetResponse';
    public    $name               = __CLASS__;
    protected $maximumTargetUsers = null;


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
