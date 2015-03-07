<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceCallCenter; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCallCenter\BounceCallCenterCallOnHoldSeconds;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCallCenter\AlertCallCenterCallOnHoldSeconds;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\OutgoingDNorSIPURI;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\HuntNoAnswerRings;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Response to the GroupCallCenterBouncedCallGetRequest17.
 */
class GroupCallCenterBouncedCallGetResponse17 extends ComplexType implements ComplexInterface
{
    public    $name                               = __CLASS__;
    protected $isActive                           = null;
    protected $numberOfRingsBeforeBouncingCall    = null;
    protected $enableTransfer                     = null;
    protected $transferPhoneNumber                = null;
    protected $bounceCallWhenAgentUnavailable     = null;
    protected $alertCallCenterCallOnHold          = null;
    protected $alertCallCenterCallOnHoldSeconds   = null;
    protected $bounceCallCenterCallOnHold         = null;
    protected $bounceCallCenterCallOnHoldSeconds  = null;


    public function setIsActive(xs:boolean $isActive = null)
    {
    }

    public function getIsActive()
    {
        return (!$this->isActive) ?: $this->isActive->value();
    }

    public function setNumberOfRingsBeforeBouncingCall($numberOfRingsBeforeBouncingCall = null)
    {
        $this->numberOfRingsBeforeBouncingCall = ($numberOfRingsBeforeBouncingCall InstanceOf HuntNoAnswerRings)
             ? $numberOfRingsBeforeBouncingCall
             : new HuntNoAnswerRings($numberOfRingsBeforeBouncingCall);
    }

    public function getNumberOfRingsBeforeBouncingCall()
    {
        return (!$this->numberOfRingsBeforeBouncingCall) ?: $this->numberOfRingsBeforeBouncingCall->value();
    }

    public function setEnableTransfer(xs:boolean $enableTransfer = null)
    {
    }

    public function getEnableTransfer()
    {
        return (!$this->enableTransfer) ?: $this->enableTransfer->value();
    }

    public function setTransferPhoneNumber($transferPhoneNumber = null)
    {
        $this->transferPhoneNumber = ($transferPhoneNumber InstanceOf OutgoingDNorSIPURI)
             ? $transferPhoneNumber
             : new OutgoingDNorSIPURI($transferPhoneNumber);
    }

    public function getTransferPhoneNumber()
    {
        return (!$this->transferPhoneNumber) ?: $this->transferPhoneNumber->value();
    }

    public function setBounceCallWhenAgentUnavailable(xs:boolean $bounceCallWhenAgentUnavailable = null)
    {
    }

    public function getBounceCallWhenAgentUnavailable()
    {
        return (!$this->bounceCallWhenAgentUnavailable) ?: $this->bounceCallWhenAgentUnavailable->value();
    }

    public function setAlertCallCenterCallOnHold(xs:boolean $alertCallCenterCallOnHold = null)
    {
    }

    public function getAlertCallCenterCallOnHold()
    {
        return (!$this->alertCallCenterCallOnHold) ?: $this->alertCallCenterCallOnHold->value();
    }

    public function setAlertCallCenterCallOnHoldSeconds($alertCallCenterCallOnHoldSeconds = null)
    {
        $this->alertCallCenterCallOnHoldSeconds = ($alertCallCenterCallOnHoldSeconds InstanceOf AlertCallCenterCallOnHoldSeconds)
             ? $alertCallCenterCallOnHoldSeconds
             : new AlertCallCenterCallOnHoldSeconds($alertCallCenterCallOnHoldSeconds);
    }

    public function getAlertCallCenterCallOnHoldSeconds()
    {
        return (!$this->alertCallCenterCallOnHoldSeconds) ?: $this->alertCallCenterCallOnHoldSeconds->value();
    }

    public function setBounceCallCenterCallOnHold(xs:boolean $bounceCallCenterCallOnHold = null)
    {
    }

    public function getBounceCallCenterCallOnHold()
    {
        return (!$this->bounceCallCenterCallOnHold) ?: $this->bounceCallCenterCallOnHold->value();
    }

    public function setBounceCallCenterCallOnHoldSeconds($bounceCallCenterCallOnHoldSeconds = null)
    {
        $this->bounceCallCenterCallOnHoldSeconds = ($bounceCallCenterCallOnHoldSeconds InstanceOf BounceCallCenterCallOnHoldSeconds)
             ? $bounceCallCenterCallOnHoldSeconds
             : new BounceCallCenterCallOnHoldSeconds($bounceCallCenterCallOnHoldSeconds);
    }

    public function getBounceCallCenterCallOnHoldSeconds()
    {
        return (!$this->bounceCallCenterCallOnHoldSeconds) ?: $this->bounceCallCenterCallOnHoldSeconds->value();
    }
}
