<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaGroup; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ServicePackName;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\GroupService;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\UserService;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Response to GroupServiceGetAuthorizedListRequest.
 */
class GroupServiceGetAuthorizedListResponse extends ComplexType implements ComplexInterface
{
    public    $name = __CLASS__;

    public function __construct(
             $servicePackName=null,
             $groupServiceName=null,
             $userServiceName=null
    ) {
        $this->servicePackName  = new ServicePackName($servicePackName);
        $this->groupServiceName = new GroupService($groupServiceName);
        $this->userServiceName  = new UserService($userServiceName);
        $this->args             = func_get_args();
    }

    public function setServicePackName($servicePackName)
    {
        $servicePackName and $this->servicePackName = new ServicePackName($servicePackName);
    }

    public function getServicePackName()
    {
        return (!$this->servicePackName) ?: $this->servicePackName->value();
    }

    public function setGroupServiceName($groupServiceName)
    {
        $groupServiceName and $this->groupServiceName = new GroupService($groupServiceName);
    }

    public function getGroupServiceName()
    {
        return (!$this->groupServiceName) ?: $this->groupServiceName->value();
    }

    public function setUserServiceName($userServiceName)
    {
        $userServiceName and $this->userServiceName = new UserService($userServiceName);
    }

    public function getUserServiceName()
    {
        return (!$this->userServiceName) ?: $this->userServiceName->value();
    }
}
