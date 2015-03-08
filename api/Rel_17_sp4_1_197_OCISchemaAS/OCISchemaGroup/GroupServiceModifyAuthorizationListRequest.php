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


/**
     * Requests to change the group's service authorization status.
 *         The boolean flags are used to authorize or unauthorize services and packs.
 *         The response is either SuccessResponse or ErrorResponse.
 */
class GroupServiceModifyAuthorizationListRequest extends ComplexType implements ComplexInterface
{
    public    $name                      = __CLASS__;
    protected $serviceProviderId         = null;
    protected $groupId                   = null;
    protected $servicePackAuthorization  = null;
    protected $groupServiceAuthorization = null;
    protected $userServiceAuthorization  = null;

    public function __construct(
         $serviceProviderId,
         $groupId,
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
     * Service Provider Id uniquely identifies a service provider.
     *         NOTE: The service provider id has a maximum length of 30 bytes, not 30 characters.
     */
    public function setServiceProviderId($serviceProviderId = null)
    {
        $this->serviceProviderId = ($serviceProviderId InstanceOf ServiceProviderId)
             ? $serviceProviderId
             : new ServiceProviderId($serviceProviderId);
    }

    /**
     * Service Provider Id uniquely identifies a service provider.
     *         NOTE: The service provider id has a maximum length of 30 bytes, not 30 characters.
     */
    public function getServiceProviderId()
    {
        return (!$this->serviceProviderId) ?: $this->serviceProviderId->getValue();
    }

    /**
     * Group Id identifies a group within a service provider or enterprise. The group id is not
     *         unique system wide. It must be combined with a service provider id to be unique across the system.
     */
    public function setGroupId($groupId = null)
    {
        $this->groupId = ($groupId InstanceOf GroupId)
             ? $groupId
             : new GroupId($groupId);
    }

    /**
     * Group Id identifies a group within a service provider or enterprise. The group id is not
     *         unique system wide. It must be combined with a service provider id to be unique across the system.
     */
    public function getGroupId()
    {
        return (!$this->groupId) ?: $this->groupId->getValue();
    }

    /**
     * Authorize (with quantity) or unauthorize a service pack.
     */
    public function setServicePackAuthorization(ServicePackAuthorization $servicePackAuthorization = null)
    {
        $this->servicePackAuthorization = ServicePackAuthorization $servicePackAuthorization;
    }

    /**
     * Authorize (with quantity) or unauthorize a service pack.
     */
    public function getServicePackAuthorization()
    {
        return (!$this->servicePackAuthorization) ?: $this->servicePackAuthorization->getValue();
    }

    /**
     * Authorize (with quantity) or unauthorize a group service.
     */
    public function setGroupServiceAuthorization(GroupServiceAuthorization $groupServiceAuthorization = null)
    {
        $this->groupServiceAuthorization = GroupServiceAuthorization $groupServiceAuthorization;
    }

    /**
     * Authorize (with quantity) or unauthorize a group service.
     */
    public function getGroupServiceAuthorization()
    {
        return (!$this->groupServiceAuthorization) ?: $this->groupServiceAuthorization->getValue();
    }

    /**
     * Authorize (with quantity) or unauthorize a user service.
     */
    public function setUserServiceAuthorization(UserServiceAuthorization $userServiceAuthorization = null)
    {
        $this->userServiceAuthorization = UserServiceAuthorization $userServiceAuthorization;
    }

    /**
     * Authorize (with quantity) or unauthorize a user service.
     */
    public function getUserServiceAuthorization()
    {
        return (!$this->userServiceAuthorization) ?: $this->userServiceAuthorization->getValue();
    }
}
