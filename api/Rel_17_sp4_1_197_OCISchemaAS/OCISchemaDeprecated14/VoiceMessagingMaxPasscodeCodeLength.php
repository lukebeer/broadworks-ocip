<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated14; 

use Broadworks_OCIP\core\Builder\Types\SimpleType;
use Broadworks_OCIP\core\Builder\Restrictions\MinInclusive;
use Broadworks_OCIP\core\Builder\Restrictions\MaxInclusive;


/**
 * Maximum length of voice messaging passcode.
 */
class VoiceMessagingMaxPasscodeCodeLength extends SimpleType
{
    public $elementName = "VoiceMessagingMaxPasscodeCodeLength";
    public function __construct($value) {
        $this->setElementValue($value);
        $this->addRestriction(new MinInclusive("3"));
        $this->addRestriction(new MaxInclusive("30"));
    }
}
