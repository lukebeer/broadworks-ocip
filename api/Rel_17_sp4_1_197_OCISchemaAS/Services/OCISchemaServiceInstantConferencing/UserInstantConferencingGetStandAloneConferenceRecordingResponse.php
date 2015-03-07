<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceInstantConferencing; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceInstantConferencing\InstantConferencingSlideShowPasswordHex;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceInstantConferencing\InstantConferencingSlideShowPassword;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceInstantConferencing\InstantConferencingRecordingCallId;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceInstantConferencing\InstantConferencingAccessCode;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceInstantConferencing\InstantConferencingDocumentId;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceInstantConferencing\InstantConferencingTitle;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ServiceInstanceProfileName;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\UserDisplayNames;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\DomainName;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\DN;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Response to UserInstantConferencingGetStandAloneConferenceRecordingRequest.
 *         Contains the information of a conference recording.
 */
class UserInstantConferencingGetStandAloneConferenceRecordingResponse extends ComplexType implements ComplexInterface
{
    public    $name                         = __CLASS__;
    protected $recordingCallId              = null;
    protected $conferenceOwnerDisplayNames  = null;
    protected $title                        = null;
    protected $documentId                   = null;
    protected $startDateTime                = null;
    protected $duration                     = null;
    protected $isBridgeActive               = null;
    protected $bridgeName                   = null;
    protected $bridgePhoneNumber            = null;
    protected $accessCode                   = null;
    protected $hasSlideShow                 = null;
    protected $slideShowPassword            = null;
    protected $slideShowPasswordHex         = null;
    protected $conferenceServerFQDN         = null;


    public function setRecordingCallId($recordingCallId = null)
    {
        $this->recordingCallId = ($recordingCallId InstanceOf InstantConferencingRecordingCallId)
             ? $recordingCallId
             : new InstantConferencingRecordingCallId($recordingCallId);
    }

    public function getRecordingCallId()
    {
        return (!$this->recordingCallId) ?: $this->recordingCallId->value();
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

    public function setDocumentId($documentId = null)
    {
        $this->documentId = ($documentId InstanceOf InstantConferencingDocumentId)
             ? $documentId
             : new InstantConferencingDocumentId($documentId);
    }

    public function getDocumentId()
    {
        return (!$this->documentId) ?: $this->documentId->value();
    }

    public function setStartDateTime(xs:dateTime $startDateTime = null)
    {
    }

    public function getStartDateTime()
    {
        return (!$this->startDateTime) ?: $this->startDateTime->value();
    }

    public function setDuration(xs:duration $duration = null)
    {
    }

    public function getDuration()
    {
        return (!$this->duration) ?: $this->duration->value();
    }

    public function setIsBridgeActive(xs:boolean $isBridgeActive = null)
    {
    }

    public function getIsBridgeActive()
    {
        return (!$this->isBridgeActive) ?: $this->isBridgeActive->value();
    }

    public function setBridgeName($bridgeName = null)
    {
        $this->bridgeName = ($bridgeName InstanceOf ServiceInstanceProfileName)
             ? $bridgeName
             : new ServiceInstanceProfileName($bridgeName);
    }

    public function getBridgeName()
    {
        return (!$this->bridgeName) ?: $this->bridgeName->value();
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

    public function setAccessCode($accessCode = null)
    {
        $this->accessCode = ($accessCode InstanceOf InstantConferencingAccessCode)
             ? $accessCode
             : new InstantConferencingAccessCode($accessCode);
    }

    public function getAccessCode()
    {
        return (!$this->accessCode) ?: $this->accessCode->value();
    }

    public function setHasSlideShow(xs:boolean $hasSlideShow = null)
    {
    }

    public function getHasSlideShow()
    {
        return (!$this->hasSlideShow) ?: $this->hasSlideShow->value();
    }

    public function setSlideShowPassword($slideShowPassword = null)
    {
        $this->slideShowPassword = ($slideShowPassword InstanceOf InstantConferencingSlideShowPassword)
             ? $slideShowPassword
             : new InstantConferencingSlideShowPassword($slideShowPassword);
    }

    public function getSlideShowPassword()
    {
        return (!$this->slideShowPassword) ?: $this->slideShowPassword->value();
    }

    public function setSlideShowPasswordHex($slideShowPasswordHex = null)
    {
        $this->slideShowPasswordHex = ($slideShowPasswordHex InstanceOf InstantConferencingSlideShowPasswordHex)
             ? $slideShowPasswordHex
             : new InstantConferencingSlideShowPasswordHex($slideShowPasswordHex);
    }

    public function getSlideShowPasswordHex()
    {
        return (!$this->slideShowPasswordHex) ?: $this->slideShowPasswordHex->value();
    }

    public function setConferenceServerFQDN($conferenceServerFQDN = null)
    {
        $this->conferenceServerFQDN = ($conferenceServerFQDN InstanceOf DomainName)
             ? $conferenceServerFQDN
             : new DomainName($conferenceServerFQDN);
    }

    public function getConferenceServerFQDN()
    {
        return (!$this->conferenceServerFQDN) ?: $this->conferenceServerFQDN->value();
    }
}
