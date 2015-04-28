<?php
/**
 * This file is part of http://github.com/LukeBeer/BroadworksOCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceInstantConferencing; 

use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\UnboundedNonNegativeInt;
use BroadworksOCIP\Builder\Types\ComplexInterface;
use BroadworksOCIP\Builder\Types\ComplexType;
use BroadworksOCIP\Response\ResponseOutput;
use BroadworksOCIP\Client\Client;


/**
 * Response to ServiceProviderInstantConferencingGetRequest.
 */
class ServiceProviderInstantConferencingGetResponse extends ComplexType implements ComplexInterface
{
    public    $elementName = 'ServiceProviderInstantConferencingGetResponse';
    protected $portsAllocatedToServiceProvider;

    /**
     * @return \BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceInstantConferencing\ServiceProviderInstantConferencingGetResponse $response
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
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
