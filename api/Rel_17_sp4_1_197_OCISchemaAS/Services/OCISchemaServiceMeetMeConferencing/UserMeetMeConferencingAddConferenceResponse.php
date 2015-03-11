<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceMeetMeConferencing; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceMeetMeConferencing\MeetMeConferencingConferencePassCode;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Response to UserMeetMeConferencingAddConferenceRequest.
 */
class UserMeetMeConferencingAddConferenceResponse extends ComplexType implements ComplexInterface
{
    public    $name         = 'UserMeetMeConferencingAddConferenceResponse';
    protected $conferenceId = null;
    protected $moderatorPin = null;

    /**
     * @return UserMeetMeConferencingAddConferenceResponse
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * 
     */
    public function setConferenceId($conferenceId = null)
    {
        if (!$conferenceId) return $this;
        $this->conferenceId = ($conferenceId InstanceOf MeetMeConferencingConferencePassCode)
             ? $conferenceId
             : new MeetMeConferencingConferencePassCode($conferenceId);
        $this->conferenceId->setName('conferenceId');
        return $this;
    }

    /**
     * 
     * @return MeetMeConferencingConferencePassCode
     */
    public function getConferenceId()
    {
        return $this->conferenceId->getValue();
    }

    /**
     * 
     */
    public function setModeratorPin($moderatorPin = null)
    {
        if (!$moderatorPin) return $this;
        $this->moderatorPin = ($moderatorPin InstanceOf MeetMeConferencingConferencePassCode)
             ? $moderatorPin
             : new MeetMeConferencingConferencePassCode($moderatorPin);
        $this->moderatorPin->setName('moderatorPin');
        return $this;
    }

    /**
     * 
     * @return MeetMeConferencingConferencePassCode
     */
    public function getModeratorPin()
    {
        return $this->moderatorPin->getValue();
    }
}
