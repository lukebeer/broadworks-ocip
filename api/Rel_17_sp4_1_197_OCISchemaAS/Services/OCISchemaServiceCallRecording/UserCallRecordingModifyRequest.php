<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceCallRecording; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\UserId;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\RecordingOption;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Modify the Call Recording attributes for a user. The recording option "On Demand" is not accepted for service instances.
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class UserCallRecordingModifyRequest extends ComplexType implements ComplexInterface
{
    public    $name = __CLASS__;

    public function __construct(
             $userId,
             $recordingOption=null
    ) {
        $this->userId          = new UserId($userId);
        $this->recordingOption = $recordingOption;
        $this->args            = func_get_args();
    }

    public function setUserId($userId)
    {
        $userId and $this->userId = new UserId($userId);
    }

    public function getUserId()
    {
        return (!$this->userId) ?: $this->userId->value();
    }

    public function setRecordingOption($recordingOption)
    {
        $recordingOption and $this->recordingOption = new RecordingOption($recordingOption);
    }

    public function getRecordingOption()
    {
        return (!$this->recordingOption) ?: $this->recordingOption->value();
    }
}
