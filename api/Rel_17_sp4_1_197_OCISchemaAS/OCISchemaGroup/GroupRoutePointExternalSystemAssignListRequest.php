<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaGroup; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\RoutePointExternalSystem;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ServiceProviderId;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\GroupId;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
     * Assign a list of route point external systems to a group.
 *         The response is either SuccessResponse or ErrorResponse.
 */
class GroupRoutePointExternalSystemAssignListRequest extends ComplexType implements ComplexInterface
{
    public    $name                     = __CLASS__;
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
     * Service Provider Id uniquely identifies a service provider.
     *         NOTE: The service provider id has a maximum length of 30 bytes, not 30 characters.
     */
    public function setServiceProviderId($serviceProviderId = null)
    {
        $this->serviceProviderId = ($serviceProviderId InstanceOf ServiceProviderId)
             ? $serviceProviderId
             : new ServiceProviderId($serviceProviderId);
    }

    /**
     * Service Provider Id uniquely identifies a service provider.
     *         NOTE: The service provider id has a maximum length of 30 bytes, not 30 characters.
     */
    public function getServiceProviderId()
    {
        return (!$this->serviceProviderId) ?: $this->serviceProviderId->getValue();
    }

    /**
     * Group Id identifies a group within a service provider or enterprise. The group id is not
     *         unique system wide. It must be combined with a service provider id to be unique across the system.
     */
    public function setGroupId($groupId = null)
    {
        $this->groupId = ($groupId InstanceOf GroupId)
             ? $groupId
             : new GroupId($groupId);
    }

    /**
     * Group Id identifies a group within a service provider or enterprise. The group id is not
     *         unique system wide. It must be combined with a service provider id to be unique across the system.
     */
    public function getGroupId()
    {
        return (!$this->groupId) ?: $this->groupId->getValue();
    }

    /**
     * The Route Point External System's name.
     */
    public function setRoutePointExternalSystem($routePointExternalSystem = null)
    {
        $this->routePointExternalSystem = ($routePointExternalSystem InstanceOf RoutePointExternalSystem)
             ? $routePointExternalSystem
             : new RoutePointExternalSystem($routePointExternalSystem);
    }

    /**
     * The Route Point External System's name.
     */
    public function getRoutePointExternalSystem()
    {
        return (!$this->routePointExternalSystem) ?: $this->routePointExternalSystem->getValue();
    }
}