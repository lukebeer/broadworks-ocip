<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceInstantConferencing; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceInstantConferencing\InstantConferencingConferenceType;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceInstantConferencing\InstantConferencingBillingCode;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceInstantConferencing\InstantConferencingSchedule;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceInstantConferencing\InstantConferencingTitle;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\UserId;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Add a conference.
 *         The response is either SuccessResponse or ErrorResponse.
 */
class UserInstantConferencingAddConferenceRequest extends ComplexType implements ComplexInterface
{
    public    $name                            = __CLASS__;
    protected $userId                          = null;
    protected $bridgeServiceUserId             = null;
    protected $conferenceOwnerUserId           = null;
    protected $title                           = null;
    protected $leaderRequired                  = null;
    protected $leaderReleaseDropsParticipants  = null;
    protected $announceCallers                 = null;
    protected $conferenceType                  = null;
    protected $conferenceSchedule              = null;
    protected $billingCode                     = null;

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

    public function setBridgeServiceUserId($bridgeServiceUserId = null)
    {
        $this->bridgeServiceUserId = ($bridgeServiceUserId InstanceOf UserId)
             ? $bridgeServiceUserId
             : new UserId($bridgeServiceUserId);
    }

    public function getBridgeServiceUserId()
    {
        return (!$this->bridgeServiceUserId) ?: $this->bridgeServiceUserId->value();
    }

    public function setConferenceOwnerUserId($conferenceOwnerUserId = null)
    {
        $this->conferenceOwnerUserId = ($conferenceOwnerUserId InstanceOf UserId)
             ? $conferenceOwnerUserId
             : new UserId($conferenceOwnerUserId);
    }

    public function getConferenceOwnerUserId()
    {
        return (!$this->conferenceOwnerUserId) ?: $this->conferenceOwnerUserId->value();
    }

    public function setTitle($title = null)
    {
        $this->title = ($title InstanceOf InstantConferencingTitle)
             ? $title
             : new InstantConferencingTitle($title);
    }

    public function getTitle()
    {
        return (!$this->title) ?: $this->title->value();
    }

    public function setLeaderRequired(xs:boolean $leaderRequired = null)
    {
    }

    public function getLeaderRequired()
    {
        return (!$this->leaderRequired) ?: $this->leaderRequired->value();
    }

    public function setLeaderReleaseDropsParticipants(xs:boolean $leaderReleaseDropsParticipants = null)
    {
    }

    public function getLeaderReleaseDropsParticipants()
    {
        return (!$this->leaderReleaseDropsParticipants) ?: $this->leaderReleaseDropsParticipants->value();
    }

    public function setAnnounceCallers(xs:boolean $announceCallers = null)
    {
    }

    public function getAnnounceCallers()
    {
        return (!$this->announceCallers) ?: $this->announceCallers->value();
    }

    public function setConferenceType($conferenceType = null)
    {
        $this->conferenceType = ($conferenceType InstanceOf InstantConferencingConferenceType)
             ? $conferenceType
             : new InstantConferencingConferenceType($conferenceType);
    }

    public function getConferenceType()
    {
        return (!$this->conferenceType) ?: $this->conferenceType->value();
    }

    public function setConferenceSchedule(InstantConferencingSchedule $conferenceSchedule = null)
    {
    }

    public function getConferenceSchedule()
    {
        return (!$this->conferenceSchedule) ?: $this->conferenceSchedule->value();
    }

    public function setBillingCode($billingCode = null)
    {
        $this->billingCode = ($billingCode InstanceOf InstantConferencingBillingCode)
             ? $billingCode
             : new InstantConferencingBillingCode($billingCode);
    }

    public function getBillingCode()
    {
        return (!$this->billingCode) ?: $this->billingCode->value();
    }
}
