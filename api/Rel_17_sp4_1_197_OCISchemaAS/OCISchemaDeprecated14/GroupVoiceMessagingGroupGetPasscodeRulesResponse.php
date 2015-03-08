<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated14; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated14\VoiceMessagingMaxFailedLoginAttempts;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated14\VoiceMessagingMaxPasscodeCodeLength;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated14\VoiceMessagingMinPasscodeCodeLength;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated14\VoiceMessagingPasscodeExpiresDays;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\GroupPasscodeRulesLevel;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\EmailAddress;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
     * Response to GroupVoiceMessagingGroupGetPasscodeRulesRequest.
 *         Contains the group's voice portal passcode rules setting.
 *         Replaced By: GroupPortalPasscodeRulesGetResponse
 */
class GroupVoiceMessagingGroupGetPasscodeRulesResponse extends ComplexType implements ComplexInterface
{
    public    $name                                    = __CLASS__;
    protected $useRuleLevel                            = null;
    protected $disallowRepeatedDigits                  = null;
    protected $disallowUserNumber                      = null;
    protected $disallowReversedUserNumber              = null;
    protected $disallowOldPasscode                     = null;
    protected $disallowReversedOldPasscode             = null;
    protected $minCodeLength                           = null;
    protected $maxCodeLength                           = null;
    protected $disableLoginAfterMaxFailedLoginAttempts = null;
    protected $maxFailedLoginAttempts                  = null;
    protected $expirePassword                          = null;
    protected $passcodeExpiresDays                     = null;
    protected $sendLoginDisabledNotifyEmail            = null;
    protected $loginDisabledNotifyEmailAddress         = null;


    /**
     * Choices for the group passcode rule to decide which type of rules to use.
     */
    public function setUseRuleLevel($useRuleLevel = null)
    {
        $this->useRuleLevel = ($useRuleLevel InstanceOf GroupPasscodeRulesLevel)
             ? $useRuleLevel
             : new GroupPasscodeRulesLevel($useRuleLevel);
    }

    /**
     * Choices for the group passcode rule to decide which type of rules to use.
     */
    public function getUseRuleLevel()
    {
        return (!$this->useRuleLevel) ?: $this->useRuleLevel->getValue();
    }

    /**
     * 
     */
    public function setDisallowRepeatedDigits($disallowRepeatedDigits = null)
    {
        $this->disallowRepeatedDigits = (boolean) $disallowRepeatedDigits;
    }

    /**
     * 
     */
    public function getDisallowRepeatedDigits()
    {
        return (!$this->disallowRepeatedDigits) ?: $this->disallowRepeatedDigits->getValue();
    }

    /**
     * 
     */
    public function setDisallowUserNumber($disallowUserNumber = null)
    {
        $this->disallowUserNumber = (boolean) $disallowUserNumber;
    }

    /**
     * 
     */
    public function getDisallowUserNumber()
    {
        return (!$this->disallowUserNumber) ?: $this->disallowUserNumber->getValue();
    }

    /**
     * 
     */
    public function setDisallowReversedUserNumber($disallowReversedUserNumber = null)
    {
        $this->disallowReversedUserNumber = (boolean) $disallowReversedUserNumber;
    }

    /**
     * 
     */
    public function getDisallowReversedUserNumber()
    {
        return (!$this->disallowReversedUserNumber) ?: $this->disallowReversedUserNumber->getValue();
    }

    /**
     * 
     */
    public function setDisallowOldPasscode($disallowOldPasscode = null)
    {
        $this->disallowOldPasscode = (boolean) $disallowOldPasscode;
    }

    /**
     * 
     */
    public function getDisallowOldPasscode()
    {
        return (!$this->disallowOldPasscode) ?: $this->disallowOldPasscode->getValue();
    }

    /**
     * 
     */
    public function setDisallowReversedOldPasscode($disallowReversedOldPasscode = null)
    {
        $this->disallowReversedOldPasscode = (boolean) $disallowReversedOldPasscode;
    }

    /**
     * 
     */
    public function getDisallowReversedOldPasscode()
    {
        return (!$this->disallowReversedOldPasscode) ?: $this->disallowReversedOldPasscode->getValue();
    }

    /**
     * Minimum length of voice messaging passcode.
     */
    public function setMinCodeLength($minCodeLength = null)
    {
        $this->minCodeLength = ($minCodeLength InstanceOf VoiceMessagingMinPasscodeCodeLength)
             ? $minCodeLength
             : new VoiceMessagingMinPasscodeCodeLength($minCodeLength);
    }

    /**
     * Minimum length of voice messaging passcode.
     */
    public function getMinCodeLength()
    {
        return (!$this->minCodeLength) ?: $this->minCodeLength->getValue();
    }

    /**
     * Maximum length of voice messaging passcode.
     */
    public function setMaxCodeLength($maxCodeLength = null)
    {
        $this->maxCodeLength = ($maxCodeLength InstanceOf VoiceMessagingMaxPasscodeCodeLength)
             ? $maxCodeLength
             : new VoiceMessagingMaxPasscodeCodeLength($maxCodeLength);
    }

    /**
     * Maximum length of voice messaging passcode.
     */
    public function getMaxCodeLength()
    {
        return (!$this->maxCodeLength) ?: $this->maxCodeLength->getValue();
    }

    /**
     * 
     */
    public function setDisableLoginAfterMaxFailedLoginAttempts($disableLoginAfterMaxFailedLoginAttempts = null)
    {
        $this->disableLoginAfterMaxFailedLoginAttempts = (boolean) $disableLoginAfterMaxFailedLoginAttempts;
    }

    /**
     * 
     */
    public function getDisableLoginAfterMaxFailedLoginAttempts()
    {
        return (!$this->disableLoginAfterMaxFailedLoginAttempts) ?: $this->disableLoginAfterMaxFailedLoginAttempts->getValue();
    }

    /**
     * Maximum allowed failed login attempts.
     */
    public function setMaxFailedLoginAttempts($maxFailedLoginAttempts = null)
    {
        $this->maxFailedLoginAttempts = ($maxFailedLoginAttempts InstanceOf VoiceMessagingMaxFailedLoginAttempts)
             ? $maxFailedLoginAttempts
             : new VoiceMessagingMaxFailedLoginAttempts($maxFailedLoginAttempts);
    }

    /**
     * Maximum allowed failed login attempts.
     */
    public function getMaxFailedLoginAttempts()
    {
        return (!$this->maxFailedLoginAttempts) ?: $this->maxFailedLoginAttempts->getValue();
    }

    /**
     * 
     */
    public function setExpirePassword($expirePassword = null)
    {
        $this->expirePassword = (boolean) $expirePassword;
    }

    /**
     * 
     */
    public function getExpirePassword()
    {
        return (!$this->expirePassword) ?: $this->expirePassword->getValue();
    }

    /**
     * Passcode expiration days.
     */
    public function setPasscodeExpiresDays($passcodeExpiresDays = null)
    {
        $this->passcodeExpiresDays = ($passcodeExpiresDays InstanceOf VoiceMessagingPasscodeExpiresDays)
             ? $passcodeExpiresDays
             : new VoiceMessagingPasscodeExpiresDays($passcodeExpiresDays);
    }

    /**
     * Passcode expiration days.
     */
    public function getPasscodeExpiresDays()
    {
        return (!$this->passcodeExpiresDays) ?: $this->passcodeExpiresDays->getValue();
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
        return (!$this->sendLoginDisabledNotifyEmail) ?: $this->sendLoginDisabledNotifyEmail->getValue();
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
}
