<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated16; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\SimultaneousRingSelection;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
     * Response to the UserSimultaneousRingPersonalGetRequest14sp4.
 *         Contains a table with column headings: "Phone Number", "Answer Confirmation Required".
 */
class UserSimultaneousRingPersonalGetResponse14sp4 extends ComplexType implements ComplexInterface
{
    const     RESPONSE_TYPE     = 'Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated16\UserSimultaneousRingPersonalGetResponse14sp4';
    public    $name             = __CLASS__;
    protected $isActive         = null;
    protected $incomingCalls    = null;
    protected $phoneNumberTable = null;


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
     * 
     */
    public function setPhoneNumberTable(core:OCITable $phoneNumberTable = null)
    {
        $this->phoneNumberTable = core:OCITable $phoneNumberTable;
    }

    /**
     * 
     */
    public function getPhoneNumberTable()
    {
        return (!$this->phoneNumberTable) ?: $this->phoneNumberTable->getValue();
    }
}
