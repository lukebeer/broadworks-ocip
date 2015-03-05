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
 * Response to GroupServiceGetAuthorizationListRequest.
 *         Contains three tables, one for the service packs, one for the group services, and one for
 *         the user services.
 *         The user table has the following column headings:
 *           "Service Name", "Authorized", "Assigned", "Limited", "Quantity", "Usage", "Licensed", "Allowed", "User Assignable", "Group Service Assignable".
 *         The group service table has the following column headings:
 *           "Service Name", "Authorized", "Assigned", "Limited", "Quantity", "Usage", "Licensed", "Allowed".
 *         The service pack table's column headings are:
 *           "Service Pack Name", "Authorized", "Assigned", "Limited", "Allocated", "Allowed", "Usage", "Description".
 */
class GroupServiceGetAuthorizationListResponse extends ComplexType implements ComplexInterface
{
    public    $name = __CLASS__;

    public function __construct(
             $servicePacksAuthorizationTable,
             $groupServicesAuthorizationTable,
             $userServicesAuthorizationTable
    ) {
        $this->servicePacksAuthorizationTable  = $servicePacksAuthorizationTable;
        $this->groupServicesAuthorizationTable = $groupServicesAuthorizationTable;
        $this->userServicesAuthorizationTable  = $userServicesAuthorizationTable;
        $this->args                            = func_get_args();
    }

    public function setServicePacksAuthorizationTable($servicePacksAuthorizationTable)
    {
        $servicePacksAuthorizationTable and $this->servicePacksAuthorizationTable = new core:OCITable($servicePacksAuthorizationTable);
    }

    public function getServicePacksAuthorizationTable()
    {
        return (!$this->servicePacksAuthorizationTable) ?: $this->servicePacksAuthorizationTable->value();
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
