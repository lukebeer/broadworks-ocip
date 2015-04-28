<?php
/**
 * This file is part of http://github.com/LukeBeer/BroadworksOCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem; 

use BroadworksOCIP\Builder\Types\SimpleType;
use BroadworksOCIP\Builder\Restrictions\MinInclusive;


/**
 * The max number of users in a group that will consume a group license.
 *         This number has to be greater than 0. For example, if the number is 300,
 *         then the first 300 users in a group will consume one group license and
 *         the #301 user will consume the second group license.
 */
class GroupUserLicenseLimit extends SimpleType
{
    public $elementName = "GroupUserLicenseLimit";
    public function __construct($value) {
        $this->setElementValue($value);
        $this->addRestriction(new MinInclusive("1"));
    }
}
