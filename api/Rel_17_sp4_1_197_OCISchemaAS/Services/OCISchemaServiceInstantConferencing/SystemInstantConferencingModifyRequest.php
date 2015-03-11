<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceInstantConferencing; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\EmailAddress;
use Broadworks_OCIP\core\Builder\Types\PrimitiveType;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Modify the system level data associated with Instant Conferencing.
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class SystemInstantConferencingModifyRequest extends ComplexType implements ComplexInterface
{
    public    $name                                       = 'SystemInstantConferencingModifyRequest';
    protected $defaultDropAllParticipantsWhenLeaderLeaves = null;
    protected $defaultAllowDialOutInInvitation            = null;
    protected $defaultFromAddress                         = null;

    public function __construct(
         $defaultDropAllParticipantsWhenLeaderLeaves = null,
         $defaultAllowDialOutInInvitation = null,
         $defaultFromAddress = null
    ) {
        $this->setDefaultDropAllParticipantsWhenLeaderLeaves($defaultDropAllParticipantsWhenLeaderLeaves);
        $this->setDefaultAllowDialOutInInvitation($defaultAllowDialOutInInvitation);
        $this->setDefaultFromAddress($defaultFromAddress);
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
    public function setDefaultDropAllParticipantsWhenLeaderLeaves($defaultDropAllParticipantsWhenLeaderLeaves = null)
    {
        if (!$defaultDropAllParticipantsWhenLeaderLeaves) return $this;
        $this->defaultDropAllParticipantsWhenLeaderLeaves = new PrimitiveType($defaultDropAllParticipantsWhenLeaderLeaves);
        $this->defaultDropAllParticipantsWhenLeaderLeaves->setName('defaultDropAllParticipantsWhenLeaderLeaves');
        return $this;
    }

    /**
     * 
     * @return xs:boolean
     */
    public function getDefaultDropAllParticipantsWhenLeaderLeaves()
    {
        return $this->defaultDropAllParticipantsWhenLeaderLeaves->getValue();
    }

    /**
     * 
     */
    public function setDefaultAllowDialOutInInvitation($defaultAllowDialOutInInvitation = null)
    {
        if (!$defaultAllowDialOutInInvitation) return $this;
        $this->defaultAllowDialOutInInvitation = new PrimitiveType($defaultAllowDialOutInInvitation);
        $this->defaultAllowDialOutInInvitation->setName('defaultAllowDialOutInInvitation');
        return $this;
    }

    /**
     * 
     * @return xs:boolean
     */
    public function getDefaultAllowDialOutInInvitation()
    {
        return $this->defaultAllowDialOutInInvitation->getValue();
    }

    /**
     * 
     */
    public function setDefaultFromAddress($defaultFromAddress = null)
    {
        if (!$defaultFromAddress) return $this;
        $this->defaultFromAddress = ($defaultFromAddress InstanceOf EmailAddress)
             ? $defaultFromAddress
             : new EmailAddress($defaultFromAddress);
        $this->defaultFromAddress->setName('defaultFromAddress');
        return $this;
    }

    /**
     * 
     * @return EmailAddress
     */
    public function getDefaultFromAddress()
    {
        return $this->defaultFromAddress->getValue();
    }
}
