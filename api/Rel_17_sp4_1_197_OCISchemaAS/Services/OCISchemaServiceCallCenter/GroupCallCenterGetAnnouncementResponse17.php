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
     * Response to the GroupCallCenterGetAnnouncementRequest17.
 */
class GroupCallCenterGetAnnouncementResponse17 extends ComplexType implements ComplexInterface
{
    const     RESPONSE_TYPE                                  = 'Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceCallCenter\GroupCallCenterGetAnnouncementResponse17';
    public    $name                                          = __CLASS__;
    protected $playEntranceMessage                           = null;
    protected $mandatoryEntranceMessage                      = null;
    protected $entranceAudioMessageSelection                 = null;
    protected $entranceMessageAudioUrlList                   = null;
    protected $entranceMessageAudioFileList                  = null;
    protected $entranceMessageAudioMediaTypeList             = null;
    protected $entranceVideoMessageSelection                 = null;
    protected $entranceMessageVideoUrlList                   = null;
    protected $entranceMessageVideoFileList                  = null;
    protected $entranceMessageVideoMediaTypeList             = null;
    protected $playPeriodicComfortMessage                    = null;
    protected $timeBetweenComfortMessagesSeconds             = null;
    protected $periodicComfortAudioMessageSelection          = null;
    protected $periodicComfortMessageAudioUrlList            = null;
    protected $periodicComfortMessageAudioFileList           = null;
    protected $periodicComfortMessageAudioMediaTypeList      = null;
    protected $periodicComfortVideoMessageSelection          = null;
    protected $periodicComfortMessageVideoUrlList            = null;
    protected $periodicComfortMessageVideoFileList           = null;
    protected $periodicComfortMessageVideoMediaTypeList      = null;
    protected $enableMediaOnHoldForQueuedCalls               = null;
    protected $mediaOnHoldSource                             = null;
    protected $mediaOnHoldUseAlternateSourceForInternalCalls = null;
    protected $mediaOnHoldInternalSource                     = null;
    protected $playWhisperMessage                            = null;
    protected $whisperAudioMessageSelection                  = null;
    protected $whisperMessageAudioUrlList                    = null;
    protected $whisperMessageAudioFileList                   = null;
    protected $whisperMessageAudioMediaTypeList              = null;
    protected $whisperVideoMessageSelection                  = null;
    protected $whisperMessageVideoUrlList                    = null;
    protected $whisperMessageVideoFileList                   = null;
    protected $whisperMessageVideoMediaTypeList              = null;
    protected $estimatedWaitMessageOptionsRead               = null;


    /**
     * 
     */
    public function setPlayEntranceMessage($playEntranceMessage = null)
    {
        $this->playEntranceMessage = (boolean) $playEntranceMessage;
    }

    /**
     * 
     */
    public function getPlayEntranceMessage()
    {
        return (!$this->playEntranceMessage) ?: $this->playEntranceMessage->getValue();
    }

    /**
     * 
     */
    public function setMandatoryEntranceMessage($mandatoryEntranceMessage = null)
    {
        $this->mandatoryEntranceMessage = (boolean) $mandatoryEntranceMessage;
    }

    /**
     * 
     */
    public function getMandatoryEntranceMessage()
    {
        return (!$this->mandatoryEntranceMessage) ?: $this->mandatoryEntranceMessage->getValue();
    }

    /**
     * Choices for extended file resource usage.
     */
    public function setEntranceAudioMessageSelection($entranceAudioMessageSelection = null)
    {
        $this->entranceAudioMessageSelection = ($entranceAudioMessageSelection InstanceOf ExtendedFileResourceSelection)
             ? $entranceAudioMessageSelection
             : new ExtendedFileResourceSelection($entranceAudioMessageSelection);
    }

    /**
     * Choices for extended file resource usage.
     */
    public function getEntranceAudioMessageSelection()
    {
        return (!$this->entranceAudioMessageSelection) ?: $this->entranceAudioMessageSelection->getValue();
    }

    /**
     * Contains list of urls
     */
    public function setEntranceMessageAudioUrlList(CallCenterAnnouncementURLList $entranceMessageAudioUrlList = null)
    {
        $this->entranceMessageAudioUrlList = CallCenterAnnouncementURLList $entranceMessageAudioUrlList;
    }

    /**
     * Contains list of urls
     */
    public function getEntranceMessageAudioUrlList()
    {
        return (!$this->entranceMessageAudioUrlList) ?: $this->entranceMessageAudioUrlList->getValue();
    }

