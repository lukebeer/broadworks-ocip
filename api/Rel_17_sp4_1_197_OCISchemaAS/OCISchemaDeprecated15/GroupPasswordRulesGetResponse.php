<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated15; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\PasswordMinNonAlphanumericCharacters;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\PasswordMinLowerCaseLetters;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\PasswordMinUpperCaseLetters;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\MaxFailedLoginAttempts;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\PasswordExpiresDays;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\PasswordMinLength;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ServiceProviderId;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\PasswordMinDigits;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\EmailAddress;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\GroupId;
use Broadworks_OCIP\core\Builder\Types\PrimitiveType;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Response to GroupPasswordRulesGetRequest.
 *         Contains the password rules applicable to users within the group.
 *         Repleced by: GroupPasswordRulesGetResponse16
 */
class GroupPasswordRulesGetResponse extends ComplexType implements ComplexInterface
{
    public    $elementName = 'GroupPasswordRulesGetResponse';
    protected $serviceProviderId;
    protected $groupId;
    protected $disallowUserId;
    protected $disallowOldPassword;
    protected $disallowReversedOldPassword;
    protected $restrictMinDigits;
    protected $minDigits;
    protected $restrictMinUpperCaseLetters;
    protected $minUpperCaseLetters;
    protected $restrictMinLowerCaseLetters;
    protected $minLowerCaseLetters;
    protected $restrictMinNonAlphanumericCharacters;
    protected $minNonAlphanumericCharacters;
    protected $minLength;
    protected $maxFailedLoginAttempts;
    protected $passwordExpiresDays;
    protected $sendLoginDisabledNotifyEmail;
    protected $loginDisabledNotifyEmailAddress;
    protected $disallowRulesModification;

    /**
     * @return \Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated15\GroupPasswordRulesGetResponse $response
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * 
     */
    public function setServiceProviderId($serviceProviderId = null)
    {
        $this->serviceProviderId = ($serviceProviderId InstanceOf ServiceProviderId)
             ? $serviceProviderId
             : new ServiceProviderId($serviceProviderId);
        $this->serviceProviderId->setElementName('serviceProviderId');
        return $this;
    }

