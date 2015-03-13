<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCallCenter; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCallCenter\CallCenterRoutingPriorityOrder;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ServiceProviderId;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Modify the enterprise call center routing policy.
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class EnterpriseCallCenterModifyRoutingPolicyRequest extends ComplexType implements ComplexInterface
{
    public    $name                 = 'EnterpriseCallCenterModifyRoutingPolicyRequest';
    protected $serviceProviderId    = null;
    protected $routingPolicy        = null;
    protected $routingPriorityOrder = null;

    public function __construct(
         $serviceProviderId,
         $routingPolicy = null,
         CallCenterRoutingPriorityOrder $routingPriorityOrder = null
    ) {
        $this->setServiceProviderId($serviceProviderId);
        $this->setRoutingPolicy($routingPolicy);
        $this->setRoutingPriorityOrder($routingPriorityOrder);
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
    public function setRoutingPolicy($routingPolicy = null)
    {
        if (!$routingPolicy) return $this;
        $this->routingPolicy = ($routingPolicy InstanceOf CallCenterRoutingPolicy)
             ? $routingPolicy
             : new CallCenterRoutingPolicy($routingPolicy);
        $this->routingPolicy->setName('routingPolicy');
        return $this;
    }

    /**
     * 
     * @return CallCenterRoutingPolicy $routingPolicy
     */
    public function getRoutingPolicy()
    {
        return $this->routingPolicy->getValue();
    }

    /**
     * 
     */
    public function setRoutingPriorityOrder(CallCenterRoutingPriorityOrder $routingPriorityOrder = null)
    {
        if (!$routingPriorityOrder) return $this;
        $this->routingPriorityOrder = $routingPriorityOrder;
        $this->routingPriorityOrder->setName('routingPriorityOrder');
        return $this;
    }

    /**
     * 
     * @return CallCenterRoutingPriorityOrder $routingPriorityOrder
     */
    public function getRoutingPriorityOrder()
    {
        return $this->routingPriorityOrder;
    }
}
