<?php
/**
 * This file is part of http://github.com/LukeBeer/BroadworksOCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCallCapacityManagement; 

use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCallCapacityManagement\CallCapacityCallLimit;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ReplacementUserIdList;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ServiceInstanceName;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ServiceProviderId;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\GroupId;
use BroadworksOCIP\Builder\Types\PrimitiveType;
use BroadworksOCIP\Builder\Types\ComplexInterface;
use BroadworksOCIP\Builder\Types\ComplexType;
use BroadworksOCIP\Response\ResponseOutput;
use BroadworksOCIP\Client\Client;


/**
 * Modifies a Call Capacity Management group. Replaces the entire list of users in the group.
 *         The response is either SuccessResponse or ErrorResponse.
 */
class GroupCallCapacityManagementModifyInstanceRequest extends ComplexType implements ComplexInterface
{
    public    $elementName = 'GroupCallCapacityManagementModifyInstanceRequest';
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
         $userIdList = null
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
    public function setName($name = null)
    {
        $this->name = ($name InstanceOf ServiceInstanceName)
             ? $name
             : new ServiceInstanceName($name);
        $this->name->setElementName('name');
        return $this;
    }

    /**
     * 
     * @return ServiceInstanceName $name
     */
    public function getName()
    {
        return ($this->name)
            ? $this->name->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setNewName($newName = null)
    {
        $this->newName = ($newName InstanceOf ServiceInstanceName)
             ? $newName
             : new ServiceInstanceName($newName);
        $this->newName->setElementName('newName');
        return $this;
    }

    /**
     * 
     * @return ServiceInstanceName $newName
     */
    public function getNewName()
    {
        return ($this->newName)
            ? $this->newName->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setMaxActiveCallsAllowed($maxActiveCallsAllowed = null)
    {
        $this->maxActiveCallsAllowed = ($maxActiveCallsAllowed InstanceOf CallCapacityCallLimit)
             ? $maxActiveCallsAllowed
             : new CallCapacityCallLimit($maxActiveCallsAllowed);
        $this->maxActiveCallsAllowed->setElementName('maxActiveCallsAllowed');
        return $this;
    }

    /**
     * 
     * @return CallCapacityCallLimit $maxActiveCallsAllowed
     */
    public function getMaxActiveCallsAllowed()
    {
        return ($this->maxActiveCallsAllowed)
            ? $this->maxActiveCallsAllowed->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setMaxIncomingActiveCallsAllowed($maxIncomingActiveCallsAllowed = null)
    {
        $this->maxIncomingActiveCallsAllowed = ($maxIncomingActiveCallsAllowed InstanceOf CallCapacityCallLimit)
             ? $maxIncomingActiveCallsAllowed
             : new CallCapacityCallLimit($maxIncomingActiveCallsAllowed);
        $this->maxIncomingActiveCallsAllowed->setElementName('maxIncomingActiveCallsAllowed');
        return $this;
    }

    /**
     * 
     * @return CallCapacityCallLimit $maxIncomingActiveCallsAllowed
     */
    public function getMaxIncomingActiveCallsAllowed()
    {
        return ($this->maxIncomingActiveCallsAllowed)
            ? $this->maxIncomingActiveCallsAllowed->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setMaxOutgoingActiveCallsAllowed($maxOutgoingActiveCallsAllowed = null)
    {
        $this->maxOutgoingActiveCallsAllowed = ($maxOutgoingActiveCallsAllowed InstanceOf CallCapacityCallLimit)
             ? $maxOutgoingActiveCallsAllowed
             : new CallCapacityCallLimit($maxOutgoingActiveCallsAllowed);
        $this->maxOutgoingActiveCallsAllowed->setElementName('maxOutgoingActiveCallsAllowed');
        return $this;
    }

    /**
     * 
     * @return CallCapacityCallLimit $maxOutgoingActiveCallsAllowed
     */
    public function getMaxOutgoingActiveCallsAllowed()
    {
        return ($this->maxOutgoingActiveCallsAllowed)
            ? $this->maxOutgoingActiveCallsAllowed->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setBecomeDefaultGroupForNewUsers($becomeDefaultGroupForNewUsers = null)
    {
        $this->becomeDefaultGroupForNewUsers = new PrimitiveType($becomeDefaultGroupForNewUsers);
        $this->becomeDefaultGroupForNewUsers->setElementName('becomeDefaultGroupForNewUsers');
        return $this;
    }

    /**
     * 
     * @return boolean $becomeDefaultGroupForNewUsers
     */
    public function getBecomeDefaultGroupForNewUsers()
    {
        return ($this->becomeDefaultGroupForNewUsers)
            ? $this->becomeDefaultGroupForNewUsers->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setUserIdList(ReplacementUserIdList $userIdList = null)
    {
        $this->userIdList = ($userIdList InstanceOf ReplacementUserIdList)
             ? $userIdList
             : new ReplacementUserIdList($userIdList);
        $this->userIdList->setElementName('userIdList');
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
