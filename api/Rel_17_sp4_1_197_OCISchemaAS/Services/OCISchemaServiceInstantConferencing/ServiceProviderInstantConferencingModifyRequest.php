<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceInstantConferencing; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\UnboundedNonNegativeInt;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ServiceProviderId;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Modify the number of conference ports configured for a service provider.
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class ServiceProviderInstantConferencingModifyRequest extends ComplexType implements ComplexInterface
{
    public    $name = 'ServiceProviderInstantConferencingModifyRequest';
    protected $serviceProviderId;
    protected $portsAllocatedToServiceProvider;

    public function __construct(
         $serviceProviderId = '',
         $portsAllocatedToServiceProvider = null
    ) {
        $this->setServiceProviderId($serviceProviderId);
        $this->setPortsAllocatedToServiceProvider($portsAllocatedToServiceProvider);
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
    public function setPortsAllocatedToServiceProvider(UnboundedNonNegativeInt $portsAllocatedToServiceProvider = null)
    {
        $this->portsAllocatedToServiceProvider = ($portsAllocatedToServiceProvider InstanceOf UnboundedNonNegativeInt)
             ? $portsAllocatedToServiceProvider
             : new UnboundedNonNegativeInt($portsAllocatedToServiceProvider);
        $this->portsAllocatedToServiceProvider->setName('portsAllocatedToServiceProvider');
        return $this;
    }

    /**
     * 
     * @return UnboundedNonNegativeInt $portsAllocatedToServiceProvider
     */
    public function getPortsAllocatedToServiceProvider()
    {
        return $this->portsAllocatedToServiceProvider;
    }
}
