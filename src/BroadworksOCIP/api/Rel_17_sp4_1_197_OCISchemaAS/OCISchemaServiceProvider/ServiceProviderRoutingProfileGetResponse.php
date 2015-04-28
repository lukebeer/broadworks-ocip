<?php
/**
 * This file is part of http://github.com/LukeBeer/BroadworksOCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceProvider; 

use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\RoutingProfile;
use BroadworksOCIP\Builder\Types\ComplexInterface;
use BroadworksOCIP\Builder\Types\ComplexType;
use BroadworksOCIP\Response\ResponseOutput;
use BroadworksOCIP\Client\Client;


/**
 * Response to ServiceProviderRoutingProfileGetRequest.
 */
class ServiceProviderRoutingProfileGetResponse extends ComplexType implements ComplexInterface
{
    public    $elementName = 'ServiceProviderRoutingProfileGetResponse';
    protected $routingProfile;

    /**
     * @return \BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceProvider\ServiceProviderRoutingProfileGetResponse $response
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
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
