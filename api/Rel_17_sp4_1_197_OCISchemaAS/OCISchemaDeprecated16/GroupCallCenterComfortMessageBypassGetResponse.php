<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated16; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCallCenter\CallCenterRingTimeBeforePlayingComfortMessageBypassAnnouncementSeconds;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCallCenter\CallCenterComfortMessageBypassThresholdSeconds;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ExtendedFileResourceSelection;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\FileDescription;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\MediaFileType;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\URL;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
     * Response to the GroupCallCenterComfortMessageBypassGetRequest.
 */
class GroupCallCenterComfortMessageBypassGetResponse extends ComplexType implements ComplexInterface
{
    public    $name                                     = __CLASS__;
    protected $isActive                                 = null;
    protected $callWaitingAgeThresholdSeconds           = null;
    protected $playAnnouncementAfterRinging             = null;
    protected $ringTimeBeforePlayingAnnouncementSeconds = null;
    protected $audioMessageSelection                    = null;
    protected $audioFileUrl                             = null;
    protected $audioFileDescription                     = null;
    protected $audioMediaType                           = null;
    protected $videoMessageSelection                    = null;
    protected $videoFileUrl                             = null;
    protected $videoFileDescription                     = null;
    protected $videoMediaType                           = null;


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
     * URL.
     */
    public function setAudioFileUrl($audioFileUrl = null)
    {
        $this->audioFileUrl = ($audioFileUrl InstanceOf URL)
             ? $audioFileUrl
             : new URL($audioFileUrl);
    }

    /**
     * URL.
     */
    public function getAudioFileUrl()
    {
        return (!$this->audioFileUrl) ?: $this->audioFileUrl->getValue();
    }

    /**
     * Description of a file resource.
     */
    public function setAudioFileDescription($audioFileDescription = null)
    {
        $this->audioFileDescription = ($audioFileDescription InstanceOf FileDescription)
             ? $audioFileDescription
             : new FileDescription($audioFileDescription);
    }

    /**
     * Description of a file resource.
     */
    public function getAudioFileDescription()
    {
        return (!$this->audioFileDescription) ?: $this->audioFileDescription->getValue();
    }

    /**
     * The media type of media data.
     *         WMA - Windows Media Audio file
     *         WAV - A WAV file
     *         3GP - A 3GP file
     *         MOV - A MOV file using a H.263 or H.264 codec.
     */
    public function setAudioMediaType($audioMediaType = null)
    {
        $this->audioMediaType = ($audioMediaType InstanceOf MediaFileType)
             ? $audioMediaType
             : new MediaFileType($audioMediaType);
    }

    /**
     * The media type of media data.
     *         WMA - Windows Media Audio file
     *         WAV - A WAV file
     *         3GP - A 3GP file
     *         MOV - A MOV file using a H.263 or H.264 codec.
     */
    public function getAudioMediaType()
    {
        return (!$this->audioMediaType) ?: $this->audioMediaType->getValue();
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
     * URL.
     */
    public function setVideoFileUrl($videoFileUrl = null)
    {
        $this->videoFileUrl = ($videoFileUrl InstanceOf URL)
             ? $videoFileUrl
             : new URL($videoFileUrl);
    }

    /**
     * URL.
     */
    public function getVideoFileUrl()
    {
        return (!$this->videoFileUrl) ?: $this->videoFileUrl->getValue();
    }

    /**
     * Description of a file resource.
     */
    public function setVideoFileDescription($videoFileDescription = null)
    {
        $this->videoFileDescription = ($videoFileDescription InstanceOf FileDescription)
             ? $videoFileDescription
             : new FileDescription($videoFileDescription);
    }

    /**
     * Description of a file resource.
     */
    public function getVideoFileDescription()
    {
        return (!$this->videoFileDescription) ?: $this->videoFileDescription->getValue();
    }

    /**
     * The media type of media data.
     *         WMA - Windows Media Audio file
     *         WAV - A WAV file
     *         3GP - A 3GP file
     *         MOV - A MOV file using a H.263 or H.264 codec.
     */
    public function setVideoMediaType($videoMediaType = null)
    {
        $this->videoMediaType = ($videoMediaType InstanceOf MediaFileType)
             ? $videoMediaType
             : new MediaFileType($videoMediaType);
    }

    /**
     * The media type of media data.
     *         WMA - Windows Media Audio file
     *         WAV - A WAV file
     *         3GP - A 3GP file
     *         MOV - A MOV file using a H.263 or H.264 codec.
     */
    public function getVideoMediaType()
    {
        return (!$this->videoMediaType) ?: $this->videoMediaType->getValue();
    }
}
