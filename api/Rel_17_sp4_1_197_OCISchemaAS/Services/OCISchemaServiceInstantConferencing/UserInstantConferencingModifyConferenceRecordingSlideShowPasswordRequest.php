<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceInstantConferencing; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceInstantConferencing\InstantConferencingSlideShowPassword;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceInstantConferencing\InstantConferencingRecordingCallId;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceInstantConferencing\InstantConferencingRecordingKey;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\UserId;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Modify the conference recording slideshow password.
 *         The response is either SuccessResponse or ErrorResponse.
 */
class UserInstantConferencingModifyConferenceRecordingSlideShowPasswordRequest extends ComplexType implements ComplexInterface
{
    public    $name              = 'UserInstantConferencingModifyConferenceRecordingSlideShowPasswordRequest';
    protected $userId            = null;
    protected $recordingKey      = null;
    protected $recordingCallId   = null;
    protected $slideShowPassword = null;

    public function __construct(
         $userId,
         InstantConferencingRecordingKey $recordingKey,
         $recordingCallId,
         $slideShowPassword = null
    ) {
        $this->setUserId($userId);
        $this->setRecordingKey($recordingKey);
        $this->setRecordingCallId($recordingCallId);
        $this->setSlideShowPassword($slideShowPassword);
    }

    /**
     * @return 
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
        if (!$userId) return $this;
        $this->userId = ($userId InstanceOf UserId)
             ? $userId
             : new UserId($userId);
        $this->userId->setName('userId');
        return $this;
    }

    /**
     * 
     * @return UserId
     */
    public function getUserId()
    {
        return $this->userId->getValue();
    }

    /**
     * 
     */
    public function setRecordingKey(InstantConferencingRecordingKey $recordingKey = null)
    {
        if (!$recordingKey) return $this;
        $this->recordingKey = $recordingKey;
        $this->recordingKey->setName('recordingKey');
        return $this;
    }

    /**
     * 
     * @return InstantConferencingRecordingKey
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
        if (!$recordingCallId) return $this;
        $this->recordingCallId = ($recordingCallId InstanceOf InstantConferencingRecordingCallId)
             ? $recordingCallId
             : new InstantConferencingRecordingCallId($recordingCallId);
        $this->recordingCallId->setName('recordingCallId');
        return $this;
    }

    /**
     * 
     * @return InstantConferencingRecordingCallId
     */
    public function getRecordingCallId()
    {
        return $this->recordingCallId->getValue();
    }

    /**
     * 
     */
    public function setSlideShowPassword($slideShowPassword = null)
    {
        if (!$slideShowPassword) return $this;
        $this->slideShowPassword = ($slideShowPassword InstanceOf InstantConferencingSlideShowPassword)
             ? $slideShowPassword
             : new InstantConferencingSlideShowPassword($slideShowPassword);
        $this->slideShowPassword->setName('slideShowPassword');
        return $this;
    }

    /**
     * 
     * @return InstantConferencingSlideShowPassword
     */
    public function getSlideShowPassword()
    {
        return $this->slideShowPassword->getValue();
    }
}
