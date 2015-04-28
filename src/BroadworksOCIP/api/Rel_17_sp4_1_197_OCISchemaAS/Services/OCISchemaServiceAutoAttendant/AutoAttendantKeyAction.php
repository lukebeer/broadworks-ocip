<?php
/**
 * This file is part of http://github.com/LukeBeer/BroadworksOCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceAutoAttendant; 

use BroadworksOCIP\Builder\Types\SimpleType;
use BroadworksOCIP\Builder\Restrictions\Enumeration;


/**
 * The action of Auto Attendant key.
 */
class AutoAttendantKeyAction extends SimpleType
{
    public $elementName = "AutoAttendantKeyAction";
    public function __construct($value) {
        $this->setElementValue($value);
        $this->addRestriction(new Enumeration([
            'Transfer With Prompt',
            'Transfer Without Prompt',
            'Transfer To Operator',
            'Name Dialing',
            'Extension Dialing',
            'Repeat Menu',
            'Exit'
        ]));
    }
}
