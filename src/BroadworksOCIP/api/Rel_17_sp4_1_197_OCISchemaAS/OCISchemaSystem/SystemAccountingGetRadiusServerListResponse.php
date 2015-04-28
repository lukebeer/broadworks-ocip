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
 * Response to SystemAccountingGetRadiusServerListRequest. The Radius Server table
 *         column headings are: "Net Address", "Port", "Description"
 */
class SystemAccountingGetRadiusServerListResponse extends ComplexType implements ComplexInterface
{
    public    $elementName = 'SystemAccountingGetRadiusServerListResponse';
    protected $radiusServerTable;

    /**
     * @return \BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem\SystemAccountingGetRadiusServerListResponse $response
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * 
     */
    public function setRadiusServerTable(TableType $radiusServerTable = null)
    {
        $this->radiusServerTable = $radiusServerTable;
        $this->radiusServerTable->setElementName('radiusServerTable');
        return $this;
    }

    /**
     * 
     * @return TableType
     */
    public function getRadiusServerTable()
    {
        return $this->radiusServerTable;
    }
}
