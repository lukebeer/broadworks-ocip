<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaGroup; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\GroupServiceAuthorization;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\UserServiceAuthorization;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ServicePackAuthorization;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ServiceProviderId;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\GroupId;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Requests to change the group's service authorization status.
 *         The boolean flags are used to authorize or unauthorize services and packs.
 *         The response is either SuccessResponse or ErrorResponse.
 */
class GroupServiceModifyAuthorizationListRequest extends ComplexType implements ComplexInterface
{
    public    $name = 'GroupServiceModifyAuthorizationListRequest';
    protected $serviceProviderId;
    protected $groupId;
    protected $servicePackAuthorization;
    protected $groupServiceAuthorization;
    protected $userServiceAuthorization;

    public function __construct(
         $serviceProviderId = '',
         $groupId = '',
         ServicePackAuthorization $servicePackAuthorization = null,
         GroupServiceAuthorization $groupServiceAuthorization = null,
         UserServiceAuthorization $userServiceAuthorization = null
    ) {
        $this->setServiceProviderId($serviceProviderId);
        $this->setGroupId($groupId);
        $this->setServicePackAuthorization($servicePackAuthorization);
        $this->setGroupServiceAuthorization($groupServiceAuthorization);
        $this->setUserServiceAuthorization($userServiceAuthorization);
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
    public function setServicePackAuthorization(ServicePackAuthorization $servicePackAuthorization = null)
    {
        $this->servicePackAuthorization = ($servicePackAuthorization InstanceOf ServicePackAuthorization)
             ? $servicePackAuthorization
             : new ServicePackAuthorization($servicePackAuthorization);
        $this->servicePackAuthorization->setName('servicePackAuthorization');
        return $this;
    }

    /**
     * 
     * @return ServicePackAuthorization $servicePackAuthorization
     */
    public function getServicePackAuthorization()
    {
        return $this->servicePackAuthorization;
    }

    /**
     * 
     */
    public function setGroupServiceAuthorization(GroupServiceAuthorization $groupServiceAuthorization = null)
    {
        $this->groupServiceAuthorization = ($groupServiceAuthorization InstanceOf GroupServiceAuthorization)
             ? $groupServiceAuthorization
             : new GroupServiceAuthorization($groupServiceAuthorization);
        $this->groupServiceAuthorization->setName('groupServiceAuthorization');
        return $this;
    }

    /**
     * 
     * @return GroupServiceAuthorization $groupServiceAuthorization
     */
    public function getGroupServiceAuthorization()
    {
        return $this->groupServiceAuthorization;
    }

    /**
     * 
     */
    public function setUserServiceAuthorization(UserServiceAuthorization $userServiceAuthorization = null)
    {
        $this->userServiceAuthorization = ($userServiceAuthorization InstanceOf UserServiceAuthorization)
             ? $userServiceAuthorization
             : new UserServiceAuthorization($userServiceAuthorization);
        $this->userServiceAuthorization->setName('userServiceAuthorization');
        return $this;
    }

    /**
     * 
     * @return UserServiceAuthorization $userServiceAuthorization
     */
    public function getUserServiceAuthorization()
    {
        return $this->userServiceAuthorization;
    }
}
