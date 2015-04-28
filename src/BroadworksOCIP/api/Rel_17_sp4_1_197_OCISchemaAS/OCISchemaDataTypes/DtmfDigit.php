<?php
/**
 * This file is part of http://github.com/LukeBeer/BroadworksOCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes; 

use BroadworksOCIP\Builder\Types\SimpleType;
use BroadworksOCIP\Builder\Restrictions\Length;


/**
 * A single DTMF dialing digit. Valid values are 0-9,*,#.
 */
class DtmfDigit extends SimpleType
{
    public $elementName = "DtmfDigit";
    public function __construct($value) {
        $this->setElementValue($value);
        $this->addRestriction(new Length("1"));
    }
}
