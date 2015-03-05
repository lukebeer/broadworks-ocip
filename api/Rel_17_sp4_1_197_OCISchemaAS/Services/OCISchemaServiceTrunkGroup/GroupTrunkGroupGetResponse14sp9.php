<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceTrunkGroup; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\xs:int;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\UnboundedNonNegativeInt;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Response to the GroupTrunkGroupGetRequest14sp1.
 *         The response contains the maximum and bursting maximum permissible active trunk group calls for the group.
 */
class GroupTrunkGroupGetResponse14sp9 extends ComplexType implements ComplexInterface
{
    public    $name = __CLASS__;

    public function __construct(
             $maxActiveCalls,
             UnboundedNonNegativeInt $maxAvailableActiveCalls,
             UnboundedNonNegativeInt $burstingMaxActiveCalls,
             UnboundedNonNegativeInt $burstingMaxAvailableActiveCalls
    ) {
        $this->maxActiveCalls                  = $maxActiveCalls;
        $this->maxAvailableActiveCalls         = $maxAvailableActiveCalls;
        $this->burstingMaxActiveCalls          = $burstingMaxActiveCalls;
        $this->burstingMaxAvailableActiveCalls = $burstingMaxAvailableActiveCalls;
        $this->args                            = func_get_args();
    }

    public function setMaxActiveCalls($maxActiveCalls)
    {
        $maxActiveCalls and $this->maxActiveCalls = new xs:int($maxActiveCalls);
    }

    public function getMaxActiveCalls()
    {
        return (!$this->maxActiveCalls) ?: $this->maxActiveCalls->value();
    }

    public function setMaxAvailableActiveCalls($maxAvailableActiveCalls)
    {
        $maxAvailableActiveCalls and $this->maxAvailableActiveCalls = new UnboundedNonNegativeInt($maxAvailableActiveCalls);
    }

    public function getMaxAvailableActiveCalls()
    {
        return (!$this->maxAvailableActiveCalls) ?: $this->maxAvailableActiveCalls->value();
    }

    public function setBurstingMaxActiveCalls($burstingMaxActiveCalls)
    {
        $burstingMaxActiveCalls and $this->burstingMaxActiveCalls = new UnboundedNonNegativeInt($burstingMaxActiveCalls);
    }

    public function getBurstingMaxActiveCalls()
    {
        return (!$this->burstingMaxActiveCalls) ?: $this->burstingMaxActiveCalls->value();
    }

    public function setBurstingMaxAvailableActiveCalls($burstingMaxAvailableActiveCalls)
    {
        $burstingMaxAvailableActiveCalls and $this->burstingMaxAvailableActiveCalls = new UnboundedNonNegativeInt($burstingMaxAvailableActiveCalls);
    }

    public function getBurstingMaxAvailableActiveCalls()
    {
        return (!$this->burstingMaxAvailableActiveCalls) ?: $this->burstingMaxAvailableActiveCalls->value();
    }
}
