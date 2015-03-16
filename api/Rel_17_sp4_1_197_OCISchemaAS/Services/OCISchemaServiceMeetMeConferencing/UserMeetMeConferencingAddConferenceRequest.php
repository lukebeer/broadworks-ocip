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
    public    $elementName = 'UserMeetMeConferencingAddConferenceRequest';
    protected $userId;
    protected $bridgeId;
    protected $title;
    protected $estimatedParticipants;
    protected $accountCode;
    protected $muteAllAttendeesOnEntry;
    protected $endConferenceOnModeratorExit;
    protected $moderatorRequired;
    protected $attendeeNotification;
    protected $conferenceSchedule;

    public function __construct(
         $userId = '',
         $bridgeId = '',
         $title = '',
         $estimatedParticipants = null,
         $accountCode = null,
         $muteAllAttendeesOnEntry = '',
         $endConferenceOnModeratorExit = '',
         $moderatorRequired = '',
         $attendeeNotification = '',
         $conferenceSchedule = ''
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
    public function setBridgeId($bridgeId = null)
    {
        $this->bridgeId = ($bridgeId InstanceOf UserId)
             ? $bridgeId
             : new UserId($bridgeId);
        $this->bridgeId->setElementName('bridgeId');
        return $this;
    }

    /**
     * 
     * @return UserId $bridgeId
     */
    public function getBridgeId()
    {
        return ($this->bridgeId)
            ? $this->bridgeId->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setTitle($title = null)
    {
        $this->title = ($title InstanceOf MeetMeConferencingConferenceTitle)
             ? $title
             : new MeetMeConferencingConferenceTitle($title);
        $this->title->setElementName('title');
        return $this;
    }

    /**
     * 
     * @return MeetMeConferencingConferenceTitle $title
     */
    public function getTitle()
    {
        return ($this->title)
            ? $this->title->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setEstimatedParticipants($estimatedParticipants = null)
    {
        $this->estimatedParticipants = ($estimatedParticipants InstanceOf MeetMeConferencingNumberOfParticipants)
             ? $estimatedParticipants
             : new MeetMeConferencingNumberOfParticipants($estimatedParticipants);
        $this->estimatedParticipants->setElementName('estimatedParticipants');
        return $this;
    }

    /**
     * 
     * @return MeetMeConferencingNumberOfParticipants $estimatedParticipants
     */
    public function getEstimatedParticipants()
    {
        return ($this->estimatedParticipants)
            ? $this->estimatedParticipants->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setAccountCode($accountCode = null)
    {
        $this->accountCode = ($accountCode InstanceOf MeetMeConferencingConferenceAccountCode)
             ? $accountCode
             : new MeetMeConferencingConferenceAccountCode($accountCode);
        $this->accountCode->setElementName('accountCode');
        return $this;
    }

    /**
     * 
     * @return MeetMeConferencingConferenceAccountCode $accountCode
     */
    public function getAccountCode()
    {
        return ($this->accountCode)
            ? $this->accountCode->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setMuteAllAttendeesOnEntry($muteAllAttendeesOnEntry = null)
    {
        $this->muteAllAttendeesOnEntry = new PrimitiveType($muteAllAttendeesOnEntry);
        $this->muteAllAttendeesOnEntry->setElementName('muteAllAttendeesOnEntry');
        return $this;
    }

    /**
     * 
     * @return boolean $muteAllAttendeesOnEntry
     */
    public function getMuteAllAttendeesOnEntry()
    {
        return ($this->muteAllAttendeesOnEntry)
            ? $this->muteAllAttendeesOnEntry->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setEndConferenceOnModeratorExit($endConferenceOnModeratorExit = null)
    {
        $this->endConferenceOnModeratorExit = new PrimitiveType($endConferenceOnModeratorExit);
        $this->endConferenceOnModeratorExit->setElementName('endConferenceOnModeratorExit');
        return $this;
    }

    /**
     * 
     * @return boolean $endConferenceOnModeratorExit
     */
    public function getEndConferenceOnModeratorExit()
    {
        return ($this->endConferenceOnModeratorExit)
            ? $this->endConferenceOnModeratorExit->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setModeratorRequired($moderatorRequired = null)
    {
        $this->moderatorRequired = new PrimitiveType($moderatorRequired);
        $this->moderatorRequired->setElementName('moderatorRequired');
        return $this;
    }

    /**
     * 
     * @return boolean $moderatorRequired
     */
    public function getModeratorRequired()
    {
        return ($this->moderatorRequired)
            ? $this->moderatorRequired->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setAttendeeNotification($attendeeNotification = null)
    {
        $this->attendeeNotification = ($attendeeNotification InstanceOf MeetMeConferencingConferenceAttendeeNotification)
             ? $attendeeNotification
             : new MeetMeConferencingConferenceAttendeeNotification($attendeeNotification);
        $this->attendeeNotification->setElementName('attendeeNotification');
        return $this;
    }

    /**
     * 
     * @return MeetMeConferencingConferenceAttendeeNotification $attendeeNotification
     */
    public function getAttendeeNotification()
    {
        return ($this->attendeeNotification)
            ? $this->attendeeNotification->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setConferenceSchedule(MeetMeConferencingConferenceSchedule $conferenceSchedule = null)
    {
        $this->conferenceSchedule = ($conferenceSchedule InstanceOf MeetMeConferencingConferenceSchedule)
             ? $conferenceSchedule
             : new MeetMeConferencingConferenceSchedule($conferenceSchedule);
        $this->conferenceSchedule->setElementName('conferenceSchedule');
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
