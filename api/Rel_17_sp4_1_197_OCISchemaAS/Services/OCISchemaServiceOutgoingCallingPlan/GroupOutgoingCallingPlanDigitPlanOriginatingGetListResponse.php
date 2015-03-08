<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceOutgoingCallingPlan; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceOutgoingCallingPlan\OutgoingCallingPlanDigitPatternOriginatingDepartmentPermissions;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceOutgoingCallingPlan\OutgoingCallingPlanDigitPatternOriginatingPermissions;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
     * Response to GroupOutgoingCallingPlanDigitPlanOriginatingGetListRequest.
 */
class GroupOutgoingCallingPlanDigitPlanOriginatingGetListResponse extends ComplexType implements ComplexInterface
{
    const     RESPONSE_TYPE          = 'Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceOutgoingCallingPlan\GroupOutgoingCallingPlanDigitPlanOriginatingGetListResponse';
    public    $name                  = __CLASS__;
    protected $groupPermissions      = null;
    protected $departmentPermissions = null;


    /**
     * Outgoing Calling Plan originating call permissions for specified digit patterns.
     */
    public function setGroupPermissions(OutgoingCallingPlanDigitPatternOriginatingPermissions $groupPermissions = null)
    {
        $this->groupPermissions = OutgoingCallingPlanDigitPatternOriginatingPermissions $groupPermissions;
    }

    /**
     * Outgoing Calling Plan originating call permissions for specified digit patterns.
     */
    public function getGroupPermissions()
    {
        return (!$this->groupPermissions) ?: $this->groupPermissions->getValue();
    }

    /**
     * Outgoing Calling Plan originating call permissions for specified digit patterns.
     */
    public function setDepartmentPermissions(OutgoingCallingPlanDigitPatternOriginatingDepartmentPermissions $departmentPermissions = null)
    {
        $this->departmentPermissions = OutgoingCallingPlanDigitPatternOriginatingDepartmentPermissions $departmentPermissions;
    }

    /**
     * Outgoing Calling Plan originating call permissions for specified digit patterns.
     */
    public function getDepartmentPermissions()
    {
        return (!$this->departmentPermissions) ?: $this->departmentPermissions->getValue();
    }
}
