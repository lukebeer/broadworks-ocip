<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceInstantConferencing; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\UserId;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
     * Get the list of users who could are eligible to be owner of a conference.
 *         Returns a list of instant conferencing bridges and the possible conference owners for
 *         the bridges owned by the user or the user is delegated to.
 *         The response is either UserInstantConferencingGetAvailableConferenceOwnerListResponse or ErrorResponse.
 *         It is possible to get the list of possible conference owners for one conferencing bridge.
 *         If the bridgeServiceUserId is specified, only the possible conference owners for that bridge
 *         are returned, otherwise the possible conference owners of all bridges are returned.
 */
class UserInstantConferencingGetAvailableConferenceOwnerListRequest extends ComplexType implements ComplexInterface
{
    const     RESPONSE_TYPE        = 'Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceInstantConferencing\UserInstantConferencingGetAvailableConferenceOwnerListResponse';
    public    $name                = __CLASS__;
    protected $userId              = null;
    protected $bridgeServiceUserId = null;

    public function __construct(
         $userId,
         $bridgeServiceUserId = null
    ) {
        $this->setUserId($userId);
        $this->setBridgeServiceUserId($bridgeServiceUserId);
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
     * A user id consists of a user-portion optionally followed by an @ sign and a domain name.
     *         If the domain is not specified, it is assumed to be the system default domain.
     *         The domain is required when adding normal users and virtual users, i.e. Auto Attendants,
     *         Hunt Groups, Call Centers....
     *         The domain must not be specified for system-level and service-provider-level administrators.
     */
    public function setBridgeServiceUserId($bridgeServiceUserId = null)
    {
        $this->bridgeServiceUserId = ($bridgeServiceUserId InstanceOf UserId)
             ? $bridgeServiceUserId
             : new UserId($bridgeServiceUserId);
    }

    /**
     * A user id consists of a user-portion optionally followed by an @ sign and a domain name.
     *         If the domain is not specified, it is assumed to be the system default domain.
     *         The domain is required when adding normal users and virtual users, i.e. Auto Attendants,
     *         Hunt Groups, Call Centers....
     *         The domain must not be specified for system-level and service-provider-level administrators.
     */
    public function getBridgeServiceUserId()
    {
        return (!$this->bridgeServiceUserId) ?: $this->bridgeServiceUserId->getValue();
    }
}
