<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceCallCenter; 


use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Response to the GroupCallCenterGetAgentListRequest.
 *         Contains a table with column headings: "User Id", "Last Name",
 *         "First Name", "Hiragana Last Name", "Hiragana First Name", "Weight".
 */
class GroupCallCenterGetAgentListResponse extends ComplexType implements ComplexInterface
{
    public    $name        = __CLASS__;
    protected $agentTable  = null;


    public function setAgentTable(core:OCITable $agentTable = null)
    {
    }

    public function getAgentTable()
    {
        return (!$this->agentTable) ?: $this->agentTable->value();
    }
}
