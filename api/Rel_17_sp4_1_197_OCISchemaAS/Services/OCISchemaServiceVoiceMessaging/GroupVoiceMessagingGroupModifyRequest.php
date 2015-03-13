<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceVoiceMessaging; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceVoiceMessaging\VoiceMessagingGroupMailServerChoices;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceVoiceMessaging\VoiceMessagingMailboxLengthMinutes;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceVoiceMessaging\VoiceMessagingMailServerProtocol;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceVoiceMessaging\VoiceMessagingHoldPeriodDays;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ServiceProviderId;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\NetAddress;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\GroupId;
use Broadworks_OCIP\core\Builder\Types\PrimitiveType;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Request to modify the group's voice messaging settings.
 *         The response is either SuccessResponse or ErrorResponse.
 */
class GroupVoiceMessagingGroupModifyRequest extends ComplexType implements ComplexInterface
{
    public    $name                                      = 'GroupVoiceMessagingGroupModifyRequest';
    protected $serviceProviderId                         = null;
    protected $groupId                                   = null;
    protected $useMailServerSetting                      = null;
    protected $warnCallerBeforeRecordingVoiceMessage     = null;
    protected $allowUsersConfiguringAdvancedSettings     = null;
    protected $allowComposeOrForwardMessageToEntireGroup = null;
    protected $mailServerNetAddress                      = null;
    protected $mailServerProtocol                        = null;
    protected $realDeleteForImap                         = null;
    protected $maxMailboxLengthMinutes                   = null;
    protected $doesMessageAge                            = null;
    protected $holdPeriodDays                            = null;

