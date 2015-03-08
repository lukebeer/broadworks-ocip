<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceInstantConferencing; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceInstantConferencing\InstantConferencingConferenceKey;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceInstantConferencing\InstantConferencingCallId;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\UserId;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
     * Get the information of a conference call owned or delegated by the user.
 *         The response is either UserInstantConferencingGetConferenceCallResponse
 *         or ErrorResponse.
 */
class UserInstantConferencingGetConferenceCallRequest extends ComplexType implements ComplexInterface
{
    const     RESPONSE_TYPE     = 'Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceInstantConferencing\UserInstantConferencingGetConferenceCallResponse';
    public    $name             = __CLASS__;
    protected $userId           = null;
    protected $conferenceKey    = null;
    protected $conferenceCallId = null;

    public function __construct(
         $userId,
         InstantConferencingConferenceKey $conferenceKey,
         $conferenceCallId
    ) {
        $this->setUserId($userId);
        $this->setConferenceKey($conferenceKey);
        $this->setConferenceCallId($conferenceCallId);
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
     * Uniquely identifies a conference by the combination of bridge id and conference id within the bridge.
     */
    public function setConferenceKey(InstantConferencingConferenceKey $conferenceKey = null)
    {
        $this->conferenceKey = InstantConferencingConferenceKey $conferenceKey;
    }

    /**
     * Uniquely identifies a conference by the combination of bridge id and conference id within the bridge.
     */
    public function getConferenceKey()
    {
        return (!$this->conferenceKey) ?: $this->conferenceKey->getValue();
    }

    /**
     * Conference call Id.
     */
    public function setConferenceCallId($conferenceCallId = null)
    {
        $this->conferenceCallId = ($conferenceCallId InstanceOf InstantConferencingCallId)
             ? $conferenceCallId
             : new InstantConferencingCallId($conferenceCallId);
    }

    /**
     * Conference call Id.
     */
    public function getConferenceCallId()
    {
        return (!$this->conferenceCallId) ?: $this->conferenceCallId->getValue();
    }
}
