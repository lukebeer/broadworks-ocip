<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes; 

use Broadworks_OCIP\core\Builder\Types\SimpleType;
use Broadworks_OCIP\core\Builder\Restrictions\Enumeration;


/**
 * Group's policy for accessing group level and user level calling plan configuration.
 *         "Full" provides full control over the configuration of group-level and user-level calling plans.
 *         "Restricted" indicates
 *         1) not to provide access to group-level calling plan configuration,
 *         2) to provide access to only collect calls for user level incoming calling plan,
 *         3) to provide access to only international, operator assisted, 700/900, 976, and casual calls for user level outgoing calling plan.
 */
class GroupCallingPlanAccess extends SimpleType
{
    public $name = __CLASS__;
    protected $value;

    public function __construct($value) {
        $this->value    = $value;
        $this->dataType = (string);
        $this->addRestriction(new Enumeration([
            'Full',
            'Restricted'
        ]));
    }
}
