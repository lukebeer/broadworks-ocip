<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated14; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\xs:boolean;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\VoiceMessagingMinPasscodeCodeLength;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\VoiceMessagingMaxPasscodeCodeLength;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\VoiceMessagingMaxFailedLoginAttempts;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\VoiceMessagingPasscodeExpiresDays;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\EmailAddress;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Response to ServiceProviderVoiceMessagingGroupGetPasscodeRulesRequest.
 *         Contains the service provider's voice portal passcode rules setting.
 *         Replaced By: ServiceProviderPortalPasscodeRulesGetResponse
 */
class ServiceProviderVoiceMessagingGroupGetPasscodeRulesResponse extends ComplexType implements ComplexInterface
{
    public    $name = __CLASS__;

    public function __construct(
             $disallowRepeatedDigits,
             $disallowUserNumber,
             $disallowReversedUserNumber,
             $disallowOldPasscode,
             $disallowReversedOldPasscode,
             $minCodeLength,
             $maxCodeLength,
             $disableLoginAfterMaxFailedLoginAttempts,
             $maxFailedLoginAttempts=null,
             $expirePassword,
             $passcodeExpiresDays=null,
             $sendLoginDisabledNotifyEmail,
             $loginDisabledNotifyEmailAddress=null
    ) {
        $this->disallowRepeatedDigits                  = $disallowRepeatedDigits;
        $this->disallowUserNumber                      = $disallowUserNumber;
        $this->disallowReversedUserNumber              = $disallowReversedUserNumber;
        $this->disallowOldPasscode                     = $disallowOldPasscode;
        $this->disallowReversedOldPasscode             = $disallowReversedOldPasscode;
        $this->minCodeLength                           = $minCodeLength;
        $this->maxCodeLength                           = $maxCodeLength;
        $this->disableLoginAfterMaxFailedLoginAttempts = $disableLoginAfterMaxFailedLoginAttempts;
        $this->maxFailedLoginAttempts                  = $maxFailedLoginAttempts;
        $this->expirePassword                          = $expirePassword;
        $this->passcodeExpiresDays                     = $passcodeExpiresDays;
        $this->sendLoginDisabledNotifyEmail            = $sendLoginDisabledNotifyEmail;
        $this->loginDisabledNotifyEmailAddress         = new EmailAddress($loginDisabledNotifyEmailAddress);
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
        $minCodeLength and $this->minCodeLength = new VoiceMessagingMinPasscodeCodeLength($minCodeLength);
    }

    public function getMinCodeLength()
    {
        return (!$this->minCodeLength) ?: $this->minCodeLength->value();
    }

    public function setMaxCodeLength($maxCodeLength)
    {
        $maxCodeLength and $this->maxCodeLength = new VoiceMessagingMaxPasscodeCodeLength($maxCodeLength);
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
        $maxFailedLoginAttempts and $this->maxFailedLoginAttempts = new VoiceMessagingMaxFailedLoginAttempts($maxFailedLoginAttempts);
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
        $passcodeExpiresDays and $this->passcodeExpiresDays = new VoiceMessagingPasscodeExpiresDays($passcodeExpiresDays);
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
}
