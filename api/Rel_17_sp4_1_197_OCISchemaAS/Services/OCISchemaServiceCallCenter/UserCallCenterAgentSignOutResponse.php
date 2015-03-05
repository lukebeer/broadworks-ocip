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
 * Response to the UserCallCenterAgentSignOutRequest. 
 *         It contains a list of call centers for which the agent is the last signed-in agent.
 *         Contains a table with column headings: "Service User Id" and "Call Center Name".
 */
class UserCallCenterAgentSignOutResponse extends ComplexType implements ComplexInterface
{
    public    $name = __CLASS__;

    public function __construct(
             $callCenterTable
    ) {
        $this->callCenterTable = $callCenterTable;
        $this->args            = func_get_args();
    }

    public function setCallCenterTable($callCenterTable)
    {
        $callCenterTable and $this->callCenterTable = new core:OCITable($callCenterTable);
    }

    public function getCallCenterTable()
    {
        return (!$this->callCenterTable) ?: $this->callCenterTable->value();
    }
}
