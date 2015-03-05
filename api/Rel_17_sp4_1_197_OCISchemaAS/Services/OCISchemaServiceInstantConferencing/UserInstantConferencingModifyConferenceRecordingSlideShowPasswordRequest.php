<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceInstantConferencing; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\UserId;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\InstantConferencingRecordingKey;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\InstantConferencingRecordingCallId;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\InstantConferencingSlideShowPassword;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Modify the conference recording slideshow password.
 *         The response is either SuccessResponse or ErrorResponse.
 */
class UserInstantConferencingModifyConferenceRecordingSlideShowPasswordRequest extends ComplexType implements ComplexInterface
{
    public    $name = __CLASS__;

    public function __construct(
             $userId,
             $recordingKey,
             $recordingCallId,
             $slideShowPassword=null
    ) {
        $this->userId            = new UserId($userId);
        $this->recordingKey      = $recordingKey;
        $this->recordingCallId   = $recordingCallId;
        $this->slideShowPassword = $slideShowPassword;
        $this->args              = func_get_args();
    }

    public function setUserId($userId)
    {
        $userId and $this->userId = new UserId($userId);
    }

    public function getUserId()
    {
        return (!$this->userId) ?: $this->userId->value();
    }

    public function setRecordingKey($recordingKey)
    {
        $recordingKey and $this->recordingKey = new InstantConferencingRecordingKey($recordingKey);
    }

    public function getRecordingKey()
    {
        return (!$this->recordingKey) ?: $this->recordingKey->value();
    }

    public function setRecordingCallId($recordingCallId)
    {
        $recordingCallId and $this->recordingCallId = new InstantConferencingRecordingCallId($recordingCallId);
    }

    public function getRecordingCallId()
    {
        return (!$this->recordingCallId) ?: $this->recordingCallId->value();
    }

    public function setSlideShowPassword($slideShowPassword)
    {
        $slideShowPassword and $this->slideShowPassword = new InstantConferencingSlideShowPassword($slideShowPassword);
    }

    public function getSlideShowPassword()
    {
        return (!$this->slideShowPassword) ?: $this->slideShowPassword->value();
    }
}
