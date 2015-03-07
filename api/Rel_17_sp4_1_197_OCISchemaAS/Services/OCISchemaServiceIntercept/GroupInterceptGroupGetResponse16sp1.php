<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceIntercept; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceIntercept\InterceptInboundCall;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\AnnouncementSelection;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\OutgoingDNorSIPURI;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\FileDescription;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\MediaFileType;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\OutgoingDN;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\DN;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Response to the GroupInterceptGroupGetRequest16sp1.
 */
class GroupInterceptGroupGetResponse16sp1 extends ComplexType implements ComplexInterface
{
    public    $name                           = __CLASS__;
    protected $isActive                       = null;
    protected $announcementSelection          = null;
    protected $audioFileDescription           = null;
    protected $audioMediaType                 = null;
    protected $videoFileDescription           = null;
    protected $videoMediaType                 = null;
    protected $playNewPhoneNumber             = null;
    protected $newPhoneNumber                 = null;
    protected $transferOnZeroToPhoneNumber    = null;
    protected $transferPhoneNumber            = null;
    protected $rerouteOutboundCalls           = null;
    protected $outboundReroutePhoneNumber     = null;
    protected $allowOutboundLocalCalls        = null;
    protected $inboundCallMode                = null;
    protected $alternateBlockingAnnouncement  = null;
    protected $routeToVoiceMail               = null;


    public function setIsActive(xs:boolean $isActive = null)
    {
    }

    public function getIsActive()
    {
        return (!$this->isActive) ?: $this->isActive->value();
    }

    public function setAnnouncementSelection($announcementSelection = null)
    {
        $this->announcementSelection = ($announcementSelection InstanceOf AnnouncementSelection)
             ? $announcementSelection
             : new AnnouncementSelection($announcementSelection);
    }

    public function getAnnouncementSelection()
    {
        return (!$this->announcementSelection) ?: $this->announcementSelection->value();
    }

    public function setAudioFileDescription($audioFileDescription = null)
    {
        $this->audioFileDescription = ($audioFileDescription InstanceOf FileDescription)
             ? $audioFileDescription
             : new FileDescription($audioFileDescription);
    }

    public function getAudioFileDescription()
    {
        return (!$this->audioFileDescription) ?: $this->audioFileDescription->value();
    }

    public function setAudioMediaType($audioMediaType = null)
    {
        $this->audioMediaType = ($audioMediaType InstanceOf MediaFileType)
             ? $audioMediaType
             : new MediaFileType($audioMediaType);
    }

    public function getAudioMediaType()
    {
        return (!$this->audioMediaType) ?: $this->audioMediaType->value();
    }

    public function setVideoFileDescription($videoFileDescription = null)
    {
        $this->videoFileDescription = ($videoFileDescription InstanceOf FileDescription)
             ? $videoFileDescription
             : new FileDescription($videoFileDescription);
    }

    public function getVideoFileDescription()
    {
        return (!$this->videoFileDescription) ?: $this->videoFileDescription->value();
    }

    public function setVideoMediaType($videoMediaType = null)
    {
        $this->videoMediaType = ($videoMediaType InstanceOf MediaFileType)
             ? $videoMediaType
             : new MediaFileType($videoMediaType);
    }

    public function getVideoMediaType()
    {
        return (!$this->videoMediaType) ?: $this->videoMediaType->value();
    }

    public function setPlayNewPhoneNumber(xs:boolean $playNewPhoneNumber = null)
    {
    }

    public function getPlayNewPhoneNumber()
    {
        return (!$this->playNewPhoneNumber) ?: $this->playNewPhoneNumber->value();
    }

    public function setNewPhoneNumber($newPhoneNumber = null)
    {
        $this->newPhoneNumber = ($newPhoneNumber InstanceOf DN)
             ? $newPhoneNumber
             : new DN($newPhoneNumber);
    }

    public function getNewPhoneNumber()
    {
        return (!$this->newPhoneNumber) ?: $this->newPhoneNumber->value();
    }

    public function setTransferOnZeroToPhoneNumber(xs:boolean $transferOnZeroToPhoneNumber = null)
    {
    }

    public function getTransferOnZeroToPhoneNumber()
    {
        return (!$this->transferOnZeroToPhoneNumber) ?: $this->transferOnZeroToPhoneNumber->value();
    }

    public function setTransferPhoneNumber($transferPhoneNumber = null)
    {
        $this->transferPhoneNumber = ($transferPhoneNumber InstanceOf OutgoingDN)
             ? $transferPhoneNumber
             : new OutgoingDN($transferPhoneNumber);
    }

    public function getTransferPhoneNumber()
    {
        return (!$this->transferPhoneNumber) ?: $this->transferPhoneNumber->value();
    }

    public function setRerouteOutboundCalls(xs:boolean $rerouteOutboundCalls = null)
    {
    }

    public function getRerouteOutboundCalls()
    {
        return (!$this->rerouteOutboundCalls) ?: $this->rerouteOutboundCalls->value();
    }

    public function setOutboundReroutePhoneNumber($outboundReroutePhoneNumber = null)
    {
        $this->outboundReroutePhoneNumber = ($outboundReroutePhoneNumber InstanceOf OutgoingDNorSIPURI)
             ? $outboundReroutePhoneNumber
             : new OutgoingDNorSIPURI($outboundReroutePhoneNumber);
    }

    public function getOutboundReroutePhoneNumber()
    {
        return (!$this->outboundReroutePhoneNumber) ?: $this->outboundReroutePhoneNumber->value();
    }

    public function setAllowOutboundLocalCalls(xs:boolean $allowOutboundLocalCalls = null)
    {
    }

    public function getAllowOutboundLocalCalls()
    {
        return (!$this->allowOutboundLocalCalls) ?: $this->allowOutboundLocalCalls->value();
    }

    public function setInboundCallMode($inboundCallMode = null)
    {
        $this->inboundCallMode = ($inboundCallMode InstanceOf InterceptInboundCall)
             ? $inboundCallMode
             : new InterceptInboundCall($inboundCallMode);
    }

    public function getInboundCallMode()
    {
        return (!$this->inboundCallMode) ?: $this->inboundCallMode->value();
    }

    public function setAlternateBlockingAnnouncement(xs:boolean $alternateBlockingAnnouncement = null)
    {
    }

    public function getAlternateBlockingAnnouncement()
    {
        return (!$this->alternateBlockingAnnouncement) ?: $this->alternateBlockingAnnouncement->value();
    }

    public function setRouteToVoiceMail(xs:boolean $routeToVoiceMail = null)
    {
    }

    public function getRouteToVoiceMail()
    {
        return (!$this->routeToVoiceMail) ?: $this->routeToVoiceMail->value();
    }
}
