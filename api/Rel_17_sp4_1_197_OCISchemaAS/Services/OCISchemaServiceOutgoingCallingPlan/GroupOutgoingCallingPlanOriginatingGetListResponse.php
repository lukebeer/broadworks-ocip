<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceOutgoingCallingPlan; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceOutgoingCallingPlan\OutgoingCallingPlanOriginatingDepartmentPermissions;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceOutgoingCallingPlan\OutgoingCallingPlanOriginatingPermissions;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
     * Response to GroupOutgoingCallingPlanOriginatingGetListRequest.
 */
class GroupOutgoingCallingPlanOriginatingGetListResponse extends ComplexType implements ComplexInterface
{
    const     RESPONSE_TYPE          = 'Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceOutgoingCallingPlan\GroupOutgoingCallingPlanOriginatingGetListResponse';
    public    $name                  = __CLASS__;
    protected $groupPermissions      = null;
    protected $departmentPermissions = null;


    /**
     * Outgoing Calling Plan originating call permissions.
     */
    public function setGroupPermissions(OutgoingCallingPlanOriginatingPermissions $groupPermissions = null)
    {
        $this->groupPermissions = OutgoingCallingPlanOriginatingPermissions $groupPermissions;
    }

    /**
     * Outgoing Calling Plan originating call permissions.
     */
    public function getGroupPermissions()
    {
        return (!$this->groupPermissions) ?: $this->groupPermissions->getValue();
    }

    /**
     * Outgoing Calling Plan originating call permissions for a department.
     */
    public function setDepartmentPermissions(OutgoingCallingPlanOriginatingDepartmentPermissions $departmentPermissions = null)
    {
        $this->departmentPermissions = OutgoingCallingPlanOriginatingDepartmentPermissions $departmentPermissions;
    }

    /**
     * Outgoing Calling Plan originating call permissions for a department.
     */
    public function getDepartmentPermissions()
    {
        return (!$this->departmentPermissions) ?: $this->departmentPermissions->getValue();
    }
}
