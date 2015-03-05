<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceInstantConferencing; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\UserId;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\OutgoingDNorSIPURI;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\InstantConferencingParticipantName;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\InstantConferencingBillingCode;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Add a conference quickly.
 *         The response is either SuccessResponse or ErrorResponse.
 */
class UserInstantConferencingAddQuickConferenceRequest extends ComplexType implements ComplexInterface
{
    public    $name = __CLASS__;

    public function __construct(
             $userId,
             $bridgeServiceUserId,
             $leaderPhoneNumber,
             $leaderName=null,
             $participantPhoneNumber,
             $participantName=null,
             $billingCode=null
    ) {
        $this->userId                 = new UserId($userId);
        $this->bridgeServiceUserId    = new UserId($bridgeServiceUserId);
        $this->leaderPhoneNumber      = new OutgoingDNorSIPURI($leaderPhoneNumber);
        $this->leaderName             = $leaderName;
        $this->participantPhoneNumber = new OutgoingDNorSIPURI($participantPhoneNumber);
        $this->participantName        = $participantName;
        $this->billingCode            = $billingCode;
        $this->args                   = func_get_args();
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

    public function setLeaderPhoneNumber($leaderPhoneNumber)
    {
        $leaderPhoneNumber and $this->leaderPhoneNumber = new OutgoingDNorSIPURI($leaderPhoneNumber);
    }

    public function getLeaderPhoneNumber()
    {
        return (!$this->leaderPhoneNumber) ?: $this->leaderPhoneNumber->value();
    }

    public function setLeaderName($leaderName)
    {
        $leaderName and $this->leaderName = new InstantConferencingParticipantName($leaderName);
    }

    public function getLeaderName()
    {
        return (!$this->leaderName) ?: $this->leaderName->value();
    }

    public function setParticipantPhoneNumber($participantPhoneNumber)
    {
        $participantPhoneNumber and $this->participantPhoneNumber = new OutgoingDNorSIPURI($participantPhoneNumber);
    }

    public function getParticipantPhoneNumber()
    {
        return (!$this->participantPhoneNumber) ?: $this->participantPhoneNumber->value();
    }

    public function setParticipantName($participantName)
    {
        $participantName and $this->participantName = new InstantConferencingParticipantName($participantName);
    }

    public function getParticipantName()
    {
        return (!$this->participantName) ?: $this->participantName->value();
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
