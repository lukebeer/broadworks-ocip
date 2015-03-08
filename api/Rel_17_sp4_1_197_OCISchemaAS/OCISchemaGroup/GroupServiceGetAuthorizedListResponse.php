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
    const     RESPONSE_TYPE     = 'Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaGroup\GroupServiceGetAuthorizedListResponse';
    public    $name             = __CLASS__;
    protected $servicePackName  = null;
    protected $groupServiceName = null;
    protected $userServiceName  = null;


    /**
     * Service Pack name.
     */
    public function setServicePackName($servicePackName = null)
    {
        $this->servicePackName = ($servicePackName InstanceOf ServicePackName)
             ? $servicePackName
             : new ServicePackName($servicePackName);
    }

    /**
     * Service Pack name.
     */
    public function getServicePackName()
    {
        return (!$this->servicePackName) ?: $this->servicePackName->getValue();
    }

    /**
     * Group level services.
     */
    public function setGroupServiceName($groupServiceName = null)
    {
        $this->groupServiceName = ($groupServiceName InstanceOf GroupService)
             ? $groupServiceName
             : new GroupService($groupServiceName);
    }

    /**
     * Group level services.
     */
    public function getGroupServiceName()
    {
        return (!$this->groupServiceName) ?: $this->groupServiceName->getValue();
    }

    /**
     * User level services.
     */
    public function setUserServiceName($userServiceName = null)
    {
        $this->userServiceName = ($userServiceName InstanceOf UserService)
             ? $userServiceName
             : new UserService($userServiceName);
    }

    /**
     * User level services.
     */
    public function getUserServiceName()
    {
        return (!$this->userServiceName) ?: $this->userServiceName->getValue();
    }
}
