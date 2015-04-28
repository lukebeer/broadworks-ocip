<?php
/**
 * This file is part of http://github.com/LukeBeer/BroadworksOCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem; 

use BroadworksOCIP\Builder\Types\SimpleType;
use BroadworksOCIP\Builder\Restrictions\MinInclusive;
use BroadworksOCIP\Builder\Restrictions\MaxInclusive;


/**
 * Timer that controls the frequency of Device-Watchdog messages (when no other messages are exchanged on the peer connection) and is used in the connection failure detection algorithm.
 */
class BwDiameterTwTimerSeconds extends SimpleType
{
    public $elementName = "BwDiameterTwTimerSeconds";
    public function __construct($value) {
        $this->setElementValue($value);
        $this->addRestriction(new MinInclusive("6"));
        $this->addRestriction(new MaxInclusive("60"));
    }
}
