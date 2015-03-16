<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCallForwardingSelective; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\OutgoingDNorSIPURI;
use Broadworks_OCIP\core\Builder\Types\PrimitiveType;
use Broadworks_OCIP\core\Builder\Types\TableType;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Response to the UserCallForwardingSelectiveGetRequest16. The criteria table's column headings are:
 *         "Is Active", "Criteria Name", "Time Schedule", "Calls From", "Forward To", "Blacklisted", "Holiday Schedule".
 */
class UserCallForwardingSelectiveGetResponse16 extends ComplexType implements ComplexInterface
{
    public    $name = 'UserCallForwardingSelectiveGetResponse16';
    protected $isActive;
    protected $defaultForwardToPhoneNumber;
    protected $playRingReminder;
    protected $criteriaTable;

    /**
     * @return \Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCallForwardingSelective\UserCallForwardingSelectiveGetResponse16 $response
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
        $this->isActive->setName('isActive');
        return $this;
    }

    /**
     * 
     * @return boolean $isActive
     */
    public function getIsActive()
    {
        return ($this->isActive) ? $this->isActive->getValue() : null;
    }

    /**
     * 
     */
    public function setDefaultForwardToPhoneNumber($defaultForwardToPhoneNumber = null)
    {
        $this->defaultForwardToPhoneNumber = ($defaultForwardToPhoneNumber InstanceOf OutgoingDNorSIPURI)
             ? $defaultForwardToPhoneNumber
             : new OutgoingDNorSIPURI($defaultForwardToPhoneNumber);
        $this->defaultForwardToPhoneNumber->setName('defaultForwardToPhoneNumber');
        return $this;
    }

    /**
     * 
     * @return OutgoingDNorSIPURI $defaultForwardToPhoneNumber
     */
    public function getDefaultForwardToPhoneNumber()
    {
        return ($this->defaultForwardToPhoneNumber) ? $this->defaultForwardToPhoneNumber->getValue() : null;
    }

    /**
     * 
     */
    public function setPlayRingReminder($playRingReminder = null)
    {
        $this->playRingReminder = new PrimitiveType($playRingReminder);
        $this->playRingReminder->setName('playRingReminder');
        return $this;
    }

    /**
     * 
     * @return boolean $playRingReminder
     */
    public function getPlayRingReminder()
    {
        return ($this->playRingReminder) ? $this->playRingReminder->getValue() : null;
    }

    /**
     * 
     */
    public function setCriteriaTable(TableType $criteriaTable = null)
    {
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
