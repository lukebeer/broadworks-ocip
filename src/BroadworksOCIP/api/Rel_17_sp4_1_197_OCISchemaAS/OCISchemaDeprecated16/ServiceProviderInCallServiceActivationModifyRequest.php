<?php
/**
 * This file is part of http://github.com/LukeBeer/BroadworksOCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated16; 

use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\InCallServiceActivationDigits;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ServiceProviderId;
use BroadworksOCIP\Builder\Types\ComplexInterface;
use BroadworksOCIP\Builder\Types\ComplexType;
use BroadworksOCIP\Response\ResponseOutput;
use BroadworksOCIP\Client\Client;


/**
 * Modifies the service provider's DTMF based in-call service activation trigger attributes.The response is either a SuccessResponse or an ErrorResponse.
 * 
 *           Replaced by: ServiceProviderInCallServiceActivationModifyRequest17
 */
class ServiceProviderInCallServiceActivationModifyRequest extends ComplexType implements ComplexInterface
{
    public    $elementName = 'ServiceProviderInCallServiceActivationModifyRequest';
    protected $serviceProviderId;
    protected $activationDigits;

    public function __construct(
         $serviceProviderId = '',
         $activationDigits = null
    ) {
        $this->setServiceProviderId($serviceProviderId);
        $this->setActivationDigits($activationDigits);
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
    public function setActivationDigits($activationDigits = null)
    {
        $this->activationDigits = ($activationDigits InstanceOf InCallServiceActivationDigits)
             ? $activationDigits
             : new InCallServiceActivationDigits($activationDigits);
        $this->activationDigits->setElementName('activationDigits');
        return $this;
    }

    /**
     * 
     * @return InCallServiceActivationDigits $activationDigits
     */
    public function getActivationDigits()
    {
        return ($this->activationDigits)
            ? $this->activationDigits->getElementValue()
            : null;
    }
}
