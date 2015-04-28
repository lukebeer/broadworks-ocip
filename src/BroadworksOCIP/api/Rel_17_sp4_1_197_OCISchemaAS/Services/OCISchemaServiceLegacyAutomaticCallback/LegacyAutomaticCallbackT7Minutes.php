<?php
/**
 * This file is part of http://github.com/LukeBeer/BroadworksOCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceLegacyAutomaticCallback; 

use BroadworksOCIP\Builder\Types\SimpleType;
use BroadworksOCIP\Builder\Restrictions\MinInclusive;
use BroadworksOCIP\Builder\Restrictions\MaxInclusive;


/**
 * Legacy Automatic Callback T7 timer in minutes.
 */
class LegacyAutomaticCallbackT7Minutes extends SimpleType
{
    public $elementName = "LegacyAutomaticCallbackT7Minutes";
    public function __construct($value) {
        $this->setElementValue($value);
        $this->addRestriction(new MinInclusive("5"));
        $this->addRestriction(new MaxInclusive("180"));
    }
}
