<?php
/**
 * This file is part of http://github.com/LukeBeer/BroadworksOCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceSelectiveCallRejection; 

use BroadworksOCIP\Builder\Types\SimpleType;
use BroadworksOCIP\Builder\Restrictions\Enumeration;


/**
 * Selection criteria for a call type.
 */
class SelectiveCallRejectionCriteriaCallTypeSelection extends SimpleType
{
    public $elementName = "SelectiveCallRejectionCriteriaCallTypeSelection";
    public function __construct($value) {
        $this->setElementValue($value);
        $this->addRestriction(new Enumeration([
            'Any',
            'Forwarded',
            'Specified Only'
        ]));
    }
}
