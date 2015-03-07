<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceInstantConferencing; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceInstantConferencing\InstantConferencingStandAloneCallControlAction;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceInstantConferencing\InstantConferencingParticipantName;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceInstantConferencing\InstantConferencingConferenceKey;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceInstantConferencing\InstantConferencingCallId;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\OutgoingDNorSIPURI;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\UserId;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Control a conference call from a stand alone user.
 *         The response is either SuccessResponse or ErrorResponse.
 */
class UserInstantConferencingControlStandAloneCallRequest extends ComplexType implements ComplexInterface
{
    public    $name                   = __CLASS__;
    protected $conferenceOwnerUserId  = null;
    protected $conferenceKey          = null;
    protected $conferenceCallId       = null;
    protected $action                 = null;
    protected $phoneNumber            = null;
    protected $userName               = null;

    public function __construct(
         $conferenceOwnerUserId,
         InstantConferencingConferenceKey $conferenceKey,
         $conferenceCallId,
         $action,
         $phoneNumber,
         $userName = null
    ) {
        $this->setConferenceOwnerUserId($conferenceOwnerUserId);
        $this->setConferenceKey($conferenceKey);
        $this->setConferenceCallId($conferenceCallId);
        $this->setAction($action);
        $this->setPhoneNumber($phoneNumber);
        $this->setUserName($userName);
    }

    public function setConferenceOwnerUserId($conferenceOwnerUserId = null)
    {
        $this->conferenceOwnerUserId = ($conferenceOwnerUserId InstanceOf UserId)
             ? $conferenceOwnerUserId
             : new UserId($conferenceOwnerUserId);
    }

    public function getConferenceOwnerUserId()
    {
        return (!$this->conferenceOwnerUserId) ?: $this->conferenceOwnerUserId->value();
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
        $this->action = ($action InstanceOf InstantConferencingStandAloneCallControlAction)
             ? $action
             : new InstantConferencingStandAloneCallControlAction($action);
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
}
