<?php
/**
 * This file is part of http://github.com/LukeBeer/BroadworksOCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceEnhancedCallLogs; 

use BroadworksOCIP\Builder\Types\SimpleType;
use BroadworksOCIP\Builder\Restrictions\Enumeration;


/**
 * The Call Category for the call provided in the most significant contact from the NS
 */
class CallCategory extends SimpleType
{
    public $elementName = "CallCategory";
    public function __construct($value) {
        $this->setElementValue($value);
        $this->addRestriction(new Enumeration([
            'Local',
            'National',
            'Interlata',
            'Intralata',
            'International',
            'Private',
            'Emergency',
            'Other'
        ]));
    }
}
