<?php
/**
 * This file is part of http://github.com/LukeBeer/BroadworksOCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCallRecording; 

use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCallRecording\RecordingOption;
use BroadworksOCIP\Builder\Types\ComplexInterface;
use BroadworksOCIP\Builder\Types\ComplexType;
use BroadworksOCIP\Response\ResponseOutput;
use BroadworksOCIP\Client\Client;


/**
 * Response to the UserCallRecordingGetRequest.
 *         The response contains the user's Call Recording option information.
 */
class UserCallRecordingGetResponse extends ComplexType implements ComplexInterface
{
    public    $elementName = 'UserCallRecordingGetResponse';
    protected $recordingOption;

    /**
     * @return \BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCallRecording\UserCallRecordingGetResponse $response
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
