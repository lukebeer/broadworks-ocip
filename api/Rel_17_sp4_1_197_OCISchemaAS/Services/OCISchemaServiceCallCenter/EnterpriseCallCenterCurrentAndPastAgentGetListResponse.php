<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceCallCenter; 


use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceCallCenter\EnterpriseCallCenterCurrentAndPastAgentGetListResponse;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Response to the EnterpriseCallCenterCurrentAndPastAgentGetListRequest.
 *         Contains a table with column headings: "User Id", "Last Name", "First Name", "Hiragana Last Name", "Hiragana First Name".
 */
class EnterpriseCallCenterCurrentAndPastAgentGetListResponse extends ComplexType implements ComplexInterface
{
    public    $name                  = __CLASS__;
    protected $agentUserTable        = null;
    protected $deletedAgentUserTable = null;

    /**
     * @return EnterpriseCallCenterCurrentAndPastAgentGetListResponse
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * 
     */
    public function setAgentUserTable(core:OCITable $agentUserTable = null)
    {
        $this->agentUserTable =  $agentUserTable;
    }

    /**
     * 
     */
    public function getAgentUserTable()
    {
        return (!$this->agentUserTable) ?: $this->agentUserTable->getValue();
    }

    /**
     * 
     */
    public function setDeletedAgentUserTable(core:OCITable $deletedAgentUserTable = null)
    {
        $this->deletedAgentUserTable =  $deletedAgentUserTable;
    }

    /**
     * 
     */
    public function getDeletedAgentUserTable()
    {
        return (!$this->deletedAgentUserTable) ?: $this->deletedAgentUserTable->getValue();
    }
}
