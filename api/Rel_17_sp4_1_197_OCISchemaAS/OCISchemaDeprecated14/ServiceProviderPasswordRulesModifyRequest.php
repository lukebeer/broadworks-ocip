<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated14; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceProvider\ServiceProviderPasswordRulesApplyTo;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\PasswordMinNonAlphanumericCharacters;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\PasswordMinUpperCaseLetters;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\PasswordMinLowerCaseLetters;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\MaxFailedLoginAttempts;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\PasswordExpiresDays;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\PasswordMinLength;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ServiceProviderId;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\PasswordMinDigits;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\EmailAddress;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Request to modify the service provider's password rules settings
 *         setting applicable to Administrators (Group and Department) and Users.
 *         The response is either SuccessResponse or ErrorResponse.
 *         Replaced By: ServiceProviderPasswordRulesModifyRequest14sp3
 */
class ServiceProviderPasswordRulesModifyRequest extends ComplexType implements ComplexInterface
{
    public    $name                                    = __CLASS__;
    protected $serviceProviderId                       = null;
    protected $rulesApplyTo                            = null;
    protected $allowWebAddExternalAuthenticationUsers  = null;
    protected $disallowUserId                          = null;
    protected $disallowOldPassword                     = null;
    protected $disallowReversedOldPassword             = null;
    protected $restrictMinDigits                       = null;
    protected $minDigits                               = null;
    protected $restrictMinUpperCaseLetters             = null;
    protected $minUpperCaseLetters                     = null;
    protected $restrictMinLowerCaseLetters             = null;
    protected $minLowerCaseLetters                     = null;
    protected $restrictMinNonAlphanumericCharacters    = null;
    protected $minNonAlphanumericCharacters            = null;
    protected $minLength                               = null;
    protected $maxFailedLoginAttempts                  = null;
    protected $passwordExpiresDays                     = null;
    protected $sendLoginDisabledNotifyEmail            = null;
    protected $loginDisabledNotifyEmailAddress         = null;
    protected $disallowRulesModification               = null;

    public function __construct(
         $serviceProviderId,
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
         $disallowRulesModification = null
    ) {
        $this->setServiceProviderId($serviceProviderId);
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
        $this->setDisallowRulesModification($disallowRulesModification);
    }

    public function setServiceProviderId($serviceProviderId = null)
    {
        $this->serviceProviderId = ($serviceProviderId InstanceOf ServiceProviderId)
             ? $serviceProviderId
             : new ServiceProviderId($serviceProviderId);
    }

    public function getServiceProviderId()
    {
        return (!$this->serviceProviderId) ?: $this->serviceProviderId->value();
    }

    public function setRulesApplyTo($rulesApplyTo = null)
    {
        $this->rulesApplyTo = ($rulesApplyTo InstanceOf ServiceProviderPasswordRulesApplyTo)
             ? $rulesApplyTo
             : new ServiceProviderPasswordRulesApplyTo($rulesApplyTo);
    }

    public function getRulesApplyTo()
    {
        return (!$this->rulesApplyTo) ?: $this->rulesApplyTo->value();
    }

    public function setAllowWebAddExternalAuthenticationUsers(xs:boolean $allowWebAddExternalAuthenticationUsers = null)
    {
    }

    public function getAllowWebAddExternalAuthenticationUsers()
    {
        return (!$this->allowWebAddExternalAuthenticationUsers) ?: $this->allowWebAddExternalAuthenticationUsers->value();
    }

    public function setDisallowUserId(xs:boolean $disallowUserId = null)
    {
    }

    public function getDisallowUserId()
    {
        return (!$this->disallowUserId) ?: $this->disallowUserId->value();
    }

    public function setDisallowOldPassword(xs:boolean $disallowOldPassword = null)
    {
    }

    public function getDisallowOldPassword()
    {
        return (!$this->disallowOldPassword) ?: $this->disallowOldPassword->value();
    }

    public function setDisallowReversedOldPassword(xs:boolean $disallowReversedOldPassword = null)
    {
    }

    public function getDisallowReversedOldPassword()
    {
        return (!$this->disallowReversedOldPassword) ?: $this->disallowReversedOldPassword->value();
    }

    public function setRestrictMinDigits(xs:boolean $restrictMinDigits = null)
    {
    }

    public function getRestrictMinDigits()
    {
        return (!$this->restrictMinDigits) ?: $this->restrictMinDigits->value();
    }

    public function setMinDigits($minDigits = null)
    {
        $this->minDigits = ($minDigits InstanceOf PasswordMinDigits)
             ? $minDigits
             : new PasswordMinDigits($minDigits);
    }

    public function getMinDigits()
    {
        return (!$this->minDigits) ?: $this->minDigits->value();
    }

    public function setRestrictMinUpperCaseLetters(xs:boolean $restrictMinUpperCaseLetters = null)
    {
    }

