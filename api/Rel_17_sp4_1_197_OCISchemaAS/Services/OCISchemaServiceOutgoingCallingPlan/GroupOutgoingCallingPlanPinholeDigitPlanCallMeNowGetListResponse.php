<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceOutgoingCallingPlan; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceOutgoingCallingPlan\OutgoingPinholeDigitPlanDigitPatternCallMeNowDepartmentPermissions;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceOutgoingCallingPlan\OutgoingPinholeDigitPlanDigitPatternCallMeNowPermissions;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
     * Response to GroupOutgoingCallingPlanPinholeDigitPlanCallMeNowGetListRequest.
 */
class GroupOutgoingCallingPlanPinholeDigitPlanCallMeNowGetListResponse extends ComplexType implements ComplexInterface
{
    const     RESPONSE_TYPE          = 'Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceOutgoingCallingPlan\GroupOutgoingCallingPlanPinholeDigitPlanCallMeNowGetListResponse';
    public    $name                  = __CLASS__;
    protected $groupPermissions      = null;
    protected $departmentPermissions = null;


    /**
     * Outgoing Pinhole Digit Plan Call Me Now call permissions for specified digit patterns.
     */
    public function setGroupPermissions(OutgoingPinholeDigitPlanDigitPatternCallMeNowPermissions $groupPermissions = null)
    {
        $this->groupPermissions = OutgoingPinholeDigitPlanDigitPatternCallMeNowPermissions $groupPermissions;
    }

    /**
     * Outgoing Pinhole Digit Plan Call Me Now call permissions for specified digit patterns.
     */
    public function getGroupPermissions()
    {
        return (!$this->groupPermissions) ?: $this->groupPermissions->getValue();
    }

    /**
     * Outgoing Pinhole Digit Plan Call Me Now call permissions for a department.
     */
    public function setDepartmentPermissions(OutgoingPinholeDigitPlanDigitPatternCallMeNowDepartmentPermissions $departmentPermissions = null)
    {
        $this->departmentPermissions = OutgoingPinholeDigitPlanDigitPatternCallMeNowDepartmentPermissions $departmentPermissions;
    }

    /**
     * Outgoing Pinhole Digit Plan Call Me Now call permissions for a department.
     */
    public function getDepartmentPermissions()
    {
        return (!$this->departmentPermissions) ?: $this->departmentPermissions->getValue();
    }
}
