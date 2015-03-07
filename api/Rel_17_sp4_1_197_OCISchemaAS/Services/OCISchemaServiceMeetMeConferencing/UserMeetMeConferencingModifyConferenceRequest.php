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
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceMeetMeConferencing\MeetMeConferencingConferenceSchedule;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceMeetMeConferencing\MeetMeConferencingConferenceTitle;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceMeetMeConferencing\MeetMeConferencingConferenceKey;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\UserId;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Modify an existing conference.
 *         The response is either SuccessResponse or ErrorResponse.
 */
class UserMeetMeConferencingModifyConferenceRequest extends ComplexType implements ComplexInterface
{
    public    $name                          = __CLASS__;
    protected $userId                        = null;
    protected $conferenceKey                 = null;
    protected $title                         = null;
    protected $estimatedParticipants         = null;
    protected $accountCode                   = null;
    protected $muteAllAttendeesOnEntry       = null;
    protected $endConferenceOnModeratorExit  = null;
    protected $moderatorRequired             = null;
    protected $attendeeNotification          = null;
    protected $conferenceSchedule            = null;

    public function __construct(
         $userId,
         MeetMeConferencingConferenceKey $conferenceKey,
         $title = null,
         $estimatedParticipants = null,
         $accountCode = null,
         $muteAllAttendeesOnEntry = null,
         $endConferenceOnModeratorExit = null,
         $moderatorRequired = null,
         $attendeeNotification = null,
         MeetMeConferencingConferenceSchedule $conferenceSchedule = null
    ) {
        $this->setUserId($userId);
        $this->setConferenceKey($conferenceKey);
        $this->setTitle($title);
        $this->setEstimatedParticipants($estimatedParticipants);
        $this->setAccountCode($accountCode);
        $this->setMuteAllAttendeesOnEntry($muteAllAttendeesOnEntry);
        $this->setEndConferenceOnModeratorExit($endConferenceOnModeratorExit);
        $this->setModeratorRequired($moderatorRequired);
        $this->setAttendeeNotification($attendeeNotification);
        $this->setConferenceSchedule($conferenceSchedule);
    }

    public function setUserId($userId = null)
    {
        $this->userId = ($userId InstanceOf UserId)
             ? $userId
             : new UserId($userId);
    }

    public function getUserId()
    {
        return (!$this->userId) ?: $this->userId->value();
    }

    public function setConferenceKey(MeetMeConferencingConferenceKey $conferenceKey = null)
    {
    }

    public function getConferenceKey()
    {
        return (!$this->conferenceKey) ?: $this->conferenceKey->value();
    }

    public function setTitle($title = null)
    {
        $this->title = ($title InstanceOf MeetMeConferencingConferenceTitle)
             ? $title
             : new MeetMeConferencingConferenceTitle($title);
    }

    public function getTitle()
    {
        return (!$this->title) ?: $this->title->value();
    }

    public function setEstimatedParticipants($estimatedParticipants = null)
    {
        $this->estimatedParticipants = ($estimatedParticipants InstanceOf MeetMeConferencingNumberOfParticipants)
             ? $estimatedParticipants
             : new MeetMeConferencingNumberOfParticipants($estimatedParticipants);
    }

    public function getEstimatedParticipants()
    {
        return (!$this->estimatedParticipants) ?: $this->estimatedParticipants->value();
    }

    public function setAccountCode($accountCode = null)
    {
        $this->accountCode = ($accountCode InstanceOf MeetMeConferencingConferenceAccountCode)
             ? $accountCode
             : new MeetMeConferencingConferenceAccountCode($accountCode);
    }

    public function getAccountCode()
    {
        return (!$this->accountCode) ?: $this->accountCode->value();
    }

    public function setMuteAllAttendeesOnEntry(xs:boolean $muteAllAttendeesOnEntry = null)
    {
    }

    public function getMuteAllAttendeesOnEntry()
    {
        return (!$this->muteAllAttendeesOnEntry) ?: $this->muteAllAttendeesOnEntry->value();
    }

    public function setEndConferenceOnModeratorExit(xs:boolean $endConferenceOnModeratorExit = null)
    {
    }

    public function getEndConferenceOnModeratorExit()
    {
        return (!$this->endConferenceOnModeratorExit) ?: $this->endConferenceOnModeratorExit->value();
    }

    public function setModeratorRequired(xs:boolean $moderatorRequired = null)
    {
    }

    public function getModeratorRequired()
    {
        return (!$this->moderatorRequired) ?: $this->moderatorRequired->value();
    }

    public function setAttendeeNotification($attendeeNotification = null)
    {
        $this->attendeeNotification = ($attendeeNotification InstanceOf MeetMeConferencingConferenceAttendeeNotification)
             ? $attendeeNotification
             : new MeetMeConferencingConferenceAttendeeNotification($attendeeNotification);
    }

    public function getAttendeeNotification()
    {
        return (!$this->attendeeNotification) ?: $this->attendeeNotification->value();
    }

    public function setConferenceSchedule(MeetMeConferencingConferenceSchedule $conferenceSchedule = null)
    {
    }

    public function getConferenceSchedule()
    {
        return (!$this->conferenceSchedule) ?: $this->conferenceSchedule->value();
    }
}
