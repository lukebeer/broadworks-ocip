<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceCallCenter; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\xs:boolean;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ExtendedFileResourceSelection;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\CallCenterAnnouncementURLList;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\CallCenterAnnouncementDescriptionList;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\CallCenterAnnouncementMediaFileTypeList;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\CallCenterTimeBetweenComfortMessagesSeconds;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\CallCenterMediaOnHoldSourceRead17;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\EstimatedWaitMessageOptionsRead;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Response to the GroupCallCenterGetDNISAnnouncementResponse.
 */
class GroupCallCenterGetDNISAnnouncementResponse extends ComplexType implements ComplexInterface
{
    public    $name = __CLASS__;

    public function __construct(
             $playEntranceMessage,
             $mandatoryEntranceMessage,
             $entranceAudioMessageSelection,
             CallCenterAnnouncementURLList $entranceMessageAudioUrlList=null,
             CallCenterAnnouncementDescriptionList $entranceMessageAudioFileList=null,
             CallCenterAnnouncementMediaFileTypeList $entranceMessageAudioMediaTypeList=null,
             $entranceVideoMessageSelection=null,
             CallCenterAnnouncementURLList $entranceMessageVideoUrlList=null,
             CallCenterAnnouncementDescriptionList $entranceMessageVideoFileList=null,
             CallCenterAnnouncementMediaFileTypeList $entranceMessageVideoMediaTypeList=null,
             $playPeriodicComfortMessage,
             $timeBetweenComfortMessagesSeconds,
             $periodicComfortAudioMessageSelection,
             CallCenterAnnouncementURLList $periodicComfortMessageAudioUrlList=null,
             CallCenterAnnouncementDescriptionList $periodicComfortMessageAudioFileList=null,
             CallCenterAnnouncementMediaFileTypeList $periodicComfortMessageAudioMediaTypeList=null,
             $periodicComfortVideoMessageSelection=null,
             CallCenterAnnouncementURLList $periodicComfortMessageVideoUrlList=null,
             CallCenterAnnouncementDescriptionList $periodicComfortMessageVideoFileList=null,
             CallCenterAnnouncementMediaFileTypeList $periodicComfortMessageVideoMediaTypeList=null,
             $enableMediaOnHoldForQueuedCalls,
             CallCenterMediaOnHoldSourceRead17 $mediaOnHoldSource,
             $playWhisperMessage,
             $whisperAudioMessageSelection,
             CallCenterAnnouncementURLList $whisperMessageAudioUrlList=null,
             CallCenterAnnouncementDescriptionList $whisperMessageAudioFileList=null,
             CallCenterAnnouncementMediaFileTypeList $whisperMessageAudioMediaTypeList=null,
             $whisperVideoMessageSelection=null,
             CallCenterAnnouncementURLList $whisperMessageVideoUrlList=null,
             CallCenterAnnouncementDescriptionList $whisperMessageVideoFileList=null,
             CallCenterAnnouncementMediaFileTypeList $whisperMessageVideoMediaTypeList=null,
             $estimatedWaitMessageOptionsRead
    ) {
        $this->playEntranceMessage                      = $playEntranceMessage;
        $this->mandatoryEntranceMessage                 = $mandatoryEntranceMessage;
        $this->entranceAudioMessageSelection            = new ExtendedFileResourceSelection($entranceAudioMessageSelection);
        $this->entranceMessageAudioUrlList              = $entranceMessageAudioUrlList;
        $this->entranceMessageAudioFileList             = $entranceMessageAudioFileList;
        $this->entranceMessageAudioMediaTypeList        = $entranceMessageAudioMediaTypeList;
        $this->entranceVideoMessageSelection            = new ExtendedFileResourceSelection($entranceVideoMessageSelection);
        $this->entranceMessageVideoUrlList              = $entranceMessageVideoUrlList;
        $this->entranceMessageVideoFileList             = $entranceMessageVideoFileList;
        $this->entranceMessageVideoMediaTypeList        = $entranceMessageVideoMediaTypeList;
        $this->playPeriodicComfortMessage               = $playPeriodicComfortMessage;
        $this->timeBetweenComfortMessagesSeconds        = $timeBetweenComfortMessagesSeconds;
        $this->periodicComfortAudioMessageSelection     = new ExtendedFileResourceSelection($periodicComfortAudioMessageSelection);
        $this->periodicComfortMessageAudioUrlList       = $periodicComfortMessageAudioUrlList;
        $this->periodicComfortMessageAudioFileList      = $periodicComfortMessageAudioFileList;
        $this->periodicComfortMessageAudioMediaTypeList = $periodicComfortMessageAudioMediaTypeList;
        $this->periodicComfortVideoMessageSelection     = new ExtendedFileResourceSelection($periodicComfortVideoMessageSelection);
        $this->periodicComfortMessageVideoUrlList       = $periodicComfortMessageVideoUrlList;
        $this->periodicComfortMessageVideoFileList      = $periodicComfortMessageVideoFileList;
        $this->periodicComfortMessageVideoMediaTypeList = $periodicComfortMessageVideoMediaTypeList;
        $this->enableMediaOnHoldForQueuedCalls          = $enableMediaOnHoldForQueuedCalls;
        $this->mediaOnHoldSource                        = $mediaOnHoldSource;
        $this->playWhisperMessage                       = $playWhisperMessage;
        $this->whisperAudioMessageSelection             = new ExtendedFileResourceSelection($whisperAudioMessageSelection);
        $this->whisperMessageAudioUrlList               = $whisperMessageAudioUrlList;
        $this->whisperMessageAudioFileList              = $whisperMessageAudioFileList;
        $this->whisperMessageAudioMediaTypeList         = $whisperMessageAudioMediaTypeList;
        $this->whisperVideoMessageSelection             = new ExtendedFileResourceSelection($whisperVideoMessageSelection);
        $this->whisperMessageVideoUrlList               = $whisperMessageVideoUrlList;
        $this->whisperMessageVideoFileList              = $whisperMessageVideoFileList;
        $this->whisperMessageVideoMediaTypeList         = $whisperMessageVideoMediaTypeList;
        $this->estimatedWaitMessageOptionsRead          = $estimatedWaitMessageOptionsRead;
        $this->args                                     = func_get_args();
    }

