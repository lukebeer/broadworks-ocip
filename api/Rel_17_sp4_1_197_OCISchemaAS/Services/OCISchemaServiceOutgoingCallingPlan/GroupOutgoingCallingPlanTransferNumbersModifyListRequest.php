<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceOutgoingCallingPlan; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceOutgoingCallingPlan\OutgoingCallingPlanDepartmentTransferNumbersModify;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceOutgoingCallingPlan\OutgoingCallingPlanTransferNumbersModify;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ServiceProviderId;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\GroupId;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Modify the list of transfer numbers for a group default and it's departments.
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class GroupOutgoingCallingPlanTransferNumbersModifyListRequest extends ComplexType implements ComplexInterface
{
    public    $name              = 'GroupOutgoingCallingPlanTransferNumbersModifyListRequest';
    protected $serviceProviderId = null;
    protected $groupId           = null;
    protected $groupNumbers      = null;
    protected $departmentNumbers = null;

    public function __construct(
         $serviceProviderId,
         $groupId,
         OutgoingCallingPlanTransferNumbersModify $groupNumbers = null,
         OutgoingCallingPlanDepartmentTransferNumbersModify $departmentNumbers = null
    ) {
        $this->setServiceProviderId($serviceProviderId);
        $this->setGroupId($groupId);
        $this->setGroupNumbers($groupNumbers);
        $this->setDepartmentNumbers($departmentNumbers);
    }

    /**
     * @return mixed $response
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * 
     */
    public function setServiceProviderId($serviceProviderId = null)
    {
        if (!$serviceProviderId) return $this;
        $this->serviceProviderId = ($serviceProviderId InstanceOf ServiceProviderId)
             ? $serviceProviderId
             : new ServiceProviderId($serviceProviderId);
        $this->serviceProviderId->setName('serviceProviderId');
        return $this;
    }

    /**
     * 
     * @return ServiceProviderId $serviceProviderId
     */
    public function getServiceProviderId()
    {
        return $this->serviceProviderId->getValue();
    }

    /**
     * 
     */
    public function setGroupId($groupId = null)
    {
        if (!$groupId) return $this;
        $this->groupId = ($groupId InstanceOf GroupId)
             ? $groupId
             : new GroupId($groupId);
        $this->groupId->setName('groupId');
        return $this;
    }

    /**
     * 
     * @return GroupId $groupId
     */
    public function getGroupId()
    {
        return $this->groupId->getValue();
    }

    /**
     * 
     */
    public function setGroupNumbers(OutgoingCallingPlanTransferNumbersModify $groupNumbers = null)
    {
        if (!$groupNumbers) return $this;
        $this->groupNumbers = $groupNumbers;
        $this->groupNumbers->setName('groupNumbers');
        return $this;
    }

    /**
     * 
     * @return OutgoingCallingPlanTransferNumbersModify $groupNumbers
     */
    public function getGroupNumbers()
    {
        return $this->groupNumbers;
    }

    /**
     * 
     */
    public function setDepartmentNumbers(OutgoingCallingPlanDepartmentTransferNumbersModify $departmentNumbers = null)
    {
        if (!$departmentNumbers) return $this;
        $this->departmentNumbers = $departmentNumbers;
        $this->departmentNumbers->setName('departmentNumbers');
        return $this;
    }

    /**
     * 
     * @return OutgoingCallingPlanDepartmentTransferNumbersModify $departmentNumbers
     */
    public function getDepartmentNumbers()
    {
        return $this->departmentNumbers;
    }
}
