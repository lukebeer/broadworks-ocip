<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceOutgoingCallingPlan; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceOutgoingCallingPlan\OutgoingCallingPlanDepartmentTransferNumbersModify;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceOutgoingCallingPlan\OutgoingCallingPlanTransferNumbersModify;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ServiceProviderId;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\GroupId;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
     * Modify the list of transfer numbers for a group default and it's departments.
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class GroupOutgoingCallingPlanTransferNumbersModifyListRequest extends ComplexType implements ComplexInterface
{
    public    $name              = __CLASS__;
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
     * Service Provider Id uniquely identifies a service provider.
     *         NOTE: The service provider id has a maximum length of 30 bytes, not 30 characters.
     */
    public function setServiceProviderId($serviceProviderId = null)
    {
        $this->serviceProviderId = ($serviceProviderId InstanceOf ServiceProviderId)
             ? $serviceProviderId
             : new ServiceProviderId($serviceProviderId);
    }

    /**
     * Service Provider Id uniquely identifies a service provider.
     *         NOTE: The service provider id has a maximum length of 30 bytes, not 30 characters.
     */
    public function getServiceProviderId()
    {
        return (!$this->serviceProviderId) ?: $this->serviceProviderId->getValue();
    }

    /**
     * Group Id identifies a group within a service provider or enterprise. The group id is not
     *         unique system wide. It must be combined with a service provider id to be unique across the system.
     */
    public function setGroupId($groupId = null)
    {
        $this->groupId = ($groupId InstanceOf GroupId)
             ? $groupId
             : new GroupId($groupId);
    }

    /**
     * Group Id identifies a group within a service provider or enterprise. The group id is not
     *         unique system wide. It must be combined with a service provider id to be unique across the system.
     */
    public function getGroupId()
    {
        return (!$this->groupId) ?: $this->groupId->getValue();
    }

    /**
     * Outgoing Calling Plan transfer numbers.
     */
    public function setGroupNumbers(OutgoingCallingPlanTransferNumbersModify $groupNumbers = null)
    {
        $this->groupNumbers = OutgoingCallingPlanTransferNumbersModify $groupNumbers;
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
    public function setDepartmentNumbers(OutgoingCallingPlanDepartmentTransferNumbersModify $departmentNumbers = null)
    {
        $this->departmentNumbers = OutgoingCallingPlanDepartmentTransferNumbersModify $departmentNumbers;
    }

    /**
     * Outgoing Calling Plan transfer numbers for a department.
     */
    public function getDepartmentNumbers()
    {
        return (!$this->departmentNumbers) ?: $this->departmentNumbers->getValue();
    }
}
