<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceInstantConferencing; 

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
use Broadworks_OCIP\core\Builder\Types\PrimitiveType;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Response to UserInstantConferencingGetStandAloneConferenceRecordingRequest.
 *         Contains the information of a conference recording.
 */
class UserInstantConferencingGetStandAloneConferenceRecordingResponse extends ComplexType implements ComplexInterface
{
    public    $name = 'UserInstantConferencingGetStandAloneConferenceRecordingResponse';
    protected $recordingCallId;
    protected $conferenceOwnerDisplayNames;
    protected $title;
    protected $documentId;
    protected $startDateTime;
    protected $duration;
    protected $isBridgeActive;
    protected $bridgeName;
    protected $bridgePhoneNumber;
    protected $accessCode;
    protected $hasSlideShow;
    protected $slideShowPassword;
    protected $slideShowPasswordHex;
    protected $conferenceServerFQDN;

    /**
     * @return \Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceInstantConferencing\UserInstantConferencingGetStandAloneConferenceRecordingResponse $response
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * 
     */
    public function setRecordingCallId($recordingCallId = null)
    {
        $this->recordingCallId = ($recordingCallId InstanceOf InstantConferencingRecordingCallId)
             ? $recordingCallId
             : new InstantConferencingRecordingCallId($recordingCallId);
        $this->recordingCallId->setName('recordingCallId');
        return $this;
    }

    /**
     * 
     * @return InstantConferencingRecordingCallId $recordingCallId
     */
    public function getRecordingCallId()
    {
        return ($this->recordingCallId) ? $this->recordingCallId->getValue() : null;
    }

    /**
     * 
     */
    public function setConferenceOwnerDisplayNames(UserDisplayNames $conferenceOwnerDisplayNames = null)
    {
        $this->conferenceOwnerDisplayNames = ($conferenceOwnerDisplayNames InstanceOf UserDisplayNames)
             ? $conferenceOwnerDisplayNames
             : new UserDisplayNames($conferenceOwnerDisplayNames);
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
        return ($this->title) ? $this->title->getValue() : null;
    }

    /**
     * 
     */
    public function setDocumentId($documentId = null)
    {
        $this->documentId = ($documentId InstanceOf InstantConferencingDocumentId)
             ? $documentId
             : new InstantConferencingDocumentId($documentId);
        $this->documentId->setName('documentId');
        return $this;
    }

    /**
     * 
     * @return InstantConferencingDocumentId $documentId
     */
    public function getDocumentId()
    {
        return ($this->documentId) ? $this->documentId->getValue() : null;
    }

    /**
     * 
     */
    public function setStartDateTime(xs:dateTime $startDateTime = null)
    {
        $this->startDateTime->setName('startDateTime');
        return $this;
    }

    /**
     * 
     * @return xs:dateTime $startDateTime
     */
    public function getStartDateTime()
    {
        return ($this->startDateTime) ? $this->startDateTime->getValue() : null;
    }

    /**
     * 
     */
    public function setDuration(xs:duration $duration = null)
    {
        $this->duration->setName('duration');
        return $this;
    }

    /**
     * 
     * @return xs:duration $duration
     */
    public function getDuration()
    {
        return ($this->duration) ? $this->duration->getValue() : null;
    }

    /**
     * 
     */
    public function setIsBridgeActive($isBridgeActive = null)
    {
        $this->isBridgeActive = new PrimitiveType($isBridgeActive);
        $this->isBridgeActive->setName('isBridgeActive');
        return $this;
    }

    /**
     * 
     * @return boolean $isBridgeActive
     */
    public function getIsBridgeActive()
    {
        return ($this->isBridgeActive) ? $this->isBridgeActive->getValue() : null;
    }

    /**
     * 
     */
    public function setBridgeName($bridgeName = null)
    {
        $this->bridgeName = ($bridgeName InstanceOf ServiceInstanceProfileName)
             ? $bridgeName
             : new ServiceInstanceProfileName($bridgeName);
        $this->bridgeName->setName('bridgeName');
        return $this;
    }

    /**
     * 
     * @return ServiceInstanceProfileName $bridgeName
     */
    public function getBridgeName()
    {
        return ($this->bridgeName) ? $this->bridgeName->getValue() : null;
    }

    /**
     * 
     */
    public function setBridgePhoneNumber($bridgePhoneNumber = null)
    {
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
        return ($this->bridgePhoneNumber) ? $this->bridgePhoneNumber->getValue() : null;
    }

    /**
     * 
     */
    public function setAccessCode($accessCode = null)
    {
        $this->accessCode = ($accessCode InstanceOf InstantConferencingAccessCode)
             ? $accessCode
             : new InstantConferencingAccessCode($accessCode);
        $this->accessCode->setName('accessCode');
        return $this;
    }

    /**
     * 
     * @return InstantConferencingAccessCode $accessCode
     */
    public function getAccessCode()
    {
        return ($this->accessCode) ? $this->accessCode->getValue() : null;
    }

    /**
     * 
     */
    public function setHasSlideShow($hasSlideShow = null)
    {
        $this->hasSlideShow = new PrimitiveType($hasSlideShow);
        $this->hasSlideShow->setName('hasSlideShow');
        return $this;
    }

    /**
     * 
     * @return boolean $hasSlideShow
     */
    public function getHasSlideShow()
    {
        return ($this->hasSlideShow) ? $this->hasSlideShow->getValue() : null;
    }

    /**
     * 
     */
    public function setSlideShowPassword($slideShowPassword = null)
    {
        $this->slideShowPassword = ($slideShowPassword InstanceOf InstantConferencingSlideShowPassword)
             ? $slideShowPassword
             : new InstantConferencingSlideShowPassword($slideShowPassword);
        $this->slideShowPassword->setName('slideShowPassword');
        return $this;
    }

    /**
     * 
     * @return InstantConferencingSlideShowPassword $slideShowPassword
     */
    public function getSlideShowPassword()
    {
        return ($this->slideShowPassword) ? $this->slideShowPassword->getValue() : null;
    }

    /**
     * 
     */
    public function setSlideShowPasswordHex($slideShowPasswordHex = null)
    {
        $this->slideShowPasswordHex = ($slideShowPasswordHex InstanceOf InstantConferencingSlideShowPasswordHex)
             ? $slideShowPasswordHex
             : new InstantConferencingSlideShowPasswordHex($slideShowPasswordHex);
        $this->slideShowPasswordHex->setName('slideShowPasswordHex');
        return $this;
    }

    /**
     * 
     * @return InstantConferencingSlideShowPasswordHex $slideShowPasswordHex
     */
    public function getSlideShowPasswordHex()
    {
        return ($this->slideShowPasswordHex) ? $this->slideShowPasswordHex->getValue() : null;
    }

    /**
     * 
     */
    public function setConferenceServerFQDN($conferenceServerFQDN = null)
    {
        $this->conferenceServerFQDN = ($conferenceServerFQDN InstanceOf DomainName)
             ? $conferenceServerFQDN
             : new DomainName($conferenceServerFQDN);
        $this->conferenceServerFQDN->setName('conferenceServerFQDN');
        return $this;
    }

    /**
     * 
     * @return DomainName $conferenceServerFQDN
     */
    public function getConferenceServerFQDN()
    {
        return ($this->conferenceServerFQDN) ? $this->conferenceServerFQDN->getValue() : null;
    }
}
