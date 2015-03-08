<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceTrunkGroup; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\UnboundedNonNegativeInt;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
     * Response to the GroupTrunkGroupGetRequest14sp1.
 *         The response contains the maximum and bursting maximum permissible active trunk group calls for the group.
 */
class GroupTrunkGroupGetResponse14sp9 extends ComplexType implements ComplexInterface
{
    const     RESPONSE_TYPE                    = 'Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceTrunkGroup\GroupTrunkGroupGetResponse14sp9';
    public    $name                            = __CLASS__;
    protected $maxActiveCalls                  = null;
    protected $maxAvailableActiveCalls         = null;
    protected $burstingMaxActiveCalls          = null;
    protected $burstingMaxAvailableActiveCalls = null;


    /**
     * 
     */
    public function setMaxActiveCalls($maxActiveCalls = null)
    {
        $this->maxActiveCalls = (int) $maxActiveCalls;
    }

    /**
     * 
     */
    public function getMaxActiveCalls()
    {
        return (!$this->maxActiveCalls) ?: $this->maxActiveCalls->getValue();
    }

    /**
     * Unbounded Quantity. Can either be unlimited or a non-negative int quantity.
     */
    public function setMaxAvailableActiveCalls(UnboundedNonNegativeInt $maxAvailableActiveCalls = null)
    {
        $this->maxAvailableActiveCalls = UnboundedNonNegativeInt $maxAvailableActiveCalls;
    }

    /**
     * Unbounded Quantity. Can either be unlimited or a non-negative int quantity.
     */
    public function getMaxAvailableActiveCalls()
    {
        return (!$this->maxAvailableActiveCalls) ?: $this->maxAvailableActiveCalls->getValue();
    }

    /**
     * Unbounded Quantity. Can either be unlimited or a non-negative int quantity.
     */
    public function setBurstingMaxActiveCalls(UnboundedNonNegativeInt $burstingMaxActiveCalls = null)
    {
        $this->burstingMaxActiveCalls = UnboundedNonNegativeInt $burstingMaxActiveCalls;
    }

    /**
     * Unbounded Quantity. Can either be unlimited or a non-negative int quantity.
     */
    public function getBurstingMaxActiveCalls()
    {
        return (!$this->burstingMaxActiveCalls) ?: $this->burstingMaxActiveCalls->getValue();
    }

    /**
     * Unbounded Quantity. Can either be unlimited or a non-negative int quantity.
     */
    public function setBurstingMaxAvailableActiveCalls(UnboundedNonNegativeInt $burstingMaxAvailableActiveCalls = null)
    {
        $this->burstingMaxAvailableActiveCalls = UnboundedNonNegativeInt $burstingMaxAvailableActiveCalls;
    }

    /**
     * Unbounded Quantity. Can either be unlimited or a non-negative int quantity.
     */
    public function getBurstingMaxAvailableActiveCalls()
    {
        return (!$this->burstingMaxAvailableActiveCalls) ?: $this->burstingMaxAvailableActiveCalls->getValue();
    }
}
