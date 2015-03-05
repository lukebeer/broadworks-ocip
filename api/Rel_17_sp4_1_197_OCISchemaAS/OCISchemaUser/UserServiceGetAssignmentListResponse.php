<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaUser; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\core:OCITable;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Response to UserServiceGetAssignmentListRequest.
 *         Contains two tables, one for the service packs, and one for the user services.
 *         The user table has the column headings: "Service Name", "Assigned",
 *         The service pack table's column headings are: "Service Pack Name", "Assigned", "Description".
 *         The "Assigned" column has either a true or false value
 */
class UserServiceGetAssignmentListResponse extends ComplexType implements ComplexInterface
{
    public    $name = __CLASS__;

    public function __construct(
             $servicePacksAssignmentTable,
             $userServicesAssignmentTable
    ) {
        $this->servicePacksAssignmentTable = $servicePacksAssignmentTable;
        $this->userServicesAssignmentTable = $userServicesAssignmentTable;
        $this->args                        = func_get_args();
    }

    public function setServicePacksAssignmentTable($servicePacksAssignmentTable)
    {
        $servicePacksAssignmentTable and $this->servicePacksAssignmentTable = new core:OCITable($servicePacksAssignmentTable);
    }

    public function getServicePacksAssignmentTable()
    {
        return (!$this->servicePacksAssignmentTable) ?: $this->servicePacksAssignmentTable->value();
    }

    public function setUserServicesAssignmentTable($userServicesAssignmentTable)
    {
        $userServicesAssignmentTable and $this->userServicesAssignmentTable = new core:OCITable($userServicesAssignmentTable);
    }

    public function getUserServicesAssignmentTable()
    {
        return (!$this->userServicesAssignmentTable) ?: $this->userServicesAssignmentTable->value();
    }
}
