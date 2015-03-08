<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceOutgoingCallingPlan; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceOutgoingCallingPlan\OutgoingCallingPlanRedirectedDepartmentPermissions;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceOutgoingCallingPlan\OutgoingCallingPlanRedirectedPermissions;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
     * Response to GroupOutgoingCallingPlanRedirectedGetListRequest.
 */
class GroupOutgoingCallingPlanRedirectedGetListResponse extends ComplexType implements ComplexInterface
{
    const     RESPONSE_TYPE          = 'Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceOutgoingCallingPlan\GroupOutgoingCallingPlanRedirectedGetListResponse';
    public    $name                  = __CLASS__;
    protected $groupPermissions      = null;
    protected $departmentPermissions = null;


    /**
     * Outgoing Calling Plan being forwarded/transferred permissions.
     */
    public function setGroupPermissions(OutgoingCallingPlanRedirectedPermissions $groupPermissions = null)
    {
        $this->groupPermissions = OutgoingCallingPlanRedirectedPermissions $groupPermissions;
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
    public function setDepartmentPermissions(OutgoingCallingPlanRedirectedDepartmentPermissions $departmentPermissions = null)
    {
        $this->departmentPermissions = OutgoingCallingPlanRedirectedDepartmentPermissions $departmentPermissions;
    }

    /**
     * Outgoing Calling Plan being forwarded/transferred permissions for a department.
     */
    public function getDepartmentPermissions()
    {
        return (!$this->departmentPermissions) ?: $this->departmentPermissions->getValue();
    }
}
