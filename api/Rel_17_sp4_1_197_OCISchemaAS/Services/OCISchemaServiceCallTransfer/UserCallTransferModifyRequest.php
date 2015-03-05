<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceCallTransfer; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\UserId;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\xs:boolean;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\CallTransferRecallNumberOfRings;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\CallTransferBusyCampOnSeconds;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Modify the user level data associated with Call Transfer.
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class UserCallTransferModifyRequest extends ComplexType implements ComplexInterface
{
    public    $name = __CLASS__;

    public function __construct(
             $userId,
             $isRecallActive=null,
             $recallNumberOfRings=null,
             $useDiversionInhibitorForBlindTransfer=null,
             $useDiversionInhibitorForConsultativeCalls=null,
             $enableBusyCampOn=null,
             $busyCampOnSeconds=null
    ) {
        $this->userId                                    = new UserId($userId);
        $this->isRecallActive                            = $isRecallActive;
        $this->recallNumberOfRings                       = $recallNumberOfRings;
        $this->useDiversionInhibitorForBlindTransfer     = $useDiversionInhibitorForBlindTransfer;
        $this->useDiversionInhibitorForConsultativeCalls = $useDiversionInhibitorForConsultativeCalls;
        $this->enableBusyCampOn                          = $enableBusyCampOn;
        $this->busyCampOnSeconds                         = $busyCampOnSeconds;
        $this->args                                      = func_get_args();
    }

    public function setUserId($userId)
    {
        $userId and $this->userId = new UserId($userId);
    }

    public function getUserId()
    {
        return (!$this->userId) ?: $this->userId->value();
    }

    public function setIsRecallActive($isRecallActive)
    {
        $isRecallActive and $this->isRecallActive = new xs:boolean($isRecallActive);
    }

    public function getIsRecallActive()
    {
        return (!$this->isRecallActive) ?: $this->isRecallActive->value();
    }

    public function setRecallNumberOfRings($recallNumberOfRings)
    {
        $recallNumberOfRings and $this->recallNumberOfRings = new CallTransferRecallNumberOfRings($recallNumberOfRings);
    }

    public function getRecallNumberOfRings()
    {
        return (!$this->recallNumberOfRings) ?: $this->recallNumberOfRings->value();
    }

    public function setUseDiversionInhibitorForBlindTransfer($useDiversionInhibitorForBlindTransfer)
    {
        $useDiversionInhibitorForBlindTransfer and $this->useDiversionInhibitorForBlindTransfer = new xs:boolean($useDiversionInhibitorForBlindTransfer);
    }

    public function getUseDiversionInhibitorForBlindTransfer()
    {
        return (!$this->useDiversionInhibitorForBlindTransfer) ?: $this->useDiversionInhibitorForBlindTransfer->value();
    }

    public function setUseDiversionInhibitorForConsultativeCalls($useDiversionInhibitorForConsultativeCalls)
    {
        $useDiversionInhibitorForConsultativeCalls and $this->useDiversionInhibitorForConsultativeCalls = new xs:boolean($useDiversionInhibitorForConsultativeCalls);
    }

    public function getUseDiversionInhibitorForConsultativeCalls()
    {
        return (!$this->useDiversionInhibitorForConsultativeCalls) ?: $this->useDiversionInhibitorForConsultativeCalls->value();
    }

    public function setEnableBusyCampOn($enableBusyCampOn)
    {
        $enableBusyCampOn and $this->enableBusyCampOn = new xs:boolean($enableBusyCampOn);
    }

    public function getEnableBusyCampOn()
    {
        return (!$this->enableBusyCampOn) ?: $this->enableBusyCampOn->value();
    }

    public function setBusyCampOnSeconds($busyCampOnSeconds)
    {
        $busyCampOnSeconds and $this->busyCampOnSeconds = new CallTransferBusyCampOnSeconds($busyCampOnSeconds);
    }

    public function getBusyCampOnSeconds()
    {
        return (!$this->busyCampOnSeconds) ?: $this->busyCampOnSeconds->value();
    }
}
