<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ServiceProviderId;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\UserType;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\GroupId;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\UserId;
use Broadworks_OCIP\core\Builder\Types\PrimitiveType;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Response to SystemDnGetUtilizationRequest14sp3.
 *         The isActivated element is only included when the DN is
 *   assigned to a user.
 */
class SystemDnGetUtilizationResponse14sp3 extends ComplexType implements ComplexInterface
{
    public    $name                 = 'SystemDnGetUtilizationResponse14sp3';
    protected $serviceProviderId    = null;
    protected $groupId              = null;
    protected $userId               = null;
    protected $userType             = null;
    protected $isGroupCallingLineId = null;
    protected $isActivated          = null;

    /**
     * @return SystemDnGetUtilizationResponse14sp3
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
    public function setUserId($userId = null)
    {
        if (!$userId) return $this;
        $this->userId = ($userId InstanceOf UserId)
             ? $userId
             : new UserId($userId);
        $this->userId->setName('userId');
        return $this;
    }

    /**
     * 
     * @return UserId
     */
    public function getUserId()
    {
        return $this->userId->getValue();
    }

    /**
     * 
     */
    public function setUserType($userType = null)
    {
        if (!$userType) return $this;
        $this->userType = ($userType InstanceOf UserType)
             ? $userType
             : new UserType($userType);
        $this->userType->setName('userType');
        return $this;
    }

    /**
     * 
     * @return UserType
     */
    public function getUserType()
    {
        return $this->userType->getValue();
    }

    /**
     * 
     */
    public function setIsGroupCallingLineId($isGroupCallingLineId = null)
    {
        if (!$isGroupCallingLineId) return $this;
        $this->isGroupCallingLineId = new PrimitiveType($isGroupCallingLineId);
        $this->isGroupCallingLineId->setName('isGroupCallingLineId');
        return $this;
    }

    /**
     * 
     * @return xs:boolean
     */
    public function getIsGroupCallingLineId()
    {
        return $this->isGroupCallingLineId->getValue();
    }

    /**
     * 
     */
    public function setIsActivated($isActivated = null)
    {
        if (!$isActivated) return $this;
        $this->isActivated = new PrimitiveType($isActivated);
        $this->isActivated->setName('isActivated');
        return $this;
    }

    /**
     * 
     * @return xs:boolean
     */
    public function getIsActivated()
    {
        return $this->isActivated->getValue();
    }
}
