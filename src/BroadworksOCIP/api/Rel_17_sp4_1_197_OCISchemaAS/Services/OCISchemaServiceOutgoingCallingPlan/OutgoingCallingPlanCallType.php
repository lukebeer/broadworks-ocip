<?php
/**
 * This file is part of http://github.com/LukeBeer/BroadworksOCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceOutgoingCallingPlan; 

use BroadworksOCIP\Builder\Types\SimpleType;
use BroadworksOCIP\Builder\Restrictions\Enumeration;


/**
 * Outgoing Calling Plan Call Type
 */
class OutgoingCallingPlanCallType extends SimpleType
{
    public $elementName = "OutgoingCallingPlanCallType";
    public function __construct($value) {
        $this->setElementValue($value);
        $this->addRestriction(new Enumeration([
            'Casual Calls',
            'Chargeable Directory Assistance',
            'International',
            'Local',
            'Operator Assisted',
            'Premium Services I',
            'Premium Services II',
            'Special Services I',
            'Special Services II',
            'Toll',
            'Toll Free'
        ]));
    }
}
