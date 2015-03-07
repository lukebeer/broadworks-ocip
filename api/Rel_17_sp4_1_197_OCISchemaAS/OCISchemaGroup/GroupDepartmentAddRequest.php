<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaGroup; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ServiceProviderId;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\DepartmentName;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\DepartmentKey;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\GroupId;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Add a department to a group.
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class GroupDepartmentAddRequest extends ComplexType implements ComplexInterface
{
    public    $name                 = __CLASS__;
    protected $serviceProviderId    = null;
    protected $groupId              = null;
    protected $departmentName       = null;
    protected $parentDepartmentKey  = null;

    public function __construct(
         $serviceProviderId,
         $groupId,
         $departmentName,
         DepartmentKey $parentDepartmentKey = null
    ) {
        $this->setServiceProviderId($serviceProviderId);
        $this->setGroupId($groupId);
        $this->setDepartmentName($departmentName);
        $this->setParentDepartmentKey($parentDepartmentKey);
    }

    public function setServiceProviderId($serviceProviderId = null)
    {
        $this->serviceProviderId = ($serviceProviderId InstanceOf ServiceProviderId)
             ? $serviceProviderId
             : new ServiceProviderId($serviceProviderId);
    }

    public function getServiceProviderId()
    {
        return (!$this->serviceProviderId) ?: $this->serviceProviderId->value();
    }

    public function setGroupId($groupId = null)
    {
        $this->groupId = ($groupId InstanceOf GroupId)
             ? $groupId
             : new GroupId($groupId);
    }

    public function getGroupId()
    {
        return (!$this->groupId) ?: $this->groupId->value();
    }

    public function setDepartmentName($departmentName = null)
    {
        $this->departmentName = ($departmentName InstanceOf DepartmentName)
             ? $departmentName
             : new DepartmentName($departmentName);
    }

    public function getDepartmentName()
    {
        return (!$this->departmentName) ?: $this->departmentName->value();
    }

    public function setParentDepartmentKey(DepartmentKey $parentDepartmentKey = null)
    {
    }

    public function getParentDepartmentKey()
    {
        return (!$this->parentDepartmentKey) ?: $this->parentDepartmentKey->value();
    }
}
