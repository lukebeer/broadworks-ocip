<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceInCallServiceActivation; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\InCallServiceActivationDigits;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ServiceProviderId;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Modifies the service provider's DTMF based in-call service activation trigger attributes.The response is either a SuccessResponse or an ErrorResponse.
 */
class ServiceProviderInCallServiceActivationModifyRequest17 extends ComplexType implements ComplexInterface
{
    public    $elementName = 'ServiceProviderInCallServiceActivationModifyRequest17';
    protected $serviceProviderId;
    protected $flashActivationDigits;
    protected $callTransferActivationDigits;

    public function __construct(
         $serviceProviderId = '',
         $flashActivationDigits = null,
         $callTransferActivationDigits = null
    ) {
        $this->setServiceProviderId($serviceProviderId);
        $this->setFlashActivationDigits($flashActivationDigits);
        $this->setCallTransferActivationDigits($callTransferActivationDigits);
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
    public function setFlashActivationDigits($flashActivationDigits = null)
    {
        $this->flashActivationDigits = ($flashActivationDigits InstanceOf InCallServiceActivationDigits)
             ? $flashActivationDigits
             : new InCallServiceActivationDigits($flashActivationDigits);
        $this->flashActivationDigits->setElementName('flashActivationDigits');
        return $this;
    }

    /**
     * 
     * @return InCallServiceActivationDigits $flashActivationDigits
     */
    public function getFlashActivationDigits()
    {
        return ($this->flashActivationDigits)
            ? $this->flashActivationDigits->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setCallTransferActivationDigits($callTransferActivationDigits = null)
    {
        $this->callTransferActivationDigits = ($callTransferActivationDigits InstanceOf InCallServiceActivationDigits)
             ? $callTransferActivationDigits
             : new InCallServiceActivationDigits($callTransferActivationDigits);
        $this->callTransferActivationDigits->setElementName('callTransferActivationDigits');
        return $this;
    }

    /**
     * 
     * @return InCallServiceActivationDigits $callTransferActivationDigits
     */
    public function getCallTransferActivationDigits()
    {
        return ($this->callTransferActivationDigits)
            ? $this->callTransferActivationDigits->getElementValue()
            : null;
    }
}