    public function setPlayEntranceMessage($playEntranceMessage)
    {
        $playEntranceMessage and $this->playEntranceMessage = new xs:boolean($playEntranceMessage);
    }

    public function getPlayEntranceMessage()
    {
        return (!$this->playEntranceMessage) ?: $this->playEntranceMessage->value();
    }

    public function setMandatoryEntranceMessage($mandatoryEntranceMessage)
    {
        $mandatoryEntranceMessage and $this->mandatoryEntranceMessage = new xs:boolean($mandatoryEntranceMessage);
    }

    public function getMandatoryEntranceMessage()
    {
        return (!$this->mandatoryEntranceMessage) ?: $this->mandatoryEntranceMessage->value();
    }

    public function setEntranceAudioMessageSelection($entranceAudioMessageSelection)
    {
        $entranceAudioMessageSelection and $this->entranceAudioMessageSelection = new ExtendedFileResourceSelection($entranceAudioMessageSelection);
    }

    public function getEntranceAudioMessageSelection()
    {
        return (!$this->entranceAudioMessageSelection) ?: $this->entranceAudioMessageSelection->value();
    }

    public function setEntranceMessageAudioUrlList($entranceMessageAudioUrlList)
    {
        $entranceMessageAudioUrlList and $this->entranceMessageAudioUrlList = new CallCenterAnnouncementURLList($entranceMessageAudioUrlList);
    }

    public function getEntranceMessageAudioUrlList()
    {
        return (!$this->entranceMessageAudioUrlList) ?: $this->entranceMessageAudioUrlList->value();
    }

    public function setEntranceMessageAudioFileList($entranceMessageAudioFileList)
    {
        $entranceMessageAudioFileList and $this->entranceMessageAudioFileList = new CallCenterAnnouncementDescriptionList($entranceMessageAudioFileList);
    }

    public function getEntranceMessageAudioFileList()
    {
        return (!$this->entranceMessageAudioFileList) ?: $this->entranceMessageAudioFileList->value();
    }

