<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceMeetMeConferencing; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceMeetMeConferencing\MeetMeConferencingConferenceAttendeeNotification;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceMeetMeConferencing\MeetMeConferencingConferenceAccountCode;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceMeetMeConferencing\MeetMeConferencingNumberOfParticipants;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceMeetMeConferencing\MeetMeConferencingConferenceSchedule;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceMeetMeConferencing\MeetMeConferencingConferencePassCode;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceMeetMeConferencing\MeetMeConferencingConferenceTitle;
use Broadworks_OCIP\core\Builder\Types\PrimitiveType;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Response to UserMeetMeConferencingGetConferenceRequest.
 *         Contains the information of a conference.
 */
class UserMeetMeConferencingGetConferenceResponse extends ComplexType implements ComplexInterface
{
    public    $name = 'UserMeetMeConferencingGetConferenceResponse';
    protected $title;
    protected $estimatedParticipants;
    protected $accountCode;
    protected $muteAllAttendeesOnEntry;
    protected $endConferenceOnModeratorExit;
    protected $moderatorRequired;
    protected $attendeeNotification;
    protected $conferenceSchedule;
    protected $moderatorPin;

    /**
     * @return \Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceMeetMeConferencing\UserMeetMeConferencingGetConferenceResponse $response
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * 
     */
    public function setTitle($title = null)
    {
        $this->title = ($title InstanceOf MeetMeConferencingConferenceTitle)
             ? $title
             : new MeetMeConferencingConferenceTitle($title);
        $this->title->setName('title');
        return $this;
    }

    /**
     * 
     * @return MeetMeConferencingConferenceTitle $title
     */
    public function getTitle()
    {
        return ($this->title) ? $this->title->getValue() : null;
    }

    /**
     * 
     */
    public function setEstimatedParticipants($estimatedParticipants = null)
    {
        $this->estimatedParticipants = ($estimatedParticipants InstanceOf MeetMeConferencingNumberOfParticipants)
             ? $estimatedParticipants
             : new MeetMeConferencingNumberOfParticipants($estimatedParticipants);
        $this->estimatedParticipants->setName('estimatedParticipants');
        return $this;
    }

    /**
     * 
     * @return MeetMeConferencingNumberOfParticipants $estimatedParticipants
     */
    public function getEstimatedParticipants()
    {
        return ($this->estimatedParticipants) ? $this->estimatedParticipants->getValue() : null;
    }

    /**
     * 
     */
    public function setAccountCode($accountCode = null)
    {
        $this->accountCode = ($accountCode InstanceOf MeetMeConferencingConferenceAccountCode)
             ? $accountCode
             : new MeetMeConferencingConferenceAccountCode($accountCode);
        $this->accountCode->setName('accountCode');
        return $this;
    }

    /**
     * 
     * @return MeetMeConferencingConferenceAccountCode $accountCode
     */
    public function getAccountCode()
    {
        return ($this->accountCode) ? $this->accountCode->getValue() : null;
    }

    /**
     * 
     */
    public function setMuteAllAttendeesOnEntry($muteAllAttendeesOnEntry = null)
    {
        $this->muteAllAttendeesOnEntry = new PrimitiveType($muteAllAttendeesOnEntry);
        $this->muteAllAttendeesOnEntry->setName('muteAllAttendeesOnEntry');
        return $this;
    }

    /**
     * 
     * @return boolean $muteAllAttendeesOnEntry
     */
    public function getMuteAllAttendeesOnEntry()
    {
        return ($this->muteAllAttendeesOnEntry) ? $this->muteAllAttendeesOnEntry->getValue() : null;
    }

    /**
     * 
     */
    public function setEndConferenceOnModeratorExit($endConferenceOnModeratorExit = null)
    {
        $this->endConferenceOnModeratorExit = new PrimitiveType($endConferenceOnModeratorExit);
        $this->endConferenceOnModeratorExit->setName('endConferenceOnModeratorExit');
        return $this;
    }

    /**
     * 
     * @return boolean $endConferenceOnModeratorExit
     */
    public function getEndConferenceOnModeratorExit()
    {
        return ($this->endConferenceOnModeratorExit) ? $this->endConferenceOnModeratorExit->getValue() : null;
    }

    /**
     * 
     */
    public function setModeratorRequired($moderatorRequired = null)
    {
        $this->moderatorRequired = new PrimitiveType($moderatorRequired);
        $this->moderatorRequired->setName('moderatorRequired');
        return $this;
    }

    /**
     * 
     * @return boolean $moderatorRequired
     */
    public function getModeratorRequired()
    {
        return ($this->moderatorRequired) ? $this->moderatorRequired->getValue() : null;
    }

    /**
     * 
     */
    public function setAttendeeNotification($attendeeNotification = null)
    {
        $this->attendeeNotification = ($attendeeNotification InstanceOf MeetMeConferencingConferenceAttendeeNotification)
             ? $attendeeNotification
             : new MeetMeConferencingConferenceAttendeeNotification($attendeeNotification);
        $this->attendeeNotification->setName('attendeeNotification');
        return $this;
    }

    /**
     * 
     * @return MeetMeConferencingConferenceAttendeeNotification $attendeeNotification
     */
    public function getAttendeeNotification()
    {
        return ($this->attendeeNotification) ? $this->attendeeNotification->getValue() : null;
    }

    /**
     * 
     */
    public function setConferenceSchedule(MeetMeConferencingConferenceSchedule $conferenceSchedule = null)
    {
        $this->conferenceSchedule = ($conferenceSchedule InstanceOf MeetMeConferencingConferenceSchedule)
             ? $conferenceSchedule
             : new MeetMeConferencingConferenceSchedule($conferenceSchedule);
        $this->conferenceSchedule->setName('conferenceSchedule');
        return $this;
    }

    /**
     * 
     * @return MeetMeConferencingConferenceSchedule $conferenceSchedule
     */
    public function getConferenceSchedule()
    {
        return $this->conferenceSchedule;
    }

    /**
     * 
     */
    public function setModeratorPin($moderatorPin = null)
    {
        $this->moderatorPin = ($moderatorPin InstanceOf MeetMeConferencingConferencePassCode)
             ? $moderatorPin
             : new MeetMeConferencingConferencePassCode($moderatorPin);
        $this->moderatorPin->setName('moderatorPin');
        return $this;
    }

    /**
     * 
     * @return MeetMeConferencingConferencePassCode $moderatorPin
     */
    public function getModeratorPin()
    {
        return ($this->moderatorPin) ? $this->moderatorPin->getValue() : null;
    }
}
