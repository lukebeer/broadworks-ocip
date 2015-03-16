<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated16; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceVoiceMessaging\VoiceMessagingMessageProcessing;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\EmailAddress;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\OutgoingDN;
use Broadworks_OCIP\core\Builder\Types\PrimitiveType;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Response to the UserVoiceMessagingUserGetVoiceManagementRequest13mp8.
 *         Replaced by: UserVoiceMessagingUserGetVoiceManagementResponse17
 */
class UserVoiceMessagingUserGetVoiceManagementResponse13mp8 extends ComplexType implements ComplexInterface
{
    public    $name = 'UserVoiceMessagingUserGetVoiceManagementResponse13mp8';
    protected $isActive;
    protected $processing;
    protected $voiceMessageDeliveryEmailAddress;
    protected $usePhoneMessageWaitingIndicator;
    protected $sendVoiceMessageNotifyEmail;
    protected $voiceMessageNotifyEmailAddress;
    protected $sendCarbonCopyVoiceMessage;
    protected $voiceMessageCarbonCopyEmailAddress;
    protected $transferOnZeroToPhoneNumber;
    protected $transferPhoneNumber;
    protected $alwaysRedirectToVoiceMail;
    protected $busyRedirectToVoiceMail;
    protected $noAnswerRedirectToVoiceMail;

    /**
     * @return \Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated16\UserVoiceMessagingUserGetVoiceManagementResponse13mp8 $response
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * 
     */
    public function setIsActive($isActive = null)
    {
        $this->isActive = new PrimitiveType($isActive);
        $this->isActive->setName('isActive');
        return $this;
    }

    /**
     * 
     * @return boolean $isActive
     */
    public function getIsActive()
    {
        return ($this->isActive) ? $this->isActive->getValue() : null;
    }

    /**
     * 
     */
    public function setProcessing($processing = null)
    {
        $this->processing = ($processing InstanceOf VoiceMessagingMessageProcessing)
             ? $processing
             : new VoiceMessagingMessageProcessing($processing);
        $this->processing->setName('processing');
        return $this;
    }

    /**
     * 
     * @return VoiceMessagingMessageProcessing $processing
     */
    public function getProcessing()
    {
        return ($this->processing) ? $this->processing->getValue() : null;
    }

    /**
     * 
     */
    public function setVoiceMessageDeliveryEmailAddress($voiceMessageDeliveryEmailAddress = null)
    {
        $this->voiceMessageDeliveryEmailAddress = ($voiceMessageDeliveryEmailAddress InstanceOf EmailAddress)
             ? $voiceMessageDeliveryEmailAddress
             : new EmailAddress($voiceMessageDeliveryEmailAddress);
        $this->voiceMessageDeliveryEmailAddress->setName('voiceMessageDeliveryEmailAddress');
        return $this;
    }

    /**
     * 
     * @return EmailAddress $voiceMessageDeliveryEmailAddress
     */
    public function getVoiceMessageDeliveryEmailAddress()
    {
        return ($this->voiceMessageDeliveryEmailAddress) ? $this->voiceMessageDeliveryEmailAddress->getValue() : null;
    }

    /**
     * 
     */
    public function setUsePhoneMessageWaitingIndicator($usePhoneMessageWaitingIndicator = null)
    {
        $this->usePhoneMessageWaitingIndicator = new PrimitiveType($usePhoneMessageWaitingIndicator);
        $this->usePhoneMessageWaitingIndicator->setName('usePhoneMessageWaitingIndicator');
        return $this;
    }

    /**
     * 
     * @return boolean $usePhoneMessageWaitingIndicator
     */
    public function getUsePhoneMessageWaitingIndicator()
    {
        return ($this->usePhoneMessageWaitingIndicator) ? $this->usePhoneMessageWaitingIndicator->getValue() : null;
    }

    /**
     * 
     */
    public function setSendVoiceMessageNotifyEmail($sendVoiceMessageNotifyEmail = null)
    {
        $this->sendVoiceMessageNotifyEmail = new PrimitiveType($sendVoiceMessageNotifyEmail);
        $this->sendVoiceMessageNotifyEmail->setName('sendVoiceMessageNotifyEmail');
        return $this;
    }

    /**
     * 
     * @return boolean $sendVoiceMessageNotifyEmail
     */
    public function getSendVoiceMessageNotifyEmail()
    {
        return ($this->sendVoiceMessageNotifyEmail) ? $this->sendVoiceMessageNotifyEmail->getValue() : null;
    }

    /**
     * 
     */
    public function setVoiceMessageNotifyEmailAddress($voiceMessageNotifyEmailAddress = null)
    {
        $this->voiceMessageNotifyEmailAddress = ($voiceMessageNotifyEmailAddress InstanceOf EmailAddress)
             ? $voiceMessageNotifyEmailAddress
             : new EmailAddress($voiceMessageNotifyEmailAddress);
        $this->voiceMessageNotifyEmailAddress->setName('voiceMessageNotifyEmailAddress');
        return $this;
    }

