<?php
/**
 * This file is part of http://github.com/LukeBeer/BroadworksOCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceAdviceOfCharge; 

use BroadworksOCIP\Builder\Types\SimpleType;
use BroadworksOCIP\Builder\Restrictions\MinInclusive;
use BroadworksOCIP\Builder\Restrictions\MaxInclusive;


/**
 * The time in seconds used for the interval for sending AoC-D information to the caller.
 */
class AdviceOfChargeDelayBetweenNotificationSeconds extends SimpleType
{
    public $elementName = "AdviceOfChargeDelayBetweenNotificationSeconds";
    public function __construct($value) {
        $this->setElementValue($value);
        $this->addRestriction(new MinInclusive("15"));
        $this->addRestriction(new MaxInclusive("1800"));
    }
}
