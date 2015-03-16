<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes; 

use Broadworks_OCIP\core\Builder\Types\SimpleType;
use Broadworks_OCIP\core\Builder\Restrictions\Length;
use Broadworks_OCIP\core\Builder\Restrictions\Pattern;


/**
 * A single dialing digit. Valid values are 0-9,*,#.
 */
class DigitAny extends SimpleType
{
    public $elementName = "DigitAny";
    public function __construct($value) {
        $this->setElementValue($value);
        $this->addRestriction(new Length("1"));
        $this->addRestriction(new Pattern("[0-9]|\*|#"));
    }
}
