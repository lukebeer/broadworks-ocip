<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaGroup; 


use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
     * Response to the GroupRoutePointExternalSystemGetAssignedRoutePointListRequest.
 *         Contains a table with column headings:
 *         "Service User Id", "Name", "Video", "Phone Number", "Extension", "Department".
 *         The column values for "Video" can either be "true", or "false".
 */
class GroupRoutePointExternalSystemGetAssignedRoutePointListResponse extends ComplexType implements ComplexInterface
{
    public    $name            = __CLASS__;
    protected $routePointTable = null;


    /**
     * 
     */
    public function setRoutePointTable(core:OCITable $routePointTable = null)
    {
        $this->routePointTable =  $routePointTable;
    }

    /**
     * 
     */
    public function getRoutePointTable()
    {
        return (!$this->routePointTable) ?: $this->routePointTable->getValue();
    }
}
