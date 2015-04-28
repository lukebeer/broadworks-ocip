<?php
/**
 * This file is part of http://github.com/LukeBeer/BroadworksOCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceProvider; 

use BroadworksOCIP\Builder\Types\TableType;
use BroadworksOCIP\Builder\Types\ComplexInterface;
use BroadworksOCIP\Builder\Types\ComplexType;
use BroadworksOCIP\Response\ResponseOutput;
use BroadworksOCIP\Client\Client;


/**
 * Response to ServiceProviderServicePackMigrationTaskGetListRequest.
 *         Contains a table with  a row for each service pack migration task and column headings :
 *         "Start Timestamp Milliseconds", "Name", "Status", "Error Count", "Users Processed", "Users Total".
 *         The start timestamp column is the number of milliseconds since the standard base time known as "the epoch",
 *         namely January 1, 1970, 00:00:00 GMT.
 */
class ServiceProviderServicePackMigrationTaskGetListResponse extends ComplexType implements ComplexInterface
{
    public    $elementName = 'ServiceProviderServicePackMigrationTaskGetListResponse';
    protected $taskTable;

    /**
     * @return \BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceProvider\ServiceProviderServicePackMigrationTaskGetListResponse $response
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
