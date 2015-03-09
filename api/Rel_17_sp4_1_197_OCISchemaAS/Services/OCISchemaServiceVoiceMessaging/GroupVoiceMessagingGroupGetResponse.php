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
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceVoiceMessaging\GroupVoiceMessagingGroupGetResponse;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Response to GroupVoiceMessagingGroupGetRequest.
 *         Contains the group's voice messaging settings.
 */
class GroupVoiceMessagingGroupGetResponse extends ComplexType implements ComplexInterface
{
    public    $name                                      = __CLASS__;
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

    /**
     * @return GroupVoiceMessagingGroupGetResponse
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * Voice Messaging group-level mail server choices.
     */
    public function setUseMailServerSetting($useMailServerSetting = null)
    {
        $this->useMailServerSetting = ($useMailServerSetting InstanceOf VoiceMessagingGroupMailServerChoices)
             ? $useMailServerSetting
             : new VoiceMessagingGroupMailServerChoices($useMailServerSetting);
    }

    /**
     * Voice Messaging group-level mail server choices.
     */
    public function getUseMailServerSetting()
    {
        return (!$this->useMailServerSetting) ?: $this->useMailServerSetting->getValue();
    }

    /**
     * 
     */
    public function setWarnCallerBeforeRecordingVoiceMessage($warnCallerBeforeRecordingVoiceMessage = null)
    {
        $this->warnCallerBeforeRecordingVoiceMessage = (boolean) $warnCallerBeforeRecordingVoiceMessage;
    }

    /**
     * 
     */
    public function getWarnCallerBeforeRecordingVoiceMessage()
    {
        return (!$this->warnCallerBeforeRecordingVoiceMessage) ?: $this->warnCallerBeforeRecordingVoiceMessage;
    }

    /**
     * 
     */
    public function setAllowUsersConfiguringAdvancedSettings($allowUsersConfiguringAdvancedSettings = null)
    {
        $this->allowUsersConfiguringAdvancedSettings = (boolean) $allowUsersConfiguringAdvancedSettings;
    }

    /**
     * 
     */
    public function getAllowUsersConfiguringAdvancedSettings()
    {
        return (!$this->allowUsersConfiguringAdvancedSettings) ?: $this->allowUsersConfiguringAdvancedSettings;
    }

    /**
     * 
     */
    public function setAllowComposeOrForwardMessageToEntireGroup($allowComposeOrForwardMessageToEntireGroup = null)
    {
        $this->allowComposeOrForwardMessageToEntireGroup = (boolean) $allowComposeOrForwardMessageToEntireGroup;
    }

    /**
     * 
     */
    public function getAllowComposeOrForwardMessageToEntireGroup()
    {
        return (!$this->allowComposeOrForwardMessageToEntireGroup) ?: $this->allowComposeOrForwardMessageToEntireGroup;
    }

    /**
     * IP Address, hostname, or domain.
     */
    public function setMailServerNetAddress($mailServerNetAddress = null)
    {
        $this->mailServerNetAddress = ($mailServerNetAddress InstanceOf NetAddress)
             ? $mailServerNetAddress
             : new NetAddress($mailServerNetAddress);
    }

    /**
     * IP Address, hostname, or domain.
     */
    public function getMailServerNetAddress()
    {
        return (!$this->mailServerNetAddress) ?: $this->mailServerNetAddress->getValue();
    }

    /**
     * Protocol used by mail server holding voice messages
     */
    public function setMailServerProtocol($mailServerProtocol = null)
    {
        $this->mailServerProtocol = ($mailServerProtocol InstanceOf VoiceMessagingMailServerProtocol)
             ? $mailServerProtocol
             : new VoiceMessagingMailServerProtocol($mailServerProtocol);
    }

    /**
     * Protocol used by mail server holding voice messages
     */
    public function getMailServerProtocol()
    {
        return (!$this->mailServerProtocol) ?: $this->mailServerProtocol->getValue();
    }

    /**
     * 
     */
    public function setRealDeleteForImap($realDeleteForImap = null)
    {
        $this->realDeleteForImap = (boolean) $realDeleteForImap;
    }

    /**
     * 
     */
    public function getRealDeleteForImap()
    {
        return (!$this->realDeleteForImap) ?: $this->realDeleteForImap;
    }

    /**
     * Mailbox length for voice messages
     */
    public function setMaxMailboxLengthMinutes($maxMailboxLengthMinutes = null)
    {
        $this->maxMailboxLengthMinutes = ($maxMailboxLengthMinutes InstanceOf VoiceMessagingMailboxLengthMinutes)
             ? $maxMailboxLengthMinutes
             : new VoiceMessagingMailboxLengthMinutes($maxMailboxLengthMinutes);
    }

    /**
     * Mailbox length for voice messages
     */
    public function getMaxMailboxLengthMinutes()
    {
        return (!$this->maxMailboxLengthMinutes) ?: $this->maxMailboxLengthMinutes->getValue();
    }

    /**
     * 
     */
    public function setDoesMessageAge($doesMessageAge = null)
    {
        $this->doesMessageAge = (boolean) $doesMessageAge;
    }

    /**
     * 
     */
    public function getDoesMessageAge()
    {
        return (!$this->doesMessageAge) ?: $this->doesMessageAge;
    }

    /**
     * Hold period for voice messages
     */
    public function setHoldPeriodDays($holdPeriodDays = null)
    {
        $this->holdPeriodDays = ($holdPeriodDays InstanceOf VoiceMessagingHoldPeriodDays)
             ? $holdPeriodDays
             : new VoiceMessagingHoldPeriodDays($holdPeriodDays);
    }

    /**
     * Hold period for voice messages
     */
    public function getHoldPeriodDays()
    {
        return (!$this->holdPeriodDays) ?: $this->holdPeriodDays->getValue();
    }
}
