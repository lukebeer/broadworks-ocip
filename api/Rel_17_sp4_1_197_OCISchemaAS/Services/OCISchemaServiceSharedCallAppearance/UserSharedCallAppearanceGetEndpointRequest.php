<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceSharedCallAppearance; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\AccessDeviceEndpointKey;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\UserId;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
     * Get the user's Shared Call Appearance endpoint setting.
 *         The response is either a UserSharedCallAppearanceGetEndpointResponse or an ErrorResponse.
 */
class UserSharedCallAppearanceGetEndpointRequest extends ComplexType implements ComplexInterface
{
    const     RESPONSE_TYPE         = 'Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceSharedCallAppearance\UserSharedCallAppearanceGetEndpointResponse';
    public    $name                 = __CLASS__;
    protected $userId               = null;
    protected $accessDeviceEndpoint = null;

    public function __construct(
         $userId,
         AccessDeviceEndpointKey $accessDeviceEndpoint
    ) {
        $this->setUserId($userId);
        $this->setAccessDeviceEndpoint($accessDeviceEndpoint);
    }

    /**
     * A user id consists of a user-portion optionally followed by an @ sign and a domain name.
     *         If the domain is not specified, it is assumed to be the system default domain.
     *         The domain is required when adding normal users and virtual users, i.e. Auto Attendants,
     *         Hunt Groups, Call Centers....
     *         The domain must not be specified for system-level and service-provider-level administrators.
     */
    public function setUserId($userId = null)
    {
        $this->userId = ($userId InstanceOf UserId)
             ? $userId
             : new UserId($userId);
    }

    /**
     * A user id consists of a user-portion optionally followed by an @ sign and a domain name.
     *         If the domain is not specified, it is assumed to be the system default domain.
     *         The domain is required when adding normal users and virtual users, i.e. Auto Attendants,
     *         Hunt Groups, Call Centers....
     *         The domain must not be specified for system-level and service-provider-level administrators.
     */
    public function getUserId()
    {
        return (!$this->userId) ?: $this->userId->getValue();
    }

    /**
     * Access device end point in the context of a delete command.
     */
    public function setAccessDeviceEndpoint(AccessDeviceEndpointKey $accessDeviceEndpoint = null)
    {
        $this->accessDeviceEndpoint = AccessDeviceEndpointKey $accessDeviceEndpoint;
    }

    /**
     * Access device end point in the context of a delete command.
     */
    public function getAccessDeviceEndpoint()
    {
        return (!$this->accessDeviceEndpoint) ?: $this->accessDeviceEndpoint->getValue();
    }
}
