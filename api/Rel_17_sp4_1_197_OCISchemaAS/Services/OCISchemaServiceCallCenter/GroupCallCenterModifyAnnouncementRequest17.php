<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceCallCenter; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\UserId;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\xs:boolean;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ExtendedFileResourceSelection;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\CallCenterAnnouncementURLListModify;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\CallCenterAnnouncementFileListModify;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\CallCenterTimeBetweenComfortMessagesSeconds;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\CallCenterMediaOnHoldSourceModify17;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\EstimatedWaitMessageOptionsModify;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Modify a call center's announcement settings.
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class GroupCallCenterModifyAnnouncementRequest17 extends ComplexType implements ComplexInterface
{
    public    $name = __CLASS__;

    public function __construct(
             $serviceUserId,
             $playEntranceMessage=null,
             $mandatoryEntranceMessage=null,
             $entranceAudioMessageSelection=null,
             CallCenterAnnouncementURLListModify $entranceMessageAudioUrlList=null,
             CallCenterAnnouncementFileListModify $entranceMessageAudioFileList=null,
             $entranceVideoMessageSelection=null,
             CallCenterAnnouncementURLListModify $entranceMessageVideoUrlList=null,
             CallCenterAnnouncementFileListModify $entranceMessageVideoFileList=null,
             $playPeriodicComfortMessage=null,
             $timeBetweenComfortMessagesSeconds=null,
             $periodicComfortAudioMessageSelection=null,
             CallCenterAnnouncementURLListModify $periodicComfortMessageAudioUrlList=null,
             CallCenterAnnouncementFileListModify $periodicComfortMessageAudioFileList=null,
             $periodicComfortVideoMessageSelection=null,
             CallCenterAnnouncementURLListModify $periodicComfortMessageVideoUrlList=null,
             CallCenterAnnouncementFileListModify $periodicComfortMessageVideoFileList=null,
             $enableMediaOnHoldForQueuedCalls=null,
             CallCenterMediaOnHoldSourceModify17 $mediaOnHoldSource=null,
             $mediaOnHoldUseAlternateSourceForInternalCalls=null,
             CallCenterMediaOnHoldSourceModify17 $mediaOnHoldInternalSource=null,
             $playWhisperMessage=null,
             $whisperAudioMessageSelection=null,
             CallCenterAnnouncementURLListModify $whisperMessageAudioUrlList=null,
             CallCenterAnnouncementFileListModify $whisperMessageAudioFileList=null,
             $whisperVideoMessageSelection=null,
             CallCenterAnnouncementURLListModify $whisperMessageVideoUrlList=null,
             CallCenterAnnouncementFileListModify $whisperMessageVideoFileList=null,
             $estimatedWaitMessageOptionsModify=null
    ) {
        $this->serviceUserId                                 = new UserId($serviceUserId);
        $this->playEntranceMessage                           = $playEntranceMessage;
        $this->mandatoryEntranceMessage                      = $mandatoryEntranceMessage;
        $this->entranceAudioMessageSelection                 = new ExtendedFileResourceSelection($entranceAudioMessageSelection);
        $this->entranceMessageAudioUrlList                   = $entranceMessageAudioUrlList;
        $this->entranceMessageAudioFileList                  = $entranceMessageAudioFileList;
        $this->entranceVideoMessageSelection                 = new ExtendedFileResourceSelection($entranceVideoMessageSelection);
        $this->entranceMessageVideoUrlList                   = $entranceMessageVideoUrlList;
        $this->entranceMessageVideoFileList                  = $entranceMessageVideoFileList;
        $this->playPeriodicComfortMessage                    = $playPeriodicComfortMessage;
        $this->timeBetweenComfortMessagesSeconds             = $timeBetweenComfortMessagesSeconds;
        $this->periodicComfortAudioMessageSelection          = new ExtendedFileResourceSelection($periodicComfortAudioMessageSelection);
        $this->periodicComfortMessageAudioUrlList            = $periodicComfortMessageAudioUrlList;
        $this->periodicComfortMessageAudioFileList           = $periodicComfortMessageAudioFileList;
        $this->periodicComfortVideoMessageSelection          = new ExtendedFileResourceSelection($periodicComfortVideoMessageSelection);
        $this->periodicComfortMessageVideoUrlList            = $periodicComfortMessageVideoUrlList;
        $this->periodicComfortMessageVideoFileList           = $periodicComfortMessageVideoFileList;
        $this->enableMediaOnHoldForQueuedCalls               = $enableMediaOnHoldForQueuedCalls;
        $this->mediaOnHoldSource                             = $mediaOnHoldSource;
        $this->mediaOnHoldUseAlternateSourceForInternalCalls = $mediaOnHoldUseAlternateSourceForInternalCalls;
        $this->mediaOnHoldInternalSource                     = $mediaOnHoldInternalSource;
        $this->playWhisperMessage                            = $playWhisperMessage;
        $this->whisperAudioMessageSelection                  = new ExtendedFileResourceSelection($whisperAudioMessageSelection);
        $this->whisperMessageAudioUrlList                    = $whisperMessageAudioUrlList;
        $this->whisperMessageAudioFileList                   = $whisperMessageAudioFileList;
        $this->whisperVideoMessageSelection                  = new ExtendedFileResourceSelection($whisperVideoMessageSelection);
        $this->whisperMessageVideoUrlList                    = $whisperMessageVideoUrlList;
        $this->whisperMessageVideoFileList                   = $whisperMessageVideoFileList;
        $this->estimatedWaitMessageOptionsModify             = $estimatedWaitMessageOptionsModify;
        $this->args                                          = func_get_args();
    }

    public function setServiceUserId($serviceUserId)
    {
        $serviceUserId and $this->serviceUserId = new UserId($serviceUserId);
    }

    public function getServiceUserId()
    {
        return (!$this->serviceUserId) ?: $this->serviceUserId->value();
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
        $entranceMessageAudioUrlList and $this->entranceMessageAudioUrlList = new CallCenterAnnouncementURLListModify($entranceMessageAudioUrlList);
    }

    public function getEntranceMessageAudioUrlList()
    {
        return (!$this->entranceMessageAudioUrlList) ?: $this->entranceMessageAudioUrlList->value();
    }

    public function setEntranceMessageAudioFileList($entranceMessageAudioFileList)
    {
        $entranceMessageAudioFileList and $this->entranceMessageAudioFileList = new CallCenterAnnouncementFileListModify($entranceMessageAudioFileList);
    }

    public function getEntranceMessageAudioFileList()
    {
        return (!$this->entranceMessageAudioFileList) ?: $this->entranceMessageAudioFileList->value();
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
        $entranceMessageVideoUrlList and $this->entranceMessageVideoUrlList = new CallCenterAnnouncementURLListModify($entranceMessageVideoUrlList);
    }

    public function getEntranceMessageVideoUrlList()
    {
        return (!$this->entranceMessageVideoUrlList) ?: $this->entranceMessageVideoUrlList->value();
    }

    public function setEntranceMessageVideoFileList($entranceMessageVideoFileList)
    {
        $entranceMessageVideoFileList and $this->entranceMessageVideoFileList = new CallCenterAnnouncementFileListModify($entranceMessageVideoFileList);
    }

    public function getEntranceMessageVideoFileList()
    {
        return (!$this->entranceMessageVideoFileList) ?: $this->entranceMessageVideoFileList->value();
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
        $periodicComfortMessageAudioUrlList and $this->periodicComfortMessageAudioUrlList = new CallCenterAnnouncementURLListModify($periodicComfortMessageAudioUrlList);
    }

    public function getPeriodicComfortMessageAudioUrlList()
    {
        return (!$this->periodicComfortMessageAudioUrlList) ?: $this->periodicComfortMessageAudioUrlList->value();
    }

    public function setPeriodicComfortMessageAudioFileList($periodicComfortMessageAudioFileList)
    {
        $periodicComfortMessageAudioFileList and $this->periodicComfortMessageAudioFileList = new CallCenterAnnouncementFileListModify($periodicComfortMessageAudioFileList);
    }

    public function getPeriodicComfortMessageAudioFileList()
    {
        return (!$this->periodicComfortMessageAudioFileList) ?: $this->periodicComfortMessageAudioFileList->value();
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
        $periodicComfortMessageVideoUrlList and $this->periodicComfortMessageVideoUrlList = new CallCenterAnnouncementURLListModify($periodicComfortMessageVideoUrlList);
    }

    public function getPeriodicComfortMessageVideoUrlList()
    {
        return (!$this->periodicComfortMessageVideoUrlList) ?: $this->periodicComfortMessageVideoUrlList->value();
    }

    public function setPeriodicComfortMessageVideoFileList($periodicComfortMessageVideoFileList)
    {
        $periodicComfortMessageVideoFileList and $this->periodicComfortMessageVideoFileList = new CallCenterAnnouncementFileListModify($periodicComfortMessageVideoFileList);
    }

    public function getPeriodicComfortMessageVideoFileList()
    {
        return (!$this->periodicComfortMessageVideoFileList) ?: $this->periodicComfortMessageVideoFileList->value();
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
        $mediaOnHoldSource and $this->mediaOnHoldSource = new CallCenterMediaOnHoldSourceModify17($mediaOnHoldSource);
    }

    public function getMediaOnHoldSource()
    {
        return (!$this->mediaOnHoldSource) ?: $this->mediaOnHoldSource->value();
    }

    public function setMediaOnHoldUseAlternateSourceForInternalCalls($mediaOnHoldUseAlternateSourceForInternalCalls)
    {
        $mediaOnHoldUseAlternateSourceForInternalCalls and $this->mediaOnHoldUseAlternateSourceForInternalCalls = new xs:boolean($mediaOnHoldUseAlternateSourceForInternalCalls);
    }

    public function getMediaOnHoldUseAlternateSourceForInternalCalls()
    {
        return (!$this->mediaOnHoldUseAlternateSourceForInternalCalls) ?: $this->mediaOnHoldUseAlternateSourceForInternalCalls->value();
    }

    public function setMediaOnHoldInternalSource($mediaOnHoldInternalSource)
    {
        $mediaOnHoldInternalSource and $this->mediaOnHoldInternalSource = new CallCenterMediaOnHoldSourceModify17($mediaOnHoldInternalSource);
    }

    public function getMediaOnHoldInternalSource()
    {
        return (!$this->mediaOnHoldInternalSource) ?: $this->mediaOnHoldInternalSource->value();
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
        $whisperMessageAudioUrlList and $this->whisperMessageAudioUrlList = new CallCenterAnnouncementURLListModify($whisperMessageAudioUrlList);
    }

    public function getWhisperMessageAudioUrlList()
    {
        return (!$this->whisperMessageAudioUrlList) ?: $this->whisperMessageAudioUrlList->value();
    }

    public function setWhisperMessageAudioFileList($whisperMessageAudioFileList)
    {
        $whisperMessageAudioFileList and $this->whisperMessageAudioFileList = new CallCenterAnnouncementFileListModify($whisperMessageAudioFileList);
    }

    public function getWhisperMessageAudioFileList()
    {
        return (!$this->whisperMessageAudioFileList) ?: $this->whisperMessageAudioFileList->value();
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
        $whisperMessageVideoUrlList and $this->whisperMessageVideoUrlList = new CallCenterAnnouncementURLListModify($whisperMessageVideoUrlList);
    }

    public function getWhisperMessageVideoUrlList()
    {
        return (!$this->whisperMessageVideoUrlList) ?: $this->whisperMessageVideoUrlList->value();
    }

    public function setWhisperMessageVideoFileList($whisperMessageVideoFileList)
    {
        $whisperMessageVideoFileList and $this->whisperMessageVideoFileList = new CallCenterAnnouncementFileListModify($whisperMessageVideoFileList);
    }

    public function getWhisperMessageVideoFileList()
    {
        return (!$this->whisperMessageVideoFileList) ?: $this->whisperMessageVideoFileList->value();
    }

    public function setEstimatedWaitMessageOptionsModify($estimatedWaitMessageOptionsModify)
    {
        $estimatedWaitMessageOptionsModify and $this->estimatedWaitMessageOptionsModify = new EstimatedWaitMessageOptionsModify($estimatedWaitMessageOptionsModify);
    }

    public function getEstimatedWaitMessageOptionsModify()
    {
        return (!$this->estimatedWaitMessageOptionsModify) ?: $this->estimatedWaitMessageOptionsModify->value();
    }
}
