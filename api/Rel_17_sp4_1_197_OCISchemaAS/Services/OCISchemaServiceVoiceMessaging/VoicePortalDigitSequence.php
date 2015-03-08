<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceVoiceMessaging; 

use Broadworks_OCIP\core\Builder\Types\SimpleType;
use Broadworks_OCIP\core\Builder\Restrictions\MinLength;
use Broadworks_OCIP\core\Builder\Restrictions\MaxLength;
use Broadworks_OCIP\core\Builder\Restrictions\Pattern;


/**
 * A sequence of digits used by the voice portal.
 */
class VoicePortalDigitSequence extends SimpleType
{
    public $name = __CLASS__;
    protected $value;

    public function __construct($value) {
        $this->value    = $value;
        $this->dataType = (string);
        $this->addRestriction(new MinLength("1"));
        $this->addRestriction(new MaxLength("3"));
        $this->addRestriction(new Pattern("([0-9]|\*|#){0,3}"));
    }
}
