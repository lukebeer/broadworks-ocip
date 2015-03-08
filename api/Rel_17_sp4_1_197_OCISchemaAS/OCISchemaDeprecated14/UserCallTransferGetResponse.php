<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated14; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCallTransfer\CallTransferRecallNumberOfRings;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
     * Response to UserCallTransferGetRequest.
 */
class UserCallTransferGetResponse extends ComplexType implements ComplexInterface
{
    public    $name                                      = __CLASS__;
    protected $isRecallActive                            = null;
    protected $recallNumberOfRings                       = null;
    protected $useDiversionInhibitorForBlindTransfer     = null;
    protected $useDiversionInhibitorForConsultativeCalls = null;


    /**
     * 
     */
    public function setIsRecallActive($isRecallActive = null)
    {
        $this->isRecallActive = (boolean) $isRecallActive;
    }

    /**
     * 
     */
    public function getIsRecallActive()
    {
        return (!$this->isRecallActive) ?: $this->isRecallActive->getValue();
    }

    /**
     * Number of Rings until a transferred call is recalled.
     */
    public function setRecallNumberOfRings($recallNumberOfRings = null)
    {
        $this->recallNumberOfRings = ($recallNumberOfRings InstanceOf CallTransferRecallNumberOfRings)
             ? $recallNumberOfRings
             : new CallTransferRecallNumberOfRings($recallNumberOfRings);
    }

    /**
     * Number of Rings until a transferred call is recalled.
     */
    public function getRecallNumberOfRings()
    {
        return (!$this->recallNumberOfRings) ?: $this->recallNumberOfRings->getValue();
    }

    /**
     * 
     */
    public function setUseDiversionInhibitorForBlindTransfer($useDiversionInhibitorForBlindTransfer = null)
    {
        $this->useDiversionInhibitorForBlindTransfer = (boolean) $useDiversionInhibitorForBlindTransfer;
    }

    /**
     * 
     */
    public function getUseDiversionInhibitorForBlindTransfer()
    {
        return (!$this->useDiversionInhibitorForBlindTransfer) ?: $this->useDiversionInhibitorForBlindTransfer->getValue();
    }

    /**
     * 
     */
    public function setUseDiversionInhibitorForConsultativeCalls($useDiversionInhibitorForConsultativeCalls = null)
    {
        $this->useDiversionInhibitorForConsultativeCalls = (boolean) $useDiversionInhibitorForConsultativeCalls;
    }

    /**
     * 
     */
    public function getUseDiversionInhibitorForConsultativeCalls()
    {
        return (!$this->useDiversionInhibitorForConsultativeCalls) ?: $this->useDiversionInhibitorForConsultativeCalls->getValue();
    }
}
