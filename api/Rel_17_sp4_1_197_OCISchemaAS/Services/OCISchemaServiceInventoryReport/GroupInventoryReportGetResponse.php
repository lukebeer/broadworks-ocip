<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceInventoryReport; 

use Broadworks_OCIP\core\Builder\Types\TableType;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Response to GroupInventoryReportGetRequest.
 */
class GroupInventoryReportGetResponse extends ComplexType implements ComplexInterface
{
    public    $name                 = 'GroupInventoryReportGetResponse';
    protected $inventoryReportTable = null;

    /**
     * @return GroupInventoryReportGetResponse
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
        if (!$inventoryReportTable) return $this;
        $this->inventoryReportTable = $inventoryReportTable;
        $this->inventoryReportTable->setName('inventoryReportTable');
        return $this;
    }

    /**
     * 
     * @return TableType
     */
    public function getInventoryReportTable()
    {
        return $this->inventoryReportTable->getValue();
    }
}
