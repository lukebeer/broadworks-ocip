<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated14; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\xs:boolean;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\SimultaneousRingSelection;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\OutgoingDNorSIPURI;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Response to the UserSimultaneousRingPersonalGetRequest.
 *         Replaced By: UserSimultaneousRingPersonalGetResponse14sp4
 */
class UserSimultaneousRingPersonalGetResponse extends ComplexType implements ComplexInterface
{
    public    $name = __CLASS__;

    public function __construct(
             $isActive,
             $incomingCalls,
             $simRingPhoneNumber=null
    ) {
        $this->isActive           = $isActive;
        $this->incomingCalls      = new SimultaneousRingSelection($incomingCalls);
        $this->simRingPhoneNumber = new OutgoingDNorSIPURI($simRingPhoneNumber);
        $this->args               = func_get_args();
    }

    public function setIsActive($isActive)
    {
        $isActive and $this->isActive = new xs:boolean($isActive);
    }

    public function getIsActive()
    {
        return (!$this->isActive) ?: $this->isActive->value();
    }

    public function setIncomingCalls($incomingCalls)
    {
        $incomingCalls and $this->incomingCalls = new SimultaneousRingSelection($incomingCalls);
    }

    public function getIncomingCalls()
    {
        return (!$this->incomingCalls) ?: $this->incomingCalls->value();
    }

    public function setSimRingPhoneNumber($simRingPhoneNumber)
    {
        $simRingPhoneNumber and $this->simRingPhoneNumber = new OutgoingDNorSIPURI($simRingPhoneNumber);
    }

    public function getSimRingPhoneNumber()
    {
        return (!$this->simRingPhoneNumber) ?: $this->simRingPhoneNumber->value();
    }
}
