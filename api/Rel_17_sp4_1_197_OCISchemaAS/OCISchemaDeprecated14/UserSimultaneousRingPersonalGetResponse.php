<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated14; 

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
    public    $name                = __CLASS__;
    protected $isActive            = null;
    protected $incomingCalls       = null;
    protected $simRingPhoneNumber  = null;


    public function setIsActive(xs:boolean $isActive = null)
    {
    }

    public function getIsActive()
    {
        return (!$this->isActive) ?: $this->isActive->value();
    }

    public function setIncomingCalls($incomingCalls = null)
    {
        $this->incomingCalls = ($incomingCalls InstanceOf SimultaneousRingSelection)
             ? $incomingCalls
             : new SimultaneousRingSelection($incomingCalls);
    }

    public function getIncomingCalls()
    {
        return (!$this->incomingCalls) ?: $this->incomingCalls->value();
    }

    public function setSimRingPhoneNumber($simRingPhoneNumber = null)
    {
        $this->simRingPhoneNumber = ($simRingPhoneNumber InstanceOf OutgoingDNorSIPURI)
             ? $simRingPhoneNumber
             : new OutgoingDNorSIPURI($simRingPhoneNumber);
    }

    public function getSimRingPhoneNumber()
    {
        return (!$this->simRingPhoneNumber) ?: $this->simRingPhoneNumber->value();
    }
}
