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
 * Get a list of Application Controllers assigned to the Route Point External Systems specified.
 *       The response is either SystemRoutePointExternalSystemApplicationControllerGetResponse or ErrorResponse.
 */
class SystemRoutePointExternalSystemApplicationControllerGetRequest extends ComplexType implements ComplexInterface
{
    public    $responseType = 'BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem\SystemRoutePointExternalSystemApplicationControllerGetResponse';
    public    $elementName = 'SystemRoutePointExternalSystemApplicationControllerGetRequest';
    protected $externalSystem;

    public function __construct(
         $externalSystem = ''
    ) {
        $this->setExternalSystem($externalSystem);
    }

    /**
     * @return \BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem\SystemRoutePointExternalSystemApplicationControllerGetResponse $response
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * 
     */
    public function setExternalSystem($externalSystem = null)
    {
        $this->externalSystem = ($externalSystem InstanceOf RoutePointExternalSystem)
             ? $externalSystem
             : new RoutePointExternalSystem($externalSystem);
        $this->externalSystem->setElementName('externalSystem');
        return $this;
    }

    /**
     * 
     * @return RoutePointExternalSystem $externalSystem
     */
    public function getExternalSystem()
    {
        return ($this->externalSystem)
            ? $this->externalSystem->getElementValue()
            : null;
    }
}
