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
     * Response to the GroupCallCenterGetDNISAgentListRequest.
 *         Contains a table with column headings: "User Id", "Last Name",
 *         "First Name", "Hiragana Last Name", "Hiragana First Name".
 */
class GroupCallCenterGetDNISAgentListResponse extends ComplexType implements ComplexInterface
{
    const     RESPONSE_TYPE = 'Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceCallCenter\GroupCallCenterGetDNISAgentListResponse';
    public    $name       = __CLASS__;
    protected $agentTable = null;


    /**
     * 
     */
    public function setAgentTable(core:OCITable $agentTable = null)
    {
        $this->agentTable = core:OCITable $agentTable;
    }

    /**
     * 
     */
    public function getAgentTable()
    {
        return (!$this->agentTable) ?: $this->agentTable->getValue();
    }
}
