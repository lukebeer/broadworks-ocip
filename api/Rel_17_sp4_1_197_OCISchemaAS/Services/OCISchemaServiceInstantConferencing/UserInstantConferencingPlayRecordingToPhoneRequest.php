<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceInstantConferencing; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\UserId;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\InstantConferencingRecordingKey;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\OutgoingDNorSIPURI;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Play a recording to a specified phone.
 *         The response is either SuccessResponse or ErrorResponse.
 */
class UserInstantConferencingPlayRecordingToPhoneRequest extends ComplexType implements ComplexInterface
{
    public    $name = __CLASS__;

    public function __construct(
             $userId,
             $recordingKey,
             $playBackPhoneNumber
    ) {
        $this->userId              = new UserId($userId);
        $this->recordingKey        = $recordingKey;
        $this->playBackPhoneNumber = new OutgoingDNorSIPURI($playBackPhoneNumber);
        $this->args                = func_get_args();
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

    public function setPlayBackPhoneNumber($playBackPhoneNumber)
    {
        $playBackPhoneNumber and $this->playBackPhoneNumber = new OutgoingDNorSIPURI($playBackPhoneNumber);
    }

    public function getPlayBackPhoneNumber()
    {
        return (!$this->playBackPhoneNumber) ?: $this->playBackPhoneNumber->value();
    }
}
