<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCallCenter; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCallCenter\BounceCallCenterCallOnHoldSeconds;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCallCenter\AlertCallCenterCallOnHoldSeconds;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\OutgoingDNorSIPURI;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\HuntNoAnswerRings;
use Broadworks_OCIP\core\Builder\Types\PrimitiveType;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Response to the GroupCallCenterBouncedCallGetRequest17.
 */
class GroupCallCenterBouncedCallGetResponse17 extends ComplexType implements ComplexInterface
{
    public    $elementName = 'GroupCallCenterBouncedCallGetResponse17';
    protected $isActive;
    protected $numberOfRingsBeforeBouncingCall;
    protected $enableTransfer;
    protected $transferPhoneNumber;
    protected $bounceCallWhenAgentUnavailable;
    protected $alertCallCenterCallOnHold;
    protected $alertCallCenterCallOnHoldSeconds;
    protected $bounceCallCenterCallOnHold;
    protected $bounceCallCenterCallOnHoldSeconds;

    /**
     * @return \Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCallCenter\GroupCallCenterBouncedCallGetResponse17 $response
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * 
     */
    public function setIsActive($isActive = null)
    {
        $this->isActive = new PrimitiveType($isActive);
        $this->isActive->setElementName('isActive');
        return $this;
    }

    /**
     * 
     * @return boolean $isActive
     */
    public function getIsActive()
    {
        return ($this->isActive)
            ? $this->isActive->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setNumberOfRingsBeforeBouncingCall($numberOfRingsBeforeBouncingCall = null)
    {
        $this->numberOfRingsBeforeBouncingCall = ($numberOfRingsBeforeBouncingCall InstanceOf HuntNoAnswerRings)
             ? $numberOfRingsBeforeBouncingCall
             : new HuntNoAnswerRings($numberOfRingsBeforeBouncingCall);
        $this->numberOfRingsBeforeBouncingCall->setElementName('numberOfRingsBeforeBouncingCall');
        return $this;
    }

    /**
     * 
     * @return HuntNoAnswerRings $numberOfRingsBeforeBouncingCall
     */
    public function getNumberOfRingsBeforeBouncingCall()
    {
        return ($this->numberOfRingsBeforeBouncingCall)
            ? $this->numberOfRingsBeforeBouncingCall->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setEnableTransfer($enableTransfer = null)
    {
        $this->enableTransfer = new PrimitiveType($enableTransfer);
        $this->enableTransfer->setElementName('enableTransfer');
        return $this;
    }

    /**
     * 
     * @return boolean $enableTransfer
     */
    public function getEnableTransfer()
    {
        return ($this->enableTransfer)
            ? $this->enableTransfer->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setTransferPhoneNumber($transferPhoneNumber = null)
    {
        $this->transferPhoneNumber = ($transferPhoneNumber InstanceOf OutgoingDNorSIPURI)
             ? $transferPhoneNumber
             : new OutgoingDNorSIPURI($transferPhoneNumber);
        $this->transferPhoneNumber->setElementName('transferPhoneNumber');
        return $this;
    }

    /**
     * 
     * @return OutgoingDNorSIPURI $transferPhoneNumber
     */
    public function getTransferPhoneNumber()
    {
        return ($this->transferPhoneNumber)
            ? $this->transferPhoneNumber->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setBounceCallWhenAgentUnavailable($bounceCallWhenAgentUnavailable = null)
    {
        $this->bounceCallWhenAgentUnavailable = new PrimitiveType($bounceCallWhenAgentUnavailable);
        $this->bounceCallWhenAgentUnavailable->setElementName('bounceCallWhenAgentUnavailable');
        return $this;
    }

    /**
     * 
     * @return boolean $bounceCallWhenAgentUnavailable
     */
    public function getBounceCallWhenAgentUnavailable()
    {
        return ($this->bounceCallWhenAgentUnavailable)
            ? $this->bounceCallWhenAgentUnavailable->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setAlertCallCenterCallOnHold($alertCallCenterCallOnHold = null)
    {
        $this->alertCallCenterCallOnHold = new PrimitiveType($alertCallCenterCallOnHold);
        $this->alertCallCenterCallOnHold->setElementName('alertCallCenterCallOnHold');
        return $this;
    }

    /**
     * 
     * @return boolean $alertCallCenterCallOnHold
     */
    public function getAlertCallCenterCallOnHold()
    {
        return ($this->alertCallCenterCallOnHold)
            ? $this->alertCallCenterCallOnHold->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setAlertCallCenterCallOnHoldSeconds($alertCallCenterCallOnHoldSeconds = null)
    {
        $this->alertCallCenterCallOnHoldSeconds = ($alertCallCenterCallOnHoldSeconds InstanceOf AlertCallCenterCallOnHoldSeconds)
             ? $alertCallCenterCallOnHoldSeconds
             : new AlertCallCenterCallOnHoldSeconds($alertCallCenterCallOnHoldSeconds);
        $this->alertCallCenterCallOnHoldSeconds->setElementName('alertCallCenterCallOnHoldSeconds');
        return $this;
    }

    /**
     * 
     * @return AlertCallCenterCallOnHoldSeconds $alertCallCenterCallOnHoldSeconds
     */
    public function getAlertCallCenterCallOnHoldSeconds()
    {
        return ($this->alertCallCenterCallOnHoldSeconds)
            ? $this->alertCallCenterCallOnHoldSeconds->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setBounceCallCenterCallOnHold($bounceCallCenterCallOnHold = null)
    {
        $this->bounceCallCenterCallOnHold = new PrimitiveType($bounceCallCenterCallOnHold);
        $this->bounceCallCenterCallOnHold->setElementName('bounceCallCenterCallOnHold');
        return $this;
    }

    /**
     * 
     * @return boolean $bounceCallCenterCallOnHold
     */
    public function getBounceCallCenterCallOnHold()
    {
        return ($this->bounceCallCenterCallOnHold)
            ? $this->bounceCallCenterCallOnHold->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setBounceCallCenterCallOnHoldSeconds($bounceCallCenterCallOnHoldSeconds = null)
    {
        $this->bounceCallCenterCallOnHoldSeconds = ($bounceCallCenterCallOnHoldSeconds InstanceOf BounceCallCenterCallOnHoldSeconds)
             ? $bounceCallCenterCallOnHoldSeconds
             : new BounceCallCenterCallOnHoldSeconds($bounceCallCenterCallOnHoldSeconds);
        $this->bounceCallCenterCallOnHoldSeconds->setElementName('bounceCallCenterCallOnHoldSeconds');
        return $this;
    }

    /**
     * 
     * @return BounceCallCenterCallOnHoldSeconds $bounceCallCenterCallOnHoldSeconds
     */
    public function getBounceCallCenterCallOnHoldSeconds()
    {
        return ($this->bounceCallCenterCallOnHoldSeconds)
            ? $this->bounceCallCenterCallOnHoldSeconds->getElementValue()
            : null;
    }
}
