<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaEnterprise; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\DepartmentKey;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\DepartmentFullPathName;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Response to EnterpriseDepartmentGetAvailableParentListRequest.
 *         The response includes two parallel arrays of department keys and department display names.
 */
class EnterpriseDepartmentGetAvailableParentListResponse extends ComplexType implements ComplexInterface
{
    public    $name = __CLASS__;

    public function __construct(
             DepartmentKey $departmentKey=null,
             $fullPathName=null
    ) {
        $this->departmentKey = $departmentKey;
        $this->fullPathName  = new DepartmentFullPathName($fullPathName);
        $this->args          = func_get_args();
    }

    public function setDepartmentKey($departmentKey)
    {
        $departmentKey and $this->departmentKey = new DepartmentKey($departmentKey);
    }

    public function getDepartmentKey()
    {
        return (!$this->departmentKey) ?: $this->departmentKey->value();
    }

    public function setFullPathName($fullPathName)
    {
        $fullPathName and $this->fullPathName = new DepartmentFullPathName($fullPathName);
    }

    public function getFullPathName()
    {
        return (!$this->fullPathName) ?: $this->fullPathName->value();
    }
}
