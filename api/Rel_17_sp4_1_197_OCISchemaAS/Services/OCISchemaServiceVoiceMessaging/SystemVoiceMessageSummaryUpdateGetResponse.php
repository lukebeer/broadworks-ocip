<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceVoiceMessaging; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceVoiceMessaging\VoiceMessageSummaryUpdateSeconds;
use Broadworks_OCIP\core\Builder\Types\PrimitiveType;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Response to SystemVoiceMessageSummaryUpdateGetRequest.
 */
class SystemVoiceMessageSummaryUpdateGetResponse extends ComplexType implements ComplexInterface
{
    public    $elementName = 'SystemVoiceMessageSummaryUpdateGetResponse';
    protected $sendSavedAndUrgentMWIOnNotification;
    protected $sendMessageSummaryUpdateOnRegister;
    protected $minTimeBetweenMWIOnRegister;

    /**
     * @return \Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceVoiceMessaging\SystemVoiceMessageSummaryUpdateGetResponse $response
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * 
     */
    public function setSendSavedAndUrgentMWIOnNotification($sendSavedAndUrgentMWIOnNotification = null)
    {
        $this->sendSavedAndUrgentMWIOnNotification = new PrimitiveType($sendSavedAndUrgentMWIOnNotification);
        $this->sendSavedAndUrgentMWIOnNotification->setElementName('sendSavedAndUrgentMWIOnNotification');
        return $this;
    }

    /**
     * 
     * @return boolean $sendSavedAndUrgentMWIOnNotification
     */
    public function getSendSavedAndUrgentMWIOnNotification()
    {
        return ($this->sendSavedAndUrgentMWIOnNotification)
            ? $this->sendSavedAndUrgentMWIOnNotification->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setSendMessageSummaryUpdateOnRegister($sendMessageSummaryUpdateOnRegister = null)
    {
        $this->sendMessageSummaryUpdateOnRegister = new PrimitiveType($sendMessageSummaryUpdateOnRegister);
        $this->sendMessageSummaryUpdateOnRegister->setElementName('sendMessageSummaryUpdateOnRegister');
        return $this;
    }

    /**
     * 
     * @return boolean $sendMessageSummaryUpdateOnRegister
     */
    public function getSendMessageSummaryUpdateOnRegister()
    {
        return ($this->sendMessageSummaryUpdateOnRegister)
            ? $this->sendMessageSummaryUpdateOnRegister->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setMinTimeBetweenMWIOnRegister($minTimeBetweenMWIOnRegister = null)
    {
        $this->minTimeBetweenMWIOnRegister = ($minTimeBetweenMWIOnRegister InstanceOf VoiceMessageSummaryUpdateSeconds)
             ? $minTimeBetweenMWIOnRegister
             : new VoiceMessageSummaryUpdateSeconds($minTimeBetweenMWIOnRegister);
        $this->minTimeBetweenMWIOnRegister->setElementName('minTimeBetweenMWIOnRegister');
        return $this;
    }

    /**
     * 
     * @return VoiceMessageSummaryUpdateSeconds $minTimeBetweenMWIOnRegister
     */
    public function getMinTimeBetweenMWIOnRegister()
    {
        return ($this->minTimeBetweenMWIOnRegister)
            ? $this->minTimeBetweenMWIOnRegister->getElementValue()
            : null;
    }
}
