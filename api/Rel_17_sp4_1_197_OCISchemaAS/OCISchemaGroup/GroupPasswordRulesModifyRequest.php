<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaGroup; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\PasswordMinNonAlphanumericCharacters;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\PasswordMinLowerCaseLetters;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\PasswordMinUpperCaseLetters;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\MaxFailedLoginAttempts;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\PasswordHistoryCount;
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
 * Request to modify the group's password rules setting that apply to the
 *         users within the group. The response is either SuccessResponse or ErrorResponse.
 */
class GroupPasswordRulesModifyRequest extends ComplexType implements ComplexInterface
{
    public    $name = 'GroupPasswordRulesModifyRequest';
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
    protected $disallowPreviousPasswords;
    protected $numberOfPreviousPasswords;

    public function __construct(
         $serviceProviderId = '',
         $groupId = '',
         $disallowUserId = null,
         $disallowOldPassword = null,
         $disallowReversedOldPassword = null,
         $restrictMinDigits = null,
         $minDigits = null,
         $restrictMinUpperCaseLetters = null,
         $minUpperCaseLetters = null,
         $restrictMinLowerCaseLetters = null,
         $minLowerCaseLetters = null,
         $restrictMinNonAlphanumericCharacters = null,
         $minNonAlphanumericCharacters = null,
         $minLength = null,
         $maxFailedLoginAttempts = null,
         $passwordExpiresDays = null,
         $sendLoginDisabledNotifyEmail = null,
         $loginDisabledNotifyEmailAddress = null,
         $disallowPreviousPasswords = null,
         $numberOfPreviousPasswords = null
    ) {
        $this->setServiceProviderId($serviceProviderId);
        $this->setGroupId($groupId);
        $this->setDisallowUserId($disallowUserId);
        $this->setDisallowOldPassword($disallowOldPassword);
        $this->setDisallowReversedOldPassword($disallowReversedOldPassword);
        $this->setRestrictMinDigits($restrictMinDigits);
        $this->setMinDigits($minDigits);
        $this->setRestrictMinUpperCaseLetters($restrictMinUpperCaseLetters);
        $this->setMinUpperCaseLetters($minUpperCaseLetters);
        $this->setRestrictMinLowerCaseLetters($restrictMinLowerCaseLetters);
        $this->setMinLowerCaseLetters($minLowerCaseLetters);
        $this->setRestrictMinNonAlphanumericCharacters($restrictMinNonAlphanumericCharacters);
        $this->setMinNonAlphanumericCharacters($minNonAlphanumericCharacters);
        $this->setMinLength($minLength);
        $this->setMaxFailedLoginAttempts($maxFailedLoginAttempts);
        $this->setPasswordExpiresDays($passwordExpiresDays);
        $this->setSendLoginDisabledNotifyEmail($sendLoginDisabledNotifyEmail);
        $this->setLoginDisabledNotifyEmailAddress($loginDisabledNotifyEmailAddress);
        $this->setDisallowPreviousPasswords($disallowPreviousPasswords);
        $this->setNumberOfPreviousPasswords($numberOfPreviousPasswords);
    }

    /**
     * @return mixed $response
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
        $this->serviceProviderId->setName('serviceProviderId');
        return $this;
    }

    /**
     * 
     * @return ServiceProviderId $serviceProviderId
     */
    public function getServiceProviderId()
    {
        return ($this->serviceProviderId) ? $this->serviceProviderId->getValue() : null;
    }

    /**
     * 
     */
    public function setGroupId($groupId = null)
    {
        $this->groupId = ($groupId InstanceOf GroupId)
             ? $groupId
             : new GroupId($groupId);
        $this->groupId->setName('groupId');
        return $this;
    }

    /**
     * 
     * @return GroupId $groupId
     */
    public function getGroupId()
    {
        return ($this->groupId) ? $this->groupId->getValue() : null;
    }

    /**
     * 
     */
    public function setDisallowUserId($disallowUserId = null)
    {
        $this->disallowUserId = new PrimitiveType($disallowUserId);
        $this->disallowUserId->setName('disallowUserId');
        return $this;
    }

    /**
     * 
     * @return boolean $disallowUserId
     */
    public function getDisallowUserId()
    {
        return ($this->disallowUserId) ? $this->disallowUserId->getValue() : null;
    }

    /**
     * 
     */
    public function setDisallowOldPassword($disallowOldPassword = null)
    {
        $this->disallowOldPassword = new PrimitiveType($disallowOldPassword);
        $this->disallowOldPassword->setName('disallowOldPassword');
        return $this;
    }

    /**
     * 
     * @return boolean $disallowOldPassword
     */
    public function getDisallowOldPassword()
    {
        return ($this->disallowOldPassword) ? $this->disallowOldPassword->getValue() : null;
    }

    /**
     * 
     */
    public function setDisallowReversedOldPassword($disallowReversedOldPassword = null)
    {
        $this->disallowReversedOldPassword = new PrimitiveType($disallowReversedOldPassword);
        $this->disallowReversedOldPassword->setName('disallowReversedOldPassword');
        return $this;
    }

