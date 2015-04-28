<?php
/**
 * This file is part of http://github.com/LukeBeer/BroadworksOCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated14; 

use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCallTransfer\CallTransferRecallNumberOfRings;
use BroadworksOCIP\Builder\Types\PrimitiveType;
use BroadworksOCIP\Builder\Types\ComplexInterface;
use BroadworksOCIP\Builder\Types\ComplexType;
use BroadworksOCIP\Response\ResponseOutput;
use BroadworksOCIP\Client\Client;


/**
 * Response to UserCallTransferGetRequest.
 */
class UserCallTransferGetResponse extends ComplexType implements ComplexInterface
{
    public    $elementName = 'UserCallTransferGetResponse';
    protected $isRecallActive;
    protected $recallNumberOfRings;
    protected $useDiversionInhibitorForBlindTransfer;
    protected $useDiversionInhibitorForConsultativeCalls;

    /**
     * @return \BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated14\UserCallTransferGetResponse $response
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
        $this->isRecallActive->setElementName('isRecallActive');
        return $this;
    }

    /**
     * 
     * @return boolean $isRecallActive
     */
    public function getIsRecallActive()
    {
        return ($this->isRecallActive)
            ? $this->isRecallActive->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setRecallNumberOfRings($recallNumberOfRings = null)
    {
        $this->recallNumberOfRings = ($recallNumberOfRings InstanceOf CallTransferRecallNumberOfRings)
             ? $recallNumberOfRings
             : new CallTransferRecallNumberOfRings($recallNumberOfRings);
        $this->recallNumberOfRings->setElementName('recallNumberOfRings');
        return $this;
    }

    /**
     * 
     * @return CallTransferRecallNumberOfRings $recallNumberOfRings
     */
    public function getRecallNumberOfRings()
    {
        return ($this->recallNumberOfRings)
            ? $this->recallNumberOfRings->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setUseDiversionInhibitorForBlindTransfer($useDiversionInhibitorForBlindTransfer = null)
    {
        $this->useDiversionInhibitorForBlindTransfer = new PrimitiveType($useDiversionInhibitorForBlindTransfer);
        $this->useDiversionInhibitorForBlindTransfer->setElementName('useDiversionInhibitorForBlindTransfer');
        return $this;
    }

    /**
     * 
     * @return boolean $useDiversionInhibitorForBlindTransfer
     */
    public function getUseDiversionInhibitorForBlindTransfer()
    {
        return ($this->useDiversionInhibitorForBlindTransfer)
            ? $this->useDiversionInhibitorForBlindTransfer->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setUseDiversionInhibitorForConsultativeCalls($useDiversionInhibitorForConsultativeCalls = null)
    {
        $this->useDiversionInhibitorForConsultativeCalls = new PrimitiveType($useDiversionInhibitorForConsultativeCalls);
        $this->useDiversionInhibitorForConsultativeCalls->setElementName('useDiversionInhibitorForConsultativeCalls');
        return $this;
    }

    /**
     * 
     * @return boolean $useDiversionInhibitorForConsultativeCalls
     */
    public function getUseDiversionInhibitorForConsultativeCalls()
    {
        return ($this->useDiversionInhibitorForConsultativeCalls)
            ? $this->useDiversionInhibitorForConsultativeCalls->getElementValue()
            : null;
    }
}
