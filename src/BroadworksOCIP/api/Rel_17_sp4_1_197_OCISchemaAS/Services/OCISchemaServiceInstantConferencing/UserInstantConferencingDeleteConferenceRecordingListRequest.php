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
 * Request to delete one or more conference recordings owned by the user or the user's delegators.
 *         The response is either SuccessResponse or ErrorResponse.
 */
class UserInstantConferencingDeleteConferenceRecordingListRequest extends ComplexType implements ComplexInterface
{
    public    $elementName = 'UserInstantConferencingDeleteConferenceRecordingListRequest';
    protected $userId;
    protected $recordingKey;

    public function __construct(
         $userId = '',
         $recordingKey = null
    ) {
        $this->setUserId($userId);
        $this->setRecordingKey($recordingKey);
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
