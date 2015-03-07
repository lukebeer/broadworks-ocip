<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceMusicOnHold; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\DepartmentFullPathName;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\DepartmentKey;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Response to the GroupMusicOnHoldGetDepartmentListRequest.
 */
class GroupMusicOnHoldGetDepartmentListResponse extends ComplexType implements ComplexInterface
{
    public    $name                = __CLASS__;
    protected $hasDepartment       = null;
    protected $department          = null;
    protected $departmentFullPath  = null;


    public function setHasDepartment(xs:boolean $hasDepartment = null)
    {
    }

    public function getHasDepartment()
    {
        return (!$this->hasDepartment) ?: $this->hasDepartment->value();
    }

    public function setDepartment(DepartmentKey $department = null)
    {
    }

    public function getDepartment()
    {
        return (!$this->department) ?: $this->department->value();
    }

    public function setDepartmentFullPath($departmentFullPath = null)
    {
        $this->departmentFullPath = ($departmentFullPath InstanceOf DepartmentFullPathName)
             ? $departmentFullPath
             : new DepartmentFullPathName($departmentFullPath);
    }

    public function getDepartmentFullPath()
    {
        return (!$this->departmentFullPath) ?: $this->departmentFullPath->value();
    }
}
