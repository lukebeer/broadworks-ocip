<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceBroadWorksAnywhere; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceBroadWorksAnywhere\BroadWorksAnywherePhoneNumberDescription;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\CriteriaActivation;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\OutgoingDNorSIPURI;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\UserId;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\DN;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Modify a BroadWorks Anywhere phone number
 *           The response is either a SuccessResponse or an ErrorResponse.
 */
class UserBroadWorksAnywhereModifyPhoneNumberRequest extends ComplexType implements ComplexInterface
{
    public    $name                        = __CLASS__;
    protected $userId                      = null;
    protected $phoneNumber                 = null;
    protected $newPhoneNumber              = null;
    protected $description                 = null;
    protected $isActive                    = null;
    protected $outboundAlternateNumber     = null;
    protected $broadworksCallControl       = null;
    protected $useDiversionInhibitor       = null;
    protected $answerConfirmationRequired  = null;
    protected $criteriaActivation          = null;

    public function __construct(
         $userId,
         $phoneNumber,
         $newPhoneNumber = null,
         $description = null,
         $isActive = null,
         $outboundAlternateNumber = null,
         $broadworksCallControl = null,
         $useDiversionInhibitor = null,
         $answerConfirmationRequired = null,
         CriteriaActivation $criteriaActivation = null
    ) {
        $this->setUserId($userId);
        $this->setPhoneNumber($phoneNumber);
        $this->setNewPhoneNumber($newPhoneNumber);
        $this->setDescription($description);
        $this->setIsActive($isActive);
        $this->setOutboundAlternateNumber($outboundAlternateNumber);
        $this->setBroadworksCallControl($broadworksCallControl);
        $this->setUseDiversionInhibitor($useDiversionInhibitor);
        $this->setAnswerConfirmationRequired($answerConfirmationRequired);
        $this->setCriteriaActivation($criteriaActivation);
    }

    public function setUserId($userId = null)
    {
        $this->userId = ($userId InstanceOf UserId)
             ? $userId
             : new UserId($userId);
    }

    public function getUserId()
    {
        return (!$this->userId) ?: $this->userId->value();
    }

    public function setPhoneNumber($phoneNumber = null)
    {
        $this->phoneNumber = ($phoneNumber InstanceOf DN)
             ? $phoneNumber
             : new DN($phoneNumber);
    }

    public function getPhoneNumber()
    {
        return (!$this->phoneNumber) ?: $this->phoneNumber->value();
    }

    public function setNewPhoneNumber($newPhoneNumber = null)
    {
        $this->newPhoneNumber = ($newPhoneNumber InstanceOf DN)
             ? $newPhoneNumber
             : new DN($newPhoneNumber);
    }

    public function getNewPhoneNumber()
    {
        return (!$this->newPhoneNumber) ?: $this->newPhoneNumber->value();
    }

    public function setDescription($description = null)
    {
        $this->description = ($description InstanceOf BroadWorksAnywherePhoneNumberDescription)
             ? $description
             : new BroadWorksAnywherePhoneNumberDescription($description);
    }

    public function getDescription()
    {
        return (!$this->description) ?: $this->description->value();
    }

    public function setIsActive(xs:boolean $isActive = null)
    {
    }

    public function getIsActive()
    {
        return (!$this->isActive) ?: $this->isActive->value();
    }

    public function setOutboundAlternateNumber($outboundAlternateNumber = null)
    {
        $this->outboundAlternateNumber = ($outboundAlternateNumber InstanceOf OutgoingDNorSIPURI)
             ? $outboundAlternateNumber
             : new OutgoingDNorSIPURI($outboundAlternateNumber);
    }

    public function getOutboundAlternateNumber()
    {
        return (!$this->outboundAlternateNumber) ?: $this->outboundAlternateNumber->value();
    }

    public function setBroadworksCallControl(xs:boolean $broadworksCallControl = null)
    {
    }

    public function getBroadworksCallControl()
    {
        return (!$this->broadworksCallControl) ?: $this->broadworksCallControl->value();
    }

    public function setUseDiversionInhibitor(xs:boolean $useDiversionInhibitor = null)
    {
    }

    public function getUseDiversionInhibitor()
    {
        return (!$this->useDiversionInhibitor) ?: $this->useDiversionInhibitor->value();
    }

    public function setAnswerConfirmationRequired(xs:boolean $answerConfirmationRequired = null)
    {
    }

    public function getAnswerConfirmationRequired()
    {
        return (!$this->answerConfirmationRequired) ?: $this->answerConfirmationRequired->value();
    }

    public function setCriteriaActivation(CriteriaActivation $criteriaActivation = null)
    {
    }

    public function getCriteriaActivation()
    {
        return (!$this->criteriaActivation) ?: $this->criteriaActivation->value();
    }
}
