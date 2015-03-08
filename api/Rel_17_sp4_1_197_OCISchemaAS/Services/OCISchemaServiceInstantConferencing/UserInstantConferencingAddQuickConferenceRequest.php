<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceInstantConferencing; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceInstantConferencing\InstantConferencingParticipantName;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceInstantConferencing\InstantConferencingBillingCode;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\OutgoingDNorSIPURI;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\UserId;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
     * Add a conference quickly.
 *         The response is either SuccessResponse or ErrorResponse.
 */
class UserInstantConferencingAddQuickConferenceRequest extends ComplexType implements ComplexInterface
{
    public    $name                   = __CLASS__;
    protected $userId                 = null;
    protected $bridgeServiceUserId    = null;
    protected $leaderPhoneNumber      = null;
    protected $leaderName             = null;
    protected $participantPhoneNumber = null;
    protected $participantName        = null;
    protected $billingCode            = null;

    public function __construct(
         $userId,
         $bridgeServiceUserId,
         $leaderPhoneNumber,
         $leaderName = null,
         $participantPhoneNumber,
         $participantName = null,
         $billingCode = null
    ) {
        $this->setUserId($userId);
        $this->setBridgeServiceUserId($bridgeServiceUserId);
        $this->setLeaderPhoneNumber($leaderPhoneNumber);
        $this->setLeaderName($leaderName);
        $this->setParticipantPhoneNumber($participantPhoneNumber);
        $this->setParticipantName($participantName);
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
     * Phone Number or SIP URI that can be used to dial.
     *         URI Validation:
     *         - must be of the format string@string where string is at least one valid character and there is one and only one @.
     *         - don't allow sip:
     *         - allow the following characters in the user portions:
     *           alphanumeric   -   _   .   !   ~   *   '   (   )
     *         - allow the following characters in the host portion:
     *           alphanumeric   -   .
     */
    public function setLeaderPhoneNumber($leaderPhoneNumber = null)
    {
        $this->leaderPhoneNumber = ($leaderPhoneNumber InstanceOf OutgoingDNorSIPURI)
             ? $leaderPhoneNumber
             : new OutgoingDNorSIPURI($leaderPhoneNumber);
    }

    /**
     * Phone Number or SIP URI that can be used to dial.
     *         URI Validation:
     *         - must be of the format string@string where string is at least one valid character and there is one and only one @.
     *         - don't allow sip:
     *         - allow the following characters in the user portions:
     *           alphanumeric   -   _   .   !   ~   *   '   (   )
     *         - allow the following characters in the host portion:
     *           alphanumeric   -   .
     */
    public function getLeaderPhoneNumber()
    {
        return (!$this->leaderPhoneNumber) ?: $this->leaderPhoneNumber->getValue();
    }

    /**
     * Conference leader or participant descriptive name.
     */
    public function setLeaderName($leaderName = null)
    {
        $this->leaderName = ($leaderName InstanceOf InstantConferencingParticipantName)
             ? $leaderName
             : new InstantConferencingParticipantName($leaderName);
    }

    /**
     * Conference leader or participant descriptive name.
     */
    public function getLeaderName()
    {
        return (!$this->leaderName) ?: $this->leaderName->getValue();
    }

    /**
     * Phone Number or SIP URI that can be used to dial.
     *         URI Validation:
     *         - must be of the format string@string where string is at least one valid character and there is one and only one @.
     *         - don't allow sip:
     *         - allow the following characters in the user portions:
     *           alphanumeric   -   _   .   !   ~   *   '   (   )
     *         - allow the following characters in the host portion:
     *           alphanumeric   -   .
     */
    public function setParticipantPhoneNumber($participantPhoneNumber = null)
    {
        $this->participantPhoneNumber = ($participantPhoneNumber InstanceOf OutgoingDNorSIPURI)
             ? $participantPhoneNumber
             : new OutgoingDNorSIPURI($participantPhoneNumber);
    }

    /**
     * Phone Number or SIP URI that can be used to dial.
     *         URI Validation:
     *         - must be of the format string@string where string is at least one valid character and there is one and only one @.
     *         - don't allow sip:
     *         - allow the following characters in the user portions:
     *           alphanumeric   -   _   .   !   ~   *   '   (   )
     *         - allow the following characters in the host portion:
     *           alphanumeric   -   .
     */
    public function getParticipantPhoneNumber()
    {
        return (!$this->participantPhoneNumber) ?: $this->participantPhoneNumber->getValue();
    }

    /**
     * Conference leader or participant descriptive name.
     */
    public function setParticipantName($participantName = null)
    {
        $this->participantName = ($participantName InstanceOf InstantConferencingParticipantName)
             ? $participantName
             : new InstantConferencingParticipantName($participantName);
    }

    /**
     * Conference leader or participant descriptive name.
     */
    public function getParticipantName()
    {
        return (!$this->participantName) ?: $this->participantName->getValue();
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
