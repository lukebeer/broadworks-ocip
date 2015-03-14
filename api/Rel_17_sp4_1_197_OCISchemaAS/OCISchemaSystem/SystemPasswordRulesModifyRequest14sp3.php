<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\PasswordMinNonAlphanumericCharacters;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\PasswordMinUpperCaseLetters;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\PasswordMinLowerCaseLetters;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem\SystemPasswordRulesApplyTo;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\MaxFailedLoginAttempts;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\PasswordHistoryCount;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\PasswordExpiresDays;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\PasswordMinLength;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\PasswordMinDigits;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\EmailAddress;
use Broadworks_OCIP\core\Builder\Types\PrimitiveType;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Request to modify the system providers password rule
 *         setting applicable to System Adminstrator, Provisioning Administrator,
 *         and/or Service Provider Administrator, Group Administrator, Department Administrator, User.
 *         The response is either SuccessResponse or ErrorResponse.
 */
class SystemPasswordRulesModifyRequest14sp3 extends ComplexType implements ComplexInterface
{
    public    $name                                   = 'SystemPasswordRulesModifyRequest14sp3';
    protected $rulesApplyTo                           = null;
    protected $allowWebAddExternalAuthenticationUsers = null;
    protected $disallowUserId                         = null;
    protected $disallowOldPassword                    = null;
    protected $disallowReversedOldPassword            = null;
    protected $restrictMinDigits                      = null;
    protected $minDigits                              = null;
    protected $restrictMinUpperCaseLetters            = null;
    protected $minUpperCaseLetters                    = null;
    protected $restrictMinLowerCaseLetters            = null;
    protected $minLowerCaseLetters                    = null;
    protected $restrictMinNonAlphanumericCharacters   = null;
    protected $minNonAlphanumericCharacters           = null;
    protected $minLength                              = null;
    protected $maxFailedLoginAttempts                 = null;
    protected $passwordExpiresDays                    = null;
    protected $sendLoginDisabledNotifyEmail           = null;
    protected $loginDisabledNotifyEmailAddress        = null;
    protected $disallowPreviousPasswords              = null;
    protected $numberOfPreviousPasswords              = null;

