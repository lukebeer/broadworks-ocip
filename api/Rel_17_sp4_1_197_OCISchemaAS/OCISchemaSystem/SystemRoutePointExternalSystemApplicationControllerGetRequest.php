<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem; 


use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Get a list of Application Controllers assigned to the Route Point External Systems specified.
 *       The response is either SystemRoutePointExternalSystemApplicationControllerGetResponse or ErrorResponse.
 */
class SystemRoutePointExternalSystemApplicationControllerGetRequest extends ComplexType implements ComplexInterface
{
    public    $responseType   = 'Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem\SystemRoutePointExternalSystemApplicationControllerGetResponse';
    public    $name = 'SystemRoutePointExternalSystemApplicationControllerGetRequest';
    protected $externalSystem;

    public function __construct(
         $externalSystem = ''
    ) {
        $this->setExternalSystem($externalSystem);
    }

    /**
     * @return \Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem\SystemRoutePointExternalSystemApplicationControllerGetResponse $response
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
        $this->externalSystem->setName('externalSystem');
        return $this;
    }

    /**
     * 
     * @return RoutePointExternalSystem $externalSystem
     */
    public function getExternalSystem()
    {
        return ($this->externalSystem) ? $this->externalSystem->getValue() : null;
    }
}
