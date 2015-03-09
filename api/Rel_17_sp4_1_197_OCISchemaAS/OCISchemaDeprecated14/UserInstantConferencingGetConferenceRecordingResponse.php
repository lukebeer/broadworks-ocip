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
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated14\UserInstantConferencingGetConferenceRecordingResponse;
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
    public    $name                        = __CLASS__;
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
     * @return UserInstantConferencingGetConferenceRecordingResponse
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * Conference recording call Id.
     */
    public function setRecordingCallId($recordingCallId = null)
    {
        $this->recordingCallId = ($recordingCallId InstanceOf InstantConferencingRecordingCallId)
             ? $recordingCallId
             : new InstantConferencingRecordingCallId($recordingCallId);
    }

    /**
     * Conference recording call Id.
     */
    public function getRecordingCallId()
    {
        return (!$this->recordingCallId) ?: $this->recordingCallId->getValue();
    }

    /**
     * A user id consists of a user-portion optionally followed by an @ sign and a domain name.
     *         If the domain is not specified, it is assumed to be the system default domain.
     *         The domain is required when adding normal users and virtual users, i.e. Auto Attendants,
     *         Hunt Groups, Call Centers....
     *         The domain must not be specified for system-level and service-provider-level administrators.
     */
    public function setConferenceOwnerUserId($conferenceOwnerUserId = null)
    {
        $this->conferenceOwnerUserId = ($conferenceOwnerUserId InstanceOf UserId)
             ? $conferenceOwnerUserId
             : new UserId($conferenceOwnerUserId);
    }

    /**
     * A user id consists of a user-portion optionally followed by an @ sign and a domain name.
     *         If the domain is not specified, it is assumed to be the system default domain.
     *         The domain is required when adding normal users and virtual users, i.e. Auto Attendants,
     *         Hunt Groups, Call Centers....
     *         The domain must not be specified for system-level and service-provider-level administrators.
     */
    public function getConferenceOwnerUserId()
    {
        return (!$this->conferenceOwnerUserId) ?: $this->conferenceOwnerUserId->getValue();
    }

    /**
     * The parts of a user's display name that a client can display in whatever way is appropriate
     *         for the client application.
     */
    public function setConferenceOwnerDisplayNames(UserDisplayNames $conferenceOwnerDisplayNames = null)
    {
        $this->conferenceOwnerDisplayNames =  $conferenceOwnerDisplayNames;
    }

    /**
     * The parts of a user's display name that a client can display in whatever way is appropriate
     *         for the client application.
     */
    public function getConferenceOwnerDisplayNames()
    {
        return (!$this->conferenceOwnerDisplayNames) ?: $this->conferenceOwnerDisplayNames->getValue();
    }

    /**
     * Title of instant conference.
     */
    public function setTitle($title = null)
    {
        $this->title = ($title InstanceOf InstantConferencingTitle)
             ? $title
             : new InstantConferencingTitle($title);
    }

    /**
     * Title of instant conference.
     */
    public function getTitle()
    {
        return (!$this->title) ?: $this->title->getValue();
    }

    /**
     * Uniquely identifies an instant conferencing document.
     */
    public function setDocumentId($documentId = null)
    {
        $this->documentId = ($documentId InstanceOf InstantConferencingDocumentId)
             ? $documentId
             : new InstantConferencingDocumentId($documentId);
    }

    /**
     * Uniquely identifies an instant conferencing document.
     */
    public function getDocumentId()
    {
        return (!$this->documentId) ?: $this->documentId->getValue();
    }

    /**
     * 
     */
    public function setStartDateTime(xs:dateTime $startDateTime = null)
    {
        $this->startDateTime =  $startDateTime;
    }

    /**
     * 
     */
    public function getStartDateTime()
    {
        return (!$this->startDateTime) ?: $this->startDateTime->getValue();
    }

    /**
     * 
     */
    public function setDuration(xs:duration $duration = null)
    {
        $this->duration =  $duration;
    }

    /**
     * 
     */
    public function getDuration()
    {
        return (!$this->duration) ?: $this->duration->getValue();
    }

    /**
     * 
     */
    public function setIsBridgeActive($isBridgeActive = null)
    {
        $this->isBridgeActive = (boolean) $isBridgeActive;
    }

    /**
     * 
     */
    public function getIsBridgeActive()
    {
        return (!$this->isBridgeActive) ?: $this->isBridgeActive;
    }

    /**
     * Service Instance Name for a service with a user id.
     */
    public function setBridgeName($bridgeName = null)
    {
        $this->bridgeName = ($bridgeName InstanceOf ServiceInstanceProfileName)
             ? $bridgeName
             : new ServiceInstanceProfileName($bridgeName);
    }

    /**
     * Service Instance Name for a service with a user id.
     */
    public function getBridgeName()
    {
        return (!$this->bridgeName) ?: $this->bridgeName->getValue();
    }

    /**
     * Directory Number in E164 Format.
     */
    public function setBridgePhoneNumber($bridgePhoneNumber = null)
    {
        $this->bridgePhoneNumber = ($bridgePhoneNumber InstanceOf DN)
             ? $bridgePhoneNumber
             : new DN($bridgePhoneNumber);
    }

    /**
     * Directory Number in E164 Format.
     */
    public function getBridgePhoneNumber()
    {
        return (!$this->bridgePhoneNumber) ?: $this->bridgePhoneNumber->getValue();
    }

    /**
     * Conference access code for a conference.
     */
    public function setAccessCode($accessCode = null)
    {
        $this->accessCode = ($accessCode InstanceOf InstantConferencingAccessCode)
             ? $accessCode
             : new InstantConferencingAccessCode($accessCode);
    }

    /**
     * Conference access code for a conference.
     */
    public function getAccessCode()
    {
        return (!$this->accessCode) ?: $this->accessCode->getValue();
    }

    /**
     * 
     */
    public function setHasSlideShow($hasSlideShow = null)
    {
        $this->hasSlideShow = (boolean) $hasSlideShow;
    }

    /**
     * 
     */
    public function getHasSlideShow()
    {
        return (!$this->hasSlideShow) ?: $this->hasSlideShow;
    }

    /**
     * Conference slide show password.
     */
    public function setSlideShowPassword($slideShowPassword = null)
    {
        $this->slideShowPassword = ($slideShowPassword InstanceOf InstantConferencingSlideShowPassword)
             ? $slideShowPassword
             : new InstantConferencingSlideShowPassword($slideShowPassword);
    }

    /**
     * Conference slide show password.
     */
    public function getSlideShowPassword()
    {
        return (!$this->slideShowPassword) ?: $this->slideShowPassword->getValue();
    }

    /**
     * Conference slide show password in hexadecimal format.
     */
    public function setSlideShowPasswordHex($slideShowPasswordHex = null)
    {
        $this->slideShowPasswordHex = ($slideShowPasswordHex InstanceOf InstantConferencingSlideShowPasswordHex)
             ? $slideShowPasswordHex
             : new InstantConferencingSlideShowPasswordHex($slideShowPasswordHex);
    }

    /**
     * Conference slide show password in hexadecimal format.
     */
    public function getSlideShowPasswordHex()
    {
        return (!$this->slideShowPasswordHex) ?: $this->slideShowPasswordHex->getValue();
    }

    /**
     * Network domain name.
     */
    public function setConferenceServerFQDN($conferenceServerFQDN = null)
    {
        $this->conferenceServerFQDN = ($conferenceServerFQDN InstanceOf DomainName)
             ? $conferenceServerFQDN
             : new DomainName($conferenceServerFQDN);
    }

    /**
     * Network domain name.
     */
    public function getConferenceServerFQDN()
    {
        return (!$this->conferenceServerFQDN) ?: $this->conferenceServerFQDN->getValue();
    }
}
