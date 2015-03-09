<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceInstantConferencing; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\UnboundedNonNegativeInt;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceInstantConferencing\GroupInstantConferencingGetResponse;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Response to GroupInstantConferencingGetRequest.
 */
class GroupInstantConferencingGetResponse extends ComplexType implements ComplexInterface
{
    public    $name                              = __CLASS__;
    protected $portsAvailableFromServiceProvider = null;
    protected $portsAllocatedToGroup             = null;
    protected $portsConsumedByGroupBridges       = null;

    /**
     * @return GroupInstantConferencingGetResponse
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * Unbounded Quantity. Can either be unlimited or a non-negative int quantity.
     */
    public function setPortsAvailableFromServiceProvider(UnboundedNonNegativeInt $portsAvailableFromServiceProvider = null)
    {
        $this->portsAvailableFromServiceProvider =  $portsAvailableFromServiceProvider;
    }

    /**
     * Unbounded Quantity. Can either be unlimited or a non-negative int quantity.
     */
    public function getPortsAvailableFromServiceProvider()
    {
        return (!$this->portsAvailableFromServiceProvider) ?: $this->portsAvailableFromServiceProvider->getValue();
    }

    /**
     * Unbounded Quantity. Can either be unlimited or a non-negative int quantity.
     */
    public function setPortsAllocatedToGroup(UnboundedNonNegativeInt $portsAllocatedToGroup = null)
    {
        $this->portsAllocatedToGroup =  $portsAllocatedToGroup;
    }

    /**
     * Unbounded Quantity. Can either be unlimited or a non-negative int quantity.
     */
    public function getPortsAllocatedToGroup()
    {
        return (!$this->portsAllocatedToGroup) ?: $this->portsAllocatedToGroup->getValue();
    }

    /**
     * 
     */
    public function setPortsConsumedByGroupBridges($portsConsumedByGroupBridges = null)
    {
        $this->portsConsumedByGroupBridges = (int) $portsConsumedByGroupBridges;
    }

    /**
     * 
     */
    public function getPortsConsumedByGroupBridges()
    {
        return (!$this->portsConsumedByGroupBridges) ?: $this->portsConsumedByGroupBridges;
    }
}
