<?php
/**
 * This file is part of http://github.com/LukeBeer/BroadworksOCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes; 

use BroadworksOCIP\Builder\Types\SimpleType;
use BroadworksOCIP\Builder\Restrictions\MinLength;


/**
 * Name of a file on the filesystem.
 */
class FileName extends SimpleType
{
    public $elementName = "FileName";
    public function __construct($value) {
        $this->setElementValue($value);
        $this->addRestriction(new MinLength("1"));
    }
}
