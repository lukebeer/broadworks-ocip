<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceOutgoingCallingPlan; 

use Broadworks_OCIP\core\Builder\Types\SimpleType;
use Broadworks_OCIP\core\Builder\Restrictions\Enumeration;


/**
 * Permission choices for Pinhole digit patterns on Call Me Now calls.
 */
class OutgoingPinholeDigitPlanCallMeNowPermission extends SimpleType
{
    public $elementName = "OutgoingPinholeDigitPlanCallMeNowPermission";
    public function __construct($value) {
        $this->setElementValue($value);
        $this->addRestriction(new Enumeration([
            'Ignore',
            'Allow'
        ]));
    }
}
