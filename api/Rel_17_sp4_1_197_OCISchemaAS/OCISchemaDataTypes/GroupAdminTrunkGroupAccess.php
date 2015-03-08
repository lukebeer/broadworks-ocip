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
 * Policy for a group administrator's access to trunk groups.
 *         "Full" indicates full access to add/modify/delete trunk groups in the group.
 *         "Full Resources" indicates
 *           1) Restricted from adding or removing trunk groups, and
 *           2) Full access to trunk group resources
 *         "Read-Only Resources" indicates
 *           1) Restricted from adding or removing trunk groups, and
 *           2) Read-only access to trunk group resources
 *         "None" indicates no access to trunk groups in the group.
 */
class GroupAdminTrunkGroupAccess extends SimpleType
{
    public $name = __CLASS__;
    protected $value;

    public function __construct($value) {
        $this->value    = $value;
        $this->dataType = (string);
        $this->addRestriction(new Enumeration([
            'Full',
            'Full Resources',
            'Read-Only Resources',
            'None'
        ]));
    }
}
