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
 * Delay afer which the Diameter stack attempts to reconnect to a peer after detecting a connection failure.
 */
class BwDiameterTcTimerSeconds extends SimpleType
{
    public $elementName = "BwDiameterTcTimerSeconds";
    public function __construct($value) {
        $this->setElementValue($value);
        $this->addRestriction(new MinInclusive("1"));
        $this->addRestriction(new MaxInclusive("3600"));
    }
}
