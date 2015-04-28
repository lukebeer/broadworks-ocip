<?php
/**
 * This file is part of http://github.com/LukeBeer/BroadworksOCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceTrunkGroup; 

use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\UnboundedNonNegativeInt;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ServiceProviderId;
use BroadworksOCIP\Builder\Types\ComplexInterface;
use BroadworksOCIP\Builder\Types\ComplexType;
use BroadworksOCIP\Response\ResponseOutput;
use BroadworksOCIP\Client\Client;


/**
 * Modify the maximum and bursting maximum permissible active Trunk Group calls for the service provider.
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class ServiceProviderTrunkGroupModifyRequest extends ComplexType implements ComplexInterface
{
    public    $elementName = 'ServiceProviderTrunkGroupModifyRequest';
    protected $serviceProviderId;
    protected $maxActiveCalls;
    protected $burstingMaxActiveCalls;

    public function __construct(
         $serviceProviderId = '',
         $maxActiveCalls = null,
         $burstingMaxActiveCalls = null
    ) {
        $this->setServiceProviderId($serviceProviderId);
        $this->setMaxActiveCalls($maxActiveCalls);
        $this->setBurstingMaxActiveCalls($burstingMaxActiveCalls);
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
    public function setMaxActiveCalls(UnboundedNonNegativeInt $maxActiveCalls = null)
    {
        $this->maxActiveCalls = ($maxActiveCalls InstanceOf UnboundedNonNegativeInt)
             ? $maxActiveCalls
             : new UnboundedNonNegativeInt($maxActiveCalls);
        $this->maxActiveCalls->setElementName('maxActiveCalls');
        return $this;
    }

    /**
     * 
     * @return UnboundedNonNegativeInt $maxActiveCalls
     */
    public function getMaxActiveCalls()
    {
        return $this->maxActiveCalls;
    }

    /**
     * 
     */
    public function setBurstingMaxActiveCalls(UnboundedNonNegativeInt $burstingMaxActiveCalls = null)
    {
        $this->burstingMaxActiveCalls = ($burstingMaxActiveCalls InstanceOf UnboundedNonNegativeInt)
             ? $burstingMaxActiveCalls
             : new UnboundedNonNegativeInt($burstingMaxActiveCalls);
        $this->burstingMaxActiveCalls->setElementName('burstingMaxActiveCalls');
        return $this;
    }

    /**
     * 
     * @return UnboundedNonNegativeInt $burstingMaxActiveCalls
     */
    public function getBurstingMaxActiveCalls()
    {
        return $this->burstingMaxActiveCalls;
    }
}
