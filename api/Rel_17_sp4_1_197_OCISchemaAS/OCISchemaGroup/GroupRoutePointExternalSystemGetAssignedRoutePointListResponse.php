<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaGroup; 

use Broadworks_OCIP\core\Builder\Types\TableType;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Response to the GroupRoutePointExternalSystemGetAssignedRoutePointListRequest.
 *         Contains a table with column headings:
 *         "Service User Id", "Name", "Video", "Phone Number", "Extension", "Department".
 *         The column values for "Video" can either be "true", or "false".
 */
class GroupRoutePointExternalSystemGetAssignedRoutePointListResponse extends ComplexType implements ComplexInterface
{
    public    $name            = 'GroupRoutePointExternalSystemGetAssignedRoutePointListResponse';
    protected $routePointTable = null;

    /**
     * @return \Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaGroup\GroupRoutePointExternalSystemGetAssignedRoutePointListResponse $response
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
        if (!$routePointTable) return $this;
        $this->routePointTable = $routePointTable;
        $this->routePointTable->setName('routePointTable');
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
