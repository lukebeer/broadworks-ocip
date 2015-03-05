<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceCallCenter; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\core:OCITable;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Response to the GroupCallCenterCurrentAndPastAgentGetListRequest.
 *         Contains a table with column headings: "User Id", "Last Name", "First Name", "Hiragana Last Name", "Hiragana First Name".
 */
class GroupCallCenterCurrentAndPastAgentGetListResponse extends ComplexType implements ComplexInterface
{
    public    $name = __CLASS__;

    public function __construct(
             $agentUserTable,
             $deletedAgentUserTable
    ) {
        $this->agentUserTable        = $agentUserTable;
        $this->deletedAgentUserTable = $deletedAgentUserTable;
        $this->args                  = func_get_args();
    }

    public function setAgentUserTable($agentUserTable)
    {
        $agentUserTable and $this->agentUserTable = new core:OCITable($agentUserTable);
    }

    public function getAgentUserTable()
    {
        return (!$this->agentUserTable) ?: $this->agentUserTable->value();
    }

    public function setDeletedAgentUserTable($deletedAgentUserTable)
    {
        $deletedAgentUserTable and $this->deletedAgentUserTable = new core:OCITable($deletedAgentUserTable);
    }

    public function getDeletedAgentUserTable()
    {
        return (!$this->deletedAgentUserTable) ?: $this->deletedAgentUserTable->value();
    }
}
