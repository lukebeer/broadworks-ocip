<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated14; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated14\VoiceMessagingMaxFailedLoginAttempts;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated14\VoiceMessagingMinPasscodeCodeLength;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated14\VoiceMessagingMaxPasscodeCodeLength;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated14\VoiceMessagingPasscodeExpiresDays;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\GroupPasscodeRulesLevel;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ServiceProviderId;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\EmailAddress;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\GroupId;
use Broadworks_OCIP\core\Builder\Types\PrimitiveType;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Request to modify the group's voice portal passcode rules setting.
 *         The response is either SuccessResponse or ErrorResponse.
 *         Replaced By: GroupPortalPasscodeRulesModifyRequest
 */
class GroupVoiceMessagingGroupModifyPasscodeRulesRequest extends ComplexType implements ComplexInterface
{
    public    $name                                    = 'GroupVoiceMessagingGroupModifyPasscodeRulesRequest';
    protected $serviceProviderId                       = null;
    protected $groupId                                 = null;
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

    public function __construct(
         $serviceProviderId,
         $groupId,
         $useRuleLevel = null,
         $disallowRepeatedDigits = null,
         $disallowUserNumber = null,
         $disallowReversedUserNumber = null,
         $disallowOldPasscode = null,
         $disallowReversedOldPasscode = null,
         $minCodeLength = null,
         $maxCodeLength = null,
         $disableLoginAfterMaxFailedLoginAttempts = null,
         $maxFailedLoginAttempts = null,
         $expirePassword = null,
         $passcodeExpiresDays = null,
         $sendLoginDisabledNotifyEmail = null,
         $loginDisabledNotifyEmailAddress = null
    ) {
        $this->setServiceProviderId($serviceProviderId);
        $this->setGroupId($groupId);
        $this->setUseRuleLevel($useRuleLevel);
        $this->setDisallowRepeatedDigits($disallowRepeatedDigits);
        $this->setDisallowUserNumber($disallowUserNumber);
        $this->setDisallowReversedUserNumber($disallowReversedUserNumber);
        $this->setDisallowOldPasscode($disallowOldPasscode);
        $this->setDisallowReversedOldPasscode($disallowReversedOldPasscode);
        $this->setMinCodeLength($minCodeLength);
        $this->setMaxCodeLength($maxCodeLength);
        $this->setDisableLoginAfterMaxFailedLoginAttempts($disableLoginAfterMaxFailedLoginAttempts);
        $this->setMaxFailedLoginAttempts($maxFailedLoginAttempts);
        $this->setExpirePassword($expirePassword);
        $this->setPasscodeExpiresDays($passcodeExpiresDays);
        $this->setSendLoginDisabledNotifyEmail($sendLoginDisabledNotifyEmail);
        $this->setLoginDisabledNotifyEmailAddress($loginDisabledNotifyEmailAddress);
    }

    /**
     * @return 
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
        if (!$serviceProviderId) return $this;
        $this->serviceProviderId = ($serviceProviderId InstanceOf ServiceProviderId)
             ? $serviceProviderId
             : new ServiceProviderId($serviceProviderId);
        $this->serviceProviderId->setName('serviceProviderId');
        return $this;
    }

    /**
     * 
     * @return ServiceProviderId
     */
    public function getServiceProviderId()
    {
        return $this->serviceProviderId->getValue();
    }

    /**
     * 
     */
    public function setGroupId($groupId = null)
    {
        if (!$groupId) return $this;
        $this->groupId = ($groupId InstanceOf GroupId)
             ? $groupId
             : new GroupId($groupId);
        $this->groupId->setName('groupId');
        return $this;
    }

    /**
     * 
     * @return GroupId
     */
    public function getGroupId()
    {
        return $this->groupId->getValue();
    }

    /**
     * 
     */
    public function setUseRuleLevel($useRuleLevel = null)
    {
        if (!$useRuleLevel) return $this;
        $this->useRuleLevel = ($useRuleLevel InstanceOf GroupPasscodeRulesLevel)
             ? $useRuleLevel
             : new GroupPasscodeRulesLevel($useRuleLevel);
        $this->useRuleLevel->setName('useRuleLevel');
        return $this;
    }

    /**
     * 
     * @return GroupPasscodeRulesLevel
     */
    public function getUseRuleLevel()
    {
        return $this->useRuleLevel->getValue();
    }

    /**
     * 
     */
    public function setDisallowRepeatedDigits($disallowRepeatedDigits = null)
    {
        if (!$disallowRepeatedDigits) return $this;
        $this->disallowRepeatedDigits = new PrimitiveType($disallowRepeatedDigits);
        $this->disallowRepeatedDigits->setName('disallowRepeatedDigits');
        return $this;
    }

    /**
     * 
     * @return xs:boolean
     */
    public function getDisallowRepeatedDigits()
    {
        return $this->disallowRepeatedDigits->getValue();
    }

    /**
     * 
     */
    public function setDisallowUserNumber($disallowUserNumber = null)
    {
        if (!$disallowUserNumber) return $this;
        $this->disallowUserNumber = new PrimitiveType($disallowUserNumber);
        $this->disallowUserNumber->setName('disallowUserNumber');
        return $this;
    }

    /**
     * 
     * @return xs:boolean
     */
    public function getDisallowUserNumber()
    {
        return $this->disallowUserNumber->getValue();
    }

    /**
     * 
     */
    public function setDisallowReversedUserNumber($disallowReversedUserNumber = null)
    {
        if (!$disallowReversedUserNumber) return $this;
        $this->disallowReversedUserNumber = new PrimitiveType($disallowReversedUserNumber);
        $this->disallowReversedUserNumber->setName('disallowReversedUserNumber');
        return $this;
    }

