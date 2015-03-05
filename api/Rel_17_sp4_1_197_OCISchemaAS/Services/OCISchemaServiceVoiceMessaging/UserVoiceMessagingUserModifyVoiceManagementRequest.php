<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceVoiceMessaging; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\UserId;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\xs:boolean;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\VoiceMessagingMessageProcessing;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\EmailAddress;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\OutgoingDN;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Modify the user's voice messaging voice management service setting.
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class UserVoiceMessagingUserModifyVoiceManagementRequest extends ComplexType implements ComplexInterface
{
    public    $name = __CLASS__;

    public function __construct(
             $userId,
             $isActive=null,
             $processing=null,
             $voiceMessageDeliveryEmailAddress=null,
             $usePhoneMessageWaitingIndicator=null,
             $sendVoiceMessageNotifyEmail=null,
             $voiceMessageNotifyEmailAddress=null,
             $sendCarbonCopyVoiceMessage=null,
             $voiceMessageCarbonCopyEmailAddress=null,
             $transferOnZeroToPhoneNumber=null,
             $transferPhoneNumber=null,
             $alwaysRedirectToVoiceMail=null,
             $busyRedirectToVoiceMail=null,
             $noAnswerRedirectToVoiceMail=null,
             $outOfPrimaryZoneRedirectToVoiceMail=null
    ) {
        $this->userId                              = new UserId($userId);
        $this->isActive                            = $isActive;
        $this->processing                          = $processing;
        $this->voiceMessageDeliveryEmailAddress    = new EmailAddress($voiceMessageDeliveryEmailAddress);
        $this->usePhoneMessageWaitingIndicator     = $usePhoneMessageWaitingIndicator;
        $this->sendVoiceMessageNotifyEmail         = $sendVoiceMessageNotifyEmail;
        $this->voiceMessageNotifyEmailAddress      = new EmailAddress($voiceMessageNotifyEmailAddress);
        $this->sendCarbonCopyVoiceMessage          = $sendCarbonCopyVoiceMessage;
        $this->voiceMessageCarbonCopyEmailAddress  = new EmailAddress($voiceMessageCarbonCopyEmailAddress);
        $this->transferOnZeroToPhoneNumber         = $transferOnZeroToPhoneNumber;
        $this->transferPhoneNumber                 = new OutgoingDN($transferPhoneNumber);
        $this->alwaysRedirectToVoiceMail           = $alwaysRedirectToVoiceMail;
        $this->busyRedirectToVoiceMail             = $busyRedirectToVoiceMail;
        $this->noAnswerRedirectToVoiceMail         = $noAnswerRedirectToVoiceMail;
        $this->outOfPrimaryZoneRedirectToVoiceMail = $outOfPrimaryZoneRedirectToVoiceMail;
        $this->args                                = func_get_args();
    }

    public function setUserId($userId)
    {
        $userId and $this->userId = new UserId($userId);
    }

    public function getUserId()
    {
        return (!$this->userId) ?: $this->userId->value();
    }

    public function setIsActive($isActive)
    {
        $isActive and $this->isActive = new xs:boolean($isActive);
    }

    public function getIsActive()
    {
        return (!$this->isActive) ?: $this->isActive->value();
    }

    public function setProcessing($processing)
    {
        $processing and $this->processing = new VoiceMessagingMessageProcessing($processing);
    }

    public function getProcessing()
    {
        return (!$this->processing) ?: $this->processing->value();
    }

    public function setVoiceMessageDeliveryEmailAddress($voiceMessageDeliveryEmailAddress)
    {
        $voiceMessageDeliveryEmailAddress and $this->voiceMessageDeliveryEmailAddress = new EmailAddress($voiceMessageDeliveryEmailAddress);
    }

    public function getVoiceMessageDeliveryEmailAddress()
    {
        return (!$this->voiceMessageDeliveryEmailAddress) ?: $this->voiceMessageDeliveryEmailAddress->value();
    }

    public function setUsePhoneMessageWaitingIndicator($usePhoneMessageWaitingIndicator)
    {
        $usePhoneMessageWaitingIndicator and $this->usePhoneMessageWaitingIndicator = new xs:boolean($usePhoneMessageWaitingIndicator);
    }

    public function getUsePhoneMessageWaitingIndicator()
    {
        return (!$this->usePhoneMessageWaitingIndicator) ?: $this->usePhoneMessageWaitingIndicator->value();
    }

    public function setSendVoiceMessageNotifyEmail($sendVoiceMessageNotifyEmail)
    {
        $sendVoiceMessageNotifyEmail and $this->sendVoiceMessageNotifyEmail = new xs:boolean($sendVoiceMessageNotifyEmail);
    }

    public function getSendVoiceMessageNotifyEmail()
    {
        return (!$this->sendVoiceMessageNotifyEmail) ?: $this->sendVoiceMessageNotifyEmail->value();
    }

    public function setVoiceMessageNotifyEmailAddress($voiceMessageNotifyEmailAddress)
    {
        $voiceMessageNotifyEmailAddress and $this->voiceMessageNotifyEmailAddress = new EmailAddress($voiceMessageNotifyEmailAddress);
    }

    public function getVoiceMessageNotifyEmailAddress()
    {
        return (!$this->voiceMessageNotifyEmailAddress) ?: $this->voiceMessageNotifyEmailAddress->value();
    }

    public function setSendCarbonCopyVoiceMessage($sendCarbonCopyVoiceMessage)
    {
        $sendCarbonCopyVoiceMessage and $this->sendCarbonCopyVoiceMessage = new xs:boolean($sendCarbonCopyVoiceMessage);
    }

    public function getSendCarbonCopyVoiceMessage()
    {
        return (!$this->sendCarbonCopyVoiceMessage) ?: $this->sendCarbonCopyVoiceMessage->value();
    }

    public function setVoiceMessageCarbonCopyEmailAddress($voiceMessageCarbonCopyEmailAddress)
    {
        $voiceMessageCarbonCopyEmailAddress and $this->voiceMessageCarbonCopyEmailAddress = new EmailAddress($voiceMessageCarbonCopyEmailAddress);
    }

    public function getVoiceMessageCarbonCopyEmailAddress()
    {
        return (!$this->voiceMessageCarbonCopyEmailAddress) ?: $this->voiceMessageCarbonCopyEmailAddress->value();
    }

    public function setTransferOnZeroToPhoneNumber($transferOnZeroToPhoneNumber)
    {
        $transferOnZeroToPhoneNumber and $this->transferOnZeroToPhoneNumber = new xs:boolean($transferOnZeroToPhoneNumber);
    }

    public function getTransferOnZeroToPhoneNumber()
    {
        return (!$this->transferOnZeroToPhoneNumber) ?: $this->transferOnZeroToPhoneNumber->value();
    }

    public function setTransferPhoneNumber($transferPhoneNumber)
    {
        $transferPhoneNumber and $this->transferPhoneNumber = new OutgoingDN($transferPhoneNumber);
    }

    public function getTransferPhoneNumber()
    {
        return (!$this->transferPhoneNumber) ?: $this->transferPhoneNumber->value();
    }

    public function setAlwaysRedirectToVoiceMail($alwaysRedirectToVoiceMail)
    {
        $alwaysRedirectToVoiceMail and $this->alwaysRedirectToVoiceMail = new xs:boolean($alwaysRedirectToVoiceMail);
    }

    public function getAlwaysRedirectToVoiceMail()
    {
        return (!$this->alwaysRedirectToVoiceMail) ?: $this->alwaysRedirectToVoiceMail->value();
    }

    public function setBusyRedirectToVoiceMail($busyRedirectToVoiceMail)
    {
        $busyRedirectToVoiceMail and $this->busyRedirectToVoiceMail = new xs:boolean($busyRedirectToVoiceMail);
    }

    public function getBusyRedirectToVoiceMail()
    {
        return (!$this->busyRedirectToVoiceMail) ?: $this->busyRedirectToVoiceMail->value();
    }

    public function setNoAnswerRedirectToVoiceMail($noAnswerRedirectToVoiceMail)
    {
        $noAnswerRedirectToVoiceMail and $this->noAnswerRedirectToVoiceMail = new xs:boolean($noAnswerRedirectToVoiceMail);
    }

    public function getNoAnswerRedirectToVoiceMail()
    {
        return (!$this->noAnswerRedirectToVoiceMail) ?: $this->noAnswerRedirectToVoiceMail->value();
    }

    public function setOutOfPrimaryZoneRedirectToVoiceMail($outOfPrimaryZoneRedirectToVoiceMail)
    {
        $outOfPrimaryZoneRedirectToVoiceMail and $this->outOfPrimaryZoneRedirectToVoiceMail = new xs:boolean($outOfPrimaryZoneRedirectToVoiceMail);
    }

    public function getOutOfPrimaryZoneRedirectToVoiceMail()
    {
        return (!$this->outOfPrimaryZoneRedirectToVoiceMail) ?: $this->outOfPrimaryZoneRedirectToVoiceMail->value();
    }
}
