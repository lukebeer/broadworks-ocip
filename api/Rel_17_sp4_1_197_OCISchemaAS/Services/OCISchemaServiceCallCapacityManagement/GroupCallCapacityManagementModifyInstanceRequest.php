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
    public    $name = 'GroupCallCapacityManagementModifyInstanceRequest';
    protected $serviceProviderId;
    protected $groupId;
    protected $name;
    protected $newName;
    protected $maxActiveCallsAllowed;
    protected $maxIncomingActiveCallsAllowed;
    protected $maxOutgoingActiveCallsAllowed;
    protected $becomeDefaultGroupForNewUsers;
    protected $userIdList;

    public function __construct(
         $serviceProviderId = '',
         $groupId = '',
         $name = '',
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
        $this->serviceProviderId->setName('serviceProviderId');
        return $this;
    }

    /**
     * 
     * @return ServiceProviderId $serviceProviderId
     */
    public function getServiceProviderId()
    {
        return ($this->serviceProviderId) ? $this->serviceProviderId->getValue() : null;
    }

    /**
     * 
     */
    public function setGroupId($groupId = null)
    {
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
        return ($this->groupId) ? $this->groupId->getValue() : null;
    }

    /**
     * 
     */
    public function setName($name = null)
    {
        $this->name = ($name InstanceOf ServiceInstanceName)
             ? $name
             : new ServiceInstanceName($name);
        $this->name->setName('name');
        return $this;
    }

    /**
     * 
     * @return ServiceInstanceName $name
     */
    public function getName()
    {
        return ($this->name) ? $this->name->getValue() : null;
    }

    /**
     * 
     */
    public function setNewName($newName = null)
    {
        $this->newName = ($newName InstanceOf ServiceInstanceName)
             ? $newName
             : new ServiceInstanceName($newName);
        $this->newName->setName('newName');
        return $this;
    }

    /**
     * 
     * @return ServiceInstanceName $newName
     */
    public function getNewName()
    {
        return ($this->newName) ? $this->newName->getValue() : null;
    }

    /**
     * 
     */
    public function setMaxActiveCallsAllowed($maxActiveCallsAllowed = null)
    {
        $this->maxActiveCallsAllowed = ($maxActiveCallsAllowed InstanceOf CallCapacityCallLimit)
             ? $maxActiveCallsAllowed
             : new CallCapacityCallLimit($maxActiveCallsAllowed);
        $this->maxActiveCallsAllowed->setName('maxActiveCallsAllowed');
        return $this;
    }

    /**
     * 
     * @return CallCapacityCallLimit $maxActiveCallsAllowed
     */
    public function getMaxActiveCallsAllowed()
    {
        return ($this->maxActiveCallsAllowed) ? $this->maxActiveCallsAllowed->getValue() : null;
    }

    /**
     * 
     */
    public function setMaxIncomingActiveCallsAllowed($maxIncomingActiveCallsAllowed = null)
    {
        $this->maxIncomingActiveCallsAllowed = ($maxIncomingActiveCallsAllowed InstanceOf CallCapacityCallLimit)
             ? $maxIncomingActiveCallsAllowed
             : new CallCapacityCallLimit($maxIncomingActiveCallsAllowed);
        $this->maxIncomingActiveCallsAllowed->setName('maxIncomingActiveCallsAllowed');
        return $this;
    }

    /**
     * 
     * @return CallCapacityCallLimit $maxIncomingActiveCallsAllowed
     */
    public function getMaxIncomingActiveCallsAllowed()
    {
        return ($this->maxIncomingActiveCallsAllowed) ? $this->maxIncomingActiveCallsAllowed->getValue() : null;
    }

    /**
     * 
     */
    public function setMaxOutgoingActiveCallsAllowed($maxOutgoingActiveCallsAllowed = null)
    {
        $this->maxOutgoingActiveCallsAllowed = ($maxOutgoingActiveCallsAllowed InstanceOf CallCapacityCallLimit)
             ? $maxOutgoingActiveCallsAllowed
             : new CallCapacityCallLimit($maxOutgoingActiveCallsAllowed);
        $this->maxOutgoingActiveCallsAllowed->setName('maxOutgoingActiveCallsAllowed');
        return $this;
    }

    /**
     * 
     * @return CallCapacityCallLimit $maxOutgoingActiveCallsAllowed
     */
    public function getMaxOutgoingActiveCallsAllowed()
    {
        return ($this->maxOutgoingActiveCallsAllowed) ? $this->maxOutgoingActiveCallsAllowed->getValue() : null;
    }

    /**
     * 
     */
    public function setBecomeDefaultGroupForNewUsers($becomeDefaultGroupForNewUsers = null)
    {
        $this->becomeDefaultGroupForNewUsers = new PrimitiveType($becomeDefaultGroupForNewUsers);
        $this->becomeDefaultGroupForNewUsers->setName('becomeDefaultGroupForNewUsers');
        return $this;
    }

    /**
     * 
     * @return boolean $becomeDefaultGroupForNewUsers
     */
    public function getBecomeDefaultGroupForNewUsers()
    {
        return ($this->becomeDefaultGroupForNewUsers) ? $this->becomeDefaultGroupForNewUsers->getValue() : null;
    }

    /**
     * 
     */
    public function setUserIdList(ReplacementUserIdList $userIdList = null)
    {
        $this->userIdList = ($userIdList InstanceOf ReplacementUserIdList)
             ? $userIdList
             : new ReplacementUserIdList($userIdList);
        $this->userIdList->setName('userIdList');
        return $this;
    }

    /**
     * 
     * @return ReplacementUserIdList $userIdList
     */
    public function getUserIdList()
    {
        return $this->userIdList;
    }
}
