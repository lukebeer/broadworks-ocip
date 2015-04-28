<?php
/**
 * This file is part of http://github.com/LukeBeer/BroadworksOCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes; 

use BroadworksOCIP\Builder\Types\SimpleType;
use BroadworksOCIP\Builder\Restrictions\MinLength;
use BroadworksOCIP\Builder\Restrictions\MaxLength;


/**
 * DEPRECATION NOTE: This is only used by deprecated R16 and R14 commands.
 *         Extension.
 */
class Extension extends SimpleType
{
    public $elementName = "Extension";
    public function __construct($value) {
        $this->setElementValue($value);
        $this->addRestriction(new MinLength("2"));
        $this->addRestriction(new MaxLength("6"));
    }
}
