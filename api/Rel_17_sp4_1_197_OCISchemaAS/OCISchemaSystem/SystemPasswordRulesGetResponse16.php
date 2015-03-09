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
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem\SystemPasswordRulesGetResponse16;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Response to SystemPasswordRulesGetRequest16.
 *         Contains the password rules for System administrator, Provisioning Administrator,
 *         and/or Service Provider Administrator, Group Administrator, Department Administrator, user.
 */
class SystemPasswordRulesGetResponse16 extends ComplexType implements ComplexInterface
{
    public    $name                                   = __CLASS__;
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
    protected $disallowRulesModification              = null;
    protected $disallowPreviousPasswords              = null;
    protected $numberOfPreviousPasswords              = null;

    /**
     * @return SystemPasswordRulesGetResponse16
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * User types for which the System Password Rules apply.
     *         The rules could apply to the
     *           (1) System, Provisioning Administrator
     *           (2) System, Provisioning, Service Provider Administrator
     *           (3) Administrator (System, Provisioning, Service Provider, Group and Department) and Users.
     */
    public function setRulesApplyTo($rulesApplyTo = null)
    {
        $this->rulesApplyTo = ($rulesApplyTo InstanceOf SystemPasswordRulesApplyTo)
             ? $rulesApplyTo
             : new SystemPasswordRulesApplyTo($rulesApplyTo);
    }

    /**
     * User types for which the System Password Rules apply.
     *         The rules could apply to the
     *           (1) System, Provisioning Administrator
     *           (2) System, Provisioning, Service Provider Administrator
     *           (3) Administrator (System, Provisioning, Service Provider, Group and Department) and Users.
     */
    public function getRulesApplyTo()
    {
        return (!$this->rulesApplyTo) ?: $this->rulesApplyTo->getValue();
    }

    /**
     * 
     */
    public function setAllowWebAddExternalAuthenticationUsers($allowWebAddExternalAuthenticationUsers = null)
    {
        $this->allowWebAddExternalAuthenticationUsers = (boolean) $allowWebAddExternalAuthenticationUsers;
    }

    /**
     * 
     */
    public function getAllowWebAddExternalAuthenticationUsers()
    {
        return (!$this->allowWebAddExternalAuthenticationUsers) ?: $this->allowWebAddExternalAuthenticationUsers;
    }

    /**
     * 
     */
    public function setDisallowUserId($disallowUserId = null)
    {
        $this->disallowUserId = (boolean) $disallowUserId;
    }

    /**
     * 
     */
    public function getDisallowUserId()
    {
        return (!$this->disallowUserId) ?: $this->disallowUserId;
    }

    /**
     * 
     */
    public function setDisallowOldPassword($disallowOldPassword = null)
    {
        $this->disallowOldPassword = (boolean) $disallowOldPassword;
    }

    /**
     * 
     */
    public function getDisallowOldPassword()
    {
        return (!$this->disallowOldPassword) ?: $this->disallowOldPassword;
    }

    /**
     * 
     */
    public function setDisallowReversedOldPassword($disallowReversedOldPassword = null)
    {
        $this->disallowReversedOldPassword = (boolean) $disallowReversedOldPassword;
    }

    /**
     * 
     */
    public function getDisallowReversedOldPassword()
    {
        return (!$this->disallowReversedOldPassword) ?: $this->disallowReversedOldPassword;
    }

    /**
     * 
     */
    public function setRestrictMinDigits($restrictMinDigits = null)
    {
        $this->restrictMinDigits = (boolean) $restrictMinDigits;
    }

    /**
     * 
     */
    public function getRestrictMinDigits()
    {
        return (!$this->restrictMinDigits) ?: $this->restrictMinDigits;
    }

    /**
     * Password Rules can be used to require at least this many numeric digits in passwords.
     */
    public function setMinDigits($minDigits = null)
    {
        $this->minDigits = ($minDigits InstanceOf PasswordMinDigits)
             ? $minDigits
             : new PasswordMinDigits($minDigits);
    }