    /**
     * 
     * @return EmailAddress $voiceMessageNotifyEmailAddress
     */
    public function getVoiceMessageNotifyEmailAddress()
    {
        return ($this->voiceMessageNotifyEmailAddress) ? $this->voiceMessageNotifyEmailAddress->getValue() : null;
    }

    /**
     * 
     */
    public function setSendCarbonCopyVoiceMessage($sendCarbonCopyVoiceMessage = null)
    {
        $this->sendCarbonCopyVoiceMessage = new PrimitiveType($sendCarbonCopyVoiceMessage);
        $this->sendCarbonCopyVoiceMessage->setName('sendCarbonCopyVoiceMessage');
        return $this;
    }

    /**
     * 
     * @return boolean $sendCarbonCopyVoiceMessage
     */
    public function getSendCarbonCopyVoiceMessage()
    {
        return ($this->sendCarbonCopyVoiceMessage) ? $this->sendCarbonCopyVoiceMessage->getValue() : null;
    }

    /**
     * 
     */
    public function setVoiceMessageCarbonCopyEmailAddress($voiceMessageCarbonCopyEmailAddress = null)
    {
        $this->voiceMessageCarbonCopyEmailAddress = ($voiceMessageCarbonCopyEmailAddress InstanceOf EmailAddress)
             ? $voiceMessageCarbonCopyEmailAddress
             : new EmailAddress($voiceMessageCarbonCopyEmailAddress);
        $this->voiceMessageCarbonCopyEmailAddress->setName('voiceMessageCarbonCopyEmailAddress');
        return $this;
    }

    /**
     * 
     * @return EmailAddress $voiceMessageCarbonCopyEmailAddress
     */
    public function getVoiceMessageCarbonCopyEmailAddress()
    {
        return ($this->voiceMessageCarbonCopyEmailAddress) ? $this->voiceMessageCarbonCopyEmailAddress->getValue() : null;
    }

    /**
     * 
     */
    public function setTransferOnZeroToPhoneNumber($transferOnZeroToPhoneNumber = null)
    {
        $this->transferOnZeroToPhoneNumber = new PrimitiveType($transferOnZeroToPhoneNumber);
        $this->transferOnZeroToPhoneNumber->setName('transferOnZeroToPhoneNumber');
        return $this;
    }

    /**
     * 
     * @return boolean $transferOnZeroToPhoneNumber
     */
    public function getTransferOnZeroToPhoneNumber()
    {
        return ($this->transferOnZeroToPhoneNumber) ? $this->transferOnZeroToPhoneNumber->getValue() : null;
    }

    /**
     * 
     */
    public function setTransferPhoneNumber($transferPhoneNumber = null)
    {
        $this->transferPhoneNumber = ($transferPhoneNumber InstanceOf OutgoingDN)
             ? $transferPhoneNumber
             : new OutgoingDN($transferPhoneNumber);
        $this->transferPhoneNumber->setName('transferPhoneNumber');
        return $this;
    }

    /**
     * 
     * @return OutgoingDN $transferPhoneNumber
     */
    public function getTransferPhoneNumber()
    {
        return ($this->transferPhoneNumber) ? $this->transferPhoneNumber->getValue() : null;
    }

    /**
     * 
     */
    public function setAlwaysRedirectToVoiceMail($alwaysRedirectToVoiceMail = null)
    {
        $this->alwaysRedirectToVoiceMail = new PrimitiveType($alwaysRedirectToVoiceMail);
        $this->alwaysRedirectToVoiceMail->setName('alwaysRedirectToVoiceMail');
        return $this;
    }

    /**
     * 
     * @return boolean $alwaysRedirectToVoiceMail
     */
    public function getAlwaysRedirectToVoiceMail()
    {
        return ($this->alwaysRedirectToVoiceMail) ? $this->alwaysRedirectToVoiceMail->getValue() : null;
    }

    /**
     * 
     */
    public function setBusyRedirectToVoiceMail($busyRedirectToVoiceMail = null)
    {
        $this->busyRedirectToVoiceMail = new PrimitiveType($busyRedirectToVoiceMail);
        $this->busyRedirectToVoiceMail->setName('busyRedirectToVoiceMail');
        return $this;
    }

    /**
     * 
     * @return boolean $busyRedirectToVoiceMail
     */
    public function getBusyRedirectToVoiceMail()
    {
        return ($this->busyRedirectToVoiceMail) ? $this->busyRedirectToVoiceMail->getValue() : null;
    }

    /**
     * 
     */
    public function setNoAnswerRedirectToVoiceMail($noAnswerRedirectToVoiceMail = null)
    {
        $this->noAnswerRedirectToVoiceMail = new PrimitiveType($noAnswerRedirectToVoiceMail);
        $this->noAnswerRedirectToVoiceMail->setName('noAnswerRedirectToVoiceMail');
        return $this;
    }

    /**
     * 
     * @return boolean $noAnswerRedirectToVoiceMail
     */
    public function getNoAnswerRedirectToVoiceMail()
    {
        return ($this->noAnswerRedirectToVoiceMail) ? $this->noAnswerRedirectToVoiceMail->getValue() : null;
    }
}