    /**
     * Contains list of file descriptions for audio or video files
     */
    public function setEntranceMessageAudioFileList(CallCenterAnnouncementDescriptionList $entranceMessageAudioFileList = null)
    {
        $this->entranceMessageAudioFileList = CallCenterAnnouncementDescriptionList $entranceMessageAudioFileList;
    }

    /**
     * Contains list of file descriptions for audio or video files
     */
    public function getEntranceMessageAudioFileList()
    {
        return (!$this->entranceMessageAudioFileList) ?: $this->entranceMessageAudioFileList->getValue();
    }

    /**
     * Contains list of file media types for audio or video files
     */
    public function setEntranceMessageAudioMediaTypeList(CallCenterAnnouncementMediaFileTypeList $entranceMessageAudioMediaTypeList = null)
    {
        $this->entranceMessageAudioMediaTypeList = CallCenterAnnouncementMediaFileTypeList $entranceMessageAudioMediaTypeList;
    }

    /**
     * Contains list of file media types for audio or video files
     */
    public function getEntranceMessageAudioMediaTypeList()
    {
        return (!$this->entranceMessageAudioMediaTypeList) ?: $this->entranceMessageAudioMediaTypeList->getValue();
    }

    /**
     * Choices for extended file resource usage.
     */
    public function setEntranceVideoMessageSelection($entranceVideoMessageSelection = null)
    {
        $this->entranceVideoMessageSelection = ($entranceVideoMessageSelection InstanceOf ExtendedFileResourceSelection)
             ? $entranceVideoMessageSelection
             : new ExtendedFileResourceSelection($entranceVideoMessageSelection);
    }

    /**
     * Choices for extended file resource usage.
     */
    public function getEntranceVideoMessageSelection()
    {
        return (!$this->entranceVideoMessageSelection) ?: $this->entranceVideoMessageSelection->getValue();
    }

    /**
     * Contains list of urls
     */
    public function setEntranceMessageVideoUrlList(CallCenterAnnouncementURLList $entranceMessageVideoUrlList = null)
    {
        $this->entranceMessageVideoUrlList = CallCenterAnnouncementURLList $entranceMessageVideoUrlList;
    }

    /**
     * Contains list of urls
     */
    public function getEntranceMessageVideoUrlList()
    {
        return (!$this->entranceMessageVideoUrlList) ?: $this->entranceMessageVideoUrlList->getValue();
    }

    /**
     * Contains list of file descriptions for audio or video files
     */
    public function setEntranceMessageVideoFileList(CallCenterAnnouncementDescriptionList $entranceMessageVideoFileList = null)
    {
        $this->entranceMessageVideoFileList = CallCenterAnnouncementDescriptionList $entranceMessageVideoFileList;
    }

    /**
     * Contains list of file descriptions for audio or video files
     */
    public function getEntranceMessageVideoFileList()
    {
        return (!$this->entranceMessageVideoFileList) ?: $this->entranceMessageVideoFileList->getValue();
    }

    /**
     * Contains list of file media types for audio or video files
     */
    public function setEntranceMessageVideoMediaTypeList(CallCenterAnnouncementMediaFileTypeList $entranceMessageVideoMediaTypeList = null)
    {
        $this->entranceMessageVideoMediaTypeList = CallCenterAnnouncementMediaFileTypeList $entranceMessageVideoMediaTypeList;
    }

    /**
     * Contains list of file media types for audio or video files
     */
    public function getEntranceMessageVideoMediaTypeList()
    {
        return (!$this->entranceMessageVideoMediaTypeList) ?: $this->entranceMessageVideoMediaTypeList->getValue();
    }

    /**
     * 
     */
    public function setPlayPeriodicComfortMessage($playPeriodicComfortMessage = null)
    {
        $this->playPeriodicComfortMessage = (boolean) $playPeriodicComfortMessage;
    }

    /**
     * 
     */
    public function getPlayPeriodicComfortMessage()
    {
        return (!$this->playPeriodicComfortMessage) ?: $this->playPeriodicComfortMessage->getValue();
    }

    /**
     * The interval in seconds between each repetition of the comfort message played to queued users.
     */
    public function setTimeBetweenComfortMessagesSeconds($timeBetweenComfortMessagesSeconds = null)
    {
        $this->timeBetweenComfortMessagesSeconds = ($timeBetweenComfortMessagesSeconds InstanceOf CallCenterTimeBetweenComfortMessagesSeconds)
             ? $timeBetweenComfortMessagesSeconds
             : new CallCenterTimeBetweenComfortMessagesSeconds($timeBetweenComfortMessagesSeconds);
    }

