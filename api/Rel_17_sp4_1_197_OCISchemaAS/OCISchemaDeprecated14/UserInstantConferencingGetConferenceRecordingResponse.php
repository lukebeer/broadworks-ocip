<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated14; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceInstantConferencing\InstantConferencingSlideShowPasswordHex;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceInstantConferencing\InstantConferencingSlideShowPassword;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceInstantConferencing\InstantConferencingRecordingCallId;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceInstantConferencing\InstantConferencingDocumentId;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceInstantConferencing\InstantConferencingAccessCode;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceInstantConferencing\InstantConferencingTitle;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ServiceInstanceProfileName;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\UserDisplayNames;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\DomainName;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\UserId;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\DN;
use Broadworks_OCIP\core\Builder\Types\PrimitiveType;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Response to UserInstantConferencingGetConferenceRecordingRequest.
 *         Contains the information of a conference recording.
 */
class UserInstantConferencingGetConferenceRecordingResponse extends ComplexType implements ComplexInterface
{
    public    $name                        = 'UserInstantConferencingGetConferenceRecordingResponse';
    protected $recordingCallId             = null;
    protected $conferenceOwnerUserId       = null;
    protected $conferenceOwnerDisplayNames = null;
    protected $title                       = null;
    protected $documentId                  = null;
    protected $startDateTime               = null;
    protected $duration                    = null;
    protected $isBridgeActive              = null;
    protected $bridgeName                  = null;
    protected $bridgePhoneNumber           = null;
    protected $accessCode                  = null;
    protected $hasSlideShow                = null;
    protected $slideShowPassword           = null;
    protected $slideShowPasswordHex        = null;
    protected $conferenceServerFQDN        = null;

    /**
     * @return \Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated14\UserInstantConferencingGetConferenceRecordingResponse $response
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
        if (!$recordingCallId) return $this;
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
        return $this->recordingCallId->getValue();
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
     * @return UserId $conferenceOwnerUserId
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
    public function setDocumentId($documentId = null)
    {
        if (!$documentId) return $this;
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
        return $this->documentId->getValue();
    }

    /**
     * 
     */
    public function setStartDateTime(xs:dateTime $startDateTime = null)
    {
        if (!$startDateTime) return $this;
        $this->startDateTime->setName('startDateTime');
        return $this;
    }

    /**
     * 
     * @return xs:dateTime $startDateTime
     */
    public function getStartDateTime()
    {
        return $this->startDateTime->getValue();
    }

    /**
     * 
     */
    public function setDuration(xs:duration $duration = null)
    {
        if (!$duration) return $this;
        $this->duration->setName('duration');
        return $this;
    }

    /**
     * 
     * @return xs:duration $duration
     */
    public function getDuration()
    {
        return $this->duration->getValue();
    }

    /**
     * 
     */
    public function setIsBridgeActive($isBridgeActive = null)
    {
        if (!$isBridgeActive) return $this;
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
        return $this->isBridgeActive->getValue();
    }

    /**
     * 
     */
    public function setBridgeName($bridgeName = null)
    {
        if (!$bridgeName) return $this;
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
        return $this->bridgeName->getValue();
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
    public function setAccessCode($accessCode = null)
    {
        if (!$accessCode) return $this;
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
        return $this->accessCode->getValue();
    }

    /**
     * 
     */
    public function setHasSlideShow($hasSlideShow = null)
    {
        if (!$hasSlideShow) return $this;
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
        return $this->hasSlideShow->getValue();
    }

    /**
     * 
     */
    public function setSlideShowPassword($slideShowPassword = null)
    {
        if (!$slideShowPassword) return $this;
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
        return $this->slideShowPassword->getValue();
    }

    /**
     * 
     */
    public function setSlideShowPasswordHex($slideShowPasswordHex = null)
    {
        if (!$slideShowPasswordHex) return $this;
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
        return $this->slideShowPasswordHex->getValue();
    }

    /**
     * 
     */
    public function setConferenceServerFQDN($conferenceServerFQDN = null)
    {
        if (!$conferenceServerFQDN) return $this;
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
        return $this->conferenceServerFQDN->getValue();
    }
}
