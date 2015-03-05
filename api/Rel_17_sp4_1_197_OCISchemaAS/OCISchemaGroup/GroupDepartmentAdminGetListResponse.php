<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaGroup; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\core:OCITable;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Response to GroupDepartmentAdminGetListRequest.
 *         Contains a 5 column table with column headings "Administrator ID",
 *         "Last Name", "First Name", "Department", "Language".
 */
class GroupDepartmentAdminGetListResponse extends ComplexType implements ComplexInterface
{
    public    $name = __CLASS__;

    public function __construct(
             $departmentAdminTable
    ) {
        $this->departmentAdminTable = $departmentAdminTable;
        $this->args                 = func_get_args();
    }

    public function setDepartmentAdminTable($departmentAdminTable)
    {
        $departmentAdminTable and $this->departmentAdminTable = new core:OCITable($departmentAdminTable);
    }

    public function getDepartmentAdminTable()
    {
        return (!$this->departmentAdminTable) ?: $this->departmentAdminTable->value();
    }
}
