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
     * Response to GroupTrunkGroupUserCreationTaskGetListRequest14sp4.
 *         Contains a table with a row for each user creation task and column headings :
 *         "Name", "Status", "Users Created", "Total Users To Create", "Error Count".
 */
class GroupTrunkGroupUserCreationTaskGetListResponse14sp4 extends ComplexType implements ComplexInterface
{
    const     RESPONSE_TYPE = 'Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceTrunkGroup\GroupTrunkGroupUserCreationTaskGetListResponse14sp4';
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
