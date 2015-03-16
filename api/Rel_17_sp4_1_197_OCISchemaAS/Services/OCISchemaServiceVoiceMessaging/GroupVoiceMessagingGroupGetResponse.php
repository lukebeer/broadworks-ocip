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
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\NetAddress;
use Broadworks_OCIP\core\Builder\Types\PrimitiveType;
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
    public    $elementName = 'GroupVoiceMessagingGroupGetResponse';
    protected $useMailServerSetting;
    protected $warnCallerBeforeRecordingVoiceMessage;
    protected $allowUsersConfiguringAdvancedSettings;
    protected $allowComposeOrForwardMessageToEntireGroup;
    protected $mailServerNetAddress;
    protected $mailServerProtocol;
    protected $realDeleteForImap;
    protected $maxMailboxLengthMinutes;
    protected $doesMessageAge;
    protected $holdPeriodDays;

    /**
     * @return \Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceVoiceMessaging\GroupVoiceMessagingGroupGetResponse $response
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * 
     */
    public function setUseMailServerSetting($useMailServerSetting = null)
    {
        $this->useMailServerSetting = ($useMailServerSetting InstanceOf VoiceMessagingGroupMailServerChoices)
             ? $useMailServerSetting
             : new VoiceMessagingGroupMailServerChoices($useMailServerSetting);
        $this->useMailServerSetting->setElementName('useMailServerSetting');
        return $this;
    }

    /**
     * 
     * @return VoiceMessagingGroupMailServerChoices $useMailServerSetting
     */
    public function getUseMailServerSetting()
    {
        return ($this->useMailServerSetting)
            ? $this->useMailServerSetting->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setWarnCallerBeforeRecordingVoiceMessage($warnCallerBeforeRecordingVoiceMessage = null)
    {
        $this->warnCallerBeforeRecordingVoiceMessage = new PrimitiveType($warnCallerBeforeRecordingVoiceMessage);
        $this->warnCallerBeforeRecordingVoiceMessage->setElementName('warnCallerBeforeRecordingVoiceMessage');
        return $this;
    }

    /**
     * 
     * @return boolean $warnCallerBeforeRecordingVoiceMessage
     */
    public function getWarnCallerBeforeRecordingVoiceMessage()
    {
        return ($this->warnCallerBeforeRecordingVoiceMessage)
            ? $this->warnCallerBeforeRecordingVoiceMessage->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setAllowUsersConfiguringAdvancedSettings($allowUsersConfiguringAdvancedSettings = null)
    {
        $this->allowUsersConfiguringAdvancedSettings = new PrimitiveType($allowUsersConfiguringAdvancedSettings);
        $this->allowUsersConfiguringAdvancedSettings->setElementName('allowUsersConfiguringAdvancedSettings');
        return $this;
    }

    /**
     * 
     * @return boolean $allowUsersConfiguringAdvancedSettings
     */
    public function getAllowUsersConfiguringAdvancedSettings()
    {
        return ($this->allowUsersConfiguringAdvancedSettings)
            ? $this->allowUsersConfiguringAdvancedSettings->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setAllowComposeOrForwardMessageToEntireGroup($allowComposeOrForwardMessageToEntireGroup = null)
    {
        $this->allowComposeOrForwardMessageToEntireGroup = new PrimitiveType($allowComposeOrForwardMessageToEntireGroup);
        $this->allowComposeOrForwardMessageToEntireGroup->setElementName('allowComposeOrForwardMessageToEntireGroup');
        return $this;
    }

    /**
     * 
     * @return boolean $allowComposeOrForwardMessageToEntireGroup
     */
    public function getAllowComposeOrForwardMessageToEntireGroup()
    {
        return ($this->allowComposeOrForwardMessageToEntireGroup)
            ? $this->allowComposeOrForwardMessageToEntireGroup->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setMailServerNetAddress($mailServerNetAddress = null)
    {
        $this->mailServerNetAddress = ($mailServerNetAddress InstanceOf NetAddress)
             ? $mailServerNetAddress
             : new NetAddress($mailServerNetAddress);
        $this->mailServerNetAddress->setElementName('mailServerNetAddress');
        return $this;
    }

    /**
     * 
     * @return NetAddress $mailServerNetAddress
     */
    public function getMailServerNetAddress()
    {
        return ($this->mailServerNetAddress)
            ? $this->mailServerNetAddress->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setMailServerProtocol($mailServerProtocol = null)
    {
        $this->mailServerProtocol = ($mailServerProtocol InstanceOf VoiceMessagingMailServerProtocol)
             ? $mailServerProtocol
             : new VoiceMessagingMailServerProtocol($mailServerProtocol);
        $this->mailServerProtocol->setElementName('mailServerProtocol');
        return $this;
    }

    /**
     * 
     * @return VoiceMessagingMailServerProtocol $mailServerProtocol
     */
    public function getMailServerProtocol()
    {
        return ($this->mailServerProtocol)
            ? $this->mailServerProtocol->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setRealDeleteForImap($realDeleteForImap = null)
    {
        $this->realDeleteForImap = new PrimitiveType($realDeleteForImap);
        $this->realDeleteForImap->setElementName('realDeleteForImap');
        return $this;
    }

    /**
     * 
     * @return boolean $realDeleteForImap
     */
    public function getRealDeleteForImap()
    {
        return ($this->realDeleteForImap)
            ? $this->realDeleteForImap->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setMaxMailboxLengthMinutes($maxMailboxLengthMinutes = null)
    {
        $this->maxMailboxLengthMinutes = ($maxMailboxLengthMinutes InstanceOf VoiceMessagingMailboxLengthMinutes)
             ? $maxMailboxLengthMinutes
             : new VoiceMessagingMailboxLengthMinutes($maxMailboxLengthMinutes);
        $this->maxMailboxLengthMinutes->setElementName('maxMailboxLengthMinutes');
        return $this;
    }

    /**
     * 
     * @return VoiceMessagingMailboxLengthMinutes $maxMailboxLengthMinutes
     */
    public function getMaxMailboxLengthMinutes()
    {
        return ($this->maxMailboxLengthMinutes)
            ? $this->maxMailboxLengthMinutes->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setDoesMessageAge($doesMessageAge = null)
    {
        $this->doesMessageAge = new PrimitiveType($doesMessageAge);
        $this->doesMessageAge->setElementName('doesMessageAge');
        return $this;
    }

    /**
     * 
     * @return boolean $doesMessageAge
     */
    public function getDoesMessageAge()
    {
        return ($this->doesMessageAge)
            ? $this->doesMessageAge->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setHoldPeriodDays($holdPeriodDays = null)
    {
        $this->holdPeriodDays = ($holdPeriodDays InstanceOf VoiceMessagingHoldPeriodDays)
             ? $holdPeriodDays
             : new VoiceMessagingHoldPeriodDays($holdPeriodDays);
        $this->holdPeriodDays->setElementName('holdPeriodDays');
        return $this;
    }

    /**
     * 
     * @return VoiceMessagingHoldPeriodDays $holdPeriodDays
     */
    public function getHoldPeriodDays()
    {
        return ($this->holdPeriodDays)
            ? $this->holdPeriodDays->getElementValue()
            : null;
    }
}
