<?php
/**
 * This file is part of http://github.com/LukeBeer/BroadworksOCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceProvider; 

use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\RoutePointExternalSystem;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ServiceProviderId;
use BroadworksOCIP\Builder\Types\ComplexInterface;
use BroadworksOCIP\Builder\Types\ComplexType;
use BroadworksOCIP\Response\ResponseOutput;
use BroadworksOCIP\Client\Client;


/**
 * Unassign a list of route point external systems from a service provider.
 *         The response is either SuccessResponse or ErrorResponse.
 */
class ServiceProviderRoutePointExternalSystemUnassignListRequest extends ComplexType implements ComplexInterface
{
    public    $elementName = 'ServiceProviderRoutePointExternalSystemUnassignListRequest';
    protected $serviceProviderId;
    protected $routePointExternalSystem;

    public function __construct(
         $serviceProviderId = '',
         $routePointExternalSystem = null
    ) {
        $this->setServiceProviderId($serviceProviderId);
        $this->setRoutePointExternalSystem($routePointExternalSystem);
    }

    /**
     * @return mixed $response
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * 
     */
    public function setServiceProviderId($serviceProviderId = null)
    {
        $this->serviceProviderId = ($serviceProviderId InstanceOf ServiceProviderId)
             ? $serviceProviderId
             : new ServiceProviderId($serviceProviderId);
        $this->serviceProviderId->setElementName('serviceProviderId');
        return $this;
    }

    /**
     * 
     * @return ServiceProviderId $serviceProviderId
     */
    public function getServiceProviderId()
    {
        return ($this->serviceProviderId)
            ? $this->serviceProviderId->getElementValue()
            : null;
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
