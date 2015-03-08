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
    const     RESPONSE_TYPE       = 'Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceOutgoingCallingPlan\GroupOutgoingCallingPlanAuthorizationCodeGetListResponse';
    public    $name               = __CLASS__;
    protected $groupCodeList      = null;
    protected $departmentCodeList = null;


    /**
     * Outgoing Calling Plan Authorization Code for the group default.
     */
    public function setGroupCodeList(OutgoingCallingPlanGroupAuthorizationCodes $groupCodeList = null)
    {
        $this->groupCodeList = OutgoingCallingPlanGroupAuthorizationCodes $groupCodeList;
    }

    /**
     * Outgoing Calling Plan Authorization Code for the group default.
     */
    public function getGroupCodeList()
    {
        return (!$this->groupCodeList) ?: $this->groupCodeList->getValue();
    }

    /**
     * Outgoing Calling Plan Authorization Code for a department.
     */
    public function setDepartmentCodeList(OutgoingCallingPlanDepartmentAuthorizationCodes $departmentCodeList = null)
    {
        $this->departmentCodeList = OutgoingCallingPlanDepartmentAuthorizationCodes $departmentCodeList;
    }

    /**
     * Outgoing Calling Plan Authorization Code for a department.
     */
    public function getDepartmentCodeList()
    {
        return (!$this->departmentCodeList) ?: $this->departmentCodeList->getValue();
    }
}
