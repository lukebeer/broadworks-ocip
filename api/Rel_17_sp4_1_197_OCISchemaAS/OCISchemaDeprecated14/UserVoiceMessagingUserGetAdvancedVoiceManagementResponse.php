<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated14; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceVoiceMessaging\VoiceMessagingUserMailServerSelection;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceVoiceMessaging\VoiceMessagingMailServerProtocol;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceVoiceMessaging\VoiceMessagingMailServerUserId;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\EmailAddress;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\NetAddress;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\Password;
use Broadworks_OCIP\core\Builder\Types\PrimitiveType;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Response to the UserVoiceMessagingUserGetAdvancedVoiceManagementRequest.
 *         Replaced By: UserVoiceMessagingUserGetAdvancedVoiceManagementResponse14sp3
 */
class UserVoiceMessagingUserGetAdvancedVoiceManagementResponse extends ComplexType implements ComplexInterface
{
    public    $name = 'UserVoiceMessagingUserGetAdvancedVoiceManagementResponse';
    protected $mailServerSelection;
    protected $groupMailServerEmailAddress;
    protected $groupMailServerUserId;
    protected $groupMailServerPassword;
    protected $personalMailServerNetAddress;
    protected $personalMailServerProtocol;
    protected $personalMailServerRealDeleteForImap;
    protected $personalMailServerEmailAddress;
    protected $personalMailServerUserId;
    protected $personalMailServerPassword;

    /**
     * @return \Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated14\UserVoiceMessagingUserGetAdvancedVoiceManagementResponse $response
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * 
     */
    public function setMailServerSelection($mailServerSelection = null)
    {
        $this->mailServerSelection = ($mailServerSelection InstanceOf VoiceMessagingUserMailServerSelection)
             ? $mailServerSelection
             : new VoiceMessagingUserMailServerSelection($mailServerSelection);
        $this->mailServerSelection->setName('mailServerSelection');
        return $this;
    }

    /**
     * 
     * @return VoiceMessagingUserMailServerSelection $mailServerSelection
     */
    public function getMailServerSelection()
    {
        return ($this->mailServerSelection) ? $this->mailServerSelection->getValue() : null;
    }

    /**
     * 
     */
    public function setGroupMailServerEmailAddress($groupMailServerEmailAddress = null)
    {
        $this->groupMailServerEmailAddress = ($groupMailServerEmailAddress InstanceOf EmailAddress)
             ? $groupMailServerEmailAddress
             : new EmailAddress($groupMailServerEmailAddress);
        $this->groupMailServerEmailAddress->setName('groupMailServerEmailAddress');
        return $this;
    }

    /**
     * 
     * @return EmailAddress $groupMailServerEmailAddress
     */
    public function getGroupMailServerEmailAddress()
    {
        return ($this->groupMailServerEmailAddress) ? $this->groupMailServerEmailAddress->getValue() : null;
    }

    /**
     * 
     */
    public function setGroupMailServerUserId($groupMailServerUserId = null)
    {
        $this->groupMailServerUserId = ($groupMailServerUserId InstanceOf VoiceMessagingMailServerUserId)
             ? $groupMailServerUserId
             : new VoiceMessagingMailServerUserId($groupMailServerUserId);
        $this->groupMailServerUserId->setName('groupMailServerUserId');
        return $this;
    }

    /**
     * 
     * @return VoiceMessagingMailServerUserId $groupMailServerUserId
     */
    public function getGroupMailServerUserId()
    {
        return ($this->groupMailServerUserId) ? $this->groupMailServerUserId->getValue() : null;
    }

    /**
     * 
     */
    public function setGroupMailServerPassword($groupMailServerPassword = null)
    {
        $this->groupMailServerPassword = ($groupMailServerPassword InstanceOf Password)
             ? $groupMailServerPassword
             : new Password($groupMailServerPassword);
        $this->groupMailServerPassword->setName('groupMailServerPassword');
        return $this;
    }

    /**
     * 
     * @return Password $groupMailServerPassword
     */
    public function getGroupMailServerPassword()
    {
        return ($this->groupMailServerPassword) ? $this->groupMailServerPassword->getValue() : null;
    }

