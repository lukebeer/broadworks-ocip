<?php
/**
 * This file is part of http://github.com/LukeBeer/BroadworksOCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceInstantConferencing; 

use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceInstantConferencing\InstantConferencingSlideShowPassword;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceInstantConferencing\InstantConferencingRecordingCallId;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceInstantConferencing\InstantConferencingRecordingKey;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\UserId;
use BroadworksOCIP\Builder\Types\ComplexInterface;
use BroadworksOCIP\Builder\Types\ComplexType;
use BroadworksOCIP\Response\ResponseOutput;
use BroadworksOCIP\Client\Client;


/**
 * Modify the conference recording slideshow password.
 *         The response is either SuccessResponse or ErrorResponse.
 */
class UserInstantConferencingModifyConferenceRecordingSlideShowPasswordRequest extends ComplexType implements ComplexInterface
{
    public    $elementName = 'UserInstantConferencingModifyConferenceRecordingSlideShowPasswordRequest';
    protected $userId;
    protected $recordingKey;
    protected $recordingCallId;
    protected $slideShowPassword;

    public function __construct(
         $userId = '',
         $recordingKey = '',
         $recordingCallId = '',
         $slideShowPassword = null
    ) {
        $this->setUserId($userId);
        $this->setRecordingKey($recordingKey);
        $this->setRecordingCallId($recordingCallId);
        $this->setSlideShowPassword($slideShowPassword);
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
    public function setUserId($userId = null)
    {
        $this->userId = ($userId InstanceOf UserId)
             ? $userId
             : new UserId($userId);
        $this->userId->setElementName('userId');
        return $this;
    }

    /**
     * 
     * @return UserId $userId
     */
    public function getUserId()
    {
        return ($this->userId)
            ? $this->userId->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setRecordingKey(InstantConferencingRecordingKey $recordingKey = null)
    {
        $this->recordingKey = ($recordingKey InstanceOf InstantConferencingRecordingKey)
             ? $recordingKey
             : new InstantConferencingRecordingKey($recordingKey);
        $this->recordingKey->setElementName('recordingKey');
        return $this;
    }

    /**
     * 
     * @return InstantConferencingRecordingKey $recordingKey
     */
    public function getRecordingKey()
    {
        return $this->recordingKey;
    }

    /**
     * 
     */
    public function setRecordingCallId($recordingCallId = null)
    {
        $this->recordingCallId = ($recordingCallId InstanceOf InstantConferencingRecordingCallId)
             ? $recordingCallId
             : new InstantConferencingRecordingCallId($recordingCallId);
        $this->recordingCallId->setElementName('recordingCallId');
        return $this;
    }

    /**
     * 
     * @return InstantConferencingRecordingCallId $recordingCallId
     */
    public function getRecordingCallId()
    {
        return ($this->recordingCallId)
            ? $this->recordingCallId->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setSlideShowPassword($slideShowPassword = null)
    {
        $this->slideShowPassword = ($slideShowPassword InstanceOf InstantConferencingSlideShowPassword)
             ? $slideShowPassword
             : new InstantConferencingSlideShowPassword($slideShowPassword);
        $this->slideShowPassword->setElementName('slideShowPassword');
        return $this;
    }

    /**
     * 
     * @return InstantConferencingSlideShowPassword $slideShowPassword
     */
    public function getSlideShowPassword()
    {
        return ($this->slideShowPassword)
            ? $this->slideShowPassword->getElementValue()
            : null;
    }
}
