<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceIntercept; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceIntercept\InterceptInboundCall;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\LabeledMediaFileResource;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\AnnouncementSelection;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\OutgoingDNorSIPURI;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ServiceProviderId;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\OutgoingDN;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\GroupId;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\DN;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
     * Modify the group's intercept group service settings.
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class GroupInterceptGroupModifyRequest16 extends ComplexType implements ComplexInterface
{
    public    $name                          = __CLASS__;
    protected $serviceProviderId             = null;
    protected $groupId                       = null;
    protected $isActive                      = null;
    protected $announcementSelection         = null;
    protected $audioFile                     = null;
    protected $videoFile                     = null;
    protected $playNewPhoneNumber            = null;
    protected $newPhoneNumber                = null;
    protected $transferOnZeroToPhoneNumber   = null;
    protected $transferPhoneNumber           = null;
    protected $rerouteOutboundCalls          = null;
    protected $outboundReroutePhoneNumber    = null;
    protected $allowOutboundLocalCalls       = null;
    protected $inboundCallMode               = null;
    protected $alternateBlockingAnnouncement = null;
    protected $routeToVoiceMail              = null;

    public function __construct(
         $serviceProviderId,
         $groupId,
         $isActive = null,
         $announcementSelection = null,
          $audioFile = null,
          $videoFile = null,
         $playNewPhoneNumber = null,
         $newPhoneNumber = null,
         $transferOnZeroToPhoneNumber = null,
         $transferPhoneNumber = null,
         $rerouteOutboundCalls = null,
         $outboundReroutePhoneNumber = null,
         $allowOutboundLocalCalls = null,
         $inboundCallMode = null,
         $alternateBlockingAnnouncement = null,
         $routeToVoiceMail = null
    ) {
        $this->setServiceProviderId($serviceProviderId);
        $this->setGroupId($groupId);
        $this->setIsActive($isActive);
        $this->setAnnouncementSelection($announcementSelection);
        $this->setAudioFile($audioFile);
        $this->setVideoFile($videoFile);
        $this->setPlayNewPhoneNumber($playNewPhoneNumber);
        $this->setNewPhoneNumber($newPhoneNumber);
        $this->setTransferOnZeroToPhoneNumber($transferOnZeroToPhoneNumber);
        $this->setTransferPhoneNumber($transferPhoneNumber);
        $this->setRerouteOutboundCalls($rerouteOutboundCalls);
        $this->setOutboundReroutePhoneNumber($outboundReroutePhoneNumber);
        $this->setAllowOutboundLocalCalls($allowOutboundLocalCalls);
        $this->setInboundCallMode($inboundCallMode);
        $this->setAlternateBlockingAnnouncement($alternateBlockingAnnouncement);
        $this->setRouteToVoiceMail($routeToVoiceMail);
    }

    /**
     * Service Provider Id uniquely identifies a service provider.
     *         NOTE: The service provider id has a maximum length of 30 bytes, not 30 characters.
     */
    public function setServiceProviderId($serviceProviderId = null)
    {
        $this->serviceProviderId = ($serviceProviderId InstanceOf ServiceProviderId)
             ? $serviceProviderId
             : new ServiceProviderId($serviceProviderId);
    }

    /**
     * Service Provider Id uniquely identifies a service provider.
     *         NOTE: The service provider id has a maximum length of 30 bytes, not 30 characters.
     */
    public function getServiceProviderId()
    {
        return (!$this->serviceProviderId) ?: $this->serviceProviderId->getValue();
    }

    /**
     * Group Id identifies a group within a service provider or enterprise. The group id is not
     *         unique system wide. It must be combined with a service provider id to be unique across the system.
     */
    public function setGroupId($groupId = null)
    {
        $this->groupId = ($groupId InstanceOf GroupId)
             ? $groupId
             : new GroupId($groupId);
    }

    /**
     * Group Id identifies a group within a service provider or enterprise. The group id is not
     *         unique system wide. It must be combined with a service provider id to be unique across the system.
     */
    public function getGroupId()
    {
        return (!$this->groupId) ?: $this->groupId->getValue();
    }

    /**
     * 
     */
    public function setIsActive($isActive = null)
    {
        $this->isActive = (boolean) $isActive;
    }

    /**
     * 
     */
    public function getIsActive()
    {
        return (!$this->isActive) ?: $this->isActive->getValue();
    }

    /**
     * Announcement Selection.
     */
    public function setAnnouncementSelection($announcementSelection = null)
    {
        $this->announcementSelection = ($announcementSelection InstanceOf AnnouncementSelection)
             ? $announcementSelection
             : new AnnouncementSelection($announcementSelection);
    }

    /**
     * Announcement Selection.
     */
    public function getAnnouncementSelection()
    {
        return (!$this->announcementSelection) ?: $this->announcementSelection->getValue();
    }

    /**
     * Represents either an existing file for the application server to use, or
     *         the contents of a file to transfer with a description.
     */
    public function setAudioFile(LabeledMediaFileResource $audioFile = null)
    {
        $this->audioFile =  $audioFile;
    }

    /**
     * Represents either an existing file for the application server to use, or
     *         the contents of a file to transfer with a description.
     */
    public function getAudioFile()
    {
        return (!$this->audioFile) ?: $this->audioFile->getValue();
    }

    /**
     * Represents either an existing file for the application server to use, or
     *         the contents of a file to transfer with a description.
     */
    public function setVideoFile(LabeledMediaFileResource $videoFile = null)
    {
        $this->videoFile =  $videoFile;
    }

    /**
     * Represents either an existing file for the application server to use, or
     *         the contents of a file to transfer with a description.
     */
    public function getVideoFile()
    {
        return (!$this->videoFile) ?: $this->videoFile->getValue();
    }

    /**
     * 
     */
    public function setPlayNewPhoneNumber($playNewPhoneNumber = null)
    {
        $this->playNewPhoneNumber = (boolean) $playNewPhoneNumber;
    }

    /**
     * 
     */
    public function getPlayNewPhoneNumber()
    {
        return (!$this->playNewPhoneNumber) ?: $this->playNewPhoneNumber->getValue();
    }

    /**
     * Directory Number in E164 Format.
     */
    public function setNewPhoneNumber($newPhoneNumber = null)
    {
        $this->newPhoneNumber = ($newPhoneNumber InstanceOf DN)
             ? $newPhoneNumber
             : new DN($newPhoneNumber);
    }

    /**
     * Directory Number in E164 Format.
     */
    public function getNewPhoneNumber()
    {
        return (!$this->newPhoneNumber) ?: $this->newPhoneNumber->getValue();
    }

    /**
     * 
     */
    public function setTransferOnZeroToPhoneNumber($transferOnZeroToPhoneNumber = null)
    {
        $this->transferOnZeroToPhoneNumber = (boolean) $transferOnZeroToPhoneNumber;
    }

    /**
     * 
     */
    public function getTransferOnZeroToPhoneNumber()
    {
        return (!$this->transferOnZeroToPhoneNumber) ?: $this->transferOnZeroToPhoneNumber->getValue();
    }

    /**
     * An outgoing phone number or a number meant to be dialed. It is longer
     *         than a DN so that equal access digits or access code digits may be
     *         be included.  It cannot be a SIP URL.
     */
    public function setTransferPhoneNumber($transferPhoneNumber = null)
    {
        $this->transferPhoneNumber = ($transferPhoneNumber InstanceOf OutgoingDN)
             ? $transferPhoneNumber
             : new OutgoingDN($transferPhoneNumber);
    }

    /**
     * An outgoing phone number or a number meant to be dialed. It is longer
     *         than a DN so that equal access digits or access code digits may be
     *         be included.  It cannot be a SIP URL.
     */
    public function getTransferPhoneNumber()
    {
        return (!$this->transferPhoneNumber) ?: $this->transferPhoneNumber->getValue();
    }

    /**
     * 
     */
    public function setRerouteOutboundCalls($rerouteOutboundCalls = null)
    {
        $this->rerouteOutboundCalls = (boolean) $rerouteOutboundCalls;
    }

    /**
     * 
     */
    public function getRerouteOutboundCalls()
    {
        return (!$this->rerouteOutboundCalls) ?: $this->rerouteOutboundCalls->getValue();
    }

    /**
     * Phone Number or SIP URI that can be used to dial.
     *         URI Validation:
     *         - must be of the format string@string where string is at least one valid character and there is one and only one @.
     *         - don't allow sip:
     *         - allow the following characters in the user portions:
     *           alphanumeric   -   _   .   !   ~   *   '   (   )
     *         - allow the following characters in the host portion:
     *           alphanumeric   -   .
     */
    public function setOutboundReroutePhoneNumber($outboundReroutePhoneNumber = null)
    {
        $this->outboundReroutePhoneNumber = ($outboundReroutePhoneNumber InstanceOf OutgoingDNorSIPURI)
             ? $outboundReroutePhoneNumber
             : new OutgoingDNorSIPURI($outboundReroutePhoneNumber);
    }

    /**
     * Phone Number or SIP URI that can be used to dial.
     *         URI Validation:
     *         - must be of the format string@string where string is at least one valid character and there is one and only one @.
     *         - don't allow sip:
     *         - allow the following characters in the user portions:
     *           alphanumeric   -   _   .   !   ~   *   '   (   )
     *         - allow the following characters in the host portion:
     *           alphanumeric   -   .
     */
    public function getOutboundReroutePhoneNumber()
    {
        return (!$this->outboundReroutePhoneNumber) ?: $this->outboundReroutePhoneNumber->getValue();
    }

    /**
     * 
     */
    public function setAllowOutboundLocalCalls($allowOutboundLocalCalls = null)
    {
        $this->allowOutboundLocalCalls = (boolean) $allowOutboundLocalCalls;
    }

    /**
     * 
     */
    public function getAllowOutboundLocalCalls()
    {
        return (!$this->allowOutboundLocalCalls) ?: $this->allowOutboundLocalCalls->getValue();
    }

    /**
     * The type of inbound calls to Intercept or allow.
     */
    public function setInboundCallMode($inboundCallMode = null)
    {
        $this->inboundCallMode = ($inboundCallMode InstanceOf InterceptInboundCall)
             ? $inboundCallMode
             : new InterceptInboundCall($inboundCallMode);
    }

    /**
     * The type of inbound calls to Intercept or allow.
     */
    public function getInboundCallMode()
    {
        return (!$this->inboundCallMode) ?: $this->inboundCallMode->getValue();
    }

    /**
     * 
     */
    public function setAlternateBlockingAnnouncement($alternateBlockingAnnouncement = null)
    {
        $this->alternateBlockingAnnouncement = (boolean) $alternateBlockingAnnouncement;
    }

    /**
     * 
     */
    public function getAlternateBlockingAnnouncement()
    {
        return (!$this->alternateBlockingAnnouncement) ?: $this->alternateBlockingAnnouncement->getValue();
    }

    /**
     * 
     */
    public function setRouteToVoiceMail($routeToVoiceMail = null)
    {
        $this->routeToVoiceMail = (boolean) $routeToVoiceMail;
    }

    /**
     * 
     */
    public function getRouteToVoiceMail()
    {
        return (!$this->routeToVoiceMail) ?: $this->routeToVoiceMail->getValue();
    }
}
