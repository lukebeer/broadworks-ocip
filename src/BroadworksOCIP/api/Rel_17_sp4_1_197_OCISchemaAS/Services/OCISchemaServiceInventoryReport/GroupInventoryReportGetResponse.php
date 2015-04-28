<?php
/**
 * This file is part of http://github.com/LukeBeer/BroadworksOCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceInventoryReport; 

use BroadworksOCIP\Builder\Types\TableType;
use BroadworksOCIP\Builder\Types\ComplexInterface;
use BroadworksOCIP\Builder\Types\ComplexType;
use BroadworksOCIP\Response\ResponseOutput;
use BroadworksOCIP\Client\Client;


/**
 * Response to GroupInventoryReportGetRequest.
 */
class GroupInventoryReportGetResponse extends ComplexType implements ComplexInterface
{
    public    $elementName = 'GroupInventoryReportGetResponse';
    protected $inventoryReportTable;

    /**
     * @return \BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceInventoryReport\GroupInventoryReportGetResponse $response
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * 
     */
    public function setInventoryReportTable(TableType $inventoryReportTable = null)
    {
        $this->inventoryReportTable = $inventoryReportTable;
        $this->inventoryReportTable->setElementName('inventoryReportTable');
        return $this;
    }

    /**
     * 
     * @return TableType
     */
    public function getInventoryReportTable()
    {
        return $this->inventoryReportTable;
    }
}
