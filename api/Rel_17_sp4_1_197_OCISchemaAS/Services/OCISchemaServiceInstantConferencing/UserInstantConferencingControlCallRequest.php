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
    public    $name              = __CLASS__;
    protected $userId            = null;
    protected $conferenceKey     = null;
    protected $conferenceCallId  = null;
    protected $action            = null;
    protected $phoneNumber       = null;
    protected $userName          = null;
    protected $legId             = null;

    public function __construct(
         $userId,
         InstantConferencingConferenceKey $conferenceKey,
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

    public function setUserId($userId = null)
    {
        $this->userId = ($userId InstanceOf UserId)
             ? $userId
             : new UserId($userId);
    }

    public function getUserId()
    {
        return (!$this->userId) ?: $this->userId->value();
    }

    public function setConferenceKey(InstantConferencingConferenceKey $conferenceKey = null)
    {
    }

    public function getConferenceKey()
    {
        return (!$this->conferenceKey) ?: $this->conferenceKey->value();
    }

    public function setConferenceCallId($conferenceCallId = null)
    {
        $this->conferenceCallId = ($conferenceCallId InstanceOf InstantConferencingCallId)
             ? $conferenceCallId
             : new InstantConferencingCallId($conferenceCallId);
    }

    public function getConferenceCallId()
    {
        return (!$this->conferenceCallId) ?: $this->conferenceCallId->value();
    }

    public function setAction($action = null)
    {
        $this->action = ($action InstanceOf InstantConferencingCallControlAction)
             ? $action
             : new InstantConferencingCallControlAction($action);
    }

    public function getAction()
    {
        return (!$this->action) ?: $this->action->value();
    }

    public function setPhoneNumber($phoneNumber = null)
    {
        $this->phoneNumber = ($phoneNumber InstanceOf OutgoingDNorSIPURI)
             ? $phoneNumber
             : new OutgoingDNorSIPURI($phoneNumber);
    }

    public function getPhoneNumber()
    {
        return (!$this->phoneNumber) ?: $this->phoneNumber->value();
    }

    public function setUserName($userName = null)
    {
        $this->userName = ($userName InstanceOf InstantConferencingParticipantName)
             ? $userName
             : new InstantConferencingParticipantName($userName);
    }

    public function getUserName()
    {
        return (!$this->userName) ?: $this->userName->value();
    }

    public function setLegId($legId = null)
    {
        $this->legId = ($legId InstanceOf InstantConferencingLegId)
             ? $legId
             : new InstantConferencingLegId($legId);
    }

    public function getLegId()
    {
        return (!$this->legId) ?: $this->legId->value();
    }
}
