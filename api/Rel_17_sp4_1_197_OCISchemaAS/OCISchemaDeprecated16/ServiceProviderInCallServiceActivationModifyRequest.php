<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated16; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\InCallServiceActivationDigits;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ServiceProviderId;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Modifies the service provider's DTMF based in-call service activation trigger attributes.The response is either a SuccessResponse or an ErrorResponse.
 * 
 *           Replaced by: ServiceProviderInCallServiceActivationModifyRequest17
 */
class ServiceProviderInCallServiceActivationModifyRequest extends ComplexType implements ComplexInterface
{
    public    $name              = 'ServiceProviderInCallServiceActivationModifyRequest';
    protected $serviceProviderId = null;
    protected $activationDigits  = null;

    public function __construct(
         $serviceProviderId,
         $activationDigits = null
    ) {
        $this->setServiceProviderId($serviceProviderId);
        $this->setActivationDigits($activationDigits);
    }

    /**
     * @return 
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
        if (!$serviceProviderId) return $this;
        $this->serviceProviderId = ($serviceProviderId InstanceOf ServiceProviderId)
             ? $serviceProviderId
             : new ServiceProviderId($serviceProviderId);
        $this->serviceProviderId->setName('serviceProviderId');
        return $this;
    }

    /**
     * 
     * @return ServiceProviderId
     */
    public function getServiceProviderId()
    {
        return $this->serviceProviderId->getValue();
    }

    /**
     * 
     */
    public function setActivationDigits($activationDigits = null)
    {
        if (!$activationDigits) return $this;
        $this->activationDigits = ($activationDigits InstanceOf InCallServiceActivationDigits)
             ? $activationDigits
             : new InCallServiceActivationDigits($activationDigits);
        $this->activationDigits->setName('activationDigits');
        return $this;
    }

    /**
     * 
     * @return InCallServiceActivationDigits
     */
    public function getActivationDigits()
    {
        return $this->activationDigits->getValue();
    }
}
