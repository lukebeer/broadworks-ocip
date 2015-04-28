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
 * Digits that are prepended to the incoming Caller ID of public calls, so that the Caller ID is presented in dialable format.
 *         The digit pattern may contain digits 0-9, *, #.
 */
class DialableCallerIDPrefixDigits extends SimpleType
{
    public $elementName = "DialableCallerIDPrefixDigits";
    public function __construct($value) {
        $this->setElementValue($value);
        $this->addRestriction(new MinLength("1"));
        $this->addRestriction(new MaxLength("10"));
    }
}
