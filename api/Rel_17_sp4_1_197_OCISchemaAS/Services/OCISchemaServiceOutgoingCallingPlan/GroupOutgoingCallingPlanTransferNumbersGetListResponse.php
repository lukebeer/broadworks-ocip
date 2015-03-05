<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceOutgoingCallingPlan; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\OutgoingCallingPlanTransferNumbers;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\OutgoingCallingPlanDepartmentTransferNumbers;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Response to GroupOutgoingCallingPlanTransferNumbersGetListRequest.
 */
class GroupOutgoingCallingPlanTransferNumbersGetListResponse extends ComplexType implements ComplexInterface
{
    public    $name = __CLASS__;

    public function __construct(
             $groupNumbers,
             $departmentNumbers=null
    ) {
        $this->groupNumbers      = $groupNumbers;
        $this->departmentNumbers = $departmentNumbers;
        $this->args              = func_get_args();
    }

    public function setGroupNumbers($groupNumbers)
    {
        $groupNumbers and $this->groupNumbers = new OutgoingCallingPlanTransferNumbers($groupNumbers);
    }

    public function getGroupNumbers()
    {
        return (!$this->groupNumbers) ?: $this->groupNumbers->value();
    }

    public function setDepartmentNumbers($departmentNumbers)
    {
        $departmentNumbers and $this->departmentNumbers = new OutgoingCallingPlanDepartmentTransferNumbers($departmentNumbers);
    }

    public function getDepartmentNumbers()
    {
        return (!$this->departmentNumbers) ?: $this->departmentNumbers->value();
    }
}
