<?php
/**
 * This file is part of http://github.com/LukeBeer/BroadworksOCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceInstantConferencing; 

use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceInstantConferencing\InstantConferencingConferenceKey;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceInstantConferencing\InstantConferencingBillingCode;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceInstantConferencing\InstantConferencingSchedule;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceInstantConferencing\InstantConferencingTitle;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\UserId;
use BroadworksOCIP\Builder\Types\PrimitiveType;
use BroadworksOCIP\Builder\Types\ComplexInterface;
use BroadworksOCIP\Builder\Types\ComplexType;
use BroadworksOCIP\Response\ResponseOutput;
use BroadworksOCIP\Client\Client;


/**
 * Modify an existing conference.
 *         The response is either SuccessResponse or ErrorResponse.
 */
class UserInstantConferencingModifyConferenceRequest14 extends ComplexType implements ComplexInterface
{
    public    $elementName = 'UserInstantConferencingModifyConferenceRequest14';
    protected $userId;
    protected $conferenceKey;
    protected $title;
    protected $leaderRequired;
    protected $leaderReleaseDropsParticipants;
    protected $announceCallers;
    protected $conferenceSchedule;
    protected $billingCode;

    public function __construct(
         $userId = '',
         $conferenceKey = '',
         $title = null,
         $leaderRequired = null,
         $leaderReleaseDropsParticipants = null,
         $announceCallers = null,
         $conferenceSchedule = null,
         $billingCode = null
    ) {
        $this->setUserId($userId);
        $this->setConferenceKey($conferenceKey);
        $this->setTitle($title);
        $this->setLeaderRequired($leaderRequired);
        $this->setLeaderReleaseDropsParticipants($leaderReleaseDropsParticipants);
        $this->setAnnounceCallers($announceCallers);
        $this->setConferenceSchedule($conferenceSchedule);
        $this->setBillingCode($billingCode);
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
    public function setConferenceKey(InstantConferencingConferenceKey $conferenceKey = null)
    {
        $this->conferenceKey = ($conferenceKey InstanceOf InstantConferencingConferenceKey)
             ? $conferenceKey
             : new InstantConferencingConferenceKey($conferenceKey);
        $this->conferenceKey->setElementName('conferenceKey');
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

    /**
     * 
     */
    public function setTitle($title = null)
    {
        $this->title = ($title InstanceOf InstantConferencingTitle)
             ? $title
             : new InstantConferencingTitle($title);
        $this->title->setElementName('title');
        return $this;
    }

    /**
     * 
     * @return InstantConferencingTitle $title
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
    public function setLeaderRequired($leaderRequired = null)
    {
        $this->leaderRequired = new PrimitiveType($leaderRequired);
        $this->leaderRequired->setElementName('leaderRequired');
        return $this;
    }

    /**
     * 
     * @return boolean $leaderRequired
     */
    public function getLeaderRequired()
    {
        return ($this->leaderRequired)
            ? $this->leaderRequired->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setLeaderReleaseDropsParticipants($leaderReleaseDropsParticipants = null)
    {
        $this->leaderReleaseDropsParticipants = new PrimitiveType($leaderReleaseDropsParticipants);
        $this->leaderReleaseDropsParticipants->setElementName('leaderReleaseDropsParticipants');
        return $this;
    }

    /**
     * 
     * @return boolean $leaderReleaseDropsParticipants
     */
    public function getLeaderReleaseDropsParticipants()
    {
        return ($this->leaderReleaseDropsParticipants)
            ? $this->leaderReleaseDropsParticipants->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setAnnounceCallers($announceCallers = null)
    {
        $this->announceCallers = new PrimitiveType($announceCallers);
        $this->announceCallers->setElementName('announceCallers');
        return $this;
    }

    /**
     * 
     * @return boolean $announceCallers
     */
    public function getAnnounceCallers()
    {
        return ($this->announceCallers)
            ? $this->announceCallers->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setConferenceSchedule(InstantConferencingSchedule $conferenceSchedule = null)
    {
        $this->conferenceSchedule = ($conferenceSchedule InstanceOf InstantConferencingSchedule)
             ? $conferenceSchedule
             : new InstantConferencingSchedule($conferenceSchedule);
        $this->conferenceSchedule->setElementName('conferenceSchedule');
        return $this;
    }

    /**
     * 
     * @return InstantConferencingSchedule $conferenceSchedule
     */
    public function getConferenceSchedule()
    {
        return $this->conferenceSchedule;
    }

    /**
     * 
     */
    public function setBillingCode($billingCode = null)
    {
        $this->billingCode = ($billingCode InstanceOf InstantConferencingBillingCode)
             ? $billingCode
             : new InstantConferencingBillingCode($billingCode);
        $this->billingCode->setElementName('billingCode');
        return $this;
    }

    /**
     * 
     * @return InstantConferencingBillingCode $billingCode
     */
    public function getBillingCode()
    {
        return ($this->billingCode)
            ? $this->billingCode->getElementValue()
            : null;
    }
}
