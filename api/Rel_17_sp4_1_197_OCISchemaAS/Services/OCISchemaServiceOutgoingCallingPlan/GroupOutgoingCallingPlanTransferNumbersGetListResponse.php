<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceOutgoingCallingPlan; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceOutgoingCallingPlan\OutgoingCallingPlanDepartmentTransferNumbers;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceOutgoingCallingPlan\OutgoingCallingPlanTransferNumbers;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Response to GroupOutgoingCallingPlanTransferNumbersGetListRequest.
 */
class GroupOutgoingCallingPlanTransferNumbersGetListResponse extends ComplexType implements ComplexInterface
{
    public    $name               = __CLASS__;
    protected $groupNumbers       = null;
    protected $departmentNumbers  = null;


    public function setGroupNumbers(OutgoingCallingPlanTransferNumbers $groupNumbers = null)
    {
    }

    public function getGroupNumbers()
    {
        return (!$this->groupNumbers) ?: $this->groupNumbers->value();
    }

    public function setDepartmentNumbers(OutgoingCallingPlanDepartmentTransferNumbers $departmentNumbers = null)
    {
    }

    public function getDepartmentNumbers()
    {
        return (!$this->departmentNumbers) ?: $this->departmentNumbers->value();
    }
}
