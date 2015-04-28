<?php
/**
 * This file is part of http://github.com/LukeBeer/BroadworksOCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated16; 

use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\OutgoingDNorSIPURI;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\HuntNoAnswerRings;
use BroadworksOCIP\Builder\Types\PrimitiveType;
use BroadworksOCIP\Builder\Types\ComplexInterface;
use BroadworksOCIP\Builder\Types\ComplexType;
use BroadworksOCIP\Response\ResponseOutput;
use BroadworksOCIP\Client\Client;


/**
 * Response to the GroupCallCenterBouncedCallGetRequest.
 */
class GroupCallCenterBouncedCallGetResponse extends ComplexType implements ComplexInterface
{
    public    $elementName = 'GroupCallCenterBouncedCallGetResponse';
    protected $isActive;
    protected $numberOfRingsBeforeBouncingCall;
    protected $enableTransfer;
    protected $transferPhoneNumber;
    protected $bounceCallWhenAgentUnavailable;

    /**
     * @return \BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated16\GroupCallCenterBouncedCallGetResponse $response
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
}
