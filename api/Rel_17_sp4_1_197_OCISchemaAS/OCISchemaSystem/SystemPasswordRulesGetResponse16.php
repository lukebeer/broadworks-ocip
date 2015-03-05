<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\SystemPasswordRulesApplyTo;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\xs:boolean;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\PasswordMinDigits;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\PasswordMinUpperCaseLetters;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\PasswordMinLowerCaseLetters;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\PasswordMinNonAlphanumericCharacters;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\PasswordMinLength;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\MaxFailedLoginAttempts;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\PasswordExpiresDays;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\EmailAddress;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\PasswordHistoryCount;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Response to SystemPasswordRulesGetRequest16.
 *         Contains the password rules for System administrator, Provisioning Administrator,
 *         and/or Service Provider Administrator, Group Administrator, Department Administrator, user.
 */
class SystemPasswordRulesGetResponse16 extends ComplexType implements ComplexInterface
{
    public    $name = __CLASS__;

    public function __construct(
             $rulesApplyTo,
             $allowWebAddExternalAuthenticationUsers,
             $disallowUserId,
             $disallowOldPassword,
             $disallowReversedOldPassword,
             $restrictMinDigits,
             $minDigits,
             $restrictMinUpperCaseLetters,
             $minUpperCaseLetters,
             $restrictMinLowerCaseLetters,
             $minLowerCaseLetters,
             $restrictMinNonAlphanumericCharacters,
             $minNonAlphanumericCharacters,
             $minLength,
             $maxFailedLoginAttempts,
             $passwordExpiresDays,
             $sendLoginDisabledNotifyEmail,
             $loginDisabledNotifyEmailAddress=null,
             $disallowRulesModification,
             $disallowPreviousPasswords,
             $numberOfPreviousPasswords
    ) {
        $this->rulesApplyTo                           = $rulesApplyTo;
        $this->allowWebAddExternalAuthenticationUsers = $allowWebAddExternalAuthenticationUsers;
        $this->disallowUserId                         = $disallowUserId;
        $this->disallowOldPassword                    = $disallowOldPassword;
        $this->disallowReversedOldPassword            = $disallowReversedOldPassword;
        $this->restrictMinDigits                      = $restrictMinDigits;
        $this->minDigits                              = new PasswordMinDigits($minDigits);
        $this->restrictMinUpperCaseLetters            = $restrictMinUpperCaseLetters;
        $this->minUpperCaseLetters                    = new PasswordMinUpperCaseLetters($minUpperCaseLetters);
        $this->restrictMinLowerCaseLetters            = $restrictMinLowerCaseLetters;
        $this->minLowerCaseLetters                    = new PasswordMinLowerCaseLetters($minLowerCaseLetters);
        $this->restrictMinNonAlphanumericCharacters   = $restrictMinNonAlphanumericCharacters;
        $this->minNonAlphanumericCharacters           = new PasswordMinNonAlphanumericCharacters($minNonAlphanumericCharacters);
        $this->minLength                              = new PasswordMinLength($minLength);
        $this->maxFailedLoginAttempts                 = new MaxFailedLoginAttempts($maxFailedLoginAttempts);
        $this->passwordExpiresDays                    = new PasswordExpiresDays($passwordExpiresDays);
        $this->sendLoginDisabledNotifyEmail           = $sendLoginDisabledNotifyEmail;
        $this->loginDisabledNotifyEmailAddress        = new EmailAddress($loginDisabledNotifyEmailAddress);
        $this->disallowRulesModification              = $disallowRulesModification;
        $this->disallowPreviousPasswords              = $disallowPreviousPasswords;
        $this->numberOfPreviousPasswords              = new PasswordHistoryCount($numberOfPreviousPasswords);
        $this->args                                   = func_get_args();
    }

    public function setRulesApplyTo($rulesApplyTo)
    {
        $rulesApplyTo and $this->rulesApplyTo = new SystemPasswordRulesApplyTo($rulesApplyTo);
    }

