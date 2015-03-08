<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated14; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\UnboundedNonNegativeInt;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
     * Response to the GroupTrunkGroupGetRequest.
 *         The response contains the maximum permissible active trunk group calls for the group.
 */
class GroupTrunkGroupGetResponse extends ComplexType implements ComplexInterface
{
    const     RESPONSE_TYPE            = 'Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated14\GroupTrunkGroupGetResponse';
    public    $name                    = __CLASS__;
    protected $maxActiveCalls          = null;
    protected $maxAvailableActiveCalls = null;


    /**
     * Unbounded Quantity. Can either be unlimited or a non-negative int quantity.
     */
    public function setMaxActiveCalls(UnboundedNonNegativeInt $maxActiveCalls = null)
    {
        $this->maxActiveCalls = UnboundedNonNegativeInt $maxActiveCalls;
    }

    /**
     * Unbounded Quantity. Can either be unlimited or a non-negative int quantity.
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
}
