<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceIntercept; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\UserId;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\xs:boolean;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\AnnouncementSelection;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\LabeledMediaFileResource;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\DN;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\OutgoingDN;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\OutgoingDNorSIPURI;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\InterceptInboundCall;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Modify the user's intercept user service settings.
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class UserInterceptUserModifyRequest16 extends ComplexType implements ComplexInterface
{
    public    $name = __CLASS__;

    public function __construct(
             $userId,
             $isActive=null,
             $announcementSelection=null,
             LabeledMediaFileResource $audioFile=null,
             LabeledMediaFileResource $videoFile=null,
             $playNewPhoneNumber=null,
             $newPhoneNumber=null,
             $transferOnZeroToPhoneNumber=null,
             $transferPhoneNumber=null,
             $rerouteOutboundCalls=null,
             $outboundReroutePhoneNumber=null,
             $allowOutboundLocalCalls=null,
             $inboundCallMode=null,
             $alternateBlockingAnnouncement=null,
             $routeToVoiceMail=null
    ) {
        $this->userId                        = new UserId($userId);
        $this->isActive                      = $isActive;
        $this->announcementSelection         = new AnnouncementSelection($announcementSelection);
        $this->audioFile                     = $audioFile;
        $this->videoFile                     = $videoFile;
        $this->playNewPhoneNumber            = $playNewPhoneNumber;
        $this->newPhoneNumber                = new DN($newPhoneNumber);
        $this->transferOnZeroToPhoneNumber   = $transferOnZeroToPhoneNumber;
        $this->transferPhoneNumber           = new OutgoingDN($transferPhoneNumber);
        $this->rerouteOutboundCalls          = $rerouteOutboundCalls;
        $this->outboundReroutePhoneNumber    = new OutgoingDNorSIPURI($outboundReroutePhoneNumber);
        $this->allowOutboundLocalCalls       = $allowOutboundLocalCalls;
        $this->inboundCallMode               = $inboundCallMode;
        $this->alternateBlockingAnnouncement = $alternateBlockingAnnouncement;
        $this->routeToVoiceMail              = $routeToVoiceMail;
        $this->args                          = func_get_args();
    }

    public function setUserId($userId)
    {
        $userId and $this->userId = new UserId($userId);
    }

    public function getUserId()
    {
        return (!$this->userId) ?: $this->userId->value();
    }

    public function setIsActive($isActive)
    {
        $isActive and $this->isActive = new xs:boolean($isActive);
    }

    public function getIsActive()
    {
        return (!$this->isActive) ?: $this->isActive->value();
    }

    public function setAnnouncementSelection($announcementSelection)
    {
        $announcementSelection and $this->announcementSelection = new AnnouncementSelection($announcementSelection);
    }

    public function getAnnouncementSelection()
    {
        return (!$this->announcementSelection) ?: $this->announcementSelection->value();
    }

    public function setAudioFile($audioFile)
    {
        $audioFile and $this->audioFile = new LabeledMediaFileResource($audioFile);
    }

    public function getAudioFile()
    {
        return (!$this->audioFile) ?: $this->audioFile->value();
    }

    public function setVideoFile($videoFile)
    {
        $videoFile and $this->videoFile = new LabeledMediaFileResource($videoFile);
    }

    public function getVideoFile()
    {
        return (!$this->videoFile) ?: $this->videoFile->value();
    }

    public function setPlayNewPhoneNumber($playNewPhoneNumber)
    {
        $playNewPhoneNumber and $this->playNewPhoneNumber = new xs:boolean($playNewPhoneNumber);
    }

    public function getPlayNewPhoneNumber()
    {
        return (!$this->playNewPhoneNumber) ?: $this->playNewPhoneNumber->value();
    }

    public function setNewPhoneNumber($newPhoneNumber)
    {
        $newPhoneNumber and $this->newPhoneNumber = new DN($newPhoneNumber);
    }

    public function getNewPhoneNumber()
    {
        return (!$this->newPhoneNumber) ?: $this->newPhoneNumber->value();
    }

    public function setTransferOnZeroToPhoneNumber($transferOnZeroToPhoneNumber)
    {
        $transferOnZeroToPhoneNumber and $this->transferOnZeroToPhoneNumber = new xs:boolean($transferOnZeroToPhoneNumber);
    }

    public function getTransferOnZeroToPhoneNumber()
    {
        return (!$this->transferOnZeroToPhoneNumber) ?: $this->transferOnZeroToPhoneNumber->value();
    }

    public function setTransferPhoneNumber($transferPhoneNumber)
    {
        $transferPhoneNumber and $this->transferPhoneNumber = new OutgoingDN($transferPhoneNumber);
    }

    public function getTransferPhoneNumber()
    {
        return (!$this->transferPhoneNumber) ?: $this->transferPhoneNumber->value();
    }

    public function setRerouteOutboundCalls($rerouteOutboundCalls)
    {
        $rerouteOutboundCalls and $this->rerouteOutboundCalls = new xs:boolean($rerouteOutboundCalls);
    }

    public function getRerouteOutboundCalls()
    {
        return (!$this->rerouteOutboundCalls) ?: $this->rerouteOutboundCalls->value();
    }

    public function setOutboundReroutePhoneNumber($outboundReroutePhoneNumber)
    {
        $outboundReroutePhoneNumber and $this->outboundReroutePhoneNumber = new OutgoingDNorSIPURI($outboundReroutePhoneNumber);
    }

    public function getOutboundReroutePhoneNumber()
    {
        return (!$this->outboundReroutePhoneNumber) ?: $this->outboundReroutePhoneNumber->value();
    }

    public function setAllowOutboundLocalCalls($allowOutboundLocalCalls)
    {
        $allowOutboundLocalCalls and $this->allowOutboundLocalCalls = new xs:boolean($allowOutboundLocalCalls);
    }

    public function getAllowOutboundLocalCalls()
    {
        return (!$this->allowOutboundLocalCalls) ?: $this->allowOutboundLocalCalls->value();
    }

    public function setInboundCallMode($inboundCallMode)
    {
        $inboundCallMode and $this->inboundCallMode = new InterceptInboundCall($inboundCallMode);
    }

    public function getInboundCallMode()
    {
        return (!$this->inboundCallMode) ?: $this->inboundCallMode->value();
    }

    public function setAlternateBlockingAnnouncement($alternateBlockingAnnouncement)
    {
        $alternateBlockingAnnouncement and $this->alternateBlockingAnnouncement = new xs:boolean($alternateBlockingAnnouncement);
    }

    public function getAlternateBlockingAnnouncement()
    {
        return (!$this->alternateBlockingAnnouncement) ?: $this->alternateBlockingAnnouncement->value();
    }

    public function setRouteToVoiceMail($routeToVoiceMail)
    {
        $routeToVoiceMail and $this->routeToVoiceMail = new xs:boolean($routeToVoiceMail);
    }

    public function getRouteToVoiceMail()
    {
        return (!$this->routeToVoiceMail) ?: $this->routeToVoiceMail->value();
    }
}
