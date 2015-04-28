<?php
/**
 * This file is part of http://github.com/LukeBeer/BroadworksOCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCallTransfer; 

use BroadworksOCIP\Builder\Types\SimpleType;
use BroadworksOCIP\Builder\Restrictions\MinInclusive;
use BroadworksOCIP\Builder\Restrictions\MaxInclusive;


/**
 * The allotted time for a call to camp on on busy transefer call.
 */
class CallTransferBusyCampOnSeconds extends SimpleType
{
    public $elementName = "CallTransferBusyCampOnSeconds";
    public function __construct($value) {
        $this->setElementValue($value);
        $this->addRestriction(new MinInclusive("30"));
        $this->addRestriction(new MaxInclusive("600"));
    }
}