    public function setEntranceMessageAudioMediaTypeList($entranceMessageAudioMediaTypeList)
    {
        $entranceMessageAudioMediaTypeList and $this->entranceMessageAudioMediaTypeList = new CallCenterAnnouncementMediaFileTypeList($entranceMessageAudioMediaTypeList);
    }

    public function getEntranceMessageAudioMediaTypeList()
    {
        return (!$this->entranceMessageAudioMediaTypeList) ?: $this->entranceMessageAudioMediaTypeList->value();
    }

    public function setEntranceVideoMessageSelection($entranceVideoMessageSelection)
    {
        $entranceVideoMessageSelection and $this->entranceVideoMessageSelection = new ExtendedFileResourceSelection($entranceVideoMessageSelection);
    }

    public function getEntranceVideoMessageSelection()
    {
        return (!$this->entranceVideoMessageSelection) ?: $this->entranceVideoMessageSelection->value();
    }

    public function setEntranceMessageVideoUrlList($entranceMessageVideoUrlList)
    {
        $entranceMessageVideoUrlList and $this->entranceMessageVideoUrlList = new CallCenterAnnouncementURLList($entranceMessageVideoUrlList);
    }

    public function getEntranceMessageVideoUrlList()
    {
        return (!$this->entranceMessageVideoUrlList) ?: $this->entranceMessageVideoUrlList->value();
    }

    public function setEntranceMessageVideoFileList($entranceMessageVideoFileList)
    {
        $entranceMessageVideoFileList and $this->entranceMessageVideoFileList = new CallCenterAnnouncementDescriptionList($entranceMessageVideoFileList);
    }

    public function getEntranceMessageVideoFileList()
    {
        return (!$this->entranceMessageVideoFileList) ?: $this->entranceMessageVideoFileList->value();
    }

    public function setEntranceMessageVideoMediaTypeList($entranceMessageVideoMediaTypeList)
    {
        $entranceMessageVideoMediaTypeList and $this->entranceMessageVideoMediaTypeList = new CallCenterAnnouncementMediaFileTypeList($entranceMessageVideoMediaTypeList);
    }

    public function getEntranceMessageVideoMediaTypeList()
    {
        return (!$this->entranceMessageVideoMediaTypeList) ?: $this->entranceMessageVideoMediaTypeList->value();
    }

    public function setPlayPeriodicComfortMessage($playPeriodicComfortMessage)
    {
        $playPeriodicComfortMessage and $this->playPeriodicComfortMessage = new xs:boolean($playPeriodicComfortMessage);
    }

    public function getPlayPeriodicComfortMessage()
    {
        return (!$this->playPeriodicComfortMessage) ?: $this->playPeriodicComfortMessage->value();
    }

    public function setTimeBetweenComfortMessagesSeconds($timeBetweenComfortMessagesSeconds)
    {
        $timeBetweenComfortMessagesSeconds and $this->timeBetweenComfortMessagesSeconds = new CallCenterTimeBetweenComfortMessagesSeconds($timeBetweenComfortMessagesSeconds);
    }

    public function getTimeBetweenComfortMessagesSeconds()
    {
        return (!$this->timeBetweenComfortMessagesSeconds) ?: $this->timeBetweenComfortMessagesSeconds->value();
    }

    public function setPeriodicComfortAudioMessageSelection($periodicComfortAudioMessageSelection)
    {
        $periodicComfortAudioMessageSelection and $this->periodicComfortAudioMessageSelection = new ExtendedFileResourceSelection($periodicComfortAudioMessageSelection);
    }

    public function getPeriodicComfortAudioMessageSelection()
    {
        return (!$this->periodicComfortAudioMessageSelection) ?: $this->periodicComfortAudioMessageSelection->value();
    }

    public function setPeriodicComfortMessageAudioUrlList($periodicComfortMessageAudioUrlList)
    {
        $periodicComfortMessageAudioUrlList and $this->periodicComfortMessageAudioUrlList = new CallCenterAnnouncementURLList($periodicComfortMessageAudioUrlList);
    }

    public function getPeriodicComfortMessageAudioUrlList()
    {
        return (!$this->periodicComfortMessageAudioUrlList) ?: $this->periodicComfortMessageAudioUrlList->value();
    }

