<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceInstantConferencing; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceInstantConferencing\InstantConferencingConferenceKey;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\UserId;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Get the list of recordings of a conference owned or delegated by the user.
 *         The response is either UserInstantConferencingGetConferenceRecordingListResponse
 *         or ErrorResponse.
 *         If conferenceKey is not in the request, the recordings for all the conferences of the user will be returned.
 */
class UserInstantConferencingGetConferenceRecordingListRequest extends ComplexType implements ComplexInterface
{
    public    $responseType  = 'Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceInstantConferencing\UserInstantConferencingGetConferenceRecordingListResponse';
    public    $name          = 'UserInstantConferencingGetConferenceRecordingListRequest';
    protected $userId        = null;
    protected $conferenceKey = null;

    public function __construct(
         $userId,
         InstantConferencingConferenceKey $conferenceKey = null
    ) {
        $this->setUserId($userId);
        $this->setConferenceKey($conferenceKey);
    }

    /**
     * @return \Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceInstantConferencing\UserInstantConferencingGetConferenceRecordingListResponse $response
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
    public function setConferenceKey(InstantConferencingConferenceKey $conferenceKey = null)
    {
        if (!$conferenceKey) return $this;
        $this->conferenceKey = $conferenceKey;
        $this->conferenceKey->setName('conferenceKey');
        return $this;
    }

    /**
     * 
     * @return InstantConferencingConferenceKey $conferenceKey
     */
    public function getConferenceKey()
    {
        return $this->conferenceKey;
    }
}
