<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceProvider; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\GroupServiceAuthorization;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\UserServiceAuthorization;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ServiceProviderId;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
     * Requests to change the service provider's service authorization status.
 *         The boolean flags are used to authorize or unauthorize services.
 *         The response is either SuccessResponse or ErrorResponse.
 */
class ServiceProviderServiceModifyAuthorizationListRequest extends ComplexType implements ComplexInterface
{
    public    $name                      = __CLASS__;
    protected $serviceProviderId         = null;
    protected $groupServiceAuthorization = null;
    protected $userServiceAuthorization  = null;

    public function __construct(
         $serviceProviderId,
          $groupServiceAuthorization = null,
          $userServiceAuthorization = null
    ) {
        $this->setServiceProviderId($serviceProviderId);
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
     * Authorize (with quantity) or unauthorize a group service.
     */
    public function setGroupServiceAuthorization(GroupServiceAuthorization $groupServiceAuthorization = null)
    {
        $this->groupServiceAuthorization =  $groupServiceAuthorization;
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
        $this->userServiceAuthorization =  $userServiceAuthorization;
    }

    /**
     * Authorize (with quantity) or unauthorize a user service.
     */
    public function getUserServiceAuthorization()
    {
        return (!$this->userServiceAuthorization) ?: $this->userServiceAuthorization->getValue();
    }
}
