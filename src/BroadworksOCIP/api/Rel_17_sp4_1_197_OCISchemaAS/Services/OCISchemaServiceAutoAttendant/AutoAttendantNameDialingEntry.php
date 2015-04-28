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
 * The format callers should use when dialing by name.
 */
class AutoAttendantNameDialingEntry extends SimpleType
{
    public $elementName = "AutoAttendantNameDialingEntry";
    public function __construct($value) {
        $this->setElementValue($value);
        $this->addRestriction(new Enumeration([
            'LastName + FirstName',
            'LastName + FirstName or FirstName + LastName'
        ]));
    }
}