    public function getRulesApplyTo()
    {
        return (!$this->rulesApplyTo) ?: $this->rulesApplyTo->value();
    }

    public function setAllowWebAddExternalAuthenticationUsers($allowWebAddExternalAuthenticationUsers)
    {
        $allowWebAddExternalAuthenticationUsers and $this->allowWebAddExternalAuthenticationUsers = new xs:boolean($allowWebAddExternalAuthenticationUsers);
    }

    public function getAllowWebAddExternalAuthenticationUsers()
    {
        return (!$this->allowWebAddExternalAuthenticationUsers) ?: $this->allowWebAddExternalAuthenticationUsers->value();
    }

    public function setDisallowUserId($disallowUserId)
    {
        $disallowUserId and $this->disallowUserId = new xs:boolean($disallowUserId);
    }

    public function getDisallowUserId()
    {
        return (!$this->disallowUserId) ?: $this->disallowUserId->value();
    }

    public function setDisallowOldPassword($disallowOldPassword)
    {
        $disallowOldPassword and $this->disallowOldPassword = new xs:boolean($disallowOldPassword);
    }

    public function getDisallowOldPassword()
    {
        return (!$this->disallowOldPassword) ?: $this->disallowOldPassword->value();
    }

    public function setDisallowReversedOldPassword($disallowReversedOldPassword)
    {
        $disallowReversedOldPassword and $this->disallowReversedOldPassword = new xs:boolean($disallowReversedOldPassword);
    }

    public function getDisallowReversedOldPassword()
    {
        return (!$this->disallowReversedOldPassword) ?: $this->disallowReversedOldPassword->value();
    }

    public function setRestrictMinDigits($restrictMinDigits)
    {
        $restrictMinDigits and $this->restrictMinDigits = new xs:boolean($restrictMinDigits);
    }

    public function getRestrictMinDigits()
    {
        return (!$this->restrictMinDigits) ?: $this->restrictMinDigits->value();
    }

    public function setMinDigits($minDigits)
    {
        $minDigits and $this->minDigits = new PasswordMinDigits($minDigits);
    }

    public function getMinDigits()
    {
        return (!$this->minDigits) ?: $this->minDigits->value();
    }

    public function setRestrictMinUpperCaseLetters($restrictMinUpperCaseLetters)
    {
        $restrictMinUpperCaseLetters and $this->restrictMinUpperCaseLetters = new xs:boolean($restrictMinUpperCaseLetters);
    }

    public function getRestrictMinUpperCaseLetters()
    {
        return (!$this->restrictMinUpperCaseLetters) ?: $this->restrictMinUpperCaseLetters->value();
    }

    public function setMinUpperCaseLetters($minUpperCaseLetters)
    {
        $minUpperCaseLetters and $this->minUpperCaseLetters = new PasswordMinUpperCaseLetters($minUpperCaseLetters);
    }

    public function getMinUpperCaseLetters()
    {
        return (!$this->minUpperCaseLetters) ?: $this->minUpperCaseLetters->value();
    }

    public function setRestrictMinLowerCaseLetters($restrictMinLowerCaseLetters)
    {
        $restrictMinLowerCaseLetters and $this->restrictMinLowerCaseLetters = new xs:boolean($restrictMinLowerCaseLetters);
    }

    public function getRestrictMinLowerCaseLetters()
    {
        return (!$this->restrictMinLowerCaseLetters) ?: $this->restrictMinLowerCaseLetters->value();
    }

    public function setMinLowerCaseLetters($minLowerCaseLetters)
    {
        $minLowerCaseLetters and $this->minLowerCaseLetters = new PasswordMinLowerCaseLetters($minLowerCaseLetters);
    }

    public function getMinLowerCaseLetters()
    {
        return (!$this->minLowerCaseLetters) ?: $this->minLowerCaseLetters->value();
    }

