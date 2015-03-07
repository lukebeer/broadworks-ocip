<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceVoiceMessaging; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceVoiceMessaging\VoiceMessagingUserMailServerSelection;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceVoiceMessaging\VoiceMessagingMailServerProtocol;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceVoiceMessaging\VoiceMessagingMailServerUserId;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\EmailAddress;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\NetAddress;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Response to the UserVoiceMessagingUserGetAdvancedVoiceManagementRequest14sp3.
 */
class UserVoiceMessagingUserGetAdvancedVoiceManagementResponse14sp3 extends ComplexType implements ComplexInterface
{
    public    $name                                 = __CLASS__;
    protected $mailServerSelection                  = null;
    protected $groupMailServerEmailAddress          = null;
    protected $groupMailServerUserId                = null;
    protected $personalMailServerNetAddress         = null;
    protected $personalMailServerProtocol           = null;
    protected $personalMailServerRealDeleteForImap  = null;
    protected $personalMailServerEmailAddress       = null;
    protected $personalMailServerUserId             = null;


    public function setMailServerSelection($mailServerSelection = null)
    {
        $this->mailServerSelection = ($mailServerSelection InstanceOf VoiceMessagingUserMailServerSelection)
             ? $mailServerSelection
             : new VoiceMessagingUserMailServerSelection($mailServerSelection);
    }

    public function getMailServerSelection()
    {
        return (!$this->mailServerSelection) ?: $this->mailServerSelection->value();
    }

    public function setGroupMailServerEmailAddress($groupMailServerEmailAddress = null)
    {
        $this->groupMailServerEmailAddress = ($groupMailServerEmailAddress InstanceOf EmailAddress)
             ? $groupMailServerEmailAddress
             : new EmailAddress($groupMailServerEmailAddress);
    }

    public function getGroupMailServerEmailAddress()
    {
        return (!$this->groupMailServerEmailAddress) ?: $this->groupMailServerEmailAddress->value();
    }

    public function setGroupMailServerUserId($groupMailServerUserId = null)
    {
        $this->groupMailServerUserId = ($groupMailServerUserId InstanceOf VoiceMessagingMailServerUserId)
             ? $groupMailServerUserId
             : new VoiceMessagingMailServerUserId($groupMailServerUserId);
    }

    public function getGroupMailServerUserId()
    {
        return (!$this->groupMailServerUserId) ?: $this->groupMailServerUserId->value();
    }

    public function setPersonalMailServerNetAddress($personalMailServerNetAddress = null)
    {
        $this->personalMailServerNetAddress = ($personalMailServerNetAddress InstanceOf NetAddress)
             ? $personalMailServerNetAddress
             : new NetAddress($personalMailServerNetAddress);
    }

    public function getPersonalMailServerNetAddress()
    {
        return (!$this->personalMailServerNetAddress) ?: $this->personalMailServerNetAddress->value();
    }

    public function setPersonalMailServerProtocol($personalMailServerProtocol = null)
    {
        $this->personalMailServerProtocol = ($personalMailServerProtocol InstanceOf VoiceMessagingMailServerProtocol)
             ? $personalMailServerProtocol
             : new VoiceMessagingMailServerProtocol($personalMailServerProtocol);
    }

    public function getPersonalMailServerProtocol()
    {
        return (!$this->personalMailServerProtocol) ?: $this->personalMailServerProtocol->value();
    }

    public function setPersonalMailServerRealDeleteForImap(xs:boolean $personalMailServerRealDeleteForImap = null)
    {
    }

    public function getPersonalMailServerRealDeleteForImap()
    {
        return (!$this->personalMailServerRealDeleteForImap) ?: $this->personalMailServerRealDeleteForImap->value();
    }

    public function setPersonalMailServerEmailAddress($personalMailServerEmailAddress = null)
    {
        $this->personalMailServerEmailAddress = ($personalMailServerEmailAddress InstanceOf EmailAddress)
             ? $personalMailServerEmailAddress
             : new EmailAddress($personalMailServerEmailAddress);
    }

    public function getPersonalMailServerEmailAddress()
    {
        return (!$this->personalMailServerEmailAddress) ?: $this->personalMailServerEmailAddress->value();
    }

    public function setPersonalMailServerUserId($personalMailServerUserId = null)
    {
        $this->personalMailServerUserId = ($personalMailServerUserId InstanceOf VoiceMessagingMailServerUserId)
             ? $personalMailServerUserId
             : new VoiceMessagingMailServerUserId($personalMailServerUserId);
    }

    public function getPersonalMailServerUserId()
    {
        return (!$this->personalMailServerUserId) ?: $this->personalMailServerUserId->value();
    }
}
