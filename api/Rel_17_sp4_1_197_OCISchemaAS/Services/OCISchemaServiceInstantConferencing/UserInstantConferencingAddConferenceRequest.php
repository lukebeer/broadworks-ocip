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
    public    $name                           = 'UserInstantConferencingAddConferenceRequest';
    protected $userId                         = null;
    protected $bridgeServiceUserId            = null;
    protected $conferenceOwnerUserId          = null;
    protected $title                          = null;
    protected $leaderRequired                 = null;
    protected $leaderReleaseDropsParticipants = null;
    protected $announceCallers                = null;
    protected $conferenceType                 = null;
    protected $conferenceSchedule             = null;
    protected $billingCode                    = null;

    public function __construct(
         $userId,
         $bridgeServiceUserId,
         $conferenceOwnerUserId,
         $title,
         $leaderRequired,
         $leaderReleaseDropsParticipants,
         $announceCallers,
         $conferenceType,
         InstantConferencingSchedule $conferenceSchedule,
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
     * @return 
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
     * @return UserId
     */
    public function getUserId()
    {
        return $this->userId->getValue();
    }

    /**
     * 
     */
    public function setBridgeServiceUserId($bridgeServiceUserId = null)
    {
        if (!$bridgeServiceUserId) return $this;
        $this->bridgeServiceUserId = ($bridgeServiceUserId InstanceOf UserId)
             ? $bridgeServiceUserId
             : new UserId($bridgeServiceUserId);
        $this->bridgeServiceUserId->setName('bridgeServiceUserId');
        return $this;
    }

    /**
     * 
     * @return UserId
     */
    public function getBridgeServiceUserId()
    {
        return $this->bridgeServiceUserId->getValue();
    }

    /**
     * 
     */
    public function setConferenceOwnerUserId($conferenceOwnerUserId = null)
    {
        if (!$conferenceOwnerUserId) return $this;
        $this->conferenceOwnerUserId = ($conferenceOwnerUserId InstanceOf UserId)
             ? $conferenceOwnerUserId
             : new UserId($conferenceOwnerUserId);
        $this->conferenceOwnerUserId->setName('conferenceOwnerUserId');
        return $this;
    }

    /**
     * 
     * @return UserId
     */
    public function getConferenceOwnerUserId()
    {
        return $this->conferenceOwnerUserId->getValue();
    }

    /**
     * 
     */
    public function setTitle($title = null)
    {
        if (!$title) return $this;
        $this->title = ($title InstanceOf InstantConferencingTitle)
             ? $title
             : new InstantConferencingTitle($title);
        $this->title->setName('title');
        return $this;
    }

    /**
     * 
     * @return InstantConferencingTitle
     */
    public function getTitle()
    {
        return $this->title->getValue();
    }

    /**
     * 
     */
    public function setLeaderRequired($leaderRequired = null)
    {
        if (!$leaderRequired) return $this;
        $this->leaderRequired = new PrimitiveType($leaderRequired);
        $this->leaderRequired->setName('leaderRequired');
        return $this;
    }

    /**
     * 
     * @return xs:boolean
     */
    public function getLeaderRequired()
    {
        return $this->leaderRequired->getValue();
    }

    /**
     * 
     */
    public function setLeaderReleaseDropsParticipants($leaderReleaseDropsParticipants = null)
    {
        if (!$leaderReleaseDropsParticipants) return $this;
        $this->leaderReleaseDropsParticipants = new PrimitiveType($leaderReleaseDropsParticipants);
        $this->leaderReleaseDropsParticipants->setName('leaderReleaseDropsParticipants');
        return $this;
    }

    /**
     * 
     * @return xs:boolean
     */
    public function getLeaderReleaseDropsParticipants()
    {
        return $this->leaderReleaseDropsParticipants->getValue();
    }

    /**
     * 
     */
    public function setAnnounceCallers($announceCallers = null)
    {
        if (!$announceCallers) return $this;
        $this->announceCallers = new PrimitiveType($announceCallers);
        $this->announceCallers->setName('announceCallers');
        return $this;
    }

    /**
     * 
     * @return xs:boolean
     */
    public function getAnnounceCallers()
    {
        return $this->announceCallers->getValue();
    }

    /**
     * 
     */
    public function setConferenceType($conferenceType = null)
    {
        if (!$conferenceType) return $this;
        $this->conferenceType = ($conferenceType InstanceOf InstantConferencingConferenceType)
             ? $conferenceType
             : new InstantConferencingConferenceType($conferenceType);
        $this->conferenceType->setName('conferenceType');
        return $this;
    }

    /**
     * 
     * @return InstantConferencingConferenceType
     */
    public function getConferenceType()
    {
        return $this->conferenceType->getValue();
    }

    /**
     * 
     */
    public function setConferenceSchedule(InstantConferencingSchedule $conferenceSchedule = null)
    {
        if (!$conferenceSchedule) return $this;
        $this->conferenceSchedule = $conferenceSchedule;
        $this->conferenceSchedule->setName('conferenceSchedule');
        return $this;
    }

    /**
     * 
     * @return InstantConferencingSchedule
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
        if (!$billingCode) return $this;
        $this->billingCode = ($billingCode InstanceOf InstantConferencingBillingCode)
             ? $billingCode
             : new InstantConferencingBillingCode($billingCode);
        $this->billingCode->setName('billingCode');
        return $this;
    }

    /**
     * 
     * @return InstantConferencingBillingCode
     */
    public function getBillingCode()
    {
        return $this->billingCode->getValue();
    }
}
