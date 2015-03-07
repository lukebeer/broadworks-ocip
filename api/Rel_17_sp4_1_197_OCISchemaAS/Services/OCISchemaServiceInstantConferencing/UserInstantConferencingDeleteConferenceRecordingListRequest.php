<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceInstantConferencing; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceInstantConferencing\InstantConferencingRecordingKey;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\UserId;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Request to delete one or more conference recordings owned by the user or the user's delegators.
 *         The response is either SuccessResponse or ErrorResponse.
 */
class UserInstantConferencingDeleteConferenceRecordingListRequest extends ComplexType implements ComplexInterface
{
    public    $name          = __CLASS__;
    protected $userId        = null;
    protected $recordingKey  = null;

    public function __construct(
         $userId,
         InstantConferencingRecordingKey $recordingKey = null
    ) {
        $this->setUserId($userId);
        $this->setRecordingKey($recordingKey);
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
}
