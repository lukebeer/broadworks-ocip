<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceInstantConferencing; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\UserId;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\InstantConferencingConferenceKey;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\InstantConferencingCallId;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\InstantConferencingCallControlAction;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\OutgoingDNorSIPURI;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\InstantConferencingParticipantName;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\InstantConferencingLegId;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Control a conference call.
 *         The legId is given in the UserInstantConferencingGetConferenceCallResponse.
 *         The response is either SuccessResponse or ErrorResponse.
 */
class UserInstantConferencingControlCallRequest extends ComplexType implements ComplexInterface
{
    public    $name = __CLASS__;

    public function __construct(
             $userId,
             $conferenceKey,
             $conferenceCallId,
             $action,
             $phoneNumber=null,
             $userName=null,
             $legId=null
    ) {
        $this->userId           = new UserId($userId);
        $this->conferenceKey    = $conferenceKey;
        $this->conferenceCallId = $conferenceCallId;
        $this->action           = $action;
        $this->phoneNumber      = new OutgoingDNorSIPURI($phoneNumber);
        $this->userName         = $userName;
        $this->legId            = $legId;
        $this->args             = func_get_args();
    }

    public function setUserId($userId)
    {
        $userId and $this->userId = new UserId($userId);
    }

    public function getUserId()
    {
        return (!$this->userId) ?: $this->userId->value();
    }

    public function setConferenceKey($conferenceKey)
    {
        $conferenceKey and $this->conferenceKey = new InstantConferencingConferenceKey($conferenceKey);
    }

    public function getConferenceKey()
    {
        return (!$this->conferenceKey) ?: $this->conferenceKey->value();
    }

    public function setConferenceCallId($conferenceCallId)
    {
        $conferenceCallId and $this->conferenceCallId = new InstantConferencingCallId($conferenceCallId);
    }

    public function getConferenceCallId()
    {
        return (!$this->conferenceCallId) ?: $this->conferenceCallId->value();
    }

    public function setAction($action)
    {
        $action and $this->action = new InstantConferencingCallControlAction($action);
    }

    public function getAction()
    {
        return (!$this->action) ?: $this->action->value();
    }

    public function setPhoneNumber($phoneNumber)
    {
        $phoneNumber and $this->phoneNumber = new OutgoingDNorSIPURI($phoneNumber);
    }

    public function getPhoneNumber()
    {
        return (!$this->phoneNumber) ?: $this->phoneNumber->value();
    }

    public function setUserName($userName)
    {
        $userName and $this->userName = new InstantConferencingParticipantName($userName);
    }

    public function getUserName()
    {
        return (!$this->userName) ?: $this->userName->value();
    }

    public function setLegId($legId)
    {
        $legId and $this->legId = new InstantConferencingLegId($legId);
    }

    public function getLegId()
    {
        return (!$this->legId) ?: $this->legId->value();
    }
}
