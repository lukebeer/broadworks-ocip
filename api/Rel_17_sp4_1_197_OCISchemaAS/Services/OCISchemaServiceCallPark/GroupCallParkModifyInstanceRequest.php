<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCallPark; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCallPark\CallParkRecallTo;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ReplacementUserIdList;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ServiceInstanceName;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ServiceProviderId;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\GroupId;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\UserId;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Modifies a Call Park group. Replaces the entire list of users in the group.  
 *         The users are in the list are in the order they will try to be parked on.
 *         The response is either SuccessResponse or ErrorResponse.
 *         
 *         The following elements are only used in AS data mode:
 *          recallAlternateUserId
 *          recallTo
 */
class GroupCallParkModifyInstanceRequest extends ComplexType implements ComplexInterface
{
    public    $name                  = 'GroupCallParkModifyInstanceRequest';
    protected $serviceProviderId     = null;
    protected $groupId               = null;
    protected $name                  = null;
    protected $newName               = null;
    protected $userIdList            = null;
    protected $recallAlternateUserId = null;
    protected $recallTo              = null;

    public function __construct(
         $serviceProviderId,
         $groupId,
         $name,
         $newName = null,
         ReplacementUserIdList $userIdList = null,
         $recallAlternateUserId = null,
         $recallTo = null
    ) {
        $this->setServiceProviderId($serviceProviderId);
        $this->setGroupId($groupId);
        $this->setName($name);
        $this->setNewName($newName);
        $this->setUserIdList($userIdList);
        $this->setRecallAlternateUserId($recallAlternateUserId);
        $this->setRecallTo($recallTo);
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
     * @return ServiceInstanceName $name
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
     * @return ServiceInstanceName $newName
     */
    public function getNewName()
    {
        return $this->newName->getValue();
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
     * @return ReplacementUserIdList $userIdList
     */
    public function getUserIdList()
    {
        return $this->userIdList;
    }

    /**
     * 
     */
    public function setRecallAlternateUserId($recallAlternateUserId = null)
    {
        if (!$recallAlternateUserId) return $this;
        $this->recallAlternateUserId = ($recallAlternateUserId InstanceOf UserId)
             ? $recallAlternateUserId
             : new UserId($recallAlternateUserId);
        $this->recallAlternateUserId->setName('recallAlternateUserId');
        return $this;
    }

    /**
     * 
     * @return UserId $recallAlternateUserId
     */
    public function getRecallAlternateUserId()
    {
        return $this->recallAlternateUserId->getValue();
    }

    /**
     * 
     */
    public function setRecallTo($recallTo = null)
    {
        if (!$recallTo) return $this;
        $this->recallTo = ($recallTo InstanceOf CallParkRecallTo)
             ? $recallTo
             : new CallParkRecallTo($recallTo);
        $this->recallTo->setName('recallTo');
        return $this;
    }

    /**
     * 
     * @return CallParkRecallTo $recallTo
     */
    public function getRecallTo()
    {
        return $this->recallTo->getValue();
    }
}
