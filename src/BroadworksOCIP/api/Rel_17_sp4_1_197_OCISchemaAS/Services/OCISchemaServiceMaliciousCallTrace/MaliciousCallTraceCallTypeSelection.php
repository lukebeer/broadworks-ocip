<?php
/**
 * This file is part of http://github.com/LukeBeer/BroadworksOCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceMaliciousCallTrace; 

use BroadworksOCIP\Builder\Types\SimpleType;
use BroadworksOCIP\Builder\Restrictions\Enumeration;


/**
 * Call Types that are traced for malicious calls
 */
class MaliciousCallTraceCallTypeSelection extends SimpleType
{
    public $elementName = "MaliciousCallTraceCallTypeSelection";
    public function __construct($value) {
        $this->setElementValue($value);
        $this->addRestriction(new Enumeration([
            'All Incoming',
            'Answered Incoming',
            'All Incoming And Outgoing'
        ]));
    }
}
