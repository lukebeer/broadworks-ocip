<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceOutgoingCallingPlan; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceOutgoingCallingPlan\OutgoingPinholeDigitPlanDigitPatternOriginatingDepartmentPermissions;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceOutgoingCallingPlan\OutgoingPinholeDigitPlanDigitPatternOriginatingPermissions;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
     * Response to GroupOutgoingCallingPlanPinholeDigitPlanOriginatingGetListRequest.
 */
class GroupOutgoingCallingPlanPinholeDigitPlanOriginatingGetListResponse extends ComplexType implements ComplexInterface
{
    const     RESPONSE_TYPE          = 'Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceOutgoingCallingPlan\GroupOutgoingCallingPlanPinholeDigitPlanOriginatingGetListResponse';
    public    $name                  = __CLASS__;
    protected $groupPermissions      = null;
    protected $departmentPermissions = null;


    /**
     * Outgoing Pinhole Digit Plan originating call permissions for specified digit patterns.
     */
    public function setGroupPermissions(OutgoingPinholeDigitPlanDigitPatternOriginatingPermissions $groupPermissions = null)
    {
        $this->groupPermissions = OutgoingPinholeDigitPlanDigitPatternOriginatingPermissions $groupPermissions;
    }

    /**
     * Outgoing Pinhole Digit Plan originating call permissions for specified digit patterns.
     */
    public function getGroupPermissions()
    {
        return (!$this->groupPermissions) ?: $this->groupPermissions->getValue();
    }

    /**
     * Outgoing Pinhole Digit Plan department originating call permissions for specified digit patterns.
     */
    public function setDepartmentPermissions(OutgoingPinholeDigitPlanDigitPatternOriginatingDepartmentPermissions $departmentPermissions = null)
    {
        $this->departmentPermissions = OutgoingPinholeDigitPlanDigitPatternOriginatingDepartmentPermissions $departmentPermissions;
    }

    /**
     * Outgoing Pinhole Digit Plan department originating call permissions for specified digit patterns.
     */
    public function getDepartmentPermissions()
    {
        return (!$this->departmentPermissions) ?: $this->departmentPermissions->getValue();
    }
}
