<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCallCenter; 


use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Response to the UserCallCenterGetSupervisedAgentListRequest.
 *         Contains a table with column headings: "User Id", "Last Name",
 *         "First Name", "Hiragana Last Name", "Hiragana First Name", "Phone Number", "Extension".
 */
class UserCallCenterGetSupervisedAgentListResponse extends ComplexType implements ComplexInterface
{
    public    $name           = 'UserCallCenterGetSupervisedAgentListResponse';
    protected $agentUserTable = null;

    /**
     * @return UserCallCenterGetSupervisedAgentListResponse
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
        if (!$agentUserTable) return $this;
        $this->agentUserTable->setName('agentUserTable');
        return $this;
    }

    /**
     * 
     * @return core:OCITable
     */
    public function getAgentUserTable()
    {
        return $this->agentUserTable->getValue();
    }
}
