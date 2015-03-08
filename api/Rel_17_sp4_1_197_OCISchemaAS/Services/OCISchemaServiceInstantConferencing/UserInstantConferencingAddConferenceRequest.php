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
    public    $name                           = __CLASS__;
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
          $conferenceSchedule,
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
     * A user id consists of a user-portion optionally followed by an @ sign and a domain name.
     *         If the domain is not specified, it is assumed to be the system default domain.
     *         The domain is required when adding normal users and virtual users, i.e. Auto Attendants,
     *         Hunt Groups, Call Centers....
     *         The domain must not be specified for system-level and service-provider-level administrators.
     */
    public function setBridgeServiceUserId($bridgeServiceUserId = null)
    {
        $this->bridgeServiceUserId = ($bridgeServiceUserId InstanceOf UserId)
             ? $bridgeServiceUserId
             : new UserId($bridgeServiceUserId);
    }

    /**
     * A user id consists of a user-portion optionally followed by an @ sign and a domain name.
     *         If the domain is not specified, it is assumed to be the system default domain.
     *         The domain is required when adding normal users and virtual users, i.e. Auto Attendants,
     *         Hunt Groups, Call Centers....
     *         The domain must not be specified for system-level and service-provider-level administrators.
     */
    public function getBridgeServiceUserId()
    {
        return (!$this->bridgeServiceUserId) ?: $this->bridgeServiceUserId->getValue();
    }

    /**
     * A user id consists of a user-portion optionally followed by an @ sign and a domain name.
     *         If the domain is not specified, it is assumed to be the system default domain.
     *         The domain is required when adding normal users and virtual users, i.e. Auto Attendants,
     *         Hunt Groups, Call Centers....
     *         The domain must not be specified for system-level and service-provider-level administrators.
     */
    public function setConferenceOwnerUserId($conferenceOwnerUserId = null)
    {
        $this->conferenceOwnerUserId = ($conferenceOwnerUserId InstanceOf UserId)
             ? $conferenceOwnerUserId
             : new UserId($conferenceOwnerUserId);
    }

    /**
     * A user id consists of a user-portion optionally followed by an @ sign and a domain name.
     *         If the domain is not specified, it is assumed to be the system default domain.
     *         The domain is required when adding normal users and virtual users, i.e. Auto Attendants,
     *         Hunt Groups, Call Centers....
     *         The domain must not be specified for system-level and service-provider-level administrators.
     */
    public function getConferenceOwnerUserId()
    {
        return (!$this->conferenceOwnerUserId) ?: $this->conferenceOwnerUserId->getValue();
    }

    /**
     * Title of instant conference.
     */
    public function setTitle($title = null)
    {
        $this->title = ($title InstanceOf InstantConferencingTitle)
             ? $title
             : new InstantConferencingTitle($title);
    }

    /**
     * Title of instant conference.
     */
    public function getTitle()
    {
        return (!$this->title) ?: $this->title->getValue();
    }

    /**
     * 
     */
    public function setLeaderRequired($leaderRequired = null)
    {
        $this->leaderRequired = (boolean) $leaderRequired;
    }

    /**
     * 
     */
    public function getLeaderRequired()
    {
        return (!$this->leaderRequired) ?: $this->leaderRequired->getValue();
    }

    /**
     * 
     */
    public function setLeaderReleaseDropsParticipants($leaderReleaseDropsParticipants = null)
    {
        $this->leaderReleaseDropsParticipants = (boolean) $leaderReleaseDropsParticipants;
    }

    /**
     * 
     */
    public function getLeaderReleaseDropsParticipants()
    {
        return (!$this->leaderReleaseDropsParticipants) ?: $this->leaderReleaseDropsParticipants->getValue();
    }

    /**
     * 
     */
    public function setAnnounceCallers($announceCallers = null)
    {
        $this->announceCallers = (boolean) $announceCallers;
    }

    /**
     * 
     */
    public function getAnnounceCallers()
    {
        return (!$this->announceCallers) ?: $this->announceCallers->getValue();
    }

    /**
     * The type of conference.
     */
    public function setConferenceType($conferenceType = null)
    {
        $this->conferenceType = ($conferenceType InstanceOf InstantConferencingConferenceType)
             ? $conferenceType
             : new InstantConferencingConferenceType($conferenceType);
    }

    /**
     * The type of conference.
     */
    public function getConferenceType()
    {
        return (!$this->conferenceType) ?: $this->conferenceType->getValue();
    }

    /**
     * Conference schedule used in the context of a conference add.
     */
    public function setConferenceSchedule(InstantConferencingSchedule $conferenceSchedule = null)
    {
        $this->conferenceSchedule =  $conferenceSchedule;
    }

    /**
     * Conference schedule used in the context of a conference add.
     */
    public function getConferenceSchedule()
    {
        return (!$this->conferenceSchedule) ?: $this->conferenceSchedule->getValue();
    }

    /**
     * Instant conferencing project billing code.
     */
    public function setBillingCode($billingCode = null)
    {
        $this->billingCode = ($billingCode InstanceOf InstantConferencingBillingCode)
             ? $billingCode
             : new InstantConferencingBillingCode($billingCode);
    }

    /**
     * Instant conferencing project billing code.
     */
    public function getBillingCode()
    {
        return (!$this->billingCode) ?: $this->billingCode->getValue();
    }
}
