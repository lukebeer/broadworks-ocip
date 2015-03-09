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
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceMeetMeConferencing\UserMeetMeConferencingModifyConferenceResponse;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Modify an existing conference.
 *         The response is either SuccessResponse or ErrorResponse.
 */
class UserMeetMeConferencingModifyConferenceRequest extends ComplexType implements ComplexInterface
{
    public    $name                         = __CLASS__;
    protected $userId                       = null;
    protected $conferenceKey                = null;
    protected $title                        = null;
    protected $estimatedParticipants        = null;
    protected $accountCode                  = null;
    protected $muteAllAttendeesOnEntry      = null;
    protected $endConferenceOnModeratorExit = null;
    protected $moderatorRequired            = null;
    protected $attendeeNotification         = null;
    protected $conferenceSchedule           = null;

    public function __construct(
         $userId,
          $conferenceKey,
         $title = null,
         $estimatedParticipants = null,
         $accountCode = null,
         $muteAllAttendeesOnEntry = null,
         $endConferenceOnModeratorExit = null,
         $moderatorRequired = null,
         $attendeeNotification = null,
          $conferenceSchedule = null
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

    /**
     * @return UserMeetMeConferencingModifyConferenceResponse
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * A user id consists of a user-portion optionally followed by an @ sign and a domain name.
     *         If the domain is not specified, it is assumed to be the system default domain.
     *         The domain is required when adding normal users and virtual users, i.e. Auto Attendants,
     *         Hunt Groups, Call Centers....
     *         The domain must not be specified for system-level and service-provider-level administrators.
     */
    public function setUserId($userId = null)
    {
        $this->userId = ($userId InstanceOf UserId)
             ? $userId
             : new UserId($userId);
    }

    /**
     * A user id consists of a user-portion optionally followed by an @ sign and a domain name.
     *         If the domain is not specified, it is assumed to be the system default domain.
     *         The domain is required when adding normal users and virtual users, i.e. Auto Attendants,
     *         Hunt Groups, Call Centers....
     *         The domain must not be specified for system-level and service-provider-level administrators.
     */
    public function getUserId()
    {
        return (!$this->userId) ?: $this->userId->getValue();
    }

    /**
     * Identifier for conference.
     */
    public function setConferenceKey(MeetMeConferencingConferenceKey $conferenceKey = null)
    {
        $this->conferenceKey =  $conferenceKey;
    }

    /**
     * Identifier for conference.
     */
    public function getConferenceKey()
    {
        return (!$this->conferenceKey) ?: $this->conferenceKey->getValue();
    }

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
        return (!$this->muteAllAttendeesOnEntry) ?: $this->muteAllAttendeesOnEntry;
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
        return (!$this->endConferenceOnModeratorExit) ?: $this->endConferenceOnModeratorExit;
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
        return (!$this->moderatorRequired) ?: $this->moderatorRequired;
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
}
