<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceInstantConferencing; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceInstantConferencing\InstantConferencingConferenceKey;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceInstantConferencing\InstantConferencingBillingCode;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceInstantConferencing\InstantConferencingSchedule;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceInstantConferencing\InstantConferencingTitle;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\UserId;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Modify an existing conference.
 *         The response is either SuccessResponse or ErrorResponse.
 */
class UserInstantConferencingModifyConferenceRequest14 extends ComplexType implements ComplexInterface
{
    public    $name                            = __CLASS__;
    protected $userId                          = null;
    protected $conferenceKey                   = null;
    protected $title                           = null;
    protected $leaderRequired                  = null;
    protected $leaderReleaseDropsParticipants  = null;
    protected $announceCallers                 = null;
    protected $conferenceSchedule              = null;
    protected $billingCode                     = null;

    public function __construct(
         $userId,
         InstantConferencingConferenceKey $conferenceKey,
         $title = null,
         $leaderRequired = null,
         $leaderReleaseDropsParticipants = null,
         $announceCallers = null,
         InstantConferencingSchedule $conferenceSchedule = null,
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

    public function setConferenceKey(InstantConferencingConferenceKey $conferenceKey = null)
    {
    }

    public function getConferenceKey()
    {
        return (!$this->conferenceKey) ?: $this->conferenceKey->value();
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
