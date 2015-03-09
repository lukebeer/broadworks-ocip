<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceInstantConferencing; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceInstantConferencing\InstantConferencingSlideShowPassword;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceInstantConferencing\InstantConferencingRecordingCallId;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceInstantConferencing\InstantConferencingRecordingKey;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\UserId;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceInstantConferencing\UserInstantConferencingModifyConferenceRecordingSlideShowPasswordResponse;
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
    public    $name              = __CLASS__;
    protected $userId            = null;
    protected $recordingKey      = null;
    protected $recordingCallId   = null;
    protected $slideShowPassword = null;

    public function __construct(
         $userId,
          $recordingKey,
         $recordingCallId,
         $slideShowPassword = null
    ) {
        $this->setUserId($userId);
        $this->setRecordingKey($recordingKey);
        $this->setRecordingCallId($recordingCallId);
        $this->setSlideShowPassword($slideShowPassword);
    }

    /**
     * @return UserInstantConferencingModifyConferenceRecordingSlideShowPasswordResponse
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * A user id consists of a user-portion optionally followed by an @ sign and a domain name.
     *         If the domain is not specified, it is assumed to be the system default domain.
     *         The domain is required when adding normal users and virtual users, i.e. Auto Attendants,
     *         Hunt Groups, Call Centers....
     *         The domain must not be specified for system-level and service-provider-level administrators.
     */
    public function setUserId($userId = null)
    {
        $this->userId = ($userId InstanceOf UserId)
             ? $userId
             : new UserId($userId);
    }

    /**
     * A user id consists of a user-portion optionally followed by an @ sign and a domain name.
     *         If the domain is not specified, it is assumed to be the system default domain.
     *         The domain is required when adding normal users and virtual users, i.e. Auto Attendants,
     *         Hunt Groups, Call Centers....
     *         The domain must not be specified for system-level and service-provider-level administrators.
     */
    public function getUserId()
    {
        return (!$this->userId) ?: $this->userId->getValue();
    }

    /**
     * Identifier for conference recording.
     */
    public function setRecordingKey(InstantConferencingRecordingKey $recordingKey = null)
    {
        $this->recordingKey =  $recordingKey;
    }

    /**
     * Identifier for conference recording.
     */
    public function getRecordingKey()
    {
        return (!$this->recordingKey) ?: $this->recordingKey->getValue();
    }

    /**
     * Conference recording call Id.
     */
    public function setRecordingCallId($recordingCallId = null)
    {
        $this->recordingCallId = ($recordingCallId InstanceOf InstantConferencingRecordingCallId)
             ? $recordingCallId
             : new InstantConferencingRecordingCallId($recordingCallId);
    }

    /**
     * Conference recording call Id.
     */
    public function getRecordingCallId()
    {
        return (!$this->recordingCallId) ?: $this->recordingCallId->getValue();
    }

    /**
     * Conference slide show password.
     */
    public function setSlideShowPassword($slideShowPassword = null)
    {
        $this->slideShowPassword = ($slideShowPassword InstanceOf InstantConferencingSlideShowPassword)
             ? $slideShowPassword
             : new InstantConferencingSlideShowPassword($slideShowPassword);
    }

    /**
     * Conference slide show password.
     */
    public function getSlideShowPassword()
    {
        return (!$this->slideShowPassword) ?: $this->slideShowPassword->getValue();
    }
}
