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
    public    $name                       = __CLASS__;
    protected $userId                     = null;
    protected $phoneNumber                = null;
    protected $newPhoneNumber             = null;
    protected $description                = null;
    protected $isActive                   = null;
    protected $outboundAlternateNumber    = null;
    protected $broadworksCallControl      = null;
    protected $useDiversionInhibitor      = null;
    protected $answerConfirmationRequired = null;
    protected $criteriaActivation         = null;

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

    /**
     * A user id consists of a user-portion optionally followed by an @ sign and a domain name.
     *         If the domain is not specified, it is assumed to be the system default domain.
     *         The domain is required when adding normal users and virtual users, i.e. Auto Attendants,
     *         Hunt Groups, Call Centers....
     *         The domain must not be specified for system-level and service-provider-level administrators.
     */
    public function setUserId($userId = null)
    {
        $this->userId = ($userId InstanceOf UserId)
             ? $userId
             : new UserId($userId);
    }

    /**
     * A user id consists of a user-portion optionally followed by an @ sign and a domain name.
     *         If the domain is not specified, it is assumed to be the system default domain.
     *         The domain is required when adding normal users and virtual users, i.e. Auto Attendants,
     *         Hunt Groups, Call Centers....
     *         The domain must not be specified for system-level and service-provider-level administrators.
     */
    public function getUserId()
    {
        return (!$this->userId) ?: $this->userId->getValue();
    }

    /**
     * Directory Number in E164 Format.
     */
    public function setPhoneNumber($phoneNumber = null)
    {
        $this->phoneNumber = ($phoneNumber InstanceOf DN)
             ? $phoneNumber
             : new DN($phoneNumber);
    }

    /**
     * Directory Number in E164 Format.
     */
    public function getPhoneNumber()
    {
        return (!$this->phoneNumber) ?: $this->phoneNumber->getValue();
    }

    /**
     * Directory Number in E164 Format.
     */
    public function setNewPhoneNumber($newPhoneNumber = null)
    {
        $this->newPhoneNumber = ($newPhoneNumber InstanceOf DN)
             ? $newPhoneNumber
             : new DN($newPhoneNumber);
    }

    /**
     * Directory Number in E164 Format.
     */
    public function getNewPhoneNumber()
    {
        return (!$this->newPhoneNumber) ?: $this->newPhoneNumber->getValue();
    }

    /**
     * BroadWorks Anywhere Phone Number Description.
     */
    public function setDescription($description = null)
    {
        $this->description = ($description InstanceOf BroadWorksAnywherePhoneNumberDescription)
             ? $description
             : new BroadWorksAnywherePhoneNumberDescription($description);
    }

    /**
     * BroadWorks Anywhere Phone Number Description.
     */
    public function getDescription()
    {
        return (!$this->description) ?: $this->description->getValue();
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
     * Phone Number or SIP URI that can be used to dial.
     *         URI Validation:
     *         - must be of the format string@string where string is at least one valid character and there is one and only one @.
     *         - don't allow sip:
     *         - allow the following characters in the user portions:
     *           alphanumeric   -   _   .   !   ~   *   '   (   )
     *         - allow the following characters in the host portion:
     *           alphanumeric   -   .
     */
    public function setOutboundAlternateNumber($outboundAlternateNumber = null)
    {
        $this->outboundAlternateNumber = ($outboundAlternateNumber InstanceOf OutgoingDNorSIPURI)
             ? $outboundAlternateNumber
             : new OutgoingDNorSIPURI($outboundAlternateNumber);
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
    public function getOutboundAlternateNumber()
    {
        return (!$this->outboundAlternateNumber) ?: $this->outboundAlternateNumber->getValue();
    }

    /**
     * 
     */
    public function setBroadworksCallControl($broadworksCallControl = null)
    {
        $this->broadworksCallControl = (boolean) $broadworksCallControl;
    }

    /**
     * 
     */
    public function getBroadworksCallControl()
    {
        return (!$this->broadworksCallControl) ?: $this->broadworksCallControl->getValue();
    }

    /**
     * 
     */
    public function setUseDiversionInhibitor($useDiversionInhibitor = null)
    {
        $this->useDiversionInhibitor = (boolean) $useDiversionInhibitor;
    }

    /**
     * 
     */
    public function getUseDiversionInhibitor()
    {
        return (!$this->useDiversionInhibitor) ?: $this->useDiversionInhibitor->getValue();
    }

    /**
     * 
     */
    public function setAnswerConfirmationRequired($answerConfirmationRequired = null)
    {
        $this->answerConfirmationRequired = (boolean) $answerConfirmationRequired;
    }

    /**
     * 
     */
    public function getAnswerConfirmationRequired()
    {
        return (!$this->answerConfirmationRequired) ?: $this->answerConfirmationRequired->getValue();
    }

    /**
     * Criteria active status indicator
     */
    public function setCriteriaActivation(CriteriaActivation $criteriaActivation = null)
    {
        $this->criteriaActivation = CriteriaActivation $criteriaActivation;
    }

    /**
     * Criteria active status indicator
     */
    public function getCriteriaActivation()
    {
        return (!$this->criteriaActivation) ?: $this->criteriaActivation->getValue();
    }
}
