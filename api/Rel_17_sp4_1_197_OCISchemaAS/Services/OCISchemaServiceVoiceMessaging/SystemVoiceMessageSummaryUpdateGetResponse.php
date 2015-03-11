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
    public    $name                                = 'SystemVoiceMessageSummaryUpdateGetResponse';
    protected $sendSavedAndUrgentMWIOnNotification = null;
    protected $sendMessageSummaryUpdateOnRegister  = null;
    protected $minTimeBetweenMWIOnRegister         = null;

    /**
     * @return SystemVoiceMessageSummaryUpdateGetResponse
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
        if (!$sendSavedAndUrgentMWIOnNotification) return $this;
        $this->sendSavedAndUrgentMWIOnNotification = new PrimitiveType($sendSavedAndUrgentMWIOnNotification);
        $this->sendSavedAndUrgentMWIOnNotification->setName('sendSavedAndUrgentMWIOnNotification');
        return $this;
    }

    /**
     * 
     * @return xs:boolean
     */
    public function getSendSavedAndUrgentMWIOnNotification()
    {
        return $this->sendSavedAndUrgentMWIOnNotification->getValue();
    }

    /**
     * 
     */
    public function setSendMessageSummaryUpdateOnRegister($sendMessageSummaryUpdateOnRegister = null)
    {
        if (!$sendMessageSummaryUpdateOnRegister) return $this;
        $this->sendMessageSummaryUpdateOnRegister = new PrimitiveType($sendMessageSummaryUpdateOnRegister);
        $this->sendMessageSummaryUpdateOnRegister->setName('sendMessageSummaryUpdateOnRegister');
        return $this;
    }

    /**
     * 
     * @return xs:boolean
     */
    public function getSendMessageSummaryUpdateOnRegister()
    {
        return $this->sendMessageSummaryUpdateOnRegister->getValue();
    }

    /**
     * 
     */
    public function setMinTimeBetweenMWIOnRegister($minTimeBetweenMWIOnRegister = null)
    {
        if (!$minTimeBetweenMWIOnRegister) return $this;
        $this->minTimeBetweenMWIOnRegister = ($minTimeBetweenMWIOnRegister InstanceOf VoiceMessageSummaryUpdateSeconds)
             ? $minTimeBetweenMWIOnRegister
             : new VoiceMessageSummaryUpdateSeconds($minTimeBetweenMWIOnRegister);
        $this->minTimeBetweenMWIOnRegister->setName('minTimeBetweenMWIOnRegister');
        return $this;
    }

    /**
     * 
     * @return VoiceMessageSummaryUpdateSeconds
     */
    public function getMinTimeBetweenMWIOnRegister()
    {
        return $this->minTimeBetweenMWIOnRegister->getValue();
    }
}
