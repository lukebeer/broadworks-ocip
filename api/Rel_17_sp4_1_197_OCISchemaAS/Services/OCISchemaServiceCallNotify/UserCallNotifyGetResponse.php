<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceCallNotify; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\EmailAddress;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\core:OCITable;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Response to the UserCallNotifyGetRequest. The criteria table's column headings are: "Is Active", 
 *         "Criteria Name", "Time Schedule", "Calls From", "Blacklisted" and "Holiday Schedule".
 */
class UserCallNotifyGetResponse extends ComplexType implements ComplexInterface
{
    public    $name = __CLASS__;

    public function __construct(
             $callNotifyEmailAddress=null,
             $criteriaTable
    ) {
        $this->callNotifyEmailAddress = new EmailAddress($callNotifyEmailAddress);
        $this->criteriaTable          = $criteriaTable;
        $this->args                   = func_get_args();
    }

    public function setCallNotifyEmailAddress($callNotifyEmailAddress)
    {
        $callNotifyEmailAddress and $this->callNotifyEmailAddress = new EmailAddress($callNotifyEmailAddress);
    }

    public function getCallNotifyEmailAddress()
    {
        return (!$this->callNotifyEmailAddress) ?: $this->callNotifyEmailAddress->value();
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
