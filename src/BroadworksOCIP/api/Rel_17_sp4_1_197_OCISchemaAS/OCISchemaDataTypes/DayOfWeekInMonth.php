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
 * Defines the day of week in the month (First, Second, Third, Fourth, or Last).
 */
class DayOfWeekInMonth extends SimpleType
{
    public $elementName = "DayOfWeekInMonth";
    public function __construct($value) {
        $this->setElementValue($value);
        $this->addRestriction(new Enumeration([
            'First',
            'Second',
            'Third',
            'Fourth',
            'Last'
        ]));
    }
}
