<?php
/**
 * This file is part of http://github.com/LukeBeer/BroadworksOCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCallCenter; 

use BroadworksOCIP\Builder\Types\SimpleType;
use BroadworksOCIP\Builder\Restrictions\MinInclusive;
use BroadworksOCIP\Builder\Restrictions\MaxInclusive;


/**
 * The moving average period used to calculate the call handling time.
 */
class CallHandlingSamplingPeriodMinutes extends SimpleType
{
    public $elementName = "CallHandlingSamplingPeriodMinutes";
    public function __construct($value) {
        $this->setElementValue($value);
        $this->addRestriction(new MinInclusive("5"));
        $this->addRestriction(new MaxInclusive("30"));
    }
}