    public function getRestrictMinUpperCaseLetters()
    {
        return (!$this->restrictMinUpperCaseLetters) ?: $this->restrictMinUpperCaseLetters->value();
    }

    public function setMinUpperCaseLetters($minUpperCaseLetters = null)
    {
        $this->minUpperCaseLetters = ($minUpperCaseLetters InstanceOf PasswordMinUpperCaseLetters)
             ? $minUpperCaseLetters
             : new PasswordMinUpperCaseLetters($minUpperCaseLetters);
    }

    public function getMinUpperCaseLetters()
    {
        return (!$this->minUpperCaseLetters) ?: $this->minUpperCaseLetters->value();
    }

    public function setRestrictMinLowerCaseLetters(xs:boolean $restrictMinLowerCaseLetters = null)
    {
    }

    public function getRestrictMinLowerCaseLetters()
    {
        return (!$this->restrictMinLowerCaseLetters) ?: $this->restrictMinLowerCaseLetters->value();
    }

    public function setMinLowerCaseLetters($minLowerCaseLetters = null)
    {
        $this->minLowerCaseLetters = ($minLowerCaseLetters InstanceOf PasswordMinLowerCaseLetters)
             ? $minLowerCaseLetters
             : new PasswordMinLowerCaseLetters($minLowerCaseLetters);
    }

    public function getMinLowerCaseLetters()
    {
        return (!$this->minLowerCaseLetters) ?: $this->minLowerCaseLetters->value();
    }

    public function setRestrictMinNonAlphanumericCharacters(xs:boolean $restrictMinNonAlphanumericCharacters = null)
    {
    }

    public function getRestrictMinNonAlphanumericCharacters()
    {
        return (!$this->restrictMinNonAlphanumericCharacters) ?: $this->restrictMinNonAlphanumericCharacters->value();
    }

    public function setMinNonAlphanumericCharacters($minNonAlphanumericCharacters = null)
    {
        $this->minNonAlphanumericCharacters = ($minNonAlphanumericCharacters InstanceOf PasswordMinNonAlphanumericCharacters)
             ? $minNonAlphanumericCharacters
             : new PasswordMinNonAlphanumericCharacters($minNonAlphanumericCharacters);
    }

    public function getMinNonAlphanumericCharacters()
    {
        return (!$this->minNonAlphanumericCharacters) ?: $this->minNonAlphanumericCharacters->value();
    }

    public function setMinLength($minLength = null)
    {
        $this->minLength = ($minLength InstanceOf PasswordMinLength)
             ? $minLength
             : new PasswordMinLength($minLength);
    }

    public function getMinLength()
    {
        return (!$this->minLength) ?: $this->minLength->value();
    }

    public function setMaxFailedLoginAttempts($maxFailedLoginAttempts = null)
    {
        $this->maxFailedLoginAttempts = ($maxFailedLoginAttempts InstanceOf MaxFailedLoginAttempts)
             ? $maxFailedLoginAttempts
             : new MaxFailedLoginAttempts($maxFailedLoginAttempts);
    }

    public function getMaxFailedLoginAttempts()
    {
        return (!$this->maxFailedLoginAttempts) ?: $this->maxFailedLoginAttempts->value();
    }

    public function setPasswordExpiresDays($passwordExpiresDays = null)
    {
        $this->passwordExpiresDays = ($passwordExpiresDays InstanceOf PasswordExpiresDays)
             ? $passwordExpiresDays
             : new PasswordExpiresDays($passwordExpiresDays);
    }

    public function getPasswordExpiresDays()
    {
        return (!$this->passwordExpiresDays) ?: $this->passwordExpiresDays->value();
    }

    public function setSendLoginDisabledNotifyEmail(xs:boolean $sendLoginDisabledNotifyEmail = null)
    {
    }

    public function getSendLoginDisabledNotifyEmail()
    {
        return (!$this->sendLoginDisabledNotifyEmail) ?: $this->sendLoginDisabledNotifyEmail->value();
    }

    public function setLoginDisabledNotifyEmailAddress($loginDisabledNotifyEmailAddress = null)
    {
        $this->loginDisabledNotifyEmailAddress = ($loginDisabledNotifyEmailAddress InstanceOf EmailAddress)
             ? $loginDisabledNotifyEmailAddress
             : new EmailAddress($loginDisabledNotifyEmailAddress);
    }

    public function getLoginDisabledNotifyEmailAddress()
    {
        return (!$this->loginDisabledNotifyEmailAddress) ?: $this->loginDisabledNotifyEmailAddress->value();
    }

    public function setDisallowRulesModification(xs:boolean $disallowRulesModification = null)
    {
    }

    public function getDisallowRulesModification()
    {
        return (!$this->disallowRulesModification) ?: $this->disallowRulesModification->value();
    }
}
