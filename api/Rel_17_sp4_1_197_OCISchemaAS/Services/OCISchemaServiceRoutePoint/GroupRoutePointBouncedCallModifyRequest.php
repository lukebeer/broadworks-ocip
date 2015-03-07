<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceRoutePoint; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\OutgoingDNorSIPURI;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\HuntNoAnswerRings;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\UserId;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Modify a route point's bounced call settings.
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class GroupRoutePointBouncedCallModifyRequest extends ComplexType implements ComplexInterface
{
    public    $name                             = __CLASS__;
    protected $serviceUserId                    = null;
    protected $isActive                         = null;
    protected $numberOfRingsBeforeBouncingCall  = null;
    protected $enableTransfer                   = null;
    protected $transferPhoneNumber              = null;
    protected $bounceCallWhenAgentUnavailable   = null;

    public function __construct(
         $serviceUserId,
         $isActive = null,
         $numberOfRingsBeforeBouncingCall = null,
         $enableTransfer = null,
         $transferPhoneNumber = null,
         $bounceCallWhenAgentUnavailable = null
    ) {
        $this->setServiceUserId($serviceUserId);
        $this->setIsActive($isActive);
        $this->setNumberOfRingsBeforeBouncingCall($numberOfRingsBeforeBouncingCall);
        $this->setEnableTransfer($enableTransfer);
        $this->setTransferPhoneNumber($transferPhoneNumber);
        $this->setBounceCallWhenAgentUnavailable($bounceCallWhenAgentUnavailable);
    }

    public function setServiceUserId($serviceUserId = null)
    {
        $this->serviceUserId = ($serviceUserId InstanceOf UserId)
             ? $serviceUserId
             : new UserId($serviceUserId);
    }

    public function getServiceUserId()
    {
        return (!$this->serviceUserId) ?: $this->serviceUserId->value();
    }

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
}
