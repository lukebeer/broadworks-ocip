<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceCallCapacityManagement; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\core:OCITable;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Response to the GroupCallCapacityManagementGetInstanceListRequest.
 *         Contains a table with column headings: "Name", "Is Default", "Maximum Calls", "Maximum Incoming Calls", "Maximum Outgoing Calls".
 */
class GroupCallCapacityManagementGetInstanceListResponse extends ComplexType implements ComplexInterface
{
    public    $name = __CLASS__;

    public function __construct(
             $callCapacityGroupTable
    ) {
        $this->callCapacityGroupTable = $callCapacityGroupTable;
        $this->args                   = func_get_args();
    }

    public function setCallCapacityGroupTable($callCapacityGroupTable)
    {
        $callCapacityGroupTable and $this->callCapacityGroupTable = new core:OCITable($callCapacityGroupTable);
    }

    public function getCallCapacityGroupTable()
    {
        return (!$this->callCapacityGroupTable) ?: $this->callCapacityGroupTable->value();
    }
}
