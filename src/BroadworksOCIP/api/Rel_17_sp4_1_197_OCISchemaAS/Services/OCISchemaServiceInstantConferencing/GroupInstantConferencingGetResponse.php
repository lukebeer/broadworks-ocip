<?php
/**
 * This file is part of http://github.com/LukeBeer/BroadworksOCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceInstantConferencing; 

use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\UnboundedNonNegativeInt;
use BroadworksOCIP\Builder\Types\PrimitiveType;
use BroadworksOCIP\Builder\Types\ComplexInterface;
use BroadworksOCIP\Builder\Types\ComplexType;
use BroadworksOCIP\Response\ResponseOutput;
use BroadworksOCIP\Client\Client;


/**
 * Response to GroupInstantConferencingGetRequest.
 */
class GroupInstantConferencingGetResponse extends ComplexType implements ComplexInterface
{
    public    $elementName = 'GroupInstantConferencingGetResponse';
    protected $portsAvailableFromServiceProvider;
    protected $portsAllocatedToGroup;
    protected $portsConsumedByGroupBridges;

    /**
     * @return \BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceInstantConferencing\GroupInstantConferencingGetResponse $response
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
        $this->portsAvailableFromServiceProvider = ($portsAvailableFromServiceProvider InstanceOf UnboundedNonNegativeInt)
             ? $portsAvailableFromServiceProvider
             : new UnboundedNonNegativeInt($portsAvailableFromServiceProvider);
        $this->portsAvailableFromServiceProvider->setElementName('portsAvailableFromServiceProvider');
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
        $this->portsAllocatedToGroup = ($portsAllocatedToGroup InstanceOf UnboundedNonNegativeInt)
             ? $portsAllocatedToGroup
             : new UnboundedNonNegativeInt($portsAllocatedToGroup);
        $this->portsAllocatedToGroup->setElementName('portsAllocatedToGroup');
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
        $this->portsConsumedByGroupBridges = new PrimitiveType($portsConsumedByGroupBridges);
        $this->portsConsumedByGroupBridges->setElementName('portsConsumedByGroupBridges');
        return $this;
    }

    /**
     * 
     * @return int $portsConsumedByGroupBridges
     */
    public function getPortsConsumedByGroupBridges()
    {
        return ($this->portsConsumedByGroupBridges)
            ? $this->portsConsumedByGroupBridges->getElementValue()
            : null;
    }
}
