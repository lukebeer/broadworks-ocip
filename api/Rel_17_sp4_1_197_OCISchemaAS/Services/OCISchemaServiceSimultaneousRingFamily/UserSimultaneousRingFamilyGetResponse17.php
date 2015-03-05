<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceSimultaneousRingFamily; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\xs:boolean;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\SimultaneousRingNumber;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\core:OCITable;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Response to the UserSimultaneousRingFamilyGetRequest17.
 *         Contains a criteria table wich column heading: "Is Active", "Criteria Name", "Time Schedule", "Holiday Schedule", "Calls From" and "Blacklisted".
 */
class UserSimultaneousRingFamilyGetResponse17 extends ComplexType implements ComplexInterface
{
    public    $name = __CLASS__;

    public function __construct(
             $isActive,
             $doNotRingIfOnCall,
             SimultaneousRingNumber $simultaneousRingNumber=null,
             $criteriaTable
    ) {
        $this->isActive               = $isActive;
        $this->doNotRingIfOnCall      = $doNotRingIfOnCall;
        $this->simultaneousRingNumber = $simultaneousRingNumber;
        $this->criteriaTable          = $criteriaTable;
        $this->args                   = func_get_args();
    }

    public function setIsActive($isActive)
    {
        $isActive and $this->isActive = new xs:boolean($isActive);
    }

    public function getIsActive()
    {
        return (!$this->isActive) ?: $this->isActive->value();
    }

    public function setDoNotRingIfOnCall($doNotRingIfOnCall)
    {
        $doNotRingIfOnCall and $this->doNotRingIfOnCall = new xs:boolean($doNotRingIfOnCall);
    }

    public function getDoNotRingIfOnCall()
    {
        return (!$this->doNotRingIfOnCall) ?: $this->doNotRingIfOnCall->value();
    }

    public function setSimultaneousRingNumber($simultaneousRingNumber)
    {
        $simultaneousRingNumber and $this->simultaneousRingNumber = new SimultaneousRingNumber($simultaneousRingNumber);
    }

    public function getSimultaneousRingNumber()
    {
        return (!$this->simultaneousRingNumber) ?: $this->simultaneousRingNumber->value();
    }

    public function setCriteriaTable($criteriaTable)
    {
        $criteriaTable and $this->criteriaTable = new core:OCITable($criteriaTable);
    }

    public function getCriteriaTable()
    {
        return (!$this->criteriaTable) ?: $this->criteriaTable->value();
    }
}
