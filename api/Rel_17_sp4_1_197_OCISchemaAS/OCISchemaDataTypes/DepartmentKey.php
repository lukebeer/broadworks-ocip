<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes; 


use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Uniquely identifies a department system-wide.
 *         Departments are contained in either an enterprise or a group. Enterprise departments can be
 *         used by any or all groups within the enterprise. Department names are unique within a group and
 *         within an enterprise, but the same department name can exist in 2 different groups or in both
 *         a group and its parent enterprise. Therefore, to uniquely identify a department, we must know
 *         the department name and which enterprise or group contains the department.
 *         This type is extended by group and enterprise department keys.
 */
class DepartmentKey extends ComplexType implements ComplexInterface
{
    public    $name = __CLASS__;

    public function __construct(    ) {
        $this->args= func_get_args();
    }
}