    /**
     * 
     * @return boolean $disallowReversedOldPassword
     */
    public function getDisallowReversedOldPassword()
    {
        return ($this->disallowReversedOldPassword) ? $this->disallowReversedOldPassword->getValue() : null;
    }

    /**
     * 
     */
    public function setRestrictMinDigits($restrictMinDigits = null)
    {
        $this->restrictMinDigits = new PrimitiveType($restrictMinDigits);
        $this->restrictMinDigits->setName('restrictMinDigits');
        return $this;
    }

    /**
     * 
     * @return boolean $restrictMinDigits
     */
    public function getRestrictMinDigits()
    {
        return ($this->restrictMinDigits) ? $this->restrictMinDigits->getValue() : null;
    }

    /**
     * 
     */
    public function setMinDigits($minDigits = null)
    {
        $this->minDigits = ($minDigits InstanceOf PasswordMinDigits)
             ? $minDigits
             : new PasswordMinDigits($minDigits);
        $this->minDigits->setName('minDigits');
        return $this;
    }

    /**
     * 
     * @return PasswordMinDigits $minDigits
     */
    public function getMinDigits()
    {
        return ($this->minDigits) ? $this->minDigits->getValue() : null;
    }

    /**
     * 
     */
    public function setRestrictMinUpperCaseLetters($restrictMinUpperCaseLetters = null)
    {
        $this->restrictMinUpperCaseLetters = new PrimitiveType($restrictMinUpperCaseLetters);
        $this->restrictMinUpperCaseLetters->setName('restrictMinUpperCaseLetters');
        return $this;
    }

    /**
     * 
     * @return boolean $restrictMinUpperCaseLetters
     */
    public function getRestrictMinUpperCaseLetters()
    {
        return ($this->restrictMinUpperCaseLetters) ? $this->restrictMinUpperCaseLetters->getValue() : null;
    }

    /**
     * 
     */
    public function setMinUpperCaseLetters($minUpperCaseLetters = null)
    {
        $this->minUpperCaseLetters = ($minUpperCaseLetters InstanceOf PasswordMinUpperCaseLetters)
             ? $minUpperCaseLetters
             : new PasswordMinUpperCaseLetters($minUpperCaseLetters);
        $this->minUpperCaseLetters->setName('minUpperCaseLetters');
        return $this;
    }

    /**
     * 
     * @return PasswordMinUpperCaseLetters $minUpperCaseLetters
     */
    public function getMinUpperCaseLetters()
    {
        return ($this->minUpperCaseLetters) ? $this->minUpperCaseLetters->getValue() : null;
    }

    /**
     * 
     */
    public function setRestrictMinLowerCaseLetters($restrictMinLowerCaseLetters = null)
    {
        $this->restrictMinLowerCaseLetters = new PrimitiveType($restrictMinLowerCaseLetters);
        $this->restrictMinLowerCaseLetters->setName('restrictMinLowerCaseLetters');
        return $this;
    }

    /**
     * 
     * @return boolean $restrictMinLowerCaseLetters
     */
    public function getRestrictMinLowerCaseLetters()
    {
        return ($this->restrictMinLowerCaseLetters) ? $this->restrictMinLowerCaseLetters->getValue() : null;
    }

    /**
     * 
     */
    public function setMinLowerCaseLetters($minLowerCaseLetters = null)
    {
        $this->minLowerCaseLetters = ($minLowerCaseLetters InstanceOf PasswordMinLowerCaseLetters)
             ? $minLowerCaseLetters
             : new PasswordMinLowerCaseLetters($minLowerCaseLetters);
        $this->minLowerCaseLetters->setName('minLowerCaseLetters');
        return $this;
    }

    /**
     * 
     * @return PasswordMinLowerCaseLetters $minLowerCaseLetters
     */
    public function getMinLowerCaseLetters()
    {
        return ($this->minLowerCaseLetters) ? $this->minLowerCaseLetters->getValue() : null;
    }

    /**
     * 
     */
    public function setRestrictMinNonAlphanumericCharacters($restrictMinNonAlphanumericCharacters = null)
    {
        $this->restrictMinNonAlphanumericCharacters = new PrimitiveType($restrictMinNonAlphanumericCharacters);
        $this->restrictMinNonAlphanumericCharacters->setName('restrictMinNonAlphanumericCharacters');
        return $this;
    }

    /**
     * 
     * @return boolean $restrictMinNonAlphanumericCharacters
     */
    public function getRestrictMinNonAlphanumericCharacters()
    {
        return ($this->restrictMinNonAlphanumericCharacters) ? $this->restrictMinNonAlphanumericCharacters->getValue() : null;
    }

    /**
     * 
     */
    public function setMinNonAlphanumericCharacters($minNonAlphanumericCharacters = null)
    {
        $this->minNonAlphanumericCharacters = ($minNonAlphanumericCharacters InstanceOf PasswordMinNonAlphanumericCharacters)
             ? $minNonAlphanumericCharacters
             : new PasswordMinNonAlphanumericCharacters($minNonAlphanumericCharacters);
        $this->minNonAlphanumericCharacters->setName('minNonAlphanumericCharacters');
        return $this;
    }