    public function setRestrictMinNonAlphanumericCharacters($restrictMinNonAlphanumericCharacters)
    {
        $restrictMinNonAlphanumericCharacters and $this->restrictMinNonAlphanumericCharacters = new xs:boolean($restrictMinNonAlphanumericCharacters);
    }

    public function getRestrictMinNonAlphanumericCharacters()
    {
        return (!$this->restrictMinNonAlphanumericCharacters) ?: $this->restrictMinNonAlphanumericCharacters->value();
    }

    public function setMinNonAlphanumericCharacters($minNonAlphanumericCharacters)
    {
        $minNonAlphanumericCharacters and $this->minNonAlphanumericCharacters = new PasswordMinNonAlphanumericCharacters($minNonAlphanumericCharacters);
    }

    public function getMinNonAlphanumericCharacters()
    {
        return (!$this->minNonAlphanumericCharacters) ?: $this->minNonAlphanumericCharacters->value();
    }

    public function setMinLength($minLength)
    {
        $minLength and $this->minLength = new PasswordMinLength($minLength);
    }

    public function getMinLength()
    {
        return (!$this->minLength) ?: $this->minLength->value();
    }

    public function setMaxFailedLoginAttempts($maxFailedLoginAttempts)
    {
        $maxFailedLoginAttempts and $this->maxFailedLoginAttempts = new MaxFailedLoginAttempts($maxFailedLoginAttempts);
    }

    public function getMaxFailedLoginAttempts()
    {
        return (!$this->maxFailedLoginAttempts) ?: $this->maxFailedLoginAttempts->value();
    }

    public function setPasswordExpiresDays($passwordExpiresDays)
    {
        $passwordExpiresDays and $this->passwordExpiresDays = new PasswordExpiresDays($passwordExpiresDays);
    }

    public function getPasswordExpiresDays()
    {
        return (!$this->passwordExpiresDays) ?: $this->passwordExpiresDays->value();
    }

    public function setSendLoginDisabledNotifyEmail($sendLoginDisabledNotifyEmail)
    {
        $sendLoginDisabledNotifyEmail and $this->sendLoginDisabledNotifyEmail = new xs:boolean($sendLoginDisabledNotifyEmail);
    }

    public function getSendLoginDisabledNotifyEmail()
    {
        return (!$this->sendLoginDisabledNotifyEmail) ?: $this->sendLoginDisabledNotifyEmail->value();
    }

    public function setLoginDisabledNotifyEmailAddress($loginDisabledNotifyEmailAddress)
    {
        $loginDisabledNotifyEmailAddress and $this->loginDisabledNotifyEmailAddress = new EmailAddress($loginDisabledNotifyEmailAddress);
    }

    public function getLoginDisabledNotifyEmailAddress()
    {
        return (!$this->loginDisabledNotifyEmailAddress) ?: $this->loginDisabledNotifyEmailAddress->value();
    }

    public function setDisallowRulesModification($disallowRulesModification)
    {
        $disallowRulesModification and $this->disallowRulesModification = new xs:boolean($disallowRulesModification);
    }

    public function getDisallowRulesModification()
    {
        return (!$this->disallowRulesModification) ?: $this->disallowRulesModification->value();
    }

    public function setDisallowPreviousPasswords($disallowPreviousPasswords)
    {
        $disallowPreviousPasswords and $this->disallowPreviousPasswords = new xs:boolean($disallowPreviousPasswords);
    }

    public function getDisallowPreviousPasswords()
    {
        return (!$this->disallowPreviousPasswords) ?: $this->disallowPreviousPasswords->value();
    }

    public function setNumberOfPreviousPasswords($numberOfPreviousPasswords)
    {
        $numberOfPreviousPasswords and $this->numberOfPreviousPasswords = new PasswordHistoryCount($numberOfPreviousPasswords);
    }

    public function getNumberOfPreviousPasswords()
    {
        return (!$this->numberOfPreviousPasswords) ?: $this->numberOfPreviousPasswords->value();
    }
}
