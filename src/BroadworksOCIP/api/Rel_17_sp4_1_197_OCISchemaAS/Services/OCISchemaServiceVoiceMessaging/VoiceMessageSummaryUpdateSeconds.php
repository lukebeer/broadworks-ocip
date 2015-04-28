<?php
/**
 * This file is part of http://github.com/LukeBeer/BroadworksOCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceVoiceMessaging; 

use BroadworksOCIP\Builder\Types\SimpleType;
use BroadworksOCIP\Builder\Restrictions\MinInclusive;
use BroadworksOCIP\Builder\Restrictions\MaxInclusive;


/**
 * Minimum time interval between message summary update notifications in seconds.
 *         This parameter is used to avoid SIP signaling overload due to frequent device registration.
 *         Broadworks sends the message-summary only if the minimum time interval has elapsed.
 *         Configuring a value of zero causes the message-summary to be sent on every incoming registration (thus disabling the throttling mechanism).
 */
class VoiceMessageSummaryUpdateSeconds extends SimpleType
{
    public $elementName = "VoiceMessageSummaryUpdateSeconds";
    public function __construct($value) {
        $this->setElementValue($value);
        $this->addRestriction(new MinInclusive("0"));
        $this->addRestriction(new MaxInclusive("86400"));
    }
}
