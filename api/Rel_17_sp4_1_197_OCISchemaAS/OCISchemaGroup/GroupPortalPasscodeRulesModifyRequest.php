<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaGroup; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ServiceProviderId;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\GroupId;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\GroupPasscodeRulesLevel;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\xs:boolean;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\PasscodeMinLength;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\PasscodeMaxLength;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\PortalMaxFailedLoginAttempts;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\PasscodeExpiresDays;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\EmailAddress;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Request to modify the group's passcode rules setting.
 *         The response is either SuccessResponse or ErrorResponse.
 */
class GroupPortalPasscodeRulesModifyRequest extends ComplexType implements ComplexInterface
{
    public    $name = __CLASS__;

    public function __construct(
             $serviceProviderId,
             $groupId,
             $useRuleLevel=null,
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
             $loginDisabledNotifyEmailAddress=null
    ) {
        $this->serviceProviderId                       = new ServiceProviderId($serviceProviderId);
        $this->groupId                                 = new GroupId($groupId);
        $this->useRuleLevel                            = new GroupPasscodeRulesLevel($useRuleLevel);
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
        $this->args                                    = func_get_args();
    }

    public function setServiceProviderId($serviceProviderId)
    {
        $serviceProviderId and $this->serviceProviderId = new ServiceProviderId($serviceProviderId);
    }

    public function getServiceProviderId()
    {
        return (!$this->serviceProviderId) ?: $this->serviceProviderId->value();
    }

    public function setGroupId($groupId)
    {
        $groupId and $this->groupId = new GroupId($groupId);
    }

    public function getGroupId()
    {
        return (!$this->groupId) ?: $this->groupId->value();
    }

    public function setUseRuleLevel($useRuleLevel)
    {
        $useRuleLevel and $this->useRuleLevel = new GroupPasscodeRulesLevel($useRuleLevel);
    }

    public function getUseRuleLevel()
    {
        return (!$this->useRuleLevel) ?: $this->useRuleLevel->value();
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
}
