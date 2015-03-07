<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceInstantConferencing; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceInstantConferencing\InstantConferencingRecordingKey;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\OutgoingDNorSIPURI;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\UserId;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Play a recording to a specified phone.
 *         The response is either SuccessResponse or ErrorResponse.
 */
class UserInstantConferencingPlayRecordingToPhoneRequest extends ComplexType implements ComplexInterface
{
    public    $name                 = __CLASS__;
    protected $userId               = null;
    protected $recordingKey         = null;
    protected $playBackPhoneNumber  = null;

    public function __construct(
         $userId,
         InstantConferencingRecordingKey $recordingKey,
         $playBackPhoneNumber
    ) {
        $this->setUserId($userId);
        $this->setRecordingKey($recordingKey);
        $this->setPlayBackPhoneNumber($playBackPhoneNumber);
    }

    public function setUserId($userId = null)
    {
        $this->userId = ($userId InstanceOf UserId)
             ? $userId
             : new UserId($userId);
    }

    public function getUserId()
    {
        return (!$this->userId) ?: $this->userId->value();
    }

    public function setRecordingKey(InstantConferencingRecordingKey $recordingKey = null)
    {
    }

    public function getRecordingKey()
    {
        return (!$this->recordingKey) ?: $this->recordingKey->value();
    }

    public function setPlayBackPhoneNumber($playBackPhoneNumber = null)
    {
        $this->playBackPhoneNumber = ($playBackPhoneNumber InstanceOf OutgoingDNorSIPURI)
             ? $playBackPhoneNumber
             : new OutgoingDNorSIPURI($playBackPhoneNumber);
    }

    public function getPlayBackPhoneNumber()
    {
        return (!$this->playBackPhoneNumber) ?: $this->playBackPhoneNumber->value();
    }
}
