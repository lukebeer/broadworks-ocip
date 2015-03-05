<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceVoiceMessaging; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ServiceProviderId;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\GroupId;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\VoiceMessagingGroupMailServerChoices;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\xs:boolean;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\NetAddress;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\VoiceMessagingMailServerProtocol;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\VoiceMessagingMailboxLengthMinutes;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\VoiceMessagingHoldPeriodDays;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Request to modify the group's voice messaging settings.
 *         The response is either SuccessResponse or ErrorResponse.
 */
class GroupVoiceMessagingGroupModifyRequest extends ComplexType implements ComplexInterface
{
    public    $name = __CLASS__;

    public function __construct(
             $serviceProviderId,
             $groupId,
             $useMailServerSetting=null,
             $warnCallerBeforeRecordingVoiceMessage=null,
             $allowUsersConfiguringAdvancedSettings=null,
             $allowComposeOrForwardMessageToEntireGroup=null,
             $mailServerNetAddress=null,
             $mailServerProtocol=null,
             $realDeleteForImap=null,
             $maxMailboxLengthMinutes=null,
             $doesMessageAge=null,
             $holdPeriodDays=null
    ) {
        $this->serviceProviderId                         = new ServiceProviderId($serviceProviderId);
        $this->groupId                                   = new GroupId($groupId);
        $this->useMailServerSetting                      = $useMailServerSetting;
        $this->warnCallerBeforeRecordingVoiceMessage     = $warnCallerBeforeRecordingVoiceMessage;
        $this->allowUsersConfiguringAdvancedSettings     = $allowUsersConfiguringAdvancedSettings;
        $this->allowComposeOrForwardMessageToEntireGroup = $allowComposeOrForwardMessageToEntireGroup;
        $this->mailServerNetAddress                      = new NetAddress($mailServerNetAddress);
        $this->mailServerProtocol                        = $mailServerProtocol;
        $this->realDeleteForImap                         = $realDeleteForImap;
        $this->maxMailboxLengthMinutes                   = $maxMailboxLengthMinutes;
        $this->doesMessageAge                            = $doesMessageAge;
        $this->holdPeriodDays                            = $holdPeriodDays;
        $this->args                                      = func_get_args();
    }

    public function setServiceProviderId($serviceProviderId)
    {
        $serviceProviderId and $this->serviceProviderId = new ServiceProviderId($serviceProviderId);
    }

    public function getServiceProviderId()
    {
        return (!$this->serviceProviderId) ?: $this->serviceProviderId->value();
    }

    public function setGroupId($groupId)
    {
        $groupId and $this->groupId = new GroupId($groupId);
    }

    public function getGroupId()
    {
        return (!$this->groupId) ?: $this->groupId->value();
    }

    public function setUseMailServerSetting($useMailServerSetting)
    {
        $useMailServerSetting and $this->useMailServerSetting = new VoiceMessagingGroupMailServerChoices($useMailServerSetting);
    }

    public function getUseMailServerSetting()
    {
        return (!$this->useMailServerSetting) ?: $this->useMailServerSetting->value();
    }

    public function setWarnCallerBeforeRecordingVoiceMessage($warnCallerBeforeRecordingVoiceMessage)
    {
        $warnCallerBeforeRecordingVoiceMessage and $this->warnCallerBeforeRecordingVoiceMessage = new xs:boolean($warnCallerBeforeRecordingVoiceMessage);
    }

    public function getWarnCallerBeforeRecordingVoiceMessage()
    {
        return (!$this->warnCallerBeforeRecordingVoiceMessage) ?: $this->warnCallerBeforeRecordingVoiceMessage->value();
    }

    public function setAllowUsersConfiguringAdvancedSettings($allowUsersConfiguringAdvancedSettings)
    {
        $allowUsersConfiguringAdvancedSettings and $this->allowUsersConfiguringAdvancedSettings = new xs:boolean($allowUsersConfiguringAdvancedSettings);
    }

    public function getAllowUsersConfiguringAdvancedSettings()
    {
        return (!$this->allowUsersConfiguringAdvancedSettings) ?: $this->allowUsersConfiguringAdvancedSettings->value();
    }

    public function setAllowComposeOrForwardMessageToEntireGroup($allowComposeOrForwardMessageToEntireGroup)
    {
        $allowComposeOrForwardMessageToEntireGroup and $this->allowComposeOrForwardMessageToEntireGroup = new xs:boolean($allowComposeOrForwardMessageToEntireGroup);
    }

    public function getAllowComposeOrForwardMessageToEntireGroup()
    {
        return (!$this->allowComposeOrForwardMessageToEntireGroup) ?: $this->allowComposeOrForwardMessageToEntireGroup->value();
    }

    public function setMailServerNetAddress($mailServerNetAddress)
    {
        $mailServerNetAddress and $this->mailServerNetAddress = new NetAddress($mailServerNetAddress);
    }

    public function getMailServerNetAddress()
    {
        return (!$this->mailServerNetAddress) ?: $this->mailServerNetAddress->value();
    }

    public function setMailServerProtocol($mailServerProtocol)
    {
        $mailServerProtocol and $this->mailServerProtocol = new VoiceMessagingMailServerProtocol($mailServerProtocol);
    }

    public function getMailServerProtocol()
    {
        return (!$this->mailServerProtocol) ?: $this->mailServerProtocol->value();
    }

    public function setRealDeleteForImap($realDeleteForImap)
    {
        $realDeleteForImap and $this->realDeleteForImap = new xs:boolean($realDeleteForImap);
    }

    public function getRealDeleteForImap()
    {
        return (!$this->realDeleteForImap) ?: $this->realDeleteForImap->value();
    }

    public function setMaxMailboxLengthMinutes($maxMailboxLengthMinutes)
    {
        $maxMailboxLengthMinutes and $this->maxMailboxLengthMinutes = new VoiceMessagingMailboxLengthMinutes($maxMailboxLengthMinutes);
    }

    public function getMaxMailboxLengthMinutes()
    {
        return (!$this->maxMailboxLengthMinutes) ?: $this->maxMailboxLengthMinutes->value();
    }

    public function setDoesMessageAge($doesMessageAge)
    {
        $doesMessageAge and $this->doesMessageAge = new xs:boolean($doesMessageAge);
    }

    public function getDoesMessageAge()
    {
        return (!$this->doesMessageAge) ?: $this->doesMessageAge->value();
    }

    public function setHoldPeriodDays($holdPeriodDays)
    {
        $holdPeriodDays and $this->holdPeriodDays = new VoiceMessagingHoldPeriodDays($holdPeriodDays);
    }

    public function getHoldPeriodDays()
    {
        return (!$this->holdPeriodDays) ?: $this->holdPeriodDays->value();
    }
}
