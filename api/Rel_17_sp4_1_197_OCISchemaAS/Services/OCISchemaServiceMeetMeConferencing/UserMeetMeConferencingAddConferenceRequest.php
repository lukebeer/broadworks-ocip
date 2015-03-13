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
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceMeetMeConferencing\MeetMeConferencingConferenceTitle;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\UserId;
use Broadworks_OCIP\core\Builder\Types\PrimitiveType;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Add a Meet-Me conference.
 *         The response is either UserMeetMeConferencingAddConferenceResponse or ErrorResponse.
 */
class UserMeetMeConferencingAddConferenceRequest extends ComplexType implements ComplexInterface
{
    public    $responseType                 = 'Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceMeetMeConferencing\UserMeetMeConferencingAddConferenceResponse';
    public    $name                         = 'UserMeetMeConferencingAddConferenceRequest';
    protected $userId                       = null;
    protected $bridgeId                     = null;
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
         $bridgeId,
         $title,
         $estimatedParticipants = null,
         $accountCode = null,
         $muteAllAttendeesOnEntry,
         $endConferenceOnModeratorExit,
         $moderatorRequired,
         $attendeeNotification,
         MeetMeConferencingConferenceSchedule $conferenceSchedule
    ) {
        $this->setUserId($userId);
        $this->setBridgeId($bridgeId);
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
     * @return \Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceMeetMeConferencing\UserMeetMeConferencingAddConferenceResponse $response
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
    public function setBridgeId($bridgeId = null)
    {
        if (!$bridgeId) return $this;
        $this->bridgeId = ($bridgeId InstanceOf UserId)
             ? $bridgeId
             : new UserId($bridgeId);
        $this->bridgeId->setName('bridgeId');
        return $this;
    }

    /**
     * 
     * @return UserId $bridgeId
     */
    public function getBridgeId()
    {
        return $this->bridgeId->getValue();
    }

    /**
     * 
     */
    public function setTitle($title = null)
    {
        if (!$title) return $this;
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
        return $this->title->getValue();
    }

    /**
     * 
     */
    public function setEstimatedParticipants($estimatedParticipants = null)
    {
        if (!$estimatedParticipants) return $this;
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
        return $this->estimatedParticipants->getValue();
    }

    /**
     * 
     */
    public function setAccountCode($accountCode = null)
    {
        if (!$accountCode) return $this;
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
        return $this->accountCode->getValue();
    }

    /**
     * 
     */
    public function setMuteAllAttendeesOnEntry($muteAllAttendeesOnEntry = null)
    {
        if (!$muteAllAttendeesOnEntry) return $this;
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
        return $this->muteAllAttendeesOnEntry->getValue();
    }

    /**
     * 
     */
    public function setEndConferenceOnModeratorExit($endConferenceOnModeratorExit = null)
    {
        if (!$endConferenceOnModeratorExit) return $this;
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
        return $this->endConferenceOnModeratorExit->getValue();
    }

    /**
     * 
     */
    public function setModeratorRequired($moderatorRequired = null)
    {
        if (!$moderatorRequired) return $this;
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
        return $this->moderatorRequired->getValue();
    }

    /**
     * 
     */
    public function setAttendeeNotification($attendeeNotification = null)
    {
        if (!$attendeeNotification) return $this;
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
        return $this->attendeeNotification->getValue();
    }

    /**
     * 
     */
    public function setConferenceSchedule(MeetMeConferencingConferenceSchedule $conferenceSchedule = null)
    {
        if (!$conferenceSchedule) return $this;
        $this->conferenceSchedule = $conferenceSchedule;
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
}
