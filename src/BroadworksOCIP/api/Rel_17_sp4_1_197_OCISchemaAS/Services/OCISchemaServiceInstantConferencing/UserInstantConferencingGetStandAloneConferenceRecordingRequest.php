<?php
/**
 * This file is part of http://github.com/LukeBeer/BroadworksOCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceInstantConferencing; 

use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceInstantConferencing\InstantConferencingRecordingKey;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\UserId;
use BroadworksOCIP\Builder\Types\ComplexInterface;
use BroadworksOCIP\Builder\Types\ComplexType;
use BroadworksOCIP\Response\ResponseOutput;
use BroadworksOCIP\Client\Client;


/**
 * Get the information of a conference recording..
 *         The response is either UserInstantConferencingGetStandAloneConferenceRecordingResponse
 *         or ErrorResponse.
 */
class UserInstantConferencingGetStandAloneConferenceRecordingRequest extends ComplexType implements ComplexInterface
{
    public    $responseType = 'BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceInstantConferencing\UserInstantConferencingGetStandAloneConferenceRecordingResponse';
    public    $elementName = 'UserInstantConferencingGetStandAloneConferenceRecordingRequest';
    protected $conferenceOwnerUserId;
    protected $recordingKey;

    public function __construct(
         $conferenceOwnerUserId = '',
         $recordingKey = ''
    ) {
        $this->setConferenceOwnerUserId($conferenceOwnerUserId);
        $this->setRecordingKey($recordingKey);
    }

    /**
     * @return \BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceInstantConferencing\UserInstantConferencingGetStandAloneConferenceRecordingResponse $response
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * 
     */
    public function setConferenceOwnerUserId($conferenceOwnerUserId = null)
    {
        $this->conferenceOwnerUserId = ($conferenceOwnerUserId InstanceOf UserId)
             ? $conferenceOwnerUserId
             : new UserId($conferenceOwnerUserId);
        $this->conferenceOwnerUserId->setElementName('conferenceOwnerUserId');
        return $this;
    }

    /**
     * 
     * @return UserId $conferenceOwnerUserId
     */
    public function getConferenceOwnerUserId()
    {
        return ($this->conferenceOwnerUserId)
            ? $this->conferenceOwnerUserId->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setRecordingKey(InstantConferencingRecordingKey $recordingKey = null)
    {
        $this->recordingKey = ($recordingKey InstanceOf InstantConferencingRecordingKey)
             ? $recordingKey
             : new InstantConferencingRecordingKey($recordingKey);
        $this->recordingKey->setElementName('recordingKey');
        return $this;
    }

    /**
     * 
     * @return InstantConferencingRecordingKey $recordingKey
     */
    public function getRecordingKey()
    {
        return $this->recordingKey;
    }
}
