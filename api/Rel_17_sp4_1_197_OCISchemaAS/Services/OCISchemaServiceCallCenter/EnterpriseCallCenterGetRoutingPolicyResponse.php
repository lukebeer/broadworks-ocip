<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceCallCenter; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\CallCenterRoutingPolicy;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\core:OCITable;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Response to EnterpriseCallCenterGetRoutingPolicyRequest.
 *         Contains a table with column headings: "Service User Id", "Name" and
 *         "Priority".
 */
class EnterpriseCallCenterGetRoutingPolicyResponse extends ComplexType implements ComplexInterface
{
    public    $name = __CLASS__;

    public function __construct(
             $routingPolicy,
             $callCenterTable
    ) {
        $this->routingPolicy   = $routingPolicy;
        $this->callCenterTable = $callCenterTable;
        $this->args            = func_get_args();
    }

    public function setRoutingPolicy($routingPolicy)
    {
        $routingPolicy and $this->routingPolicy = new CallCenterRoutingPolicy($routingPolicy);
    }

    public function getRoutingPolicy()
    {
        return (!$this->routingPolicy) ?: $this->routingPolicy->value();
    }

    public function setCallCenterTable($callCenterTable)
    {
        $callCenterTable and $this->callCenterTable = new core:OCITable($callCenterTable);
    }

    public function getCallCenterTable()
    {
        return (!$this->callCenterTable) ?: $this->callCenterTable->value();
    }
}
