<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceOutgoingCallingPlan; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceOutgoingCallingPlan\OutgoingCallingPlanCallMeNowDepartmentPermissions;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceOutgoingCallingPlan\OutgoingCallingPlanCallMeNowPermissions;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
     * Response to GroupOutgoingCallingPlanCallMeNowGetListRequest.
 */
class GroupOutgoingCallingPlanCallMeNowGetListResponse extends ComplexType implements ComplexInterface
{
    const     RESPONSE_TYPE          = 'Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceOutgoingCallingPlan\GroupOutgoingCallingPlanCallMeNowGetListResponse';
    public    $name                  = __CLASS__;
    protected $groupPermissions      = null;
    protected $departmentPermissions = null;


    /**
     * Outgoing Calling Plan for Call Me Now call permissions.
     */
    public function setGroupPermissions(OutgoingCallingPlanCallMeNowPermissions $groupPermissions = null)
    {
        $this->groupPermissions = OutgoingCallingPlanCallMeNowPermissions $groupPermissions;
    }

    /**
     * Outgoing Calling Plan for Call Me Now call permissions.
     */
    public function getGroupPermissions()
    {
        return (!$this->groupPermissions) ?: $this->groupPermissions->getValue();
    }

    /**
     * Outgoing Calling Plan for Call Me Now call permissions for a department.
     */
    public function setDepartmentPermissions(OutgoingCallingPlanCallMeNowDepartmentPermissions $departmentPermissions = null)
    {
        $this->departmentPermissions = OutgoingCallingPlanCallMeNowDepartmentPermissions $departmentPermissions;
    }

    /**
     * Outgoing Calling Plan for Call Me Now call permissions for a department.
     */
    public function getDepartmentPermissions()
    {
        return (!$this->departmentPermissions) ?: $this->departmentPermissions->getValue();
    }
}
