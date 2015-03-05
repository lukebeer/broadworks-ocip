<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceCallCenter; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\xs:boolean;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\HuntNoAnswerRings;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\OutgoingDNorSIPURI;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\AlertCallCenterCallOnHoldSeconds;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\BounceCallCenterCallOnHoldSeconds;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Response to the GroupCallCenterBouncedCallGetRequest17.
 */
class GroupCallCenterBouncedCallGetResponse17 extends ComplexType implements ComplexInterface
{
    public    $name = __CLASS__;

    public function __construct(
             $isActive,
             $numberOfRingsBeforeBouncingCall,
             $enableTransfer=null,
             $transferPhoneNumber=null,
             $bounceCallWhenAgentUnavailable,
             $alertCallCenterCallOnHold,
             $alertCallCenterCallOnHoldSeconds,
             $bounceCallCenterCallOnHold,
             $bounceCallCenterCallOnHoldSeconds
    ) {
        $this->isActive                          = $isActive;
        $this->numberOfRingsBeforeBouncingCall   = new HuntNoAnswerRings($numberOfRingsBeforeBouncingCall);
        $this->enableTransfer                    = $enableTransfer;
        $this->transferPhoneNumber               = new OutgoingDNorSIPURI($transferPhoneNumber);
        $this->bounceCallWhenAgentUnavailable    = $bounceCallWhenAgentUnavailable;
        $this->alertCallCenterCallOnHold         = $alertCallCenterCallOnHold;
        $this->alertCallCenterCallOnHoldSeconds  = $alertCallCenterCallOnHoldSeconds;
        $this->bounceCallCenterCallOnHold        = $bounceCallCenterCallOnHold;
        $this->bounceCallCenterCallOnHoldSeconds = $bounceCallCenterCallOnHoldSeconds;
        $this->args                              = func_get_args();
    }

    public function setIsActive($isActive)
    {
        $isActive and $this->isActive = new xs:boolean($isActive);
    }

    public function getIsActive()
    {
        return (!$this->isActive) ?: $this->isActive->value();
    }

    public function setNumberOfRingsBeforeBouncingCall($numberOfRingsBeforeBouncingCall)
    {
        $numberOfRingsBeforeBouncingCall and $this->numberOfRingsBeforeBouncingCall = new HuntNoAnswerRings($numberOfRingsBeforeBouncingCall);
    }

    public function getNumberOfRingsBeforeBouncingCall()
    {
        return (!$this->numberOfRingsBeforeBouncingCall) ?: $this->numberOfRingsBeforeBouncingCall->value();
    }

    public function setEnableTransfer($enableTransfer)
    {
        $enableTransfer and $this->enableTransfer = new xs:boolean($enableTransfer);
    }

    public function getEnableTransfer()
    {
        return (!$this->enableTransfer) ?: $this->enableTransfer->value();
    }

    public function setTransferPhoneNumber($transferPhoneNumber)
    {
        $transferPhoneNumber and $this->transferPhoneNumber = new OutgoingDNorSIPURI($transferPhoneNumber);
    }

    public function getTransferPhoneNumber()
    {
        return (!$this->transferPhoneNumber) ?: $this->transferPhoneNumber->value();
    }

    public function setBounceCallWhenAgentUnavailable($bounceCallWhenAgentUnavailable)
    {
        $bounceCallWhenAgentUnavailable and $this->bounceCallWhenAgentUnavailable = new xs:boolean($bounceCallWhenAgentUnavailable);
    }

    public function getBounceCallWhenAgentUnavailable()
    {
        return (!$this->bounceCallWhenAgentUnavailable) ?: $this->bounceCallWhenAgentUnavailable->value();
    }

    public function setAlertCallCenterCallOnHold($alertCallCenterCallOnHold)
    {
        $alertCallCenterCallOnHold and $this->alertCallCenterCallOnHold = new xs:boolean($alertCallCenterCallOnHold);
    }

    public function getAlertCallCenterCallOnHold()
    {
        return (!$this->alertCallCenterCallOnHold) ?: $this->alertCallCenterCallOnHold->value();
    }

    public function setAlertCallCenterCallOnHoldSeconds($alertCallCenterCallOnHoldSeconds)
    {
        $alertCallCenterCallOnHoldSeconds and $this->alertCallCenterCallOnHoldSeconds = new AlertCallCenterCallOnHoldSeconds($alertCallCenterCallOnHoldSeconds);
    }

    public function getAlertCallCenterCallOnHoldSeconds()
    {
        return (!$this->alertCallCenterCallOnHoldSeconds) ?: $this->alertCallCenterCallOnHoldSeconds->value();
    }

    public function setBounceCallCenterCallOnHold($bounceCallCenterCallOnHold)
    {
        $bounceCallCenterCallOnHold and $this->bounceCallCenterCallOnHold = new xs:boolean($bounceCallCenterCallOnHold);
    }

    public function getBounceCallCenterCallOnHold()
    {
        return (!$this->bounceCallCenterCallOnHold) ?: $this->bounceCallCenterCallOnHold->value();
    }

    public function setBounceCallCenterCallOnHoldSeconds($bounceCallCenterCallOnHoldSeconds)
    {
        $bounceCallCenterCallOnHoldSeconds and $this->bounceCallCenterCallOnHoldSeconds = new BounceCallCenterCallOnHoldSeconds($bounceCallCenterCallOnHoldSeconds);
    }

    public function getBounceCallCenterCallOnHoldSeconds()
    {
        return (!$this->bounceCallCenterCallOnHoldSeconds) ?: $this->bounceCallCenterCallOnHoldSeconds->value();
    }
}
