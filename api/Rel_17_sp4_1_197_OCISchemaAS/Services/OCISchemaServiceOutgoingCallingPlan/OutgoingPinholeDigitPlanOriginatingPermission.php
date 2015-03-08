<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceOutgoingCallingPlan; 

use Broadworks_OCIP\core\Builder\Types\SimpleType;
use Broadworks_OCIP\core\Builder\Restrictions\Enumeration;


/**
 * Permission choices for Pinhole digit patterns on originating calls.
 */
class OutgoingPinholeDigitPlanOriginatingPermission extends SimpleType
{
    public $name = __CLASS__;
    protected $value;

    public function __construct($value) {
        $this->value    = $value;
        $this->dataType = (string);
        $this->addRestriction(new Enumeration([
            'Ignore',
            'Allow',
            'Authorization Code Required',
            'Transfer To First Transfer Number',
            'Transfer To Second Transfer Number',
            'Transfer To Third Transfer Number'
        ]));
    }
}
