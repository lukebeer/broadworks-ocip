<?php
/**
 * This file is part of http://github.com/LukeBeer/BroadworksOCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceIncomingCallingPlan; 

use BroadworksOCIP\Builder\Types\SimpleType;
use BroadworksOCIP\Builder\Restrictions\Enumeration;


/**
 * Indicates whether incoming outside calls are permitted.
 */
class IncomingCallingPlanOutsideCallPermission extends SimpleType
{
    public $elementName = "IncomingCallingPlanOutsideCallPermission";
    public function __construct($value) {
        $this->setElementValue($value);
        $this->addRestriction(new Enumeration([
            'Allow',
            'Allow Only If Redirected From Another User',
            'Disallow'
        ]));
    }
}
