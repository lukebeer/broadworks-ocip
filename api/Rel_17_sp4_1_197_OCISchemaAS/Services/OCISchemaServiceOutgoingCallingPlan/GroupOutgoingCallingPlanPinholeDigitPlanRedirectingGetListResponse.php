<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceOutgoingCallingPlan; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceOutgoingCallingPlan\OutgoingPinholeDigitPlanDigitPatternRedirectingDepartmentPermissions;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceOutgoingCallingPlan\OutgoingPinholeDigitPlanDigitPatternRedirectingPermissions;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
     * Response to GroupOutgoingCallingPlanPinholeDigitPlanRedirectingGetListRequest.
 */
class GroupOutgoingCallingPlanPinholeDigitPlanRedirectingGetListResponse extends ComplexType implements ComplexInterface
{
    const     RESPONSE_TYPE          = 'Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceOutgoingCallingPlan\GroupOutgoingCallingPlanPinholeDigitPlanRedirectingGetListResponse';
    public    $name                  = __CLASS__;
    protected $groupPermissions      = null;
    protected $departmentPermissions = null;


    /**
     * Outgoing Pinhole Digit Plan redirecting call permissions for specified digit patterns.
     */
    public function setGroupPermissions(OutgoingPinholeDigitPlanDigitPatternRedirectingPermissions $groupPermissions = null)
    {
        $this->groupPermissions = OutgoingPinholeDigitPlanDigitPatternRedirectingPermissions $groupPermissions;
    }

    /**
     * Outgoing Pinhole Digit Plan redirecting call permissions for specified digit patterns.
     */
    public function getGroupPermissions()
    {
        return (!$this->groupPermissions) ?: $this->groupPermissions->getValue();
    }

    /**
     * Outgoing Pinhole Digit Plan initiating call forwards/transfer permissions for a department.
     */
    public function setDepartmentPermissions(OutgoingPinholeDigitPlanDigitPatternRedirectingDepartmentPermissions $departmentPermissions = null)
    {
        $this->departmentPermissions = OutgoingPinholeDigitPlanDigitPatternRedirectingDepartmentPermissions $departmentPermissions;
    }

    /**
     * Outgoing Pinhole Digit Plan initiating call forwards/transfer permissions for a department.
     */
    public function getDepartmentPermissions()
    {
        return (!$this->departmentPermissions) ?: $this->departmentPermissions->getValue();
    }
}
