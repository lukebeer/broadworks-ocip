<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceProvider; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\PortalMaxFailedLoginAttempts;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\PasscodeExpiresDays;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\PasscodeMinLength;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\PasscodeMaxLength;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\EmailAddress;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Response to ServiceProviderPortalPasscodeRulesGetRequest.
 *         Contains the service provider's passcode rules setting.
 */
class ServiceProviderPortalPasscodeRulesGetResponse extends ComplexType implements ComplexInterface
{
    public    $name                                     = __CLASS__;
    protected $disallowRepeatedDigits                   = null;
    protected $disallowUserNumber                       = null;
    protected $disallowReversedUserNumber               = null;
    protected $disallowOldPasscode                      = null;
    protected $disallowReversedOldPasscode              = null;
    protected $minCodeLength                            = null;
    protected $maxCodeLength                            = null;
    protected $disableLoginAfterMaxFailedLoginAttempts  = null;
    protected $maxFailedLoginAttempts                   = null;
    protected $expirePassword                           = null;
    protected $passcodeExpiresDays                      = null;
    protected $sendLoginDisabledNotifyEmail             = null;
    protected $loginDisabledNotifyEmailAddress          = null;


    public function setDisallowRepeatedDigits(xs:boolean $disallowRepeatedDigits = null)
    {
    }

    public function getDisallowRepeatedDigits()
    {
        return (!$this->disallowRepeatedDigits) ?: $this->disallowRepeatedDigits->value();
    }

    public function setDisallowUserNumber(xs:boolean $disallowUserNumber = null)
    {
    }

    public function getDisallowUserNumber()
    {
        return (!$this->disallowUserNumber) ?: $this->disallowUserNumber->value();
    }

    public function setDisallowReversedUserNumber(xs:boolean $disallowReversedUserNumber = null)
    {
    }

    public function getDisallowReversedUserNumber()
    {
        return (!$this->disallowReversedUserNumber) ?: $this->disallowReversedUserNumber->value();
    }

    public function setDisallowOldPasscode(xs:boolean $disallowOldPasscode = null)
    {
    }

    public function getDisallowOldPasscode()
    {
        return (!$this->disallowOldPasscode) ?: $this->disallowOldPasscode->value();
    }

    public function setDisallowReversedOldPasscode(xs:boolean $disallowReversedOldPasscode = null)
    {
    }

    public function getDisallowReversedOldPasscode()
    {
        return (!$this->disallowReversedOldPasscode) ?: $this->disallowReversedOldPasscode->value();
    }

    public function setMinCodeLength($minCodeLength = null)
    {
        $this->minCodeLength = ($minCodeLength InstanceOf PasscodeMinLength)
             ? $minCodeLength
             : new PasscodeMinLength($minCodeLength);
    }

    public function getMinCodeLength()
    {
        return (!$this->minCodeLength) ?: $this->minCodeLength->value();
    }

    public function setMaxCodeLength($maxCodeLength = null)
    {
        $this->maxCodeLength = ($maxCodeLength InstanceOf PasscodeMaxLength)
             ? $maxCodeLength
             : new PasscodeMaxLength($maxCodeLength);
    }

    public function getMaxCodeLength()
    {
        return (!$this->maxCodeLength) ?: $this->maxCodeLength->value();
    }

    public function setDisableLoginAfterMaxFailedLoginAttempts(xs:boolean $disableLoginAfterMaxFailedLoginAttempts = null)
    {
    }

    public function getDisableLoginAfterMaxFailedLoginAttempts()
    {
        return (!$this->disableLoginAfterMaxFailedLoginAttempts) ?: $this->disableLoginAfterMaxFailedLoginAttempts->value();
    }

    public function setMaxFailedLoginAttempts($maxFailedLoginAttempts = null)
    {
        $this->maxFailedLoginAttempts = ($maxFailedLoginAttempts InstanceOf PortalMaxFailedLoginAttempts)
             ? $maxFailedLoginAttempts
             : new PortalMaxFailedLoginAttempts($maxFailedLoginAttempts);
    }

    public function getMaxFailedLoginAttempts()
    {
        return (!$this->maxFailedLoginAttempts) ?: $this->maxFailedLoginAttempts->value();
    }

    public function setExpirePassword(xs:boolean $expirePassword = null)
    {
    }

    public function getExpirePassword()
    {
        return (!$this->expirePassword) ?: $this->expirePassword->value();
    }

    public function setPasscodeExpiresDays($passcodeExpiresDays = null)
    {
        $this->passcodeExpiresDays = ($passcodeExpiresDays InstanceOf PasscodeExpiresDays)
             ? $passcodeExpiresDays
             : new PasscodeExpiresDays($passcodeExpiresDays);
    }

    public function getPasscodeExpiresDays()
    {
        return (!$this->passcodeExpiresDays) ?: $this->passcodeExpiresDays->value();
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
}
