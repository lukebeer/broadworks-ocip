<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceMusicOnHold; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ServiceProviderId;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\GroupId;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\DepartmentName;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Returns a list of all departments that have a Music On Hold instance.
 *         The response is either GroupMusicOnHoldGetDepartmentListResponse or ErrorResponse.
 *         It is possible to get the instances within a specified department.
 */
class GroupMusicOnHoldGetDepartmentListRequest extends ComplexType implements ComplexInterface
{
    public    $name = __CLASS__;

    public function __construct(
             $serviceProviderId,
             $groupId,
             $groupDepartmentName=null
    ) {
        $this->serviceProviderId   = new ServiceProviderId($serviceProviderId);
        $this->groupId             = new GroupId($groupId);
        $this->groupDepartmentName = new DepartmentName($groupDepartmentName);
        $this->args                = func_get_args();
    }

    public function setServiceProviderId($serviceProviderId)
    {
        $serviceProviderId and $this->serviceProviderId = new ServiceProviderId($serviceProviderId);
    }

    public function getServiceProviderId()
    {
        return (!$this->serviceProviderId) ?: $this->serviceProviderId->value();
    }

    public function setGroupId($groupId)
    {
        $groupId and $this->groupId = new GroupId($groupId);
    }

    public function getGroupId()
    {
        return (!$this->groupId) ?: $this->groupId->value();
    }

    public function setGroupDepartmentName($groupDepartmentName)
    {
        $groupDepartmentName and $this->groupDepartmentName = new DepartmentName($groupDepartmentName);
    }

    public function getGroupDepartmentName()
    {
        return (!$this->groupDepartmentName) ?: $this->groupDepartmentName->value();
    }
}
