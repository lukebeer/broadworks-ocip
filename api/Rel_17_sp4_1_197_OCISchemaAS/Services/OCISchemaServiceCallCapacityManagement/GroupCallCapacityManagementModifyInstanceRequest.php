<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceCallCapacityManagement; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ServiceProviderId;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\GroupId;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ServiceInstanceName;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\CallCapacityCallLimit;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\xs:boolean;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ReplacementUserIdList;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Modifies a Call Capacity Management group. Replaces the entire list of users in the group.
 *         The response is either SuccessResponse or ErrorResponse.
 */
class GroupCallCapacityManagementModifyInstanceRequest extends ComplexType implements ComplexInterface
{
    public    $name = __CLASS__;

    public function __construct(
             $serviceProviderId,
             $groupId,
             $name,
             $newName=null,
             $maxActiveCallsAllowed=null,
             $maxIncomingActiveCallsAllowed=null,
             $maxOutgoingActiveCallsAllowed=null,
             $becomeDefaultGroupForNewUsers=null,
             ReplacementUserIdList $userIdList=null
    ) {
        $this->serviceProviderId             = new ServiceProviderId($serviceProviderId);
        $this->groupId                       = new GroupId($groupId);
        $this->name                          = new ServiceInstanceName($name);
        $this->newName                       = new ServiceInstanceName($newName);
        $this->maxActiveCallsAllowed         = $maxActiveCallsAllowed;
        $this->maxIncomingActiveCallsAllowed = $maxIncomingActiveCallsAllowed;
        $this->maxOutgoingActiveCallsAllowed = $maxOutgoingActiveCallsAllowed;
        $this->becomeDefaultGroupForNewUsers = $becomeDefaultGroupForNewUsers;
        $this->userIdList                    = $userIdList;
        $this->args                          = func_get_args();
    }

    public function setServiceProviderId($serviceProviderId)
    {
        $serviceProviderId and $this->serviceProviderId = new ServiceProviderId($serviceProviderId);
    }

    public function getServiceProviderId()
    {
        return (!$this->serviceProviderId) ?: $this->serviceProviderId->value();
    }

    public function setGroupId($groupId)
    {
        $groupId and $this->groupId = new GroupId($groupId);
    }

    public function getGroupId()
    {
        return (!$this->groupId) ?: $this->groupId->value();
    }

    public function setName($name)
    {
        $name and $this->name = new ServiceInstanceName($name);
    }

    public function getName()
    {
        return (!$this->name) ?: $this->name->value();
    }

    public function setNewName($newName)
    {
        $newName and $this->newName = new ServiceInstanceName($newName);
    }

    public function getNewName()
    {
        return (!$this->newName) ?: $this->newName->value();
    }

    public function setMaxActiveCallsAllowed($maxActiveCallsAllowed)
    {
        $maxActiveCallsAllowed and $this->maxActiveCallsAllowed = new CallCapacityCallLimit($maxActiveCallsAllowed);
    }

    public function getMaxActiveCallsAllowed()
    {
        return (!$this->maxActiveCallsAllowed) ?: $this->maxActiveCallsAllowed->value();
    }

    public function setMaxIncomingActiveCallsAllowed($maxIncomingActiveCallsAllowed)
    {
        $maxIncomingActiveCallsAllowed and $this->maxIncomingActiveCallsAllowed = new CallCapacityCallLimit($maxIncomingActiveCallsAllowed);
    }

    public function getMaxIncomingActiveCallsAllowed()
    {
        return (!$this->maxIncomingActiveCallsAllowed) ?: $this->maxIncomingActiveCallsAllowed->value();
    }

    public function setMaxOutgoingActiveCallsAllowed($maxOutgoingActiveCallsAllowed)
    {
        $maxOutgoingActiveCallsAllowed and $this->maxOutgoingActiveCallsAllowed = new CallCapacityCallLimit($maxOutgoingActiveCallsAllowed);
    }

    public function getMaxOutgoingActiveCallsAllowed()
    {
        return (!$this->maxOutgoingActiveCallsAllowed) ?: $this->maxOutgoingActiveCallsAllowed->value();
    }

    public function setBecomeDefaultGroupForNewUsers($becomeDefaultGroupForNewUsers)
    {
        $becomeDefaultGroupForNewUsers and $this->becomeDefaultGroupForNewUsers = new xs:boolean($becomeDefaultGroupForNewUsers);
    }

    public function getBecomeDefaultGroupForNewUsers()
    {
        return (!$this->becomeDefaultGroupForNewUsers) ?: $this->becomeDefaultGroupForNewUsers->value();
    }

    public function setUserIdList($userIdList)
    {
        $userIdList and $this->userIdList = new ReplacementUserIdList($userIdList);
    }

    public function getUserIdList()
    {
        return (!$this->userIdList) ?: $this->userIdList->value();
    }
}
