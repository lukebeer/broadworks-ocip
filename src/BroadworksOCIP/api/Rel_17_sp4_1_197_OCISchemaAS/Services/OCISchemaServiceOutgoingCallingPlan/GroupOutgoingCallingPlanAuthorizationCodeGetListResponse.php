<?php
/**
 * This file is part of http://github.com/LukeBeer/BroadworksOCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceOutgoingCallingPlan; 

use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceOutgoingCallingPlan\OutgoingCallingPlanDepartmentAuthorizationCodes;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceOutgoingCallingPlan\OutgoingCallingPlanGroupAuthorizationCodes;
use BroadworksOCIP\Builder\Types\ComplexInterface;
use BroadworksOCIP\Builder\Types\ComplexType;
use BroadworksOCIP\Response\ResponseOutput;
use BroadworksOCIP\Client\Client;


/**
 * Response to GroupOutgoingCallingPlanAuthorizationCodeGetListRequest.
 */
class GroupOutgoingCallingPlanAuthorizationCodeGetListResponse extends ComplexType implements ComplexInterface
{
    public    $elementName = 'GroupOutgoingCallingPlanAuthorizationCodeGetListResponse';
    protected $groupCodeList;
    protected $departmentCodeList;

    /**
     * @return \BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceOutgoingCallingPlan\GroupOutgoingCallingPlanAuthorizationCodeGetListResponse $response
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
