<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaGroup; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ServiceProviderId;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\DepartmentKey;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\GroupId;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\DNRange;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\DN;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Assign a list of group DNs to a department. If the department is not specified, this
 *         will make the DNs become unassigned from any department.
 *         The response is either SuccessResponse or ErrorResponse.
 */
class GroupDnListAssignDepartmentRequest extends ComplexType implements ComplexInterface
{
    public    $name               = __CLASS__;
    protected $serviceProviderId  = null;
    protected $groupId            = null;
    protected $departmentKey      = null;
    protected $phoneNumber        = null;
    protected $dnRange            = null;

    public function __construct(
         $serviceProviderId,
         $groupId,
         DepartmentKey $departmentKey = null,
         $phoneNumber = null,
         DNRange $dnRange = null
    ) {
        $this->setServiceProviderId($serviceProviderId);
        $this->setGroupId($groupId);
        $this->setDepartmentKey($departmentKey);
        $this->setPhoneNumber($phoneNumber);
        $this->setDnRange($dnRange);
    }

    public function setServiceProviderId($serviceProviderId = null)
    {
        $this->serviceProviderId = ($serviceProviderId InstanceOf ServiceProviderId)
             ? $serviceProviderId
             : new ServiceProviderId($serviceProviderId);
    }

    public function getServiceProviderId()
    {
        return (!$this->serviceProviderId) ?: $this->serviceProviderId->value();
    }

    public function setGroupId($groupId = null)
    {
        $this->groupId = ($groupId InstanceOf GroupId)
             ? $groupId
             : new GroupId($groupId);
    }

    public function getGroupId()
    {
        return (!$this->groupId) ?: $this->groupId->value();
    }

    public function setDepartmentKey(DepartmentKey $departmentKey = null)
    {
    }

    public function getDepartmentKey()
    {
        return (!$this->departmentKey) ?: $this->departmentKey->value();
    }

    public function setPhoneNumber($phoneNumber = null)
    {
        $this->phoneNumber = ($phoneNumber InstanceOf DN)
             ? $phoneNumber
             : new DN($phoneNumber);
    }

    public function getPhoneNumber()
    {
        return (!$this->phoneNumber) ?: $this->phoneNumber->value();
    }

    public function setDnRange(DNRange $dnRange = null)
    {
    }

    public function getDnRange()
    {
        return (!$this->dnRange) ?: $this->dnRange->value();
    }
}
