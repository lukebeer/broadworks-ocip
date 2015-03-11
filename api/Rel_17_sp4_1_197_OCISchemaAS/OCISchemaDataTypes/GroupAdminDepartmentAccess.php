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
 * Policy for a group administrator's access to departments.
 *         "Full" indicates full access to departments.
 *         "Read-Only" indicates read-only access to the department list
 *         "None" indicates no access to the department list
 */
class GroupAdminDepartmentAccess extends SimpleType
{
    public $name = "GroupAdminDepartmentAccess";
    protected $value;

    public function __construct($value) {
        $this->value    = $value;
        $this->dataType = "";
        $this->addRestriction(new Enumeration([
            'Full',
            'Read-Only',
            'None'
        ]));
    }
}
