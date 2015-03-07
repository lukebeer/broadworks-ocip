<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated16; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCallCenter\CallCenterTimeBetweenComfortMessagesSeconds;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated16\CallCenterMediaOnHoldSourceRead16;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ExtendedFileResourceSelection;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\FileDescription;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\MediaFileType;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\URL;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Response to the GroupCallCenterGetAnnouncementRequest16.
 */
class GroupCallCenterGetAnnouncementResponse16 extends ComplexType implements ComplexInterface
{
    public    $name                                           = __CLASS__;
    protected $playEntranceMessage                            = null;
    protected $mandatoryEntranceMessage                       = null;
    protected $entranceAudioMessageSelection                  = null;
    protected $entranceAudioFileUrl                           = null;
    protected $entranceMessageAudioFileDescription            = null;
    protected $entranceAudioFileMediaType                     = null;
    protected $entranceVideoMessageSelection                  = null;
    protected $entranceVideoFileUrl                           = null;
    protected $entranceMessageVideoFileDescription            = null;
    protected $entranceVideoFileMediaType                     = null;
    protected $playPeriodicComfortMessage                     = null;
    protected $timeBetweenComfortMessagesSeconds              = null;
    protected $periodicComfortAudioMessageSelection           = null;
    protected $periodicComfortAudioFileUrl                    = null;
    protected $periodicComfortMessageAudioFileDescription     = null;
    protected $periodicComfortAudioFileMediaType              = null;
    protected $periodicComfortVideoMessageSelection           = null;
    protected $periodicComfortVideoFileUrl                    = null;
    protected $periodicComfortMessageVideoFileDescription     = null;
    protected $periodicComfortVideoFileMediaType              = null;
    protected $enableMediaOnHoldForQueuedCalls                = null;
    protected $mediaOnHoldSource                              = null;
    protected $mediaOnHoldUseAlternateSourceForInternalCalls  = null;
    protected $mediaOnHoldInternalSource                      = null;


    public function setPlayEntranceMessage(xs:boolean $playEntranceMessage = null)
    {
    }

    public function getPlayEntranceMessage()
    {
        return (!$this->playEntranceMessage) ?: $this->playEntranceMessage->value();
    }

    public function setMandatoryEntranceMessage(xs:boolean $mandatoryEntranceMessage = null)
    {
    }

    public function getMandatoryEntranceMessage()
    {
        return (!$this->mandatoryEntranceMessage) ?: $this->mandatoryEntranceMessage->value();
    }

    public function setEntranceAudioMessageSelection($entranceAudioMessageSelection = null)
    {
        $this->entranceAudioMessageSelection = ($entranceAudioMessageSelection InstanceOf ExtendedFileResourceSelection)
             ? $entranceAudioMessageSelection
             : new ExtendedFileResourceSelection($entranceAudioMessageSelection);
    }

    public function getEntranceAudioMessageSelection()
    {
        return (!$this->entranceAudioMessageSelection) ?: $this->entranceAudioMessageSelection->value();
    }

    public function setEntranceAudioFileUrl($entranceAudioFileUrl = null)
    {
        $this->entranceAudioFileUrl = ($entranceAudioFileUrl InstanceOf URL)
             ? $entranceAudioFileUrl
             : new URL($entranceAudioFileUrl);
    }

    public function getEntranceAudioFileUrl()
    {
        return (!$this->entranceAudioFileUrl) ?: $this->entranceAudioFileUrl->value();
    }

    public function setEntranceMessageAudioFileDescription($entranceMessageAudioFileDescription = null)
    {
        $this->entranceMessageAudioFileDescription = ($entranceMessageAudioFileDescription InstanceOf FileDescription)
             ? $entranceMessageAudioFileDescription
             : new FileDescription($entranceMessageAudioFileDescription);
    }

    public function getEntranceMessageAudioFileDescription()
    {
        return (!$this->entranceMessageAudioFileDescription) ?: $this->entranceMessageAudioFileDescription->value();
    }

    public function setEntranceAudioFileMediaType($entranceAudioFileMediaType = null)
    {
        $this->entranceAudioFileMediaType = ($entranceAudioFileMediaType InstanceOf MediaFileType)
             ? $entranceAudioFileMediaType
             : new MediaFileType($entranceAudioFileMediaType);
    }

    public function getEntranceAudioFileMediaType()
    {
        return (!$this->entranceAudioFileMediaType) ?: $this->entranceAudioFileMediaType->value();
    }

