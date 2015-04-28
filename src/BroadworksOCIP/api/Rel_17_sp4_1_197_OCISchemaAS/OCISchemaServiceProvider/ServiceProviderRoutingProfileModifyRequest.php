<?php
/**
 * This file is part of http://github.com/LukeBeer/BroadworksOCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceProvider; 

use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ServiceProviderId;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\RoutingProfile;
use BroadworksOCIP\Builder\Types\ComplexInterface;
use BroadworksOCIP\Builder\Types\ComplexType;
use BroadworksOCIP\Response\ResponseOutput;
use BroadworksOCIP\Client\Client;


/**
 * Requests to modify the routing profile for a service provider.
 *         The response is either SuccessResponse or ErrorResponse.
 */
class ServiceProviderRoutingProfileModifyRequest extends ComplexType implements ComplexInterface
{
    public    $elementName = 'ServiceProviderRoutingProfileModifyRequest';
    protected $serviceProviderId;
    protected $routingProfile;

    public function __construct(
         $serviceProviderId = '',
         $routingProfile = null
    ) {
        $this->setServiceProviderId($serviceProviderId);
        $this->setRoutingProfile($routingProfile);
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
    public function setRoutingProfile($routingProfile = null)
    {
        $this->routingProfile = ($routingProfile InstanceOf RoutingProfile)
             ? $routingProfile
             : new RoutingProfile($routingProfile);
        $this->routingProfile->setElementName('routingProfile');
        return $this;
    }

    /**
     * 
     * @return RoutingProfile $routingProfile
     */
    public function getRoutingProfile()
    {
        return ($this->routingProfile)
            ? $this->routingProfile->getElementValue()
            : null;
    }
}
