<?php
/**
 * This file is part of http://github.com/LukeBeer/BroadworksOCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceOutgoingCallingPlan; 

use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceOutgoingCallingPlan\OutgoingCallingPlanDepartmentTransferNumbers;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceOutgoingCallingPlan\OutgoingCallingPlanTransferNumbers;
use BroadworksOCIP\Builder\Types\ComplexInterface;
use BroadworksOCIP\Builder\Types\ComplexType;
use BroadworksOCIP\Response\ResponseOutput;
use BroadworksOCIP\Client\Client;


/**
 * Response to GroupOutgoingCallingPlanTransferNumbersGetListRequest.
 */
class GroupOutgoingCallingPlanTransferNumbersGetListResponse extends ComplexType implements ComplexInterface
{
    public    $elementName = 'GroupOutgoingCallingPlanTransferNumbersGetListResponse';
    protected $groupNumbers;
    protected $departmentNumbers;

    /**
     * @return \BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceOutgoingCallingPlan\GroupOutgoingCallingPlanTransferNumbersGetListResponse $response
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * 
     */
    public function setGroupNumbers(OutgoingCallingPlanTransferNumbers $groupNumbers = null)
    {
        $this->groupNumbers = ($groupNumbers InstanceOf OutgoingCallingPlanTransferNumbers)
             ? $groupNumbers
             : new OutgoingCallingPlanTransferNumbers($groupNumbers);
        $this->groupNumbers->setElementName('groupNumbers');
        return $this;
    }

    /**
     * 
     * @return OutgoingCallingPlanTransferNumbers $groupNumbers
     */
    public function getGroupNumbers()
    {
        return $this->groupNumbers;
    }

    /**
     * 
     */
    public function setDepartmentNumbers(OutgoingCallingPlanDepartmentTransferNumbers $departmentNumbers = null)
    {
        $this->departmentNumbers = ($departmentNumbers InstanceOf OutgoingCallingPlanDepartmentTransferNumbers)
             ? $departmentNumbers
             : new OutgoingCallingPlanDepartmentTransferNumbers($departmentNumbers);
        $this->departmentNumbers->setElementName('departmentNumbers');
        return $this;
    }

    /**
     * 
     * @return OutgoingCallingPlanDepartmentTransferNumbers $departmentNumbers
     */
    public function getDepartmentNumbers()
    {
        return $this->departmentNumbers;
    }
}
