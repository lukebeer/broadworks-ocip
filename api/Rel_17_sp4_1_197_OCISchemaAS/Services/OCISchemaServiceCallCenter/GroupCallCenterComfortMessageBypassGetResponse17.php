<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceCallCenter; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCallCenter\CallCenterRingTimeBeforePlayingComfortMessageBypassAnnouncementSeconds;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCallCenter\CallCenterComfortMessageBypassThresholdSeconds;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\CallCenterAnnouncementMediaFileTypeList;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\CallCenterAnnouncementDescriptionList;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ExtendedFileResourceSelection;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\CallCenterAnnouncementURLList;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
     * Response to the GroupCallCenterComfortMessageBypassGetRequest17.
 */
class GroupCallCenterComfortMessageBypassGetResponse17 extends ComplexType implements ComplexInterface
{
    public    $name                                     = __CLASS__;
    protected $isActive                                 = null;
    protected $callWaitingAgeThresholdSeconds           = null;
    protected $playAnnouncementAfterRinging             = null;
    protected $ringTimeBeforePlayingAnnouncementSeconds = null;
    protected $audioMessageSelection                    = null;
    protected $audioUrlList                             = null;
    protected $audioFileList                            = null;
    protected $audioMediaTypeList                       = null;
    protected $videoMessageSelection                    = null;
    protected $videoUrlList                             = null;
    protected $videoFileList                            = null;
    protected $videoMediaTypeList                       = null;


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
     * Call center comfort message bypass threshold. This is the maximum estimated wait time to allow 
     *         bypassing the comfort message.
     */
    public function setCallWaitingAgeThresholdSeconds($callWaitingAgeThresholdSeconds = null)
    {
        $this->callWaitingAgeThresholdSeconds = ($callWaitingAgeThresholdSeconds InstanceOf CallCenterComfortMessageBypassThresholdSeconds)
             ? $callWaitingAgeThresholdSeconds
             : new CallCenterComfortMessageBypassThresholdSeconds($callWaitingAgeThresholdSeconds);
    }

    /**
     * Call center comfort message bypass threshold. This is the maximum estimated wait time to allow 
     *         bypassing the comfort message.
     */
    public function getCallWaitingAgeThresholdSeconds()
    {
        return (!$this->callWaitingAgeThresholdSeconds) ?: $this->callWaitingAgeThresholdSeconds->getValue();
    }

    /**
     * 
     */
    public function setPlayAnnouncementAfterRinging($playAnnouncementAfterRinging = null)
    {
        $this->playAnnouncementAfterRinging = (boolean) $playAnnouncementAfterRinging;
    }

    /**
     * 
     */
    public function getPlayAnnouncementAfterRinging()
    {
        return (!$this->playAnnouncementAfterRinging) ?: $this->playAnnouncementAfterRinging->getValue();
    }

    /**
     * Call center ring time before playing comfort message bypass announcement.
     */
    public function setRingTimeBeforePlayingAnnouncementSeconds($ringTimeBeforePlayingAnnouncementSeconds = null)
    {
        $this->ringTimeBeforePlayingAnnouncementSeconds = ($ringTimeBeforePlayingAnnouncementSeconds InstanceOf CallCenterRingTimeBeforePlayingComfortMessageBypassAnnouncementSeconds)
             ? $ringTimeBeforePlayingAnnouncementSeconds
             : new CallCenterRingTimeBeforePlayingComfortMessageBypassAnnouncementSeconds($ringTimeBeforePlayingAnnouncementSeconds);
    }

    /**
     * Call center ring time before playing comfort message bypass announcement.
     */
    public function getRingTimeBeforePlayingAnnouncementSeconds()
    {
        return (!$this->ringTimeBeforePlayingAnnouncementSeconds) ?: $this->ringTimeBeforePlayingAnnouncementSeconds->getValue();
    }

    /**
     * Choices for extended file resource usage.
     */
    public function setAudioMessageSelection($audioMessageSelection = null)
    {
        $this->audioMessageSelection = ($audioMessageSelection InstanceOf ExtendedFileResourceSelection)
             ? $audioMessageSelection
             : new ExtendedFileResourceSelection($audioMessageSelection);
    }

    /**
     * Choices for extended file resource usage.
     */
    public function getAudioMessageSelection()
    {
        return (!$this->audioMessageSelection) ?: $this->audioMessageSelection->getValue();
    }

    /**
     * Contains list of urls
     */
    public function setAudioUrlList(CallCenterAnnouncementURLList $audioUrlList = null)
    {
        $this->audioUrlList =  $audioUrlList;
    }

    /**
     * Contains list of urls
     */
    public function getAudioUrlList()
    {
        return (!$this->audioUrlList) ?: $this->audioUrlList->getValue();
    }

    /**
     * Contains list of file descriptions for audio or video files
     */
    public function setAudioFileList(CallCenterAnnouncementDescriptionList $audioFileList = null)
    {
        $this->audioFileList =  $audioFileList;
    }

    /**
     * Contains list of file descriptions for audio or video files
     */
    public function getAudioFileList()
    {
        return (!$this->audioFileList) ?: $this->audioFileList->getValue();
    }

    /**
     * Contains list of file media types for audio or video files
     */
    public function setAudioMediaTypeList(CallCenterAnnouncementMediaFileTypeList $audioMediaTypeList = null)
    {
        $this->audioMediaTypeList =  $audioMediaTypeList;
    }

    /**
     * Contains list of file media types for audio or video files
     */
    public function getAudioMediaTypeList()
    {
        return (!$this->audioMediaTypeList) ?: $this->audioMediaTypeList->getValue();
    }

    /**
     * Choices for extended file resource usage.
     */
    public function setVideoMessageSelection($videoMessageSelection = null)
    {
        $this->videoMessageSelection = ($videoMessageSelection InstanceOf ExtendedFileResourceSelection)
             ? $videoMessageSelection
             : new ExtendedFileResourceSelection($videoMessageSelection);
    }

    /**
     * Choices for extended file resource usage.
     */
    public function getVideoMessageSelection()
    {
        return (!$this->videoMessageSelection) ?: $this->videoMessageSelection->getValue();
    }

    /**
     * Contains list of urls
     */
    public function setVideoUrlList(CallCenterAnnouncementURLList $videoUrlList = null)
    {
        $this->videoUrlList =  $videoUrlList;
    }

    /**
     * Contains list of urls
     */
    public function getVideoUrlList()
    {
        return (!$this->videoUrlList) ?: $this->videoUrlList->getValue();
    }

    /**
     * Contains list of file descriptions for audio or video files
     */
    public function setVideoFileList(CallCenterAnnouncementDescriptionList $videoFileList = null)
    {
        $this->videoFileList =  $videoFileList;
    }

    /**
     * Contains list of file descriptions for audio or video files
     */
    public function getVideoFileList()
    {
        return (!$this->videoFileList) ?: $this->videoFileList->getValue();
    }

    /**
     * Contains list of file media types for audio or video files
     */
    public function setVideoMediaTypeList(CallCenterAnnouncementMediaFileTypeList $videoMediaTypeList = null)
    {
        $this->videoMediaTypeList =  $videoMediaTypeList;
    }

    /**
     * Contains list of file media types for audio or video files
     */
    public function getVideoMediaTypeList()
    {
        return (!$this->videoMediaTypeList) ?: $this->videoMediaTypeList->getValue();
    }
}
