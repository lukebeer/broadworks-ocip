<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceCallTransfer; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCallTransfer\CallTransferRecallNumberOfRings;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCallTransfer\CallTransferBusyCampOnSeconds;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\UserId;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Modify the user level data associated with Call Transfer.
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class UserCallTransferModifyRequest extends ComplexType implements ComplexInterface
{
    public    $name                                       = __CLASS__;
    protected $userId                                     = null;
    protected $isRecallActive                             = null;
    protected $recallNumberOfRings                        = null;
    protected $useDiversionInhibitorForBlindTransfer      = null;
    protected $useDiversionInhibitorForConsultativeCalls  = null;
    protected $enableBusyCampOn                           = null;
    protected $busyCampOnSeconds                          = null;

    public function __construct(
         $userId,
         $isRecallActive = null,
         $recallNumberOfRings = null,
         $useDiversionInhibitorForBlindTransfer = null,
         $useDiversionInhibitorForConsultativeCalls = null,
         $enableBusyCampOn = null,
         $busyCampOnSeconds = null
    ) {
        $this->setUserId($userId);
        $this->setIsRecallActive($isRecallActive);
        $this->setRecallNumberOfRings($recallNumberOfRings);
        $this->setUseDiversionInhibitorForBlindTransfer($useDiversionInhibitorForBlindTransfer);
        $this->setUseDiversionInhibitorForConsultativeCalls($useDiversionInhibitorForConsultativeCalls);
        $this->setEnableBusyCampOn($enableBusyCampOn);
        $this->setBusyCampOnSeconds($busyCampOnSeconds);
    }

    public function setUserId($userId = null)
    {
        $this->userId = ($userId InstanceOf UserId)
             ? $userId
             : new UserId($userId);
    }

    public function getUserId()
    {
        return (!$this->userId) ?: $this->userId->value();
    }

    public function setIsRecallActive(xs:boolean $isRecallActive = null)
    {
    }

    public function getIsRecallActive()
    {
        return (!$this->isRecallActive) ?: $this->isRecallActive->value();
    }

    public function setRecallNumberOfRings($recallNumberOfRings = null)
    {
        $this->recallNumberOfRings = ($recallNumberOfRings InstanceOf CallTransferRecallNumberOfRings)
             ? $recallNumberOfRings
             : new CallTransferRecallNumberOfRings($recallNumberOfRings);
    }

    public function getRecallNumberOfRings()
    {
        return (!$this->recallNumberOfRings) ?: $this->recallNumberOfRings->value();
    }

    public function setUseDiversionInhibitorForBlindTransfer(xs:boolean $useDiversionInhibitorForBlindTransfer = null)
    {
    }

    public function getUseDiversionInhibitorForBlindTransfer()
    {
        return (!$this->useDiversionInhibitorForBlindTransfer) ?: $this->useDiversionInhibitorForBlindTransfer->value();
    }

    public function setUseDiversionInhibitorForConsultativeCalls(xs:boolean $useDiversionInhibitorForConsultativeCalls = null)
    {
    }

    public function getUseDiversionInhibitorForConsultativeCalls()
    {
        return (!$this->useDiversionInhibitorForConsultativeCalls) ?: $this->useDiversionInhibitorForConsultativeCalls->value();
    }

    public function setEnableBusyCampOn(xs:boolean $enableBusyCampOn = null)
    {
    }

    public function getEnableBusyCampOn()
    {
        return (!$this->enableBusyCampOn) ?: $this->enableBusyCampOn->value();
    }

    public function setBusyCampOnSeconds($busyCampOnSeconds = null)
    {
        $this->busyCampOnSeconds = ($busyCampOnSeconds InstanceOf CallTransferBusyCampOnSeconds)
             ? $busyCampOnSeconds
             : new CallTransferBusyCampOnSeconds($busyCampOnSeconds);
    }

    public function getBusyCampOnSeconds()
    {
        return (!$this->busyCampOnSeconds) ?: $this->busyCampOnSeconds->value();
    }
}
