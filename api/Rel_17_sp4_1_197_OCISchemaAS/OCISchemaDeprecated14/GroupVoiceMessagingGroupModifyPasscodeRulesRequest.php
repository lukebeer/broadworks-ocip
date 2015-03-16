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
    public    $name = 'GroupVoiceMessagingGroupModifyPasscodeRulesRequest';
    protected $serviceProviderId;
    protected $groupId;
    protected $useRuleLevel;
    protected $disallowRepeatedDigits;
    protected $disallowUserNumber;
    protected $disallowReversedUserNumber;
    protected $disallowOldPasscode;
    protected $disallowReversedOldPasscode;
    protected $minCodeLength;
    protected $maxCodeLength;
    protected $disableLoginAfterMaxFailedLoginAttempts;
    protected $maxFailedLoginAttempts;
    protected $expirePassword;
    protected $passcodeExpiresDays;
    protected $sendLoginDisabledNotifyEmail;
    protected $loginDisabledNotifyEmailAddress;

    public function __construct(
         $serviceProviderId = '',
         $groupId = '',
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
     * @return mixed $response
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
        $this->serviceProviderId = ($serviceProviderId InstanceOf ServiceProviderId)
             ? $serviceProviderId
             : new ServiceProviderId($serviceProviderId);
        $this->serviceProviderId->setName('serviceProviderId');
        return $this;
    }

    /**
     * 
     * @return ServiceProviderId $serviceProviderId
     */
    public function getServiceProviderId()
    {
        return ($this->serviceProviderId) ? $this->serviceProviderId->getValue() : null;
    }

    /**
     * 
     */
    public function setGroupId($groupId = null)
    {
        $this->groupId = ($groupId InstanceOf GroupId)
             ? $groupId
             : new GroupId($groupId);
        $this->groupId->setName('groupId');
        return $this;
    }

    /**
     * 
     * @return GroupId $groupId
     */
    public function getGroupId()
    {
        return ($this->groupId) ? $this->groupId->getValue() : null;
    }

    /**
     * 
     */
    public function setUseRuleLevel($useRuleLevel = null)
    {
        $this->useRuleLevel = ($useRuleLevel InstanceOf GroupPasscodeRulesLevel)
             ? $useRuleLevel
             : new GroupPasscodeRulesLevel($useRuleLevel);
        $this->useRuleLevel->setName('useRuleLevel');
        return $this;
    }

    /**
     * 
     * @return GroupPasscodeRulesLevel $useRuleLevel
     */
    public function getUseRuleLevel()
    {
        return ($this->useRuleLevel) ? $this->useRuleLevel->getValue() : null;
    }

    /**
     * 
     */
    public function setDisallowRepeatedDigits($disallowRepeatedDigits = null)
    {
        $this->disallowRepeatedDigits = new PrimitiveType($disallowRepeatedDigits);
        $this->disallowRepeatedDigits->setName('disallowRepeatedDigits');
        return $this;
    }

    /**
     * 
     * @return boolean $disallowRepeatedDigits
     */
    public function getDisallowRepeatedDigits()
    {
        return ($this->disallowRepeatedDigits) ? $this->disallowRepeatedDigits->getValue() : null;
    }

    /**
     * 
     */
    public function setDisallowUserNumber($disallowUserNumber = null)
    {
        $this->disallowUserNumber = new PrimitiveType($disallowUserNumber);
        $this->disallowUserNumber->setName('disallowUserNumber');
        return $this;
    }

    /**
     * 
     * @return boolean $disallowUserNumber
     */
    public function getDisallowUserNumber()
    {
        return ($this->disallowUserNumber) ? $this->disallowUserNumber->getValue() : null;
    }

    /**
     * 
     */
    public function setDisallowReversedUserNumber($disallowReversedUserNumber = null)
    {
        $this->disallowReversedUserNumber = new PrimitiveType($disallowReversedUserNumber);
        $this->disallowReversedUserNumber->setName('disallowReversedUserNumber');
        return $this;
    }

    /**
     * 
     * @return boolean $disallowReversedUserNumber
     */
    public function getDisallowReversedUserNumber()
    {
        return ($this->disallowReversedUserNumber) ? $this->disallowReversedUserNumber->getValue() : null;
    }

    /**
     * 
     */
    public function setDisallowOldPasscode($disallowOldPasscode = null)
    {
        $this->disallowOldPasscode = new PrimitiveType($disallowOldPasscode);
        $this->disallowOldPasscode->setName('disallowOldPasscode');
        return $this;
    }

    /**
     * 
     * @return boolean $disallowOldPasscode
     */
    public function getDisallowOldPasscode()
    {
        return ($this->disallowOldPasscode) ? $this->disallowOldPasscode->getValue() : null;
    }

    /**
     * 
     */
    public function setDisallowReversedOldPasscode($disallowReversedOldPasscode = null)
    {
        $this->disallowReversedOldPasscode = new PrimitiveType($disallowReversedOldPasscode);
        $this->disallowReversedOldPasscode->setName('disallowReversedOldPasscode');
        return $this;
    }

    /**
     * 
     * @return boolean $disallowReversedOldPasscode
     */
    public function getDisallowReversedOldPasscode()
    {
        return ($this->disallowReversedOldPasscode) ? $this->disallowReversedOldPasscode->getValue() : null;
    }

    /**
     * 
     */
    public function setMinCodeLength($minCodeLength = null)
    {
        $this->minCodeLength = ($minCodeLength InstanceOf VoiceMessagingMinPasscodeCodeLength)
             ? $minCodeLength
             : new VoiceMessagingMinPasscodeCodeLength($minCodeLength);
        $this->minCodeLength->setName('minCodeLength');
        return $this;
    }

    /**
     * 
     * @return VoiceMessagingMinPasscodeCodeLength $minCodeLength
     */
    public function getMinCodeLength()
    {
        return ($this->minCodeLength) ? $this->minCodeLength->getValue() : null;
    }

    /**
     * 
     */
    public function setMaxCodeLength($maxCodeLength = null)
    {
        $this->maxCodeLength = ($maxCodeLength InstanceOf VoiceMessagingMaxPasscodeCodeLength)
             ? $maxCodeLength
             : new VoiceMessagingMaxPasscodeCodeLength($maxCodeLength);
        $this->maxCodeLength->setName('maxCodeLength');
        return $this;
    }

    /**
     * 
     * @return VoiceMessagingMaxPasscodeCodeLength $maxCodeLength
     */
    public function getMaxCodeLength()
    {
        return ($this->maxCodeLength) ? $this->maxCodeLength->getValue() : null;
    }

    /**
     * 
     */
    public function setDisableLoginAfterMaxFailedLoginAttempts($disableLoginAfterMaxFailedLoginAttempts = null)
    {
        $this->disableLoginAfterMaxFailedLoginAttempts = new PrimitiveType($disableLoginAfterMaxFailedLoginAttempts);
        $this->disableLoginAfterMaxFailedLoginAttempts->setName('disableLoginAfterMaxFailedLoginAttempts');
        return $this;
    }

    /**
     * 
     * @return boolean $disableLoginAfterMaxFailedLoginAttempts
     */
    public function getDisableLoginAfterMaxFailedLoginAttempts()
    {
        return ($this->disableLoginAfterMaxFailedLoginAttempts) ? $this->disableLoginAfterMaxFailedLoginAttempts->getValue() : null;
    }

    /**
     * 
     */
    public function setMaxFailedLoginAttempts($maxFailedLoginAttempts = null)
    {
        $this->maxFailedLoginAttempts = ($maxFailedLoginAttempts InstanceOf VoiceMessagingMaxFailedLoginAttempts)
             ? $maxFailedLoginAttempts
             : new VoiceMessagingMaxFailedLoginAttempts($maxFailedLoginAttempts);
        $this->maxFailedLoginAttempts->setName('maxFailedLoginAttempts');
        return $this;
    }

    /**
     * 
     * @return VoiceMessagingMaxFailedLoginAttempts $maxFailedLoginAttempts
     */
    public function getMaxFailedLoginAttempts()
    {
        return ($this->maxFailedLoginAttempts) ? $this->maxFailedLoginAttempts->getValue() : null;
    }

    /**
     * 
     */
    public function setExpirePassword($expirePassword = null)
    {
        $this->expirePassword = new PrimitiveType($expirePassword);
        $this->expirePassword->setName('expirePassword');
        return $this;
    }

    /**
     * 
     * @return boolean $expirePassword
     */
    public function getExpirePassword()
    {
        return ($this->expirePassword) ? $this->expirePassword->getValue() : null;
    }

    /**
     * 
     */
    public function setPasscodeExpiresDays($passcodeExpiresDays = null)
    {
        $this->passcodeExpiresDays = ($passcodeExpiresDays InstanceOf VoiceMessagingPasscodeExpiresDays)
             ? $passcodeExpiresDays
             : new VoiceMessagingPasscodeExpiresDays($passcodeExpiresDays);
        $this->passcodeExpiresDays->setName('passcodeExpiresDays');
        return $this;
    }

    /**
     * 
     * @return VoiceMessagingPasscodeExpiresDays $passcodeExpiresDays
     */
    public function getPasscodeExpiresDays()
    {
        return ($this->passcodeExpiresDays) ? $this->passcodeExpiresDays->getValue() : null;
    }

    /**
     * 
     */
    public function setSendLoginDisabledNotifyEmail($sendLoginDisabledNotifyEmail = null)
    {
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
        return ($this->sendLoginDisabledNotifyEmail) ? $this->sendLoginDisabledNotifyEmail->getValue() : null;
    }

    /**
     * 
     */
    public function setLoginDisabledNotifyEmailAddress($loginDisabledNotifyEmailAddress = null)
    {
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
        return ($this->loginDisabledNotifyEmailAddress) ? $this->loginDisabledNotifyEmailAddress->getValue() : null;
    }
}
