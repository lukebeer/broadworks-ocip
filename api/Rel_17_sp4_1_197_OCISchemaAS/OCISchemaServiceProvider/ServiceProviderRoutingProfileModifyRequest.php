<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceProvider; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ServiceProviderId;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\RoutingProfile;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Requests to modify the routing profile for a service provider.
 *         The response is either SuccessResponse or ErrorResponse.
 */
class ServiceProviderRoutingProfileModifyRequest extends ComplexType implements ComplexInterface
{
    public    $name              = 'ServiceProviderRoutingProfileModifyRequest';
    protected $serviceProviderId = null;
    protected $routingProfile    = null;

    public function __construct(
         $serviceProviderId,
         $routingProfile = null
    ) {
        $this->setServiceProviderId($serviceProviderId);
        $this->setRoutingProfile($routingProfile);
    }

    /**
     * @return 
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
        if (!$serviceProviderId) return $this;
        $this->serviceProviderId = ($serviceProviderId InstanceOf ServiceProviderId)
             ? $serviceProviderId
             : new ServiceProviderId($serviceProviderId);
        $this->serviceProviderId->setName('serviceProviderId');
        return $this;
    }

    /**
     * 
     * @return ServiceProviderId
     */
    public function getServiceProviderId()
    {
        return $this->serviceProviderId->getValue();
    }

    /**
     * 
     */
    public function setRoutingProfile($routingProfile = null)
    {
        if (!$routingProfile) return $this;
        $this->routingProfile = ($routingProfile InstanceOf RoutingProfile)
             ? $routingProfile
             : new RoutingProfile($routingProfile);
        $this->routingProfile->setName('routingProfile');
        return $this;
    }

    /**
     * 
     * @return RoutingProfile
     */
    public function getRoutingProfile()
    {
        return $this->routingProfile->getValue();
    }
}
