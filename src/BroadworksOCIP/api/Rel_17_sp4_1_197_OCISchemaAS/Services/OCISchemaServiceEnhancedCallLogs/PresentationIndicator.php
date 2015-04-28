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
 * Presentation Indicator
 */
class PresentationIndicator extends SimpleType
{
    public $elementName = "PresentationIndicator";
    public function __construct($value) {
        $this->setElementValue($value);
        $this->addRestriction(new Enumeration([
            'Anonymous',
            'Anonymous Name',
            'Anonymous URI',
            'Anonymous Unavailable',
            'Public',
            'Unavailable'
        ]));
    }
}
