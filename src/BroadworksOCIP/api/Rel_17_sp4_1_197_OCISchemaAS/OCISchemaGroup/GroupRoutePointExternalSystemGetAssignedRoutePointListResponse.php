<?php
/**
 * This file is part of http://github.com/LukeBeer/BroadworksOCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaGroup; 

use BroadworksOCIP\Builder\Types\TableType;
use BroadworksOCIP\Builder\Types\ComplexInterface;
use BroadworksOCIP\Builder\Types\ComplexType;
use BroadworksOCIP\Response\ResponseOutput;
use BroadworksOCIP\Client\Client;


/**
 * Response to the GroupRoutePointExternalSystemGetAssignedRoutePointListRequest.
 *         Contains a table with column headings:
 *         "Service User Id", "Name", "Video", "Phone Number", "Extension", "Department".
 *         The column values for "Video" can either be "true", or "false".
 */
class GroupRoutePointExternalSystemGetAssignedRoutePointListResponse extends ComplexType implements ComplexInterface
{
    public    $elementName = 'GroupRoutePointExternalSystemGetAssignedRoutePointListResponse';
    protected $routePointTable;

    /**
     * @return \BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaGroup\GroupRoutePointExternalSystemGetAssignedRoutePointListResponse $response
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * 
     */
    public function setRoutePointTable(TableType $routePointTable = null)
    {
        $this->routePointTable = $routePointTable;
        $this->routePointTable->setElementName('routePointTable');
        return $this;
    }

    /**
     * 
     * @return TableType
     */
    public function getRoutePointTable()
    {
        return $this->routePointTable;
    }
}
