<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCallMeNow; 

use Broadworks_OCIP\core\Builder\Types\SimpleType;
use Broadworks_OCIP\core\Builder\Restrictions\MinInclusive;
use Broadworks_OCIP\core\Builder\Restrictions\MaxInclusive;


/**
 * Maximum number of characters for Call Me Now passcode.
 */
class CallMeNowPasscodeLength extends SimpleType
{
    public $elementName = "CallMeNowPasscodeLength";
    public function __construct($value) {
        $this->setElementValue($value);
        $this->addRestriction(new MinInclusive("2"));
        $this->addRestriction(new MaxInclusive("30"));
    }
}