    public function setEntranceVideoMessageSelection($entranceVideoMessageSelection = null)
    {
        $this->entranceVideoMessageSelection = ($entranceVideoMessageSelection InstanceOf ExtendedFileResourceSelection)
             ? $entranceVideoMessageSelection
             : new ExtendedFileResourceSelection($entranceVideoMessageSelection);
    }

    public function getEntranceVideoMessageSelection()
    {
        return (!$this->entranceVideoMessageSelection) ?: $this->entranceVideoMessageSelection->value();
    }

    public function setEntranceVideoFileUrl($entranceVideoFileUrl = null)
    {
        $this->entranceVideoFileUrl = ($entranceVideoFileUrl InstanceOf URL)
             ? $entranceVideoFileUrl
             : new URL($entranceVideoFileUrl);
    }

    public function getEntranceVideoFileUrl()
    {
        return (!$this->entranceVideoFileUrl) ?: $this->entranceVideoFileUrl->value();
    }

    public function setEntranceMessageVideoFileDescription($entranceMessageVideoFileDescription = null)
    {
        $this->entranceMessageVideoFileDescription = ($entranceMessageVideoFileDescription InstanceOf FileDescription)
             ? $entranceMessageVideoFileDescription
             : new FileDescription($entranceMessageVideoFileDescription);
    }

    public function getEntranceMessageVideoFileDescription()
    {
        return (!$this->entranceMessageVideoFileDescription) ?: $this->entranceMessageVideoFileDescription->value();
    }

    public function setEntranceVideoFileMediaType($entranceVideoFileMediaType = null)
    {
        $this->entranceVideoFileMediaType = ($entranceVideoFileMediaType InstanceOf MediaFileType)
             ? $entranceVideoFileMediaType
             : new MediaFileType($entranceVideoFileMediaType);
    }

    public function getEntranceVideoFileMediaType()
    {
        return (!$this->entranceVideoFileMediaType) ?: $this->entranceVideoFileMediaType->value();
    }

    public function setPlayPeriodicComfortMessage(xs:boolean $playPeriodicComfortMessage = null)
    {
    }

    public function getPlayPeriodicComfortMessage()
    {
        return (!$this->playPeriodicComfortMessage) ?: $this->playPeriodicComfortMessage->value();
    }

    public function setTimeBetweenComfortMessagesSeconds($timeBetweenComfortMessagesSeconds = null)
    {
        $this->timeBetweenComfortMessagesSeconds = ($timeBetweenComfortMessagesSeconds InstanceOf CallCenterTimeBetweenComfortMessagesSeconds)
             ? $timeBetweenComfortMessagesSeconds
             : new CallCenterTimeBetweenComfortMessagesSeconds($timeBetweenComfortMessagesSeconds);
    }

    public function getTimeBetweenComfortMessagesSeconds()
    {
        return (!$this->timeBetweenComfortMessagesSeconds) ?: $this->timeBetweenComfortMessagesSeconds->value();
    }

    public function setPeriodicComfortAudioMessageSelection($periodicComfortAudioMessageSelection = null)
    {
        $this->periodicComfortAudioMessageSelection = ($periodicComfortAudioMessageSelection InstanceOf ExtendedFileResourceSelection)
             ? $periodicComfortAudioMessageSelection
             : new ExtendedFileResourceSelection($periodicComfortAudioMessageSelection);
    }

    public function getPeriodicComfortAudioMessageSelection()
    {
        return (!$this->periodicComfortAudioMessageSelection) ?: $this->periodicComfortAudioMessageSelection->value();
    }

    public function setPeriodicComfortAudioFileUrl($periodicComfortAudioFileUrl = null)
    {
        $this->periodicComfortAudioFileUrl = ($periodicComfortAudioFileUrl InstanceOf URL)
             ? $periodicComfortAudioFileUrl
             : new URL($periodicComfortAudioFileUrl);
    }

    public function getPeriodicComfortAudioFileUrl()
    {
        return (!$this->periodicComfortAudioFileUrl) ?: $this->periodicComfortAudioFileUrl->value();
    }

    public function setPeriodicComfortMessageAudioFileDescription($periodicComfortMessageAudioFileDescription = null)
    {
        $this->periodicComfortMessageAudioFileDescription = ($periodicComfortMessageAudioFileDescription InstanceOf FileDescription)
             ? $periodicComfortMessageAudioFileDescription
             : new FileDescription($periodicComfortMessageAudioFileDescription);
    }

