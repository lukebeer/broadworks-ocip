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
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceProvider\ServiceProviderPortalPasscodeRulesGetResponse;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Response to ServiceProviderPortalPasscodeRulesGetRequest.
 *         Contains the service provider's passcode rules setting.
 */
class ServiceProviderPortalPasscodeRulesGetResponse extends ComplexType implements ComplexInterface
{
    public    $name                                    = __CLASS__;
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
     * @return ServiceProviderPortalPasscodeRulesGetResponse
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
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
        return (!$this->disallowRepeatedDigits) ?: $this->disallowRepeatedDigits;
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
        return (!$this->disallowUserNumber) ?: $this->disallowUserNumber;
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
        return (!$this->disallowReversedUserNumber) ?: $this->disallowReversedUserNumber;
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
        return (!$this->disallowOldPasscode) ?: $this->disallowOldPasscode;
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
        return (!$this->disallowReversedOldPasscode) ?: $this->disallowReversedOldPasscode;
    }

    /**
     * Minimum length of portal passcode.
     */
    public function setMinCodeLength($minCodeLength = null)
    {
        $this->minCodeLength = ($minCodeLength InstanceOf PasscodeMinLength)
             ? $minCodeLength
             : new PasscodeMinLength($minCodeLength);
    }

    /**
     * Minimum length of portal passcode.
     */
    public function getMinCodeLength()
    {
        return (!$this->minCodeLength) ?: $this->minCodeLength->getValue();
    }

    /**
     * Maximum length of portal passcode.
     */
    public function setMaxCodeLength($maxCodeLength = null)
    {
        $this->maxCodeLength = ($maxCodeLength InstanceOf PasscodeMaxLength)
             ? $maxCodeLength
             : new PasscodeMaxLength($maxCodeLength);
    }

    /**
     * Maximum length of portal passcode.
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
        return (!$this->disableLoginAfterMaxFailedLoginAttempts) ?: $this->disableLoginAfterMaxFailedLoginAttempts;
    }

    /**
     * Maximum allowed portal failed login attempts.
     */
    public function setMaxFailedLoginAttempts($maxFailedLoginAttempts = null)
    {
        $this->maxFailedLoginAttempts = ($maxFailedLoginAttempts InstanceOf PortalMaxFailedLoginAttempts)
             ? $maxFailedLoginAttempts
             : new PortalMaxFailedLoginAttempts($maxFailedLoginAttempts);
    }

    /**
     * Maximum allowed portal failed login attempts.
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
        return (!$this->expirePassword) ?: $this->expirePassword;
    }

    /**
     * Portal passcode expiration days.
     */
    public function setPasscodeExpiresDays($passcodeExpiresDays = null)
    {
        $this->passcodeExpiresDays = ($passcodeExpiresDays InstanceOf PasscodeExpiresDays)
             ? $passcodeExpiresDays
             : new PasscodeExpiresDays($passcodeExpiresDays);
    }

    /**
     * Portal passcode expiration days.
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
}
