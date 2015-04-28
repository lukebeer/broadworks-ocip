<?php
/**
 * This file is part of http://github.com/LukeBeer/BroadworksOCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaGroup; 

use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ServicePackName;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\GroupService;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\UserService;
use BroadworksOCIP\Builder\Types\ComplexInterface;
use BroadworksOCIP\Builder\Types\ComplexType;
use BroadworksOCIP\Response\ResponseOutput;
use BroadworksOCIP\Client\Client;


/**
 * Response to GroupServiceGetAuthorizedListRequest.
 */
class GroupServiceGetAuthorizedListResponse extends ComplexType implements ComplexInterface
{
    public    $elementName = 'GroupServiceGetAuthorizedListResponse';
    protected $servicePackName;
    protected $groupServiceName;
    protected $userServiceName;

    /**
     * @return \BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaGroup\GroupServiceGetAuthorizedListResponse $response
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
        $this->servicePackName = ($servicePackName InstanceOf ServicePackName)
             ? $servicePackName
             : new ServicePackName($servicePackName);
        $this->servicePackName->setElementName('servicePackName');
        return $this;
    }

    /**
     * 
     * @return ServicePackName $servicePackName
     */
    public function getServicePackName()
    {
        return ($this->servicePackName)
            ? $this->servicePackName->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setGroupServiceName($groupServiceName = null)
    {
        $this->groupServiceName = ($groupServiceName InstanceOf GroupService)
             ? $groupServiceName
             : new GroupService($groupServiceName);
        $this->groupServiceName->setElementName('groupServiceName');
        return $this;
    }

    /**
     * 
     * @return GroupService $groupServiceName
     */
    public function getGroupServiceName()
    {
        return ($this->groupServiceName)
            ? $this->groupServiceName->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setUserServiceName($userServiceName = null)
    {
        $this->userServiceName = ($userServiceName InstanceOf UserService)
             ? $userServiceName
             : new UserService($userServiceName);
        $this->userServiceName->setElementName('userServiceName');
        return $this;
    }

    /**
     * 
     * @return UserService $userServiceName
     */
    public function getUserServiceName()
    {
        return ($this->userServiceName)
            ? $this->userServiceName->getElementValue()
            : null;
    }
}
