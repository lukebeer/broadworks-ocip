<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceOutgoingCallingPlan; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\OutgoingCallingPlanGroupAuthorizationCodes;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\OutgoingCallingPlanDepartmentAuthorizationCodes;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Response to GroupOutgoingCallingPlanAuthorizationCodeGetListRequest.
 */
class GroupOutgoingCallingPlanAuthorizationCodeGetListResponse extends ComplexType implements ComplexInterface
{
    public    $name = __CLASS__;

    public function __construct(
             $groupCodeList,
             $departmentCodeList=null
    ) {
        $this->groupCodeList      = $groupCodeList;
        $this->departmentCodeList = $departmentCodeList;
        $this->args               = func_get_args();
    }

    public function setGroupCodeList($groupCodeList)
    {
        $groupCodeList and $this->groupCodeList = new OutgoingCallingPlanGroupAuthorizationCodes($groupCodeList);
    }

    public function getGroupCodeList()
    {
        return (!$this->groupCodeList) ?: $this->groupCodeList->value();
    }

    public function setDepartmentCodeList($departmentCodeList)
    {
        $departmentCodeList and $this->departmentCodeList = new OutgoingCallingPlanDepartmentAuthorizationCodes($departmentCodeList);
    }

    public function getDepartmentCodeList()
    {
        return (!$this->departmentCodeList) ?: $this->departmentCodeList->value();
    }
}
