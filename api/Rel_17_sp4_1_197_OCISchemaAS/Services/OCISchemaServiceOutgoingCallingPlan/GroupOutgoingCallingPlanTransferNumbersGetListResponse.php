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
    public    $name              = 'GroupOutgoingCallingPlanTransferNumbersGetListResponse';
    protected $groupNumbers      = null;
    protected $departmentNumbers = null;

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
        if (!$groupNumbers) return $this;
        $this->groupNumbers = $groupNumbers;
        $this->groupNumbers->setName('groupNumbers');
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
        if (!$departmentNumbers) return $this;
        $this->departmentNumbers = $departmentNumbers;
        $this->departmentNumbers->setName('departmentNumbers');
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
