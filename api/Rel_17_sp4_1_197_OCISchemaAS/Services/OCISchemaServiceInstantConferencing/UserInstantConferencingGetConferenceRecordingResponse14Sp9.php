<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceInstantConferencing; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\InstantConferencingRecordingCallId;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\UserId;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\UserDisplayNames;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\InstantConferencingTitle;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\InstantConferencingDocumentId;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\xs:dateTime;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\xs:duration;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\xs:boolean;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ServiceInstanceProfileName;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\DN;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\InstantConferencingAccessCode;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\InstantConferencingSlideShowPassword;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\InstantConferencingSlideShowPasswordHex;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\DomainName;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Response to UserInstantConferencingGetConferenceRecordingRequest14Sp9.
 *         Contains the information of a conference recording.
 */
class UserInstantConferencingGetConferenceRecordingResponse14Sp9 extends ComplexType implements ComplexInterface
{
    public    $name = __CLASS__;

    public function __construct(
             $recordingCallId,
             $conferenceOwnerUserId,
             UserDisplayNames $conferenceOwnerDisplayNames,
             $title,
             $documentId,
             $startDateTime,
             $duration,
             $isBridgeActive,
             $bridgeName,
             $bridgePhoneNumber=null,
             $accessCode,
             $hasSlideShow,
             $slideShowPassword=null,
             $slideShowPasswordHex=null,
             $conferenceServerFQDN,
             $allowOutdialInInvitation
    ) {
        $this->recordingCallId             = $recordingCallId;
        $this->conferenceOwnerUserId       = new UserId($conferenceOwnerUserId);
        $this->conferenceOwnerDisplayNames = $conferenceOwnerDisplayNames;
        $this->title                       = $title;
        $this->documentId                  = $documentId;
        $this->startDateTime               = $startDateTime;
        $this->duration                    = $duration;
        $this->isBridgeActive              = $isBridgeActive;
        $this->bridgeName                  = new ServiceInstanceProfileName($bridgeName);
        $this->bridgePhoneNumber           = new DN($bridgePhoneNumber);
        $this->accessCode                  = $accessCode;
        $this->hasSlideShow                = $hasSlideShow;
        $this->slideShowPassword           = $slideShowPassword;
        $this->slideShowPasswordHex        = $slideShowPasswordHex;
        $this->conferenceServerFQDN        = new DomainName($conferenceServerFQDN);
        $this->allowOutdialInInvitation    = $allowOutdialInInvitation;
        $this->args                        = func_get_args();
    }

    public function setRecordingCallId($recordingCallId)
    {
        $recordingCallId and $this->recordingCallId = new InstantConferencingRecordingCallId($recordingCallId);
    }

    public function getRecordingCallId()
    {
        return (!$this->recordingCallId) ?: $this->recordingCallId->value();
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

    public function setDocumentId($documentId)
    {
        $documentId and $this->documentId = new InstantConferencingDocumentId($documentId);
    }

    public function getDocumentId()
    {
        return (!$this->documentId) ?: $this->documentId->value();
    }

    public function setStartDateTime($startDateTime)
    {
        $startDateTime and $this->startDateTime = new xs:dateTime($startDateTime);
    }

    public function getStartDateTime()
    {
        return (!$this->startDateTime) ?: $this->startDateTime->value();
    }

    public function setDuration($duration)
    {
        $duration and $this->duration = new xs:duration($duration);
    }

    public function getDuration()
    {
        return (!$this->duration) ?: $this->duration->value();
    }

    public function setIsBridgeActive($isBridgeActive)
    {
        $isBridgeActive and $this->isBridgeActive = new xs:boolean($isBridgeActive);
    }

    public function getIsBridgeActive()
    {
        return (!$this->isBridgeActive) ?: $this->isBridgeActive->value();
    }

    public function setBridgeName($bridgeName)
    {
        $bridgeName and $this->bridgeName = new ServiceInstanceProfileName($bridgeName);
    }

    public function getBridgeName()
    {
        return (!$this->bridgeName) ?: $this->bridgeName->value();
    }

    public function setBridgePhoneNumber($bridgePhoneNumber)
    {
        $bridgePhoneNumber and $this->bridgePhoneNumber = new DN($bridgePhoneNumber);
    }

    public function getBridgePhoneNumber()
    {
        return (!$this->bridgePhoneNumber) ?: $this->bridgePhoneNumber->value();
    }

    public function setAccessCode($accessCode)
    {
        $accessCode and $this->accessCode = new InstantConferencingAccessCode($accessCode);
    }

    public function getAccessCode()
    {
        return (!$this->accessCode) ?: $this->accessCode->value();
    }

    public function setHasSlideShow($hasSlideShow)
    {
        $hasSlideShow and $this->hasSlideShow = new xs:boolean($hasSlideShow);
    }

    public function getHasSlideShow()
    {
        return (!$this->hasSlideShow) ?: $this->hasSlideShow->value();
    }

    public function setSlideShowPassword($slideShowPassword)
    {
        $slideShowPassword and $this->slideShowPassword = new InstantConferencingSlideShowPassword($slideShowPassword);
    }

    public function getSlideShowPassword()
    {
        return (!$this->slideShowPassword) ?: $this->slideShowPassword->value();
    }

    public function setSlideShowPasswordHex($slideShowPasswordHex)
    {
        $slideShowPasswordHex and $this->slideShowPasswordHex = new InstantConferencingSlideShowPasswordHex($slideShowPasswordHex);
    }

    public function getSlideShowPasswordHex()
    {
        return (!$this->slideShowPasswordHex) ?: $this->slideShowPasswordHex->value();
    }

    public function setConferenceServerFQDN($conferenceServerFQDN)
    {
        $conferenceServerFQDN and $this->conferenceServerFQDN = new DomainName($conferenceServerFQDN);
    }

    public function getConferenceServerFQDN()
    {
        return (!$this->conferenceServerFQDN) ?: $this->conferenceServerFQDN->value();
    }

    public function setAllowOutdialInInvitation($allowOutdialInInvitation)
    {
        $allowOutdialInInvitation and $this->allowOutdialInInvitation = new xs:boolean($allowOutdialInInvitation);
    }

    public function getAllowOutdialInInvitation()
    {
        return (!$this->allowOutdialInInvitation) ?: $this->allowOutdialInInvitation->value();
    }
}
