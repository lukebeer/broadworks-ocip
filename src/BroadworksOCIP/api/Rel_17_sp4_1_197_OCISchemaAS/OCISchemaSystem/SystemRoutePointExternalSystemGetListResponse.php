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
 * Response to the SystemRoutePointExternalSystemGetListRequest.
 * 
 *       Contains a table with column headings:
 *       "External System", "Description".
 */
class SystemRoutePointExternalSystemGetListResponse extends ComplexType implements ComplexInterface
{
    public    $elementName = 'SystemRoutePointExternalSystemGetListResponse';
    protected $externalSystemTable;

    /**
     * @return \BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem\SystemRoutePointExternalSystemGetListResponse $response
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * 
     */
    public function setExternalSystemTable(TableType $externalSystemTable = null)
    {
        $this->externalSystemTable = $externalSystemTable;
        $this->externalSystemTable->setElementName('externalSystemTable');
        return $this;
    }

    /**
     * 
     * @return TableType
     */
    public function getExternalSystemTable()
    {
        return $this->externalSystemTable;
    }
}
