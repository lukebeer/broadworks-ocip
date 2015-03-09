<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceCallCenter; 


use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceCallCenter\UserCallCenterGetAgentSupervisorListResponse;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Response to the UserCallCenterGetAgentSupervisorListRequest.
 *         Contains a table with column headings: "User Id", "Last Name",
 *         "First Name", "Hiragana Last Name", "Hiragana First Name",
 *         "Phone Number", "Extension".
 */
class UserCallCenterGetAgentSupervisorListResponse extends ComplexType implements ComplexInterface
{
    public    $name            = __CLASS__;
    protected $supervisorTable = null;

    /**
     * @return UserCallCenterGetAgentSupervisorListResponse
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * 
     */
    public function setSupervisorTable(core:OCITable $supervisorTable = null)
    {
        $this->supervisorTable =  $supervisorTable;
    }

    /**
     * 
     */
    public function getSupervisorTable()
    {
        return (!$this->supervisorTable) ?: $this->supervisorTable->getValue();
    }
}
