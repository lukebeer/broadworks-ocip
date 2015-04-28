<?php
/**
 * This file is part of http://github.com/LukeBeer/BroadworksOCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCommPilotExpressSR; 

use BroadworksOCIP\Builder\Types\SimpleType;
use BroadworksOCIP\Builder\Restrictions\MinInclusive;
use BroadworksOCIP\Builder\Restrictions\MaxInclusive;


/**
 * CommPilot Express SR Number Of Rings.
 */
class CommPilotExpressSRNumberOfRings extends SimpleType
{
    public $elementName = "CommPilotExpressSRNumberOfRings";
    public function __construct($value) {
        $this->setElementValue($value);
        $this->addRestriction(new MinInclusive("2"));
        $this->addRestriction(new MaxInclusive("20"));
    }
}
