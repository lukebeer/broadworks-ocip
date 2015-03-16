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
 * Group's policy for department administrator's access to trunk group configuration.
 *         "Full" indicates full access to trunk groups in the department.
 *         "None" indicates no access to trunk groups in the department.
 */
class GroupDepartmentAdminTrunkGroupAccess extends SimpleType
{
    public $elementName = "GroupDepartmentAdminTrunkGroupAccess";
    public function __construct($value) {
        $this->setElementValue($value);
        $this->addRestriction(new Enumeration([
            'Full',
            'None'
        ]));
    }
}
