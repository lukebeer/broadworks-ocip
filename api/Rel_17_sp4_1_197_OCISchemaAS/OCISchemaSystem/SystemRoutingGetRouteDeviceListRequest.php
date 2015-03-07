<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem\RouteName;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Request to get a list of devices for a route.
 *         The response is either a SystemRoutingGetRouteDeviceListResponse or an ErrorResponse.
 */
class SystemRoutingGetRouteDeviceListRequest extends ComplexType implements ComplexInterface
{
    public    $name       = __CLASS__;
    protected $routeName  = null;

    public function __construct(
         $routeName
    ) {
        $this->setRouteName($routeName);
    }

    public function setRouteName($routeName = null)
    {
        $this->routeName = ($routeName InstanceOf RouteName)
             ? $routeName
             : new RouteName($routeName);
    }

    public function getRouteName()
    {
        return (!$this->routeName) ?: $this->routeName->value();
    }
}
