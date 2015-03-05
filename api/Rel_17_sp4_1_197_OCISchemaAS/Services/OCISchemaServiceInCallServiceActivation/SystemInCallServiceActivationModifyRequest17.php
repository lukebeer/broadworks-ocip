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
 * Modifies the system's DTMF based in-call service activation trigger  attributes.The response is either a SuccessResponse or an ErrorResponse.
 */
class SystemInCallServiceActivationModifyRequest17 extends ComplexType implements ComplexInterface
{
    public    $name = __CLASS__;

    public function __construct(
             $defaultFlashActivationDigits=null,
             $defaultCallTransferActivationDigits=null
    ) {
        $this->defaultFlashActivationDigits        = new InCallServiceActivationDigits($defaultFlashActivationDigits);
        $this->defaultCallTransferActivationDigits = new InCallServiceActivationDigits($defaultCallTransferActivationDigits);
        $this->args                                = func_get_args();
    }

    public function setDefaultFlashActivationDigits($defaultFlashActivationDigits)
    {
        $defaultFlashActivationDigits and $this->defaultFlashActivationDigits = new InCallServiceActivationDigits($defaultFlashActivationDigits);
    }

    public function getDefaultFlashActivationDigits()
    {
        return (!$this->defaultFlashActivationDigits) ?: $this->defaultFlashActivationDigits->value();
    }

    public function setDefaultCallTransferActivationDigits($defaultCallTransferActivationDigits)
    {
        $defaultCallTransferActivationDigits and $this->defaultCallTransferActivationDigits = new InCallServiceActivationDigits($defaultCallTransferActivationDigits);
    }

    public function getDefaultCallTransferActivationDigits()
    {
        return (!$this->defaultCallTransferActivationDigits) ?: $this->defaultCallTransferActivationDigits->value();
    }
}
