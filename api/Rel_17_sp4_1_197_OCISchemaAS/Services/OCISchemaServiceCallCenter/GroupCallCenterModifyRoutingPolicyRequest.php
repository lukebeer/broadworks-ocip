<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceCallCenter; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCallCenter\CallCenterRoutingPriorityOrder;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCallCenter\CallCenterRoutingPolicy;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ServiceProviderId;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\GroupId;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
     * Modify the group call center routing policy.
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class GroupCallCenterModifyRoutingPolicyRequest extends ComplexType implements ComplexInterface
{
    public    $name                 = __CLASS__;
    protected $serviceProviderId    = null;
    protected $groupId              = null;
    protected $routingPolicy        = null;
    protected $routingPriorityOrder = null;

    public function __construct(
         $serviceProviderId,
         $groupId,
         $routingPolicy = null,
         CallCenterRoutingPriorityOrder $routingPriorityOrder = null
    ) {
        $this->setServiceProviderId($serviceProviderId);
        $this->setGroupId($groupId);
        $this->setRoutingPolicy($routingPolicy);
        $this->setRoutingPriorityOrder($routingPriorityOrder);
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
     * Call center routing policy.
     */
    public function setRoutingPolicy($routingPolicy = null)
    {
        $this->routingPolicy = ($routingPolicy InstanceOf CallCenterRoutingPolicy)
             ? $routingPolicy
             : new CallCenterRoutingPolicy($routingPolicy);
    }

    /**
     * Call center routing policy.
     */
    public function getRoutingPolicy()
    {
        return (!$this->routingPolicy) ?: $this->routingPolicy->getValue();
    }

    /**
     * Call center routing order
     */
    public function setRoutingPriorityOrder(CallCenterRoutingPriorityOrder $routingPriorityOrder = null)
    {
        $this->routingPriorityOrder = CallCenterRoutingPriorityOrder $routingPriorityOrder;
    }

    /**
     * Call center routing order
     */
    public function getRoutingPriorityOrder()
    {
        return (!$this->routingPriorityOrder) ?: $this->routingPriorityOrder->getValue();
    }
}
