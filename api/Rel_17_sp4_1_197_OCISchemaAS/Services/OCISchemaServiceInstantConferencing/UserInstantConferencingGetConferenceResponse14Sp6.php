<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceInstantConferencing; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\InstantConferencingCallId;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\UserId;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\UserDisplayNames;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\InstantConferencingTitle;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\xs:boolean;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\InstantConferencingConferenceType;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\InstantConferencingSchedule;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\InstantConferencingBillingCode;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\InstantConferencingAccessCode;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\InstantConferencingPresentationPassword;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\DN;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\CountryCode;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\NationalPrefix;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Response to UserInstantConferencingGetConferenceRequest14Sp6.
 *         Contains the information of a conference.
 */
class UserInstantConferencingGetConferenceResponse14Sp6 extends ComplexType implements ComplexInterface
{
    public    $name = __CLASS__;

    public function __construct(
             $conferenceCallId,
             $conferenceOwnerUserId,
             UserDisplayNames $conferenceOwnerDisplayNames,
             $title,
             $leaderRequired,
             $leaderReleaseDropsParticipants,
             $announceCallers,
             $conferenceType,
             $conferenceSchedule,
             $billingCode=null,
             $leaderAccessCode,
             $participantAccessCode,
             $isCallActive,
             $isExpired,
             $isFuture,
             $hasPresentation,
             $presentationPassword=null,
             $allowOutdialInInvitation,
             $bridgePhoneNumber=null,
             $bridgeCountryCode=null,
             $bridgeNationalPrefix=null
    ) {
        $this->conferenceCallId               = $conferenceCallId;
        $this->conferenceOwnerUserId          = new UserId($conferenceOwnerUserId);
        $this->conferenceOwnerDisplayNames    = $conferenceOwnerDisplayNames;
        $this->title                          = $title;
        $this->leaderRequired                 = $leaderRequired;
        $this->leaderReleaseDropsParticipants = $leaderReleaseDropsParticipants;
        $this->announceCallers                = $announceCallers;
        $this->conferenceType                 = $conferenceType;
        $this->conferenceSchedule             = $conferenceSchedule;
        $this->billingCode                    = $billingCode;
        $this->leaderAccessCode               = $leaderAccessCode;
        $this->participantAccessCode          = $participantAccessCode;
        $this->isCallActive                   = $isCallActive;
        $this->isExpired                      = $isExpired;
        $this->isFuture                       = $isFuture;
        $this->hasPresentation                = $hasPresentation;
        $this->presentationPassword           = $presentationPassword;
        $this->allowOutdialInInvitation       = $allowOutdialInInvitation;
        $this->bridgePhoneNumber              = new DN($bridgePhoneNumber);
        $this->bridgeCountryCode              = new CountryCode($bridgeCountryCode);
        $this->bridgeNationalPrefix           = new NationalPrefix($bridgeNationalPrefix);
        $this->args                           = func_get_args();
    }

    public function setConferenceCallId($conferenceCallId)
    {
        $conferenceCallId and $this->conferenceCallId = new InstantConferencingCallId($conferenceCallId);
    }

    public function getConferenceCallId()
    {
        return (!$this->conferenceCallId) ?: $this->conferenceCallId->value();
    }

    public function setConferenceOwnerUserId($conferenceOwnerUserId)
    {
        $conferenceOwnerUserId and $this->conferenceOwnerUserId = new UserId($conferenceOwnerUserId);
    }

    public function getConferenceOwnerUserId()
    {
        return (!$this->conferenceOwnerUserId) ?: $this->conferenceOwnerUserId->value();
    }

    public function setConferenceOwnerDisplayNames($conferenceOwnerDisplayNames)
    {
        $conferenceOwnerDisplayNames and $this->conferenceOwnerDisplayNames = new UserDisplayNames($conferenceOwnerDisplayNames);
    }

    public function getConferenceOwnerDisplayNames()
    {
        return (!$this->conferenceOwnerDisplayNames) ?: $this->conferenceOwnerDisplayNames->value();
    }

    public function setTitle($title)
    {
        $title and $this->title = new InstantConferencingTitle($title);
    }

    public function getTitle()
    {
        return (!$this->title) ?: $this->title->value();
    }

    public function setLeaderRequired($leaderRequired)
    {
        $leaderRequired and $this->leaderRequired = new xs:boolean($leaderRequired);
    }

    public function getLeaderRequired()
    {
        return (!$this->leaderRequired) ?: $this->leaderRequired->value();
    }

    public function setLeaderReleaseDropsParticipants($leaderReleaseDropsParticipants)
    {
        $leaderReleaseDropsParticipants and $this->leaderReleaseDropsParticipants = new xs:boolean($leaderReleaseDropsParticipants);
    }

