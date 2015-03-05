<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceCallCapacityManagement; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ServiceInstanceName;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\CallCapacityCallLimit;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\xs:boolean;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\core:OCITable;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Response to the GroupCallCapacityManagementGetInstanceRequest.
 *         Contains a table with column headings: "User Id", "Last Name", "First Name", "Hiragana Last Name", "Hiragana First Name".
 */
class GroupCallCapacityManagementGetInstanceResponse extends ComplexType implements ComplexInterface
{
    public    $name = __CLASS__;

    public function __construct(
             $name,
             $maxActiveCallsAllowed,
             $maxIncomingActiveCallsAllowed=null,
             $maxOutgoingActiveCallsAllowed=null,
             $defaultGroupForNewUsers,
             $userTable
    ) {
        $this->name                          = new ServiceInstanceName($name);
        $this->maxActiveCallsAllowed         = $maxActiveCallsAllowed;
        $this->maxIncomingActiveCallsAllowed = $maxIncomingActiveCallsAllowed;
        $this->maxOutgoingActiveCallsAllowed = $maxOutgoingActiveCallsAllowed;
        $this->defaultGroupForNewUsers       = $defaultGroupForNewUsers;
        $this->userTable                     = $userTable;
        $this->args                          = func_get_args();
    }

    public function setName($name)
    {
        $name and $this->name = new ServiceInstanceName($name);
    }

    public function getName()
    {
        return (!$this->name) ?: $this->name->value();
    }

    public function setMaxActiveCallsAllowed($maxActiveCallsAllowed)
    {
        $maxActiveCallsAllowed and $this->maxActiveCallsAllowed = new CallCapacityCallLimit($maxActiveCallsAllowed);
    }

    public function getMaxActiveCallsAllowed()
    {
        return (!$this->maxActiveCallsAllowed) ?: $this->maxActiveCallsAllowed->value();
    }

    public function setMaxIncomingActiveCallsAllowed($maxIncomingActiveCallsAllowed)
    {
        $maxIncomingActiveCallsAllowed and $this->maxIncomingActiveCallsAllowed = new CallCapacityCallLimit($maxIncomingActiveCallsAllowed);
    }

    public function getMaxIncomingActiveCallsAllowed()
    {
        return (!$this->maxIncomingActiveCallsAllowed) ?: $this->maxIncomingActiveCallsAllowed->value();
    }

    public function setMaxOutgoingActiveCallsAllowed($maxOutgoingActiveCallsAllowed)
    {
        $maxOutgoingActiveCallsAllowed and $this->maxOutgoingActiveCallsAllowed = new CallCapacityCallLimit($maxOutgoingActiveCallsAllowed);
    }

    public function getMaxOutgoingActiveCallsAllowed()
    {
        return (!$this->maxOutgoingActiveCallsAllowed) ?: $this->maxOutgoingActiveCallsAllowed->value();
    }

    public function setDefaultGroupForNewUsers($defaultGroupForNewUsers)
    {
        $defaultGroupForNewUsers and $this->defaultGroupForNewUsers = new xs:boolean($defaultGroupForNewUsers);
    }

    public function getDefaultGroupForNewUsers()
    {
        return (!$this->defaultGroupForNewUsers) ?: $this->defaultGroupForNewUsers->value();
    }

    public function setUserTable($userTable)
    {
        $userTable and $this->userTable = new core:OCITable($userTable);
    }

    public function getUserTable()
    {
        return (!$this->userTable) ?: $this->userTable->value();
    }
}
