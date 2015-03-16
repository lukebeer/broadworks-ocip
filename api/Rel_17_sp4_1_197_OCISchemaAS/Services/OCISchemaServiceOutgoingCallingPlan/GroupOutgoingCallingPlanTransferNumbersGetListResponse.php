<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceOutgoingCallingPlan; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceOutgoingCallingPlan\OutgoingCallingPlanDepartmentTransferNumbers;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceOutgoingCallingPlan\OutgoingCallingPlanTransferNumbers;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Response to GroupOutgoingCallingPlanTransferNumbersGetListRequest.
 */
class GroupOutgoingCallingPlanTransferNumbersGetListResponse extends ComplexType implements ComplexInterface
{
    public    $elementName = 'GroupOutgoingCallingPlanTransferNumbersGetListResponse';
    protected $groupNumbers;
    protected $departmentNumbers;

    /**
     * @return \Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceOutgoingCallingPlan\GroupOutgoingCallingPlanTransferNumbersGetListResponse $response
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
