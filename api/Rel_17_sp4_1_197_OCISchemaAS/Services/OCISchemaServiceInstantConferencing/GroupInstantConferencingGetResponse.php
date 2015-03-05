<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceInstantConferencing; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\UnboundedNonNegativeInt;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\xs:int;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Response to GroupInstantConferencingGetRequest.
 */
class GroupInstantConferencingGetResponse extends ComplexType implements ComplexInterface
{
    public    $name = __CLASS__;

    public function __construct(
             UnboundedNonNegativeInt $portsAvailableFromServiceProvider,
             UnboundedNonNegativeInt $portsAllocatedToGroup,
             $portsConsumedByGroupBridges
    ) {
        $this->portsAvailableFromServiceProvider = $portsAvailableFromServiceProvider;
        $this->portsAllocatedToGroup             = $portsAllocatedToGroup;
        $this->portsConsumedByGroupBridges       = $portsConsumedByGroupBridges;
        $this->args                              = func_get_args();
    }

    public function setPortsAvailableFromServiceProvider($portsAvailableFromServiceProvider)
    {
        $portsAvailableFromServiceProvider and $this->portsAvailableFromServiceProvider = new UnboundedNonNegativeInt($portsAvailableFromServiceProvider);
    }

    public function getPortsAvailableFromServiceProvider()
    {
        return (!$this->portsAvailableFromServiceProvider) ?: $this->portsAvailableFromServiceProvider->value();
    }

    public function setPortsAllocatedToGroup($portsAllocatedToGroup)
    {
        $portsAllocatedToGroup and $this->portsAllocatedToGroup = new UnboundedNonNegativeInt($portsAllocatedToGroup);
    }

    public function getPortsAllocatedToGroup()
    {
        return (!$this->portsAllocatedToGroup) ?: $this->portsAllocatedToGroup->value();
    }

    public function setPortsConsumedByGroupBridges($portsConsumedByGroupBridges)
    {
        $portsConsumedByGroupBridges and $this->portsConsumedByGroupBridges = new xs:int($portsConsumedByGroupBridges);
    }

    public function getPortsConsumedByGroupBridges()
    {
        return (!$this->portsConsumedByGroupBridges) ?: $this->portsConsumedByGroupBridges->value();
    }
}
