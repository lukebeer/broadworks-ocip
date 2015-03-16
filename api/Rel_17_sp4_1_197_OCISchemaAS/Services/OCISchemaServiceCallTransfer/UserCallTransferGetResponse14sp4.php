<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCallTransfer; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCallTransfer\CallTransferRecallNumberOfRings;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCallTransfer\CallTransferBusyCampOnSeconds;
use Broadworks_OCIP\core\Builder\Types\PrimitiveType;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Response to UserCallTransferGetRequest.
 */
class UserCallTransferGetResponse14sp4 extends ComplexType implements ComplexInterface
{
    public    $name = 'UserCallTransferGetResponse14sp4';
    protected $isRecallActive;
    protected $recallNumberOfRings;
    protected $useDiversionInhibitorForBlindTransfer;
    protected $useDiversionInhibitorForConsultativeCalls;
    protected $enableBusyCampOn;
    protected $busyCampOnSeconds;

    /**
     * @return \Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCallTransfer\UserCallTransferGetResponse14sp4 $response
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
        $this->isRecallActive = new PrimitiveType($isRecallActive);
        $this->isRecallActive->setName('isRecallActive');
        return $this;
    }

    /**
     * 
     * @return boolean $isRecallActive
     */
    public function getIsRecallActive()
    {
        return ($this->isRecallActive) ? $this->isRecallActive->getValue() : null;
    }

    /**
     * 
     */
    public function setRecallNumberOfRings($recallNumberOfRings = null)
    {
        $this->recallNumberOfRings = ($recallNumberOfRings InstanceOf CallTransferRecallNumberOfRings)
             ? $recallNumberOfRings
             : new CallTransferRecallNumberOfRings($recallNumberOfRings);
        $this->recallNumberOfRings->setName('recallNumberOfRings');
        return $this;
    }

    /**
     * 
     * @return CallTransferRecallNumberOfRings $recallNumberOfRings
     */
    public function getRecallNumberOfRings()
    {
        return ($this->recallNumberOfRings) ? $this->recallNumberOfRings->getValue() : null;
    }

    /**
     * 
     */
    public function setUseDiversionInhibitorForBlindTransfer($useDiversionInhibitorForBlindTransfer = null)
    {
        $this->useDiversionInhibitorForBlindTransfer = new PrimitiveType($useDiversionInhibitorForBlindTransfer);
        $this->useDiversionInhibitorForBlindTransfer->setName('useDiversionInhibitorForBlindTransfer');
        return $this;
    }

    /**
     * 
     * @return boolean $useDiversionInhibitorForBlindTransfer
     */
    public function getUseDiversionInhibitorForBlindTransfer()
    {
        return ($this->useDiversionInhibitorForBlindTransfer) ? $this->useDiversionInhibitorForBlindTransfer->getValue() : null;
    }

    /**
     * 
     */
    public function setUseDiversionInhibitorForConsultativeCalls($useDiversionInhibitorForConsultativeCalls = null)
    {
        $this->useDiversionInhibitorForConsultativeCalls = new PrimitiveType($useDiversionInhibitorForConsultativeCalls);
        $this->useDiversionInhibitorForConsultativeCalls->setName('useDiversionInhibitorForConsultativeCalls');
        return $this;
    }

    /**
     * 
     * @return boolean $useDiversionInhibitorForConsultativeCalls
     */
    public function getUseDiversionInhibitorForConsultativeCalls()
    {
        return ($this->useDiversionInhibitorForConsultativeCalls) ? $this->useDiversionInhibitorForConsultativeCalls->getValue() : null;
    }

    /**
     * 
     */
    public function setEnableBusyCampOn($enableBusyCampOn = null)
    {
        $this->enableBusyCampOn = new PrimitiveType($enableBusyCampOn);
        $this->enableBusyCampOn->setName('enableBusyCampOn');
        return $this;
    }

    /**
     * 
     * @return boolean $enableBusyCampOn
     */
    public function getEnableBusyCampOn()
    {
        return ($this->enableBusyCampOn) ? $this->enableBusyCampOn->getValue() : null;
    }

    /**
     * 
     */
    public function setBusyCampOnSeconds($busyCampOnSeconds = null)
    {
        $this->busyCampOnSeconds = ($busyCampOnSeconds InstanceOf CallTransferBusyCampOnSeconds)
             ? $busyCampOnSeconds
             : new CallTransferBusyCampOnSeconds($busyCampOnSeconds);
        $this->busyCampOnSeconds->setName('busyCampOnSeconds');
        return $this;
    }

    /**
     * 
     * @return CallTransferBusyCampOnSeconds $busyCampOnSeconds
     */
    public function getBusyCampOnSeconds()
    {
        return ($this->busyCampOnSeconds) ? $this->busyCampOnSeconds->getValue() : null;
    }
}
