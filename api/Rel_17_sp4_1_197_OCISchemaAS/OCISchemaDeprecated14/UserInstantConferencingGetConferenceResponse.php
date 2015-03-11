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
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\UserId;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\DN;
use Broadworks_OCIP\core\Builder\Types\PrimitiveType;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Response to UserInstantConferencingGetConferenceRequest.
 *         Contains the information of a conference.
 */
class UserInstantConferencingGetConferenceResponse extends ComplexType implements ComplexInterface
{
    public    $name                           = 'UserInstantConferencingGetConferenceResponse';
    protected $conferenceCallId               = null;
    protected $conferenceOwnerUserId          = null;
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
     * @return UserInstantConferencingGetConferenceResponse
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * 
     */
    public function setConferenceCallId($conferenceCallId = null)
    {
        if (!$conferenceCallId) return $this;
        $this->conferenceCallId = ($conferenceCallId InstanceOf InstantConferencingCallId)
             ? $conferenceCallId
             : new InstantConferencingCallId($conferenceCallId);
        $this->conferenceCallId->setName('conferenceCallId');
        return $this;
    }

    /**
     * 
     * @return InstantConferencingCallId
     */
    public function getConferenceCallId()
    {
        return $this->conferenceCallId->getValue();
    }

    /**
     * 
     */
    public function setConferenceOwnerUserId($conferenceOwnerUserId = null)
    {
        if (!$conferenceOwnerUserId) return $this;
        $this->conferenceOwnerUserId = ($conferenceOwnerUserId InstanceOf UserId)
             ? $conferenceOwnerUserId
             : new UserId($conferenceOwnerUserId);
        $this->conferenceOwnerUserId->setName('conferenceOwnerUserId');
        return $this;
    }

    /**
     * 
     * @return UserId
     */
    public function getConferenceOwnerUserId()
    {
        return $this->conferenceOwnerUserId->getValue();
    }

    /**
     * 
     */
    public function setConferenceOwnerDisplayNames(UserDisplayNames $conferenceOwnerDisplayNames = null)
    {
        if (!$conferenceOwnerDisplayNames) return $this;
        $this->conferenceOwnerDisplayNames = $conferenceOwnerDisplayNames;
        $this->conferenceOwnerDisplayNames->setName('conferenceOwnerDisplayNames');
        return $this;
    }

    /**
     * 
     * @return UserDisplayNames
     */
    public function getConferenceOwnerDisplayNames()
    {
        return $this->conferenceOwnerDisplayNames;
    }

    /**
     * 
     */
    public function setTitle($title = null)
    {
        if (!$title) return $this;
        $this->title = ($title InstanceOf InstantConferencingTitle)
             ? $title
             : new InstantConferencingTitle($title);
        $this->title->setName('title');
        return $this;
    }

    /**
     * 
     * @return InstantConferencingTitle
     */
    public function getTitle()
    {
        return $this->title->getValue();
    }

    /**
     * 
     */
    public function setLeaderRequired($leaderRequired = null)
    {
        if (!$leaderRequired) return $this;
        $this->leaderRequired = new PrimitiveType($leaderRequired);
        $this->leaderRequired->setName('leaderRequired');
        return $this;
    }

    /**
     * 
     * @return xs:boolean
     */
    public function getLeaderRequired()
    {
        return $this->leaderRequired->getValue();
    }

    /**
     * 
     */
    public function setLeaderReleaseDropsParticipants($leaderReleaseDropsParticipants = null)
    {
        if (!$leaderReleaseDropsParticipants) return $this;
        $this->leaderReleaseDropsParticipants = new PrimitiveType($leaderReleaseDropsParticipants);
        $this->leaderReleaseDropsParticipants->setName('leaderReleaseDropsParticipants');
        return $this;
    }

    /**
     * 
     * @return xs:boolean
     */
    public function getLeaderReleaseDropsParticipants()
    {
        return $this->leaderReleaseDropsParticipants->getValue();
    }

    /**
     * 
     */
    public function setAnnounceCallers($announceCallers = null)
    {
        if (!$announceCallers) return $this;
        $this->announceCallers = new PrimitiveType($announceCallers);
        $this->announceCallers->setName('announceCallers');
        return $this;
    }

    /**
     * 
     * @return xs:boolean
     */
    public function getAnnounceCallers()
    {
        return $this->announceCallers->getValue();
    }

    /**
     * 
     */
    public function setConferenceType($conferenceType = null)
    {
        if (!$conferenceType) return $this;
        $this->conferenceType = ($conferenceType InstanceOf InstantConferencingConferenceType)
             ? $conferenceType
             : new InstantConferencingConferenceType($conferenceType);
        $this->conferenceType->setName('conferenceType');
        return $this;
    }

    /**
     * 
     * @return InstantConferencingConferenceType
     */
    public function getConferenceType()
    {
        return $this->conferenceType->getValue();
    }

    /**
     * 
     */
    public function setConferenceSchedule(InstantConferencingSchedule $conferenceSchedule = null)
    {
        if (!$conferenceSchedule) return $this;
        $this->conferenceSchedule = $conferenceSchedule;
        $this->conferenceSchedule->setName('conferenceSchedule');
        return $this;
    }

