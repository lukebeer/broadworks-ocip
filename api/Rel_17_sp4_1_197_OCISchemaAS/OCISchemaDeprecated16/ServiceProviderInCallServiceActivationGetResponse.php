<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated16; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\InCallServiceActivationDigits;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Response to ServiceProviderInCallServiceActivationGetRequest.
 *           
 *           Replaced by: ServiceProviderInCallServiceActivationGetResponse17
 */
class ServiceProviderInCallServiceActivationGetResponse extends ComplexType implements ComplexInterface
{
    public    $name = __CLASS__;

    public function __construct(
             $activationDigits
    ) {
        $this->activationDigits = new InCallServiceActivationDigits($activationDigits);
        $this->args             = func_get_args();
    }

    public function setActivationDigits($activationDigits)
    {
        $activationDigits and $this->activationDigits = new InCallServiceActivationDigits($activationDigits);
    }

    public function getActivationDigits()
    {
        return (!$this->activationDigits) ?: $this->activationDigits->value();
    }
}
