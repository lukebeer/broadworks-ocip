<?php
/**
 * This file is part of http://github.com/LukeBeer/BroadworksOCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem; 

use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\RoutePointExternalSystem;
use BroadworksOCIP\Builder\Types\ComplexInterface;
use BroadworksOCIP\Builder\Types\ComplexType;
use BroadworksOCIP\Response\ResponseOutput;
use BroadworksOCIP\Client\Client;


/**
 * Get a list of Route Points that are using the specified Route Point External System.  
 *       The response is either a SystemRoutePointExternalSystemGetRoutePointListResponse or an
 *       ErrorResponse.
 */
class SystemRoutePointExternalSystemGetRoutePointListRequest extends ComplexType implements ComplexInterface
{
    public    $responseType = 'BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem\SystemRoutePointExternalSystemGetRoutePointListResponse';
    public    $elementName = 'SystemRoutePointExternalSystemGetRoutePointListRequest';
    protected $routePointExternalSystem;

    public function __construct(
         $routePointExternalSystem = ''
    ) {
        $this->setRoutePointExternalSystem($routePointExternalSystem);
    }

    /**
     * @return \BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem\SystemRoutePointExternalSystemGetRoutePointListResponse $response
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
        $this->routePointExternalSystem = ($routePointExternalSystem InstanceOf RoutePointExternalSystem)
             ? $routePointExternalSystem
             : new RoutePointExternalSystem($routePointExternalSystem);
        $this->routePointExternalSystem->setElementName('routePointExternalSystem');
        return $this;
    }

    /**
     * 
     * @return RoutePointExternalSystem $routePointExternalSystem
     */
    public function getRoutePointExternalSystem()
    {
        return ($this->routePointExternalSystem)
            ? $this->routePointExternalSystem->getElementValue()
            : null;
    }
}
