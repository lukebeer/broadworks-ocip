<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceCommunicationBarringUserControl; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\xs:boolean;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\core:OCITable;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Response to the UserCommunicationBarringUserControlGetRequest.
 *         Identifies the profiles available to the user and which one if any
 *         is active as well as the lockout status.
 *         Contains a table with column headings: "Name", "Code", "Activated" and "Primary".
 */
class UserCommunicationBarringUserControlGetResponse extends ComplexType implements ComplexInterface
{
    public    $name = __CLASS__;

    public function __construct(
             $lockoutStatus,
             $profileTable
    ) {
        $this->lockoutStatus = $lockoutStatus;
        $this->profileTable  = $profileTable;
        $this->args          = func_get_args();
    }

    public function setLockoutStatus($lockoutStatus)
    {
        $lockoutStatus and $this->lockoutStatus = new xs:boolean($lockoutStatus);
    }

    public function getLockoutStatus()
    {
        return (!$this->lockoutStatus) ?: $this->lockoutStatus->value();
    }

    public function setProfileTable($profileTable)
    {
        $profileTable and $this->profileTable = new core:OCITable($profileTable);
    }

    public function getProfileTable()
    {
        return (!$this->profileTable) ?: $this->profileTable->value();
    }
}
