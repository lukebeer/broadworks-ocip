<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceOutgoingCallingPlan; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceOutgoingCallingPlan\OutgoingCallingPlanDepartmentAuthorizationCodes;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceOutgoingCallingPlan\OutgoingCallingPlanGroupAuthorizationCodes;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Response to GroupOutgoingCallingPlanAuthorizationCodeGetListRequest.
 */
class GroupOutgoingCallingPlanAuthorizationCodeGetListResponse extends ComplexType implements ComplexInterface
{
    public    $name                = __CLASS__;
    protected $groupCodeList       = null;
    protected $departmentCodeList  = null;


    public function setGroupCodeList(OutgoingCallingPlanGroupAuthorizationCodes $groupCodeList = null)
    {
    }

    public function getGroupCodeList()
    {
        return (!$this->groupCodeList) ?: $this->groupCodeList->value();
    }

    public function setDepartmentCodeList(OutgoingCallingPlanDepartmentAuthorizationCodes $departmentCodeList = null)
    {
    }

    public function getDepartmentCodeList()
    {
        return (!$this->departmentCodeList) ?: $this->departmentCodeList->value();
    }
}