    /**
     * The interval in seconds between each repetition of the comfort message played to queued users.
     */
    public function getTimeBetweenComfortMessagesSeconds()
    {
        return (!$this->timeBetweenComfortMessagesSeconds) ?: $this->timeBetweenComfortMessagesSeconds->getValue();
    }

    /**
     * Choices for extended file resource usage.
     */
    public function setPeriodicComfortAudioMessageSelection($periodicComfortAudioMessageSelection = null)
    {
        $this->periodicComfortAudioMessageSelection = ($periodicComfortAudioMessageSelection InstanceOf ExtendedFileResourceSelection)
             ? $periodicComfortAudioMessageSelection
             : new ExtendedFileResourceSelection($periodicComfortAudioMessageSelection);
    }

    /**
     * Choices for extended file resource usage.
     */
    public function getPeriodicComfortAudioMessageSelection()
    {
        return (!$this->periodicComfortAudioMessageSelection) ?: $this->periodicComfortAudioMessageSelection->getValue();
    }

    /**
     * Contains list of urls
     */
    public function setPeriodicComfortMessageAudioUrlList(CallCenterAnnouncementURLList $periodicComfortMessageAudioUrlList = null)
    {
        $this->periodicComfortMessageAudioUrlList = CallCenterAnnouncementURLList $periodicComfortMessageAudioUrlList;
    }

    /**
     * Contains list of urls
     */
    public function getPeriodicComfortMessageAudioUrlList()
    {
        return (!$this->periodicComfortMessageAudioUrlList) ?: $this->periodicComfortMessageAudioUrlList->getValue();
    }

    /**
     * Contains list of file descriptions for audio or video files
     */
    public function setPeriodicComfortMessageAudioFileList(CallCenterAnnouncementDescriptionList $periodicComfortMessageAudioFileList = null)
    {
        $this->periodicComfortMessageAudioFileList = CallCenterAnnouncementDescriptionList $periodicComfortMessageAudioFileList;
    }

    /**
     * Contains list of file descriptions for audio or video files
     */
    public function getPeriodicComfortMessageAudioFileList()
    {
        return (!$this->periodicComfortMessageAudioFileList) ?: $this->periodicComfortMessageAudioFileList->getValue();
    }

    /**
     * Contains list of file media types for audio or video files
     */
    public function setPeriodicComfortMessageAudioMediaTypeList(CallCenterAnnouncementMediaFileTypeList $periodicComfortMessageAudioMediaTypeList = null)
    {
        $this->periodicComfortMessageAudioMediaTypeList = CallCenterAnnouncementMediaFileTypeList $periodicComfortMessageAudioMediaTypeList;
    }

    /**
     * Contains list of file media types for audio or video files
     */
    public function getPeriodicComfortMessageAudioMediaTypeList()
    {
        return (!$this->periodicComfortMessageAudioMediaTypeList) ?: $this->periodicComfortMessageAudioMediaTypeList->getValue();
    }

    /**
     * Choices for extended file resource usage.
     */
    public function setPeriodicComfortVideoMessageSelection($periodicComfortVideoMessageSelection = null)
    {
        $this->periodicComfortVideoMessageSelection = ($periodicComfortVideoMessageSelection InstanceOf ExtendedFileResourceSelection)
             ? $periodicComfortVideoMessageSelection
             : new ExtendedFileResourceSelection($periodicComfortVideoMessageSelection);
    }

    /**
     * Choices for extended file resource usage.
     */
    public function getPeriodicComfortVideoMessageSelection()
    {
        return (!$this->periodicComfortVideoMessageSelection) ?: $this->periodicComfortVideoMessageSelection->getValue();
    }

    /**
     * Contains list of urls
     */
    public function setPeriodicComfortMessageVideoUrlList(CallCenterAnnouncementURLList $periodicComfortMessageVideoUrlList = null)
    {
        $this->periodicComfortMessageVideoUrlList = CallCenterAnnouncementURLList $periodicComfortMessageVideoUrlList;
    }

    /**
     * Contains list of urls
     */
    public function getPeriodicComfortMessageVideoUrlList()
    {
        return (!$this->periodicComfortMessageVideoUrlList) ?: $this->periodicComfortMessageVideoUrlList->getValue();
    }

    /**
     * Contains list of file descriptions for audio or video files
     */
    public function setPeriodicComfortMessageVideoFileList(CallCenterAnnouncementDescriptionList $periodicComfortMessageVideoFileList = null)
    {
        $this->periodicComfortMessageVideoFileList = CallCenterAnnouncementDescriptionList $periodicComfortMessageVideoFileList;
    }

