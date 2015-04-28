<?php
/**
 * This file is part of http://github.com/LukeBeer/BroadworksOCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes; 

use BroadworksOCIP\Builder\Types\SimpleType;
use BroadworksOCIP\Builder\Restrictions\MaxLength;
use BroadworksOCIP\Builder\Restrictions\Pattern;


/**
 * Country dialing code.
 */
class CountryCode extends SimpleType
{
    public $elementName = "CountryCode";
    public function __construct($value) {
        $this->setElementValue($value);
        $this->addRestriction(new MaxLength("3"));
        $this->addRestriction(new Pattern("[0-9]|[1-9][0-9]{1,2}"));
    }
}
