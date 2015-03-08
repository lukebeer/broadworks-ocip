<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceMeetMeConferencing; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceMeetMeConferencing\MeetMeConferencingConferenceAttendeeNotification;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceMeetMeConferencing\MeetMeConferencingConferenceAccountCode;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceMeetMeConferencing\MeetMeConferencingNumberOfParticipants;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceMeetMeConferencing\MeetMeConferencingConferencePassCode;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceMeetMeConferencing\MeetMeConferencingConferenceSchedule;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceMeetMeConferencing\MeetMeConferencingConferenceTitle;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
     * Response to UserMeetMeConferencingGetConferenceRequest.
 *         Contains the information of a conference.
 */
class UserMeetMeConferencingGetConferenceResponse extends ComplexType implements ComplexInterface
{
    public    $name                         = __CLASS__;
    protected $title                        = null;
    protected $estimatedParticipants        = null;
    protected $accountCode                  = null;
    protected $muteAllAttendeesOnEntry      = null;
    protected $endConferenceOnModeratorExit = null;
    protected $moderatorRequired            = null;
    protected $attendeeNotification         = null;
    protected $conferenceSchedule           = null;
    protected $moderatorPin                 = null;


    /**
     * Conference title.
     */
    public function setTitle($title = null)
    {
        $this->title = ($title InstanceOf MeetMeConferencingConferenceTitle)
             ? $title
             : new MeetMeConferencingConferenceTitle($title);
    }

    /**
     * Conference title.
     */
    public function getTitle()
    {
        return (!$this->title) ?: $this->title->getValue();
    }

    /**
     * Number of participants in a conference.
     */
    public function setEstimatedParticipants($estimatedParticipants = null)
    {
        $this->estimatedParticipants = ($estimatedParticipants InstanceOf MeetMeConferencingNumberOfParticipants)
             ? $estimatedParticipants
             : new MeetMeConferencingNumberOfParticipants($estimatedParticipants);
    }

    /**
     * Number of participants in a conference.
     */
    public function getEstimatedParticipants()
    {
        return (!$this->estimatedParticipants) ?: $this->estimatedParticipants->getValue();
    }

    /**
     * Conference account code.
     */
    public function setAccountCode($accountCode = null)
    {
        $this->accountCode = ($accountCode InstanceOf MeetMeConferencingConferenceAccountCode)
             ? $accountCode
             : new MeetMeConferencingConferenceAccountCode($accountCode);
    }

    /**
     * Conference account code.
     */
    public function getAccountCode()
    {
        return (!$this->accountCode) ?: $this->accountCode->getValue();
    }

    /**
     * 
     */
    public function setMuteAllAttendeesOnEntry($muteAllAttendeesOnEntry = null)
    {
        $this->muteAllAttendeesOnEntry = (boolean) $muteAllAttendeesOnEntry;
    }

    /**
     * 
     */
    public function getMuteAllAttendeesOnEntry()
    {
        return (!$this->muteAllAttendeesOnEntry) ?: $this->muteAllAttendeesOnEntry->getValue();
    }

    /**
     * 
     */
    public function setEndConferenceOnModeratorExit($endConferenceOnModeratorExit = null)
    {
        $this->endConferenceOnModeratorExit = (boolean) $endConferenceOnModeratorExit;
    }

    /**
     * 
     */
    public function getEndConferenceOnModeratorExit()
    {
        return (!$this->endConferenceOnModeratorExit) ?: $this->endConferenceOnModeratorExit->getValue();
    }

    /**
     * 
     */
    public function setModeratorRequired($moderatorRequired = null)
    {
        $this->moderatorRequired = (boolean) $moderatorRequired;
    }

    /**
     * 
     */
    public function getModeratorRequired()
    {
        return (!$this->moderatorRequired) ?: $this->moderatorRequired->getValue();
    }

    /**
     * Choices for the notification when attendees join or leave the conferecne.
     */
    public function setAttendeeNotification($attendeeNotification = null)
    {
        $this->attendeeNotification = ($attendeeNotification InstanceOf MeetMeConferencingConferenceAttendeeNotification)
             ? $attendeeNotification
             : new MeetMeConferencingConferenceAttendeeNotification($attendeeNotification);
    }

    /**
     * Choices for the notification when attendees join or leave the conferecne.
     */
    public function getAttendeeNotification()
    {
        return (!$this->attendeeNotification) ?: $this->attendeeNotification->getValue();
    }

    /**
     * Conference schedule.
     */
    public function setConferenceSchedule(MeetMeConferencingConferenceSchedule $conferenceSchedule = null)
    {
        $this->conferenceSchedule =  $conferenceSchedule;
    }

    /**
     * Conference schedule.
     */
    public function getConferenceSchedule()
    {
        return (!$this->conferenceSchedule) ?: $this->conferenceSchedule->getValue();
    }

    /**
     * Conference Id or moderator pin.
     */
    public function setModeratorPin($moderatorPin = null)
    {
        $this->moderatorPin = ($moderatorPin InstanceOf MeetMeConferencingConferencePassCode)
             ? $moderatorPin
             : new MeetMeConferencingConferencePassCode($moderatorPin);
    }

    /**
     * Conference Id or moderator pin.
     */
    public function getModeratorPin()
    {
        return (!$this->moderatorPin) ?: $this->moderatorPin->getValue();
    }
}
