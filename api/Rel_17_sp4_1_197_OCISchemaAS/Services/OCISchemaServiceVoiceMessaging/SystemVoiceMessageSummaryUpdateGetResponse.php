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
     * Response to SystemVoiceMessageSummaryUpdateGetRequest.
 */
class SystemVoiceMessageSummaryUpdateGetResponse extends ComplexType implements ComplexInterface
{
    const     RESPONSE_TYPE                        = 'Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceVoiceMessaging\SystemVoiceMessageSummaryUpdateGetResponse';
    public    $name                                = __CLASS__;
    protected $sendSavedAndUrgentMWIOnNotification = null;
    protected $sendMessageSummaryUpdateOnRegister  = null;
    protected $minTimeBetweenMWIOnRegister         = null;


    /**
     * 
     */
    public function setSendSavedAndUrgentMWIOnNotification($sendSavedAndUrgentMWIOnNotification = null)
    {
        $this->sendSavedAndUrgentMWIOnNotification = (boolean) $sendSavedAndUrgentMWIOnNotification;
    }

    /**
     * 
     */
    public function getSendSavedAndUrgentMWIOnNotification()
    {
        return (!$this->sendSavedAndUrgentMWIOnNotification) ?: $this->sendSavedAndUrgentMWIOnNotification->getValue();
    }

    /**
     * 
     */
    public function setSendMessageSummaryUpdateOnRegister($sendMessageSummaryUpdateOnRegister = null)
    {
        $this->sendMessageSummaryUpdateOnRegister = (boolean) $sendMessageSummaryUpdateOnRegister;
    }

    /**
     * 
     */
    public function getSendMessageSummaryUpdateOnRegister()
    {
        return (!$this->sendMessageSummaryUpdateOnRegister) ?: $this->sendMessageSummaryUpdateOnRegister->getValue();
    }

    /**
     * Minimum time interval between message summary update notifications in seconds.
     *         This parameter is used to avoid SIP signaling overload due to frequent device registration.
     *         Broadworks sends the message-summary only if the minimum time interval has elapsed.
     *         Configuring a value of zero causes the message-summary to be sent on every incoming registration (thus disabling the throttling mechanism).
     */
    public function setMinTimeBetweenMWIOnRegister($minTimeBetweenMWIOnRegister = null)
    {
        $this->minTimeBetweenMWIOnRegister = ($minTimeBetweenMWIOnRegister InstanceOf VoiceMessageSummaryUpdateSeconds)
             ? $minTimeBetweenMWIOnRegister
             : new VoiceMessageSummaryUpdateSeconds($minTimeBetweenMWIOnRegister);
    }

    /**
     * Minimum time interval between message summary update notifications in seconds.
     *         This parameter is used to avoid SIP signaling overload due to frequent device registration.
     *         Broadworks sends the message-summary only if the minimum time interval has elapsed.
     *         Configuring a value of zero causes the message-summary to be sent on every incoming registration (thus disabling the throttling mechanism).
     */
    public function getMinTimeBetweenMWIOnRegister()
    {
        return (!$this->minTimeBetweenMWIOnRegister) ?: $this->minTimeBetweenMWIOnRegister->getValue();
    }
}
