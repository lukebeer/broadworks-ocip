<?php
/**
 * This file is part of http://github.com/LukeBeer/BroadworksOCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCallingPlan; 

use BroadworksOCIP\Builder\Types\SimpleType;
use BroadworksOCIP\Builder\Restrictions\MinLength;
use BroadworksOCIP\Builder\Restrictions\MaxLength;


/**
 * Digit patterns that are used to restrict calls in the Incoming Calling Plan and Outgoing Calling Plan.
 *         The digit pattern may contain digits 0-9,+,?, and trailing * digit.
 *         Starting in Rel.14.sp4 digit patterns can also contain '#', and '*' digits anywhere in the string. To distinguish between a '*' as a digit from '*' as a wildcard character, a back-slash character shall be used as an escape in front of '*' being a digit. Note that '*' as a wildcard is still only allowed at the end of string.
 *         Starting in Rel.17.sp3, the range syntax [n1-n2] is also supported, where n1 and n2 denotes a digit in the range 0 to 9. Also the maximum length is increased to 160.
 */
class CallingPlanDigitPattern extends SimpleType
{
    public $elementName = "CallingPlanDigitPattern";
    public function __construct($value) {
        $this->setElementValue($value);
        $this->addRestriction(new MinLength("1"));
        $this->addRestriction(new MaxLength("160"));
    }
}
