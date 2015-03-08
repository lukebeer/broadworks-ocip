<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceCallWaiting; 


use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
     * Modify the system level data associated with Call Waiting.
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class SystemCallWaitingModifyRequest extends ComplexType implements ComplexInterface
{
    public    $name                    = __CLASS__;
    protected $playDistinctiveRingback = null;

    public function __construct(
         $playDistinctiveRingback = null
    ) {
        $this->setPlayDistinctiveRingback($playDistinctiveRingback);
    }

    /**
     * 
     */
    public function setPlayDistinctiveRingback($playDistinctiveRingback = null)
    {
        $this->playDistinctiveRingback = (boolean) $playDistinctiveRingback;
    }

    /**
     * 
     */
    public function getPlayDistinctiveRingback()
    {
        return (!$this->playDistinctiveRingback) ?: $this->playDistinctiveRingback->getValue();
    }
}