    /**
     * Contains list of file descriptions for audio or video files
     */
    public function getPeriodicComfortMessageVideoFileList()
    {
        return (!$this->periodicComfortMessageVideoFileList) ?: $this->periodicComfortMessageVideoFileList->getValue();
    }

    /**
     * Contains list of file media types for audio or video files
     */
    public function setPeriodicComfortMessageVideoMediaTypeList(CallCenterAnnouncementMediaFileTypeList $periodicComfortMessageVideoMediaTypeList = null)
    {
        $this->periodicComfortMessageVideoMediaTypeList = CallCenterAnnouncementMediaFileTypeList $periodicComfortMessageVideoMediaTypeList;
    }

    /**
     * Contains list of file media types for audio or video files
     */
    public function getPeriodicComfortMessageVideoMediaTypeList()
    {
        return (!$this->periodicComfortMessageVideoMediaTypeList) ?: $this->periodicComfortMessageVideoMediaTypeList->getValue();
    }

    /**
     * 
     */
    public function setEnableMediaOnHoldForQueuedCalls($enableMediaOnHoldForQueuedCalls = null)
    {
        $this->enableMediaOnHoldForQueuedCalls = (boolean) $enableMediaOnHoldForQueuedCalls;
    }

    /**
     * 
     */
    public function getEnableMediaOnHoldForQueuedCalls()
    {
        return (!$this->enableMediaOnHoldForQueuedCalls) ?: $this->enableMediaOnHoldForQueuedCalls->getValue();
    }

    /**
     * Contains the call center media on hold source configuration.
     */
    public function setMediaOnHoldSource(CallCenterMediaOnHoldSourceRead17 $mediaOnHoldSource = null)
    {
        $this->mediaOnHoldSource = CallCenterMediaOnHoldSourceRead17 $mediaOnHoldSource;
    }

    /**
     * Contains the call center media on hold source configuration.
     */
    public function getMediaOnHoldSource()
    {
        return (!$this->mediaOnHoldSource) ?: $this->mediaOnHoldSource->getValue();
    }

    /**
     * 
     */
    public function setMediaOnHoldUseAlternateSourceForInternalCalls($mediaOnHoldUseAlternateSourceForInternalCalls = null)
    {
        $this->mediaOnHoldUseAlternateSourceForInternalCalls = (boolean) $mediaOnHoldUseAlternateSourceForInternalCalls;
    }

    /**
     * 
     */
    public function getMediaOnHoldUseAlternateSourceForInternalCalls()
    {
        return (!$this->mediaOnHoldUseAlternateSourceForInternalCalls) ?: $this->mediaOnHoldUseAlternateSourceForInternalCalls->getValue();
    }

    /**
     * Contains the call center media on hold source configuration.
     */
    public function setMediaOnHoldInternalSource(CallCenterMediaOnHoldSourceRead17 $mediaOnHoldInternalSource = null)
    {
        $this->mediaOnHoldInternalSource = CallCenterMediaOnHoldSourceRead17 $mediaOnHoldInternalSource;
    }

    /**
     * Contains the call center media on hold source configuration.
     */
    public function getMediaOnHoldInternalSource()
    {
        return (!$this->mediaOnHoldInternalSource) ?: $this->mediaOnHoldInternalSource->getValue();
    }

    /**
     * 
     */
    public function setPlayWhisperMessage($playWhisperMessage = null)
    {
        $this->playWhisperMessage = (boolean) $playWhisperMessage;
    }

    /**
     * 
     */
    public function getPlayWhisperMessage()
    {
        return (!$this->playWhisperMessage) ?: $this->playWhisperMessage->getValue();
    }

    /**
     * Choices for extended file resource usage.
     */
    public function setWhisperAudioMessageSelection($whisperAudioMessageSelection = null)
    {
        $this->whisperAudioMessageSelection = ($whisperAudioMessageSelection InstanceOf ExtendedFileResourceSelection)
             ? $whisperAudioMessageSelection
             : new ExtendedFileResourceSelection($whisperAudioMessageSelection);
    }

    /**
     * Choices for extended file resource usage.
     */
    public function getWhisperAudioMessageSelection()
    {
        return (!$this->whisperAudioMessageSelection) ?: $this->whisperAudioMessageSelection->getValue();
    }

    /**
     * Contains list of urls
     */
    public function setWhisperMessageAudioUrlList(CallCenterAnnouncementURLList $whisperMessageAudioUrlList = null)
    {
        $this->whisperMessageAudioUrlList = CallCenterAnnouncementURLList $whisperMessageAudioUrlList;
    }

