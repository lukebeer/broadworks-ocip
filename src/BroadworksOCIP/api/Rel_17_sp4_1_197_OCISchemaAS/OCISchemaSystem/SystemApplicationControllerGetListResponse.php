<?php
/**
 * This file is part of http://github.com/LukeBeer/BroadworksOCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem; 

use BroadworksOCIP\Builder\Types\TableType;
use BroadworksOCIP\Builder\Types\ComplexInterface;
use BroadworksOCIP\Builder\Types\ComplexType;
use BroadworksOCIP\Response\ResponseOutput;
use BroadworksOCIP\Client\Client;


/**
 * Response to the SystemApplicationControllerGetListRequest.
 *       Contains a table with column headings: "Name", "Subscriber Id", "Channel Set Id", "Status".
 *       The column values for "Status" can either be "ready" or "notReady".
 */
class SystemApplicationControllerGetListResponse extends ComplexType implements ComplexInterface
{
    public    $elementName = 'SystemApplicationControllerGetListResponse';
    protected $applicationControllerTable;

    /**
     * @return \BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem\SystemApplicationControllerGetListResponse $response
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * 
     */
    public function setApplicationControllerTable(TableType $applicationControllerTable = null)
    {
        $this->applicationControllerTable = $applicationControllerTable;
        $this->applicationControllerTable->setElementName('applicationControllerTable');
        return $this;
    }

    /**
     * 
     * @return TableType
     */
    public function getApplicationControllerTable()
    {
        return $this->applicationControllerTable;
    }
}
