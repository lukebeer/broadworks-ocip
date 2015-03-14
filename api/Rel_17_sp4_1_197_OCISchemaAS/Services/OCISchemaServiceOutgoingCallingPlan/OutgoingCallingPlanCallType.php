<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceOutgoingCallingPlan; 

use Broadworks_OCIP\core\Builder\Types\SimpleType;
use Broadworks_OCIP\core\Builder\Restrictions\Enumeration;


/**
 * Outgoing Calling Plan Call Type
 */
class OutgoingCallingPlanCallType extends SimpleType
{
    public $name = "OutgoingCallingPlanCallType";
    protected $value;

    public function __construct($value) {
        $this->value    = $value;
        $this->dataType = "";
        $this->addRestriction(new Enumeration([
            'Casual Calls',
            'Chargeable Directory Assistance',
            'International',
            'Local',
            'Operator Assisted',
            'Premium Services I',
            'Premium Services II',
            'Special Services I',
            'Special Services II',
            'Toll',
            'Toll Free'
        ]));
    }
}
