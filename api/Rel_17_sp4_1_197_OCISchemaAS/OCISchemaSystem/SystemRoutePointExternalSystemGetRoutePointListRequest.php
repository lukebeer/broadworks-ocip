<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\RoutePointExternalSystem;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem\SystemRoutePointExternalSystemGetRoutePointListResponse;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Get a list of Route Points that are using the specified Route Point External System.  
 *       The response is either a SystemRoutePointExternalSystemGetRoutePointListResponse or an
 *       ErrorResponse.
 */
class SystemRoutePointExternalSystemGetRoutePointListRequest extends ComplexType implements ComplexInterface
{
    public    $responseType             = 'Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem\SystemRoutePointExternalSystemGetRoutePointListResponse';
    public    $name                     = 'SystemRoutePointExternalSystemGetRoutePointListRequest';
    protected $routePointExternalSystem = null;

    public function __construct(
         $routePointExternalSystem
    ) {
        $this->setRoutePointExternalSystem($routePointExternalSystem);
    }

    /**
     * @return SystemRoutePointExternalSystemGetRoutePointListResponse
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * 
     */
    public function setRoutePointExternalSystem($routePointExternalSystem = null)
    {
        if (!$routePointExternalSystem) return $this;
        $this->routePointExternalSystem = ($routePointExternalSystem InstanceOf RoutePointExternalSystem)
             ? $routePointExternalSystem
             : new RoutePointExternalSystem($routePointExternalSystem);
        $this->routePointExternalSystem->setName('routePointExternalSystem');
        return $this;
    }

    /**
     * 
     * @return RoutePointExternalSystem
     */
    public function getRoutePointExternalSystem()
    {
        return $this->routePointExternalSystem->getValue();
    }
}
