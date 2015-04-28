<?php
/**
 * This file is part of http://github.com/LukeBeer/BroadworksOCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceVoiceMessaging; 

use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceVoiceMessaging\VoiceMessagingMessageProcessing;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\EmailAddress;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\OutgoingDN;
use BroadworksOCIP\Builder\Types\PrimitiveType;
use BroadworksOCIP\Builder\Types\ComplexInterface;
use BroadworksOCIP\Builder\Types\ComplexType;
use BroadworksOCIP\Response\ResponseOutput;
use BroadworksOCIP\Client\Client;


/**
 * Response to the UserVoiceMessagingUserGetVoiceManagementRequest17.
 */
class UserVoiceMessagingUserGetVoiceManagementResponse17 extends ComplexType implements ComplexInterface
{
    public    $elementName = 'UserVoiceMessagingUserGetVoiceManagementResponse17';
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
    protected $outOfPrimaryZoneRedirectToVoiceMail;

    /**
     * @return \BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceVoiceMessaging\UserVoiceMessagingUserGetVoiceManagementResponse17 $response
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
        $this->isActive->setElementName('isActive');
        return $this;
    }

    /**
     * 
     * @return boolean $isActive
     */
    public function getIsActive()
    {
        return ($this->isActive)
            ? $this->isActive->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setProcessing($processing = null)
    {
        $this->processing = ($processing InstanceOf VoiceMessagingMessageProcessing)
             ? $processing
             : new VoiceMessagingMessageProcessing($processing);
        $this->processing->setElementName('processing');
        return $this;
    }

    /**
     * 
     * @return VoiceMessagingMessageProcessing $processing
     */
    public function getProcessing()
    {
        return ($this->processing)
            ? $this->processing->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setVoiceMessageDeliveryEmailAddress($voiceMessageDeliveryEmailAddress = null)
    {
        $this->voiceMessageDeliveryEmailAddress = ($voiceMessageDeliveryEmailAddress InstanceOf EmailAddress)
             ? $voiceMessageDeliveryEmailAddress
             : new EmailAddress($voiceMessageDeliveryEmailAddress);
        $this->voiceMessageDeliveryEmailAddress->setElementName('voiceMessageDeliveryEmailAddress');
        return $this;
    }

    /**
     * 
     * @return EmailAddress $voiceMessageDeliveryEmailAddress
     */
    public function getVoiceMessageDeliveryEmailAddress()
    {
        return ($this->voiceMessageDeliveryEmailAddress)
            ? $this->voiceMessageDeliveryEmailAddress->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setUsePhoneMessageWaitingIndicator($usePhoneMessageWaitingIndicator = null)
    {
        $this->usePhoneMessageWaitingIndicator = new PrimitiveType($usePhoneMessageWaitingIndicator);
        $this->usePhoneMessageWaitingIndicator->setElementName('usePhoneMessageWaitingIndicator');
        return $this;
    }

    /**
     * 
     * @return boolean $usePhoneMessageWaitingIndicator
     */
    public function getUsePhoneMessageWaitingIndicator()
    {
        return ($this->usePhoneMessageWaitingIndicator)
            ? $this->usePhoneMessageWaitingIndicator->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setSendVoiceMessageNotifyEmail($sendVoiceMessageNotifyEmail = null)
    {
        $this->sendVoiceMessageNotifyEmail = new PrimitiveType($sendVoiceMessageNotifyEmail);
        $this->sendVoiceMessageNotifyEmail->setElementName('sendVoiceMessageNotifyEmail');
        return $this;
    }

    /**
     * 
     * @return boolean $sendVoiceMessageNotifyEmail
     */
    public function getSendVoiceMessageNotifyEmail()
    {
        return ($this->sendVoiceMessageNotifyEmail)
            ? $this->sendVoiceMessageNotifyEmail->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setVoiceMessageNotifyEmailAddress($voiceMessageNotifyEmailAddress = null)
    {
        $this->voiceMessageNotifyEmailAddress = ($voiceMessageNotifyEmailAddress InstanceOf EmailAddress)
             ? $voiceMessageNotifyEmailAddress
             : new EmailAddress($voiceMessageNotifyEmailAddress);
        $this->voiceMessageNotifyEmailAddress->setElementName('voiceMessageNotifyEmailAddress');
        return $this;
    }

    /**
     * 
     * @return EmailAddress $voiceMessageNotifyEmailAddress
     */
    public function getVoiceMessageNotifyEmailAddress()
    {
        return ($this->voiceMessageNotifyEmailAddress)
            ? $this->voiceMessageNotifyEmailAddress->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setSendCarbonCopyVoiceMessage($sendCarbonCopyVoiceMessage = null)
    {
        $this->sendCarbonCopyVoiceMessage = new PrimitiveType($sendCarbonCopyVoiceMessage);
        $this->sendCarbonCopyVoiceMessage->setElementName('sendCarbonCopyVoiceMessage');
        return $this;
    }

    /**
     * 
     * @return boolean $sendCarbonCopyVoiceMessage
     */
    public function getSendCarbonCopyVoiceMessage()
    {
        return ($this->sendCarbonCopyVoiceMessage)
            ? $this->sendCarbonCopyVoiceMessage->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setVoiceMessageCarbonCopyEmailAddress($voiceMessageCarbonCopyEmailAddress = null)
    {
        $this->voiceMessageCarbonCopyEmailAddress = ($voiceMessageCarbonCopyEmailAddress InstanceOf EmailAddress)
             ? $voiceMessageCarbonCopyEmailAddress
             : new EmailAddress($voiceMessageCarbonCopyEmailAddress);
        $this->voiceMessageCarbonCopyEmailAddress->setElementName('voiceMessageCarbonCopyEmailAddress');
        return $this;
    }

    /**
     * 
     * @return EmailAddress $voiceMessageCarbonCopyEmailAddress
     */
    public function getVoiceMessageCarbonCopyEmailAddress()
    {
        return ($this->voiceMessageCarbonCopyEmailAddress)
            ? $this->voiceMessageCarbonCopyEmailAddress->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setTransferOnZeroToPhoneNumber($transferOnZeroToPhoneNumber = null)
    {
        $this->transferOnZeroToPhoneNumber = new PrimitiveType($transferOnZeroToPhoneNumber);
        $this->transferOnZeroToPhoneNumber->setElementName('transferOnZeroToPhoneNumber');
        return $this;
    }

    /**
     * 
     * @return boolean $transferOnZeroToPhoneNumber
     */
    public function getTransferOnZeroToPhoneNumber()
    {
        return ($this->transferOnZeroToPhoneNumber)
            ? $this->transferOnZeroToPhoneNumber->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setTransferPhoneNumber($transferPhoneNumber = null)
    {
        $this->transferPhoneNumber = ($transferPhoneNumber InstanceOf OutgoingDN)
             ? $transferPhoneNumber
             : new OutgoingDN($transferPhoneNumber);
        $this->transferPhoneNumber->setElementName('transferPhoneNumber');
        return $this;
    }

    /**
     * 
     * @return OutgoingDN $transferPhoneNumber
     */
    public function getTransferPhoneNumber()
    {
        return ($this->transferPhoneNumber)
            ? $this->transferPhoneNumber->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setAlwaysRedirectToVoiceMail($alwaysRedirectToVoiceMail = null)
    {
        $this->alwaysRedirectToVoiceMail = new PrimitiveType($alwaysRedirectToVoiceMail);
        $this->alwaysRedirectToVoiceMail->setElementName('alwaysRedirectToVoiceMail');
        return $this;
    }

    /**
     * 
     * @return boolean $alwaysRedirectToVoiceMail
     */
    public function getAlwaysRedirectToVoiceMail()
    {
        return ($this->alwaysRedirectToVoiceMail)
            ? $this->alwaysRedirectToVoiceMail->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setBusyRedirectToVoiceMail($busyRedirectToVoiceMail = null)
    {
        $this->busyRedirectToVoiceMail = new PrimitiveType($busyRedirectToVoiceMail);
        $this->busyRedirectToVoiceMail->setElementName('busyRedirectToVoiceMail');
        return $this;
    }

    /**
     * 
     * @return boolean $busyRedirectToVoiceMail
     */
    public function getBusyRedirectToVoiceMail()
    {
        return ($this->busyRedirectToVoiceMail)
            ? $this->busyRedirectToVoiceMail->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setNoAnswerRedirectToVoiceMail($noAnswerRedirectToVoiceMail = null)
    {
        $this->noAnswerRedirectToVoiceMail = new PrimitiveType($noAnswerRedirectToVoiceMail);
        $this->noAnswerRedirectToVoiceMail->setElementName('noAnswerRedirectToVoiceMail');
        return $this;
    }

    /**
     * 
     * @return boolean $noAnswerRedirectToVoiceMail
     */
    public function getNoAnswerRedirectToVoiceMail()
    {
        return ($this->noAnswerRedirectToVoiceMail)
            ? $this->noAnswerRedirectToVoiceMail->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setOutOfPrimaryZoneRedirectToVoiceMail($outOfPrimaryZoneRedirectToVoiceMail = null)
    {
        $this->outOfPrimaryZoneRedirectToVoiceMail = new PrimitiveType($outOfPrimaryZoneRedirectToVoiceMail);
        $this->outOfPrimaryZoneRedirectToVoiceMail->setElementName('outOfPrimaryZoneRedirectToVoiceMail');
        return $this;
    }

    /**
     * 
     * @return boolean $outOfPrimaryZoneRedirectToVoiceMail
     */
    public function getOutOfPrimaryZoneRedirectToVoiceMail()
    {
        return ($this->outOfPrimaryZoneRedirectToVoiceMail)
            ? $this->outOfPrimaryZoneRedirectToVoiceMail->getElementValue()
            : null;
    }
}
