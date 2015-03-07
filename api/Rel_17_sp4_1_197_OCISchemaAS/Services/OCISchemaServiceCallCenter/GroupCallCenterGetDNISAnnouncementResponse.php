<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceCallCenter; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCallCenter\CallCenterTimeBetweenComfortMessagesSeconds;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCallCenter\EstimatedWaitMessageOptionsRead;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\CallCenterAnnouncementMediaFileTypeList;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\CallCenterAnnouncementDescriptionList;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\CallCenterMediaOnHoldSourceRead17;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\CallCenterAnnouncementURLList;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ExtendedFileResourceSelection;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Response to the GroupCallCenterGetDNISAnnouncementResponse.
 */
class GroupCallCenterGetDNISAnnouncementResponse extends ComplexType implements ComplexInterface
{
    public    $name                                      = __CLASS__;
    protected $playEntranceMessage                       = null;
    protected $mandatoryEntranceMessage                  = null;
    protected $entranceAudioMessageSelection             = null;
    protected $entranceMessageAudioUrlList               = null;
    protected $entranceMessageAudioFileList              = null;
    protected $entranceMessageAudioMediaTypeList         = null;
    protected $entranceVideoMessageSelection             = null;
    protected $entranceMessageVideoUrlList               = null;
    protected $entranceMessageVideoFileList              = null;
    protected $entranceMessageVideoMediaTypeList         = null;
    protected $playPeriodicComfortMessage                = null;
    protected $timeBetweenComfortMessagesSeconds         = null;
    protected $periodicComfortAudioMessageSelection      = null;
    protected $periodicComfortMessageAudioUrlList        = null;
    protected $periodicComfortMessageAudioFileList       = null;
    protected $periodicComfortMessageAudioMediaTypeList  = null;
    protected $periodicComfortVideoMessageSelection      = null;
    protected $periodicComfortMessageVideoUrlList        = null;
    protected $periodicComfortMessageVideoFileList       = null;
    protected $periodicComfortMessageVideoMediaTypeList  = null;
    protected $enableMediaOnHoldForQueuedCalls           = null;
    protected $mediaOnHoldSource                         = null;
    protected $playWhisperMessage                        = null;
    protected $whisperAudioMessageSelection              = null;
    protected $whisperMessageAudioUrlList                = null;
    protected $whisperMessageAudioFileList               = null;
    protected $whisperMessageAudioMediaTypeList          = null;
    protected $whisperVideoMessageSelection              = null;
    protected $whisperMessageVideoUrlList                = null;
    protected $whisperMessageVideoFileList               = null;
    protected $whisperMessageVideoMediaTypeList          = null;
    protected $estimatedWaitMessageOptionsRead           = null;


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

    public function setEntranceMessageAudioUrlList(CallCenterAnnouncementURLList $entranceMessageAudioUrlList = null)
    {
    }

    public function getEntranceMessageAudioUrlList()
    {
        return (!$this->entranceMessageAudioUrlList) ?: $this->entranceMessageAudioUrlList->value();
    }

    public function setEntranceMessageAudioFileList(CallCenterAnnouncementDescriptionList $entranceMessageAudioFileList = null)
    {
    }

    public function getEntranceMessageAudioFileList()
    {
        return (!$this->entranceMessageAudioFileList) ?: $this->entranceMessageAudioFileList->value();
    }

    public function setEntranceMessageAudioMediaTypeList(CallCenterAnnouncementMediaFileTypeList $entranceMessageAudioMediaTypeList = null)
    {
    }

