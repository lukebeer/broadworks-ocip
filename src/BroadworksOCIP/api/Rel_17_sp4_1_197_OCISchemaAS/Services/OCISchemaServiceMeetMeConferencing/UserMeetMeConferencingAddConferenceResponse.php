<?php
/**
 * This file is part of http://github.com/LukeBeer/BroadworksOCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceMeetMeConferencing; 

use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceMeetMeConferencing\MeetMeConferencingConferencePassCode;
use BroadworksOCIP\Builder\Types\ComplexInterface;
use BroadworksOCIP\Builder\Types\ComplexType;
use BroadworksOCIP\Response\ResponseOutput;
use BroadworksOCIP\Client\Client;


/**
 * Response to UserMeetMeConferencingAddConferenceRequest.
 */
class UserMeetMeConferencingAddConferenceResponse extends ComplexType implements ComplexInterface
{
    public    $elementName = 'UserMeetMeConferencingAddConferenceResponse';
    protected $conferenceId;
    protected $moderatorPin;

    /**
     * @return \BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceMeetMeConferencing\UserMeetMeConferencingAddConferenceResponse $response
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
        $this->conferenceId = ($conferenceId InstanceOf MeetMeConferencingConferencePassCode)
             ? $conferenceId
             : new MeetMeConferencingConferencePassCode($conferenceId);
        $this->conferenceId->setElementName('conferenceId');
        return $this;
    }

    /**
     * 
     * @return MeetMeConferencingConferencePassCode $conferenceId
     */
    public function getConferenceId()
    {
        return ($this->conferenceId)
            ? $this->conferenceId->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setModeratorPin($moderatorPin = null)
    {
        $this->moderatorPin = ($moderatorPin InstanceOf MeetMeConferencingConferencePassCode)
             ? $moderatorPin
             : new MeetMeConferencingConferencePassCode($moderatorPin);
        $this->moderatorPin->setElementName('moderatorPin');
        return $this;
    }

    /**
     * 
     * @return MeetMeConferencingConferencePassCode $moderatorPin
     */
    public function getModeratorPin()
    {
        return ($this->moderatorPin)
            ? $this->moderatorPin->getElementValue()
            : null;
    }
}
