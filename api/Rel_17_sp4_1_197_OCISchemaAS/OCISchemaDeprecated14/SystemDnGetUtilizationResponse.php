<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated14; 

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
 * Response to SystemDnGetUtilizationRequest.
 *         Replaced By: SystemDnGetUtilizationResponse14sp3
 */
class SystemDnGetUtilizationResponse extends ComplexType implements ComplexInterface
{
    public    $name = 'SystemDnGetUtilizationResponse';
    protected $serviceProviderId;
    protected $groupId;
    protected $userId;
    protected $userType;
    protected $isGroupCallingLineId;

    /**
     * @return \Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated14\SystemDnGetUtilizationResponse $response
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
    public function setUserId($userId = null)
    {
        $this->userId = ($userId InstanceOf UserId)
             ? $userId
             : new UserId($userId);
        $this->userId->setName('userId');
        return $this;
    }

    /**
     * 
     * @return UserId $userId
     */
    public function getUserId()
    {
        return ($this->userId) ? $this->userId->getValue() : null;
    }

    /**
     * 
     */
    public function setUserType($userType = null)
    {
        $this->userType = ($userType InstanceOf UserType)
             ? $userType
             : new UserType($userType);
        $this->userType->setName('userType');
        return $this;
    }

    /**
     * 
     * @return UserType $userType
     */
    public function getUserType()
    {
        return ($this->userType) ? $this->userType->getValue() : null;
    }

    /**
     * 
     */
    public function setIsGroupCallingLineId($isGroupCallingLineId = null)
    {
        $this->isGroupCallingLineId = new PrimitiveType($isGroupCallingLineId);
        $this->isGroupCallingLineId->setName('isGroupCallingLineId');
        return $this;
    }

    /**
     * 
     * @return boolean $isGroupCallingLineId
     */
    public function getIsGroupCallingLineId()
    {
        return ($this->isGroupCallingLineId) ? $this->isGroupCallingLineId->getValue() : null;
    }
}