    /**
     * 
     * @return ServiceProviderId $serviceProviderId
     */
    public function getServiceProviderId()
    {
        return ($this->serviceProviderId)
            ? $this->serviceProviderId->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setGroupId($groupId = null)
    {
        $this->groupId = ($groupId InstanceOf GroupId)
             ? $groupId
             : new GroupId($groupId);
        $this->groupId->setElementName('groupId');
        return $this;
    }

    /**
     * 
     * @return GroupId $groupId
     */
    public function getGroupId()
    {
        return ($this->groupId)
            ? $this->groupId->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setDisallowUserId($disallowUserId = null)
    {
        $this->disallowUserId = new PrimitiveType($disallowUserId);
        $this->disallowUserId->setElementName('disallowUserId');
        return $this;
    }

    /**
     * 
     * @return boolean $disallowUserId
     */
    public function getDisallowUserId()
    {
        return ($this->disallowUserId)
            ? $this->disallowUserId->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setDisallowOldPassword($disallowOldPassword = null)
    {
        $this->disallowOldPassword = new PrimitiveType($disallowOldPassword);
        $this->disallowOldPassword->setElementName('disallowOldPassword');
        return $this;
    }

    /**
     * 
     * @return boolean $disallowOldPassword
     */
    public function getDisallowOldPassword()
    {
        return ($this->disallowOldPassword)
            ? $this->disallowOldPassword->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setDisallowReversedOldPassword($disallowReversedOldPassword = null)
    {
        $this->disallowReversedOldPassword = new PrimitiveType($disallowReversedOldPassword);
        $this->disallowReversedOldPassword->setElementName('disallowReversedOldPassword');
        return $this;
    }

    /**
     * 
     * @return boolean $disallowReversedOldPassword
     */
    public function getDisallowReversedOldPassword()
    {
        return ($this->disallowReversedOldPassword)
            ? $this->disallowReversedOldPassword->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setRestrictMinDigits($restrictMinDigits = null)
    {
        $this->restrictMinDigits = new PrimitiveType($restrictMinDigits);
        $this->restrictMinDigits->setElementName('restrictMinDigits');
        return $this;
    }

    /**
     * 
     * @return boolean $restrictMinDigits
     */
    public function getRestrictMinDigits()
    {
        return ($this->restrictMinDigits)
            ? $this->restrictMinDigits->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setMinDigits($minDigits = null)
    {
        $this->minDigits = ($minDigits InstanceOf PasswordMinDigits)
             ? $minDigits
             : new PasswordMinDigits($minDigits);
        $this->minDigits->setElementName('minDigits');
        return $this;
    }

    /**
     * 
     * @return PasswordMinDigits $minDigits
     */
    public function getMinDigits()
    {
        return ($this->minDigits)
            ? $this->minDigits->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setRestrictMinUpperCaseLetters($restrictMinUpperCaseLetters = null)
    {
        $this->restrictMinUpperCaseLetters = new PrimitiveType($restrictMinUpperCaseLetters);
        $this->restrictMinUpperCaseLetters->setElementName('restrictMinUpperCaseLetters');
        return $this;
    }

    /**
     * 
     * @return boolean $restrictMinUpperCaseLetters
     */
    public function getRestrictMinUpperCaseLetters()
    {
        return ($this->restrictMinUpperCaseLetters)
            ? $this->restrictMinUpperCaseLetters->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setMinUpperCaseLetters($minUpperCaseLetters = null)
    {
        $this->minUpperCaseLetters = ($minUpperCaseLetters InstanceOf PasswordMinUpperCaseLetters)
             ? $minUpperCaseLetters
             : new PasswordMinUpperCaseLetters($minUpperCaseLetters);
        $this->minUpperCaseLetters->setElementName('minUpperCaseLetters');
        return $this;
    }

    /**
     * 
     * @return PasswordMinUpperCaseLetters $minUpperCaseLetters
     */
    public function getMinUpperCaseLetters()
    {
        return ($this->minUpperCaseLetters)
            ? $this->minUpperCaseLetters->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setRestrictMinLowerCaseLetters($restrictMinLowerCaseLetters = null)
    {
        $this->restrictMinLowerCaseLetters = new PrimitiveType($restrictMinLowerCaseLetters);
        $this->restrictMinLowerCaseLetters->setElementName('restrictMinLowerCaseLetters');
        return $this;
    }

    /**
     * 
     * @return boolean $restrictMinLowerCaseLetters
     */
    public function getRestrictMinLowerCaseLetters()
    {
        return ($this->restrictMinLowerCaseLetters)
            ? $this->restrictMinLowerCaseLetters->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setMinLowerCaseLetters($minLowerCaseLetters = null)
    {
        $this->minLowerCaseLetters = ($minLowerCaseLetters InstanceOf PasswordMinLowerCaseLetters)
             ? $minLowerCaseLetters
             : new PasswordMinLowerCaseLetters($minLowerCaseLetters);
        $this->minLowerCaseLetters->setElementName('minLowerCaseLetters');
        return $this;
    }

    /**
     * 
     * @return PasswordMinLowerCaseLetters $minLowerCaseLetters
     */
    public function getMinLowerCaseLetters()
    {
        return ($this->minLowerCaseLetters)
            ? $this->minLowerCaseLetters->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setRestrictMinNonAlphanumericCharacters($restrictMinNonAlphanumericCharacters = null)
    {
        $this->restrictMinNonAlphanumericCharacters = new PrimitiveType($restrictMinNonAlphanumericCharacters);
        $this->restrictMinNonAlphanumericCharacters->setElementName('restrictMinNonAlphanumericCharacters');
        return $this;
    }

    /**
     * 
     * @return boolean $restrictMinNonAlphanumericCharacters
     */
    public function getRestrictMinNonAlphanumericCharacters()
    {
        return ($this->restrictMinNonAlphanumericCharacters)
            ? $this->restrictMinNonAlphanumericCharacters->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setMinNonAlphanumericCharacters($minNonAlphanumericCharacters = null)
    {
        $this->minNonAlphanumericCharacters = ($minNonAlphanumericCharacters InstanceOf PasswordMinNonAlphanumericCharacters)
             ? $minNonAlphanumericCharacters
             : new PasswordMinNonAlphanumericCharacters($minNonAlphanumericCharacters);
        $this->minNonAlphanumericCharacters->setElementName('minNonAlphanumericCharacters');
        return $this;
    }

    /**
     * 
     * @return PasswordMinNonAlphanumericCharacters $minNonAlphanumericCharacters
     */
    public function getMinNonAlphanumericCharacters()
    {
        return ($this->minNonAlphanumericCharacters)
            ? $this->minNonAlphanumericCharacters->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setMinLength($minLength = null)
    {
        $this->minLength = ($minLength InstanceOf PasswordMinLength)
             ? $minLength
             : new PasswordMinLength($minLength);
        $this->minLength->setElementName('minLength');
        return $this;
    }

    /**
     * 
     * @return PasswordMinLength $minLength
     */
    public function getMinLength()
    {
        return ($this->minLength)
            ? $this->minLength->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setMaxFailedLoginAttempts($maxFailedLoginAttempts = null)
    {
        $this->maxFailedLoginAttempts = ($maxFailedLoginAttempts InstanceOf MaxFailedLoginAttempts)
             ? $maxFailedLoginAttempts
             : new MaxFailedLoginAttempts($maxFailedLoginAttempts);
        $this->maxFailedLoginAttempts->setElementName('maxFailedLoginAttempts');
        return $this;
    }

    /**
     * 
     * @return MaxFailedLoginAttempts $maxFailedLoginAttempts
     */
    public function getMaxFailedLoginAttempts()
    {
        return ($this->maxFailedLoginAttempts)
            ? $this->maxFailedLoginAttempts->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setPasswordExpiresDays($passwordExpiresDays = null)
    {
        $this->passwordExpiresDays = ($passwordExpiresDays InstanceOf PasswordExpiresDays)
             ? $passwordExpiresDays
             : new PasswordExpiresDays($passwordExpiresDays);
        $this->passwordExpiresDays->setElementName('passwordExpiresDays');
        return $this;
    }

    /**
     * 
     * @return PasswordExpiresDays $passwordExpiresDays
     */
    public function getPasswordExpiresDays()
    {
        return ($this->passwordExpiresDays)
            ? $this->passwordExpiresDays->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setSendLoginDisabledNotifyEmail($sendLoginDisabledNotifyEmail = null)
    {
        $this->sendLoginDisabledNotifyEmail = new PrimitiveType($sendLoginDisabledNotifyEmail);
        $this->sendLoginDisabledNotifyEmail->setElementName('sendLoginDisabledNotifyEmail');
        return $this;
    }

    /**
     * 
     * @return boolean $sendLoginDisabledNotifyEmail
     */
    public function getSendLoginDisabledNotifyEmail()
    {
        return ($this->sendLoginDisabledNotifyEmail)
            ? $this->sendLoginDisabledNotifyEmail->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setLoginDisabledNotifyEmailAddress($loginDisabledNotifyEmailAddress = null)
    {
        $this->loginDisabledNotifyEmailAddress = ($loginDisabledNotifyEmailAddress InstanceOf EmailAddress)
             ? $loginDisabledNotifyEmailAddress
             : new EmailAddress($loginDisabledNotifyEmailAddress);
        $this->loginDisabledNotifyEmailAddress->setElementName('loginDisabledNotifyEmailAddress');
        return $this;
    }

    /**
     * 
     * @return EmailAddress $loginDisabledNotifyEmailAddress
     */
    public function getLoginDisabledNotifyEmailAddress()
    {
        return ($this->loginDisabledNotifyEmailAddress)
            ? $this->loginDisabledNotifyEmailAddress->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setDisallowRulesModification($disallowRulesModification = null)
    {
        $this->disallowRulesModification = new PrimitiveType($disallowRulesModification);
        $this->disallowRulesModification->setElementName('disallowRulesModification');
        return $this;
    }

    /**
     * 
     * @return boolean $disallowRulesModification
     */
    public function getDisallowRulesModification()
    {
        return ($this->disallowRulesModification)
            ? $this->disallowRulesModification->getElementValue()
            : null;
    }
}
