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
 * Enterprise Trunk Ordering Algorithm for an Enterprise Trunk
 */
class EnterpriseTrunkOrderingAlgorithm extends SimpleType
{
    public $elementName = "EnterpriseTrunkOrderingAlgorithm";
    public function __construct($value) {
        $this->setElementValue($value);
        $this->addRestriction(new Enumeration([
            'Ordered Load Balancing',
            'Overflow',
            'Most Idle',
            'Least Idle'
        ]));
    }
}
