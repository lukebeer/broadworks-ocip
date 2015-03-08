<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceOutgoingCallingPlan; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceOutgoingCallingPlan\OutgoingCallingPlanRedirectedDepartmentPermissionsModify;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceOutgoingCallingPlan\OutgoingCallingPlanRedirectedPermissionsModify;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ServiceProviderId;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\GroupId;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
     * Modify the call forwarded/transferred permissions for a group default and it's departments.
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class GroupOutgoingCallingPlanRedirectedModifyListRequest extends ComplexType implements ComplexInterface
{
    public    $name                  = __CLASS__;
    protected $serviceProviderId     = null;
    protected $groupId               = null;
    protected $groupPermissions      = null;
    protected $departmentPermissions = null;

    public function __construct(
         $serviceProviderId,
         $groupId,
         OutgoingCallingPlanRedirectedPermissionsModify $groupPermissions = null,
         OutgoingCallingPlanRedirectedDepartmentPermissionsModify $departmentPermissions = null
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
     * Outgoing Calling Plan being forwarded/transferred permissions.
     */
    public function setGroupPermissions(OutgoingCallingPlanRedirectedPermissionsModify $groupPermissions = null)
    {
        $this->groupPermissions = OutgoingCallingPlanRedirectedPermissionsModify $groupPermissions;
    }

    /**
     * Outgoing Calling Plan being forwarded/transferred permissions.
     */
    public function getGroupPermissions()
    {
        return (!$this->groupPermissions) ?: $this->groupPermissions->getValue();
    }

    /**
     * Outgoing Calling Plan being forwarded/transferred permissions for a department.
     */
    public function setDepartmentPermissions(OutgoingCallingPlanRedirectedDepartmentPermissionsModify $departmentPermissions = null)
    {
        $this->departmentPermissions = OutgoingCallingPlanRedirectedDepartmentPermissionsModify $departmentPermissions;
    }

    /**
     * Outgoing Calling Plan being forwarded/transferred permissions for a department.
     */
    public function getDepartmentPermissions()
    {
        return (!$this->departmentPermissions) ?: $this->departmentPermissions->getValue();
    }
}
