<?php
/**
 * This file is part of http://github.com/LukeBeer/BroadworksOCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceVoiceMessaging; 

use BroadworksOCIP\Builder\Types\SimpleType;
use BroadworksOCIP\Builder\Restrictions\MinLength;
use BroadworksOCIP\Builder\Restrictions\MaxLength;
use BroadworksOCIP\Builder\Restrictions\Pattern;


/**
 * A sequence of digits used by the voice portal.
 */
class VoicePortalDigitSequence extends SimpleType
{
    public $elementName = "VoicePortalDigitSequence";
    public function __construct($value) {
        $this->setElementValue($value);
        $this->addRestriction(new MinLength("1"));
        $this->addRestriction(new MaxLength("3"));
        $this->addRestriction(new Pattern("([0-9]|\*|#){0,3}"));
    }
}
