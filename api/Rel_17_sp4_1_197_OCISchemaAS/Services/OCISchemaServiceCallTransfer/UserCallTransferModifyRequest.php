<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCallTransfer; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCallTransfer\CallTransferRecallNumberOfRings;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCallTransfer\CallTransferBusyCampOnSeconds;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\UserId;
use Broadworks_OCIP\core\Builder\Types\PrimitiveType;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Modify the user level data associated with Call Transfer.
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class UserCallTransferModifyRequest extends ComplexType implements ComplexInterface
{
    public    $elementName = 'UserCallTransferModifyRequest';
    protected $userId;
    protected $isRecallActive;
    protected $recallNumberOfRings;
    protected $useDiversionInhibitorForBlindTransfer;
    protected $useDiversionInhibitorForConsultativeCalls;
    protected $enableBusyCampOn;
    protected $busyCampOnSeconds;

    public function __construct(
         $userId = '',
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

    /**
     * @return mixed $response
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * 
     */
    public function setUserId($userId = null)
    {
        $this->userId = ($userId InstanceOf UserId)
             ? $userId
             : new UserId($userId);
        $this->userId->setElementName('userId');
        return $this;
    }

    /**
     * 
     * @return UserId $userId
     */
    public function getUserId()
    {
        return ($this->userId)
            ? $this->userId->getElementValue()
            : null;
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

    /**
     * 
     */
    public function setEnableBusyCampOn($enableBusyCampOn = null)
    {
        $this->enableBusyCampOn = new PrimitiveType($enableBusyCampOn);
        $this->enableBusyCampOn->setElementName('enableBusyCampOn');
        return $this;
    }

    /**
     * 
     * @return boolean $enableBusyCampOn
     */
    public function getEnableBusyCampOn()
    {
        return ($this->enableBusyCampOn)
            ? $this->enableBusyCampOn->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setBusyCampOnSeconds($busyCampOnSeconds = null)
    {
        $this->busyCampOnSeconds = ($busyCampOnSeconds InstanceOf CallTransferBusyCampOnSeconds)
             ? $busyCampOnSeconds
             : new CallTransferBusyCampOnSeconds($busyCampOnSeconds);
        $this->busyCampOnSeconds->setElementName('busyCampOnSeconds');
        return $this;
    }

    /**
     * 
     * @return CallTransferBusyCampOnSeconds $busyCampOnSeconds
     */
    public function getBusyCampOnSeconds()
    {
        return ($this->busyCampOnSeconds)
            ? $this->busyCampOnSeconds->getElementValue()
            : null;
    }
}
