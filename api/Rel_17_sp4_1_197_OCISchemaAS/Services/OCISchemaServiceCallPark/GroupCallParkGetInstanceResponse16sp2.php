<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceCallPark; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCallPark\CallParkRecallTo;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\UserId;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Response to the GroupCallParkGetInstanceRequest16sp2.
 *         Contains a table with column headings: "User Id", "Last Name", "First Name", "Hiragana Last Name", 
 *         "Hiragana First Name".  The users are in the table are in the order they will try to be parked on.
 *         
 *         The following elements are only used in AS data mode:
 *          recallAlternateUserId
 *          recallTo
 */
class GroupCallParkGetInstanceResponse16sp2 extends ComplexType implements ComplexInterface
{
    public    $name                   = __CLASS__;
    protected $recallAlternateUserId  = null;
    protected $recallTo               = null;
    protected $userTable              = null;


    public function setRecallAlternateUserId($recallAlternateUserId = null)
    {
        $this->recallAlternateUserId = ($recallAlternateUserId InstanceOf UserId)
             ? $recallAlternateUserId
             : new UserId($recallAlternateUserId);
    }

    public function getRecallAlternateUserId()
    {
        return (!$this->recallAlternateUserId) ?: $this->recallAlternateUserId->value();
    }

    public function setRecallTo($recallTo = null)
    {
        $this->recallTo = ($recallTo InstanceOf CallParkRecallTo)
             ? $recallTo
             : new CallParkRecallTo($recallTo);
    }

    public function getRecallTo()
    {
        return (!$this->recallTo) ?: $this->recallTo->value();
    }

    public function setUserTable(core:OCITable $userTable = null)
    {
    }

    public function getUserTable()
    {
        return (!$this->userTable) ?: $this->userTable->value();
    }
}
