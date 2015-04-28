<?php
/**
 * This file is part of http://github.com/LukeBeer/BroadworksOCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated14; 

use BroadworksOCIP\Builder\Types\TableType;
use BroadworksOCIP\Builder\Types\ComplexInterface;
use BroadworksOCIP\Builder\Types\ComplexType;
use BroadworksOCIP\Response\ResponseOutput;
use BroadworksOCIP\Client\Client;


/**
 * Response to GroupTrunkGroupUserCreationTaskGetListRequest.
 *         Contains a table with a row for each user creation task and column headings :
 *         "Name", "Status", "Users Created", "Total Users To Create", "Error Count".
 */
class GroupTrunkGroupUserCreationTaskGetListResponse extends ComplexType implements ComplexInterface
{
    public    $elementName = 'GroupTrunkGroupUserCreationTaskGetListResponse';
    protected $taskTable;

    /**
     * @return \BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated14\GroupTrunkGroupUserCreationTaskGetListResponse $response
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * 
     */
    public function setTaskTable(TableType $taskTable = null)
    {
        $this->taskTable = $taskTable;
        $this->taskTable->setElementName('taskTable');
        return $this;
    }

    /**
     * 
     * @return TableType
     */
    public function getTaskTable()
    {
        return $this->taskTable;
    }
}
