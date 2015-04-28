<?php
/**
 * This file is part of http://github.com/LukeBeer/BroadworksOCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCallCapacityManagement; 

use BroadworksOCIP\Builder\Types\TableType;
use BroadworksOCIP\Builder\Types\ComplexInterface;
use BroadworksOCIP\Builder\Types\ComplexType;
use BroadworksOCIP\Response\ResponseOutput;
use BroadworksOCIP\Client\Client;


/**
 * Response to the GroupCallCapacityManagementGetInstanceListRequest.
 *         Contains a table with column headings: "Name", "Is Default", "Maximum Calls", "Maximum Incoming Calls", "Maximum Outgoing Calls".
 */
class GroupCallCapacityManagementGetInstanceListResponse extends ComplexType implements ComplexInterface
{
    public    $elementName = 'GroupCallCapacityManagementGetInstanceListResponse';
    protected $callCapacityGroupTable;

    /**
     * @return \BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCallCapacityManagement\GroupCallCapacityManagementGetInstanceListResponse $response
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * 
     */
    public function setCallCapacityGroupTable(TableType $callCapacityGroupTable = null)
    {
        $this->callCapacityGroupTable = $callCapacityGroupTable;
        $this->callCapacityGroupTable->setElementName('callCapacityGroupTable');
        return $this;
    }

    /**
     * 
     * @return TableType
     */
    public function getCallCapacityGroupTable()
    {
        return $this->callCapacityGroupTable;
    }
}
