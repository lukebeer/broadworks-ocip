<?php
/**
 * This file is part of http://github.com/LukeBeer/BroadworksOCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCallCenter; 

use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCallCenter\CallCenterRoutingPriorityOrder;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCallCenter\CallCenterRoutingPolicy;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ServiceProviderId;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\GroupId;
use BroadworksOCIP\Builder\Types\ComplexInterface;
use BroadworksOCIP\Builder\Types\ComplexType;
use BroadworksOCIP\Response\ResponseOutput;
use BroadworksOCIP\Client\Client;


/**
 * Modify the group call center routing policy.
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class GroupCallCenterModifyRoutingPolicyRequest extends ComplexType implements ComplexInterface
{
    public    $elementName = 'GroupCallCenterModifyRoutingPolicyRequest';
    protected $serviceProviderId;
    protected $groupId;
    protected $routingPolicy;
    protected $routingPriorityOrder;

    public function __construct(
         $serviceProviderId = '',
         $groupId = '',
         $routingPolicy = null,
         $routingPriorityOrder = null
    ) {
        $this->setServiceProviderId($serviceProviderId);
        $this->setGroupId($groupId);
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
        $this->serviceProviderId = ($serviceProviderId InstanceOf ServiceProviderId)
             ? $serviceProviderId
             : new ServiceProviderId($serviceProviderId);
        $this->serviceProviderId->setElementName('serviceProviderId');
        return $this;
    }

    /**
     * 
     * @return ServiceProviderId $serviceProviderId
     */
    public function getServiceProviderId()
    {
        return ($this->serviceProviderId)
            ? $this->serviceProviderId->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setGroupId($groupId = null)
    {
        $this->groupId = ($groupId InstanceOf GroupId)
             ? $groupId
             : new GroupId($groupId);
        $this->groupId->setElementName('groupId');
        return $this;
    }

    /**
     * 
     * @return GroupId $groupId
     */
    public function getGroupId()
    {
        return ($this->groupId)
            ? $this->groupId->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setRoutingPolicy($routingPolicy = null)
    {
        $this->routingPolicy = ($routingPolicy InstanceOf CallCenterRoutingPolicy)
             ? $routingPolicy
             : new CallCenterRoutingPolicy($routingPolicy);
        $this->routingPolicy->setElementName('routingPolicy');
        return $this;
    }

    /**
     * 
     * @return CallCenterRoutingPolicy $routingPolicy
     */
    public function getRoutingPolicy()
    {
        return ($this->routingPolicy)
            ? $this->routingPolicy->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setRoutingPriorityOrder(CallCenterRoutingPriorityOrder $routingPriorityOrder = null)
    {
        $this->routingPriorityOrder = ($routingPriorityOrder InstanceOf CallCenterRoutingPriorityOrder)
             ? $routingPriorityOrder
             : new CallCenterRoutingPriorityOrder($routingPriorityOrder);
        $this->routingPriorityOrder->setElementName('routingPriorityOrder');
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
