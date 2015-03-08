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
    public    $name                                          = __CLASS__;
    protected $serviceUserId                                 = null;
    protected $playEntranceMessage                           = null;
    protected $mandatoryEntranceMessage                      = null;
    protected $entranceAudioMessageSelection                 = null;
    protected $entranceMessageAudioUrlList                   = null;
    protected $entranceMessageAudioFileList                  = null;
    protected $entranceVideoMessageSelection                 = null;
    protected $entranceMessageVideoUrlList                   = null;
    protected $entranceMessageVideoFileList                  = null;
    protected $playPeriodicComfortMessage                    = null;
    protected $timeBetweenComfortMessagesSeconds             = null;
    protected $periodicComfortAudioMessageSelection          = null;
    protected $periodicComfortMessageAudioUrlList            = null;
    protected $periodicComfortMessageAudioFileList           = null;
    protected $periodicComfortVideoMessageSelection          = null;
    protected $periodicComfortMessageVideoUrlList            = null;
    protected $periodicComfortMessageVideoFileList           = null;
    protected $enableMediaOnHoldForQueuedCalls               = null;
    protected $mediaOnHoldSource                             = null;
    protected $mediaOnHoldUseAlternateSourceForInternalCalls = null;
    protected $mediaOnHoldInternalSource                     = null;
    protected $playWhisperMessage                            = null;
    protected $whisperAudioMessageSelection                  = null;
    protected $whisperMessageAudioUrlList                    = null;
    protected $whisperMessageAudioFileList                   = null;
    protected $whisperVideoMessageSelection                  = null;
    protected $whisperMessageVideoUrlList                    = null;
    protected $whisperMessageVideoFileList                   = null;
    protected $estimatedWaitMessageOptionsModify             = null;

    public function __construct(
         $serviceUserId,
         $playEntranceMessage = null,
         $mandatoryEntranceMessage = null,
         $entranceAudioMessageSelection = null,
          $entranceMessageAudioUrlList = null,
          $entranceMessageAudioFileList = null,
         $entranceVideoMessageSelection = null,
          $entranceMessageVideoUrlList = null,
          $entranceMessageVideoFileList = null,
         $playPeriodicComfortMessage = null,
         $timeBetweenComfortMessagesSeconds = null,
         $periodicComfortAudioMessageSelection = null,
          $periodicComfortMessageAudioUrlList = null,
          $periodicComfortMessageAudioFileList = null,
         $periodicComfortVideoMessageSelection = null,
          $periodicComfortMessageVideoUrlList = null,
          $periodicComfortMessageVideoFileList = null,
         $enableMediaOnHoldForQueuedCalls = null,
          $mediaOnHoldSource = null,
         $mediaOnHoldUseAlternateSourceForInternalCalls = null,
          $mediaOnHoldInternalSource = null,
         $playWhisperMessage = null,
         $whisperAudioMessageSelection = null,
          $whisperMessageAudioUrlList = null,
          $whisperMessageAudioFileList = null,
         $whisperVideoMessageSelection = null,
          $whisperMessageVideoUrlList = null,
          $whisperMessageVideoFileList = null,
          $estimatedWaitMessageOptionsModify = null
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

    /**
     * A user id consists of a user-portion optionally followed by an @ sign and a domain name.
     *         If the domain is not specified, it is assumed to be the system default domain.
     *         The domain is required when adding normal users and virtual users, i.e. Auto Attendants,
     *         Hunt Groups, Call Centers....
     *         The domain must not be specified for system-level and service-provider-level administrators.
     */
    public function setServiceUserId($serviceUserId = null)
    {
        $this->serviceUserId = ($serviceUserId InstanceOf UserId)
             ? $serviceUserId
             : new UserId($serviceUserId);
    }

    /**
     * A user id consists of a user-portion optionally followed by an @ sign and a domain name.
     *         If the domain is not specified, it is assumed to be the system default domain.
     *         The domain is required when adding normal users and virtual users, i.e. Auto Attendants,
     *         Hunt Groups, Call Centers....
     *         The domain must not be specified for system-level and service-provider-level administrators.
     */
    public function getServiceUserId()
    {
        return (!$this->serviceUserId) ?: $this->serviceUserId->getValue();
    }

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
     * Contains a list of URLs for modify.
     */
    public function setEntranceMessageAudioUrlList(CallCenterAnnouncementURLListModify $entranceMessageAudioUrlList = null)
    {
        $this->entranceMessageAudioUrlList =  $entranceMessageAudioUrlList;
    }

    /**
     * Contains a list of URLs for modify.
     */
    public function getEntranceMessageAudioUrlList()
    {
        return (!$this->entranceMessageAudioUrlList) ?: $this->entranceMessageAudioUrlList->getValue();
    }

    /**
     * Contains a list of audio or video files to modify.
     */
    public function setEntranceMessageAudioFileList(CallCenterAnnouncementFileListModify $entranceMessageAudioFileList = null)
    {
        $this->entranceMessageAudioFileList =  $entranceMessageAudioFileList;
    }

    /**
     * Contains a list of audio or video files to modify.
     */
    public function getEntranceMessageAudioFileList()
    {
        return (!$this->entranceMessageAudioFileList) ?: $this->entranceMessageAudioFileList->getValue();
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
     * Contains a list of URLs for modify.
     */
    public function setEntranceMessageVideoUrlList(CallCenterAnnouncementURLListModify $entranceMessageVideoUrlList = null)
    {
        $this->entranceMessageVideoUrlList =  $entranceMessageVideoUrlList;
    }

    /**
     * Contains a list of URLs for modify.
     */
    public function getEntranceMessageVideoUrlList()
    {
        return (!$this->entranceMessageVideoUrlList) ?: $this->entranceMessageVideoUrlList->getValue();
    }

    /**
     * Contains a list of audio or video files to modify.
     */
    public function setEntranceMessageVideoFileList(CallCenterAnnouncementFileListModify $entranceMessageVideoFileList = null)
    {
        $this->entranceMessageVideoFileList =  $entranceMessageVideoFileList;
    }

    /**
     * Contains a list of audio or video files to modify.
     */
    public function getEntranceMessageVideoFileList()
    {
        return (!$this->entranceMessageVideoFileList) ?: $this->entranceMessageVideoFileList->getValue();
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
     * Contains a list of URLs for modify.
     */
    public function setPeriodicComfortMessageAudioUrlList(CallCenterAnnouncementURLListModify $periodicComfortMessageAudioUrlList = null)
    {
        $this->periodicComfortMessageAudioUrlList =  $periodicComfortMessageAudioUrlList;
    }

    /**
     * Contains a list of URLs for modify.
     */
    public function getPeriodicComfortMessageAudioUrlList()
    {
        return (!$this->periodicComfortMessageAudioUrlList) ?: $this->periodicComfortMessageAudioUrlList->getValue();
    }

    /**
     * Contains a list of audio or video files to modify.
     */
    public function setPeriodicComfortMessageAudioFileList(CallCenterAnnouncementFileListModify $periodicComfortMessageAudioFileList = null)
    {
        $this->periodicComfortMessageAudioFileList =  $periodicComfortMessageAudioFileList;
    }

    /**
     * Contains a list of audio or video files to modify.
     */
    public function getPeriodicComfortMessageAudioFileList()
    {
        return (!$this->periodicComfortMessageAudioFileList) ?: $this->periodicComfortMessageAudioFileList->getValue();
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
     * Contains a list of URLs for modify.
     */
    public function setPeriodicComfortMessageVideoUrlList(CallCenterAnnouncementURLListModify $periodicComfortMessageVideoUrlList = null)
    {
        $this->periodicComfortMessageVideoUrlList =  $periodicComfortMessageVideoUrlList;
    }

    /**
     * Contains a list of URLs for modify.
     */
    public function getPeriodicComfortMessageVideoUrlList()
    {
        return (!$this->periodicComfortMessageVideoUrlList) ?: $this->periodicComfortMessageVideoUrlList->getValue();
    }

    /**
     * Contains a list of audio or video files to modify.
     */
    public function setPeriodicComfortMessageVideoFileList(CallCenterAnnouncementFileListModify $periodicComfortMessageVideoFileList = null)
    {
        $this->periodicComfortMessageVideoFileList =  $periodicComfortMessageVideoFileList;
    }

    /**
     * Contains a list of audio or video files to modify.
     */
    public function getPeriodicComfortMessageVideoFileList()
    {
        return (!$this->periodicComfortMessageVideoFileList) ?: $this->periodicComfortMessageVideoFileList->getValue();
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
    public function setMediaOnHoldSource(CallCenterMediaOnHoldSourceModify17 $mediaOnHoldSource = null)
    {
        $this->mediaOnHoldSource =  $mediaOnHoldSource;
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
    public function setMediaOnHoldInternalSource(CallCenterMediaOnHoldSourceModify17 $mediaOnHoldInternalSource = null)
    {
        $this->mediaOnHoldInternalSource =  $mediaOnHoldInternalSource;
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
     * Contains a list of URLs for modify.
     */
    public function setWhisperMessageAudioUrlList(CallCenterAnnouncementURLListModify $whisperMessageAudioUrlList = null)
    {
        $this->whisperMessageAudioUrlList =  $whisperMessageAudioUrlList;
    }

    /**
     * Contains a list of URLs for modify.
     */
    public function getWhisperMessageAudioUrlList()
    {
        return (!$this->whisperMessageAudioUrlList) ?: $this->whisperMessageAudioUrlList->getValue();
    }

    /**
     * Contains a list of audio or video files to modify.
     */
    public function setWhisperMessageAudioFileList(CallCenterAnnouncementFileListModify $whisperMessageAudioFileList = null)
    {
        $this->whisperMessageAudioFileList =  $whisperMessageAudioFileList;
    }

    /**
     * Contains a list of audio or video files to modify.
     */
    public function getWhisperMessageAudioFileList()
    {
        return (!$this->whisperMessageAudioFileList) ?: $this->whisperMessageAudioFileList->getValue();
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
     * Contains a list of URLs for modify.
     */
    public function setWhisperMessageVideoUrlList(CallCenterAnnouncementURLListModify $whisperMessageVideoUrlList = null)
    {
        $this->whisperMessageVideoUrlList =  $whisperMessageVideoUrlList;
    }

    /**
     * Contains a list of URLs for modify.
     */
    public function getWhisperMessageVideoUrlList()
    {
        return (!$this->whisperMessageVideoUrlList) ?: $this->whisperMessageVideoUrlList->getValue();
    }

    /**
     * Contains a list of audio or video files to modify.
     */
    public function setWhisperMessageVideoFileList(CallCenterAnnouncementFileListModify $whisperMessageVideoFileList = null)
    {
        $this->whisperMessageVideoFileList =  $whisperMessageVideoFileList;
    }

    /**
     * Contains a list of audio or video files to modify.
     */
    public function getWhisperMessageVideoFileList()
    {
        return (!$this->whisperMessageVideoFileList) ?: $this->whisperMessageVideoFileList->getValue();
    }

    /**
     * Estimated Wait Message Options
     */
    public function setEstimatedWaitMessageOptionsModify(EstimatedWaitMessageOptionsModify $estimatedWaitMessageOptionsModify = null)
    {
        $this->estimatedWaitMessageOptionsModify =  $estimatedWaitMessageOptionsModify;
    }

    /**
     * Estimated Wait Message Options
     */
    public function getEstimatedWaitMessageOptionsModify()
    {
        return (!$this->estimatedWaitMessageOptionsModify) ?: $this->estimatedWaitMessageOptionsModify->getValue();
    }
}
