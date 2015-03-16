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
use Broadworks_OCIP\core\Builder\Types\PrimitiveType;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Response to UserInstantConferencingGetStandAloneConferenceRequest.
 *         Contains the information of a conference.
 */
class UserInstantConferencingGetStandAloneConferenceResponse extends ComplexType implements ComplexInterface
{
    public    $elementName = 'UserInstantConferencingGetStandAloneConferenceResponse';
    protected $conferenceCallId;
    protected $conferenceOwnerDisplayNames;
    protected $title;
    protected $leaderRequired;
    protected $leaderReleaseDropsParticipants;
    protected $announceCallers;
    protected $conferenceType;
    protected $conferenceSchedule;
    protected $billingCode;
    protected $leaderAccessCode;
    protected $participantAccessCode;
    protected $isCallActive;
    protected $isExpired;
    protected $isFuture;
    protected $hasPresentation;
    protected $presentationPassword;
    protected $allowOutdialInInvitation;
    protected $bridgePhoneNumber;

    /**
     * @return \Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated14\UserInstantConferencingGetStandAloneConferenceResponse $response
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
        $this->conferenceCallId = ($conferenceCallId InstanceOf InstantConferencingCallId)
             ? $conferenceCallId
             : new InstantConferencingCallId($conferenceCallId);
        $this->conferenceCallId->setElementName('conferenceCallId');
        return $this;
    }

    /**
     * 
     * @return InstantConferencingCallId $conferenceCallId
     */
    public function getConferenceCallId()
    {
        return ($this->conferenceCallId)
            ? $this->conferenceCallId->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setConferenceOwnerDisplayNames(UserDisplayNames $conferenceOwnerDisplayNames = null)
    {
        $this->conferenceOwnerDisplayNames = ($conferenceOwnerDisplayNames InstanceOf UserDisplayNames)
             ? $conferenceOwnerDisplayNames
             : new UserDisplayNames($conferenceOwnerDisplayNames);
        $this->conferenceOwnerDisplayNames->setElementName('conferenceOwnerDisplayNames');
        return $this;
    }

    /**
     * 
     * @return UserDisplayNames $conferenceOwnerDisplayNames
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
        $this->title = ($title InstanceOf InstantConferencingTitle)
             ? $title
             : new InstantConferencingTitle($title);
        $this->title->setElementName('title');
        return $this;
    }

    /**
     * 
     * @return InstantConferencingTitle $title
     */
    public function getTitle()
    {
        return ($this->title)
            ? $this->title->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setLeaderRequired($leaderRequired = null)
    {
        $this->leaderRequired = new PrimitiveType($leaderRequired);
        $this->leaderRequired->setElementName('leaderRequired');
        return $this;
    }

    /**
     * 
     * @return boolean $leaderRequired
     */
    public function getLeaderRequired()
    {
        return ($this->leaderRequired)
            ? $this->leaderRequired->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setLeaderReleaseDropsParticipants($leaderReleaseDropsParticipants = null)
    {
        $this->leaderReleaseDropsParticipants = new PrimitiveType($leaderReleaseDropsParticipants);
        $this->leaderReleaseDropsParticipants->setElementName('leaderReleaseDropsParticipants');
        return $this;
    }

    /**
     * 
     * @return boolean $leaderReleaseDropsParticipants
     */
    public function getLeaderReleaseDropsParticipants()
    {
        return ($this->leaderReleaseDropsParticipants)
            ? $this->leaderReleaseDropsParticipants->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setAnnounceCallers($announceCallers = null)
    {
        $this->announceCallers = new PrimitiveType($announceCallers);
        $this->announceCallers->setElementName('announceCallers');
        return $this;
    }

    /**
     * 
     * @return boolean $announceCallers
     */
    public function getAnnounceCallers()
    {
        return ($this->announceCallers)
            ? $this->announceCallers->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setConferenceType($conferenceType = null)
    {
        $this->conferenceType = ($conferenceType InstanceOf InstantConferencingConferenceType)
             ? $conferenceType
             : new InstantConferencingConferenceType($conferenceType);
        $this->conferenceType->setElementName('conferenceType');
        return $this;
    }

    /**
     * 
     * @return InstantConferencingConferenceType $conferenceType
     */
    public function getConferenceType()
    {
        return ($this->conferenceType)
            ? $this->conferenceType->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setConferenceSchedule(InstantConferencingSchedule $conferenceSchedule = null)
    {
        $this->conferenceSchedule = ($conferenceSchedule InstanceOf InstantConferencingSchedule)
             ? $conferenceSchedule
             : new InstantConferencingSchedule($conferenceSchedule);
        $this->conferenceSchedule->setElementName('conferenceSchedule');
        return $this;
    }

    /**
     * 
     * @return InstantConferencingSchedule $conferenceSchedule
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
        $this->billingCode = ($billingCode InstanceOf InstantConferencingBillingCode)
             ? $billingCode
             : new InstantConferencingBillingCode($billingCode);
        $this->billingCode->setElementName('billingCode');
        return $this;
    }

    /**
     * 
     * @return InstantConferencingBillingCode $billingCode
     */
    public function getBillingCode()
    {
        return ($this->billingCode)
            ? $this->billingCode->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setLeaderAccessCode($leaderAccessCode = null)
    {
        $this->leaderAccessCode = ($leaderAccessCode InstanceOf InstantConferencingAccessCode)
             ? $leaderAccessCode
             : new InstantConferencingAccessCode($leaderAccessCode);
        $this->leaderAccessCode->setElementName('leaderAccessCode');
        return $this;
    }

    /**
     * 
     * @return InstantConferencingAccessCode $leaderAccessCode
     */
    public function getLeaderAccessCode()
    {
        return ($this->leaderAccessCode)
            ? $this->leaderAccessCode->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setParticipantAccessCode($participantAccessCode = null)
    {
        $this->participantAccessCode = ($participantAccessCode InstanceOf InstantConferencingAccessCode)
             ? $participantAccessCode
             : new InstantConferencingAccessCode($participantAccessCode);
        $this->participantAccessCode->setElementName('participantAccessCode');
        return $this;
    }

    /**
     * 
     * @return InstantConferencingAccessCode $participantAccessCode
     */
    public function getParticipantAccessCode()
    {
        return ($this->participantAccessCode)
            ? $this->participantAccessCode->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setIsCallActive($isCallActive = null)
    {
        $this->isCallActive = new PrimitiveType($isCallActive);
        $this->isCallActive->setElementName('isCallActive');
        return $this;
    }

    /**
     * 
     * @return boolean $isCallActive
     */
    public function getIsCallActive()
    {
        return ($this->isCallActive)
            ? $this->isCallActive->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setIsExpired($isExpired = null)
    {
        $this->isExpired = new PrimitiveType($isExpired);
        $this->isExpired->setElementName('isExpired');
        return $this;
    }

    /**
     * 
     * @return boolean $isExpired
     */
    public function getIsExpired()
    {
        return ($this->isExpired)
            ? $this->isExpired->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setIsFuture($isFuture = null)
    {
        $this->isFuture = new PrimitiveType($isFuture);
        $this->isFuture->setElementName('isFuture');
        return $this;
    }

    /**
     * 
     * @return boolean $isFuture
     */
    public function getIsFuture()
    {
        return ($this->isFuture)
            ? $this->isFuture->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setHasPresentation($hasPresentation = null)
    {
        $this->hasPresentation = new PrimitiveType($hasPresentation);
        $this->hasPresentation->setElementName('hasPresentation');
        return $this;
    }

    /**
     * 
     * @return boolean $hasPresentation
     */
    public function getHasPresentation()
    {
        return ($this->hasPresentation)
            ? $this->hasPresentation->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setPresentationPassword($presentationPassword = null)
    {
        $this->presentationPassword = ($presentationPassword InstanceOf InstantConferencingPresentationPassword)
             ? $presentationPassword
             : new InstantConferencingPresentationPassword($presentationPassword);
        $this->presentationPassword->setElementName('presentationPassword');
        return $this;
    }

    /**
     * 
     * @return InstantConferencingPresentationPassword $presentationPassword
     */
    public function getPresentationPassword()
    {
        return ($this->presentationPassword)
            ? $this->presentationPassword->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setAllowOutdialInInvitation($allowOutdialInInvitation = null)
    {
        $this->allowOutdialInInvitation = new PrimitiveType($allowOutdialInInvitation);
        $this->allowOutdialInInvitation->setElementName('allowOutdialInInvitation');
        return $this;
    }

    /**
     * 
     * @return boolean $allowOutdialInInvitation
     */
    public function getAllowOutdialInInvitation()
    {
        return ($this->allowOutdialInInvitation)
            ? $this->allowOutdialInInvitation->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setBridgePhoneNumber($bridgePhoneNumber = null)
    {
        $this->bridgePhoneNumber = ($bridgePhoneNumber InstanceOf DN)
             ? $bridgePhoneNumber
             : new DN($bridgePhoneNumber);
        $this->bridgePhoneNumber->setElementName('bridgePhoneNumber');
        return $this;
    }

    /**
     * 
     * @return DN $bridgePhoneNumber
     */
    public function getBridgePhoneNumber()
    {
        return ($this->bridgePhoneNumber)
            ? $this->bridgePhoneNumber->getElementValue()
            : null;
    }
}
