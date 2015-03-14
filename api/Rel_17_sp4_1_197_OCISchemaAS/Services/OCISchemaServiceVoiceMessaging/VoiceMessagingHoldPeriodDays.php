<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceVoiceMessaging; 

use Broadworks_OCIP\core\Builder\Types\SimpleType;
use Broadworks_OCIP\core\Builder\Restrictions\Enumeration;


/**
 * Hold period for voice messages
 */
class VoiceMessagingHoldPeriodDays extends SimpleType
{
    public $name = "VoiceMessagingHoldPeriodDays";
    protected $value;

    public function __construct($value) {
        $this->value    = $value;
        $this->dataType = "";
        $this->addRestriction(new Enumeration([
            '0',
            '1',
            '2',
            '3',
            '4',
            '5',
            '6',
            '7',
            '15',
            '30',
            '60'
        ]));
    }
}
