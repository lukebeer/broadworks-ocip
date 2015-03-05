<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceInCallServiceActivation; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ServiceProviderId;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\InCallServiceActivationDigits;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Modifies the service provider's DTMF based in-call service activation trigger attributes.The response is either a SuccessResponse or an ErrorResponse.
 */
class ServiceProviderInCallServiceActivationModifyRequest17 extends ComplexType implements ComplexInterface
{
    public    $name = __CLASS__;

    public function __construct(
             $serviceProviderId,
             $flashActivationDigits=null,
             $callTransferActivationDigits=null
    ) {
        $this->serviceProviderId            = new ServiceProviderId($serviceProviderId);
        $this->flashActivationDigits        = new InCallServiceActivationDigits($flashActivationDigits);
        $this->callTransferActivationDigits = new InCallServiceActivationDigits($callTransferActivationDigits);
        $this->args                         = func_get_args();
    }

    public function setServiceProviderId($serviceProviderId)
    {
        $serviceProviderId and $this->serviceProviderId = new ServiceProviderId($serviceProviderId);
    }

    public function getServiceProviderId()
    {
        return (!$this->serviceProviderId) ?: $this->serviceProviderId->value();
    }

    public function setFlashActivationDigits($flashActivationDigits)
    {
        $flashActivationDigits and $this->flashActivationDigits = new InCallServiceActivationDigits($flashActivationDigits);
    }

    public function getFlashActivationDigits()
    {
        return (!$this->flashActivationDigits) ?: $this->flashActivationDigits->value();
    }

    public function setCallTransferActivationDigits($callTransferActivationDigits)
    {
        $callTransferActivationDigits and $this->callTransferActivationDigits = new InCallServiceActivationDigits($callTransferActivationDigits);
    }

    public function getCallTransferActivationDigits()
    {
        return (!$this->callTransferActivationDigits) ?: $this->callTransferActivationDigits->value();
    }
}
