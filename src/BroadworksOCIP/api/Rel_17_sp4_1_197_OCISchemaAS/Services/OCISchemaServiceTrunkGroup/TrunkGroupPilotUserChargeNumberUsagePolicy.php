<?php
/**
 * This file is part of http://github.com/LukeBeer/BroadworksOCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceTrunkGroup; 

use BroadworksOCIP\Builder\Types\SimpleType;
use BroadworksOCIP\Builder\Restrictions\Enumeration;


/**
 * Trunk Group Pilot User Charge Number policy
 */
class TrunkGroupPilotUserChargeNumberUsagePolicy extends SimpleType
{
    public $elementName = "TrunkGroupPilotUserChargeNumberUsagePolicy";
    public function __construct($value) {
        $this->setElementValue($value);
        $this->addRestriction(new Enumeration([
            'All Originating Calls',
            'Unscreened Originating Calls',
            'No Calls'
        ]));
    }
}
