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
    const     RESPONSE_TYPE       = 'Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceMusicOnHold\GroupMusicOnHoldGetDepartmentListResponse';
    public    $name               = __CLASS__;
    protected $hasDepartment      = null;
    protected $department         = null;
    protected $departmentFullPath = null;


    /**
     * 
     */
    public function setHasDepartment($hasDepartment = null)
    {
        $this->hasDepartment = (boolean) $hasDepartment;
    }

    /**
     * 
     */
    public function getHasDepartment()
    {
        return (!$this->hasDepartment) ?: $this->hasDepartment->getValue();
    }

    /**
     * Uniquely identifies a department system-wide.
     *         Departments are contained in either an enterprise or a group. Enterprise departments can be
     *         used by any or all groups within the enterprise. Department names are unique within a group and
     *         within an enterprise, but the same department name can exist in 2 different groups or in both
     *         a group and its parent enterprise. Therefore, to uniquely identify a department, we must know
     *         the department name and which enterprise or group contains the department.
     *         This type is extended by group and enterprise department keys.
     */
    public function setDepartment(DepartmentKey $department = null)
    {
        $this->department = DepartmentKey $department;
    }

    /**
     * Uniquely identifies a department system-wide.
     *         Departments are contained in either an enterprise or a group. Enterprise departments can be
     *         used by any or all groups within the enterprise. Department names are unique within a group and
     *         within an enterprise, but the same department name can exist in 2 different groups or in both
     *         a group and its parent enterprise. Therefore, to uniquely identify a department, we must know
     *         the department name and which enterprise or group contains the department.
     *         This type is extended by group and enterprise department keys.
     */
    public function getDepartment()
    {
        return (!$this->department) ?: $this->department->getValue();
    }

    /**
     * Department Full Path name. This the full path name of the department.
     */
    public function setDepartmentFullPath($departmentFullPath = null)
    {
        $this->departmentFullPath = ($departmentFullPath InstanceOf DepartmentFullPathName)
             ? $departmentFullPath
             : new DepartmentFullPathName($departmentFullPath);
    }

    /**
     * Department Full Path name. This the full path name of the department.
     */
    public function getDepartmentFullPath()
    {
        return (!$this->departmentFullPath) ?: $this->departmentFullPath->getValue();
    }
}
