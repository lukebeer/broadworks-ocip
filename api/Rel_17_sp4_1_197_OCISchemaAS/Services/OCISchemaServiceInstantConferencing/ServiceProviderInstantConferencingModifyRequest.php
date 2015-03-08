<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceInstantConferencing; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\UnboundedNonNegativeInt;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ServiceProviderId;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
     * Modify the number of conference ports configured for a service provider.
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class ServiceProviderInstantConferencingModifyRequest extends ComplexType implements ComplexInterface
{
    public    $name                            = __CLASS__;
    protected $serviceProviderId               = null;
    protected $portsAllocatedToServiceProvider = null;

    public function __construct(
         $serviceProviderId,
         UnboundedNonNegativeInt $portsAllocatedToServiceProvider = null
    ) {
        $this->setServiceProviderId($serviceProviderId);
        $this->setPortsAllocatedToServiceProvider($portsAllocatedToServiceProvider);
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
     * Unbounded Quantity. Can either be unlimited or a non-negative int quantity.
     */
    public function setPortsAllocatedToServiceProvider(UnboundedNonNegativeInt $portsAllocatedToServiceProvider = null)
    {
        $this->portsAllocatedToServiceProvider = UnboundedNonNegativeInt $portsAllocatedToServiceProvider;
    }

    /**
     * Unbounded Quantity. Can either be unlimited or a non-negative int quantity.
     */
    public function getPortsAllocatedToServiceProvider()
    {
        return (!$this->portsAllocatedToServiceProvider) ?: $this->portsAllocatedToServiceProvider->getValue();
    }
}