    public function __construct(
         $serviceProviderId,
         $groupId,
         $useMailServerSetting = null,
         $warnCallerBeforeRecordingVoiceMessage = null,
         $allowUsersConfiguringAdvancedSettings = null,
         $allowComposeOrForwardMessageToEntireGroup = null,
         $mailServerNetAddress = null,
         $mailServerProtocol = null,
         $realDeleteForImap = null,
         $maxMailboxLengthMinutes = null,
         $doesMessageAge = null,
         $holdPeriodDays = null
    ) {
        $this->setServiceProviderId($serviceProviderId);
        $this->setGroupId($groupId);
        $this->setUseMailServerSetting($useMailServerSetting);
        $this->setWarnCallerBeforeRecordingVoiceMessage($warnCallerBeforeRecordingVoiceMessage);
        $this->setAllowUsersConfiguringAdvancedSettings($allowUsersConfiguringAdvancedSettings);
        $this->setAllowComposeOrForwardMessageToEntireGroup($allowComposeOrForwardMessageToEntireGroup);
        $this->setMailServerNetAddress($mailServerNetAddress);
        $this->setMailServerProtocol($mailServerProtocol);
        $this->setRealDeleteForImap($realDeleteForImap);
        $this->setMaxMailboxLengthMinutes($maxMailboxLengthMinutes);
        $this->setDoesMessageAge($doesMessageAge);
        $this->setHoldPeriodDays($holdPeriodDays);
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
    public function setServiceProviderId($serviceProviderId = null)
    {
        if (!$serviceProviderId) return $this;
        $this->serviceProviderId = ($serviceProviderId InstanceOf ServiceProviderId)
             ? $serviceProviderId
             : new ServiceProviderId($serviceProviderId);
        $this->serviceProviderId->setName('serviceProviderId');
        return $this;
    }

    /**
     * 
     * @return ServiceProviderId $serviceProviderId
     */
    public function getServiceProviderId()
    {
        return $this->serviceProviderId->getValue();
    }

    /**
     * 
     */
    public function setGroupId($groupId = null)
    {
        if (!$groupId) return $this;
        $this->groupId = ($groupId InstanceOf GroupId)
             ? $groupId
             : new GroupId($groupId);
        $this->groupId->setName('groupId');
        return $this;
    }

    /**
     * 
     * @return GroupId $groupId
     */
    public function getGroupId()
    {
        return $this->groupId->getValue();
    }

    /**
     * 
     */
    public function setUseMailServerSetting($useMailServerSetting = null)
    {
        if (!$useMailServerSetting) return $this;
        $this->useMailServerSetting = ($useMailServerSetting InstanceOf VoiceMessagingGroupMailServerChoices)
             ? $useMailServerSetting
             : new VoiceMessagingGroupMailServerChoices($useMailServerSetting);
        $this->useMailServerSetting->setName('useMailServerSetting');
        return $this;
    }

    /**
     * 
     * @return VoiceMessagingGroupMailServerChoices $useMailServerSetting
     */
    public function getUseMailServerSetting()
    {
        return $this->useMailServerSetting->getValue();
    }

    /**
     * 
     */
    public function setWarnCallerBeforeRecordingVoiceMessage($warnCallerBeforeRecordingVoiceMessage = null)
    {
        if (!$warnCallerBeforeRecordingVoiceMessage) return $this;
        $this->warnCallerBeforeRecordingVoiceMessage = new PrimitiveType($warnCallerBeforeRecordingVoiceMessage);
        $this->warnCallerBeforeRecordingVoiceMessage->setName('warnCallerBeforeRecordingVoiceMessage');
        return $this;
    }

    /**
     * 
     * @return boolean $warnCallerBeforeRecordingVoiceMessage
     */
    public function getWarnCallerBeforeRecordingVoiceMessage()
    {
        return $this->warnCallerBeforeRecordingVoiceMessage->getValue();
    }

    /**
     * 
     */
    public function setAllowUsersConfiguringAdvancedSettings($allowUsersConfiguringAdvancedSettings = null)
    {
        if (!$allowUsersConfiguringAdvancedSettings) return $this;
        $this->allowUsersConfiguringAdvancedSettings = new PrimitiveType($allowUsersConfiguringAdvancedSettings);
        $this->allowUsersConfiguringAdvancedSettings->setName('allowUsersConfiguringAdvancedSettings');
        return $this;
    }

    /**
     * 
     * @return boolean $allowUsersConfiguringAdvancedSettings
     */
    public function getAllowUsersConfiguringAdvancedSettings()
    {
        return $this->allowUsersConfiguringAdvancedSettings->getValue();
    }

    /**
     * 
     */
    public function setAllowComposeOrForwardMessageToEntireGroup($allowComposeOrForwardMessageToEntireGroup = null)
    {
        if (!$allowComposeOrForwardMessageToEntireGroup) return $this;
        $this->allowComposeOrForwardMessageToEntireGroup = new PrimitiveType($allowComposeOrForwardMessageToEntireGroup);
        $this->allowComposeOrForwardMessageToEntireGroup->setName('allowComposeOrForwardMessageToEntireGroup');
        return $this;
    }

    /**
     * 
     * @return boolean $allowComposeOrForwardMessageToEntireGroup
     */
    public function getAllowComposeOrForwardMessageToEntireGroup()
    {
        return $this->allowComposeOrForwardMessageToEntireGroup->getValue();
    }

    /**
     * 
     */
    public function setMailServerNetAddress($mailServerNetAddress = null)
    {
        if (!$mailServerNetAddress) return $this;
        $this->mailServerNetAddress = ($mailServerNetAddress InstanceOf NetAddress)
             ? $mailServerNetAddress
             : new NetAddress($mailServerNetAddress);
        $this->mailServerNetAddress->setName('mailServerNetAddress');
        return $this;
    }

    /**
     * 
     * @return NetAddress $mailServerNetAddress
     */
    public function getMailServerNetAddress()
    {
        return $this->mailServerNetAddress->getValue();
    }

    /**
     * 
     */
    public function setMailServerProtocol($mailServerProtocol = null)
    {
        if (!$mailServerProtocol) return $this;
        $this->mailServerProtocol = ($mailServerProtocol InstanceOf VoiceMessagingMailServerProtocol)
             ? $mailServerProtocol
             : new VoiceMessagingMailServerProtocol($mailServerProtocol);
        $this->mailServerProtocol->setName('mailServerProtocol');
        return $this;
    }

    /**
     * 
     * @return VoiceMessagingMailServerProtocol $mailServerProtocol
     */
    public function getMailServerProtocol()
    {
        return $this->mailServerProtocol->getValue();
    }

    /**
     * 
     */
    public function setRealDeleteForImap($realDeleteForImap = null)
    {
        if (!$realDeleteForImap) return $this;
        $this->realDeleteForImap = new PrimitiveType($realDeleteForImap);
        $this->realDeleteForImap->setName('realDeleteForImap');
        return $this;
    }

    /**
     * 
     * @return boolean $realDeleteForImap
     */
    public function getRealDeleteForImap()
    {
        return $this->realDeleteForImap->getValue();
    }

    /**
     * 
     */
    public function setMaxMailboxLengthMinutes($maxMailboxLengthMinutes = null)
    {
        if (!$maxMailboxLengthMinutes) return $this;
        $this->maxMailboxLengthMinutes = ($maxMailboxLengthMinutes InstanceOf VoiceMessagingMailboxLengthMinutes)
             ? $maxMailboxLengthMinutes
             : new VoiceMessagingMailboxLengthMinutes($maxMailboxLengthMinutes);
        $this->maxMailboxLengthMinutes->setName('maxMailboxLengthMinutes');
        return $this;
    }

    /**
     * 
     * @return VoiceMessagingMailboxLengthMinutes $maxMailboxLengthMinutes
     */
    public function getMaxMailboxLengthMinutes()
    {
        return $this->maxMailboxLengthMinutes->getValue();
    }

    /**
     * 
     */
    public function setDoesMessageAge($doesMessageAge = null)
    {
        if (!$doesMessageAge) return $this;
        $this->doesMessageAge = new PrimitiveType($doesMessageAge);
        $this->doesMessageAge->setName('doesMessageAge');
        return $this;
    }

    /**
     * 
     * @return boolean $doesMessageAge
     */
    public function getDoesMessageAge()
    {
        return $this->doesMessageAge->getValue();
    }

    /**
     * 
     */
    public function setHoldPeriodDays($holdPeriodDays = null)
    {
        if (!$holdPeriodDays) return $this;
        $this->holdPeriodDays = ($holdPeriodDays InstanceOf VoiceMessagingHoldPeriodDays)
             ? $holdPeriodDays
             : new VoiceMessagingHoldPeriodDays($holdPeriodDays);
        $this->holdPeriodDays->setName('holdPeriodDays');
        return $this;
    }

    /**
     * 
     * @return VoiceMessagingHoldPeriodDays $holdPeriodDays
     */
    public function getHoldPeriodDays()
    {
        return $this->holdPeriodDays->getValue();
    }
}
