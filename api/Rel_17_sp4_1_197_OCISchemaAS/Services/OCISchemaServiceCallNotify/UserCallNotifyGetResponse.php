<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceCallNotify; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\EmailAddress;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
     * Response to the UserCallNotifyGetRequest. The criteria table's column headings are: "Is Active", 
 *         "Criteria Name", "Time Schedule", "Calls From", "Blacklisted" and "Holiday Schedule".
 */
class UserCallNotifyGetResponse extends ComplexType implements ComplexInterface
{
    const     RESPONSE_TYPE           = 'Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceCallNotify\UserCallNotifyGetResponse';
    public    $name                   = __CLASS__;
    protected $callNotifyEmailAddress = null;
    protected $criteriaTable          = null;


    /**
     * Email Address
     */
    public function setCallNotifyEmailAddress($callNotifyEmailAddress = null)
    {
        $this->callNotifyEmailAddress = ($callNotifyEmailAddress InstanceOf EmailAddress)
             ? $callNotifyEmailAddress
             : new EmailAddress($callNotifyEmailAddress);
    }

    /**
     * Email Address
     */
    public function getCallNotifyEmailAddress()
    {
        return (!$this->callNotifyEmailAddress) ?: $this->callNotifyEmailAddress->getValue();
    }

    /**
     * 
     */
    public function setCriteriaTable(core:OCITable $criteriaTable = null)
    {
        $this->criteriaTable = core:OCITable $criteriaTable;
    }

    /**
     * 
     */
    public function getCriteriaTable()
    {
        return (!$this->criteriaTable) ?: $this->criteriaTable->getValue();
    }
}