    /**
     * Contains list of urls
     */
    public function getWhisperMessageAudioUrlList()
    {
        return (!$this->whisperMessageAudioUrlList) ?: $this->whisperMessageAudioUrlList->getValue();
    }

    /**
     * Contains list of file descriptions for audio or video files
     */
    public function setWhisperMessageAudioFileList(CallCenterAnnouncementDescriptionList $whisperMessageAudioFileList = null)
    {
        $this->whisperMessageAudioFileList = CallCenterAnnouncementDescriptionList $whisperMessageAudioFileList;
    }

    /**
     * Contains list of file descriptions for audio or video files
     */
    public function getWhisperMessageAudioFileList()
    {
        return (!$this->whisperMessageAudioFileList) ?: $this->whisperMessageAudioFileList->getValue();
    }

    /**
     * Contains list of file media types for audio or video files
     */
    public function setWhisperMessageAudioMediaTypeList(CallCenterAnnouncementMediaFileTypeList $whisperMessageAudioMediaTypeList = null)
    {
        $this->whisperMessageAudioMediaTypeList = CallCenterAnnouncementMediaFileTypeList $whisperMessageAudioMediaTypeList;
    }

    /**
     * Contains list of file media types for audio or video files
     */
    public function getWhisperMessageAudioMediaTypeList()
    {
        return (!$this->whisperMessageAudioMediaTypeList) ?: $this->whisperMessageAudioMediaTypeList->getValue();
    }

    /**
     * Choices for extended file resource usage.
     */
    public function setWhisperVideoMessageSelection($whisperVideoMessageSelection = null)
    {
        $this->whisperVideoMessageSelection = ($whisperVideoMessageSelection InstanceOf ExtendedFileResourceSelection)
             ? $whisperVideoMessageSelection
             : new ExtendedFileResourceSelection($whisperVideoMessageSelection);
    }

    /**
     * Choices for extended file resource usage.
     */
    public function getWhisperVideoMessageSelection()
    {
        return (!$this->whisperVideoMessageSelection) ?: $this->whisperVideoMessageSelection->getValue();
    }

    /**
     * Contains list of urls
     */
    public function setWhisperMessageVideoUrlList(CallCenterAnnouncementURLList $whisperMessageVideoUrlList = null)
    {
        $this->whisperMessageVideoUrlList = CallCenterAnnouncementURLList $whisperMessageVideoUrlList;
    }

    /**
     * Contains list of urls
     */
    public function getWhisperMessageVideoUrlList()
    {
        return (!$this->whisperMessageVideoUrlList) ?: $this->whisperMessageVideoUrlList->getValue();
    }

    /**
     * Contains list of file descriptions for audio or video files
     */
    public function setWhisperMessageVideoFileList(CallCenterAnnouncementDescriptionList $whisperMessageVideoFileList = null)
    {
        $this->whisperMessageVideoFileList = CallCenterAnnouncementDescriptionList $whisperMessageVideoFileList;
    }

    /**
     * Contains list of file descriptions for audio or video files
     */
    public function getWhisperMessageVideoFileList()
    {
        return (!$this->whisperMessageVideoFileList) ?: $this->whisperMessageVideoFileList->getValue();
    }

    /**
     * Contains list of file media types for audio or video files
     */
    public function setWhisperMessageVideoMediaTypeList(CallCenterAnnouncementMediaFileTypeList $whisperMessageVideoMediaTypeList = null)
    {
        $this->whisperMessageVideoMediaTypeList = CallCenterAnnouncementMediaFileTypeList $whisperMessageVideoMediaTypeList;
    }

    /**
     * Contains list of file media types for audio or video files
     */
    public function getWhisperMessageVideoMediaTypeList()
    {
        return (!$this->whisperMessageVideoMediaTypeList) ?: $this->whisperMessageVideoMediaTypeList->getValue();
    }

    /**
     * Estimated Wait Message Options
     */
    public function setEstimatedWaitMessageOptionsRead(EstimatedWaitMessageOptionsRead $estimatedWaitMessageOptionsRead = null)
    {
        $this->estimatedWaitMessageOptionsRead = EstimatedWaitMessageOptionsRead $estimatedWaitMessageOptionsRead;
    }

    /**
     * Estimated Wait Message Options
     */
    public function getEstimatedWaitMessageOptionsRead()
    {
        return (!$this->estimatedWaitMessageOptionsRead) ?: $this->estimatedWaitMessageOptionsRead->getValue();
    }
}