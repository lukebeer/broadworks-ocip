<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceTrunkGroup; 


use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
     * Response to SystemTrunkGroupUserCreationTaskGetListRequest14sp4.
 *         Contains a table with a row for each user creation task and column headings :
 *         "Trunk Group Name", "Group Id", "Organization Id", "Organization Type", "Name", "Status", "Users Created", "Total Users To Create", "Error Count".
 *         The "Organization Id" column is populated with either a service provider Id or an enterprise Id.
 *         The "Organization Type" column is populated with one of the enumerated strings defined in the
 *         OrganizationType OCI data type.  Please see OCISchemaDataTypes.xsd for details on OrganizationType.
 */
class SystemTrunkGroupUserCreationTaskGetListResponse14sp4 extends ComplexType implements ComplexInterface
{
    const     RESPONSE_TYPE = 'Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceTrunkGroup\SystemTrunkGroupUserCreationTaskGetListResponse14sp4';
    public    $name      = __CLASS__;
    protected $taskTable = null;


    /**
     * 
     */
    public function setTaskTable(core:OCITable $taskTable = null)
    {
        $this->taskTable = core:OCITable $taskTable;
    }

    /**
     * 
     */
    public function getTaskTable()
    {
        return (!$this->taskTable) ?: $this->taskTable->getValue();
    }
}