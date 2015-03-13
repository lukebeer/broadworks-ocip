<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCallRecording; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCallRecording\RecordingOption;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\UserId;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Modify the Call Recording attributes for a user. The recording option "On Demand" is not accepted for service instances.
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class UserCallRecordingModifyRequest extends ComplexType implements ComplexInterface
{
    public    $name            = 'UserCallRecordingModifyRequest';
    protected $userId          = null;
    protected $recordingOption = null;

    public function __construct(
         $userId,
         $recordingOption = null
    ) {
        $this->setUserId($userId);
        $this->setRecordingOption($recordingOption);
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
        if (!$userId) return $this;
        $this->userId = ($userId InstanceOf UserId)
             ? $userId
             : new UserId($userId);
        $this->userId->setName('userId');
        return $this;
    }

    /**
     * 
     * @return UserId $userId
     */
    public function getUserId()
    {
        return $this->userId->getValue();
    }

    /**
     * 
     */
    public function setRecordingOption($recordingOption = null)
    {
        if (!$recordingOption) return $this;
        $this->recordingOption = ($recordingOption InstanceOf RecordingOption)
             ? $recordingOption
             : new RecordingOption($recordingOption);
        $this->recordingOption->setName('recordingOption');
        return $this;
    }

    /**
     * 
     * @return RecordingOption $recordingOption
     */
    public function getRecordingOption()
    {
        return $this->recordingOption->getValue();
    }
}
