<?php
/**
 * This file is part of http://github.com/LukeBeer/BroadworksOCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceSimultaneousRingFamily; 

use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\SimultaneousRingNumber;
use BroadworksOCIP\Builder\Types\PrimitiveType;
use BroadworksOCIP\Builder\Types\TableType;
use BroadworksOCIP\Builder\Types\ComplexInterface;
use BroadworksOCIP\Builder\Types\ComplexType;
use BroadworksOCIP\Response\ResponseOutput;
use BroadworksOCIP\Client\Client;


/**
 * Response to the UserSimultaneousRingFamilyGetRequest17.
 *         Contains a criteria table wich column heading: "Is Active", "Criteria Name", "Time Schedule", "Holiday Schedule", "Calls From" and "Blacklisted".
 */
class UserSimultaneousRingFamilyGetResponse17 extends ComplexType implements ComplexInterface
{
    public    $elementName = 'UserSimultaneousRingFamilyGetResponse17';
    protected $isActive;
    protected $doNotRingIfOnCall;
    protected $simultaneousRingNumber;
    protected $criteriaTable;

    /**
     * @return \BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceSimultaneousRingFamily\UserSimultaneousRingFamilyGetResponse17 $response
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
        $this->isActive = new PrimitiveType($isActive);
        $this->isActive->setElementName('isActive');
        return $this;
    }

    /**
     * 
     * @return boolean $isActive
     */
    public function getIsActive()
    {
        return ($this->isActive)
            ? $this->isActive->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setDoNotRingIfOnCall($doNotRingIfOnCall = null)
    {
        $this->doNotRingIfOnCall = new PrimitiveType($doNotRingIfOnCall);
        $this->doNotRingIfOnCall->setElementName('doNotRingIfOnCall');
        return $this;
    }

    /**
     * 
     * @return boolean $doNotRingIfOnCall
     */
    public function getDoNotRingIfOnCall()
    {
        return ($this->doNotRingIfOnCall)
            ? $this->doNotRingIfOnCall->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setSimultaneousRingNumber(SimultaneousRingNumber $simultaneousRingNumber = null)
    {
        $this->simultaneousRingNumber = ($simultaneousRingNumber InstanceOf SimultaneousRingNumber)
             ? $simultaneousRingNumber
             : new SimultaneousRingNumber($simultaneousRingNumber);
        $this->simultaneousRingNumber->setElementName('simultaneousRingNumber');
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
        $this->criteriaTable = $criteriaTable;
        $this->criteriaTable->setElementName('criteriaTable');
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