    /**
     * 
     * @return InstantConferencingSchedule
     */
    public function getConferenceSchedule()
    {
        return $this->conferenceSchedule;
    }

    /**
     * 
     */
    public function setBillingCode($billingCode = null)
    {
        if (!$billingCode) return $this;
        $this->billingCode = ($billingCode InstanceOf InstantConferencingBillingCode)
             ? $billingCode
             : new InstantConferencingBillingCode($billingCode);
        $this->billingCode->setName('billingCode');
        return $this;
    }

    /**
     * 
     * @return InstantConferencingBillingCode
     */
    public function getBillingCode()
    {
        return $this->billingCode->getValue();
    }

    /**
     * 
     */
    public function setLeaderAccessCode($leaderAccessCode = null)
    {
        if (!$leaderAccessCode) return $this;
        $this->leaderAccessCode = ($leaderAccessCode InstanceOf InstantConferencingAccessCode)
             ? $leaderAccessCode
             : new InstantConferencingAccessCode($leaderAccessCode);
        $this->leaderAccessCode->setName('leaderAccessCode');
        return $this;
    }

    /**
     * 
     * @return InstantConferencingAccessCode
     */
    public function getLeaderAccessCode()
    {
        return $this->leaderAccessCode->getValue();
    }

    /**
     * 
     */
    public function setParticipantAccessCode($participantAccessCode = null)
    {
        if (!$participantAccessCode) return $this;
        $this->participantAccessCode = ($participantAccessCode InstanceOf InstantConferencingAccessCode)
             ? $participantAccessCode
             : new InstantConferencingAccessCode($participantAccessCode);
        $this->participantAccessCode->setName('participantAccessCode');
        return $this;
    }

    /**
     * 
     * @return InstantConferencingAccessCode
     */
    public function getParticipantAccessCode()
    {
        return $this->participantAccessCode->getValue();
    }

    /**
     * 
     */
    public function setIsCallActive($isCallActive = null)
    {
        if (!$isCallActive) return $this;
        $this->isCallActive = new PrimitiveType($isCallActive);
        $this->isCallActive->setName('isCallActive');
        return $this;
    }

    /**
     * 
     * @return xs:boolean
     */
    public function getIsCallActive()
    {
        return $this->isCallActive->getValue();
    }

    /**
     * 
     */
    public function setIsExpired($isExpired = null)
    {
        if (!$isExpired) return $this;
        $this->isExpired = new PrimitiveType($isExpired);
        $this->isExpired->setName('isExpired');
        return $this;
    }

    /**
     * 
     * @return xs:boolean
     */
    public function getIsExpired()
    {
        return $this->isExpired->getValue();
    }

    /**
     * 
     */
    public function setIsFuture($isFuture = null)
    {
        if (!$isFuture) return $this;
        $this->isFuture = new PrimitiveType($isFuture);
        $this->isFuture->setName('isFuture');
        return $this;
    }

    /**
     * 
     * @return xs:boolean
     */
    public function getIsFuture()
    {
        return $this->isFuture->getValue();
    }

    /**
     * 
     */
    public function setHasPresentation($hasPresentation = null)
    {
        if (!$hasPresentation) return $this;
        $this->hasPresentation = new PrimitiveType($hasPresentation);
        $this->hasPresentation->setName('hasPresentation');
        return $this;
    }

    /**
     * 
     * @return xs:boolean
     */
    public function getHasPresentation()
    {
        return $this->hasPresentation->getValue();
    }

    /**
     * 
     */
    public function setPresentationPassword($presentationPassword = null)
    {
        if (!$presentationPassword) return $this;
        $this->presentationPassword = ($presentationPassword InstanceOf InstantConferencingPresentationPassword)
             ? $presentationPassword
             : new InstantConferencingPresentationPassword($presentationPassword);
        $this->presentationPassword->setName('presentationPassword');
        return $this;
    }

    /**
     * 
     * @return InstantConferencingPresentationPassword
     */
    public function getPresentationPassword()
    {
        return $this->presentationPassword->getValue();
    }

    /**
     * 
     */
    public function setAllowOutdialInInvitation($allowOutdialInInvitation = null)
    {
        if (!$allowOutdialInInvitation) return $this;
        $this->allowOutdialInInvitation = new PrimitiveType($allowOutdialInInvitation);
        $this->allowOutdialInInvitation->setName('allowOutdialInInvitation');
        return $this;
    }

    /**
     * 
     * @return xs:boolean
     */
    public function getAllowOutdialInInvitation()
    {
        return $this->allowOutdialInInvitation->getValue();
    }

    /**
     * 
     */
    public function setBridgePhoneNumber($bridgePhoneNumber = null)
    {
        if (!$bridgePhoneNumber) return $this;
        $this->bridgePhoneNumber = ($bridgePhoneNumber InstanceOf DN)
             ? $bridgePhoneNumber
             : new DN($bridgePhoneNumber);
        $this->bridgePhoneNumber->setName('bridgePhoneNumber');
        return $this;
    }

    /**
     * 
     * @return DN
     */
    public function getBridgePhoneNumber()
    {
        return $this->bridgePhoneNumber->getValue();
    }
}
