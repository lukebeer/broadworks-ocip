<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceSimultaneousRingPersonal; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\SimultaneousRingNumber;
use Broadworks_OCIP\core\Builder\Types\PrimitiveType;
use Broadworks_OCIP\core\Builder\Types\TableType;
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
    public    $name                   = 'UserSimultaneousRingPersonalGetResponse17';
    protected $isActive               = null;
    protected $doNotRingIfOnCall      = null;
    protected $simultaneousRingNumber = null;
    protected $criteriaTable          = null;

    /**
     * @return \Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceSimultaneousRingPersonal\UserSimultaneousRingPersonalGetResponse17 $response
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
        if (!$isActive) return $this;
        $this->isActive = new PrimitiveType($isActive);
        $this->isActive->setName('isActive');
        return $this;
    }

    /**
     * 
     * @return boolean $isActive
     */
    public function getIsActive()
    {
        return $this->isActive->getValue();
    }

    /**
     * 
     */
    public function setDoNotRingIfOnCall($doNotRingIfOnCall = null)
    {
        if (!$doNotRingIfOnCall) return $this;
        $this->doNotRingIfOnCall = new PrimitiveType($doNotRingIfOnCall);
        $this->doNotRingIfOnCall->setName('doNotRingIfOnCall');
        return $this;
    }

    /**
     * 
     * @return boolean $doNotRingIfOnCall
     */
    public function getDoNotRingIfOnCall()
    {
        return $this->doNotRingIfOnCall->getValue();
    }

    /**
     * 
     */
    public function setSimultaneousRingNumber(SimultaneousRingNumber $simultaneousRingNumber = null)
    {
        if (!$simultaneousRingNumber) return $this;
        $this->simultaneousRingNumber = $simultaneousRingNumber;
        $this->simultaneousRingNumber->setName('simultaneousRingNumber');
        return $this;
    }

    /**
     * 
     * @return SimultaneousRingNumber $simultaneousRingNumber
     */
    public function getSimultaneousRingNumber()
    {
        return $this->simultaneousRingNumber;
    }

    /**
     * 
     */
    public function setCriteriaTable(TableType $criteriaTable = null)
    {
        if (!$criteriaTable) return $this;
        $this->criteriaTable = $criteriaTable;
        $this->criteriaTable->setName('criteriaTable');
        return $this;
    }

    /**
     * 
     * @return TableType
     */
    public function getCriteriaTable()
    {
        return $this->criteriaTable;
    }
}
