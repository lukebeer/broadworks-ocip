<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceVoiceMessaging; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceVoiceMessaging\VoiceMessagingGroupMailServerChoices;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceVoiceMessaging\VoiceMessagingMailboxLengthMinutes;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceVoiceMessaging\VoiceMessagingMailServerProtocol;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceVoiceMessaging\VoiceMessagingHoldPeriodDays;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\NetAddress;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Response to GroupVoiceMessagingGroupGetRequest.
 *         Contains the group's voice messaging settings.
 */
class GroupVoiceMessagingGroupGetResponse extends ComplexType implements ComplexInterface
{
    public    $name                                       = __CLASS__;
    protected $useMailServerSetting                       = null;
    protected $warnCallerBeforeRecordingVoiceMessage      = null;
    protected $allowUsersConfiguringAdvancedSettings      = null;
    protected $allowComposeOrForwardMessageToEntireGroup  = null;
    protected $mailServerNetAddress                       = null;
    protected $mailServerProtocol                         = null;
    protected $realDeleteForImap                          = null;
    protected $maxMailboxLengthMinutes                    = null;
    protected $doesMessageAge                             = null;
    protected $holdPeriodDays                             = null;


    public function setUseMailServerSetting($useMailServerSetting = null)
    {
        $this->useMailServerSetting = ($useMailServerSetting InstanceOf VoiceMessagingGroupMailServerChoices)
             ? $useMailServerSetting
             : new VoiceMessagingGroupMailServerChoices($useMailServerSetting);
    }

    public function getUseMailServerSetting()
    {
        return (!$this->useMailServerSetting) ?: $this->useMailServerSetting->value();
    }

    public function setWarnCallerBeforeRecordingVoiceMessage(xs:boolean $warnCallerBeforeRecordingVoiceMessage = null)
    {
    }

    public function getWarnCallerBeforeRecordingVoiceMessage()
    {
        return (!$this->warnCallerBeforeRecordingVoiceMessage) ?: $this->warnCallerBeforeRecordingVoiceMessage->value();
    }

    public function setAllowUsersConfiguringAdvancedSettings(xs:boolean $allowUsersConfiguringAdvancedSettings = null)
    {
    }

    public function getAllowUsersConfiguringAdvancedSettings()
    {
        return (!$this->allowUsersConfiguringAdvancedSettings) ?: $this->allowUsersConfiguringAdvancedSettings->value();
    }

    public function setAllowComposeOrForwardMessageToEntireGroup(xs:boolean $allowComposeOrForwardMessageToEntireGroup = null)
    {
    }

    public function getAllowComposeOrForwardMessageToEntireGroup()
    {
        return (!$this->allowComposeOrForwardMessageToEntireGroup) ?: $this->allowComposeOrForwardMessageToEntireGroup->value();
    }

    public function setMailServerNetAddress($mailServerNetAddress = null)
    {
        $this->mailServerNetAddress = ($mailServerNetAddress InstanceOf NetAddress)
             ? $mailServerNetAddress
             : new NetAddress($mailServerNetAddress);
    }

    public function getMailServerNetAddress()
    {
        return (!$this->mailServerNetAddress) ?: $this->mailServerNetAddress->value();
    }

    public function setMailServerProtocol($mailServerProtocol = null)
    {
        $this->mailServerProtocol = ($mailServerProtocol InstanceOf VoiceMessagingMailServerProtocol)
             ? $mailServerProtocol
             : new VoiceMessagingMailServerProtocol($mailServerProtocol);
    }

    public function getMailServerProtocol()
    {
        return (!$this->mailServerProtocol) ?: $this->mailServerProtocol->value();
    }

    public function setRealDeleteForImap(xs:boolean $realDeleteForImap = null)
    {
    }

    public function getRealDeleteForImap()
    {
        return (!$this->realDeleteForImap) ?: $this->realDeleteForImap->value();
    }

    public function setMaxMailboxLengthMinutes($maxMailboxLengthMinutes = null)
    {
        $this->maxMailboxLengthMinutes = ($maxMailboxLengthMinutes InstanceOf VoiceMessagingMailboxLengthMinutes)
             ? $maxMailboxLengthMinutes
             : new VoiceMessagingMailboxLengthMinutes($maxMailboxLengthMinutes);
    }

    public function getMaxMailboxLengthMinutes()
    {
        return (!$this->maxMailboxLengthMinutes) ?: $this->maxMailboxLengthMinutes->value();
    }

    public function setDoesMessageAge(xs:boolean $doesMessageAge = null)
    {
    }

    public function getDoesMessageAge()
    {
        return (!$this->doesMessageAge) ?: $this->doesMessageAge->value();
    }

    public function setHoldPeriodDays($holdPeriodDays = null)
    {
        $this->holdPeriodDays = ($holdPeriodDays InstanceOf VoiceMessagingHoldPeriodDays)
             ? $holdPeriodDays
             : new VoiceMessagingHoldPeriodDays($holdPeriodDays);
    }

    public function getHoldPeriodDays()
    {
        return (!$this->holdPeriodDays) ?: $this->holdPeriodDays->value();
    }
}
