<?php
/**
 * This file is part of http://github.com/LukeBeer/BroadworksOCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes; 

use BroadworksOCIP\Builder\Types\SimpleType;
use BroadworksOCIP\Builder\Restrictions\MinInclusive;


/**
 * Subsequent SNMP traps will be sent after the intial trap each time the number of
 *         counted events increases by this value since the last trap.
 */
class TrapOffsetThreshold extends SimpleType
{
    public $elementName = "TrapOffsetThreshold";
    public function __construct($value) {
        $this->setElementValue($value);
        $this->addRestriction(new MinInclusive("0"));
    }
}
