<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceCallCenter; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCallCenter\CallCenterRingTimeBeforePlayingComfortMessageBypassAnnouncementSeconds;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCallCenter\CallCenterComfortMessageBypassThresholdSeconds;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\CallCenterAnnouncementFileListModify;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\CallCenterAnnouncementURLListModify;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ExtendedFileResourceSelection;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\UserId;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
     * Modify a call center's comfort message bypass settings.
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class GroupCallCenterComfortMessageBypassModifyRequest17 extends ComplexType implements ComplexInterface
{
    public    $name                                     = __CLASS__;
    protected $serviceUserId                            = null;
    protected $isActive                                 = null;
    protected $callWaitingAgeThresholdSeconds           = null;
    protected $playAnnouncementAfterRinging             = null;
    protected $ringTimeBeforePlayingAnnouncementSeconds = null;
    protected $audioMessageSelection                    = null;
    protected $audioUrlList                             = null;
    protected $audioFileList                            = null;
    protected $videoMessageSelection                    = null;
    protected $videoUrlList                             = null;
    protected $videoFileList                            = null;

    public function __construct(
         $serviceUserId,
         $isActive = null,
         $callWaitingAgeThresholdSeconds = null,
         $playAnnouncementAfterRinging = null,
         $ringTimeBeforePlayingAnnouncementSeconds = null,
         $audioMessageSelection = null,
         CallCenterAnnouncementURLListModify $audioUrlList = null,
         CallCenterAnnouncementFileListModify $audioFileList = null,
         $videoMessageSelection = null,
         CallCenterAnnouncementURLListModify $videoUrlList = null,
         CallCenterAnnouncementFileListModify $videoFileList = null
    ) {
        $this->setServiceUserId($serviceUserId);
        $this->setIsActive($isActive);
        $this->setCallWaitingAgeThresholdSeconds($callWaitingAgeThresholdSeconds);
        $this->setPlayAnnouncementAfterRinging($playAnnouncementAfterRinging);
        $this->setRingTimeBeforePlayingAnnouncementSeconds($ringTimeBeforePlayingAnnouncementSeconds);
        $this->setAudioMessageSelection($audioMessageSelection);
        $this->setAudioUrlList($audioUrlList);
        $this->setAudioFileList($audioFileList);
        $this->setVideoMessageSelection($videoMessageSelection);
        $this->setVideoUrlList($videoUrlList);
        $this->setVideoFileList($videoFileList);
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
     * Contains a list of URLs for modify.
     */
    public function setAudioUrlList(CallCenterAnnouncementURLListModify $audioUrlList = null)
    {
        $this->audioUrlList = CallCenterAnnouncementURLListModify $audioUrlList;
    }

    /**
     * Contains a list of URLs for modify.
     */
    public function getAudioUrlList()
    {
        return (!$this->audioUrlList) ?: $this->audioUrlList->getValue();
    }

    /**
     * Contains a list of audio or video files to modify.
     */
    public function setAudioFileList(CallCenterAnnouncementFileListModify $audioFileList = null)
    {
        $this->audioFileList = CallCenterAnnouncementFileListModify $audioFileList;
    }

    /**
     * Contains a list of audio or video files to modify.
     */
    public function getAudioFileList()
    {
        return (!$this->audioFileList) ?: $this->audioFileList->getValue();
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
     * Contains a list of URLs for modify.
     */
    public function setVideoUrlList(CallCenterAnnouncementURLListModify $videoUrlList = null)
    {
        $this->videoUrlList = CallCenterAnnouncementURLListModify $videoUrlList;
    }

    /**
     * Contains a list of URLs for modify.
     */
    public function getVideoUrlList()
    {
        return (!$this->videoUrlList) ?: $this->videoUrlList->getValue();
    }

    /**
     * Contains a list of audio or video files to modify.
     */
    public function setVideoFileList(CallCenterAnnouncementFileListModify $videoFileList = null)
    {
        $this->videoFileList = CallCenterAnnouncementFileListModify $videoFileList;
    }

    /**
     * Contains a list of audio or video files to modify.
     */
    public function getVideoFileList()
    {
        return (!$this->videoFileList) ?: $this->videoFileList->getValue();
    }
}
