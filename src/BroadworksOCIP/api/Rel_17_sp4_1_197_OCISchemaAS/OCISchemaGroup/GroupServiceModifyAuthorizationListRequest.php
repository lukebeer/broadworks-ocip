<?php
/**
 * This file is part of http://github.com/LukeBeer/BroadworksOCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaGroup; 

use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\GroupServiceAuthorization;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\UserServiceAuthorization;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ServicePackAuthorization;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ServiceProviderId;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\GroupId;
use BroadworksOCIP\Builder\Types\ComplexInterface;
use BroadworksOCIP\Builder\Types\ComplexType;
use BroadworksOCIP\Response\ResponseOutput;
use BroadworksOCIP\Client\Client;


/**
 * Requests to change the group's service authorization status.
 *         The boolean flags are used to authorize or unauthorize services and packs.
 *         The response is either SuccessResponse or ErrorResponse.
 */
class GroupServiceModifyAuthorizationListRequest extends ComplexType implements ComplexInterface
{
    public    $elementName = 'GroupServiceModifyAuthorizationListRequest';
    protected $serviceProviderId;
    protected $groupId;
    protected $servicePackAuthorization;
    protected $groupServiceAuthorization;
    protected $userServiceAuthorization;

    public function __construct(
         $serviceProviderId = '',
         $groupId = '',
         $servicePackAuthorization = null,
         $groupServiceAuthorization = null,
         $userServiceAuthorization = null
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
    public function setServicePackAuthorization(ServicePackAuthorization $servicePackAuthorization = null)
    {
        $this->servicePackAuthorization = ($servicePackAuthorization InstanceOf ServicePackAuthorization)
             ? $servicePackAuthorization
             : new ServicePackAuthorization($servicePackAuthorization);
        $this->servicePackAuthorization->setElementName('servicePackAuthorization');
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
        $this->groupServiceAuthorization->setElementName('groupServiceAuthorization');
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
        $this->userServiceAuthorization->setElementName('userServiceAuthorization');
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
