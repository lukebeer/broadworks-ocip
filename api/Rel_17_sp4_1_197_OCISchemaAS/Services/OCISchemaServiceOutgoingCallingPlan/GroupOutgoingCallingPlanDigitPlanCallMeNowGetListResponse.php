<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceOutgoingCallingPlan; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceOutgoingCallingPlan\OutgoingCallingPlanDigitPatternCallMeNowDepartmentPermissions;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceOutgoingCallingPlan\OutgoingCallingPlanDigitPatternCallMeNowPermissions;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
     * Response to GroupOutgoingCallingPlanDigitPlanCallMeNowGetListRequest.
 */
class GroupOutgoingCallingPlanDigitPlanCallMeNowGetListResponse extends ComplexType implements ComplexInterface
{
    const     RESPONSE_TYPE          = 'Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceOutgoingCallingPlan\GroupOutgoingCallingPlanDigitPlanCallMeNowGetListResponse';
    public    $name                  = __CLASS__;
    protected $groupPermissions      = null;
    protected $departmentPermissions = null;


    /**
     * Outgoing Calling Plan Call Me Now call permissions for specified digit patterns.
     */
    public function setGroupPermissions(OutgoingCallingPlanDigitPatternCallMeNowPermissions $groupPermissions = null)
    {
        $this->groupPermissions = OutgoingCallingPlanDigitPatternCallMeNowPermissions $groupPermissions;
    }

    /**
     * Outgoing Calling Plan Call Me Now call permissions for specified digit patterns.
     */
    public function getGroupPermissions()
    {
        return (!$this->groupPermissions) ?: $this->groupPermissions->getValue();
    }

    /**
     * Outgoing Calling Plan Call Me Now call permissions for specified digit patterns.
     */
    public function setDepartmentPermissions(OutgoingCallingPlanDigitPatternCallMeNowDepartmentPermissions $departmentPermissions = null)
    {
        $this->departmentPermissions = OutgoingCallingPlanDigitPatternCallMeNowDepartmentPermissions $departmentPermissions;
    }

    /**
     * Outgoing Calling Plan Call Me Now call permissions for specified digit patterns.
     */
    public function getDepartmentPermissions()
    {
        return (!$this->departmentPermissions) ?: $this->departmentPermissions->getValue();
    }
}
