<?php
/**
 * This file is part of http://github.com/LukeBeer/BroadworksOCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes; 

use BroadworksOCIP\Builder\Types\SimpleType;
use BroadworksOCIP\Builder\Restrictions\MinInclusive;
use BroadworksOCIP\Builder\Restrictions\MaxInclusive;


/**
 * Maximum number of Parties allowed in a conference call.
 */
class CallProcessingMaxConferenceParties extends SimpleType
{
    public $elementName = "CallProcessingMaxConferenceParties";
    public function __construct($value) {
        $this->setElementValue($value);
        $this->addRestriction(new MinInclusive("4"));
        $this->addRestriction(new MaxInclusive("15"));
    }
}
