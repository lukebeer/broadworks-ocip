<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceCallCenter; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ServiceProviderId;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\CallCenterRoutingPolicy;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\CallCenterRoutingPriorityOrder;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Modify the enterprise call center routing policy.
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class EnterpriseCallCenterModifyRoutingPolicyRequest extends ComplexType implements ComplexInterface
{
    public    $name = __CLASS__;

    public function __construct(
             $serviceProviderId,
             $routingPolicy=null,
             $routingPriorityOrder=null
    ) {
        $this->serviceProviderId    = new ServiceProviderId($serviceProviderId);
        $this->routingPolicy        = $routingPolicy;
        $this->routingPriorityOrder = $routingPriorityOrder;
        $this->args                 = func_get_args();
    }

    public function setServiceProviderId($serviceProviderId)
    {
        $serviceProviderId and $this->serviceProviderId = new ServiceProviderId($serviceProviderId);
    }

    public function getServiceProviderId()
    {
        return (!$this->serviceProviderId) ?: $this->serviceProviderId->value();
    }

    public function setRoutingPolicy($routingPolicy)
    {
        $routingPolicy and $this->routingPolicy = new CallCenterRoutingPolicy($routingPolicy);
    }

    public function getRoutingPolicy()
    {
        return (!$this->routingPolicy) ?: $this->routingPolicy->value();
    }

    public function setRoutingPriorityOrder($routingPriorityOrder)
    {
        $routingPriorityOrder and $this->routingPriorityOrder = new CallCenterRoutingPriorityOrder($routingPriorityOrder);
    }

    public function getRoutingPriorityOrder()
    {
        return (!$this->routingPriorityOrder) ?: $this->routingPriorityOrder->value();
    }
}
