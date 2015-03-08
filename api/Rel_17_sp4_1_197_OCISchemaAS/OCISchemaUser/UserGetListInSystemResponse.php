<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaUser; 


use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
     * Response to UserGetListInSystemRequest.
 *         Contains a table with column headings : "User Id", "Group Id", "Service Provider Id"
 *         "Last Name", "First Name", "Department", "Phone Number", "Phone Number Activated", "Email Address",  "Hiragana Last Name", "Hiragana First Name", "In Trunk Group"
 *         in a row for each user.
 */
class UserGetListInSystemResponse extends ComplexType implements ComplexInterface
{
    const     RESPONSE_TYPE = 'Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaUser\UserGetListInSystemResponse';
    public    $name      = __CLASS__;
    protected $userTable = null;


    /**
     * 
     */
    public function setUserTable(core:OCITable $userTable = null)
    {
        $this->userTable = core:OCITable $userTable;
    }

    /**
     * 
     */
    public function getUserTable()
    {
        return (!$this->userTable) ?: $this->userTable->getValue();
    }
}