    public function setPeriodicComfortMessageAudioFileList($periodicComfortMessageAudioFileList)
    {
        $periodicComfortMessageAudioFileList and $this->periodicComfortMessageAudioFileList = new CallCenterAnnouncementDescriptionList($periodicComfortMessageAudioFileList);
    }

    public function getPeriodicComfortMessageAudioFileList()
    {
        return (!$this->periodicComfortMessageAudioFileList) ?: $this->periodicComfortMessageAudioFileList->value();
    }

    public function setPeriodicComfortMessageAudioMediaTypeList($periodicComfortMessageAudioMediaTypeList)
    {
        $periodicComfortMessageAudioMediaTypeList and $this->periodicComfortMessageAudioMediaTypeList = new CallCenterAnnouncementMediaFileTypeList($periodicComfortMessageAudioMediaTypeList);
    }

    public function getPeriodicComfortMessageAudioMediaTypeList()
    {
        return (!$this->periodicComfortMessageAudioMediaTypeList) ?: $this->periodicComfortMessageAudioMediaTypeList->value();
    }

    public function setPeriodicComfortVideoMessageSelection($periodicComfortVideoMessageSelection)
    {
        $periodicComfortVideoMessageSelection and $this->periodicComfortVideoMessageSelection = new ExtendedFileResourceSelection($periodicComfortVideoMessageSelection);
    }

    public function getPeriodicComfortVideoMessageSelection()
    {
        return (!$this->periodicComfortVideoMessageSelection) ?: $this->periodicComfortVideoMessageSelection->value();
    }

    public function setPeriodicComfortMessageVideoUrlList($periodicComfortMessageVideoUrlList)
    {
        $periodicComfortMessageVideoUrlList and $this->periodicComfortMessageVideoUrlList = new CallCenterAnnouncementURLList($periodicComfortMessageVideoUrlList);
    }

    public function getPeriodicComfortMessageVideoUrlList()
    {
        return (!$this->periodicComfortMessageVideoUrlList) ?: $this->periodicComfortMessageVideoUrlList->value();
    }

    public function setPeriodicComfortMessageVideoFileList($periodicComfortMessageVideoFileList)
    {
        $periodicComfortMessageVideoFileList and $this->periodicComfortMessageVideoFileList = new CallCenterAnnouncementDescriptionList($periodicComfortMessageVideoFileList);
    }

    public function getPeriodicComfortMessageVideoFileList()
    {
        return (!$this->periodicComfortMessageVideoFileList) ?: $this->periodicComfortMessageVideoFileList->value();
    }

    public function setPeriodicComfortMessageVideoMediaTypeList($periodicComfortMessageVideoMediaTypeList)
    {
        $periodicComfortMessageVideoMediaTypeList and $this->periodicComfortMessageVideoMediaTypeList = new CallCenterAnnouncementMediaFileTypeList($periodicComfortMessageVideoMediaTypeList);
    }

    public function getPeriodicComfortMessageVideoMediaTypeList()
    {
        return (!$this->periodicComfortMessageVideoMediaTypeList) ?: $this->periodicComfortMessageVideoMediaTypeList->value();
    }

    public function setEnableMediaOnHoldForQueuedCalls($enableMediaOnHoldForQueuedCalls)
    {
        $enableMediaOnHoldForQueuedCalls and $this->enableMediaOnHoldForQueuedCalls = new xs:boolean($enableMediaOnHoldForQueuedCalls);
    }

    public function getEnableMediaOnHoldForQueuedCalls()
    {
        return (!$this->enableMediaOnHoldForQueuedCalls) ?: $this->enableMediaOnHoldForQueuedCalls->value();
    }

    public function setMediaOnHoldSource($mediaOnHoldSource)
    {
        $mediaOnHoldSource and $this->mediaOnHoldSource = new CallCenterMediaOnHoldSourceRead17($mediaOnHoldSource);
    }

    public function getMediaOnHoldSource()
    {
        return (!$this->mediaOnHoldSource) ?: $this->mediaOnHoldSource->value();
    }

    public function setPlayWhisperMessage($playWhisperMessage)
    {
        $playWhisperMessage and $this->playWhisperMessage = new xs:boolean($playWhisperMessage);
    }

