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
    public    $name                    = __CLASS__;
    protected $userId                  = null;
    protected $bridgeServiceUserId     = null;
    protected $leaderPhoneNumber       = null;
    protected $leaderName              = null;
    protected $participantPhoneNumber  = null;
    protected $participantName         = null;
    protected $billingCode             = null;

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

    public function setLeaderPhoneNumber($leaderPhoneNumber = null)
    {
        $this->leaderPhoneNumber = ($leaderPhoneNumber InstanceOf OutgoingDNorSIPURI)
             ? $leaderPhoneNumber
             : new OutgoingDNorSIPURI($leaderPhoneNumber);
    }

    public function getLeaderPhoneNumber()
    {
        return (!$this->leaderPhoneNumber) ?: $this->leaderPhoneNumber->value();
    }

    public function setLeaderName($leaderName = null)
    {
        $this->leaderName = ($leaderName InstanceOf InstantConferencingParticipantName)
             ? $leaderName
             : new InstantConferencingParticipantName($leaderName);
    }

    public function getLeaderName()
    {
        return (!$this->leaderName) ?: $this->leaderName->value();
    }

    public function setParticipantPhoneNumber($participantPhoneNumber = null)
    {
        $this->participantPhoneNumber = ($participantPhoneNumber InstanceOf OutgoingDNorSIPURI)
             ? $participantPhoneNumber
             : new OutgoingDNorSIPURI($participantPhoneNumber);
    }

    public function getParticipantPhoneNumber()
    {
        return (!$this->participantPhoneNumber) ?: $this->participantPhoneNumber->value();
    }

    public function setParticipantName($participantName = null)
    {
        $this->participantName = ($participantName InstanceOf InstantConferencingParticipantName)
             ? $participantName
             : new InstantConferencingParticipantName($participantName);
    }

    public function getParticipantName()
    {
        return (!$this->participantName) ?: $this->participantName->value();
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
