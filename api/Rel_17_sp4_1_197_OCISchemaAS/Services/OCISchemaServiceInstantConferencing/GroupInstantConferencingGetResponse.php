<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceInstantConferencing; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\UnboundedNonNegativeInt;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
     * Response to GroupInstantConferencingGetRequest.
 */
class GroupInstantConferencingGetResponse extends ComplexType implements ComplexInterface
{
    const     RESPONSE_TYPE                      = 'Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceInstantConferencing\GroupInstantConferencingGetResponse';
    public    $name                              = __CLASS__;
    protected $portsAvailableFromServiceProvider = null;
    protected $portsAllocatedToGroup             = null;
    protected $portsConsumedByGroupBridges       = null;


    /**
     * Unbounded Quantity. Can either be unlimited or a non-negative int quantity.
     */
    public function setPortsAvailableFromServiceProvider(UnboundedNonNegativeInt $portsAvailableFromServiceProvider = null)
    {
        $this->portsAvailableFromServiceProvider = UnboundedNonNegativeInt $portsAvailableFromServiceProvider;
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
        $this->portsAllocatedToGroup = UnboundedNonNegativeInt $portsAllocatedToGroup;
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
        return (!$this->portsConsumedByGroupBridges) ?: $this->portsConsumedByGroupBridges->getValue();
    }
}