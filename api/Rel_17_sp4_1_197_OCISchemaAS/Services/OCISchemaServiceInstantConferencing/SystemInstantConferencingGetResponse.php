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
 * Response to SystemInstantConferencingGetRequest.
 */
class SystemInstantConferencingGetResponse extends ComplexType implements ComplexInterface
{
    public    $name = 'SystemInstantConferencingGetResponse';
    protected $defaultDropAllParticipantsWhenLeaderLeaves;
    protected $defaultAllowDialOutInInvitation;
    protected $defaultFromAddress;

    /**
     * @return \Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceInstantConferencing\SystemInstantConferencingGetResponse $response
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
        $this->defaultDropAllParticipantsWhenLeaderLeaves = new PrimitiveType($defaultDropAllParticipantsWhenLeaderLeaves);
        $this->defaultDropAllParticipantsWhenLeaderLeaves->setName('defaultDropAllParticipantsWhenLeaderLeaves');
        return $this;
    }

    /**
     * 
     * @return boolean $defaultDropAllParticipantsWhenLeaderLeaves
     */
    public function getDefaultDropAllParticipantsWhenLeaderLeaves()
    {
        return ($this->defaultDropAllParticipantsWhenLeaderLeaves) ? $this->defaultDropAllParticipantsWhenLeaderLeaves->getValue() : null;
    }

    /**
     * 
     */
    public function setDefaultAllowDialOutInInvitation($defaultAllowDialOutInInvitation = null)
    {
        $this->defaultAllowDialOutInInvitation = new PrimitiveType($defaultAllowDialOutInInvitation);
        $this->defaultAllowDialOutInInvitation->setName('defaultAllowDialOutInInvitation');
        return $this;
    }

    /**
     * 
     * @return boolean $defaultAllowDialOutInInvitation
     */
    public function getDefaultAllowDialOutInInvitation()
    {
        return ($this->defaultAllowDialOutInInvitation) ? $this->defaultAllowDialOutInInvitation->getValue() : null;
    }

    /**
     * 
     */
    public function setDefaultFromAddress($defaultFromAddress = null)
    {
        $this->defaultFromAddress = ($defaultFromAddress InstanceOf EmailAddress)
             ? $defaultFromAddress
             : new EmailAddress($defaultFromAddress);
        $this->defaultFromAddress->setName('defaultFromAddress');
        return $this;
    }

    /**
     * 
     * @return EmailAddress $defaultFromAddress
     */
    public function getDefaultFromAddress()
    {
        return ($this->defaultFromAddress) ? $this->defaultFromAddress->getValue() : null;
    }
}
