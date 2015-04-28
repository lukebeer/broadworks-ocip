<?php
/**
 * This file is part of http://github.com/LukeBeer/BroadworksOCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem; 

use BroadworksOCIP\Builder\Types\SimpleType;


/**
 * Trunk Group licensed call capacity.
 */
class TrunkGroupLicensedCallCapacity extends SimpleType
{
    public $elementName = "TrunkGroupLicensedCallCapacity";
    public function __construct($value) {
        $this->setElementValue($value);
    }
}
