<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceEmergencyZones; 

use Broadworks_OCIP\core\Builder\Types\SimpleType;
use Broadworks_OCIP\core\Builder\Restrictions\Enumeration;


/**
 * Emergency zone policy to specify what kind of calls will be prohibited by the service when
 *         originated from outside the home zone.
 */
class EmergencyZonesProhibition extends SimpleType
{
    public $name = "EmergencyZonesProhibition";
    protected $value;

    public function __construct($value) {
        $this->value    = $value;
        $this->dataType = "";
        $this->addRestriction(new Enumeration([
            'Prohibit all registrations and call originations',
            'Prohibit emergency call originations'
        ]));
    }
}
