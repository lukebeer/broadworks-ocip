<?php
/**
 * This file is part of http://github.com/LukeBeer/BroadworksOCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes; 

use BroadworksOCIP\Builder\Types\SimpleType;
use BroadworksOCIP\Builder\Restrictions\MinInclusive;
use BroadworksOCIP\Builder\Restrictions\MaxInclusive;


/**
 * Maximum Number of No Answer Rings.
 */
class MaxNoAnswerNumberOfRings extends SimpleType
{
    public $elementName = "MaxNoAnswerNumberOfRings";
    public function __construct($value) {
        $this->setElementValue($value);
        $this->addRestriction(new MinInclusive("6"));
        $this->addRestriction(new MaxInclusive("20"));
    }
}
