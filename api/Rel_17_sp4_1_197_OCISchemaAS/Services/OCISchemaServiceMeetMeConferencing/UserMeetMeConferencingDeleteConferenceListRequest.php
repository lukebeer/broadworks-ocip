<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceMeetMeConferencing; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceMeetMeConferencing\MeetMeConferencingConferenceKey;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\UserId;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Request to delete one or more conferences which are owned by the user.
 *         The response is either SuccessResponse or ErrorResponse.
 */
class UserMeetMeConferencingDeleteConferenceListRequest extends ComplexType implements ComplexInterface
{
    public    $name = 'UserMeetMeConferencingDeleteConferenceListRequest';
    protected $userId;
    protected $conferenceKey;

    public function __construct(
         $userId = '',
         MeetMeConferencingConferenceKey $conferenceKey = null
    ) {
        $this->setUserId($userId);
        $this->setConferenceKey($conferenceKey);
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
        $this->userId->setName('userId');
        return $this;
    }

    /**
     * 
     * @return UserId $userId
     */
    public function getUserId()
    {
        return ($this->userId) ? $this->userId->getValue() : null;
    }

    /**
     * 
     */
    public function setConferenceKey(MeetMeConferencingConferenceKey $conferenceKey = null)
    {
        $this->conferenceKey = ($conferenceKey InstanceOf MeetMeConferencingConferenceKey)
             ? $conferenceKey
             : new MeetMeConferencingConferenceKey($conferenceKey);
        $this->conferenceKey->setName('conferenceKey');
        return $this;
    }

    /**
     * 
     * @return MeetMeConferencingConferenceKey $conferenceKey
     */
    public function getConferenceKey()
    {
        return $this->conferenceKey;
    }
}
