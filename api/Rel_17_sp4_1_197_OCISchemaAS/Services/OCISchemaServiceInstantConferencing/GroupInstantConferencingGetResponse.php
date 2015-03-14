<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceInstantConferencing; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\UnboundedNonNegativeInt;
use Broadworks_OCIP\core\Builder\Types\PrimitiveType;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Response to GroupInstantConferencingGetRequest.
 */
class GroupInstantConferencingGetResponse extends ComplexType implements ComplexInterface
{
    public    $name                              = 'GroupInstantConferencingGetResponse';
    protected $portsAvailableFromServiceProvider = null;
    protected $portsAllocatedToGroup             = null;
    protected $portsConsumedByGroupBridges       = null;

    /**
     * @return \Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceInstantConferencing\GroupInstantConferencingGetResponse $response
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * 
     */
    public function setPortsAvailableFromServiceProvider(UnboundedNonNegativeInt $portsAvailableFromServiceProvider = null)
    {
        if (!$portsAvailableFromServiceProvider) return $this;
        $this->portsAvailableFromServiceProvider = $portsAvailableFromServiceProvider;
        $this->portsAvailableFromServiceProvider->setName('portsAvailableFromServiceProvider');
        return $this;
    }

    /**
     * 
     * @return UnboundedNonNegativeInt $portsAvailableFromServiceProvider
     */
    public function getPortsAvailableFromServiceProvider()
    {
        return $this->portsAvailableFromServiceProvider;
    }

    /**
     * 
     */
    public function setPortsAllocatedToGroup(UnboundedNonNegativeInt $portsAllocatedToGroup = null)
    {
        if (!$portsAllocatedToGroup) return $this;
        $this->portsAllocatedToGroup = $portsAllocatedToGroup;
        $this->portsAllocatedToGroup->setName('portsAllocatedToGroup');
        return $this;
    }

    /**
     * 
     * @return UnboundedNonNegativeInt $portsAllocatedToGroup
     */
    public function getPortsAllocatedToGroup()
    {
        return $this->portsAllocatedToGroup;
    }

    /**
     * 
     */
    public function setPortsConsumedByGroupBridges($portsConsumedByGroupBridges = null)
    {
        if (!$portsConsumedByGroupBridges) return $this;
        $this->portsConsumedByGroupBridges = new PrimitiveType($portsConsumedByGroupBridges);
        $this->portsConsumedByGroupBridges->setName('portsConsumedByGroupBridges');
        return $this;
    }

    /**
     * 
     * @return int $portsConsumedByGroupBridges
     */
    public function getPortsConsumedByGroupBridges()
    {
        return $this->portsConsumedByGroupBridges->getValue();
    }
}
