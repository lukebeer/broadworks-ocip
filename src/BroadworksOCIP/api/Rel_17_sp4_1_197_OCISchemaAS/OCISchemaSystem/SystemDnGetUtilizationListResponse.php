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
 * Response to SystemDnUtilizationGetListRequest.
 *         The table columns are: "Service Provider Id", "Phone Numbers", "Assigned to Groups",
 *         "Percentage Assigned", "Is Enterprise" and "Activated on Groups".
 */
class SystemDnGetUtilizationListResponse extends ComplexType implements ComplexInterface
{
    public    $elementName = 'SystemDnGetUtilizationListResponse';
    protected $dnUtilizationTable;

    /**
     * @return \BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem\SystemDnGetUtilizationListResponse $response
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * 
     */
    public function setDnUtilizationTable(TableType $dnUtilizationTable = null)
    {
        $this->dnUtilizationTable = $dnUtilizationTable;
        $this->dnUtilizationTable->setElementName('dnUtilizationTable');
        return $this;
    }

    /**
     * 
     * @return TableType
     */
    public function getDnUtilizationTable()
    {
        return $this->dnUtilizationTable;
    }
}
