<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCallCapacityManagement; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCallCapacityManagement\CallCapacityCallLimit;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ReplacementUserIdList;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ServiceInstanceName;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ServiceProviderId;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\GroupId;
use Broadworks_OCIP\core\Builder\Types\PrimitiveType;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Modifies a Call Capacity Management group. Replaces the entire list of users in the group.
 *         The response is either SuccessResponse or ErrorResponse.
 */
class GroupCallCapacityManagementModifyInstanceRequest extends ComplexType implements ComplexInterface
{
    public    $name                          = 'GroupCallCapacityManagementModifyInstanceRequest';
    protected $serviceProviderId             = null;
    protected $groupId                       = null;
    protected $name                          = null;
    protected $newName                       = null;
    protected $maxActiveCallsAllowed         = null;
    protected $maxIncomingActiveCallsAllowed = null;
    protected $maxOutgoingActiveCallsAllowed = null;
    protected $becomeDefaultGroupForNewUsers = null;
    protected $userIdList                    = null;

    public function __construct(
         $serviceProviderId,
         $groupId,
         $name,
         $newName = null,
         $maxActiveCallsAllowed = null,
         $maxIncomingActiveCallsAllowed = null,
         $maxOutgoingActiveCallsAllowed = null,
         $becomeDefaultGroupForNewUsers = null,
         ReplacementUserIdList $userIdList = null
    ) {
        $this->setServiceProviderId($serviceProviderId);
        $this->setGroupId($groupId);
        $this->setName($name);
        $this->setNewName($newName);
        $this->setMaxActiveCallsAllowed($maxActiveCallsAllowed);
        $this->setMaxIncomingActiveCallsAllowed($maxIncomingActiveCallsAllowed);
        $this->setMaxOutgoingActiveCallsAllowed($maxOutgoingActiveCallsAllowed);
        $this->setBecomeDefaultGroupForNewUsers($becomeDefaultGroupForNewUsers);
        $this->setUserIdList($userIdList);
    }

    /**
     * @return 
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
     * @return ServiceProviderId
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
     * @return GroupId
     */
    public function getGroupId()
    {
        return $this->groupId->getValue();
    }

    /**
     * 
     */
    public function setName($name = null)
    {
        if (!$name) return $this;
        $this->name = ($name InstanceOf ServiceInstanceName)
             ? $name
             : new ServiceInstanceName($name);
        $this->name->setName('name');
        return $this;
    }

    /**
     * 
     * @return ServiceInstanceName
     */
    public function getName()
    {
        return $this->name->getValue();
    }

    /**
     * 
     */
    public function setNewName($newName = null)
    {
        if (!$newName) return $this;
        $this->newName = ($newName InstanceOf ServiceInstanceName)
             ? $newName
             : new ServiceInstanceName($newName);
        $this->newName->setName('newName');
        return $this;
    }

    /**
     * 
     * @return ServiceInstanceName
     */
    public function getNewName()
    {
        return $this->newName->getValue();
    }

    /**
     * 
     */
    public function setMaxActiveCallsAllowed($maxActiveCallsAllowed = null)
    {
        if (!$maxActiveCallsAllowed) return $this;
        $this->maxActiveCallsAllowed = ($maxActiveCallsAllowed InstanceOf CallCapacityCallLimit)
             ? $maxActiveCallsAllowed
             : new CallCapacityCallLimit($maxActiveCallsAllowed);
        $this->maxActiveCallsAllowed->setName('maxActiveCallsAllowed');
        return $this;
    }

    /**
     * 
     * @return CallCapacityCallLimit
     */
    public function getMaxActiveCallsAllowed()
    {
        return $this->maxActiveCallsAllowed->getValue();
    }

    /**
     * 
     */
    public function setMaxIncomingActiveCallsAllowed($maxIncomingActiveCallsAllowed = null)
    {
        if (!$maxIncomingActiveCallsAllowed) return $this;
        $this->maxIncomingActiveCallsAllowed = ($maxIncomingActiveCallsAllowed InstanceOf CallCapacityCallLimit)
             ? $maxIncomingActiveCallsAllowed
             : new CallCapacityCallLimit($maxIncomingActiveCallsAllowed);
        $this->maxIncomingActiveCallsAllowed->setName('maxIncomingActiveCallsAllowed');
        return $this;
    }

    /**
     * 
     * @return CallCapacityCallLimit
     */
    public function getMaxIncomingActiveCallsAllowed()
    {
        return $this->maxIncomingActiveCallsAllowed->getValue();
    }

    /**
     * 
     */
    public function setMaxOutgoingActiveCallsAllowed($maxOutgoingActiveCallsAllowed = null)
    {
        if (!$maxOutgoingActiveCallsAllowed) return $this;
        $this->maxOutgoingActiveCallsAllowed = ($maxOutgoingActiveCallsAllowed InstanceOf CallCapacityCallLimit)
             ? $maxOutgoingActiveCallsAllowed
             : new CallCapacityCallLimit($maxOutgoingActiveCallsAllowed);
        $this->maxOutgoingActiveCallsAllowed->setName('maxOutgoingActiveCallsAllowed');
        return $this;
    }

    /**
     * 
     * @return CallCapacityCallLimit
     */
    public function getMaxOutgoingActiveCallsAllowed()
    {
        return $this->maxOutgoingActiveCallsAllowed->getValue();
    }

    /**
     * 
     */
    public function setBecomeDefaultGroupForNewUsers($becomeDefaultGroupForNewUsers = null)
    {
        if (!$becomeDefaultGroupForNewUsers) return $this;
        $this->becomeDefaultGroupForNewUsers = new PrimitiveType($becomeDefaultGroupForNewUsers);
        $this->becomeDefaultGroupForNewUsers->setName('becomeDefaultGroupForNewUsers');
        return $this;
    }

    /**
     * 
     * @return xs:boolean
     */
    public function getBecomeDefaultGroupForNewUsers()
    {
        return $this->becomeDefaultGroupForNewUsers->getValue();
    }

    /**
     * 
     */
    public function setUserIdList(ReplacementUserIdList $userIdList = null)
    {
        if (!$userIdList) return $this;
        $this->userIdList = $userIdList;
        $this->userIdList->setName('userIdList');
        return $this;
    }

    /**
     * 
     * @return ReplacementUserIdList
     */
    public function getUserIdList()
    {
        return $this->userIdList;
    }
}
