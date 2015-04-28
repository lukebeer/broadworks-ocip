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
 * System User Calling Line Id Options.
 */
class SystemUserCallingLineIdSelection extends SimpleType
{
    public $elementName = "SystemUserCallingLineIdSelection";
    public function __construct($value) {
        $this->setElementValue($value);
        $this->addRestriction(new Enumeration([
            'Disable All',
            'Enable All',
            'Enable All Except Emergency',
            'Enable Emergency Only'
        ]));
    }
}
