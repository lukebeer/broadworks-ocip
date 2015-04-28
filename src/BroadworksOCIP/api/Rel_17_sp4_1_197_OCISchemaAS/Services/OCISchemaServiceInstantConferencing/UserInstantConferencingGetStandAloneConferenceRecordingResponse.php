<?php
/**
 * This file is part of http://github.com/LukeBeer/BroadworksOCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceInstantConferencing; 

use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceInstantConferencing\InstantConferencingSlideShowPasswordHex;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceInstantConferencing\InstantConferencingSlideShowPassword;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceInstantConferencing\InstantConferencingRecordingCallId;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceInstantConferencing\InstantConferencingAccessCode;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceInstantConferencing\InstantConferencingDocumentId;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceInstantConferencing\InstantConferencingTitle;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ServiceInstanceProfileName;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\UserDisplayNames;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\DomainName;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\DN;
use BroadworksOCIP\Builder\Types\PrimitiveType;
use BroadworksOCIP\Builder\Types\ComplexInterface;
use BroadworksOCIP\Builder\Types\ComplexType;
use BroadworksOCIP\Response\ResponseOutput;
use BroadworksOCIP\Client\Client;


/**
 * Response to UserInstantConferencingGetStandAloneConferenceRecordingRequest.
 *         Contains the information of a conference recording.
 */
class UserInstantConferencingGetStandAloneConferenceRecordingResponse extends ComplexType implements ComplexInterface
{
    public    $elementName = 'UserInstantConferencingGetStandAloneConferenceRecordingResponse';
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
     * @return \BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceInstantConferencing\UserInstantConferencingGetStandAloneConferenceRecordingResponse $response
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
        $this->recordingCallId->setElementName('recordingCallId');
        return $this;
    }

    /**
     * 
     * @return InstantConferencingRecordingCallId $recordingCallId
     */
    public function getRecordingCallId()
    {
        return ($this->recordingCallId)
            ? $this->recordingCallId->getElementValue()
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
    public function setDocumentId($documentId = null)
    {
        $this->documentId = ($documentId InstanceOf InstantConferencingDocumentId)
             ? $documentId
             : new InstantConferencingDocumentId($documentId);
        $this->documentId->setElementName('documentId');
        return $this;
    }

    /**
     * 
     * @return InstantConferencingDocumentId $documentId
     */
    public function getDocumentId()
    {
        return ($this->documentId)
            ? $this->documentId->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setStartDateTime($startDateTime = null)
    {
        $this->startDateTime = new PrimitiveType($startDateTime);
        $this->startDateTime->setElementName('startDateTime');
        return $this;
    }

    /**
     * 
     * @return string $startDateTime
     */
    public function getStartDateTime()
    {
        return ($this->startDateTime)
            ? $this->startDateTime->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setDuration($duration = null)
    {
        $this->duration = new PrimitiveType($duration);
        $this->duration->setElementName('duration');
        return $this;
    }

    /**
     * 
     * @return string $duration
     */
    public function getDuration()
    {
        return ($this->duration)
            ? $this->duration->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setIsBridgeActive($isBridgeActive = null)
    {
        $this->isBridgeActive = new PrimitiveType($isBridgeActive);
        $this->isBridgeActive->setElementName('isBridgeActive');
        return $this;
    }

    /**
     * 
     * @return boolean $isBridgeActive
     */
    public function getIsBridgeActive()
    {
        return ($this->isBridgeActive)
            ? $this->isBridgeActive->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setBridgeName($bridgeName = null)
    {
        $this->bridgeName = ($bridgeName InstanceOf ServiceInstanceProfileName)
             ? $bridgeName
             : new ServiceInstanceProfileName($bridgeName);
        $this->bridgeName->setElementName('bridgeName');
        return $this;
    }

    /**
     * 
     * @return ServiceInstanceProfileName $bridgeName
     */
    public function getBridgeName()
    {
        return ($this->bridgeName)
            ? $this->bridgeName->getElementValue()
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
    public function setAccessCode($accessCode = null)
    {
        $this->accessCode = ($accessCode InstanceOf InstantConferencingAccessCode)
             ? $accessCode
             : new InstantConferencingAccessCode($accessCode);
        $this->accessCode->setElementName('accessCode');
        return $this;
    }

    /**
     * 
     * @return InstantConferencingAccessCode $accessCode
     */
    public function getAccessCode()
    {
        return ($this->accessCode)
            ? $this->accessCode->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setHasSlideShow($hasSlideShow = null)
    {
        $this->hasSlideShow = new PrimitiveType($hasSlideShow);
        $this->hasSlideShow->setElementName('hasSlideShow');
        return $this;
    }

    /**
     * 
     * @return boolean $hasSlideShow
     */
    public function getHasSlideShow()
    {
        return ($this->hasSlideShow)
            ? $this->hasSlideShow->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setSlideShowPassword($slideShowPassword = null)
    {
        $this->slideShowPassword = ($slideShowPassword InstanceOf InstantConferencingSlideShowPassword)
             ? $slideShowPassword
             : new InstantConferencingSlideShowPassword($slideShowPassword);
        $this->slideShowPassword->setElementName('slideShowPassword');
        return $this;
    }

    /**
     * 
     * @return InstantConferencingSlideShowPassword $slideShowPassword
     */
    public function getSlideShowPassword()
    {
        return ($this->slideShowPassword)
            ? $this->slideShowPassword->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setSlideShowPasswordHex($slideShowPasswordHex = null)
    {
        $this->slideShowPasswordHex = ($slideShowPasswordHex InstanceOf InstantConferencingSlideShowPasswordHex)
             ? $slideShowPasswordHex
             : new InstantConferencingSlideShowPasswordHex($slideShowPasswordHex);
        $this->slideShowPasswordHex->setElementName('slideShowPasswordHex');
        return $this;
    }

    /**
     * 
     * @return InstantConferencingSlideShowPasswordHex $slideShowPasswordHex
     */
    public function getSlideShowPasswordHex()
    {
        return ($this->slideShowPasswordHex)
            ? $this->slideShowPasswordHex->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setConferenceServerFQDN($conferenceServerFQDN = null)
    {
        $this->conferenceServerFQDN = ($conferenceServerFQDN InstanceOf DomainName)
             ? $conferenceServerFQDN
             : new DomainName($conferenceServerFQDN);
        $this->conferenceServerFQDN->setElementName('conferenceServerFQDN');
        return $this;
    }

    /**
     * 
     * @return DomainName $conferenceServerFQDN
     */
    public function getConferenceServerFQDN()
    {
        return ($this->conferenceServerFQDN)
            ? $this->conferenceServerFQDN->getElementValue()
            : null;
    }
}
