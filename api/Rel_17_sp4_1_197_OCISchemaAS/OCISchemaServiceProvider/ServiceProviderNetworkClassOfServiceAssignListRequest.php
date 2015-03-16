<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceProvider; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\NetworkClassOfServiceName;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ServiceProviderId;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Assign a list of Network Classes of Service to a service provider.
 *         The Element defaultNetworkClassOfService is required only for the first assignment, 
 *         for subsequent assignments it is optional.
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class ServiceProviderNetworkClassOfServiceAssignListRequest extends ComplexType implements ComplexInterface
{
    public    $name = 'ServiceProviderNetworkClassOfServiceAssignListRequest';
    protected $serviceProviderId;
    protected $networkClassOfService;
    protected $defaultNetworkClassOfService;

    public function __construct(
         $serviceProviderId = '',
         $networkClassOfService = null,
         $defaultNetworkClassOfService = null
    ) {
        $this->setServiceProviderId($serviceProviderId);
        $this->setNetworkClassOfService($networkClassOfService);
        $this->setDefaultNetworkClassOfService($defaultNetworkClassOfService);
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
        $this->serviceProviderId->setName('serviceProviderId');
        return $this;
    }

    /**
     * 
     * @return ServiceProviderId $serviceProviderId
     */
    public function getServiceProviderId()
    {
        return ($this->serviceProviderId) ? $this->serviceProviderId->getValue() : null;
    }

    /**
     * 
     */
    public function setNetworkClassOfService($networkClassOfService = null)
    {
        $this->networkClassOfService = ($networkClassOfService InstanceOf NetworkClassOfServiceName)
             ? $networkClassOfService
             : new NetworkClassOfServiceName($networkClassOfService);
        $this->networkClassOfService->setName('networkClassOfService');
        return $this;
    }

    /**
     * 
     * @return NetworkClassOfServiceName $networkClassOfService
     */
    public function getNetworkClassOfService()
    {
        return ($this->networkClassOfService) ? $this->networkClassOfService->getValue() : null;
    }

    /**
     * 
     */
    public function setDefaultNetworkClassOfService($defaultNetworkClassOfService = null)
    {
        $this->defaultNetworkClassOfService = ($defaultNetworkClassOfService InstanceOf NetworkClassOfServiceName)
             ? $defaultNetworkClassOfService
             : new NetworkClassOfServiceName($defaultNetworkClassOfService);
        $this->defaultNetworkClassOfService->setName('defaultNetworkClassOfService');
        return $this;
    }

    /**
     * 
     * @return NetworkClassOfServiceName $defaultNetworkClassOfService
     */
    public function getDefaultNetworkClassOfService()
    {
        return ($this->defaultNetworkClassOfService) ? $this->defaultNetworkClassOfService->getValue() : null;
    }
}
