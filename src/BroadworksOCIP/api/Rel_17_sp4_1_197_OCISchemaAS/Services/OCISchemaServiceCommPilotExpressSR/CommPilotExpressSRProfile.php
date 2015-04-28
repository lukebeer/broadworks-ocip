<?php
/**
 * This file is part of http://github.com/LukeBeer/BroadworksOCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCommPilotExpressSR; 

use BroadworksOCIP\Builder\Types\SimpleType;
use BroadworksOCIP\Builder\Restrictions\Enumeration;


/**
 * CommPilot Express SR Profile Type.
 */
class CommPilotExpressSRProfile extends SimpleType
{
    public $elementName = "CommPilotExpressSRProfile";
    public function __construct($value) {
        $this->setElementValue($value);
        $this->addRestriction(new Enumeration([
            'Available In Office',
            'Available Out Of Office',
            'Busy',
            'Unavailable'
        ]));
    }
}
