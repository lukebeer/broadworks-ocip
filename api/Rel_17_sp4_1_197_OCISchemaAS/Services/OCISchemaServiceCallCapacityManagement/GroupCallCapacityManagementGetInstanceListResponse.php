<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCallCapacityManagement; 


use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Response to the GroupCallCapacityManagementGetInstanceListRequest.
 *         Contains a table with column headings: "Name", "Is Default", "Maximum Calls", "Maximum Incoming Calls", "Maximum Outgoing Calls".
 */
class GroupCallCapacityManagementGetInstanceListResponse extends ComplexType implements ComplexInterface
{
    public    $name                   = 'GroupCallCapacityManagementGetInstanceListResponse';
    protected $callCapacityGroupTable = null;

    /**
     * @return GroupCallCapacityManagementGetInstanceListResponse
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * 
     */
    public function setCallCapacityGroupTable(core:OCITable $callCapacityGroupTable = null)
    {
        if (!$callCapacityGroupTable) return $this;
        $this->callCapacityGroupTable->setName('callCapacityGroupTable');
        return $this;
    }

    /**
     * 
     * @return core:OCITable
     */
    public function getCallCapacityGroupTable()
    {
        return $this->callCapacityGroupTable->getValue();
    }
}
