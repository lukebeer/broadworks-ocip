<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceVoiceMessaging; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceVoiceMessaging\VoiceMessagingMessageProcessing;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\EmailAddress;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\OutgoingDN;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Response to the UserVoiceMessagingUserGetVoiceManagementRequest17.
 */
class UserVoiceMessagingUserGetVoiceManagementResponse17 extends ComplexType implements ComplexInterface
{
    public    $name                                 = __CLASS__;
    protected $isActive                             = null;
    protected $processing                           = null;
    protected $voiceMessageDeliveryEmailAddress     = null;
    protected $usePhoneMessageWaitingIndicator      = null;
    protected $sendVoiceMessageNotifyEmail          = null;
    protected $voiceMessageNotifyEmailAddress       = null;
    protected $sendCarbonCopyVoiceMessage           = null;
    protected $voiceMessageCarbonCopyEmailAddress   = null;
    protected $transferOnZeroToPhoneNumber          = null;
    protected $transferPhoneNumber                  = null;
    protected $alwaysRedirectToVoiceMail            = null;
    protected $busyRedirectToVoiceMail              = null;
    protected $noAnswerRedirectToVoiceMail          = null;
    protected $outOfPrimaryZoneRedirectToVoiceMail  = null;


    public function setIsActive(xs:boolean $isActive = null)
    {
    }

    public function getIsActive()
    {
        return (!$this->isActive) ?: $this->isActive->value();
    }

    public function setProcessing($processing = null)
    {
        $this->processing = ($processing InstanceOf VoiceMessagingMessageProcessing)
             ? $processing
             : new VoiceMessagingMessageProcessing($processing);
    }

    public function getProcessing()
    {
        return (!$this->processing) ?: $this->processing->value();
    }

    public function setVoiceMessageDeliveryEmailAddress($voiceMessageDeliveryEmailAddress = null)
    {
        $this->voiceMessageDeliveryEmailAddress = ($voiceMessageDeliveryEmailAddress InstanceOf EmailAddress)
             ? $voiceMessageDeliveryEmailAddress
             : new EmailAddress($voiceMessageDeliveryEmailAddress);
    }

    public function getVoiceMessageDeliveryEmailAddress()
    {
        return (!$this->voiceMessageDeliveryEmailAddress) ?: $this->voiceMessageDeliveryEmailAddress->value();
    }

    public function setUsePhoneMessageWaitingIndicator(xs:boolean $usePhoneMessageWaitingIndicator = null)
    {
    }

    public function getUsePhoneMessageWaitingIndicator()
    {
        return (!$this->usePhoneMessageWaitingIndicator) ?: $this->usePhoneMessageWaitingIndicator->value();
    }

    public function setSendVoiceMessageNotifyEmail(xs:boolean $sendVoiceMessageNotifyEmail = null)
    {
    }

    public function getSendVoiceMessageNotifyEmail()
    {
        return (!$this->sendVoiceMessageNotifyEmail) ?: $this->sendVoiceMessageNotifyEmail->value();
    }

    public function setVoiceMessageNotifyEmailAddress($voiceMessageNotifyEmailAddress = null)
    {
        $this->voiceMessageNotifyEmailAddress = ($voiceMessageNotifyEmailAddress InstanceOf EmailAddress)
             ? $voiceMessageNotifyEmailAddress
             : new EmailAddress($voiceMessageNotifyEmailAddress);
    }

    public function getVoiceMessageNotifyEmailAddress()
    {
        return (!$this->voiceMessageNotifyEmailAddress) ?: $this->voiceMessageNotifyEmailAddress->value();
    }

    public function setSendCarbonCopyVoiceMessage(xs:boolean $sendCarbonCopyVoiceMessage = null)
    {
    }

    public function getSendCarbonCopyVoiceMessage()
    {
        return (!$this->sendCarbonCopyVoiceMessage) ?: $this->sendCarbonCopyVoiceMessage->value();
    }

    public function setVoiceMessageCarbonCopyEmailAddress($voiceMessageCarbonCopyEmailAddress = null)
    {
        $this->voiceMessageCarbonCopyEmailAddress = ($voiceMessageCarbonCopyEmailAddress InstanceOf EmailAddress)
             ? $voiceMessageCarbonCopyEmailAddress
             : new EmailAddress($voiceMessageCarbonCopyEmailAddress);
    }

    public function getVoiceMessageCarbonCopyEmailAddress()
    {
        return (!$this->voiceMessageCarbonCopyEmailAddress) ?: $this->voiceMessageCarbonCopyEmailAddress->value();
    }

    public function setTransferOnZeroToPhoneNumber(xs:boolean $transferOnZeroToPhoneNumber = null)
    {
    }

    public function getTransferOnZeroToPhoneNumber()
    {
        return (!$this->transferOnZeroToPhoneNumber) ?: $this->transferOnZeroToPhoneNumber->value();
    }

    public function setTransferPhoneNumber($transferPhoneNumber = null)
    {
        $this->transferPhoneNumber = ($transferPhoneNumber InstanceOf OutgoingDN)
             ? $transferPhoneNumber
             : new OutgoingDN($transferPhoneNumber);
    }

    public function getTransferPhoneNumber()
    {
        return (!$this->transferPhoneNumber) ?: $this->transferPhoneNumber->value();
    }

    public function setAlwaysRedirectToVoiceMail(xs:boolean $alwaysRedirectToVoiceMail = null)
    {
    }

    public function getAlwaysRedirectToVoiceMail()
    {
        return (!$this->alwaysRedirectToVoiceMail) ?: $this->alwaysRedirectToVoiceMail->value();
    }

    public function setBusyRedirectToVoiceMail(xs:boolean $busyRedirectToVoiceMail = null)
    {
    }

    public function getBusyRedirectToVoiceMail()
    {
        return (!$this->busyRedirectToVoiceMail) ?: $this->busyRedirectToVoiceMail->value();
    }

    public function setNoAnswerRedirectToVoiceMail(xs:boolean $noAnswerRedirectToVoiceMail = null)
    {
    }

    public function getNoAnswerRedirectToVoiceMail()
    {
        return (!$this->noAnswerRedirectToVoiceMail) ?: $this->noAnswerRedirectToVoiceMail->value();
    }

    public function setOutOfPrimaryZoneRedirectToVoiceMail(xs:boolean $outOfPrimaryZoneRedirectToVoiceMail = null)
    {
    }

    public function getOutOfPrimaryZoneRedirectToVoiceMail()
    {
        return (!$this->outOfPrimaryZoneRedirectToVoiceMail) ?: $this->outOfPrimaryZoneRedirectToVoiceMail->value();
    }
}
