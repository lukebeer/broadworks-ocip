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
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
     * Modify the enterprise call center routing policy.
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class EnterpriseCallCenterModifyRoutingPolicyRequest extends ComplexType implements ComplexInterface
{
    public    $name                 = __CLASS__;
    protected $serviceProviderId    = null;
    protected $routingPolicy        = null;
    protected $routingPriorityOrder = null;

    public function __construct(
         $serviceProviderId,
         $routingPolicy = null,
          $routingPriorityOrder = null
    ) {
        $this->setServiceProviderId($serviceProviderId);
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
        $this->routingPriorityOrder =  $routingPriorityOrder;
    }

    /**
     * Call center routing order
     */
    public function getRoutingPriorityOrder()
    {
        return (!$this->routingPriorityOrder) ?: $this->routingPriorityOrder->getValue();
    }
}
