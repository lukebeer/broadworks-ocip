<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceVoiceMessaging; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\xs:boolean;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\VoiceMessageSummaryUpdateSeconds;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Modify the system level data associated with Voice Messaging.
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class SystemVoiceMessageSummaryUpdateModifyRequest extends ComplexType implements ComplexInterface
{
    public    $name = __CLASS__;

    public function __construct(
             $sendSavedAndUrgentMWIOnNotification=null,
             $sendMessageSummaryUpdateOnRegister=null,
             $minTimeBetweenMWIOnRegister=null
    ) {
        $this->sendSavedAndUrgentMWIOnNotification = $sendSavedAndUrgentMWIOnNotification;
        $this->sendMessageSummaryUpdateOnRegister  = $sendMessageSummaryUpdateOnRegister;
        $this->minTimeBetweenMWIOnRegister         = $minTimeBetweenMWIOnRegister;
        $this->args                                = func_get_args();
    }

    public function setSendSavedAndUrgentMWIOnNotification($sendSavedAndUrgentMWIOnNotification)
    {
        $sendSavedAndUrgentMWIOnNotification and $this->sendSavedAndUrgentMWIOnNotification = new xs:boolean($sendSavedAndUrgentMWIOnNotification);
    }

    public function getSendSavedAndUrgentMWIOnNotification()
    {
        return (!$this->sendSavedAndUrgentMWIOnNotification) ?: $this->sendSavedAndUrgentMWIOnNotification->value();
    }

    public function setSendMessageSummaryUpdateOnRegister($sendMessageSummaryUpdateOnRegister)
    {
        $sendMessageSummaryUpdateOnRegister and $this->sendMessageSummaryUpdateOnRegister = new xs:boolean($sendMessageSummaryUpdateOnRegister);
    }

    public function getSendMessageSummaryUpdateOnRegister()
    {
        return (!$this->sendMessageSummaryUpdateOnRegister) ?: $this->sendMessageSummaryUpdateOnRegister->value();
    }

    public function setMinTimeBetweenMWIOnRegister($minTimeBetweenMWIOnRegister)
    {
        $minTimeBetweenMWIOnRegister and $this->minTimeBetweenMWIOnRegister = new VoiceMessageSummaryUpdateSeconds($minTimeBetweenMWIOnRegister);
    }

    public function getMinTimeBetweenMWIOnRegister()
    {
        return (!$this->minTimeBetweenMWIOnRegister) ?: $this->minTimeBetweenMWIOnRegister->value();
    }
}
