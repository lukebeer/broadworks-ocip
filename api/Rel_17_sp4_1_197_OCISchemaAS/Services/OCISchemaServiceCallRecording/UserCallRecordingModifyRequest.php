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
    public    $elementName = 'UserCallRecordingModifyRequest';
    protected $userId;
    protected $recordingOption;

    public function __construct(
         $userId = '',
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
    public function setRecordingOption($recordingOption = null)
    {
        $this->recordingOption = ($recordingOption InstanceOf RecordingOption)
             ? $recordingOption
             : new RecordingOption($recordingOption);
        $this->recordingOption->setElementName('recordingOption');
        return $this;
    }

    /**
     * 
     * @return RecordingOption $recordingOption
     */
    public function getRecordingOption()
    {
        return ($this->recordingOption)
            ? $this->recordingOption->getElementValue()
            : null;
    }
}
