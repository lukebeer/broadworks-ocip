<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated15; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\AgentACDState;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\core:OCITable;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Response to the UserCallCenterGetRequest.
 *         Contains the user's ACD state
 *         Indicates whether the agent is current available (logged in) to each call center in the list.
 *         Contains a table with column headings: "Service User Id", "Phone Number", "Extension", "Available", "Logoff Allowed".
 */
class UserCallCenterGetResponse extends ComplexType implements ComplexInterface
{
    public    $name = __CLASS__;

    public function __construct(
             $agentACDState=null,
             $userTable=null
    ) {
        $this->agentACDState = $agentACDState;
        $this->userTable     = $userTable;
        $this->args          = func_get_args();
    }

    public function setAgentACDState($agentACDState)
    {
        $agentACDState and $this->agentACDState = new AgentACDState($agentACDState);
    }

    public function getAgentACDState()
    {
        return (!$this->agentACDState) ?: $this->agentACDState->value();
    }

    public function setUserTable($userTable)
    {
        $userTable and $this->userTable = new core:OCITable($userTable);
    }

    public function getUserTable()
    {
        return (!$this->userTable) ?: $this->userTable->value();
    }
}
