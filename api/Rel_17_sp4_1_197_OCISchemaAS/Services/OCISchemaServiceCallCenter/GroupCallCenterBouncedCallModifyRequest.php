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
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\UserId;
use Broadworks_OCIP\core\Builder\Types\PrimitiveType;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Modify a call center's bounced call settings.
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class GroupCallCenterBouncedCallModifyRequest extends ComplexType implements ComplexInterface
{
    public    $name                              = 'GroupCallCenterBouncedCallModifyRequest';
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
     * @return 
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * 
     */
    public function setServiceUserId($serviceUserId = null)
    {
        if (!$serviceUserId) return $this;
        $this->serviceUserId = ($serviceUserId InstanceOf UserId)
             ? $serviceUserId
             : new UserId($serviceUserId);
        $this->serviceUserId->setName('serviceUserId');
        return $this;
    }

    /**
     * 
     * @return UserId
     */
    public function getServiceUserId()
    {
        return $this->serviceUserId->getValue();
    }

    /**
     * 
     */
    public function setIsActive($isActive = null)
    {
        if (!$isActive) return $this;
        $this->isActive = new PrimitiveType($isActive);
        $this->isActive->setName('isActive');
        return $this;
    }

    /**
     * 
     * @return xs:boolean
     */
    public function getIsActive()
    {
        return $this->isActive->getValue();
    }

    /**
     * 
     */
    public function setNumberOfRingsBeforeBouncingCall($numberOfRingsBeforeBouncingCall = null)
    {
        if (!$numberOfRingsBeforeBouncingCall) return $this;
        $this->numberOfRingsBeforeBouncingCall = ($numberOfRingsBeforeBouncingCall InstanceOf HuntNoAnswerRings)
             ? $numberOfRingsBeforeBouncingCall
             : new HuntNoAnswerRings($numberOfRingsBeforeBouncingCall);
        $this->numberOfRingsBeforeBouncingCall->setName('numberOfRingsBeforeBouncingCall');
        return $this;
    }

    /**
     * 
     * @return HuntNoAnswerRings
     */
    public function getNumberOfRingsBeforeBouncingCall()
    {
        return $this->numberOfRingsBeforeBouncingCall->getValue();
    }

    /**
     * 
     */
    public function setEnableTransfer($enableTransfer = null)
    {
        if (!$enableTransfer) return $this;
        $this->enableTransfer = new PrimitiveType($enableTransfer);
        $this->enableTransfer->setName('enableTransfer');
        return $this;
    }

    /**
     * 
     * @return xs:boolean
     */
    public function getEnableTransfer()
    {
        return $this->enableTransfer->getValue();
    }

    /**
     * 
     */
    public function setTransferPhoneNumber($transferPhoneNumber = null)
    {
        if (!$transferPhoneNumber) return $this;
        $this->transferPhoneNumber = ($transferPhoneNumber InstanceOf OutgoingDNorSIPURI)
             ? $transferPhoneNumber
             : new OutgoingDNorSIPURI($transferPhoneNumber);
        $this->transferPhoneNumber->setName('transferPhoneNumber');
        return $this;
    }

    /**
     * 
     * @return OutgoingDNorSIPURI
     */
    public function getTransferPhoneNumber()
    {
        return $this->transferPhoneNumber->getValue();
    }

    /**
     * 
     */
    public function setBounceCallWhenAgentUnavailable($bounceCallWhenAgentUnavailable = null)
    {
        if (!$bounceCallWhenAgentUnavailable) return $this;
        $this->bounceCallWhenAgentUnavailable = new PrimitiveType($bounceCallWhenAgentUnavailable);
        $this->bounceCallWhenAgentUnavailable->setName('bounceCallWhenAgentUnavailable');
        return $this;
    }

    /**
     * 
     * @return xs:boolean
     */
    public function getBounceCallWhenAgentUnavailable()
    {
        return $this->bounceCallWhenAgentUnavailable->getValue();
    }

    /**
     * 
     */
    public function setAlertCallCenterCallOnHold($alertCallCenterCallOnHold = null)
    {
        if (!$alertCallCenterCallOnHold) return $this;
        $this->alertCallCenterCallOnHold = new PrimitiveType($alertCallCenterCallOnHold);
        $this->alertCallCenterCallOnHold->setName('alertCallCenterCallOnHold');
        return $this;
    }

    /**
     * 
     * @return xs:boolean
     */
    public function getAlertCallCenterCallOnHold()
    {
        return $this->alertCallCenterCallOnHold->getValue();
    }

    /**
     * 
     */
    public function setAlertCallCenterCallOnHoldSeconds($alertCallCenterCallOnHoldSeconds = null)
    {
        if (!$alertCallCenterCallOnHoldSeconds) return $this;
        $this->alertCallCenterCallOnHoldSeconds = ($alertCallCenterCallOnHoldSeconds InstanceOf AlertCallCenterCallOnHoldSeconds)
             ? $alertCallCenterCallOnHoldSeconds
             : new AlertCallCenterCallOnHoldSeconds($alertCallCenterCallOnHoldSeconds);
        $this->alertCallCenterCallOnHoldSeconds->setName('alertCallCenterCallOnHoldSeconds');
        return $this;
    }

    /**
     * 
     * @return AlertCallCenterCallOnHoldSeconds
     */
    public function getAlertCallCenterCallOnHoldSeconds()
    {
        return $this->alertCallCenterCallOnHoldSeconds->getValue();
    }

    /**
     * 
     */
    public function setBounceCallCenterCallOnHold($bounceCallCenterCallOnHold = null)
    {
        if (!$bounceCallCenterCallOnHold) return $this;
        $this->bounceCallCenterCallOnHold = new PrimitiveType($bounceCallCenterCallOnHold);
        $this->bounceCallCenterCallOnHold->setName('bounceCallCenterCallOnHold');
        return $this;
    }

    /**
     * 
     * @return xs:boolean
     */
    public function getBounceCallCenterCallOnHold()
    {
        return $this->bounceCallCenterCallOnHold->getValue();
    }

    /**
     * 
     */
    public function setBounceCallCenterCallOnHoldSeconds($bounceCallCenterCallOnHoldSeconds = null)
    {
        if (!$bounceCallCenterCallOnHoldSeconds) return $this;
        $this->bounceCallCenterCallOnHoldSeconds = ($bounceCallCenterCallOnHoldSeconds InstanceOf BounceCallCenterCallOnHoldSeconds)
             ? $bounceCallCenterCallOnHoldSeconds
             : new BounceCallCenterCallOnHoldSeconds($bounceCallCenterCallOnHoldSeconds);
        $this->bounceCallCenterCallOnHoldSeconds->setName('bounceCallCenterCallOnHoldSeconds');
        return $this;
    }

    /**
     * 
     * @return BounceCallCenterCallOnHoldSeconds
     */
    public function getBounceCallCenterCallOnHoldSeconds()
    {
        return $this->bounceCallCenterCallOnHoldSeconds->getValue();
    }
}
