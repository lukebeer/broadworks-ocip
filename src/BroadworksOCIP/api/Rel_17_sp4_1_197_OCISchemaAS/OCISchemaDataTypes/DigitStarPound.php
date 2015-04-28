<?php
/**
 * This file is part of http://github.com/LukeBeer/BroadworksOCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes; 

use BroadworksOCIP\Builder\Types\SimpleType;
use BroadworksOCIP\Builder\Restrictions\Length;
use BroadworksOCIP\Builder\Restrictions\Pattern;


/**
 * A single dialing digit with valid values * and # only.
 */
class DigitStarPound extends SimpleType
{
    public $elementName = "DigitStarPound";
    public function __construct($value) {
        $this->setElementValue($value);
        $this->addRestriction(new Length("1"));
        $this->addRestriction(new Pattern("\*|#"));
    }
}
