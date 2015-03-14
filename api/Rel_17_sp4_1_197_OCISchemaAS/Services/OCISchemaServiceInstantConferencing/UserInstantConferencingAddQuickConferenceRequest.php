<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceInstantConferencing; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceInstantConferencing\InstantConferencingParticipantName;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceInstantConferencing\InstantConferencingBillingCode;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\OutgoingDNorSIPURI;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\UserId;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Add a conference quickly.
 *         The response is either SuccessResponse or ErrorResponse.
 */
class UserInstantConferencingAddQuickConferenceRequest extends ComplexType implements ComplexInterface
{
    public    $name                   = 'UserInstantConferencingAddQuickConferenceRequest';
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
        if (!$userId) return $this;
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
     * @return UserId $bridgeServiceUserId
     */
    public function getBridgeServiceUserId()
    {
        return $this->bridgeServiceUserId->getValue();
    }

    /**
     * 
     */
    public function setLeaderPhoneNumber($leaderPhoneNumber = null)
    {
        if (!$leaderPhoneNumber) return $this;
        $this->leaderPhoneNumber = ($leaderPhoneNumber InstanceOf OutgoingDNorSIPURI)
             ? $leaderPhoneNumber
             : new OutgoingDNorSIPURI($leaderPhoneNumber);
        $this->leaderPhoneNumber->setName('leaderPhoneNumber');
        return $this;
    }

    /**
     * 
     * @return OutgoingDNorSIPURI $leaderPhoneNumber
     */
    public function getLeaderPhoneNumber()
    {
        return $this->leaderPhoneNumber->getValue();
    }

    /**
     * 
     */
    public function setLeaderName($leaderName = null)
    {
        if (!$leaderName) return $this;
        $this->leaderName = ($leaderName InstanceOf InstantConferencingParticipantName)
             ? $leaderName
             : new InstantConferencingParticipantName($leaderName);
        $this->leaderName->setName('leaderName');
        return $this;
    }

    /**
     * 
     * @return InstantConferencingParticipantName $leaderName
     */
    public function getLeaderName()
    {
        return $this->leaderName->getValue();
    }

    /**
     * 
     */
    public function setParticipantPhoneNumber($participantPhoneNumber = null)
    {
        if (!$participantPhoneNumber) return $this;
        $this->participantPhoneNumber = ($participantPhoneNumber InstanceOf OutgoingDNorSIPURI)
             ? $participantPhoneNumber
             : new OutgoingDNorSIPURI($participantPhoneNumber);
        $this->participantPhoneNumber->setName('participantPhoneNumber');
        return $this;
    }

    /**
     * 
     * @return OutgoingDNorSIPURI $participantPhoneNumber
     */
    public function getParticipantPhoneNumber()
    {
        return $this->participantPhoneNumber->getValue();
    }

    /**
     * 
     */
    public function setParticipantName($participantName = null)
    {
        if (!$participantName) return $this;
        $this->participantName = ($participantName InstanceOf InstantConferencingParticipantName)
             ? $participantName
             : new InstantConferencingParticipantName($participantName);
        $this->participantName->setName('participantName');
        return $this;
    }

    /**
     * 
     * @return InstantConferencingParticipantName $participantName
     */
    public function getParticipantName()
    {
        return $this->participantName->getValue();
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
     * @return InstantConferencingBillingCode $billingCode
     */
    public function getBillingCode()
    {
        return $this->billingCode->getValue();
    }
}
