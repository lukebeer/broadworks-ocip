<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceCallTransfer; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCallTransfer\CallTransferRecallNumberOfRings;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCallTransfer\CallTransferBusyCampOnSeconds;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceCallTransfer\UserCallTransferGetResponse14sp4;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Response to UserCallTransferGetRequest.
 */
class UserCallTransferGetResponse14sp4 extends ComplexType implements ComplexInterface
{
    public    $name                                      = __CLASS__;
    protected $isRecallActive                            = null;
    protected $recallNumberOfRings                       = null;
    protected $useDiversionInhibitorForBlindTransfer     = null;
    protected $useDiversionInhibitorForConsultativeCalls = null;
    protected $enableBusyCampOn                          = null;
    protected $busyCampOnSeconds                         = null;

    /**
     * @return UserCallTransferGetResponse14sp4
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

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
        return (!$this->isRecallActive) ?: $this->isRecallActive;
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
        return (!$this->useDiversionInhibitorForBlindTransfer) ?: $this->useDiversionInhibitorForBlindTransfer;
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
        return (!$this->useDiversionInhibitorForConsultativeCalls) ?: $this->useDiversionInhibitorForConsultativeCalls;
    }

    /**
     * 
     */
    public function setEnableBusyCampOn($enableBusyCampOn = null)
    {
        $this->enableBusyCampOn = (boolean) $enableBusyCampOn;
    }

    /**
     * 
     */
    public function getEnableBusyCampOn()
    {
        return (!$this->enableBusyCampOn) ?: $this->enableBusyCampOn;
    }

    /**
     * The allotted time for a call to camp on on busy transefer call.
     */
    public function setBusyCampOnSeconds($busyCampOnSeconds = null)
    {
        $this->busyCampOnSeconds = ($busyCampOnSeconds InstanceOf CallTransferBusyCampOnSeconds)
             ? $busyCampOnSeconds
             : new CallTransferBusyCampOnSeconds($busyCampOnSeconds);
    }

    /**
     * The allotted time for a call to camp on on busy transefer call.
     */
    public function getBusyCampOnSeconds()
    {
        return (!$this->busyCampOnSeconds) ?: $this->busyCampOnSeconds->getValue();
    }
}
