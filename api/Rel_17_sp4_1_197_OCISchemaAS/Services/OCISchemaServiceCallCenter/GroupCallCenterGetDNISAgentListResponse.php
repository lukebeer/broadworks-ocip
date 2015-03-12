<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCallCenter; 

use Broadworks_OCIP\core\Builder\Types\TableType;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Response to the GroupCallCenterGetDNISAgentListRequest.
 *         Contains a table with column headings: "User Id", "Last Name",
 *         "First Name", "Hiragana Last Name", "Hiragana First Name".
 */
class GroupCallCenterGetDNISAgentListResponse extends ComplexType implements ComplexInterface
{
    public    $name       = 'GroupCallCenterGetDNISAgentListResponse';
    protected $agentTable = null;

    /**
     * @return GroupCallCenterGetDNISAgentListResponse
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * 
     */
    public function setAgentTable(TableType $agentTable = null)
    {
        if (!$agentTable) return $this;
        $this->agentTable = $agentTable;
        $this->agentTable->setName('agentTable');
        return $this;
    }

    /**
     * 
     * @return TableType
     */
    public function getAgentTable()
    {
        return $this->agentTable->getValue();
    }
}
