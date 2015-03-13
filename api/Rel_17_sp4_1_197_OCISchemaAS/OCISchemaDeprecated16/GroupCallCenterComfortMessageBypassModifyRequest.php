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
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ExtendedMediaFileResource;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\UserId;
use Broadworks_OCIP\core\Builder\Types\PrimitiveType;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Modify a call center's comfort message bypass settings.
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class GroupCallCenterComfortMessageBypassModifyRequest extends ComplexType implements ComplexInterface
{
    public    $name                                     = 'GroupCallCenterComfortMessageBypassModifyRequest';
    protected $serviceUserId                            = null;
    protected $isActive                                 = null;
    protected $callWaitingAgeThresholdSeconds           = null;
    protected $playAnnouncementAfterRinging             = null;
    protected $ringTimeBeforePlayingAnnouncementSeconds = null;
    protected $audioMessageSelection                    = null;
    protected $audioFile                                = null;
    protected $videoMessageSelection                    = null;
    protected $videoFile                                = null;

    public function __construct(
         $serviceUserId,
         $isActive = null,
         $callWaitingAgeThresholdSeconds = null,
         $playAnnouncementAfterRinging = null,
         $ringTimeBeforePlayingAnnouncementSeconds = null,
         $audioMessageSelection = null,
         ExtendedMediaFileResource $audioFile = null,
         $videoMessageSelection = null,
         ExtendedMediaFileResource $videoFile = null
    ) {
        $this->setServiceUserId($serviceUserId);
        $this->setIsActive($isActive);
        $this->setCallWaitingAgeThresholdSeconds($callWaitingAgeThresholdSeconds);
        $this->setPlayAnnouncementAfterRinging($playAnnouncementAfterRinging);
        $this->setRingTimeBeforePlayingAnnouncementSeconds($ringTimeBeforePlayingAnnouncementSeconds);
        $this->setAudioMessageSelection($audioMessageSelection);
        $this->setAudioFile($audioFile);
        $this->setVideoMessageSelection($videoMessageSelection);
        $this->setVideoFile($videoFile);
    }

    /**
     * @return mixed $response
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * 
     */
    public function setServiceUserId($serviceUserId = null)
    {
        if (!$serviceUserId) return $this;
        $this->serviceUserId = ($serviceUserId InstanceOf UserId)
             ? $serviceUserId
             : new UserId($serviceUserId);
        $this->serviceUserId->setName('serviceUserId');
        return $this;
    }

    /**
     * 
     * @return UserId $serviceUserId
     */
    public function getServiceUserId()
    {
        return $this->serviceUserId->getValue();
    }

    /**
     * 
     */
    public function setIsActive($isActive = null)
    {
        if (!$isActive) return $this;
        $this->isActive = new PrimitiveType($isActive);
        $this->isActive->setName('isActive');
        return $this;
    }

    /**
     * 
     * @return boolean $isActive
     */
    public function getIsActive()
    {
        return $this->isActive->getValue();
    }

    /**
     * 
     */
    public function setCallWaitingAgeThresholdSeconds($callWaitingAgeThresholdSeconds = null)
    {
        if (!$callWaitingAgeThresholdSeconds) return $this;
        $this->callWaitingAgeThresholdSeconds = ($callWaitingAgeThresholdSeconds InstanceOf CallCenterComfortMessageBypassThresholdSeconds)
             ? $callWaitingAgeThresholdSeconds
             : new CallCenterComfortMessageBypassThresholdSeconds($callWaitingAgeThresholdSeconds);
        $this->callWaitingAgeThresholdSeconds->setName('callWaitingAgeThresholdSeconds');
        return $this;
    }

    /**
     * 
     * @return CallCenterComfortMessageBypassThresholdSeconds $callWaitingAgeThresholdSeconds
     */
    public function getCallWaitingAgeThresholdSeconds()
    {
        return $this->callWaitingAgeThresholdSeconds->getValue();
    }

    /**
     * 
     */
    public function setPlayAnnouncementAfterRinging($playAnnouncementAfterRinging = null)
    {
        if (!$playAnnouncementAfterRinging) return $this;
        $this->playAnnouncementAfterRinging = new PrimitiveType($playAnnouncementAfterRinging);
        $this->playAnnouncementAfterRinging->setName('playAnnouncementAfterRinging');
        return $this;
    }

    /**
     * 
     * @return boolean $playAnnouncementAfterRinging
     */
    public function getPlayAnnouncementAfterRinging()
    {
        return $this->playAnnouncementAfterRinging->getValue();
    }

    /**
     * 
     */
    public function setRingTimeBeforePlayingAnnouncementSeconds($ringTimeBeforePlayingAnnouncementSeconds = null)
    {
        if (!$ringTimeBeforePlayingAnnouncementSeconds) return $this;
        $this->ringTimeBeforePlayingAnnouncementSeconds = ($ringTimeBeforePlayingAnnouncementSeconds InstanceOf CallCenterRingTimeBeforePlayingComfortMessageBypassAnnouncementSeconds)
             ? $ringTimeBeforePlayingAnnouncementSeconds
             : new CallCenterRingTimeBeforePlayingComfortMessageBypassAnnouncementSeconds($ringTimeBeforePlayingAnnouncementSeconds);
        $this->ringTimeBeforePlayingAnnouncementSeconds->setName('ringTimeBeforePlayingAnnouncementSeconds');
        return $this;
    }

    /**
     * 
     * @return CallCenterRingTimeBeforePlayingComfortMessageBypassAnnouncementSeconds $ringTimeBeforePlayingAnnouncementSeconds
     */
    public function getRingTimeBeforePlayingAnnouncementSeconds()
    {
        return $this->ringTimeBeforePlayingAnnouncementSeconds->getValue();
    }

    /**
     * 
     */
    public function setAudioMessageSelection($audioMessageSelection = null)
    {
        if (!$audioMessageSelection) return $this;
        $this->audioMessageSelection = ($audioMessageSelection InstanceOf ExtendedFileResourceSelection)
             ? $audioMessageSelection
             : new ExtendedFileResourceSelection($audioMessageSelection);
        $this->audioMessageSelection->setName('audioMessageSelection');
        return $this;
    }

    /**
     * 
     * @return ExtendedFileResourceSelection $audioMessageSelection
     */
    public function getAudioMessageSelection()
    {
        return $this->audioMessageSelection->getValue();
    }

    /**
     * 
     */
    public function setAudioFile(ExtendedMediaFileResource $audioFile = null)
    {
        if (!$audioFile) return $this;
        $this->audioFile = $audioFile;
        $this->audioFile->setName('audioFile');
        return $this;
    }

    /**
     * 
     * @return ExtendedMediaFileResource $audioFile
     */
    public function getAudioFile()
    {
        return $this->audioFile;
    }

    /**
     * 
     */
    public function setVideoMessageSelection($videoMessageSelection = null)
    {
        if (!$videoMessageSelection) return $this;
        $this->videoMessageSelection = ($videoMessageSelection InstanceOf ExtendedFileResourceSelection)
             ? $videoMessageSelection
             : new ExtendedFileResourceSelection($videoMessageSelection);
        $this->videoMessageSelection->setName('videoMessageSelection');
        return $this;
    }

    /**
     * 
     * @return ExtendedFileResourceSelection $videoMessageSelection
     */
    public function getVideoMessageSelection()
    {
        return $this->videoMessageSelection->getValue();
    }

    /**
     * 
     */
    public function setVideoFile(ExtendedMediaFileResource $videoFile = null)
    {
        if (!$videoFile) return $this;
        $this->videoFile = $videoFile;
        $this->videoFile->setName('videoFile');
        return $this;
    }

    /**
     * 
     * @return ExtendedMediaFileResource $videoFile
     */
    public function getVideoFile()
    {
        return $this->videoFile;
    }
}
