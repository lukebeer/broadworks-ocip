<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated17; 


use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Response to the GroupCallParkGetInstanceRequest.
 *           Contains a table with column headings: "User Id", "Last Name", "First Name", "Hiragana Last Name", 
 *           "Hiragana First Name".  The users are in the table are in the order they will try to be parked on.
 */
class GroupCallParkGetInstanceResponse extends ComplexType implements ComplexInterface
{
    public    $name       = __CLASS__;
    protected $userTable  = null;


    public function setUserTable(core:OCITable $userTable = null)
    {
    }

    public function getUserTable()
    {
        return (!$this->userTable) ?: $this->userTable->value();
    }
}
