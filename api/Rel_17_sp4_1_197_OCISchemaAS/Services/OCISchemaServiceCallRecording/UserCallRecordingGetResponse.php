<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCallRecording; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCallRecording\RecordingOption;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Response to the UserCallRecordingGetRequest.
 *         The response contains the user's Call Recording option information.
 */
class UserCallRecordingGetResponse extends ComplexType implements ComplexInterface
{
    public    $name            = 'UserCallRecordingGetResponse';
    protected $recordingOption = null;

    /**
     * @return \Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCallRecording\UserCallRecordingGetResponse $response
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
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
