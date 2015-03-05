<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceMusicOnHold; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\xs:boolean;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\DepartmentKey;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\DepartmentFullPathName;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Response to the GroupMusicOnHoldGetDepartmentListRequest.
 */
class GroupMusicOnHoldGetDepartmentListResponse extends ComplexType implements ComplexInterface
{
    public    $name = __CLASS__;

    public function __construct(
             $hasDepartment,
             DepartmentKey $department=null,
             $departmentFullPath=null
    ) {
        $this->hasDepartment      = $hasDepartment;
        $this->department         = $department;
        $this->departmentFullPath = new DepartmentFullPathName($departmentFullPath);
        $this->args               = func_get_args();
    }

    public function setHasDepartment($hasDepartment)
    {
        $hasDepartment and $this->hasDepartment = new xs:boolean($hasDepartment);
    }

    public function getHasDepartment()
    {
        return (!$this->hasDepartment) ?: $this->hasDepartment->value();
    }

    public function setDepartment($department)
    {
        $department and $this->department = new DepartmentKey($department);
    }

    public function getDepartment()
    {
        return (!$this->department) ?: $this->department->value();
    }

    public function setDepartmentFullPath($departmentFullPath)
    {
        $departmentFullPath and $this->departmentFullPath = new DepartmentFullPathName($departmentFullPath);
    }

    public function getDepartmentFullPath()
    {
        return (!$this->departmentFullPath) ?: $this->departmentFullPath->value();
    }
}