    /**
     * 
     * @return xs:boolean
     */
    public function getDisallowReversedUserNumber()
    {
        return $this->disallowReversedUserNumber->getValue();
    }

    /**
     * 
     */
    public function setDisallowOldPasscode($disallowOldPasscode = null)
    {
        if (!$disallowOldPasscode) return $this;
        $this->disallowOldPasscode = new PrimitiveType($disallowOldPasscode);
        $this->disallowOldPasscode->setName('disallowOldPasscode');
        return $this;
    }

    /**
     * 
     * @return xs:boolean
     */
    public function getDisallowOldPasscode()
    {
        return $this->disallowOldPasscode->getValue();
    }

    /**
     * 
     */
    public function setDisallowReversedOldPasscode($disallowReversedOldPasscode = null)
    {
        if (!$disallowReversedOldPasscode) return $this;
        $this->disallowReversedOldPasscode = new PrimitiveType($disallowReversedOldPasscode);
        $this->disallowReversedOldPasscode->setName('disallowReversedOldPasscode');
        return $this;
    }

    /**
     * 
     * @return xs:boolean
     */
    public function getDisallowReversedOldPasscode()
    {
        return $this->disallowReversedOldPasscode->getValue();
    }

    /**
     * 
     */
    public function setMinCodeLength($minCodeLength = null)
    {
        if (!$minCodeLength) return $this;
        $this->minCodeLength = ($minCodeLength InstanceOf VoiceMessagingMinPasscodeCodeLength)
             ? $minCodeLength
             : new VoiceMessagingMinPasscodeCodeLength($minCodeLength);
        $this->minCodeLength->setName('minCodeLength');
        return $this;
    }

    /**
     * 
     * @return VoiceMessagingMinPasscodeCodeLength
     */
    public function getMinCodeLength()
    {
        return $this->minCodeLength->getValue();
    }

    /**
     * 
     */
    public function setMaxCodeLength($maxCodeLength = null)
    {
        if (!$maxCodeLength) return $this;
        $this->maxCodeLength = ($maxCodeLength InstanceOf VoiceMessagingMaxPasscodeCodeLength)
             ? $maxCodeLength
             : new VoiceMessagingMaxPasscodeCodeLength($maxCodeLength);
        $this->maxCodeLength->setName('maxCodeLength');
        return $this;
    }

    /**
     * 
     * @return VoiceMessagingMaxPasscodeCodeLength
     */
    public function getMaxCodeLength()
    {
        return $this->maxCodeLength->getValue();
    }

    /**
     * 
     */
    public function setDisableLoginAfterMaxFailedLoginAttempts($disableLoginAfterMaxFailedLoginAttempts = null)
    {
        if (!$disableLoginAfterMaxFailedLoginAttempts) return $this;
        $this->disableLoginAfterMaxFailedLoginAttempts = new PrimitiveType($disableLoginAfterMaxFailedLoginAttempts);
        $this->disableLoginAfterMaxFailedLoginAttempts->setName('disableLoginAfterMaxFailedLoginAttempts');
        return $this;
    }

    /**
     * 
     * @return xs:boolean
     */
    public function getDisableLoginAfterMaxFailedLoginAttempts()
    {
        return $this->disableLoginAfterMaxFailedLoginAttempts->getValue();
    }

    /**
     * 
     */
    public function setMaxFailedLoginAttempts($maxFailedLoginAttempts = null)
    {
        if (!$maxFailedLoginAttempts) return $this;
        $this->maxFailedLoginAttempts = ($maxFailedLoginAttempts InstanceOf VoiceMessagingMaxFailedLoginAttempts)
             ? $maxFailedLoginAttempts
             : new VoiceMessagingMaxFailedLoginAttempts($maxFailedLoginAttempts);
        $this->maxFailedLoginAttempts->setName('maxFailedLoginAttempts');
        return $this;
    }

    /**
     * 
     * @return VoiceMessagingMaxFailedLoginAttempts
     */
    public function getMaxFailedLoginAttempts()
    {
        return $this->maxFailedLoginAttempts->getValue();
    }

    /**
     * 
     */
    public function setExpirePassword($expirePassword = null)
    {
        if (!$expirePassword) return $this;
        $this->expirePassword = new PrimitiveType($expirePassword);
        $this->expirePassword->setName('expirePassword');
        return $this;
    }

    /**
     * 
     * @return xs:boolean
     */
    public function getExpirePassword()
    {
        return $this->expirePassword->getValue();
    }

    /**
     * 
     */
    public function setPasscodeExpiresDays($passcodeExpiresDays = null)
    {
        if (!$passcodeExpiresDays) return $this;
        $this->passcodeExpiresDays = ($passcodeExpiresDays InstanceOf VoiceMessagingPasscodeExpiresDays)
             ? $passcodeExpiresDays
             : new VoiceMessagingPasscodeExpiresDays($passcodeExpiresDays);
        $this->passcodeExpiresDays->setName('passcodeExpiresDays');
        return $this;
    }

    /**
     * 
     * @return VoiceMessagingPasscodeExpiresDays
     */
    public function getPasscodeExpiresDays()
    {
        return $this->passcodeExpiresDays->getValue();
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
     * @return xs:boolean
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
     * @return EmailAddress
     */
    public function getLoginDisabledNotifyEmailAddress()
    {
        return $this->loginDisabledNotifyEmailAddress->getValue();
    }
}
