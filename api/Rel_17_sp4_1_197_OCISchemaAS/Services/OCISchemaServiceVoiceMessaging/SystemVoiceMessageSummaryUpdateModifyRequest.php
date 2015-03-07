<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceVoiceMessaging; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceVoiceMessaging\VoiceMessageSummaryUpdateSeconds;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Modify the system level data associated with Voice Messaging.
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class SystemVoiceMessageSummaryUpdateModifyRequest extends ComplexType implements ComplexInterface
{
    public    $name                                 = __CLASS__;
    protected $sendSavedAndUrgentMWIOnNotification  = null;
    protected $sendMessageSummaryUpdateOnRegister   = null;
    protected $minTimeBetweenMWIOnRegister          = null;

    public function __construct(
         $sendSavedAndUrgentMWIOnNotification = null,
         $sendMessageSummaryUpdateOnRegister = null,
         $minTimeBetweenMWIOnRegister = null
    ) {
        $this->setSendSavedAndUrgentMWIOnNotification($sendSavedAndUrgentMWIOnNotification);
        $this->setSendMessageSummaryUpdateOnRegister($sendMessageSummaryUpdateOnRegister);
        $this->setMinTimeBetweenMWIOnRegister($minTimeBetweenMWIOnRegister);
    }

    public function setSendSavedAndUrgentMWIOnNotification(xs:boolean $sendSavedAndUrgentMWIOnNotification = null)
    {
    }

    public function getSendSavedAndUrgentMWIOnNotification()
    {
        return (!$this->sendSavedAndUrgentMWIOnNotification) ?: $this->sendSavedAndUrgentMWIOnNotification->value();
    }

    public function setSendMessageSummaryUpdateOnRegister(xs:boolean $sendMessageSummaryUpdateOnRegister = null)
    {
    }

    public function getSendMessageSummaryUpdateOnRegister()
    {
        return (!$this->sendMessageSummaryUpdateOnRegister) ?: $this->sendMessageSummaryUpdateOnRegister->value();
    }

    public function setMinTimeBetweenMWIOnRegister($minTimeBetweenMWIOnRegister = null)
    {
        $this->minTimeBetweenMWIOnRegister = ($minTimeBetweenMWIOnRegister InstanceOf VoiceMessageSummaryUpdateSeconds)
             ? $minTimeBetweenMWIOnRegister
             : new VoiceMessageSummaryUpdateSeconds($minTimeBetweenMWIOnRegister);
    }

    public function getMinTimeBetweenMWIOnRegister()
    {
        return (!$this->minTimeBetweenMWIOnRegister) ?: $this->minTimeBetweenMWIOnRegister->value();
    }
}
