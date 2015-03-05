<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\xs:boolean;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\PasscodeMinLength;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\PasscodeMaxLength;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\PortalMaxFailedLoginAttempts;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\PasscodeExpiresDays;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\EmailAddress;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\Password;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Request to modify the system passcode rules setting.
 *         The response is either SuccessResponse or ErrorResponse.
 */
class SystemPortalPasscodeRulesModifyRequest extends ComplexType implements ComplexInterface
{
    public    $name = __CLASS__;

    public function __construct(
             $disallowRepeatedDigits=null,
             $disallowUserNumber=null,
             $disallowReversedUserNumber=null,
             $disallowOldPasscode=null,
             $disallowReversedOldPasscode=null,
             $minCodeLength=null,
             $maxCodeLength=null,
             $disableLoginAfterMaxFailedLoginAttempts=null,
             $maxFailedLoginAttempts=null,
             $expirePassword=null,
             $passcodeExpiresDays=null,
             $sendLoginDisabledNotifyEmail=null,
             $loginDisabledNotifyEmailAddress=null,
             $defaultPassword=null
    ) {
        $this->disallowRepeatedDigits                  = $disallowRepeatedDigits;
        $this->disallowUserNumber                      = $disallowUserNumber;
        $this->disallowReversedUserNumber              = $disallowReversedUserNumber;
        $this->disallowOldPasscode                     = $disallowOldPasscode;
        $this->disallowReversedOldPasscode             = $disallowReversedOldPasscode;
        $this->minCodeLength                           = new PasscodeMinLength($minCodeLength);
        $this->maxCodeLength                           = new PasscodeMaxLength($maxCodeLength);
        $this->disableLoginAfterMaxFailedLoginAttempts = $disableLoginAfterMaxFailedLoginAttempts;
        $this->maxFailedLoginAttempts                  = new PortalMaxFailedLoginAttempts($maxFailedLoginAttempts);
        $this->expirePassword                          = $expirePassword;
        $this->passcodeExpiresDays                     = new PasscodeExpiresDays($passcodeExpiresDays);
        $this->sendLoginDisabledNotifyEmail            = $sendLoginDisabledNotifyEmail;
        $this->loginDisabledNotifyEmailAddress         = new EmailAddress($loginDisabledNotifyEmailAddress);
        $this->defaultPassword                         = new Password($defaultPassword);
        $this->args                                    = func_get_args();
    }

    public function setDisallowRepeatedDigits($disallowRepeatedDigits)
    {
        $disallowRepeatedDigits and $this->disallowRepeatedDigits = new xs:boolean($disallowRepeatedDigits);
    }

    public function getDisallowRepeatedDigits()
    {
        return (!$this->disallowRepeatedDigits) ?: $this->disallowRepeatedDigits->value();
    }

    public function setDisallowUserNumber($disallowUserNumber)
    {
        $disallowUserNumber and $this->disallowUserNumber = new xs:boolean($disallowUserNumber);
    }

    public function getDisallowUserNumber()
    {
        return (!$this->disallowUserNumber) ?: $this->disallowUserNumber->value();
    }

    public function setDisallowReversedUserNumber($disallowReversedUserNumber)
    {
        $disallowReversedUserNumber and $this->disallowReversedUserNumber = new xs:boolean($disallowReversedUserNumber);
    }

    public function getDisallowReversedUserNumber()
    {
        return (!$this->disallowReversedUserNumber) ?: $this->disallowReversedUserNumber->value();
    }

    public function setDisallowOldPasscode($disallowOldPasscode)
    {
        $disallowOldPasscode and $this->disallowOldPasscode = new xs:boolean($disallowOldPasscode);
    }

    public function getDisallowOldPasscode()
    {
        return (!$this->disallowOldPasscode) ?: $this->disallowOldPasscode->value();
    }

    public function setDisallowReversedOldPasscode($disallowReversedOldPasscode)
    {
        $disallowReversedOldPasscode and $this->disallowReversedOldPasscode = new xs:boolean($disallowReversedOldPasscode);
    }

    public function getDisallowReversedOldPasscode()
    {
        return (!$this->disallowReversedOldPasscode) ?: $this->disallowReversedOldPasscode->value();
    }

    public function setMinCodeLength($minCodeLength)
    {
        $minCodeLength and $this->minCodeLength = new PasscodeMinLength($minCodeLength);
    }

    public function getMinCodeLength()
    {
        return (!$this->minCodeLength) ?: $this->minCodeLength->value();
    }

    public function setMaxCodeLength($maxCodeLength)
    {
        $maxCodeLength and $this->maxCodeLength = new PasscodeMaxLength($maxCodeLength);
    }

    public function getMaxCodeLength()
    {
        return (!$this->maxCodeLength) ?: $this->maxCodeLength->value();
    }

    public function setDisableLoginAfterMaxFailedLoginAttempts($disableLoginAfterMaxFailedLoginAttempts)
    {
        $disableLoginAfterMaxFailedLoginAttempts and $this->disableLoginAfterMaxFailedLoginAttempts = new xs:boolean($disableLoginAfterMaxFailedLoginAttempts);
    }

    public function getDisableLoginAfterMaxFailedLoginAttempts()
    {
        return (!$this->disableLoginAfterMaxFailedLoginAttempts) ?: $this->disableLoginAfterMaxFailedLoginAttempts->value();
    }

    public function setMaxFailedLoginAttempts($maxFailedLoginAttempts)
    {
        $maxFailedLoginAttempts and $this->maxFailedLoginAttempts = new PortalMaxFailedLoginAttempts($maxFailedLoginAttempts);
    }

    public function getMaxFailedLoginAttempts()
    {
        return (!$this->maxFailedLoginAttempts) ?: $this->maxFailedLoginAttempts->value();
    }

    public function setExpirePassword($expirePassword)
    {
        $expirePassword and $this->expirePassword = new xs:boolean($expirePassword);
    }

    public function getExpirePassword()
    {
        return (!$this->expirePassword) ?: $this->expirePassword->value();
    }

    public function setPasscodeExpiresDays($passcodeExpiresDays)
    {
        $passcodeExpiresDays and $this->passcodeExpiresDays = new PasscodeExpiresDays($passcodeExpiresDays);
    }

    public function getPasscodeExpiresDays()
    {
        return (!$this->passcodeExpiresDays) ?: $this->passcodeExpiresDays->value();
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

    public function setDefaultPassword($defaultPassword)
    {
        $defaultPassword and $this->defaultPassword = new Password($defaultPassword);
    }

    public function getDefaultPassword()
    {
        return (!$this->defaultPassword) ?: $this->defaultPassword->value();
    }
}
