<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceRoutePoint; 


use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Response to the GroupRoutePointGetInstanceListRequest.
 *         Contains a table with column headings:
 *         "Service User Id", "Name", "Video", "Phone Number", "Extension", "Department", "Is Active".
 *         The column values for "Video" and "Is Active" can either be true, or false.
 */
class GroupRoutePointGetInstanceListResponse extends ComplexType implements ComplexInterface
{
    public    $name             = __CLASS__;
    protected $routePointTable  = null;


    public function setRoutePointTable(core:OCITable $routePointTable = null)
    {
    }

    public function getRoutePointTable()
    {
        return (!$this->routePointTable) ?: $this->routePointTable->value();
    }
}
