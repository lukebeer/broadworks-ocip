<?php
/**
 * This file is part of http://github.com/LukeBeer/BroadworksOCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceInstantConferencing; 

use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\UnboundedNonNegativeInt;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ServiceProviderId;
use BroadworksOCIP\Builder\Types\ComplexInterface;
use BroadworksOCIP\Builder\Types\ComplexType;
use BroadworksOCIP\Response\ResponseOutput;
use BroadworksOCIP\Client\Client;


/**
 * Modify the number of conference ports configured for a service provider.
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class ServiceProviderInstantConferencingModifyRequest extends ComplexType implements ComplexInterface
{
    public    $elementName = 'ServiceProviderInstantConferencingModifyRequest';
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
    public function setPortsAllocatedToServiceProvider(UnboundedNonNegativeInt $portsAllocatedToServiceProvider = null)
    {
        $this->portsAllocatedToServiceProvider = ($portsAllocatedToServiceProvider InstanceOf UnboundedNonNegativeInt)
             ? $portsAllocatedToServiceProvider
             : new UnboundedNonNegativeInt($portsAllocatedToServiceProvider);
        $this->portsAllocatedToServiceProvider->setElementName('portsAllocatedToServiceProvider');
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
