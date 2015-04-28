<?php
/**
 * This file is part of http://github.com/LukeBeer/BroadworksOCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceInstantConferencing; 

use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceInstantConferencing\InstantConferencingPresentationPassword;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceInstantConferencing\InstantConferencingConferenceType;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceInstantConferencing\InstantConferencingBillingCode;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceInstantConferencing\InstantConferencingAccessCode;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceInstantConferencing\InstantConferencingSchedule;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceInstantConferencing\InstantConferencingCallId;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceInstantConferencing\InstantConferencingTitle;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\UserDisplayNames;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\NationalPrefix;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\CountryCode;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\UserId;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\DN;
use BroadworksOCIP\Builder\Types\PrimitiveType;
use BroadworksOCIP\Builder\Types\ComplexInterface;
use BroadworksOCIP\Builder\Types\ComplexType;
use BroadworksOCIP\Response\ResponseOutput;
use BroadworksOCIP\Client\Client;


/**
 * Response to UserInstantConferencingGetConferenceRequest14Sp6.
 *         Contains the information of a conference.
 */
class UserInstantConferencingGetConferenceResponse14Sp6 extends ComplexType implements ComplexInterface
{
    public    $elementName = 'UserInstantConferencingGetConferenceResponse14Sp6';
    protected $conferenceCallId;
    protected $conferenceOwnerUserId;
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
    protected $bridgeCountryCode;
    protected $bridgeNationalPrefix;

    /**
     * @return \BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceInstantConferencing\UserInstantConferencingGetConferenceResponse14Sp6 $response
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
    public function setConferenceOwnerUserId($conferenceOwnerUserId = null)
    {
        $this->conferenceOwnerUserId = ($conferenceOwnerUserId InstanceOf UserId)
             ? $conferenceOwnerUserId
             : new UserId($conferenceOwnerUserId);
        $this->conferenceOwnerUserId->setElementName('conferenceOwnerUserId');
        return $this;
    }

    /**
     * 
     * @return UserId $conferenceOwnerUserId
     */
    public function getConferenceOwnerUserId()
    {
        return ($this->conferenceOwnerUserId)
            ? $this->conferenceOwnerUserId->getElementValue()
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

    /**
     * 
     */
    public function setBridgeCountryCode($bridgeCountryCode = null)
    {
        $this->bridgeCountryCode = ($bridgeCountryCode InstanceOf CountryCode)
             ? $bridgeCountryCode
             : new CountryCode($bridgeCountryCode);
        $this->bridgeCountryCode->setElementName('bridgeCountryCode');
        return $this;
    }

    /**
     * 
     * @return CountryCode $bridgeCountryCode
     */
    public function getBridgeCountryCode()
    {
        return ($this->bridgeCountryCode)
            ? $this->bridgeCountryCode->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setBridgeNationalPrefix($bridgeNationalPrefix = null)
    {
        $this->bridgeNationalPrefix = ($bridgeNationalPrefix InstanceOf NationalPrefix)
             ? $bridgeNationalPrefix
             : new NationalPrefix($bridgeNationalPrefix);
        $this->bridgeNationalPrefix->setElementName('bridgeNationalPrefix');
        return $this;
    }

    /**
     * 
     * @return NationalPrefix $bridgeNationalPrefix
     */
    public function getBridgeNationalPrefix()
    {
        return ($this->bridgeNationalPrefix)
            ? $this->bridgeNationalPrefix->getElementValue()
            : null;
    }
}
