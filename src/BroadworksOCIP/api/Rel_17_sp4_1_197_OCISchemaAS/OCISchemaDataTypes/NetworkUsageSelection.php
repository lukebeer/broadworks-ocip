<?php
/**
 * This file is part of http://github.com/LukeBeer/BroadworksOCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes; 

use BroadworksOCIP\Builder\Types\SimpleType;
use BroadworksOCIP\Builder\Restrictions\Enumeration;


/**
 * Network Usage types.
 */
class NetworkUsageSelection extends SimpleType
{
    public $elementName = "NetworkUsageSelection";
    public function __construct($value) {
        $this->setElementValue($value);
        $this->addRestriction(new Enumeration([
            'Force All Calls',
            'Force All Except Extension and Location Calls',
            'Do Not Force Enterprise and Group Calls'
        ]));
    }
}
