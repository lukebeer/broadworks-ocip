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
 * How the incomming caller ID should be displayed in the case of an NS screening failure
 */
class NsScreeningFailurePolicy extends SimpleType
{
    public $elementName = "NsScreeningFailurePolicy";
    public function __construct($value) {
        $this->setElementValue($value);
        $this->addRestriction(new Enumeration([
            'Display Received Caller ID',
            'Restrict Number',
            'Restrict Name And Number'
        ]));
    }
}
