<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceInstantConferencing; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\UserId;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\InstantConferencingTitle;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\xs:boolean;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\InstantConferencingConferenceType;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\InstantConferencingSchedule;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\InstantConferencingBillingCode;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Add a conference.
 *         The response is either SuccessResponse or ErrorResponse.
 */
class UserInstantConferencingAddConferenceRequest extends ComplexType implements ComplexInterface
{
    public    $name = __CLASS__;

    public function __construct(
             $userId,
             $bridgeServiceUserId,
             $conferenceOwnerUserId,
             $title,
             $leaderRequired,
             $leaderReleaseDropsParticipants,
             $announceCallers,
             $conferenceType,
             $conferenceSchedule,
             $billingCode=null
    ) {
        $this->userId                         = new UserId($userId);
        $this->bridgeServiceUserId            = new UserId($bridgeServiceUserId);
        $this->conferenceOwnerUserId          = new UserId($conferenceOwnerUserId);
        $this->title                          = $title;
        $this->leaderRequired                 = $leaderRequired;
        $this->leaderReleaseDropsParticipants = $leaderReleaseDropsParticipants;
        $this->announceCallers                = $announceCallers;
        $this->conferenceType                 = $conferenceType;
        $this->conferenceSchedule             = $conferenceSchedule;
        $this->billingCode                    = $billingCode;
        $this->args                           = func_get_args();
    }

    public function setUserId($userId)
    {
        $userId and $this->userId = new UserId($userId);
    }

    public function getUserId()
    {
        return (!$this->userId) ?: $this->userId->value();
    }

    public function setBridgeServiceUserId($bridgeServiceUserId)
    {
        $bridgeServiceUserId and $this->bridgeServiceUserId = new UserId($bridgeServiceUserId);
    }

    public function getBridgeServiceUserId()
    {
        return (!$this->bridgeServiceUserId) ?: $this->bridgeServiceUserId->value();
    }

    public function setConferenceOwnerUserId($conferenceOwnerUserId)
    {
        $conferenceOwnerUserId and $this->conferenceOwnerUserId = new UserId($conferenceOwnerUserId);
    }

    public function getConferenceOwnerUserId()
    {
        return (!$this->conferenceOwnerUserId) ?: $this->conferenceOwnerUserId->value();
    }

    public function setTitle($title)
    {
        $title and $this->title = new InstantConferencingTitle($title);
    }

    public function getTitle()
    {
        return (!$this->title) ?: $this->title->value();
    }

    public function setLeaderRequired($leaderRequired)
    {
        $leaderRequired and $this->leaderRequired = new xs:boolean($leaderRequired);
    }

    public function getLeaderRequired()
    {
        return (!$this->leaderRequired) ?: $this->leaderRequired->value();
    }

    public function setLeaderReleaseDropsParticipants($leaderReleaseDropsParticipants)
    {
        $leaderReleaseDropsParticipants and $this->leaderReleaseDropsParticipants = new xs:boolean($leaderReleaseDropsParticipants);
    }

    public function getLeaderReleaseDropsParticipants()
    {
        return (!$this->leaderReleaseDropsParticipants) ?: $this->leaderReleaseDropsParticipants->value();
    }

    public function setAnnounceCallers($announceCallers)
    {
        $announceCallers and $this->announceCallers = new xs:boolean($announceCallers);
    }

    public function getAnnounceCallers()
    {
        return (!$this->announceCallers) ?: $this->announceCallers->value();
    }

    public function setConferenceType($conferenceType)
    {
        $conferenceType and $this->conferenceType = new InstantConferencingConferenceType($conferenceType);
    }

    public function getConferenceType()
    {
        return (!$this->conferenceType) ?: $this->conferenceType->value();
    }

    public function setConferenceSchedule($conferenceSchedule)
    {
        $conferenceSchedule and $this->conferenceSchedule = new InstantConferencingSchedule($conferenceSchedule);
    }

    public function getConferenceSchedule()
    {
        return (!$this->conferenceSchedule) ?: $this->conferenceSchedule->value();
    }

    public function setBillingCode($billingCode)
    {
        $billingCode and $this->billingCode = new InstantConferencingBillingCode($billingCode);
    }

    public function getBillingCode()
    {
        return (!$this->billingCode) ?: $this->billingCode->value();
    }
}
