<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceInstantConferencing; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceInstantConferencing\InstantConferencingCallControlAction;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceInstantConferencing\InstantConferencingParticipantName;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceInstantConferencing\InstantConferencingConferenceKey;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceInstantConferencing\InstantConferencingCallId;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceInstantConferencing\InstantConferencingLegId;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\OutgoingDNorSIPURI;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\UserId;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
     * Control a conference call.
 *         The legId is given in the UserInstantConferencingGetConferenceCallResponse.
 *         The response is either SuccessResponse or ErrorResponse.
 */
class UserInstantConferencingControlCallRequest extends ComplexType implements ComplexInterface
{
    public    $name             = __CLASS__;
    protected $userId           = null;
    protected $conferenceKey    = null;
    protected $conferenceCallId = null;
    protected $action           = null;
    protected $phoneNumber      = null;
    protected $userName         = null;
    protected $legId            = null;

    public function __construct(
         $userId,
          $conferenceKey,
         $conferenceCallId,
         $action,
         $phoneNumber = null,
         $userName = null,
         $legId = null
    ) {
        $this->setUserId($userId);
        $this->setConferenceKey($conferenceKey);
        $this->setConferenceCallId($conferenceCallId);
        $this->setAction($action);
        $this->setPhoneNumber($phoneNumber);
        $this->setUserName($userName);
        $this->setLegId($legId);
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
        $this->conferenceKey =  $conferenceKey;
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

    /**
     * The conference call control action.
     */
    public function setAction($action = null)
    {
        $this->action = ($action InstanceOf InstantConferencingCallControlAction)
             ? $action
             : new InstantConferencingCallControlAction($action);
    }

    /**
     * The conference call control action.
     */
    public function getAction()
    {
        return (!$this->action) ?: $this->action->getValue();
    }

    /**
     * Phone Number or SIP URI that can be used to dial.
     *         URI Validation:
     *         - must be of the format string@string where string is at least one valid character and there is one and only one @.
     *         - don't allow sip:
     *         - allow the following characters in the user portions:
     *           alphanumeric   -   _   .   !   ~   *   '   (   )
     *         - allow the following characters in the host portion:
     *           alphanumeric   -   .
     */
    public function setPhoneNumber($phoneNumber = null)
    {
        $this->phoneNumber = ($phoneNumber InstanceOf OutgoingDNorSIPURI)
             ? $phoneNumber
             : new OutgoingDNorSIPURI($phoneNumber);
    }

    /**
     * Phone Number or SIP URI that can be used to dial.
     *         URI Validation:
     *         - must be of the format string@string where string is at least one valid character and there is one and only one @.
     *         - don't allow sip:
     *         - allow the following characters in the user portions:
     *           alphanumeric   -   _   .   !   ~   *   '   (   )
     *         - allow the following characters in the host portion:
     *           alphanumeric   -   .
     */
    public function getPhoneNumber()
    {
        return (!$this->phoneNumber) ?: $this->phoneNumber->getValue();
    }

    /**
     * Conference leader or participant descriptive name.
     */
    public function setUserName($userName = null)
    {
        $this->userName = ($userName InstanceOf InstantConferencingParticipantName)
             ? $userName
             : new InstantConferencingParticipantName($userName);
    }

    /**
     * Conference leader or participant descriptive name.
     */
    public function getUserName()
    {
        return (!$this->userName) ?: $this->userName->getValue();
    }

    /**
     * Identifies a leg of a conference call.
     */
    public function setLegId($legId = null)
    {
        $this->legId = ($legId InstanceOf InstantConferencingLegId)
             ? $legId
             : new InstantConferencingLegId($legId);
    }

    /**
     * Identifies a leg of a conference call.
     */
    public function getLegId()
    {
        return (!$this->legId) ?: $this->legId->getValue();
    }
}
