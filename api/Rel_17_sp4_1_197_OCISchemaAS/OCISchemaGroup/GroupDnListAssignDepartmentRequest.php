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
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Assign a list of group DNs to a department. If the department is not specified, this
 *         will make the DNs become unassigned from any department.
 *         The response is either SuccessResponse or ErrorResponse.
 */
class GroupDnListAssignDepartmentRequest extends ComplexType implements ComplexInterface
{
    public    $name              = 'GroupDnListAssignDepartmentRequest';
    protected $serviceProviderId = null;
    protected $groupId           = null;
    protected $departmentKey     = null;
    protected $phoneNumber       = null;
    protected $dnRange           = null;

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
    public function setDepartmentKey(DepartmentKey $departmentKey = null)
    {
        if (!$departmentKey) return $this;
        $this->departmentKey = $departmentKey;
        $this->departmentKey->setName('departmentKey');
        return $this;
    }

    /**
     * 
     * @return DepartmentKey $departmentKey
     */
    public function getDepartmentKey()
    {
        return $this->departmentKey;
    }

    /**
     * 
     */
    public function setPhoneNumber($phoneNumber = null)
    {
        if (!$phoneNumber) return $this;
        $this->phoneNumber = ($phoneNumber InstanceOf DN)
             ? $phoneNumber
             : new DN($phoneNumber);
        $this->phoneNumber->setName('phoneNumber');
        return $this;
    }

    /**
     * 
     * @return DN $phoneNumber
     */
    public function getPhoneNumber()
    {
        return $this->phoneNumber->getValue();
    }

    /**
     * 
     */
    public function setDnRange(DNRange $dnRange = null)
    {
        if (!$dnRange) return $this;
        $this->dnRange = $dnRange;
        $this->dnRange->setName('dnRange');
        return $this;
    }

    /**
     * 
     * @return DNRange $dnRange
     */
    public function getDnRange()
    {
        return $this->dnRange;
    }
}
