<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceSimultaneousRingPersonal; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\SimultaneousRingNumber;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceSimultaneousRingPersonal\UserSimultaneousRingPersonalGetResponse17;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Response to the UserSimultaneousRingPersonalGetRequest17.
 *         Contains a criteria table with column heading: "Is Active", "Criteria Name", "Time Schedule", "Holiday Schedule", "Calls From" and "Blacklisted".
 */
class UserSimultaneousRingPersonalGetResponse17 extends ComplexType implements ComplexInterface
{
    public    $name                   = __CLASS__;
    protected $isActive               = null;
    protected $doNotRingIfOnCall      = null;
    protected $simultaneousRingNumber = null;
    protected $criteriaTable          = null;

    /**
     * @return UserSimultaneousRingPersonalGetResponse17
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

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
        return (!$this->isActive) ?: $this->isActive;
    }

    /**
     * 
     */
    public function setDoNotRingIfOnCall($doNotRingIfOnCall = null)
    {
        $this->doNotRingIfOnCall = (boolean) $doNotRingIfOnCall;
    }

    /**
     * 
     */
    public function getDoNotRingIfOnCall()
    {
        return (!$this->doNotRingIfOnCall) ?: $this->doNotRingIfOnCall;
    }

    /**
     * Simultaneous Ring number entry.
     */
    public function setSimultaneousRingNumber(SimultaneousRingNumber $simultaneousRingNumber = null)
    {
        $this->simultaneousRingNumber =  $simultaneousRingNumber;
    }

    /**
     * Simultaneous Ring number entry.
     */
    public function getSimultaneousRingNumber()
    {
        return (!$this->simultaneousRingNumber) ?: $this->simultaneousRingNumber->getValue();
    }

    /**
     * 
     */
    public function setCriteriaTable(core:OCITable $criteriaTable = null)
    {
        $this->criteriaTable =  $criteriaTable;
    }

    /**
     * 
     */
    public function getCriteriaTable()
    {
        return (!$this->criteriaTable) ?: $this->criteriaTable->getValue();
    }
}
