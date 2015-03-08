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


/**
     * Assign a list of Network Classes of Service to a service provider.
 *         The Element defaultNetworkClassOfService is required only for the first assignment, 
 *         for subsequent assignments it is optional.
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class ServiceProviderNetworkClassOfServiceAssignListRequest extends ComplexType implements ComplexInterface
{
    public    $name                         = __CLASS__;
    protected $serviceProviderId            = null;
    protected $networkClassOfService        = null;
    protected $defaultNetworkClassOfService = null;

    public function __construct(
         $serviceProviderId,
         $networkClassOfService = null,
         $defaultNetworkClassOfService = null
    ) {
        $this->setServiceProviderId($serviceProviderId);
        $this->setNetworkClassOfService($networkClassOfService);
        $this->setDefaultNetworkClassOfService($defaultNetworkClassOfService);
    }

    /**
     * Service Provider Id uniquely identifies a service provider.
     *         NOTE: The service provider id has a maximum length of 30 bytes, not 30 characters.
     */
    public function setServiceProviderId($serviceProviderId = null)
    {
        $this->serviceProviderId = ($serviceProviderId InstanceOf ServiceProviderId)
             ? $serviceProviderId
             : new ServiceProviderId($serviceProviderId);
    }

    /**
     * Service Provider Id uniquely identifies a service provider.
     *         NOTE: The service provider id has a maximum length of 30 bytes, not 30 characters.
     */
    public function getServiceProviderId()
    {
        return (!$this->serviceProviderId) ?: $this->serviceProviderId->getValue();
    }

    /**
     * Network Class of Service name.
     */
    public function setNetworkClassOfService($networkClassOfService = null)
    {
        $this->networkClassOfService = ($networkClassOfService InstanceOf NetworkClassOfServiceName)
             ? $networkClassOfService
             : new NetworkClassOfServiceName($networkClassOfService);
    }

    /**
     * Network Class of Service name.
     */
    public function getNetworkClassOfService()
    {
        return (!$this->networkClassOfService) ?: $this->networkClassOfService->getValue();
    }

    /**
     * Network Class of Service name.
     */
    public function setDefaultNetworkClassOfService($defaultNetworkClassOfService = null)
    {
        $this->defaultNetworkClassOfService = ($defaultNetworkClassOfService InstanceOf NetworkClassOfServiceName)
             ? $defaultNetworkClassOfService
             : new NetworkClassOfServiceName($defaultNetworkClassOfService);
    }

    /**
     * Network Class of Service name.
     */
    public function getDefaultNetworkClassOfService()
    {
        return (!$this->defaultNetworkClassOfService) ?: $this->defaultNetworkClassOfService->getValue();
    }
}
