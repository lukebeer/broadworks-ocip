<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaGroup; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ServiceProviderId;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\GroupId;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Assign a list of route point external systems to a group.
 *         The response is either SuccessResponse or ErrorResponse.
 */
class GroupRoutePointExternalSystemAssignListRequest extends ComplexType implements ComplexInterface
{
    public    $name                     = 'GroupRoutePointExternalSystemAssignListRequest';
    protected $serviceProviderId        = null;
    protected $groupId                  = null;
    protected $routePointExternalSystem = null;

    public function __construct(
         $serviceProviderId,
         $groupId,
         $routePointExternalSystem = null
    ) {
        $this->setServiceProviderId($serviceProviderId);
        $this->setGroupId($groupId);
        $this->setRoutePointExternalSystem($routePointExternalSystem);
    }

    /**
     * @return mixed $response
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * 
     */
    public function setServiceProviderId($serviceProviderId = null)
    {
        if (!$serviceProviderId) return $this;
        $this->serviceProviderId = ($serviceProviderId InstanceOf ServiceProviderId)
             ? $serviceProviderId
             : new ServiceProviderId($serviceProviderId);
        $this->serviceProviderId->setName('serviceProviderId');
        return $this;
    }

    /**
     * 
     * @return ServiceProviderId $serviceProviderId
     */
    public function getServiceProviderId()
    {
        return $this->serviceProviderId->getValue();
    }

    /**
     * 
     */
    public function setGroupId($groupId = null)
    {
        if (!$groupId) return $this;
        $this->groupId = ($groupId InstanceOf GroupId)
             ? $groupId
             : new GroupId($groupId);
        $this->groupId->setName('groupId');
        return $this;
    }

    /**
     * 
     * @return GroupId $groupId
     */
    public function getGroupId()
    {
        return $this->groupId->getValue();
    }

    /**
     * 
     */
    public function setRoutePointExternalSystem($routePointExternalSystem = null)
    {
        if (!$routePointExternalSystem) return $this;
        $this->routePointExternalSystem = ($routePointExternalSystem InstanceOf RoutePointExternalSystem)
             ? $routePointExternalSystem
             : new RoutePointExternalSystem($routePointExternalSystem);
        $this->routePointExternalSystem->setName('routePointExternalSystem');
        return $this;
    }

    /**
     * 
     * @return RoutePointExternalSystem $routePointExternalSystem
     */
    public function getRoutePointExternalSystem()
    {
        return $this->routePointExternalSystem->getValue();
    }
}
