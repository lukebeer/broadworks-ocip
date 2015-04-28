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
 * Group's policy for department administrator's access to user configuration.
 *         "Full" indicates full access to users in the department.
 *         "Read-Only Profile" indicates
 *           1) the department administrator is restricted from adding or removing users, and
 *           2) read-only access is granted to the user's profile.
 *         "No Profile" indicates
 *           1) the department administrator is restricted from adding or removing users, and
 *           2) no access is granted to the user's profile.
 *         "None" indicates no access to users in the department.
 */
class GroupDepartmentAdminUserAccess extends SimpleType
{
    public $elementName = "GroupDepartmentAdminUserAccess";
    public function __construct($value) {
        $this->setElementValue($value);
        $this->addRestriction(new Enumeration([
            'Full',
            'Read-Only Profile',
            'No Profile',
            'None'
        ]));
    }
}
