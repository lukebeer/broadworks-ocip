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
    public    $name = 'UserInstantConferencingAddQuickConferenceRequest';
    protected $userId;
    protected $bridgeServiceUserId;
    protected $leaderPhoneNumber;
    protected $leaderName;
    protected $participantPhoneNumber;
    protected $participantName;
    protected $billingCode;

    public function __construct(
         $userId = '',
         $bridgeServiceUserId = '',
         $leaderPhoneNumber = '',
         $leaderName = null,
         $participantPhoneNumber = '',
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
    public function setLeaderPhoneNumber($leaderPhoneNumber = null)
    {
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
        return ($this->leaderPhoneNumber) ? $this->leaderPhoneNumber->getValue() : null;
    }

    /**
     * 
     */
    public function setLeaderName($leaderName = null)
    {
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
        return ($this->leaderName) ? $this->leaderName->getValue() : null;
    }

    /**
     * 
     */
    public function setParticipantPhoneNumber($participantPhoneNumber = null)
    {
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
        return ($this->participantPhoneNumber) ? $this->participantPhoneNumber->getValue() : null;
    }

    /**
     * 
     */
    public function setParticipantName($participantName = null)
    {
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
        return ($this->participantName) ? $this->participantName->getValue() : null;
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
