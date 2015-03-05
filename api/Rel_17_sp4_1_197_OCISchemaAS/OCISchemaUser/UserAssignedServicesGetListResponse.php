<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaUser; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\AssignedGroupServicesEntry;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\AssignedUserServicesEntry;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Response to UserAssignedServicesGetListRequest.
 *         A user can have both user services and group services because of music on hold.
 */
class UserAssignedServicesGetListResponse extends ComplexType implements ComplexInterface
{
    public    $name = __CLASS__;

    public function __construct(
             AssignedGroupServicesEntry $groupServiceEntry=null,
             AssignedUserServicesEntry $userServiceEntry=null
    ) {
        $this->groupServiceEntry = $groupServiceEntry;
        $this->userServiceEntry  = $userServiceEntry;
        $this->args              = func_get_args();
    }

    public function setGroupServiceEntry($groupServiceEntry)
    {
        $groupServiceEntry and $this->groupServiceEntry = new AssignedGroupServicesEntry($groupServiceEntry);
    }

    public function getGroupServiceEntry()
    {
        return (!$this->groupServiceEntry) ?: $this->groupServiceEntry->value();
    }

    public function setUserServiceEntry($userServiceEntry)
    {
        $userServiceEntry and $this->userServiceEntry = new AssignedUserServicesEntry($userServiceEntry);
    }

    public function getUserServiceEntry()
    {
        return (!$this->userServiceEntry) ?: $this->userServiceEntry->value();
    }
}