    public function getEntranceMessageAudioMediaTypeList()
    {
        return (!$this->entranceMessageAudioMediaTypeList) ?: $this->entranceMessageAudioMediaTypeList->value();
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

    public function setEntranceMessageVideoUrlList(CallCenterAnnouncementURLList $entranceMessageVideoUrlList = null)
    {
    }

    public function getEntranceMessageVideoUrlList()
    {
        return (!$this->entranceMessageVideoUrlList) ?: $this->entranceMessageVideoUrlList->value();
    }

    public function setEntranceMessageVideoFileList(CallCenterAnnouncementDescriptionList $entranceMessageVideoFileList = null)
    {
    }

    public function getEntranceMessageVideoFileList()
    {
        return (!$this->entranceMessageVideoFileList) ?: $this->entranceMessageVideoFileList->value();
    }

    public function setEntranceMessageVideoMediaTypeList(CallCenterAnnouncementMediaFileTypeList $entranceMessageVideoMediaTypeList = null)
    {
    }

    public function getEntranceMessageVideoMediaTypeList()
    {
        return (!$this->entranceMessageVideoMediaTypeList) ?: $this->entranceMessageVideoMediaTypeList->value();
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

    public function setPeriodicComfortMessageAudioUrlList(CallCenterAnnouncementURLList $periodicComfortMessageAudioUrlList = null)
    {
    }

    public function getPeriodicComfortMessageAudioUrlList()
    {
        return (!$this->periodicComfortMessageAudioUrlList) ?: $this->periodicComfortMessageAudioUrlList->value();
    }

    public function setPeriodicComfortMessageAudioFileList(CallCenterAnnouncementDescriptionList $periodicComfortMessageAudioFileList = null)
    {
    }

    public function getPeriodicComfortMessageAudioFileList()
    {
        return (!$this->periodicComfortMessageAudioFileList) ?: $this->periodicComfortMessageAudioFileList->value();
    }

    public function setPeriodicComfortMessageAudioMediaTypeList(CallCenterAnnouncementMediaFileTypeList $periodicComfortMessageAudioMediaTypeList = null)
    {
    }

    public function getPeriodicComfortMessageAudioMediaTypeList()
    {
        return (!$this->periodicComfortMessageAudioMediaTypeList) ?: $this->periodicComfortMessageAudioMediaTypeList->value();
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

    public function setPeriodicComfortMessageVideoUrlList(CallCenterAnnouncementURLList $periodicComfortMessageVideoUrlList = null)
    {
    }

    public function getPeriodicComfortMessageVideoUrlList()
    {
        return (!$this->periodicComfortMessageVideoUrlList) ?: $this->periodicComfortMessageVideoUrlList->value();
    }

    public function setPeriodicComfortMessageVideoFileList(CallCenterAnnouncementDescriptionList $periodicComfortMessageVideoFileList = null)
    {
    }

    public function getPeriodicComfortMessageVideoFileList()
    {
        return (!$this->periodicComfortMessageVideoFileList) ?: $this->periodicComfortMessageVideoFileList->value();
    }

    public function setPeriodicComfortMessageVideoMediaTypeList(CallCenterAnnouncementMediaFileTypeList $periodicComfortMessageVideoMediaTypeList = null)
    {
    }

    public function getPeriodicComfortMessageVideoMediaTypeList()
    {
        return (!$this->periodicComfortMessageVideoMediaTypeList) ?: $this->periodicComfortMessageVideoMediaTypeList->value();
    }

    public function setEnableMediaOnHoldForQueuedCalls(xs:boolean $enableMediaOnHoldForQueuedCalls = null)
    {
    }

    public function getEnableMediaOnHoldForQueuedCalls()
    {
        return (!$this->enableMediaOnHoldForQueuedCalls) ?: $this->enableMediaOnHoldForQueuedCalls->value();
    }

    public function setMediaOnHoldSource(CallCenterMediaOnHoldSourceRead17 $mediaOnHoldSource = null)
    {
    }

    public function getMediaOnHoldSource()
    {
        return (!$this->mediaOnHoldSource) ?: $this->mediaOnHoldSource->value();
    }

    public function setPlayWhisperMessage(xs:boolean $playWhisperMessage = null)
    {
    }

    public function getPlayWhisperMessage()
    {
        return (!$this->playWhisperMessage) ?: $this->playWhisperMessage->value();
    }

    public function setWhisperAudioMessageSelection($whisperAudioMessageSelection = null)
    {
        $this->whisperAudioMessageSelection = ($whisperAudioMessageSelection InstanceOf ExtendedFileResourceSelection)
             ? $whisperAudioMessageSelection
             : new ExtendedFileResourceSelection($whisperAudioMessageSelection);
    }

    public function getWhisperAudioMessageSelection()
    {
        return (!$this->whisperAudioMessageSelection) ?: $this->whisperAudioMessageSelection->value();
    }

    public function setWhisperMessageAudioUrlList(CallCenterAnnouncementURLList $whisperMessageAudioUrlList = null)
    {
    }

    public function getWhisperMessageAudioUrlList()
    {
        return (!$this->whisperMessageAudioUrlList) ?: $this->whisperMessageAudioUrlList->value();
    }

    public function setWhisperMessageAudioFileList(CallCenterAnnouncementDescriptionList $whisperMessageAudioFileList = null)
    {
    }

    public function getWhisperMessageAudioFileList()
    {
        return (!$this->whisperMessageAudioFileList) ?: $this->whisperMessageAudioFileList->value();
    }

    public function setWhisperMessageAudioMediaTypeList(CallCenterAnnouncementMediaFileTypeList $whisperMessageAudioMediaTypeList = null)
    {
    }

    public function getWhisperMessageAudioMediaTypeList()
    {
        return (!$this->whisperMessageAudioMediaTypeList) ?: $this->whisperMessageAudioMediaTypeList->value();
    }

    public function setWhisperVideoMessageSelection($whisperVideoMessageSelection = null)
    {
        $this->whisperVideoMessageSelection = ($whisperVideoMessageSelection InstanceOf ExtendedFileResourceSelection)
             ? $whisperVideoMessageSelection
             : new ExtendedFileResourceSelection($whisperVideoMessageSelection);
    }

    public function getWhisperVideoMessageSelection()
    {
        return (!$this->whisperVideoMessageSelection) ?: $this->whisperVideoMessageSelection->value();
    }

    public function setWhisperMessageVideoUrlList(CallCenterAnnouncementURLList $whisperMessageVideoUrlList = null)
    {
    }

    public function getWhisperMessageVideoUrlList()
    {
        return (!$this->whisperMessageVideoUrlList) ?: $this->whisperMessageVideoUrlList->value();
    }

    public function setWhisperMessageVideoFileList(CallCenterAnnouncementDescriptionList $whisperMessageVideoFileList = null)
    {
    }

    public function getWhisperMessageVideoFileList()
    {
        return (!$this->whisperMessageVideoFileList) ?: $this->whisperMessageVideoFileList->value();
    }

    public function setWhisperMessageVideoMediaTypeList(CallCenterAnnouncementMediaFileTypeList $whisperMessageVideoMediaTypeList = null)
    {
    }

    public function getWhisperMessageVideoMediaTypeList()
    {
        return (!$this->whisperMessageVideoMediaTypeList) ?: $this->whisperMessageVideoMediaTypeList->value();
    }

    public function setEstimatedWaitMessageOptionsRead(EstimatedWaitMessageOptionsRead $estimatedWaitMessageOptionsRead = null)
    {
    }

    public function getEstimatedWaitMessageOptionsRead()
    {
        return (!$this->estimatedWaitMessageOptionsRead) ?: $this->estimatedWaitMessageOptionsRead->value();
    }
}