    public function __construct(
         $rulesApplyTo = null,
         $allowWebAddExternalAuthenticationUsers = null,
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
        $this->setRulesApplyTo($rulesApplyTo);
        $this->setAllowWebAddExternalAuthenticationUsers($allowWebAddExternalAuthenticationUsers);
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
    public function setRulesApplyTo($rulesApplyTo = null)
    {
        if (!$rulesApplyTo) return $this;
        $this->rulesApplyTo = ($rulesApplyTo InstanceOf SystemPasswordRulesApplyTo)
             ? $rulesApplyTo
             : new SystemPasswordRulesApplyTo($rulesApplyTo);
        $this->rulesApplyTo->setName('rulesApplyTo');
        return $this;
    }

    /**
     * 
     * @return SystemPasswordRulesApplyTo $rulesApplyTo
     */
    public function getRulesApplyTo()
    {
        return $this->rulesApplyTo->getValue();
    }

    /**
     * 
     */
    public function setAllowWebAddExternalAuthenticationUsers($allowWebAddExternalAuthenticationUsers = null)
    {
        if (!$allowWebAddExternalAuthenticationUsers) return $this;
        $this->allowWebAddExternalAuthenticationUsers = new PrimitiveType($allowWebAddExternalAuthenticationUsers);
        $this->allowWebAddExternalAuthenticationUsers->setName('allowWebAddExternalAuthenticationUsers');
        return $this;
    }

    /**
     * 
     * @return boolean $allowWebAddExternalAuthenticationUsers
     */
    public function getAllowWebAddExternalAuthenticationUsers()
    {
        return $this->allowWebAddExternalAuthenticationUsers->getValue();
    }

    /**
     * 
     */
    public function setDisallowUserId($disallowUserId = null)
    {
        if (!$disallowUserId) return $this;
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
        return $this->disallowUserId->getValue();
    }

    /**
     * 
     */
    public function setDisallowOldPassword($disallowOldPassword = null)
    {
        if (!$disallowOldPassword) return $this;
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
        return $this->disallowOldPassword->getValue();
    }

    /**
     * 
     */
    public function setDisallowReversedOldPassword($disallowReversedOldPassword = null)
    {
        if (!$disallowReversedOldPassword) return $this;
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
        return $this->disallowReversedOldPassword->getValue();
    }

    /**
     * 
     */
    public function setRestrictMinDigits($restrictMinDigits = null)
    {
        if (!$restrictMinDigits) return $this;
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
        return $this->restrictMinDigits->getValue();
    }

    /**
     * 
     */
    public function setMinDigits($minDigits = null)
    {
        if (!$minDigits) return $this;
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
        return $this->minDigits->getValue();
    }

    /**
     * 
     */
    public function setRestrictMinUpperCaseLetters($restrictMinUpperCaseLetters = null)
    {
        if (!$restrictMinUpperCaseLetters) return $this;
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
        return $this->restrictMinUpperCaseLetters->getValue();
    }

    /**
     * 
     */
    public function setMinUpperCaseLetters($minUpperCaseLetters = null)
    {
        if (!$minUpperCaseLetters) return $this;
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
        return $this->minUpperCaseLetters->getValue();
    }

    /**
     * 
     */
    public function setRestrictMinLowerCaseLetters($restrictMinLowerCaseLetters = null)
    {
        if (!$restrictMinLowerCaseLetters) return $this;
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
        return $this->restrictMinLowerCaseLetters->getValue();
    }

    /**
     * 
     */
    public function setMinLowerCaseLetters($minLowerCaseLetters = null)
    {
        if (!$minLowerCaseLetters) return $this;
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
        return $this->minLowerCaseLetters->getValue();
    }

    /**
     * 
     */
    public function setRestrictMinNonAlphanumericCharacters($restrictMinNonAlphanumericCharacters = null)
    {
        if (!$restrictMinNonAlphanumericCharacters) return $this;
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
        return $this->restrictMinNonAlphanumericCharacters->getValue();
    }

    /**
     * 
     */
    public function setMinNonAlphanumericCharacters($minNonAlphanumericCharacters = null)
    {
        if (!$minNonAlphanumericCharacters) return $this;
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
        return $this->minNonAlphanumericCharacters->getValue();
    }

    /**
     * 
     */
    public function setMinLength($minLength = null)
    {
        if (!$minLength) return $this;
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
        return $this->minLength->getValue();
    }

    /**
     * 
     */
    public function setMaxFailedLoginAttempts($maxFailedLoginAttempts = null)
    {
        if (!$maxFailedLoginAttempts) return $this;
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
        return $this->maxFailedLoginAttempts->getValue();
    }

    /**
     * 
     */
    public function setPasswordExpiresDays($passwordExpiresDays = null)
    {
        if (!$passwordExpiresDays) return $this;
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
        return $this->passwordExpiresDays->getValue();
    }

    /**
     * 
     */
    public function setSendLoginDisabledNotifyEmail($sendLoginDisabledNotifyEmail = null)
    {
        if (!$sendLoginDisabledNotifyEmail) return $this;
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
        return $this->sendLoginDisabledNotifyEmail->getValue();
    }

    /**
     * 
     */
    public function setLoginDisabledNotifyEmailAddress($loginDisabledNotifyEmailAddress = null)
    {
        if (!$loginDisabledNotifyEmailAddress) return $this;
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
        return $this->loginDisabledNotifyEmailAddress->getValue();
    }

    /**
     * 
     */
    public function setDisallowPreviousPasswords($disallowPreviousPasswords = null)
    {
        if (!$disallowPreviousPasswords) return $this;
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
        return $this->disallowPreviousPasswords->getValue();
    }

    /**
     * 
     */
    public function setNumberOfPreviousPasswords($numberOfPreviousPasswords = null)
    {
        if (!$numberOfPreviousPasswords) return $this;
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
        return $this->numberOfPreviousPasswords->getValue();
    }
}