    /**
     * 
     */
    public function setPersonalMailServerNetAddress($personalMailServerNetAddress = null)
    {
        $this->personalMailServerNetAddress = ($personalMailServerNetAddress InstanceOf NetAddress)
             ? $personalMailServerNetAddress
             : new NetAddress($personalMailServerNetAddress);
        $this->personalMailServerNetAddress->setName('personalMailServerNetAddress');
        return $this;
    }

    /**
     * 
     * @return NetAddress $personalMailServerNetAddress
     */
    public function getPersonalMailServerNetAddress()
    {
        return ($this->personalMailServerNetAddress) ? $this->personalMailServerNetAddress->getValue() : null;
    }

    /**
     * 
     */
    public function setPersonalMailServerProtocol($personalMailServerProtocol = null)
    {
        $this->personalMailServerProtocol = ($personalMailServerProtocol InstanceOf VoiceMessagingMailServerProtocol)
             ? $personalMailServerProtocol
             : new VoiceMessagingMailServerProtocol($personalMailServerProtocol);
        $this->personalMailServerProtocol->setName('personalMailServerProtocol');
        return $this;
    }

    /**
     * 
     * @return VoiceMessagingMailServerProtocol $personalMailServerProtocol
     */
    public function getPersonalMailServerProtocol()
    {
        return ($this->personalMailServerProtocol) ? $this->personalMailServerProtocol->getValue() : null;
    }

    /**
     * 
     */
    public function setPersonalMailServerRealDeleteForImap($personalMailServerRealDeleteForImap = null)
    {
        $this->personalMailServerRealDeleteForImap = new PrimitiveType($personalMailServerRealDeleteForImap);
        $this->personalMailServerRealDeleteForImap->setName('personalMailServerRealDeleteForImap');
        return $this;
    }

    /**
     * 
     * @return boolean $personalMailServerRealDeleteForImap
     */
    public function getPersonalMailServerRealDeleteForImap()
    {
        return ($this->personalMailServerRealDeleteForImap) ? $this->personalMailServerRealDeleteForImap->getValue() : null;
    }

    /**
     * 
     */
    public function setPersonalMailServerEmailAddress($personalMailServerEmailAddress = null)
    {
        $this->personalMailServerEmailAddress = ($personalMailServerEmailAddress InstanceOf EmailAddress)
             ? $personalMailServerEmailAddress
             : new EmailAddress($personalMailServerEmailAddress);
        $this->personalMailServerEmailAddress->setName('personalMailServerEmailAddress');
        return $this;
    }

    /**
     * 
     * @return EmailAddress $personalMailServerEmailAddress
     */
    public function getPersonalMailServerEmailAddress()
    {
        return ($this->personalMailServerEmailAddress) ? $this->personalMailServerEmailAddress->getValue() : null;
    }

    /**
     * 
     */
    public function setPersonalMailServerUserId($personalMailServerUserId = null)
    {
        $this->personalMailServerUserId = ($personalMailServerUserId InstanceOf VoiceMessagingMailServerUserId)
             ? $personalMailServerUserId
             : new VoiceMessagingMailServerUserId($personalMailServerUserId);
        $this->personalMailServerUserId->setName('personalMailServerUserId');
        return $this;
    }

    /**
     * 
     * @return VoiceMessagingMailServerUserId $personalMailServerUserId
     */
    public function getPersonalMailServerUserId()
    {
        return ($this->personalMailServerUserId) ? $this->personalMailServerUserId->getValue() : null;
    }

    /**
     * 
     */
    public function setPersonalMailServerPassword($personalMailServerPassword = null)
    {
        $this->personalMailServerPassword = ($personalMailServerPassword InstanceOf Password)
             ? $personalMailServerPassword
             : new Password($personalMailServerPassword);
        $this->personalMailServerPassword->setName('personalMailServerPassword');
        return $this;
    }

    /**
     * 
     * @return Password $personalMailServerPassword
     */
    public function getPersonalMailServerPassword()
    {
        return ($this->personalMailServerPassword) ? $this->personalMailServerPassword->getValue() : null;
    }
}
