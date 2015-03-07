<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceVoiceMessaging; 

use Broadworks_OCIP\core\Builder\Types\SimpleType;
use Broadworks_OCIP\core\Builder\Restrictions\MinInclusive;
use Broadworks_OCIP\core\Builder\Restrictions\MaxInclusive;


/**
 * Minimum time interval between message summary update notifications in seconds.
 *         This parameter is used to avoid SIP signaling overload due to frequent device registration.
 *         Broadworks sends the message-summary only if the minimum time interval has elapsed.
 *         Configuring a value of zero causes the message-summary to be sent on every incoming registration (thus disabling the throttling mechanism).
 */
class VoiceMessageSummaryUpdateSeconds extends SimpleType
{
    public $name = __CLASS__;
    protected $value;

    public function __construct($value) {
        $this->value    = $value;
        $this->dataType = 'int';
        $this->addRestriction(new MinInclusive("0"));
        $this->addRestriction(new MaxInclusive("86400"));
    }
}
