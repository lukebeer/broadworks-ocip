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
    public    $name                                      = __CLASS__;
    protected $serviceUserId                             = null;
    protected $isActive                                  = null;
    protected $callWaitingAgeThresholdSeconds            = null;
    protected $playAnnouncementAfterRinging              = null;
    protected $ringTimeBeforePlayingAnnouncementSeconds  = null;
    protected $audioMessageSelection                     = null;
    protected $audioUrlList                              = null;
    protected $audioFileList                             = null;
    protected $videoMessageSelection                     = null;
    protected $videoUrlList                              = null;
    protected $videoFileList                             = null;

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

    public function setIsActive(xs:boolean $isActive = null)
    {
    }

    public function getIsActive()
    {
        return (!$this->isActive) ?: $this->isActive->value();
    }

    public function setCallWaitingAgeThresholdSeconds($callWaitingAgeThresholdSeconds = null)
    {
        $this->callWaitingAgeThresholdSeconds = ($callWaitingAgeThresholdSeconds InstanceOf CallCenterComfortMessageBypassThresholdSeconds)
             ? $callWaitingAgeThresholdSeconds
             : new CallCenterComfortMessageBypassThresholdSeconds($callWaitingAgeThresholdSeconds);
    }

    public function getCallWaitingAgeThresholdSeconds()
    {
        return (!$this->callWaitingAgeThresholdSeconds) ?: $this->callWaitingAgeThresholdSeconds->value();
    }

    public function setPlayAnnouncementAfterRinging(xs:boolean $playAnnouncementAfterRinging = null)
    {
    }

    public function getPlayAnnouncementAfterRinging()
    {
        return (!$this->playAnnouncementAfterRinging) ?: $this->playAnnouncementAfterRinging->value();
    }

    public function setRingTimeBeforePlayingAnnouncementSeconds($ringTimeBeforePlayingAnnouncementSeconds = null)
    {
        $this->ringTimeBeforePlayingAnnouncementSeconds = ($ringTimeBeforePlayingAnnouncementSeconds InstanceOf CallCenterRingTimeBeforePlayingComfortMessageBypassAnnouncementSeconds)
             ? $ringTimeBeforePlayingAnnouncementSeconds
             : new CallCenterRingTimeBeforePlayingComfortMessageBypassAnnouncementSeconds($ringTimeBeforePlayingAnnouncementSeconds);
    }

    public function getRingTimeBeforePlayingAnnouncementSeconds()
    {
        return (!$this->ringTimeBeforePlayingAnnouncementSeconds) ?: $this->ringTimeBeforePlayingAnnouncementSeconds->value();
    }

    public function setAudioMessageSelection($audioMessageSelection = null)
    {
        $this->audioMessageSelection = ($audioMessageSelection InstanceOf ExtendedFileResourceSelection)
             ? $audioMessageSelection
             : new ExtendedFileResourceSelection($audioMessageSelection);
    }

    public function getAudioMessageSelection()
    {
        return (!$this->audioMessageSelection) ?: $this->audioMessageSelection->value();
    }

    public function setAudioUrlList(CallCenterAnnouncementURLListModify $audioUrlList = null)
    {
    }

    public function getAudioUrlList()
    {
        return (!$this->audioUrlList) ?: $this->audioUrlList->value();
    }

    public function setAudioFileList(CallCenterAnnouncementFileListModify $audioFileList = null)
    {
    }

    public function getAudioFileList()
    {
        return (!$this->audioFileList) ?: $this->audioFileList->value();
    }

    public function setVideoMessageSelection($videoMessageSelection = null)
    {
        $this->videoMessageSelection = ($videoMessageSelection InstanceOf ExtendedFileResourceSelection)
             ? $videoMessageSelection
             : new ExtendedFileResourceSelection($videoMessageSelection);
    }

    public function getVideoMessageSelection()
    {
        return (!$this->videoMessageSelection) ?: $this->videoMessageSelection->value();
    }

    public function setVideoUrlList(CallCenterAnnouncementURLListModify $videoUrlList = null)
    {
    }

    public function getVideoUrlList()
    {
        return (!$this->videoUrlList) ?: $this->videoUrlList->value();
    }

    public function setVideoFileList(CallCenterAnnouncementFileListModify $videoFileList = null)
    {
    }

    public function getVideoFileList()
    {
        return (!$this->videoFileList) ?: $this->videoFileList->value();
    }
}
