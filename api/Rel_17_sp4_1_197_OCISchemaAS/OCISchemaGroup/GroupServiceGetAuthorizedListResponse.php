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
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Response to GroupServiceGetAuthorizedListRequest.
 */
class GroupServiceGetAuthorizedListResponse extends ComplexType implements ComplexInterface
{
    public    $name             = 'GroupServiceGetAuthorizedListResponse';
    protected $servicePackName  = null;
    protected $groupServiceName = null;
    protected $userServiceName  = null;

    /**
     * @return \Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaGroup\GroupServiceGetAuthorizedListResponse $response
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * 
     */
    public function setServicePackName($servicePackName = null)
    {
        if (!$servicePackName) return $this;
        $this->servicePackName = ($servicePackName InstanceOf ServicePackName)
             ? $servicePackName
             : new ServicePackName($servicePackName);
        $this->servicePackName->setName('servicePackName');
        return $this;
    }

    /**
     * 
     * @return ServicePackName $servicePackName
     */
    public function getServicePackName()
    {
        return $this->servicePackName->getValue();
    }

    /**
     * 
     */
    public function setGroupServiceName($groupServiceName = null)
    {
        if (!$groupServiceName) return $this;
        $this->groupServiceName = ($groupServiceName InstanceOf GroupService)
             ? $groupServiceName
             : new GroupService($groupServiceName);
        $this->groupServiceName->setName('groupServiceName');
        return $this;
    }

    /**
     * 
     * @return GroupService $groupServiceName
     */
    public function getGroupServiceName()
    {
        return $this->groupServiceName->getValue();
    }

    /**
     * 
     */
    public function setUserServiceName($userServiceName = null)
    {
        if (!$userServiceName) return $this;
        $this->userServiceName = ($userServiceName InstanceOf UserService)
             ? $userServiceName
             : new UserService($userServiceName);
        $this->userServiceName->setName('userServiceName');
        return $this;
    }

    /**
     * 
     * @return UserService $userServiceName
     */
    public function getUserServiceName()
    {
        return $this->userServiceName->getValue();
    }
}
