<?php
/**
 * This file is part of http://github.com/LukeBeer/BroadworksOCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem; 

use BroadworksOCIP\Builder\Types\SimpleType;
use BroadworksOCIP\Builder\Restrictions\MinInclusive;
use BroadworksOCIP\Builder\Restrictions\MaxInclusive;


/**
 * The rate at which a system refresh dispatches constituent Public Identity refresh procedures.
 */
class ShInterfaceSystemRefreshPublicIdentitiesPerHour extends SimpleType
{
    public $elementName = "ShInterfaceSystemRefreshPublicIdentitiesPerHour";
    public function __construct($value) {
        $this->setElementValue($value);
        $this->addRestriction(new MinInclusive("1"));
        $this->addRestriction(new MaxInclusive("100000"));
    }
}