    /**
     * Password Rules can be used to require at least this many numeric digits in passwords.
     */
    public function getMinDigits()
    {
        return (!$this->minDigits) ?: $this->minDigits->getValue();
    }

    /**
     * 
     */
    public function setRestrictMinUpperCaseLetters($restrictMinUpperCaseLetters = null)
    {
        $this->restrictMinUpperCaseLetters = (boolean) $restrictMinUpperCaseLetters;
    }

    /**
     * 
     */
    public function getRestrictMinUpperCaseLetters()
    {
        return (!$this->restrictMinUpperCaseLetters) ?: $this->restrictMinUpperCaseLetters;
    }

    /**
     * Password Rules can be used to require at least this many uppercase letters in passwords.
     */
    public function setMinUpperCaseLetters($minUpperCaseLetters = null)
    {
        $this->minUpperCaseLetters = ($minUpperCaseLetters InstanceOf PasswordMinUpperCaseLetters)
             ? $minUpperCaseLetters
             : new PasswordMinUpperCaseLetters($minUpperCaseLetters);
    }

    /**
     * Password Rules can be used to require at least this many uppercase letters in passwords.
     */
    public function getMinUpperCaseLetters()
    {
        return (!$this->minUpperCaseLetters) ?: $this->minUpperCaseLetters->getValue();
    }

    /**
     * 
     */
    public function setRestrictMinLowerCaseLetters($restrictMinLowerCaseLetters = null)
    {
        $this->restrictMinLowerCaseLetters = (boolean) $restrictMinLowerCaseLetters;
    }

    /**
     * 
     */
    public function getRestrictMinLowerCaseLetters()
    {
        return (!$this->restrictMinLowerCaseLetters) ?: $this->restrictMinLowerCaseLetters;
    }

    /**
     * Password Rules can be used to require at least this many lowercase letters in passwords.
     */
    public function setMinLowerCaseLetters($minLowerCaseLetters = null)
    {
        $this->minLowerCaseLetters = ($minLowerCaseLetters InstanceOf PasswordMinLowerCaseLetters)
             ? $minLowerCaseLetters
             : new PasswordMinLowerCaseLetters($minLowerCaseLetters);
    }

    /**
     * Password Rules can be used to require at least this many lowercase letters in passwords.
     */
    public function getMinLowerCaseLetters()
    {
        return (!$this->minLowerCaseLetters) ?: $this->minLowerCaseLetters->getValue();
    }

    /**
     * 
     */
    public function setRestrictMinNonAlphanumericCharacters($restrictMinNonAlphanumericCharacters = null)
    {
        $this->restrictMinNonAlphanumericCharacters = (boolean) $restrictMinNonAlphanumericCharacters;
    }

    /**
     * 
     */
    public function getRestrictMinNonAlphanumericCharacters()
    {
        return (!$this->restrictMinNonAlphanumericCharacters) ?: $this->restrictMinNonAlphanumericCharacters;
    }

    /**
     * Password Rules can be used to require at least this many non-alphanumeric characters in passwords.
     */
    public function setMinNonAlphanumericCharacters($minNonAlphanumericCharacters = null)
    {
        $this->minNonAlphanumericCharacters = ($minNonAlphanumericCharacters InstanceOf PasswordMinNonAlphanumericCharacters)
             ? $minNonAlphanumericCharacters
             : new PasswordMinNonAlphanumericCharacters($minNonAlphanumericCharacters);
    }

    /**
     * Password Rules can be used to require at least this many non-alphanumeric characters in passwords.
     */
    public function getMinNonAlphanumericCharacters()
    {
        return (!$this->minNonAlphanumericCharacters) ?: $this->minNonAlphanumericCharacters->getValue();
    }

    /**
     * Password Rules can be used to require at least this total characters in passwords.
     */
    public function setMinLength($minLength = null)
    {
        $this->minLength = ($minLength InstanceOf PasswordMinLength)
             ? $minLength
             : new PasswordMinLength($minLength);
    }

