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
 * Permission choices for Pinhole digit patterns on originating calls.
 */
class OutgoingPinholeDigitPlanOriginatingPermission extends SimpleType
{
    public $elementName = "OutgoingPinholeDigitPlanOriginatingPermission";
    public function __construct($value) {
        $this->setElementValue($value);
        $this->addRestriction(new Enumeration([
            'Ignore',
            'Allow',
            'Authorization Code Required',
            'Transfer To First Transfer Number',
            'Transfer To Second Transfer Number',
            'Transfer To Third Transfer Number'
        ]));
    }
}
