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
     * Response to the UserSimultaneousRingFamilyGetRequest.
 *         Replaced By: UserSimultaneousRingFamilyGetResponse14sp4
 */
class UserSimultaneousRingFamilyGetResponse extends ComplexType implements ComplexInterface
{
    public    $name               = __CLASS__;
    protected $isActive           = null;
    protected $incomingCalls      = null;
    protected $simRingPhoneNumber = null;


    /**
     * 
     */
    public function setIsActive($isActive = null)
    {
        $this->isActive = (boolean) $isActive;
    }

    /**
     * 
     */
    public function getIsActive()
    {
        return (!$this->isActive) ?: $this->isActive->getValue();
    }

    /**
     * Simultaneous Ring Selection.
     */
    public function setIncomingCalls($incomingCalls = null)
    {
        $this->incomingCalls = ($incomingCalls InstanceOf SimultaneousRingSelection)
             ? $incomingCalls
             : new SimultaneousRingSelection($incomingCalls);
    }

    /**
     * Simultaneous Ring Selection.
     */
    public function getIncomingCalls()
    {
        return (!$this->incomingCalls) ?: $this->incomingCalls->getValue();
    }

    /**
     * Phone Number or SIP URI that can be used to dial.
     *         URI Validation:
     *         - must be of the format string@string where string is at least one valid character and there is one and only one @.
     *         - don't allow sip:
     *         - allow the following characters in the user portions:
     *           alphanumeric   -   _   .   !   ~   *   '   (   )
     *         - allow the following characters in the host portion:
     *           alphanumeric   -   .
     */
    public function setSimRingPhoneNumber($simRingPhoneNumber = null)
    {
        $this->simRingPhoneNumber = ($simRingPhoneNumber InstanceOf OutgoingDNorSIPURI)
             ? $simRingPhoneNumber
             : new OutgoingDNorSIPURI($simRingPhoneNumber);
    }

    /**
     * Phone Number or SIP URI that can be used to dial.
     *         URI Validation:
     *         - must be of the format string@string where string is at least one valid character and there is one and only one @.
     *         - don't allow sip:
     *         - allow the following characters in the user portions:
     *           alphanumeric   -   _   .   !   ~   *   '   (   )
     *         - allow the following characters in the host portion:
     *           alphanumeric   -   .
     */
    public function getSimRingPhoneNumber()
    {
        return (!$this->simRingPhoneNumber) ?: $this->simRingPhoneNumber->getValue();
    }
}
