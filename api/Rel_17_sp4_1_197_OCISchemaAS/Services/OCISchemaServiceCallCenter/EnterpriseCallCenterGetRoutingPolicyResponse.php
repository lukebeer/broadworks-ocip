<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceCallCenter; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCallCenter\CallCenterRoutingPolicy;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
     * Response to EnterpriseCallCenterGetRoutingPolicyRequest.
 *         Contains a table with column headings: "Service User Id", "Name" and
 *         "Priority".
 */
class EnterpriseCallCenterGetRoutingPolicyResponse extends ComplexType implements ComplexInterface
{
    public    $name            = __CLASS__;
    protected $routingPolicy   = null;
    protected $callCenterTable = null;


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
     * 
     */
    public function setCallCenterTable(core:OCITable $callCenterTable = null)
    {
        $this->callCenterTable =  $callCenterTable;
    }

    /**
     * 
     */
    public function getCallCenterTable()
    {
        return (!$this->callCenterTable) ?: $this->callCenterTable->getValue();
    }
}
