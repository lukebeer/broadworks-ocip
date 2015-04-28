<?php
/**
 * This file is part of http://github.com/LukeBeer/BroadworksOCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes; 

use BroadworksOCIP\Builder\Types\SimpleType;
use BroadworksOCIP\Builder\Restrictions\Enumeration;


/**
 * No charge treatments are handled by answering the call (via a 200 OK message)
 *         or with early media (via a 18x message)
 */
class NoChargeTreatmentHandling extends SimpleType
{
    public $elementName = "NoChargeTreatmentHandling";
    public function __construct($value) {
        $this->setElementValue($value);
        $this->addRestriction(new Enumeration([
            'Answer',
            'Early Media'
        ]));
    }
}
