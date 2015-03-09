<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceInCallServiceActivation; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\InCallServiceActivationDigits;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ServiceProviderId;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceInCallServiceActivation\ServiceProviderInCallServiceActivationModifyResponse17;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Modifies the service provider's DTMF based in-call service activation trigger attributes.The response is either a SuccessResponse or an ErrorResponse.
 */
class ServiceProviderInCallServiceActivationModifyRequest17 extends ComplexType implements ComplexInterface
{
    public    $name                         = __CLASS__;
    protected $serviceProviderId            = null;
    protected $flashActivationDigits        = null;
    protected $callTransferActivationDigits = null;

    public function __construct(
         $serviceProviderId,
         $flashActivationDigits = null,
         $callTransferActivationDigits = null
    ) {
        $this->setServiceProviderId($serviceProviderId);
        $this->setFlashActivationDigits($flashActivationDigits);
        $this->setCallTransferActivationDigits($callTransferActivationDigits);
    }

    /**
     * @return ServiceProviderInCallServiceActivationModifyResponse17
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
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
     * In Call Service Activation DigitMap.
     */
    public function setFlashActivationDigits($flashActivationDigits = null)
    {
        $this->flashActivationDigits = ($flashActivationDigits InstanceOf InCallServiceActivationDigits)
             ? $flashActivationDigits
             : new InCallServiceActivationDigits($flashActivationDigits);
    }

    /**
     * In Call Service Activation DigitMap.
     */
    public function getFlashActivationDigits()
    {
        return (!$this->flashActivationDigits) ?: $this->flashActivationDigits->getValue();
    }

    /**
     * In Call Service Activation DigitMap.
     */
    public function setCallTransferActivationDigits($callTransferActivationDigits = null)
    {
        $this->callTransferActivationDigits = ($callTransferActivationDigits InstanceOf InCallServiceActivationDigits)
             ? $callTransferActivationDigits
             : new InCallServiceActivationDigits($callTransferActivationDigits);
    }

    /**
     * In Call Service Activation DigitMap.
     */
    public function getCallTransferActivationDigits()
    {
        return (!$this->callTransferActivationDigits) ?: $this->callTransferActivationDigits->getValue();
    }
}
