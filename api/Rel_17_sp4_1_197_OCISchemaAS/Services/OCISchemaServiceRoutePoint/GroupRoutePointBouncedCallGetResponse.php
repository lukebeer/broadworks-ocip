<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceRoutePoint; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\OutgoingDNorSIPURI;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\HuntNoAnswerRings;
use Broadworks_OCIP\core\Builder\Types\PrimitiveType;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Response to the GroupRoutePointBouncedCallGetRequest.
 */
class GroupRoutePointBouncedCallGetResponse extends ComplexType implements ComplexInterface
{
    public    $name = 'GroupRoutePointBouncedCallGetResponse';
    protected $isActive;
    protected $numberOfRingsBeforeBouncingCall;
    protected $enableTransfer;
    protected $transferPhoneNumber;
    protected $bounceCallWhenAgentUnavailable;

    /**
     * @return \Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceRoutePoint\GroupRoutePointBouncedCallGetResponse $response
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
        $this->isActive->setName('isActive');
        return $this;
    }

    /**
     * 
     * @return boolean $isActive
     */
    public function getIsActive()
    {
        return ($this->isActive) ? $this->isActive->getValue() : null;
    }

    /**
     * 
     */
    public function setNumberOfRingsBeforeBouncingCall($numberOfRingsBeforeBouncingCall = null)
    {
        $this->numberOfRingsBeforeBouncingCall = ($numberOfRingsBeforeBouncingCall InstanceOf HuntNoAnswerRings)
             ? $numberOfRingsBeforeBouncingCall
             : new HuntNoAnswerRings($numberOfRingsBeforeBouncingCall);
        $this->numberOfRingsBeforeBouncingCall->setName('numberOfRingsBeforeBouncingCall');
        return $this;
    }

    /**
     * 
     * @return HuntNoAnswerRings $numberOfRingsBeforeBouncingCall
     */
    public function getNumberOfRingsBeforeBouncingCall()
    {
        return ($this->numberOfRingsBeforeBouncingCall) ? $this->numberOfRingsBeforeBouncingCall->getValue() : null;
    }

    /**
     * 
     */
    public function setEnableTransfer($enableTransfer = null)
    {
        $this->enableTransfer = new PrimitiveType($enableTransfer);
        $this->enableTransfer->setName('enableTransfer');
        return $this;
    }

    /**
     * 
     * @return boolean $enableTransfer
     */
    public function getEnableTransfer()
    {
        return ($this->enableTransfer) ? $this->enableTransfer->getValue() : null;
    }

    /**
     * 
     */
    public function setTransferPhoneNumber($transferPhoneNumber = null)
    {
        $this->transferPhoneNumber = ($transferPhoneNumber InstanceOf OutgoingDNorSIPURI)
             ? $transferPhoneNumber
             : new OutgoingDNorSIPURI($transferPhoneNumber);
        $this->transferPhoneNumber->setName('transferPhoneNumber');
        return $this;
    }

    /**
     * 
     * @return OutgoingDNorSIPURI $transferPhoneNumber
     */
    public function getTransferPhoneNumber()
    {
        return ($this->transferPhoneNumber) ? $this->transferPhoneNumber->getValue() : null;
    }

    /**
     * 
     */
    public function setBounceCallWhenAgentUnavailable($bounceCallWhenAgentUnavailable = null)
    {
        $this->bounceCallWhenAgentUnavailable = new PrimitiveType($bounceCallWhenAgentUnavailable);
        $this->bounceCallWhenAgentUnavailable->setName('bounceCallWhenAgentUnavailable');
        return $this;
    }

    /**
     * 
     * @return boolean $bounceCallWhenAgentUnavailable
     */
    public function getBounceCallWhenAgentUnavailable()
    {
        return ($this->bounceCallWhenAgentUnavailable) ? $this->bounceCallWhenAgentUnavailable->getValue() : null;
    }
}
