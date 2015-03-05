<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceBroadWorksAnywhere; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\UserId;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\DN;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\BroadWorksAnywherePhoneNumberDescription;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\xs:boolean;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\OutgoingDNorSIPURI;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Add a broadworks Anywhere phone number.
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class UserBroadWorksAnywhereAddPhoneNumberRequest extends ComplexType implements ComplexInterface
{
    public    $name = __CLASS__;

    public function __construct(
             $userId,
             $phoneNumber,
             $description=null,
             $isActive,
             $outboundAlternateNumber=null,
             $broadworksCallControl,
             $useDiversionInhibitor,
             $answerConfirmationRequired
    ) {
        $this->userId                     = new UserId($userId);
        $this->phoneNumber                = new DN($phoneNumber);
        $this->description                = $description;
        $this->isActive                   = $isActive;
        $this->outboundAlternateNumber    = new OutgoingDNorSIPURI($outboundAlternateNumber);
        $this->broadworksCallControl      = $broadworksCallControl;
        $this->useDiversionInhibitor      = $useDiversionInhibitor;
        $this->answerConfirmationRequired = $answerConfirmationRequired;
        $this->args                       = func_get_args();
    }

    public function setUserId($userId)
    {
        $userId and $this->userId = new UserId($userId);
    }

    public function getUserId()
    {
        return (!$this->userId) ?: $this->userId->value();
    }

    public function setPhoneNumber($phoneNumber)
    {
        $phoneNumber and $this->phoneNumber = new DN($phoneNumber);
    }

    public function getPhoneNumber()
    {
        return (!$this->phoneNumber) ?: $this->phoneNumber->value();
    }

    public function setDescription($description)
    {
        $description and $this->description = new BroadWorksAnywherePhoneNumberDescription($description);
    }

    public function getDescription()
    {
        return (!$this->description) ?: $this->description->value();
    }

    public function setIsActive($isActive)
    {
        $isActive and $this->isActive = new xs:boolean($isActive);
    }

    public function getIsActive()
    {
        return (!$this->isActive) ?: $this->isActive->value();
    }

    public function setOutboundAlternateNumber($outboundAlternateNumber)
    {
        $outboundAlternateNumber and $this->outboundAlternateNumber = new OutgoingDNorSIPURI($outboundAlternateNumber);
    }

    public function getOutboundAlternateNumber()
    {
        return (!$this->outboundAlternateNumber) ?: $this->outboundAlternateNumber->value();
    }

    public function setBroadworksCallControl($broadworksCallControl)
    {
        $broadworksCallControl and $this->broadworksCallControl = new xs:boolean($broadworksCallControl);
    }

    public function getBroadworksCallControl()
    {
        return (!$this->broadworksCallControl) ?: $this->broadworksCallControl->value();
    }

    public function setUseDiversionInhibitor($useDiversionInhibitor)
    {
        $useDiversionInhibitor and $this->useDiversionInhibitor = new xs:boolean($useDiversionInhibitor);
    }

    public function getUseDiversionInhibitor()
    {
        return (!$this->useDiversionInhibitor) ?: $this->useDiversionInhibitor->value();
    }

    public function setAnswerConfirmationRequired($answerConfirmationRequired)
    {
        $answerConfirmationRequired and $this->answerConfirmationRequired = new xs:boolean($answerConfirmationRequired);
    }

    public function getAnswerConfirmationRequired()
    {
        return (!$this->answerConfirmationRequired) ?: $this->answerConfirmationRequired->value();
    }
}
