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
     * Modify a department of a group.
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class GroupDepartmentModifyRequest extends ComplexType implements ComplexInterface
{
    public    $name                   = __CLASS__;
    protected $serviceProviderId      = null;
    protected $groupId                = null;
    protected $departmentName         = null;
    protected $newDepartmentName      = null;
    protected $newParentDepartmentKey = null;

    public function __construct(
         $serviceProviderId,
         $groupId,
         $departmentName,
         $newDepartmentName = null,
         DepartmentKey $newParentDepartmentKey = null
    ) {
        $this->setServiceProviderId($serviceProviderId);
        $this->setGroupId($groupId);
        $this->setDepartmentName($departmentName);
        $this->setNewDepartmentName($newDepartmentName);
        $this->setNewParentDepartmentKey($newParentDepartmentKey);
    }

    /**
     * Service Provider Id uniquely identifies a service provider.
     *         NOTE: The service provider id has a maximum length of 30 bytes, not 30 characters.
     */
    public function setServiceProviderId($serviceProviderId = null)
    {
        $this->serviceProviderId = ($serviceProviderId InstanceOf ServiceProviderId)
             ? $serviceProviderId
             : new ServiceProviderId($serviceProviderId);
    }

    /**
     * Service Provider Id uniquely identifies a service provider.
     *         NOTE: The service provider id has a maximum length of 30 bytes, not 30 characters.
     */
    public function getServiceProviderId()
    {
        return (!$this->serviceProviderId) ?: $this->serviceProviderId->getValue();
    }

    /**
     * Group Id identifies a group within a service provider or enterprise. The group id is not
     *         unique system wide. It must be combined with a service provider id to be unique across the system.
     */
    public function setGroupId($groupId = null)
    {
        $this->groupId = ($groupId InstanceOf GroupId)
             ? $groupId
             : new GroupId($groupId);
    }

    /**
     * Group Id identifies a group within a service provider or enterprise. The group id is not
     *         unique system wide. It must be combined with a service provider id to be unique across the system.
     */
    public function getGroupId()
    {
        return (!$this->groupId) ?: $this->groupId->getValue();
    }

    /**
     * Department name. This is only the name of the department itself, not the full path name
     *         of the department and all its parents.
     */
    public function setDepartmentName($departmentName = null)
    {
        $this->departmentName = ($departmentName InstanceOf DepartmentName)
             ? $departmentName
             : new DepartmentName($departmentName);
    }

    /**
     * Department name. This is only the name of the department itself, not the full path name
     *         of the department and all its parents.
     */
    public function getDepartmentName()
    {
        return (!$this->departmentName) ?: $this->departmentName->getValue();
    }

    /**
     * Department name. This is only the name of the department itself, not the full path name
     *         of the department and all its parents.
     */
    public function setNewDepartmentName($newDepartmentName = null)
    {
        $this->newDepartmentName = ($newDepartmentName InstanceOf DepartmentName)
             ? $newDepartmentName
             : new DepartmentName($newDepartmentName);
    }

    /**
     * Department name. This is only the name of the department itself, not the full path name
     *         of the department and all its parents.
     */
    public function getNewDepartmentName()
    {
        return (!$this->newDepartmentName) ?: $this->newDepartmentName->getValue();
    }

    /**
     * Uniquely identifies a department system-wide.
     *         Departments are contained in either an enterprise or a group. Enterprise departments can be
     *         used by any or all groups within the enterprise. Department names are unique within a group and
     *         within an enterprise, but the same department name can exist in 2 different groups or in both
     *         a group and its parent enterprise. Therefore, to uniquely identify a department, we must know
     *         the department name and which enterprise or group contains the department.
     *         This type is extended by group and enterprise department keys.
     */
    public function setNewParentDepartmentKey(DepartmentKey $newParentDepartmentKey = null)
    {
        $this->newParentDepartmentKey = DepartmentKey $newParentDepartmentKey;
    }

    /**
     * Uniquely identifies a department system-wide.
     *         Departments are contained in either an enterprise or a group. Enterprise departments can be
     *         used by any or all groups within the enterprise. Department names are unique within a group and
     *         within an enterprise, but the same department name can exist in 2 different groups or in both
     *         a group and its parent enterprise. Therefore, to uniquely identify a department, we must know
     *         the department name and which enterprise or group contains the department.
     *         This type is extended by group and enterprise department keys.
     */
    public function getNewParentDepartmentKey()
    {
        return (!$this->newParentDepartmentKey) ?: $this->newParentDepartmentKey->getValue();
    }
}
