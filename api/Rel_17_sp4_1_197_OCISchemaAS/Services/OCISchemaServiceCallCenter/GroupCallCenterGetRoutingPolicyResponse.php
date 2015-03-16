<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCallCenter; 

use Broadworks_OCIP\core\Builder\Types\TableType;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Response to GroupCallCenterGetRoutingPolicyRequest.
 *         Contains a table with column headings: "Service User Id", "Name" and
 *         "Priority".
 */
class GroupCallCenterGetRoutingPolicyResponse extends ComplexType implements ComplexInterface
{
    public    $name = 'GroupCallCenterGetRoutingPolicyResponse';
    protected $routingPolicy;
    protected $callCenterTable;

    /**
     * @return \Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCallCenter\GroupCallCenterGetRoutingPolicyResponse $response
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * 
     */
    public function setRoutingPolicy($routingPolicy = null)
    {
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
        return ($this->routingPolicy) ? $this->routingPolicy->getValue() : null;
    }

    /**
     * 
     */
    public function setCallCenterTable(TableType $callCenterTable = null)
    {
        $this->callCenterTable = $callCenterTable;
        $this->callCenterTable->setName('callCenterTable');
        return $this;
    }

    /**
     * 
     * @return TableType
     */
    public function getCallCenterTable()
    {
        return $this->callCenterTable;
    }
}
