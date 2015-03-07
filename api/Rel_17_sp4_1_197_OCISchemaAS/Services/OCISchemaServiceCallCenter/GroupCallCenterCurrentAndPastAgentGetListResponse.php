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
 * Response to the GroupCallCenterCurrentAndPastAgentGetListRequest.
 *         Contains a table with column headings: "User Id", "Last Name", "First Name", "Hiragana Last Name", "Hiragana First Name".
 */
class GroupCallCenterCurrentAndPastAgentGetListResponse extends ComplexType implements ComplexInterface
{
    public    $name                   = __CLASS__;
    protected $agentUserTable         = null;
    protected $deletedAgentUserTable  = null;


    public function setAgentUserTable(core:OCITable $agentUserTable = null)
    {
    }

    public function getAgentUserTable()
    {
        return (!$this->agentUserTable) ?: $this->agentUserTable->value();
    }

    public function setDeletedAgentUserTable(core:OCITable $deletedAgentUserTable = null)
    {
    }

    public function getDeletedAgentUserTable()
    {
        return (!$this->deletedAgentUserTable) ?: $this->deletedAgentUserTable->value();
    }
}
