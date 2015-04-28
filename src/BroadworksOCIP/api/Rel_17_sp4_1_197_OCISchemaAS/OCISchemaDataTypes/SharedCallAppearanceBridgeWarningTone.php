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
 * Warning tone types for Shared Call Appearance.
 *         The bridge warning tone types are none, barge-in, barge-in repeat.
 */
class SharedCallAppearanceBridgeWarningTone extends SimpleType
{
    public $elementName = "SharedCallAppearanceBridgeWarningTone";
    public function __construct($value) {
        $this->setElementValue($value);
        $this->addRestriction(new Enumeration([
            'None',
            'Barge-In',
            'Barge-In and Repeat'
        ]));
    }
}