    public function getPlayWhisperMessage()
    {
        return (!$this->playWhisperMessage) ?: $this->playWhisperMessage->value();
    }

    public function setWhisperAudioMessageSelection($whisperAudioMessageSelection)
    {
        $whisperAudioMessageSelection and $this->whisperAudioMessageSelection = new ExtendedFileResourceSelection($whisperAudioMessageSelection);
    }

    public function getWhisperAudioMessageSelection()
    {
        return (!$this->whisperAudioMessageSelection) ?: $this->whisperAudioMessageSelection->value();
    }

    public function setWhisperMessageAudioUrlList($whisperMessageAudioUrlList)
    {
        $whisperMessageAudioUrlList and $this->whisperMessageAudioUrlList = new CallCenterAnnouncementURLList($whisperMessageAudioUrlList);
    }

    public function getWhisperMessageAudioUrlList()
    {
        return (!$this->whisperMessageAudioUrlList) ?: $this->whisperMessageAudioUrlList->value();
    }

    public function setWhisperMessageAudioFileList($whisperMessageAudioFileList)
    {
        $whisperMessageAudioFileList and $this->whisperMessageAudioFileList = new CallCenterAnnouncementDescriptionList($whisperMessageAudioFileList);
    }

    public function getWhisperMessageAudioFileList()
    {
        return (!$this->whisperMessageAudioFileList) ?: $this->whisperMessageAudioFileList->value();
    }

    public function setWhisperMessageAudioMediaTypeList($whisperMessageAudioMediaTypeList)
    {
        $whisperMessageAudioMediaTypeList and $this->whisperMessageAudioMediaTypeList = new CallCenterAnnouncementMediaFileTypeList($whisperMessageAudioMediaTypeList);
    }

    public function getWhisperMessageAudioMediaTypeList()
    {
        return (!$this->whisperMessageAudioMediaTypeList) ?: $this->whisperMessageAudioMediaTypeList->value();
    }

    public function setWhisperVideoMessageSelection($whisperVideoMessageSelection)
    {
        $whisperVideoMessageSelection and $this->whisperVideoMessageSelection = new ExtendedFileResourceSelection($whisperVideoMessageSelection);
    }

    public function getWhisperVideoMessageSelection()
    {
        return (!$this->whisperVideoMessageSelection) ?: $this->whisperVideoMessageSelection->value();
    }

    public function setWhisperMessageVideoUrlList($whisperMessageVideoUrlList)
    {
        $whisperMessageVideoUrlList and $this->whisperMessageVideoUrlList = new CallCenterAnnouncementURLList($whisperMessageVideoUrlList);
    }

    public function getWhisperMessageVideoUrlList()
    {
        return (!$this->whisperMessageVideoUrlList) ?: $this->whisperMessageVideoUrlList->value();
    }

    public function setWhisperMessageVideoFileList($whisperMessageVideoFileList)
    {
        $whisperMessageVideoFileList and $this->whisperMessageVideoFileList = new CallCenterAnnouncementDescriptionList($whisperMessageVideoFileList);
    }

    public function getWhisperMessageVideoFileList()
    {
        return (!$this->whisperMessageVideoFileList) ?: $this->whisperMessageVideoFileList->value();
    }

    public function setWhisperMessageVideoMediaTypeList($whisperMessageVideoMediaTypeList)
    {
        $whisperMessageVideoMediaTypeList and $this->whisperMessageVideoMediaTypeList = new CallCenterAnnouncementMediaFileTypeList($whisperMessageVideoMediaTypeList);
    }

    public function getWhisperMessageVideoMediaTypeList()
    {
        return (!$this->whisperMessageVideoMediaTypeList) ?: $this->whisperMessageVideoMediaTypeList->value();
    }

    public function setEstimatedWaitMessageOptionsRead($estimatedWaitMessageOptionsRead)
    {
        $estimatedWaitMessageOptionsRead and $this->estimatedWaitMessageOptionsRead = new EstimatedWaitMessageOptionsRead($estimatedWaitMessageOptionsRead);
    }

    public function getEstimatedWaitMessageOptionsRead()
    {
        return (!$this->estimatedWaitMessageOptionsRead) ?: $this->estimatedWaitMessageOptionsRead->value();
    }
}
