<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated14; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceInstantConferencing\InstantConferencingPresentationPassword;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceInstantConferencing\InstantConferencingConferenceType;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceInstantConferencing\InstantConferencingBillingCode;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceInstantConferencing\InstantConferencingAccessCode;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceInstantConferencing\InstantConferencingSchedule;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceInstantConferencing\InstantConferencingCallId;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceInstantConferencing\InstantConferencingTitle;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\UserDisplayNames;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\DN;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Response to UserInstantConferencingGetStandAloneConferenceRequest.
 *         Contains the information of a conference.
 */
class UserInstantConferencingGetStandAloneConferenceResponse extends ComplexType implements ComplexInterface
{
    public    $name                            = __CLASS__;
    protected $conferenceCallId                = null;
    protected $conferenceOwnerDisplayNames     = null;
    protected $title                           = null;
    protected $leaderRequired                  = null;
    protected $leaderReleaseDropsParticipants  = null;
    protected $announceCallers                 = null;
    protected $conferenceType                  = null;
    protected $conferenceSchedule              = null;
    protected $billingCode                     = null;
    protected $leaderAccessCode                = null;
    protected $participantAccessCode           = null;
    protected $isCallActive                    = null;
    protected $isExpired                       = null;
    protected $isFuture                        = null;
    protected $hasPresentation                 = null;
    protected $presentationPassword            = null;
    protected $allowOutdialInInvitation        = null;
    protected $bridgePhoneNumber               = null;


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

    public function setConferenceOwnerDisplayNames(UserDisplayNames $conferenceOwnerDisplayNames = null)
    {
    }

    public function getConferenceOwnerDisplayNames()
    {
        return (!$this->conferenceOwnerDisplayNames) ?: $this->conferenceOwnerDisplayNames->value();
    }

    public function setTitle($title = null)
    {
        $this->title = ($title InstanceOf InstantConferencingTitle)
             ? $title
             : new InstantConferencingTitle($title);
    }

    public function getTitle()
    {
        return (!$this->title) ?: $this->title->value();
    }

    public function setLeaderRequired(xs:boolean $leaderRequired = null)
    {
    }

    public function getLeaderRequired()
    {
        return (!$this->leaderRequired) ?: $this->leaderRequired->value();
    }

    public function setLeaderReleaseDropsParticipants(xs:boolean $leaderReleaseDropsParticipants = null)
    {
    }

    public function getLeaderReleaseDropsParticipants()
    {
        return (!$this->leaderReleaseDropsParticipants) ?: $this->leaderReleaseDropsParticipants->value();
    }

    public function setAnnounceCallers(xs:boolean $announceCallers = null)
    {
    }

    public function getAnnounceCallers()
    {
        return (!$this->announceCallers) ?: $this->announceCallers->value();
    }

    public function setConferenceType($conferenceType = null)
    {
        $this->conferenceType = ($conferenceType InstanceOf InstantConferencingConferenceType)
             ? $conferenceType
             : new InstantConferencingConferenceType($conferenceType);
    }

    public function getConferenceType()
    {
        return (!$this->conferenceType) ?: $this->conferenceType->value();
    }

    public function setConferenceSchedule(InstantConferencingSchedule $conferenceSchedule = null)
    {
    }

    public function getConferenceSchedule()
    {
        return (!$this->conferenceSchedule) ?: $this->conferenceSchedule->value();
    }

    public function setBillingCode($billingCode = null)
    {
        $this->billingCode = ($billingCode InstanceOf InstantConferencingBillingCode)
             ? $billingCode
             : new InstantConferencingBillingCode($billingCode);
    }

    public function getBillingCode()
    {
        return (!$this->billingCode) ?: $this->billingCode->value();
    }

    public function setLeaderAccessCode($leaderAccessCode = null)
    {
        $this->leaderAccessCode = ($leaderAccessCode InstanceOf InstantConferencingAccessCode)
             ? $leaderAccessCode
             : new InstantConferencingAccessCode($leaderAccessCode);
    }

    public function getLeaderAccessCode()
    {
        return (!$this->leaderAccessCode) ?: $this->leaderAccessCode->value();
    }

    public function setParticipantAccessCode($participantAccessCode = null)
    {
        $this->participantAccessCode = ($participantAccessCode InstanceOf InstantConferencingAccessCode)
             ? $participantAccessCode
             : new InstantConferencingAccessCode($participantAccessCode);
    }

    public function getParticipantAccessCode()
    {
        return (!$this->participantAccessCode) ?: $this->participantAccessCode->value();
    }

    public function setIsCallActive(xs:boolean $isCallActive = null)
    {
    }

    public function getIsCallActive()
    {
        return (!$this->isCallActive) ?: $this->isCallActive->value();
    }

    public function setIsExpired(xs:boolean $isExpired = null)
    {
    }

    public function getIsExpired()
    {
        return (!$this->isExpired) ?: $this->isExpired->value();
    }

    public function setIsFuture(xs:boolean $isFuture = null)
    {
    }

    public function getIsFuture()
    {
        return (!$this->isFuture) ?: $this->isFuture->value();
    }

    public function setHasPresentation(xs:boolean $hasPresentation = null)
    {
    }

    public function getHasPresentation()
    {
        return (!$this->hasPresentation) ?: $this->hasPresentation->value();
    }

    public function setPresentationPassword($presentationPassword = null)
    {
        $this->presentationPassword = ($presentationPassword InstanceOf InstantConferencingPresentationPassword)
             ? $presentationPassword
             : new InstantConferencingPresentationPassword($presentationPassword);
    }

    public function getPresentationPassword()
    {
        return (!$this->presentationPassword) ?: $this->presentationPassword->value();
    }

    public function setAllowOutdialInInvitation(xs:boolean $allowOutdialInInvitation = null)
    {
    }

    public function getAllowOutdialInInvitation()
    {
        return (!$this->allowOutdialInInvitation) ?: $this->allowOutdialInInvitation->value();
    }

    public function setBridgePhoneNumber($bridgePhoneNumber = null)
    {
        $this->bridgePhoneNumber = ($bridgePhoneNumber InstanceOf DN)
             ? $bridgePhoneNumber
             : new DN($bridgePhoneNumber);
    }

    public function getBridgePhoneNumber()
    {
        return (!$this->bridgePhoneNumber) ?: $this->bridgePhoneNumber->value();
    }
}
