<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceCallCenter; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCallCenter\CallCenterTimeBetweenComfortMessagesSeconds;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCallCenter\EstimatedWaitMessageOptionsModify;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\CallCenterAnnouncementFileListModify;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\CallCenterMediaOnHoldSourceModify17;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\CallCenterAnnouncementURLListModify;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ExtendedFileResourceSelection;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\UserId;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Modify a call center's announcement settings.
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class GroupCallCenterModifyAnnouncementRequest17 extends ComplexType implements ComplexInterface
{
    public    $name                                           = __CLASS__;
    protected $serviceUserId                                  = null;
    protected $playEntranceMessage                            = null;
    protected $mandatoryEntranceMessage                       = null;
    protected $entranceAudioMessageSelection                  = null;
    protected $entranceMessageAudioUrlList                    = null;
    protected $entranceMessageAudioFileList                   = null;
    protected $entranceVideoMessageSelection                  = null;
    protected $entranceMessageVideoUrlList                    = null;
    protected $entranceMessageVideoFileList                   = null;
    protected $playPeriodicComfortMessage                     = null;
    protected $timeBetweenComfortMessagesSeconds              = null;
    protected $periodicComfortAudioMessageSelection           = null;
    protected $periodicComfortMessageAudioUrlList             = null;
    protected $periodicComfortMessageAudioFileList            = null;
    protected $periodicComfortVideoMessageSelection           = null;
    protected $periodicComfortMessageVideoUrlList             = null;
    protected $periodicComfortMessageVideoFileList            = null;
    protected $enableMediaOnHoldForQueuedCalls                = null;
    protected $mediaOnHoldSource                              = null;
    protected $mediaOnHoldUseAlternateSourceForInternalCalls  = null;
    protected $mediaOnHoldInternalSource                      = null;
    protected $playWhisperMessage                             = null;
    protected $whisperAudioMessageSelection                   = null;
    protected $whisperMessageAudioUrlList                     = null;
    protected $whisperMessageAudioFileList                    = null;
    protected $whisperVideoMessageSelection                   = null;
    protected $whisperMessageVideoUrlList                     = null;
    protected $whisperMessageVideoFileList                    = null;
    protected $estimatedWaitMessageOptionsModify              = null;

    public function __construct(
         $serviceUserId,
         $playEntranceMessage = null,
         $mandatoryEntranceMessage = null,
         $entranceAudioMessageSelection = null,
         CallCenterAnnouncementURLListModify $entranceMessageAudioUrlList = null,
         CallCenterAnnouncementFileListModify $entranceMessageAudioFileList = null,
         $entranceVideoMessageSelection = null,
         CallCenterAnnouncementURLListModify $entranceMessageVideoUrlList = null,
         CallCenterAnnouncementFileListModify $entranceMessageVideoFileList = null,
         $playPeriodicComfortMessage = null,
         $timeBetweenComfortMessagesSeconds = null,
         $periodicComfortAudioMessageSelection = null,
         CallCenterAnnouncementURLListModify $periodicComfortMessageAudioUrlList = null,
         CallCenterAnnouncementFileListModify $periodicComfortMessageAudioFileList = null,
         $periodicComfortVideoMessageSelection = null,
         CallCenterAnnouncementURLListModify $periodicComfortMessageVideoUrlList = null,
         CallCenterAnnouncementFileListModify $periodicComfortMessageVideoFileList = null,
         $enableMediaOnHoldForQueuedCalls = null,
         CallCenterMediaOnHoldSourceModify17 $mediaOnHoldSource = null,
         $mediaOnHoldUseAlternateSourceForInternalCalls = null,
         CallCenterMediaOnHoldSourceModify17 $mediaOnHoldInternalSource = null,
         $playWhisperMessage = null,
         $whisperAudioMessageSelection = null,
         CallCenterAnnouncementURLListModify $whisperMessageAudioUrlList = null,
         CallCenterAnnouncementFileListModify $whisperMessageAudioFileList = null,
         $whisperVideoMessageSelection = null,
         CallCenterAnnouncementURLListModify $whisperMessageVideoUrlList = null,
         CallCenterAnnouncementFileListModify $whisperMessageVideoFileList = null,
         EstimatedWaitMessageOptionsModify $estimatedWaitMessageOptionsModify = null
    ) {
        $this->setServiceUserId($serviceUserId);
        $this->setPlayEntranceMessage($playEntranceMessage);
        $this->setMandatoryEntranceMessage($mandatoryEntranceMessage);
        $this->setEntranceAudioMessageSelection($entranceAudioMessageSelection);
        $this->setEntranceMessageAudioUrlList($entranceMessageAudioUrlList);
        $this->setEntranceMessageAudioFileList($entranceMessageAudioFileList);
        $this->setEntranceVideoMessageSelection($entranceVideoMessageSelection);
        $this->setEntranceMessageVideoUrlList($entranceMessageVideoUrlList);
        $this->setEntranceMessageVideoFileList($entranceMessageVideoFileList);
        $this->setPlayPeriodicComfortMessage($playPeriodicComfortMessage);
        $this->setTimeBetweenComfortMessagesSeconds($timeBetweenComfortMessagesSeconds);
        $this->setPeriodicComfortAudioMessageSelection($periodicComfortAudioMessageSelection);
        $this->setPeriodicComfortMessageAudioUrlList($periodicComfortMessageAudioUrlList);
        $this->setPeriodicComfortMessageAudioFileList($periodicComfortMessageAudioFileList);
        $this->setPeriodicComfortVideoMessageSelection($periodicComfortVideoMessageSelection);
        $this->setPeriodicComfortMessageVideoUrlList($periodicComfortMessageVideoUrlList);
        $this->setPeriodicComfortMessageVideoFileList($periodicComfortMessageVideoFileList);
        $this->setEnableMediaOnHoldForQueuedCalls($enableMediaOnHoldForQueuedCalls);
        $this->setMediaOnHoldSource($mediaOnHoldSource);
        $this->setMediaOnHoldUseAlternateSourceForInternalCalls($mediaOnHoldUseAlternateSourceForInternalCalls);
        $this->setMediaOnHoldInternalSource($mediaOnHoldInternalSource);
        $this->setPlayWhisperMessage($playWhisperMessage);
        $this->setWhisperAudioMessageSelection($whisperAudioMessageSelection);
        $this->setWhisperMessageAudioUrlList($whisperMessageAudioUrlList);
        $this->setWhisperMessageAudioFileList($whisperMessageAudioFileList);
        $this->setWhisperVideoMessageSelection($whisperVideoMessageSelection);
        $this->setWhisperMessageVideoUrlList($whisperMessageVideoUrlList);
        $this->setWhisperMessageVideoFileList($whisperMessageVideoFileList);
        $this->setEstimatedWaitMessageOptionsModify($estimatedWaitMessageOptionsModify);
    }

    public function setServiceUserId($serviceUserId = null)
    {
        $this->serviceUserId = ($serviceUserId InstanceOf UserId)
             ? $serviceUserId
             : new UserId($serviceUserId);
    }

    public function getServiceUserId()
    {
        return (!$this->serviceUserId) ?: $this->serviceUserId->value();
    }

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

    public function setEntranceMessageAudioUrlList(CallCenterAnnouncementURLListModify $entranceMessageAudioUrlList = null)
    {
    }

    public function getEntranceMessageAudioUrlList()
    {
        return (!$this->entranceMessageAudioUrlList) ?: $this->entranceMessageAudioUrlList->value();
    }

    public function setEntranceMessageAudioFileList(CallCenterAnnouncementFileListModify $entranceMessageAudioFileList = null)
    {
    }

    public function getEntranceMessageAudioFileList()
    {
        return (!$this->entranceMessageAudioFileList) ?: $this->entranceMessageAudioFileList->value();
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

    public function setEntranceMessageVideoUrlList(CallCenterAnnouncementURLListModify $entranceMessageVideoUrlList = null)
    {
    }

    public function getEntranceMessageVideoUrlList()
    {
        return (!$this->entranceMessageVideoUrlList) ?: $this->entranceMessageVideoUrlList->value();
    }

    public function setEntranceMessageVideoFileList(CallCenterAnnouncementFileListModify $entranceMessageVideoFileList = null)
    {
    }

    public function getEntranceMessageVideoFileList()
    {
        return (!$this->entranceMessageVideoFileList) ?: $this->entranceMessageVideoFileList->value();
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

    public function setPeriodicComfortMessageAudioUrlList(CallCenterAnnouncementURLListModify $periodicComfortMessageAudioUrlList = null)
    {
    }

    public function getPeriodicComfortMessageAudioUrlList()
    {
        return (!$this->periodicComfortMessageAudioUrlList) ?: $this->periodicComfortMessageAudioUrlList->value();
    }

    public function setPeriodicComfortMessageAudioFileList(CallCenterAnnouncementFileListModify $periodicComfortMessageAudioFileList = null)
    {
    }

    public function getPeriodicComfortMessageAudioFileList()
    {
        return (!$this->periodicComfortMessageAudioFileList) ?: $this->periodicComfortMessageAudioFileList->value();
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

    public function setPeriodicComfortMessageVideoUrlList(CallCenterAnnouncementURLListModify $periodicComfortMessageVideoUrlList = null)
    {
    }

    public function getPeriodicComfortMessageVideoUrlList()
    {
        return (!$this->periodicComfortMessageVideoUrlList) ?: $this->periodicComfortMessageVideoUrlList->value();
    }

    public function setPeriodicComfortMessageVideoFileList(CallCenterAnnouncementFileListModify $periodicComfortMessageVideoFileList = null)
    {
    }

    public function getPeriodicComfortMessageVideoFileList()
    {
        return (!$this->periodicComfortMessageVideoFileList) ?: $this->periodicComfortMessageVideoFileList->value();
    }

    public function setEnableMediaOnHoldForQueuedCalls(xs:boolean $enableMediaOnHoldForQueuedCalls = null)
    {
    }

    public function getEnableMediaOnHoldForQueuedCalls()
    {
        return (!$this->enableMediaOnHoldForQueuedCalls) ?: $this->enableMediaOnHoldForQueuedCalls->value();
    }

    public function setMediaOnHoldSource(CallCenterMediaOnHoldSourceModify17 $mediaOnHoldSource = null)
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

    public function setMediaOnHoldInternalSource(CallCenterMediaOnHoldSourceModify17 $mediaOnHoldInternalSource = null)
    {
    }

    public function getMediaOnHoldInternalSource()
    {
        return (!$this->mediaOnHoldInternalSource) ?: $this->mediaOnHoldInternalSource->value();
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

    public function setWhisperMessageAudioUrlList(CallCenterAnnouncementURLListModify $whisperMessageAudioUrlList = null)
    {
    }

    public function getWhisperMessageAudioUrlList()
    {
        return (!$this->whisperMessageAudioUrlList) ?: $this->whisperMessageAudioUrlList->value();
    }

    public function setWhisperMessageAudioFileList(CallCenterAnnouncementFileListModify $whisperMessageAudioFileList = null)
    {
    }

    public function getWhisperMessageAudioFileList()
    {
        return (!$this->whisperMessageAudioFileList) ?: $this->whisperMessageAudioFileList->value();
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

    public function setWhisperMessageVideoUrlList(CallCenterAnnouncementURLListModify $whisperMessageVideoUrlList = null)
    {
    }

    public function getWhisperMessageVideoUrlList()
    {
        return (!$this->whisperMessageVideoUrlList) ?: $this->whisperMessageVideoUrlList->value();
    }

    public function setWhisperMessageVideoFileList(CallCenterAnnouncementFileListModify $whisperMessageVideoFileList = null)
    {
    }

    public function getWhisperMessageVideoFileList()
    {
        return (!$this->whisperMessageVideoFileList) ?: $this->whisperMessageVideoFileList->value();
    }

    public function setEstimatedWaitMessageOptionsModify(EstimatedWaitMessageOptionsModify $estimatedWaitMessageOptionsModify = null)
    {
    }

    public function getEstimatedWaitMessageOptionsModify()
    {
        return (!$this->estimatedWaitMessageOptionsModify) ?: $this->estimatedWaitMessageOptionsModify->value();
    }
}