    /**
     * Password Rules can be used to require at least this total characters in passwords.
     */
    public function getMinLength()
    {
        return (!$this->minLength) ?: $this->minLength->getValue();
    }

    /**
     * Password Rules can be used to specify the maximum allowed failed login attempts.
     */
    public function setMaxFailedLoginAttempts($maxFailedLoginAttempts = null)
    {
        $this->maxFailedLoginAttempts = ($maxFailedLoginAttempts InstanceOf MaxFailedLoginAttempts)
             ? $maxFailedLoginAttempts
             : new MaxFailedLoginAttempts($maxFailedLoginAttempts);
    }

    /**
     * Password Rules can be used to specify the maximum allowed failed login attempts.
     */
    public function getMaxFailedLoginAttempts()
    {
        return (!$this->maxFailedLoginAttempts) ?: $this->maxFailedLoginAttempts->getValue();
    }

    /**
     * Password Rules can be used to specify when passwords expire.
     */
    public function setPasswordExpiresDays($passwordExpiresDays = null)
    {
        $this->passwordExpiresDays = ($passwordExpiresDays InstanceOf PasswordExpiresDays)
             ? $passwordExpiresDays
             : new PasswordExpiresDays($passwordExpiresDays);
    }

    /**
     * Password Rules can be used to specify when passwords expire.
     */
    public function getPasswordExpiresDays()
    {
        return (!$this->passwordExpiresDays) ?: $this->passwordExpiresDays->getValue();
    }

    /**
     * 
     */
    public function setSendLoginDisabledNotifyEmail($sendLoginDisabledNotifyEmail = null)
    {
        $this->sendLoginDisabledNotifyEmail = (boolean) $sendLoginDisabledNotifyEmail;
    }

    /**
     * 
     */
    public function getSendLoginDisabledNotifyEmail()
    {
        return (!$this->sendLoginDisabledNotifyEmail) ?: $this->sendLoginDisabledNotifyEmail;
    }

    /**
     * Email Address
     */
    public function setLoginDisabledNotifyEmailAddress($loginDisabledNotifyEmailAddress = null)
    {
        $this->loginDisabledNotifyEmailAddress = ($loginDisabledNotifyEmailAddress InstanceOf EmailAddress)
             ? $loginDisabledNotifyEmailAddress
             : new EmailAddress($loginDisabledNotifyEmailAddress);
    }

    /**
     * Email Address
     */
    public function getLoginDisabledNotifyEmailAddress()
    {
        return (!$this->loginDisabledNotifyEmailAddress) ?: $this->loginDisabledNotifyEmailAddress->getValue();
    }

    /**
     * 
     */
    public function setDisallowRulesModification($disallowRulesModification = null)
    {
        $this->disallowRulesModification = (boolean) $disallowRulesModification;
    }

    /**
     * 
     */
    public function getDisallowRulesModification()
    {
        return (!$this->disallowRulesModification) ?: $this->disallowRulesModification;
    }

    /**
     * 
     */
    public function setDisallowPreviousPasswords($disallowPreviousPasswords = null)
    {
        $this->disallowPreviousPasswords = (boolean) $disallowPreviousPasswords;
    }

    /**
     * 
     */
    public function getDisallowPreviousPasswords()
    {
        return (!$this->disallowPreviousPasswords) ?: $this->disallowPreviousPasswords;
    }

    /**
     * Number of previous passwords to keep.
     */
    public function setNumberOfPreviousPasswords($numberOfPreviousPasswords = null)
    {
        $this->numberOfPreviousPasswords = ($numberOfPreviousPasswords InstanceOf PasswordHistoryCount)
             ? $numberOfPreviousPasswords
             : new PasswordHistoryCount($numberOfPreviousPasswords);
    }

    /**
     * Number of previous passwords to keep.
     */
    public function getNumberOfPreviousPasswords()
    {
        return (!$this->numberOfPreviousPasswords) ?: $this->numberOfPreviousPasswords->getValue();
    }
}