    public function getPeriodicComfortMessageAudioFileDescription()
    {
        return (!$this->periodicComfortMessageAudioFileDescription) ?: $this->periodicComfortMessageAudioFileDescription->value();
    }

    public function setPeriodicComfortAudioFileMediaType($periodicComfortAudioFileMediaType = null)
    {
        $this->periodicComfortAudioFileMediaType = ($periodicComfortAudioFileMediaType InstanceOf MediaFileType)
             ? $periodicComfortAudioFileMediaType
             : new MediaFileType($periodicComfortAudioFileMediaType);
    }

    public function getPeriodicComfortAudioFileMediaType()
    {
        return (!$this->periodicComfortAudioFileMediaType) ?: $this->periodicComfortAudioFileMediaType->value();
    }

    public function setPeriodicComfortVideoMessageSelection($periodicComfortVideoMessageSelection = null)
    {
        $this->periodicComfortVideoMessageSelection = ($periodicComfortVideoMessageSelection InstanceOf ExtendedFileResourceSelection)
             ? $periodicComfortVideoMessageSelection
             : new ExtendedFileResourceSelection($periodicComfortVideoMessageSelection);
    }

    public function getPeriodicComfortVideoMessageSelection()
    {
        return (!$this->periodicComfortVideoMessageSelection) ?: $this->periodicComfortVideoMessageSelection->value();
    }

    public function setPeriodicComfortVideoFileUrl($periodicComfortVideoFileUrl = null)
    {
        $this->periodicComfortVideoFileUrl = ($periodicComfortVideoFileUrl InstanceOf URL)
             ? $periodicComfortVideoFileUrl
             : new URL($periodicComfortVideoFileUrl);
    }

    public function getPeriodicComfortVideoFileUrl()
    {
        return (!$this->periodicComfortVideoFileUrl) ?: $this->periodicComfortVideoFileUrl->value();
    }

    public function setPeriodicComfortMessageVideoFileDescription($periodicComfortMessageVideoFileDescription = null)
    {
        $this->periodicComfortMessageVideoFileDescription = ($periodicComfortMessageVideoFileDescription InstanceOf FileDescription)
             ? $periodicComfortMessageVideoFileDescription
             : new FileDescription($periodicComfortMessageVideoFileDescription);
    }

    public function getPeriodicComfortMessageVideoFileDescription()
    {
        return (!$this->periodicComfortMessageVideoFileDescription) ?: $this->periodicComfortMessageVideoFileDescription->value();
    }

    public function setPeriodicComfortVideoFileMediaType($periodicComfortVideoFileMediaType = null)
    {
        $this->periodicComfortVideoFileMediaType = ($periodicComfortVideoFileMediaType InstanceOf MediaFileType)
             ? $periodicComfortVideoFileMediaType
             : new MediaFileType($periodicComfortVideoFileMediaType);
    }

    public function getPeriodicComfortVideoFileMediaType()
    {
        return (!$this->periodicComfortVideoFileMediaType) ?: $this->periodicComfortVideoFileMediaType->value();
    }

    public function setEnableMediaOnHoldForQueuedCalls(xs:boolean $enableMediaOnHoldForQueuedCalls = null)
    {
    }

    public function getEnableMediaOnHoldForQueuedCalls()
    {
        return (!$this->enableMediaOnHoldForQueuedCalls) ?: $this->enableMediaOnHoldForQueuedCalls->value();
    }

    public function setMediaOnHoldSource(CallCenterMediaOnHoldSourceRead16 $mediaOnHoldSource = null)
    {
    }

    public function getMediaOnHoldSource()
    {
        return (!$this->mediaOnHoldSource) ?: $this->mediaOnHoldSource->value();
    }

    public function setMediaOnHoldUseAlternateSourceForInternalCalls(xs:boolean $mediaOnHoldUseAlternateSourceForInternalCalls = null)
    {
    }

    public function getMediaOnHoldUseAlternateSourceForInternalCalls()
    {
        return (!$this->mediaOnHoldUseAlternateSourceForInternalCalls) ?: $this->mediaOnHoldUseAlternateSourceForInternalCalls->value();
    }

    public function setMediaOnHoldInternalSource(CallCenterMediaOnHoldSourceRead16 $mediaOnHoldInternalSource = null)
    {
    }

    public function getMediaOnHoldInternalSource()
    {
        return (!$this->mediaOnHoldInternalSource) ?: $this->mediaOnHoldInternalSource->value();
    }
}
