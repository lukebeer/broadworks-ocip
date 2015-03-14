<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceInstantConferencing; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceInstantConferencing\InstantConferencingPresentationPassword;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceInstantConferencing\InstantConferencingConferenceType;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceInstantConferencing\InstantConferencingBillingCode;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceInstantConferencing\InstantConferencingAccessCode;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceInstantConferencing\InstantConferencingSchedule;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceInstantConferencing\InstantConferencingCallId;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceInstantConferencing\InstantConferencingTitle;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\UserDisplayNames;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\NationalPrefix;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\CountryCode;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\DN;
use Broadworks_OCIP\core\Builder\Types\PrimitiveType;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Response to UserInstantConferencingGetStandAloneConferenceRequest14Sp6.
 *         Contains the information of a conference.
 */
class UserInstantConferencingGetStandAloneConferenceResponse14Sp6 extends ComplexType implements ComplexInterface
{
    public    $name                           = 'UserInstantConferencingGetStandAloneConferenceResponse14Sp6';
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
    protected $bridgeCountryCode              = null;
    protected $bridgeNationalPrefix           = null;

    /**
     * @return \Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceInstantConferencing\UserInstantConferencingGetStandAloneConferenceResponse14Sp6 $response
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
     * @return InstantConferencingCallId $conferenceCallId
     */
    public function getConferenceCallId()
    {
        return $this->conferenceCallId->getValue();
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
        if (!$title) return $this;
        $this->title = ($title InstanceOf InstantConferencingTitle)
             ? $title
             : new InstantConferencingTitle($title);
        $this->title->setName('title');
        return $this;
    }

    /**
     * 
     * @return InstantConferencingTitle $title
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
     * @return boolean $leaderRequired
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
     * @return boolean $leaderReleaseDropsParticipants
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
     * @return boolean $announceCallers
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
     * @return InstantConferencingConferenceType $conferenceType
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
        if (!$billingCode) return $this;
        $this->billingCode = ($billingCode InstanceOf InstantConferencingBillingCode)
             ? $billingCode
             : new InstantConferencingBillingCode($billingCode);
        $this->billingCode->setName('billingCode');
        return $this;
    }

    /**
     * 
     * @return InstantConferencingBillingCode $billingCode
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
     * @return InstantConferencingAccessCode $leaderAccessCode
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
     * @return InstantConferencingAccessCode $participantAccessCode
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
     * @return boolean $isCallActive
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
     * @return boolean $isExpired
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
     * @return boolean $isFuture
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
     * @return boolean $hasPresentation
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
     * @return InstantConferencingPresentationPassword $presentationPassword
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
     * @return boolean $allowOutdialInInvitation
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
     * @return DN $bridgePhoneNumber
     */
    public function getBridgePhoneNumber()
    {
        return $this->bridgePhoneNumber->getValue();
    }

    /**
     * 
     */
    public function setBridgeCountryCode($bridgeCountryCode = null)
    {
        if (!$bridgeCountryCode) return $this;
        $this->bridgeCountryCode = ($bridgeCountryCode InstanceOf CountryCode)
             ? $bridgeCountryCode
             : new CountryCode($bridgeCountryCode);
        $this->bridgeCountryCode->setName('bridgeCountryCode');
        return $this;
    }

    /**
     * 
     * @return CountryCode $bridgeCountryCode
     */
    public function getBridgeCountryCode()
    {
        return $this->bridgeCountryCode->getValue();
    }

    /**
     * 
     */
    public function setBridgeNationalPrefix($bridgeNationalPrefix = null)
    {
        if (!$bridgeNationalPrefix) return $this;
        $this->bridgeNationalPrefix = ($bridgeNationalPrefix InstanceOf NationalPrefix)
             ? $bridgeNationalPrefix
             : new NationalPrefix($bridgeNationalPrefix);
        $this->bridgeNationalPrefix->setName('bridgeNationalPrefix');
        return $this;
    }

    /**
     * 
     * @return NationalPrefix $bridgeNationalPrefix
     */
    public function getBridgeNationalPrefix()
    {
        return $this->bridgeNationalPrefix->getValue();
    }
}
