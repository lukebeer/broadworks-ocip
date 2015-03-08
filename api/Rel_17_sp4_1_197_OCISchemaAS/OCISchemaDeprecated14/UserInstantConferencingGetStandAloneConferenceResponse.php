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
    public    $name                           = __CLASS__;
    protected $conferenceCallId               = null;
    protected $conferenceOwnerDisplayNames    = null;
    protected $title                          = null;
    protected $leaderRequired                 = null;
    protected $leaderReleaseDropsParticipants = null;
    protected $announceCallers                = null;
    protected $conferenceType                 = null;
    protected $conferenceSchedule             = null;
    protected $billingCode                    = null;
    protected $leaderAccessCode               = null;
    protected $participantAccessCode          = null;
    protected $isCallActive                   = null;
    protected $isExpired                      = null;
    protected $isFuture                       = null;
    protected $hasPresentation                = null;
    protected $presentationPassword           = null;
    protected $allowOutdialInInvitation       = null;
    protected $bridgePhoneNumber              = null;


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
     * The parts of a user's display name that a client can display in whatever way is appropriate
     *         for the client application.
     */
    public function setConferenceOwnerDisplayNames(UserDisplayNames $conferenceOwnerDisplayNames = null)
    {
        $this->conferenceOwnerDisplayNames =  $conferenceOwnerDisplayNames;
    }

    /**
     * The parts of a user's display name that a client can display in whatever way is appropriate
     *         for the client application.
     */
    public function getConferenceOwnerDisplayNames()
    {
        return (!$this->conferenceOwnerDisplayNames) ?: $this->conferenceOwnerDisplayNames->getValue();
    }

    /**
     * Title of instant conference.
     */
    public function setTitle($title = null)
    {
        $this->title = ($title InstanceOf InstantConferencingTitle)
             ? $title
             : new InstantConferencingTitle($title);
    }

    /**
     * Title of instant conference.
     */
    public function getTitle()
    {
        return (!$this->title) ?: $this->title->getValue();
    }

    /**
     * 
     */
    public function setLeaderRequired($leaderRequired = null)
    {
        $this->leaderRequired = (boolean) $leaderRequired;
    }

    /**
     * 
     */
    public function getLeaderRequired()
    {
        return (!$this->leaderRequired) ?: $this->leaderRequired->getValue();
    }

    /**
     * 
     */
    public function setLeaderReleaseDropsParticipants($leaderReleaseDropsParticipants = null)
    {
        $this->leaderReleaseDropsParticipants = (boolean) $leaderReleaseDropsParticipants;
    }

    /**
     * 
     */
    public function getLeaderReleaseDropsParticipants()
    {
        return (!$this->leaderReleaseDropsParticipants) ?: $this->leaderReleaseDropsParticipants->getValue();
    }

    /**
     * 
     */
    public function setAnnounceCallers($announceCallers = null)
    {
        $this->announceCallers = (boolean) $announceCallers;
    }

    /**
     * 
     */
    public function getAnnounceCallers()
    {
        return (!$this->announceCallers) ?: $this->announceCallers->getValue();
    }

    /**
     * The type of conference.
     */
    public function setConferenceType($conferenceType = null)
    {
        $this->conferenceType = ($conferenceType InstanceOf InstantConferencingConferenceType)
             ? $conferenceType
             : new InstantConferencingConferenceType($conferenceType);
    }

    /**
     * The type of conference.
     */
    public function getConferenceType()
    {
        return (!$this->conferenceType) ?: $this->conferenceType->getValue();
    }

    /**
     * Conference schedule used in the context of a conference add.
     */
    public function setConferenceSchedule(InstantConferencingSchedule $conferenceSchedule = null)
    {
        $this->conferenceSchedule =  $conferenceSchedule;
    }

    /**
     * Conference schedule used in the context of a conference add.
     */
    public function getConferenceSchedule()
    {
        return (!$this->conferenceSchedule) ?: $this->conferenceSchedule->getValue();
    }

    /**
     * Instant conferencing project billing code.
     */
    public function setBillingCode($billingCode = null)
    {
        $this->billingCode = ($billingCode InstanceOf InstantConferencingBillingCode)
             ? $billingCode
             : new InstantConferencingBillingCode($billingCode);
    }

    /**
     * Instant conferencing project billing code.
     */
    public function getBillingCode()
    {
        return (!$this->billingCode) ?: $this->billingCode->getValue();
    }

    /**
     * Conference access code for a conference.
     */
    public function setLeaderAccessCode($leaderAccessCode = null)
    {
        $this->leaderAccessCode = ($leaderAccessCode InstanceOf InstantConferencingAccessCode)
             ? $leaderAccessCode
             : new InstantConferencingAccessCode($leaderAccessCode);
    }

    /**
     * Conference access code for a conference.
     */
    public function getLeaderAccessCode()
    {
        return (!$this->leaderAccessCode) ?: $this->leaderAccessCode->getValue();
    }

    /**
     * Conference access code for a conference.
     */
    public function setParticipantAccessCode($participantAccessCode = null)
    {
        $this->participantAccessCode = ($participantAccessCode InstanceOf InstantConferencingAccessCode)
             ? $participantAccessCode
             : new InstantConferencingAccessCode($participantAccessCode);
    }

    /**
     * Conference access code for a conference.
     */
    public function getParticipantAccessCode()
    {
        return (!$this->participantAccessCode) ?: $this->participantAccessCode->getValue();
    }

    /**
     * 
     */
    public function setIsCallActive($isCallActive = null)
    {
        $this->isCallActive = (boolean) $isCallActive;
    }

    /**
     * 
     */
    public function getIsCallActive()
    {
        return (!$this->isCallActive) ?: $this->isCallActive->getValue();
    }

    /**
     * 
     */
    public function setIsExpired($isExpired = null)
    {
        $this->isExpired = (boolean) $isExpired;
    }

    /**
     * 
     */
    public function getIsExpired()
    {
        return (!$this->isExpired) ?: $this->isExpired->getValue();
    }

    /**
     * 
     */
    public function setIsFuture($isFuture = null)
    {
        $this->isFuture = (boolean) $isFuture;
    }

    /**
     * 
     */
    public function getIsFuture()
    {
        return (!$this->isFuture) ?: $this->isFuture->getValue();
    }

    /**
     * 
     */
    public function setHasPresentation($hasPresentation = null)
    {
        $this->hasPresentation = (boolean) $hasPresentation;
    }

    /**
     * 
     */
    public function getHasPresentation()
    {
        return (!$this->hasPresentation) ?: $this->hasPresentation->getValue();
    }

    /**
     * Conference presentation password.
     */
    public function setPresentationPassword($presentationPassword = null)
    {
        $this->presentationPassword = ($presentationPassword InstanceOf InstantConferencingPresentationPassword)
             ? $presentationPassword
             : new InstantConferencingPresentationPassword($presentationPassword);
    }

    /**
     * Conference presentation password.
     */
    public function getPresentationPassword()
    {
        return (!$this->presentationPassword) ?: $this->presentationPassword->getValue();
    }

    /**
     * 
     */
    public function setAllowOutdialInInvitation($allowOutdialInInvitation = null)
    {
        $this->allowOutdialInInvitation = (boolean) $allowOutdialInInvitation;
    }

    /**
     * 
     */
    public function getAllowOutdialInInvitation()
    {
        return (!$this->allowOutdialInInvitation) ?: $this->allowOutdialInInvitation->getValue();
    }

    /**
     * Directory Number in E164 Format.
     */
    public function setBridgePhoneNumber($bridgePhoneNumber = null)
    {
        $this->bridgePhoneNumber = ($bridgePhoneNumber InstanceOf DN)
             ? $bridgePhoneNumber
             : new DN($bridgePhoneNumber);
    }

    /**
     * Directory Number in E164 Format.
     */
    public function getBridgePhoneNumber()
    {
        return (!$this->bridgePhoneNumber) ?: $this->bridgePhoneNumber->getValue();
    }
}
