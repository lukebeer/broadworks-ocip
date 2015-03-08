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
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\UserId;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
     * Modify a call center's bounced call settings.
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class GroupCallCenterBouncedCallModifyRequest extends ComplexType implements ComplexInterface
{
    public    $name                              = __CLASS__;
    protected $serviceUserId                     = null;
    protected $isActive                          = null;
    protected $numberOfRingsBeforeBouncingCall   = null;
    protected $enableTransfer                    = null;
    protected $transferPhoneNumber               = null;
    protected $bounceCallWhenAgentUnavailable    = null;
    protected $alertCallCenterCallOnHold         = null;
    protected $alertCallCenterCallOnHoldSeconds  = null;
    protected $bounceCallCenterCallOnHold        = null;
    protected $bounceCallCenterCallOnHoldSeconds = null;

    public function __construct(
         $serviceUserId,
         $isActive = null,
         $numberOfRingsBeforeBouncingCall = null,
         $enableTransfer = null,
         $transferPhoneNumber = null,
         $bounceCallWhenAgentUnavailable = null,
         $alertCallCenterCallOnHold = null,
         $alertCallCenterCallOnHoldSeconds = null,
         $bounceCallCenterCallOnHold = null,
         $bounceCallCenterCallOnHoldSeconds = null
    ) {
        $this->setServiceUserId($serviceUserId);
        $this->setIsActive($isActive);
        $this->setNumberOfRingsBeforeBouncingCall($numberOfRingsBeforeBouncingCall);
        $this->setEnableTransfer($enableTransfer);
        $this->setTransferPhoneNumber($transferPhoneNumber);
        $this->setBounceCallWhenAgentUnavailable($bounceCallWhenAgentUnavailable);
        $this->setAlertCallCenterCallOnHold($alertCallCenterCallOnHold);
        $this->setAlertCallCenterCallOnHoldSeconds($alertCallCenterCallOnHoldSeconds);
        $this->setBounceCallCenterCallOnHold($bounceCallCenterCallOnHold);
        $this->setBounceCallCenterCallOnHoldSeconds($bounceCallCenterCallOnHoldSeconds);
    }

    /**
     * A user id consists of a user-portion optionally followed by an @ sign and a domain name.
     *         If the domain is not specified, it is assumed to be the system default domain.
     *         The domain is required when adding normal users and virtual users, i.e. Auto Attendants,
     *         Hunt Groups, Call Centers....
     *         The domain must not be specified for system-level and service-provider-level administrators.
     */
    public function setServiceUserId($serviceUserId = null)
    {
        $this->serviceUserId = ($serviceUserId InstanceOf UserId)
             ? $serviceUserId
             : new UserId($serviceUserId);
    }

    /**
     * A user id consists of a user-portion optionally followed by an @ sign and a domain name.
     *         If the domain is not specified, it is assumed to be the system default domain.
     *         The domain is required when adding normal users and virtual users, i.e. Auto Attendants,
     *         Hunt Groups, Call Centers....
     *         The domain must not be specified for system-level and service-provider-level administrators.
     */
    public function getServiceUserId()
    {
        return (!$this->serviceUserId) ?: $this->serviceUserId->getValue();
    }

    /**
     * 
     */
    public function setIsActive($isActive = null)
    {
        $this->isActive = (boolean) $isActive;
    }

    /**
     * 
     */
    public function getIsActive()
    {
        return (!$this->isActive) ?: $this->isActive->getValue();
    }

    /**
     * Number of rings to wait for the currently hunted agent to answer before
     *         hunting to the next available agent.
     */
    public function setNumberOfRingsBeforeBouncingCall($numberOfRingsBeforeBouncingCall = null)
    {
        $this->numberOfRingsBeforeBouncingCall = ($numberOfRingsBeforeBouncingCall InstanceOf HuntNoAnswerRings)
             ? $numberOfRingsBeforeBouncingCall
             : new HuntNoAnswerRings($numberOfRingsBeforeBouncingCall);
    }

    /**
     * Number of rings to wait for the currently hunted agent to answer before
     *         hunting to the next available agent.
     */
    public function getNumberOfRingsBeforeBouncingCall()
    {
        return (!$this->numberOfRingsBeforeBouncingCall) ?: $this->numberOfRingsBeforeBouncingCall->getValue();
    }

    /**
     * 
     */
    public function setEnableTransfer($enableTransfer = null)
    {
        $this->enableTransfer = (boolean) $enableTransfer;
    }

    /**
     * 
     */
    public function getEnableTransfer()
    {
        return (!$this->enableTransfer) ?: $this->enableTransfer->getValue();
    }

    /**
     * Phone Number or SIP URI that can be used to dial.
     *         URI Validation:
     *         - must be of the format string@string where string is at least one valid character and there is one and only one @.
     *         - don't allow sip:
     *         - allow the following characters in the user portions:
     *           alphanumeric   -   _   .   !   ~   *   '   (   )
     *         - allow the following characters in the host portion:
     *           alphanumeric   -   .
     */
    public function setTransferPhoneNumber($transferPhoneNumber = null)
    {
        $this->transferPhoneNumber = ($transferPhoneNumber InstanceOf OutgoingDNorSIPURI)
             ? $transferPhoneNumber
             : new OutgoingDNorSIPURI($transferPhoneNumber);
    }

    /**
     * Phone Number or SIP URI that can be used to dial.
     *         URI Validation:
     *         - must be of the format string@string where string is at least one valid character and there is one and only one @.
     *         - don't allow sip:
     *         - allow the following characters in the user portions:
     *           alphanumeric   -   _   .   !   ~   *   '   (   )
     *         - allow the following characters in the host portion:
     *           alphanumeric   -   .
     */
    public function getTransferPhoneNumber()
    {
        return (!$this->transferPhoneNumber) ?: $this->transferPhoneNumber->getValue();
    }

    /**
     * 
     */
    public function setBounceCallWhenAgentUnavailable($bounceCallWhenAgentUnavailable = null)
    {
        $this->bounceCallWhenAgentUnavailable = (boolean) $bounceCallWhenAgentUnavailable;
    }

    /**
     * 
     */
    public function getBounceCallWhenAgentUnavailable()
    {
        return (!$this->bounceCallWhenAgentUnavailable) ?: $this->bounceCallWhenAgentUnavailable->getValue();
    }

    /**
     * 
     */
    public function setAlertCallCenterCallOnHold($alertCallCenterCallOnHold = null)
    {
        $this->alertCallCenterCallOnHold = (boolean) $alertCallCenterCallOnHold;
    }

    /**
     * 
     */
    public function getAlertCallCenterCallOnHold()
    {
        return (!$this->alertCallCenterCallOnHold) ?: $this->alertCallCenterCallOnHold->getValue();
    }

    /**
     * Timer to alert CallCenter calls on hold
     */
    public function setAlertCallCenterCallOnHoldSeconds($alertCallCenterCallOnHoldSeconds = null)
    {
        $this->alertCallCenterCallOnHoldSeconds = ($alertCallCenterCallOnHoldSeconds InstanceOf AlertCallCenterCallOnHoldSeconds)
             ? $alertCallCenterCallOnHoldSeconds
             : new AlertCallCenterCallOnHoldSeconds($alertCallCenterCallOnHoldSeconds);
    }

    /**
     * Timer to alert CallCenter calls on hold
     */
    public function getAlertCallCenterCallOnHoldSeconds()
    {
        return (!$this->alertCallCenterCallOnHoldSeconds) ?: $this->alertCallCenterCallOnHoldSeconds->getValue();
    }

    /**
     * 
     */
    public function setBounceCallCenterCallOnHold($bounceCallCenterCallOnHold = null)
    {
        $this->bounceCallCenterCallOnHold = (boolean) $bounceCallCenterCallOnHold;
    }

    /**
     * 
     */
    public function getBounceCallCenterCallOnHold()
    {
        return (!$this->bounceCallCenterCallOnHold) ?: $this->bounceCallCenterCallOnHold->getValue();
    }

    /**
     * Timer to bounce CallCenter calls on hold
     */
    public function setBounceCallCenterCallOnHoldSeconds($bounceCallCenterCallOnHoldSeconds = null)
    {
        $this->bounceCallCenterCallOnHoldSeconds = ($bounceCallCenterCallOnHoldSeconds InstanceOf BounceCallCenterCallOnHoldSeconds)
             ? $bounceCallCenterCallOnHoldSeconds
             : new BounceCallCenterCallOnHoldSeconds($bounceCallCenterCallOnHoldSeconds);
    }

    /**
     * Timer to bounce CallCenter calls on hold
     */
    public function getBounceCallCenterCallOnHoldSeconds()
    {
        return (!$this->bounceCallCenterCallOnHoldSeconds) ?: $this->bounceCallCenterCallOnHoldSeconds->getValue();
    }
}
