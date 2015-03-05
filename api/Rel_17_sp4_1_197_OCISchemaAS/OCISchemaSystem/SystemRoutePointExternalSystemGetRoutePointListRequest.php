<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\RoutePointExternalSystem;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Get a list of Route Points that are using the specified Route Point External System.  
 *       The response is either a SystemRoutePointExternalSystemGetRoutePointListResponse or an
 *       ErrorResponse.
 */
class SystemRoutePointExternalSystemGetRoutePointListRequest extends ComplexType implements ComplexInterface
{
    public    $name = __CLASS__;

    public function __construct(
             $routePointExternalSystem
    ) {
        $this->routePointExternalSystem = new RoutePointExternalSystem($routePointExternalSystem);
        $this->args                     = func_get_args();
    }

    public function setRoutePointExternalSystem($routePointExternalSystem)
    {
        $routePointExternalSystem and $this->routePointExternalSystem = new RoutePointExternalSystem($routePointExternalSystem);
    }

    public function getRoutePointExternalSystem()
    {
        return (!$this->routePointExternalSystem) ?: $this->routePointExternalSystem->value();
    }
}
