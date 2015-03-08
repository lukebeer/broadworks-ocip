<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceIncomingCallingPlan; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceIncomingCallingPlan\IncomingCallingPlanDepartmentPermissionsModify;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceIncomingCallingPlan\IncomingCallingPlanPermissionsModify;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ServiceProviderId;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\GroupId;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
     * Change the group's incoming calling plan settings.
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class GroupIncomingCallingPlanModifyListRequest extends ComplexType implements ComplexInterface
{
    public    $name                  = __CLASS__;
    protected $serviceProviderId     = null;
    protected $groupId               = null;
    protected $groupPermissions      = null;
    protected $departmentPermissions = null;

    public function __construct(
         $serviceProviderId,
         $groupId,
         IncomingCallingPlanPermissionsModify $groupPermissions = null,
         IncomingCallingPlanDepartmentPermissionsModify $departmentPermissions = null
    ) {
        $this->setServiceProviderId($serviceProviderId);
        $this->setGroupId($groupId);
        $this->setGroupPermissions($groupPermissions);
        $this->setDepartmentPermissions($departmentPermissions);
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
     * Allows or disallows various types of incoming calls for a user or group -- not any particular department.
     *         For use when modifing settings.
     */
    public function setGroupPermissions(IncomingCallingPlanPermissionsModify $groupPermissions = null)
    {
        $this->groupPermissions = IncomingCallingPlanPermissionsModify $groupPermissions;
    }

    /**
     * Allows or disallows various types of incoming calls for a user or group -- not any particular department.
     *         For use when modifing settings.
     */
    public function getGroupPermissions()
    {
        return (!$this->groupPermissions) ?: $this->groupPermissions->getValue();
    }

    /**
     * Allows or disallows various types of incoming calls for a specified department.
     *         For use when modifing settings.
     */
    public function setDepartmentPermissions(IncomingCallingPlanDepartmentPermissionsModify $departmentPermissions = null)
    {
        $this->departmentPermissions = IncomingCallingPlanDepartmentPermissionsModify $departmentPermissions;
    }

    /**
     * Allows or disallows various types of incoming calls for a specified department.
     *         For use when modifing settings.
     */
    public function getDepartmentPermissions()
    {
        return (!$this->departmentPermissions) ?: $this->departmentPermissions->getValue();
    }
}