<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaUser; 


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
    const     RESPONSE_TYPE                = 'Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaUser\UserServiceGetAssignmentListResponse';
    public    $name                        = __CLASS__;
    protected $servicePacksAssignmentTable = null;
    protected $userServicesAssignmentTable = null;


    /**
     * 
     */
    public function setServicePacksAssignmentTable(core:OCITable $servicePacksAssignmentTable = null)
    {
        $this->servicePacksAssignmentTable = core:OCITable $servicePacksAssignmentTable;
    }

    /**
     * 
     */
    public function getServicePacksAssignmentTable()
    {
        return (!$this->servicePacksAssignmentTable) ?: $this->servicePacksAssignmentTable->getValue();
    }

    /**
     * 
     */
    public function setUserServicesAssignmentTable(core:OCITable $userServicesAssignmentTable = null)
    {
        $this->userServicesAssignmentTable = core:OCITable $userServicesAssignmentTable;
    }

    /**
     * 
     */
    public function getUserServicesAssignmentTable()
    {
        return (!$this->userServicesAssignmentTable) ?: $this->userServicesAssignmentTable->getValue();
    }
}