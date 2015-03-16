<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceOutgoingCallingPlan; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceOutgoingCallingPlan\OutgoingCallingPlanDepartmentAuthorizationCodes;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceOutgoingCallingPlan\OutgoingCallingPlanGroupAuthorizationCodes;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Response to GroupOutgoingCallingPlanAuthorizationCodeGetListRequest.
 */
class GroupOutgoingCallingPlanAuthorizationCodeGetListResponse extends ComplexType implements ComplexInterface
{
    public    $elementName = 'GroupOutgoingCallingPlanAuthorizationCodeGetListResponse';
    protected $groupCodeList;
    protected $departmentCodeList;

    /**
     * @return \Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceOutgoingCallingPlan\GroupOutgoingCallingPlanAuthorizationCodeGetListResponse $response
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * 
     */
    public function setGroupCodeList(OutgoingCallingPlanGroupAuthorizationCodes $groupCodeList = null)
    {
        $this->groupCodeList = ($groupCodeList InstanceOf OutgoingCallingPlanGroupAuthorizationCodes)
             ? $groupCodeList
             : new OutgoingCallingPlanGroupAuthorizationCodes($groupCodeList);
        $this->groupCodeList->setElementName('groupCodeList');
        return $this;
    }

    /**
     * 
     * @return OutgoingCallingPlanGroupAuthorizationCodes $groupCodeList
     */
    public function getGroupCodeList()
    {
        return $this->groupCodeList;
    }

    /**
     * 
     */
    public function setDepartmentCodeList(OutgoingCallingPlanDepartmentAuthorizationCodes $departmentCodeList = null)
    {
        $this->departmentCodeList = ($departmentCodeList InstanceOf OutgoingCallingPlanDepartmentAuthorizationCodes)
             ? $departmentCodeList
             : new OutgoingCallingPlanDepartmentAuthorizationCodes($departmentCodeList);
        $this->departmentCodeList->setElementName('departmentCodeList');
        return $this;
    }

    /**
     * 
     * @return OutgoingCallingPlanDepartmentAuthorizationCodes $departmentCodeList
     */
    public function getDepartmentCodeList()
    {
        return $this->departmentCodeList;
    }
}
