<?php
/**
 * This file is part of http://github.com/LukeBeer/BroadworksOCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated16; 

use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCallCenter\CallCenterRingTimeBeforePlayingComfortMessageBypassAnnouncementSeconds;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCallCenter\CallCenterComfortMessageBypassThresholdSeconds;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ExtendedFileResourceSelection;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ExtendedMediaFileResource;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\UserId;
use BroadworksOCIP\Builder\Types\PrimitiveType;
use BroadworksOCIP\Builder\Types\ComplexInterface;
use BroadworksOCIP\Builder\Types\ComplexType;
use BroadworksOCIP\Response\ResponseOutput;
use BroadworksOCIP\Client\Client;


/**
 * Modify a call center's comfort message bypass settings.
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class GroupCallCenterComfortMessageBypassModifyRequest extends ComplexType implements ComplexInterface
{
    public    $elementName = 'GroupCallCenterComfortMessageBypassModifyRequest';
    protected $serviceUserId;
    protected $isActive;
    protected $callWaitingAgeThresholdSeconds;
    protected $playAnnouncementAfterRinging;
    protected $ringTimeBeforePlayingAnnouncementSeconds;
    protected $audioMessageSelection;
    protected $audioFile;
    protected $videoMessageSelection;
    protected $videoFile;

    public function __construct(
         $serviceUserId = '',
         $isActive = null,
         $callWaitingAgeThresholdSeconds = null,
         $playAnnouncementAfterRinging = null,
         $ringTimeBeforePlayingAnnouncementSeconds = null,
         $audioMessageSelection = null,
         $audioFile = null,
         $videoMessageSelection = null,
         $videoFile = null
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
        $this->serviceUserId = ($serviceUserId InstanceOf UserId)
             ? $serviceUserId
             : new UserId($serviceUserId);
        $this->serviceUserId->setElementName('serviceUserId');
        return $this;
    }

    /**
     * 
     * @return UserId $serviceUserId
     */
    public function getServiceUserId()
    {
        return ($this->serviceUserId)
            ? $this->serviceUserId->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setIsActive($isActive = null)
    {
        $this->isActive = new PrimitiveType($isActive);
        $this->isActive->setElementName('isActive');
        return $this;
    }

    /**
     * 
     * @return boolean $isActive
     */
    public function getIsActive()
    {
        return ($this->isActive)
            ? $this->isActive->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setCallWaitingAgeThresholdSeconds($callWaitingAgeThresholdSeconds = null)
    {
        $this->callWaitingAgeThresholdSeconds = ($callWaitingAgeThresholdSeconds InstanceOf CallCenterComfortMessageBypassThresholdSeconds)
             ? $callWaitingAgeThresholdSeconds
             : new CallCenterComfortMessageBypassThresholdSeconds($callWaitingAgeThresholdSeconds);
        $this->callWaitingAgeThresholdSeconds->setElementName('callWaitingAgeThresholdSeconds');
        return $this;
    }

    /**
     * 
     * @return CallCenterComfortMessageBypassThresholdSeconds $callWaitingAgeThresholdSeconds
     */
    public function getCallWaitingAgeThresholdSeconds()
    {
        return ($this->callWaitingAgeThresholdSeconds)
            ? $this->callWaitingAgeThresholdSeconds->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setPlayAnnouncementAfterRinging($playAnnouncementAfterRinging = null)
    {
        $this->playAnnouncementAfterRinging = new PrimitiveType($playAnnouncementAfterRinging);
        $this->playAnnouncementAfterRinging->setElementName('playAnnouncementAfterRinging');
        return $this;
    }

    /**
     * 
     * @return boolean $playAnnouncementAfterRinging
     */
    public function getPlayAnnouncementAfterRinging()
    {
        return ($this->playAnnouncementAfterRinging)
            ? $this->playAnnouncementAfterRinging->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setRingTimeBeforePlayingAnnouncementSeconds($ringTimeBeforePlayingAnnouncementSeconds = null)
    {
        $this->ringTimeBeforePlayingAnnouncementSeconds = ($ringTimeBeforePlayingAnnouncementSeconds InstanceOf CallCenterRingTimeBeforePlayingComfortMessageBypassAnnouncementSeconds)
             ? $ringTimeBeforePlayingAnnouncementSeconds
             : new CallCenterRingTimeBeforePlayingComfortMessageBypassAnnouncementSeconds($ringTimeBeforePlayingAnnouncementSeconds);
        $this->ringTimeBeforePlayingAnnouncementSeconds->setElementName('ringTimeBeforePlayingAnnouncementSeconds');
        return $this;
    }

    /**
     * 
     * @return CallCenterRingTimeBeforePlayingComfortMessageBypassAnnouncementSeconds $ringTimeBeforePlayingAnnouncementSeconds
     */
    public function getRingTimeBeforePlayingAnnouncementSeconds()
    {
        return ($this->ringTimeBeforePlayingAnnouncementSeconds)
            ? $this->ringTimeBeforePlayingAnnouncementSeconds->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setAudioMessageSelection($audioMessageSelection = null)
    {
        $this->audioMessageSelection = ($audioMessageSelection InstanceOf ExtendedFileResourceSelection)
             ? $audioMessageSelection
             : new ExtendedFileResourceSelection($audioMessageSelection);
        $this->audioMessageSelection->setElementName('audioMessageSelection');
        return $this;
    }

    /**
     * 
     * @return ExtendedFileResourceSelection $audioMessageSelection
     */
    public function getAudioMessageSelection()
    {
        return ($this->audioMessageSelection)
            ? $this->audioMessageSelection->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setAudioFile(ExtendedMediaFileResource $audioFile = null)
    {
        $this->audioFile = ($audioFile InstanceOf ExtendedMediaFileResource)
             ? $audioFile
             : new ExtendedMediaFileResource($audioFile);
        $this->audioFile->setElementName('audioFile');
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
        $this->videoMessageSelection = ($videoMessageSelection InstanceOf ExtendedFileResourceSelection)
             ? $videoMessageSelection
             : new ExtendedFileResourceSelection($videoMessageSelection);
        $this->videoMessageSelection->setElementName('videoMessageSelection');
        return $this;
    }

    /**
     * 
     * @return ExtendedFileResourceSelection $videoMessageSelection
     */
    public function getVideoMessageSelection()
    {
        return ($this->videoMessageSelection)
            ? $this->videoMessageSelection->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setVideoFile(ExtendedMediaFileResource $videoFile = null)
    {
        $this->videoFile = ($videoFile InstanceOf ExtendedMediaFileResource)
             ? $videoFile
             : new ExtendedMediaFileResource($videoFile);
        $this->videoFile->setElementName('videoFile');
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
