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
    public    $name                               = __CLASS__;
    protected $portsAvailableFromServiceProvider  = null;
    protected $portsAllocatedToGroup              = null;
    protected $portsConsumedByGroupBridges        = null;


    public function setPortsAvailableFromServiceProvider(UnboundedNonNegativeInt $portsAvailableFromServiceProvider = null)
    {
    }

    public function getPortsAvailableFromServiceProvider()
    {
        return (!$this->portsAvailableFromServiceProvider) ?: $this->portsAvailableFromServiceProvider->value();
    }

    public function setPortsAllocatedToGroup(UnboundedNonNegativeInt $portsAllocatedToGroup = null)
    {
    }

    public function getPortsAllocatedToGroup()
    {
        return (!$this->portsAllocatedToGroup) ?: $this->portsAllocatedToGroup->value();
    }

    public function setPortsConsumedByGroupBridges(xs:int $portsConsumedByGroupBridges = null)
    {
    }

    public function getPortsConsumedByGroupBridges()
    {
        return (!$this->portsConsumedByGroupBridges) ?: $this->portsConsumedByGroupBridges->value();
    }
}
