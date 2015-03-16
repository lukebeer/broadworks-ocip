<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceEnhancedCallLogs; 

use Broadworks_OCIP\core\Builder\Types\SimpleType;
use Broadworks_OCIP\core\Builder\Restrictions\Enumeration;


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
