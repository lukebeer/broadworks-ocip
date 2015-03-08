<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaGroup; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\GroupDepartmentKey;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
     * Get a list of department administrators for the department.
 *         The response is either a GroupDepartmentAdminGetListResponse or an ErrorResponse.
 */
class GroupDepartmentAdminGetListRequest extends ComplexType implements ComplexInterface
{
    const     RESPONSE_TYPE  = 'Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaGroup\GroupDepartmentAdminGetListResponse';
    public    $name          = __CLASS__;
    protected $departmentKey = null;

    public function __construct(
          $departmentKey
    ) {
        $this->setDepartmentKey($departmentKey);
    }

    /**
     * Uniquely identifies a department defined within a group.
     *         To uniquely identify a group department, we must know the department name and which
     *         group contains the department.
     */
    public function setDepartmentKey(GroupDepartmentKey $departmentKey = null)
    {
        $this->departmentKey =  $departmentKey;
    }

    /**
     * Uniquely identifies a department defined within a group.
     *         To uniquely identify a group department, we must know the department name and which
     *         group contains the department.
     */
    public function getDepartmentKey()
    {
        return (!$this->departmentKey) ?: $this->departmentKey->getValue();
    }
}
