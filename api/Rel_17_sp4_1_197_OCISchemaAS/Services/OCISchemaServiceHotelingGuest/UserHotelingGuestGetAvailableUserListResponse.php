<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceHotelingGuest; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\core:OCITable;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Response to the UserHotelingGuestGetAvailableUserListRequest.
 *         Contains a table with column headings: "User Id", "Last Name", "First Name", "Hiragana Last Name", "Hiragana First Name", "Association Limit Hours", "Enable Association Limit".
 */
class UserHotelingGuestGetAvailableUserListResponse extends ComplexType implements ComplexInterface
{
    public    $name = __CLASS__;

    public function __construct(
             $hostUserTable
    ) {
        $this->hostUserTable = $hostUserTable;
        $this->args          = func_get_args();
    }

    public function setHostUserTable($hostUserTable)
    {
        $hostUserTable and $this->hostUserTable = new core:OCITable($hostUserTable);
    }

    public function getHostUserTable()
    {
        return (!$this->hostUserTable) ?: $this->hostUserTable->value();
    }
}
