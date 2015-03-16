<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceInstantConferencing; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceInstantConferencing\InstantConferencingConferenceType;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceInstantConferencing\InstantConferencingBillingCode;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceInstantConferencing\InstantConferencingSchedule;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceInstantConferencing\InstantConferencingTitle;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\UserId;
use Broadworks_OCIP\core\Builder\Types\PrimitiveType;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Add a conference.
 *         The response is either SuccessResponse or ErrorResponse.
 */
class UserInstantConferencingAddConferenceRequest extends ComplexType implements ComplexInterface
{
    public    $name = 'UserInstantConferencingAddConferenceRequest';
    protected $userId;
    protected $bridgeServiceUserId;
    protected $conferenceOwnerUserId;
    protected $title;
    protected $leaderRequired;
    protected $leaderReleaseDropsParticipants;
    protected $announceCallers;
    protected $conferenceType;
    protected $conferenceSchedule;
    protected $billingCode;

    public function __construct(
         $userId = '',
         $bridgeServiceUserId = '',
         $conferenceOwnerUserId = '',
         $title = '',
         $leaderRequired = '',
         $leaderReleaseDropsParticipants = '',
         $announceCallers = '',
         $conferenceType = '',
         $conferenceSchedule = '',
         $billingCode = null
    ) {
        $this->setUserId($userId);
        $this->setBridgeServiceUserId($bridgeServiceUserId);
        $this->setConferenceOwnerUserId($conferenceOwnerUserId);
        $this->setTitle($title);
        $this->setLeaderRequired($leaderRequired);
        $this->setLeaderReleaseDropsParticipants($leaderReleaseDropsParticipants);
        $this->setAnnounceCallers($announceCallers);
        $this->setConferenceType($conferenceType);
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
    public function setBridgeServiceUserId($bridgeServiceUserId = null)
    {
        $this->bridgeServiceUserId = ($bridgeServiceUserId InstanceOf UserId)
             ? $bridgeServiceUserId
             : new UserId($bridgeServiceUserId);
        $this->bridgeServiceUserId->setName('bridgeServiceUserId');
        return $this;
    }

    /**
     * 
     * @return UserId $bridgeServiceUserId
     */
    public function getBridgeServiceUserId()
    {
        return ($this->bridgeServiceUserId) ? $this->bridgeServiceUserId->getValue() : null;
    }

    /**
     * 
     */
    public function setConferenceOwnerUserId($conferenceOwnerUserId = null)
    {
        $this->conferenceOwnerUserId = ($conferenceOwnerUserId InstanceOf UserId)
             ? $conferenceOwnerUserId
             : new UserId($conferenceOwnerUserId);
        $this->conferenceOwnerUserId->setName('conferenceOwnerUserId');
        return $this;
    }

    /**
     * 
     * @return UserId $conferenceOwnerUserId
     */
    public function getConferenceOwnerUserId()
    {
        return ($this->conferenceOwnerUserId) ? $this->conferenceOwnerUserId->getValue() : null;
    }

    /**
     * 
     */
    public function setTitle($title = null)
    {
        $this->title = ($title InstanceOf InstantConferencingTitle)
             ? $title
             : new InstantConferencingTitle($title);
        $this->title->setName('title');
        return $this;
    }

    /**
     * 
     * @return InstantConferencingTitle $title
     */
    public function getTitle()
    {
        return ($this->title) ? $this->title->getValue() : null;
    }

    /**
     * 
     */
    public function setLeaderRequired($leaderRequired = null)
    {
        $this->leaderRequired = new PrimitiveType($leaderRequired);
        $this->leaderRequired->setName('leaderRequired');
        return $this;
    }

    /**
     * 
     * @return boolean $leaderRequired
     */
    public function getLeaderRequired()
    {
        return ($this->leaderRequired) ? $this->leaderRequired->getValue() : null;
    }

    /**
     * 
     */
    public function setLeaderReleaseDropsParticipants($leaderReleaseDropsParticipants = null)
    {
        $this->leaderReleaseDropsParticipants = new PrimitiveType($leaderReleaseDropsParticipants);
        $this->leaderReleaseDropsParticipants->setName('leaderReleaseDropsParticipants');
        return $this;
    }

    /**
     * 
     * @return boolean $leaderReleaseDropsParticipants
     */
    public function getLeaderReleaseDropsParticipants()
    {
        return ($this->leaderReleaseDropsParticipants) ? $this->leaderReleaseDropsParticipants->getValue() : null;
    }

    /**
     * 
     */
    public function setAnnounceCallers($announceCallers = null)
    {
        $this->announceCallers = new PrimitiveType($announceCallers);
        $this->announceCallers->setName('announceCallers');
        return $this;
    }

    /**
     * 
     * @return boolean $announceCallers
     */
    public function getAnnounceCallers()
    {
        return ($this->announceCallers) ? $this->announceCallers->getValue() : null;
    }

    /**
     * 
     */
    public function setConferenceType($conferenceType = null)
    {
        $this->conferenceType = ($conferenceType InstanceOf InstantConferencingConferenceType)
             ? $conferenceType
             : new InstantConferencingConferenceType($conferenceType);
        $this->conferenceType->setName('conferenceType');
        return $this;
    }

    /**
     * 
     * @return InstantConferencingConferenceType $conferenceType
     */
    public function getConferenceType()
    {
        return ($this->conferenceType) ? $this->conferenceType->getValue() : null;
    }

    /**
     * 
     */
    public function setConferenceSchedule(InstantConferencingSchedule $conferenceSchedule = null)
    {
        $this->conferenceSchedule = ($conferenceSchedule InstanceOf InstantConferencingSchedule)
             ? $conferenceSchedule
             : new InstantConferencingSchedule($conferenceSchedule);
        $this->conferenceSchedule->setName('conferenceSchedule');
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
        $this->billingCode->setName('billingCode');
        return $this;
    }

    /**
     * 
     * @return InstantConferencingBillingCode $billingCode
     */
    public function getBillingCode()
    {
        return ($this->billingCode) ? $this->billingCode->getValue() : null;
    }
}