    public function getLeaderReleaseDropsParticipants()
    {
        return (!$this->leaderReleaseDropsParticipants) ?: $this->leaderReleaseDropsParticipants->value();
    }

    public function setAnnounceCallers($announceCallers)
    {
        $announceCallers and $this->announceCallers = new xs:boolean($announceCallers);
    }

    public function getAnnounceCallers()
    {
        return (!$this->announceCallers) ?: $this->announceCallers->value();
    }

    public function setConferenceType($conferenceType)
    {
        $conferenceType and $this->conferenceType = new InstantConferencingConferenceType($conferenceType);
    }

    public function getConferenceType()
    {
        return (!$this->conferenceType) ?: $this->conferenceType->value();
    }

    public function setConferenceSchedule($conferenceSchedule)
    {
        $conferenceSchedule and $this->conferenceSchedule = new InstantConferencingSchedule($conferenceSchedule);
    }

    public function getConferenceSchedule()
    {
        return (!$this->conferenceSchedule) ?: $this->conferenceSchedule->value();
    }

    public function setBillingCode($billingCode)
    {
        $billingCode and $this->billingCode = new InstantConferencingBillingCode($billingCode);
    }

    public function getBillingCode()
    {
        return (!$this->billingCode) ?: $this->billingCode->value();
    }

    public function setLeaderAccessCode($leaderAccessCode)
    {
        $leaderAccessCode and $this->leaderAccessCode = new InstantConferencingAccessCode($leaderAccessCode);
    }

    public function getLeaderAccessCode()
    {
        return (!$this->leaderAccessCode) ?: $this->leaderAccessCode->value();
    }

    public function setParticipantAccessCode($participantAccessCode)
    {
        $participantAccessCode and $this->participantAccessCode = new InstantConferencingAccessCode($participantAccessCode);
    }

    public function getParticipantAccessCode()
    {
        return (!$this->participantAccessCode) ?: $this->participantAccessCode->value();
    }

    public function setIsCallActive($isCallActive)
    {
        $isCallActive and $this->isCallActive = new xs:boolean($isCallActive);
    }

    public function getIsCallActive()
    {
        return (!$this->isCallActive) ?: $this->isCallActive->value();
    }

    public function setIsExpired($isExpired)
    {
        $isExpired and $this->isExpired = new xs:boolean($isExpired);
    }

    public function getIsExpired()
    {
        return (!$this->isExpired) ?: $this->isExpired->value();
    }

    public function setIsFuture($isFuture)
    {
        $isFuture and $this->isFuture = new xs:boolean($isFuture);
    }

    public function getIsFuture()
    {
        return (!$this->isFuture) ?: $this->isFuture->value();
    }

    public function setHasPresentation($hasPresentation)
    {
        $hasPresentation and $this->hasPresentation = new xs:boolean($hasPresentation);
    }

    public function getHasPresentation()
    {
        return (!$this->hasPresentation) ?: $this->hasPresentation->value();
    }

    public function setPresentationPassword($presentationPassword)
    {
        $presentationPassword and $this->presentationPassword = new InstantConferencingPresentationPassword($presentationPassword);
    }

    public function getPresentationPassword()
    {
        return (!$this->presentationPassword) ?: $this->presentationPassword->value();
    }

    public function setAllowOutdialInInvitation($allowOutdialInInvitation)
    {
        $allowOutdialInInvitation and $this->allowOutdialInInvitation = new xs:boolean($allowOutdialInInvitation);
    }

    public function getAllowOutdialInInvitation()
    {
        return (!$this->allowOutdialInInvitation) ?: $this->allowOutdialInInvitation->value();
    }

    public function setBridgePhoneNumber($bridgePhoneNumber)
    {
        $bridgePhoneNumber and $this->bridgePhoneNumber = new DN($bridgePhoneNumber);
    }

    public function getBridgePhoneNumber()
    {
        return (!$this->bridgePhoneNumber) ?: $this->bridgePhoneNumber->value();
    }

    public function setBridgeCountryCode($bridgeCountryCode)
    {
        $bridgeCountryCode and $this->bridgeCountryCode = new CountryCode($bridgeCountryCode);
    }

    public function getBridgeCountryCode()
    {
        return (!$this->bridgeCountryCode) ?: $this->bridgeCountryCode->value();
    }

    public function setBridgeNationalPrefix($bridgeNationalPrefix)
    {
        $bridgeNationalPrefix and $this->bridgeNationalPrefix = new NationalPrefix($bridgeNationalPrefix);
    }

    public function getBridgeNationalPrefix()
    {
        return (!$this->bridgeNationalPrefix) ?: $this->bridgeNationalPrefix->value();
    }
}
