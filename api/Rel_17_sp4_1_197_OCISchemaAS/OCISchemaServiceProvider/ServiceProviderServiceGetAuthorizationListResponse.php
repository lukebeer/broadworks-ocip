<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceProvider; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\core:OCITable;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Response to ServiceProviderServiceGetAuthorizationListRequest.
 *         Contains two tables, one for the group services and one for the user services.
 *         The Group Service table has column headings:
 *         "Service Name", "Authorized", "Assigned", "Limited", "Quantity", "Allocated", "Licensed", "Service Pack Allocation"
 *         The User Service table has column headings:
 *         "Service Name", "Authorized", "Assigned", "Limited", "Quantity", "Allocated", "Licensed", "Service Pack Allocation", "User Assignable", "Service Pack Assignable".
 */
class ServiceProviderServiceGetAuthorizationListResponse extends ComplexType implements ComplexInterface
{
    public    $name = __CLASS__;

    public function __construct(
             $groupServicesAuthorizationTable,
             $userServicesAuthorizationTable
    ) {
        $this->groupServicesAuthorizationTable = $groupServicesAuthorizationTable;
        $this->userServicesAuthorizationTable  = $userServicesAuthorizationTable;
        $this->args                            = func_get_args();
    }

    public function setGroupServicesAuthorizationTable($groupServicesAuthorizationTable)
    {
        $groupServicesAuthorizationTable and $this->groupServicesAuthorizationTable = new core:OCITable($groupServicesAuthorizationTable);
    }

    public function getGroupServicesAuthorizationTable()
    {
        return (!$this->groupServicesAuthorizationTable) ?: $this->groupServicesAuthorizationTable->value();
    }

    public function setUserServicesAuthorizationTable($userServicesAuthorizationTable)
    {
        $userServicesAuthorizationTable and $this->userServicesAuthorizationTable = new core:OCITable($userServicesAuthorizationTable);
    }

    public function getUserServicesAuthorizationTable()
    {
        return (!$this->userServicesAuthorizationTable) ?: $this->userServicesAuthorizationTable->value();
    }
}
