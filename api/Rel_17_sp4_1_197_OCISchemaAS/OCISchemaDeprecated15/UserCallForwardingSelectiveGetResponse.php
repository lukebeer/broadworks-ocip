<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated15; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\OutgoingDNorSIPURI;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Response to the UserCallForwardingSelectiveGetRequest. The criteria table's column headings are:        
 *          "Is Active", "Criteria Name", "Time Schedule", "Calls From" and "Forward To".
 */
class UserCallForwardingSelectiveGetResponse extends ComplexType implements ComplexInterface
{
    public    $name                         = __CLASS__;
    protected $defaultForwardToPhoneNumber  = null;
    protected $playRingReminder             = null;
    protected $criteriaTable                = null;


    public function setDefaultForwardToPhoneNumber($defaultForwardToPhoneNumber = null)
    {
        $this->defaultForwardToPhoneNumber = ($defaultForwardToPhoneNumber InstanceOf OutgoingDNorSIPURI)
             ? $defaultForwardToPhoneNumber
             : new OutgoingDNorSIPURI($defaultForwardToPhoneNumber);
    }

    public function getDefaultForwardToPhoneNumber()
    {
        return (!$this->defaultForwardToPhoneNumber) ?: $this->defaultForwardToPhoneNumber->value();
    }

    public function setPlayRingReminder(xs:boolean $playRingReminder = null)
    {
    }

    public function getPlayRingReminder()
    {
        return (!$this->playRingReminder) ?: $this->playRingReminder->value();
    }

    public function setCriteriaTable(core:OCITable $criteriaTable = null)
    {
    }

    public function getCriteriaTable()
    {
        return (!$this->criteriaTable) ?: $this->criteriaTable->value();
    }
}
