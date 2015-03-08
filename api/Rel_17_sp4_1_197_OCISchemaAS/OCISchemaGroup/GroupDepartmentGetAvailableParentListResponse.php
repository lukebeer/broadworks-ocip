<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaGroup; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\DepartmentFullPathName;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\DepartmentKey;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
     * Response to GroupDepartmentGetAvailableParentListRequest.
 *         The response includes two parallel arrays of department keys and department display names.
 */
class GroupDepartmentGetAvailableParentListResponse extends ComplexType implements ComplexInterface
{
    public    $name          = __CLASS__;
    protected $departmentKey = null;
    protected $fullPathName  = null;


    /**
     * Uniquely identifies a department system-wide.
     *         Departments are contained in either an enterprise or a group. Enterprise departments can be
     *         used by any or all groups within the enterprise. Department names are unique within a group and
     *         within an enterprise, but the same department name can exist in 2 different groups or in both
     *         a group and its parent enterprise. Therefore, to uniquely identify a department, we must know
     *         the department name and which enterprise or group contains the department.
     *         This type is extended by group and enterprise department keys.
     */
    public function setDepartmentKey(DepartmentKey $departmentKey = null)
    {
        $this->departmentKey =  $departmentKey;
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
    public function getDepartmentKey()
    {
        return (!$this->departmentKey) ?: $this->departmentKey->getValue();
    }

    /**
     * Department Full Path name. This the full path name of the department.
     */
    public function setFullPathName($fullPathName = null)
    {
        $this->fullPathName = ($fullPathName InstanceOf DepartmentFullPathName)
             ? $fullPathName
             : new DepartmentFullPathName($fullPathName);
    }

    /**
     * Department Full Path name. This the full path name of the department.
     */
    public function getFullPathName()
    {
        return (!$this->fullPathName) ?: $this->fullPathName->getValue();
    }
}
