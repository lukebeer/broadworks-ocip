<?php
/**
 * This file is part of http://github.com/LukeBeer/BroadworksOCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceEmergencyZones; 

use BroadworksOCIP\Builder\Types\SimpleType;
use BroadworksOCIP\Builder\Restrictions\Enumeration;


/**
 * Emergency zone policy to specify what kind of calls will be prohibited by the service when
 *         originated from outside the home zone.
 */
class EmergencyZonesProhibition extends SimpleType
{
    public $elementName = "EmergencyZonesProhibition";
    public function __construct($value) {
        $this->setElementValue($value);
        $this->addRestriction(new Enumeration([
            'Prohibit all registrations and call originations',
            'Prohibit emergency call originations'
        ]));
    }
}
