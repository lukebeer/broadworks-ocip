<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceOutgoingCallingPlan; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceOutgoingCallingPlan\OutgoingCallingPlanDepartmentTransferNumbers;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceOutgoingCallingPlan\OutgoingCallingPlanTransferNumbers;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceOutgoingCallingPlan\GroupOutgoingCallingPlanTransferNumbersGetListResponse;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Response to GroupOutgoingCallingPlanTransferNumbersGetListRequest.
 */
class GroupOutgoingCallingPlanTransferNumbersGetListResponse extends ComplexType implements ComplexInterface
{
    public    $name              = __CLASS__;
    protected $groupNumbers      = null;
    protected $departmentNumbers = null;

    /**
     * @return GroupOutgoingCallingPlanTransferNumbersGetListResponse
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * Outgoing Calling Plan transfer numbers.
     */
    public function setGroupNumbers(OutgoingCallingPlanTransferNumbers $groupNumbers = null)
    {
        $this->groupNumbers =  $groupNumbers;
    }

    /**
     * Outgoing Calling Plan transfer numbers.
     */
    public function getGroupNumbers()
    {
        return (!$this->groupNumbers) ?: $this->groupNumbers->getValue();
    }

    /**
     * Outgoing Calling Plan transfer numbers for a department.
     */
    public function setDepartmentNumbers(OutgoingCallingPlanDepartmentTransferNumbers $departmentNumbers = null)
    {
        $this->departmentNumbers =  $departmentNumbers;
    }

    /**
     * Outgoing Calling Plan transfer numbers for a department.
     */
    public function getDepartmentNumbers()
    {
        return (!$this->departmentNumbers) ?: $this->departmentNumbers->getValue();
    }
}
