<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceVoiceMessaging; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceVoiceMessaging\VoiceMessagingUserMailServerSelection;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceVoiceMessaging\VoiceMessagingMailServerProtocol;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceVoiceMessaging\VoiceMessagingMailServerUserId;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\EmailAddress;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\NetAddress;
use Broadworks_OCIP\core\Builder\Types\PrimitiveType;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Response to the UserVoiceMessagingUserGetAdvancedVoiceManagementRequest14sp3.
 */
class UserVoiceMessagingUserGetAdvancedVoiceManagementResponse14sp3 extends ComplexType implements ComplexInterface
{
    public    $name                                = 'UserVoiceMessagingUserGetAdvancedVoiceManagementResponse14sp3';
    protected $mailServerSelection                 = null;
    protected $groupMailServerEmailAddress         = null;
    protected $groupMailServerUserId               = null;
    protected $personalMailServerNetAddress        = null;
    protected $personalMailServerProtocol          = null;
    protected $personalMailServerRealDeleteForImap = null;
    protected $personalMailServerEmailAddress      = null;
    protected $personalMailServerUserId            = null;

    /**
     * @return \Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceVoiceMessaging\UserVoiceMessagingUserGetAdvancedVoiceManagementResponse14sp3 $response
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
        if (!$mailServerSelection) return $this;
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
        return $this->mailServerSelection->getValue();
    }

    /**
     * 
     */
    public function setGroupMailServerEmailAddress($groupMailServerEmailAddress = null)
    {
        if (!$groupMailServerEmailAddress) return $this;
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
        return $this->groupMailServerEmailAddress->getValue();
    }

    /**
     * 
     */
    public function setGroupMailServerUserId($groupMailServerUserId = null)
    {
        if (!$groupMailServerUserId) return $this;
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
        return $this->groupMailServerUserId->getValue();
    }

    /**
     * 
     */
    public function setPersonalMailServerNetAddress($personalMailServerNetAddress = null)
    {
        if (!$personalMailServerNetAddress) return $this;
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
        return $this->personalMailServerNetAddress->getValue();
    }

    /**
     * 
     */
    public function setPersonalMailServerProtocol($personalMailServerProtocol = null)
    {
        if (!$personalMailServerProtocol) return $this;
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
        return $this->personalMailServerProtocol->getValue();
    }

    /**
     * 
     */
    public function setPersonalMailServerRealDeleteForImap($personalMailServerRealDeleteForImap = null)
    {
        if (!$personalMailServerRealDeleteForImap) return $this;
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
        return $this->personalMailServerRealDeleteForImap->getValue();
    }

    /**
     * 
     */
    public function setPersonalMailServerEmailAddress($personalMailServerEmailAddress = null)
    {
        if (!$personalMailServerEmailAddress) return $this;
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
        return $this->personalMailServerEmailAddress->getValue();
    }

    /**
     * 
     */
    public function setPersonalMailServerUserId($personalMailServerUserId = null)
    {
        if (!$personalMailServerUserId) return $this;
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
        return $this->personalMailServerUserId->getValue();
    }
}
