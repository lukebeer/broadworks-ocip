<?php
/**
 * This file is part of http://github.com/LukeBeer/BroadworksOCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceInstantConferencing; 

use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\EmailAddress;
use BroadworksOCIP\Builder\Types\PrimitiveType;
use BroadworksOCIP\Builder\Types\ComplexInterface;
use BroadworksOCIP\Builder\Types\ComplexType;
use BroadworksOCIP\Response\ResponseOutput;
use BroadworksOCIP\Client\Client;


/**
 * Response to SystemInstantConferencingGetRequest.
 */
class SystemInstantConferencingGetResponse extends ComplexType implements ComplexInterface
{
    public    $elementName = 'SystemInstantConferencingGetResponse';
    protected $defaultDropAllParticipantsWhenLeaderLeaves;
    protected $defaultAllowDialOutInInvitation;
    protected $defaultFromAddress;

    /**
     * @return \BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceInstantConferencing\SystemInstantConferencingGetResponse $response
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
        $this->defaultDropAllParticipantsWhenLeaderLeaves->setElementName('defaultDropAllParticipantsWhenLeaderLeaves');
        return $this;
    }

    /**
     * 
     * @return boolean $defaultDropAllParticipantsWhenLeaderLeaves
     */
    public function getDefaultDropAllParticipantsWhenLeaderLeaves()
    {
        return ($this->defaultDropAllParticipantsWhenLeaderLeaves)
            ? $this->defaultDropAllParticipantsWhenLeaderLeaves->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setDefaultAllowDialOutInInvitation($defaultAllowDialOutInInvitation = null)
    {
        $this->defaultAllowDialOutInInvitation = new PrimitiveType($defaultAllowDialOutInInvitation);
        $this->defaultAllowDialOutInInvitation->setElementName('defaultAllowDialOutInInvitation');
        return $this;
    }

    /**
     * 
     * @return boolean $defaultAllowDialOutInInvitation
     */
    public function getDefaultAllowDialOutInInvitation()
    {
        return ($this->defaultAllowDialOutInInvitation)
            ? $this->defaultAllowDialOutInInvitation->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setDefaultFromAddress($defaultFromAddress = null)
    {
        $this->defaultFromAddress = ($defaultFromAddress InstanceOf EmailAddress)
             ? $defaultFromAddress
             : new EmailAddress($defaultFromAddress);
        $this->defaultFromAddress->setElementName('defaultFromAddress');
        return $this;
    }

    /**
     * 
     * @return EmailAddress $defaultFromAddress
     */
    public function getDefaultFromAddress()
    {
        return ($this->defaultFromAddress)
            ? $this->defaultFromAddress->getElementValue()
            : null;
    }
}
