<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaGroup; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ServiceProviderId;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\GroupId;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\DepartmentName;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\DepartmentKey;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Modify a department of a group.
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class GroupDepartmentModifyRequest extends ComplexType implements ComplexInterface
{
    public    $name = __CLASS__;

    public function __construct(
             $serviceProviderId,
             $groupId,
             $departmentName,
             $newDepartmentName=null,
             DepartmentKey $newParentDepartmentKey=null
    ) {
        $this->serviceProviderId      = new ServiceProviderId($serviceProviderId);
        $this->groupId                = new GroupId($groupId);
        $this->departmentName         = new DepartmentName($departmentName);
        $this->newDepartmentName      = new DepartmentName($newDepartmentName);
        $this->newParentDepartmentKey = $newParentDepartmentKey;
        $this->args                   = func_get_args();
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

    public function setDepartmentName($departmentName)
    {
        $departmentName and $this->departmentName = new DepartmentName($departmentName);
    }

    public function getDepartmentName()
    {
        return (!$this->departmentName) ?: $this->departmentName->value();
    }

    public function setNewDepartmentName($newDepartmentName)
    {
        $newDepartmentName and $this->newDepartmentName = new DepartmentName($newDepartmentName);
    }

    public function getNewDepartmentName()
    {
        return (!$this->newDepartmentName) ?: $this->newDepartmentName->value();
    }

    public function setNewParentDepartmentKey($newParentDepartmentKey)
    {
        $newParentDepartmentKey and $this->newParentDepartmentKey = new DepartmentKey($newParentDepartmentKey);
    }

    public function getNewParentDepartmentKey()
    {
        return (!$this->newParentDepartmentKey) ?: $this->newParentDepartmentKey->value();
    }
}
