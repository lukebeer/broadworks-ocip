<?php
/**
 * This file is part of http://github.com/LukeBeer/BroadworksOCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceOutgoingCallingPlan; 

use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceOutgoingCallingPlan\OutgoingCallingPlanDepartmentTransferNumbersModify;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceOutgoingCallingPlan\OutgoingCallingPlanTransferNumbersModify;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ServiceProviderId;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\GroupId;
use BroadworksOCIP\Builder\Types\ComplexInterface;
use BroadworksOCIP\Builder\Types\ComplexType;
use BroadworksOCIP\Response\ResponseOutput;
use BroadworksOCIP\Client\Client;


/**
 * Modify the list of transfer numbers for a group default and it's departments.
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class GroupOutgoingCallingPlanTransferNumbersModifyListRequest extends ComplexType implements ComplexInterface
{
    public    $elementName = 'GroupOutgoingCallingPlanTransferNumbersModifyListRequest';
    protected $serviceProviderId;
    protected $groupId;
    protected $groupNumbers;
    protected $departmentNumbers;

    public function __construct(
         $serviceProviderId = '',
         $groupId = '',
         $groupNumbers = null,
         $departmentNumbers = null
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
        $this->serviceProviderId = ($serviceProviderId InstanceOf ServiceProviderId)
             ? $serviceProviderId
             : new ServiceProviderId($serviceProviderId);
        $this->serviceProviderId->setElementName('serviceProviderId');
        return $this;
    }

    /**
     * 
     * @return ServiceProviderId $serviceProviderId
     */
    public function getServiceProviderId()
    {
        return ($this->serviceProviderId)
            ? $this->serviceProviderId->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setGroupId($groupId = null)
    {
        $this->groupId = ($groupId InstanceOf GroupId)
             ? $groupId
             : new GroupId($groupId);
        $this->groupId->setElementName('groupId');
        return $this;
    }

    /**
     * 
     * @return GroupId $groupId
     */
    public function getGroupId()
    {
        return ($this->groupId)
            ? $this->groupId->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setGroupNumbers(OutgoingCallingPlanTransferNumbersModify $groupNumbers = null)
    {
        $this->groupNumbers = ($groupNumbers InstanceOf OutgoingCallingPlanTransferNumbersModify)
             ? $groupNumbers
             : new OutgoingCallingPlanTransferNumbersModify($groupNumbers);
        $this->groupNumbers->setElementName('groupNumbers');
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
        $this->departmentNumbers = ($departmentNumbers InstanceOf OutgoingCallingPlanDepartmentTransferNumbersModify)
             ? $departmentNumbers
             : new OutgoingCallingPlanDepartmentTransferNumbersModify($departmentNumbers);
        $this->departmentNumbers->setElementName('departmentNumbers');
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
