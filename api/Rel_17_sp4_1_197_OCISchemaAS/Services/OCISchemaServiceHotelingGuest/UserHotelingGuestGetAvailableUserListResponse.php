<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceHotelingGuest; 


use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
     * Response to the UserHotelingGuestGetAvailableUserListRequest.
 *         Contains a table with column headings: "User Id", "Last Name", "First Name", "Hiragana Last Name", "Hiragana First Name", "Association Limit Hours", "Enable Association Limit".
 */
class UserHotelingGuestGetAvailableUserListResponse extends ComplexType implements ComplexInterface
{
    const     RESPONSE_TYPE  = 'Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceHotelingGuest\UserHotelingGuestGetAvailableUserListResponse';
    public    $name          = __CLASS__;
    protected $hostUserTable = null;


    /**
     * 
     */
    public function setHostUserTable(core:OCITable $hostUserTable = null)
    {
        $this->hostUserTable = core:OCITable $hostUserTable;
    }

    /**
     * 
     */
    public function getHostUserTable()
    {
        return (!$this->hostUserTable) ?: $this->hostUserTable->getValue();
    }
}
