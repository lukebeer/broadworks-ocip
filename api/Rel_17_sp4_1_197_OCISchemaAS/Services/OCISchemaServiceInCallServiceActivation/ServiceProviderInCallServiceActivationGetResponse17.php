<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceInCallServiceActivation; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\InCallServiceActivationDigits;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Response to ServiceProviderInCallServiceActivationGetRequest17.
 */
class ServiceProviderInCallServiceActivationGetResponse17 extends ComplexType implements ComplexInterface
{
    public    $name = __CLASS__;

    public function __construct(
             $flashActivationDigits,
             $callTransferActivationDigits
    ) {
        $this->flashActivationDigits        = new InCallServiceActivationDigits($flashActivationDigits);
        $this->callTransferActivationDigits = new InCallServiceActivationDigits($callTransferActivationDigits);
        $this->args                         = func_get_args();
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