    /**
     * 
     * @return PasswordMinNonAlphanumericCharacters $minNonAlphanumericCharacters
     */
    public function getMinNonAlphanumericCharacters()
    {
        return ($this->minNonAlphanumericCharacters) ? $this->minNonAlphanumericCharacters->getValue() : null;
    }

    /**
     * 
     */
    public function setMinLength($minLength = null)
    {
        $this->minLength = ($minLength InstanceOf PasswordMinLength)
             ? $minLength
             : new PasswordMinLength($minLength);
        $this->minLength->setName('minLength');
        return $this;
    }

    /**
     * 
     * @return PasswordMinLength $minLength
     */
    public function getMinLength()
    {
        return ($this->minLength) ? $this->minLength->getValue() : null;
    }

    /**
     * 
     */
    public function setMaxFailedLoginAttempts($maxFailedLoginAttempts = null)
    {
        $this->maxFailedLoginAttempts = ($maxFailedLoginAttempts InstanceOf MaxFailedLoginAttempts)
             ? $maxFailedLoginAttempts
             : new MaxFailedLoginAttempts($maxFailedLoginAttempts);
        $this->maxFailedLoginAttempts->setName('maxFailedLoginAttempts');
        return $this;
    }

    /**
     * 
     * @return MaxFailedLoginAttempts $maxFailedLoginAttempts
     */
    public function getMaxFailedLoginAttempts()
    {
        return ($this->maxFailedLoginAttempts) ? $this->maxFailedLoginAttempts->getValue() : null;
    }

    /**
     * 
     */
    public function setPasswordExpiresDays($passwordExpiresDays = null)
    {
        $this->passwordExpiresDays = ($passwordExpiresDays InstanceOf PasswordExpiresDays)
             ? $passwordExpiresDays
             : new PasswordExpiresDays($passwordExpiresDays);
        $this->passwordExpiresDays->setName('passwordExpiresDays');
        return $this;
    }

    /**
     * 
     * @return PasswordExpiresDays $passwordExpiresDays
     */
    public function getPasswordExpiresDays()
    {
        return ($this->passwordExpiresDays) ? $this->passwordExpiresDays->getValue() : null;
    }

    /**
     * 
     */
    public function setSendLoginDisabledNotifyEmail($sendLoginDisabledNotifyEmail = null)
    {
        $this->sendLoginDisabledNotifyEmail = new PrimitiveType($sendLoginDisabledNotifyEmail);
        $this->sendLoginDisabledNotifyEmail->setName('sendLoginDisabledNotifyEmail');
        return $this;
    }

    /**
     * 
     * @return boolean $sendLoginDisabledNotifyEmail
     */
    public function getSendLoginDisabledNotifyEmail()
    {
        return ($this->sendLoginDisabledNotifyEmail) ? $this->sendLoginDisabledNotifyEmail->getValue() : null;
    }

    /**
     * 
     */
    public function setLoginDisabledNotifyEmailAddress($loginDisabledNotifyEmailAddress = null)
    {
        $this->loginDisabledNotifyEmailAddress = ($loginDisabledNotifyEmailAddress InstanceOf EmailAddress)
             ? $loginDisabledNotifyEmailAddress
             : new EmailAddress($loginDisabledNotifyEmailAddress);
        $this->loginDisabledNotifyEmailAddress->setName('loginDisabledNotifyEmailAddress');
        return $this;
    }

    /**
     * 
     * @return EmailAddress $loginDisabledNotifyEmailAddress
     */
    public function getLoginDisabledNotifyEmailAddress()
    {
        return ($this->loginDisabledNotifyEmailAddress) ? $this->loginDisabledNotifyEmailAddress->getValue() : null;
    }

    /**
     * 
     */
    public function setDisallowPreviousPasswords($disallowPreviousPasswords = null)
    {
        $this->disallowPreviousPasswords = new PrimitiveType($disallowPreviousPasswords);
        $this->disallowPreviousPasswords->setName('disallowPreviousPasswords');
        return $this;
    }

    /**
     * 
     * @return boolean $disallowPreviousPasswords
     */
    public function getDisallowPreviousPasswords()
    {
        return ($this->disallowPreviousPasswords) ? $this->disallowPreviousPasswords->getValue() : null;
    }

    /**
     * 
     */
    public function setNumberOfPreviousPasswords($numberOfPreviousPasswords = null)
    {
        $this->numberOfPreviousPasswords = ($numberOfPreviousPasswords InstanceOf PasswordHistoryCount)
             ? $numberOfPreviousPasswords
             : new PasswordHistoryCount($numberOfPreviousPasswords);
        $this->numberOfPreviousPasswords->setName('numberOfPreviousPasswords');
        return $this;
    }

    /**
     * 
     * @return PasswordHistoryCount $numberOfPreviousPasswords
     */
    public function getNumberOfPreviousPasswords()
    {
        return ($this->numberOfPreviousPasswords) ? $this->numberOfPreviousPasswords->getValue() : null;
    }
}
