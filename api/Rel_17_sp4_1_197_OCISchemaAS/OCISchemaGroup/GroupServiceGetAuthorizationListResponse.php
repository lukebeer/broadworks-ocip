<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaGroup; 


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
    const     RESPONSE_TYPE                    = 'Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaGroup\GroupServiceGetAuthorizationListResponse';
    public    $name                            = __CLASS__;
    protected $servicePacksAuthorizationTable  = null;
    protected $groupServicesAuthorizationTable = null;
    protected $userServicesAuthorizationTable  = null;


    /**
     * 
     */
    public function setServicePacksAuthorizationTable(core:OCITable $servicePacksAuthorizationTable = null)
    {
        $this->servicePacksAuthorizationTable = core:OCITable $servicePacksAuthorizationTable;
    }

    /**
     * 
     */
    public function getServicePacksAuthorizationTable()
    {
        return (!$this->servicePacksAuthorizationTable) ?: $this->servicePacksAuthorizationTable->getValue();
    }

    /**
     * 
     */
    public function setGroupServicesAuthorizationTable(core:OCITable $groupServicesAuthorizationTable = null)
    {
        $this->groupServicesAuthorizationTable = core:OCITable $groupServicesAuthorizationTable;
    }

    /**
     * 
     */
    public function getGroupServicesAuthorizationTable()
    {
        return (!$this->groupServicesAuthorizationTable) ?: $this->groupServicesAuthorizationTable->getValue();
    }

    /**
     * 
     */
    public function setUserServicesAuthorizationTable(core:OCITable $userServicesAuthorizationTable = null)
    {
        $this->userServicesAuthorizationTable = core:OCITable $userServicesAuthorizationTable;
    }

    /**
     * 
     */
    public function getUserServicesAuthorizationTable()
    {
        return (!$this->userServicesAuthorizationTable) ?: $this->userServicesAuthorizationTable->getValue();
    }
}