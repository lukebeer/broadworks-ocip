<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceIncomingCallingPlan; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceIncomingCallingPlan\IncomingCallingPlanDepartmentPermissions;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceIncomingCallingPlan\IncomingCallingPlanPermissions;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
     * Response to GroupIncomingCallingPlanGetListRequest.
 */
class GroupIncomingCallingPlanGetListResponse extends ComplexType implements ComplexInterface
{
    const     RESPONSE_TYPE          = 'Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceIncomingCallingPlan\GroupIncomingCallingPlanGetListResponse';
    public    $name                  = __CLASS__;
    protected $groupPermissions      = null;
    protected $departmentPermissions = null;


    /**
     * Allows or disallows various types of incoming calls for a user or group -- not any particular department.
     */
    public function setGroupPermissions(IncomingCallingPlanPermissions $groupPermissions = null)
    {
        $this->groupPermissions = IncomingCallingPlanPermissions $groupPermissions;
    }

    /**
     * Allows or disallows various types of incoming calls for a user or group -- not any particular department.
     */
    public function getGroupPermissions()
    {
        return (!$this->groupPermissions) ?: $this->groupPermissions->getValue();
    }

    /**
     * Allows or disallows various types of incoming calls for a specified department.
     */
    public function setDepartmentPermissions(IncomingCallingPlanDepartmentPermissions $departmentPermissions = null)
    {
        $this->departmentPermissions = IncomingCallingPlanDepartmentPermissions $departmentPermissions;
    }

    /**
     * Allows or disallows various types of incoming calls for a specified department.
     */
    public function getDepartmentPermissions()
    {
        return (!$this->departmentPermissions) ?: $this->departmentPermissions->getValue();
    }
}
