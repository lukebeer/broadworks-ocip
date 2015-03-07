<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated15; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceVoiceMessaging\VoiceMessagingMessageWaitingIndicatorDelayInSeconds;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceVoiceMessaging\VoiceMessagingMaxMessageLengthMinutes;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceVoiceMessaging\VoiceMessagingMailboxLengthMinutes;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceVoiceMessaging\VoiceMessagingMailServerProtocol;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceVoiceMessaging\VoiceMessagingHoldPeriodDays;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceVoiceMessaging\SystemVoicePortalScope;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated15\VoiceMessagingMaxGreetingLengthMinutes;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\OutgoingDNorSIPURI;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\EmailAddress;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\NetAddress;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Response to SystemVoiceMessagingGroupGetRequest14.
 */
class SystemVoiceMessagingGroupGetResponse14 extends ComplexType implements ComplexInterface
{
    public    $name                                  = __CLASS__;
    protected $realDeleteForImap                     = null;
    protected $useDnInMailBody                       = null;
    protected $useShortSubjectLine                   = null;
    protected $maxGreetingLengthMinutes              = null;
    protected $maxMessageLengthMinutes               = null;
    protected $maxMailboxLengthMinutes               = null;
    protected $doesMessageAge                        = null;
    protected $holdPeriodDays                        = null;
    protected $mailServerNetAddress                  = null;
    protected $mailServerProtocol                    = null;
    protected $defaultDeliveryFromAddress            = null;
    protected $defaultNotificationFromAddress        = null;
    protected $defaultVoicePortalLockoutFromAddress  = null;
    protected $useOutgoingMWIOnSMDI                  = null;
    protected $mwiDelayInSeconds                     = null;
    protected $voicePortalScope                      = null;
    protected $enterpriseVoicePortalLicensed         = null;
    protected $networkWideMessaging                  = null;
    protected $useExternalRouting                    = null;
    protected $defaultExternalRoutingAddress         = null;


    public function setRealDeleteForImap(xs:boolean $realDeleteForImap = null)
    {
    }

    public function getRealDeleteForImap()
    {
        return (!$this->realDeleteForImap) ?: $this->realDeleteForImap->value();
    }

    public function setUseDnInMailBody(xs:boolean $useDnInMailBody = null)
    {
    }

    public function getUseDnInMailBody()
    {
        return (!$this->useDnInMailBody) ?: $this->useDnInMailBody->value();
    }

    public function setUseShortSubjectLine(xs:boolean $useShortSubjectLine = null)
    {
    }

    public function getUseShortSubjectLine()
    {
        return (!$this->useShortSubjectLine) ?: $this->useShortSubjectLine->value();
    }

    public function setMaxGreetingLengthMinutes($maxGreetingLengthMinutes = null)
    {
        $this->maxGreetingLengthMinutes = ($maxGreetingLengthMinutes InstanceOf VoiceMessagingMaxGreetingLengthMinutes)
             ? $maxGreetingLengthMinutes
             : new VoiceMessagingMaxGreetingLengthMinutes($maxGreetingLengthMinutes);
    }

    public function getMaxGreetingLengthMinutes()
    {
        return (!$this->maxGreetingLengthMinutes) ?: $this->maxGreetingLengthMinutes->value();
    }

    public function setMaxMessageLengthMinutes($maxMessageLengthMinutes = null)
    {
        $this->maxMessageLengthMinutes = ($maxMessageLengthMinutes InstanceOf VoiceMessagingMaxMessageLengthMinutes)
             ? $maxMessageLengthMinutes
             : new VoiceMessagingMaxMessageLengthMinutes($maxMessageLengthMinutes);
    }

    public function getMaxMessageLengthMinutes()
    {
        return (!$this->maxMessageLengthMinutes) ?: $this->maxMessageLengthMinutes->value();
    }

    public function setMaxMailboxLengthMinutes($maxMailboxLengthMinutes = null)
    {
        $this->maxMailboxLengthMinutes = ($maxMailboxLengthMinutes InstanceOf VoiceMessagingMailboxLengthMinutes)
             ? $maxMailboxLengthMinutes
             : new VoiceMessagingMailboxLengthMinutes($maxMailboxLengthMinutes);
    }

    public function getMaxMailboxLengthMinutes()
    {
        return (!$this->maxMailboxLengthMinutes) ?: $this->maxMailboxLengthMinutes->value();
    }

    public function setDoesMessageAge(xs:boolean $doesMessageAge = null)
    {
    }

    public function getDoesMessageAge()
    {
        return (!$this->doesMessageAge) ?: $this->doesMessageAge->value();
    }

    public function setHoldPeriodDays($holdPeriodDays = null)
    {
        $this->holdPeriodDays = ($holdPeriodDays InstanceOf VoiceMessagingHoldPeriodDays)
             ? $holdPeriodDays
             : new VoiceMessagingHoldPeriodDays($holdPeriodDays);
    }

    public function getHoldPeriodDays()
    {
        return (!$this->holdPeriodDays) ?: $this->holdPeriodDays->value();
    }

    public function setMailServerNetAddress($mailServerNetAddress = null)
    {
        $this->mailServerNetAddress = ($mailServerNetAddress InstanceOf NetAddress)
             ? $mailServerNetAddress
             : new NetAddress($mailServerNetAddress);
    }

    public function getMailServerNetAddress()
    {
        return (!$this->mailServerNetAddress) ?: $this->mailServerNetAddress->value();
    }

    public function setMailServerProtocol($mailServerProtocol = null)
    {
        $this->mailServerProtocol = ($mailServerProtocol InstanceOf VoiceMessagingMailServerProtocol)
             ? $mailServerProtocol
             : new VoiceMessagingMailServerProtocol($mailServerProtocol);
    }

    public function getMailServerProtocol()
    {
        return (!$this->mailServerProtocol) ?: $this->mailServerProtocol->value();
    }

    public function setDefaultDeliveryFromAddress($defaultDeliveryFromAddress = null)
    {
        $this->defaultDeliveryFromAddress = ($defaultDeliveryFromAddress InstanceOf EmailAddress)
             ? $defaultDeliveryFromAddress
             : new EmailAddress($defaultDeliveryFromAddress);
    }

    public function getDefaultDeliveryFromAddress()
    {
        return (!$this->defaultDeliveryFromAddress) ?: $this->defaultDeliveryFromAddress->value();
    }

    public function setDefaultNotificationFromAddress($defaultNotificationFromAddress = null)
    {
        $this->defaultNotificationFromAddress = ($defaultNotificationFromAddress InstanceOf EmailAddress)
             ? $defaultNotificationFromAddress
             : new EmailAddress($defaultNotificationFromAddress);
    }

    public function getDefaultNotificationFromAddress()
    {
        return (!$this->defaultNotificationFromAddress) ?: $this->defaultNotificationFromAddress->value();
    }

    public function setDefaultVoicePortalLockoutFromAddress($defaultVoicePortalLockoutFromAddress = null)
    {
        $this->defaultVoicePortalLockoutFromAddress = ($defaultVoicePortalLockoutFromAddress InstanceOf EmailAddress)
             ? $defaultVoicePortalLockoutFromAddress
             : new EmailAddress($defaultVoicePortalLockoutFromAddress);
    }

    public function getDefaultVoicePortalLockoutFromAddress()
    {
        return (!$this->defaultVoicePortalLockoutFromAddress) ?: $this->defaultVoicePortalLockoutFromAddress->value();
    }

    public function setUseOutgoingMWIOnSMDI(xs:boolean $useOutgoingMWIOnSMDI = null)
    {
    }

    public function getUseOutgoingMWIOnSMDI()
    {
        return (!$this->useOutgoingMWIOnSMDI) ?: $this->useOutgoingMWIOnSMDI->value();
    }

    public function setMwiDelayInSeconds($mwiDelayInSeconds = null)
    {
        $this->mwiDelayInSeconds = ($mwiDelayInSeconds InstanceOf VoiceMessagingMessageWaitingIndicatorDelayInSeconds)
             ? $mwiDelayInSeconds
             : new VoiceMessagingMessageWaitingIndicatorDelayInSeconds($mwiDelayInSeconds);
    }

    public function getMwiDelayInSeconds()
    {
        return (!$this->mwiDelayInSeconds) ?: $this->mwiDelayInSeconds->value();
    }

    public function setVoicePortalScope($voicePortalScope = null)
    {
        $this->voicePortalScope = ($voicePortalScope InstanceOf SystemVoicePortalScope)
             ? $voicePortalScope
             : new SystemVoicePortalScope($voicePortalScope);
    }

    public function getVoicePortalScope()
    {
        return (!$this->voicePortalScope) ?: $this->voicePortalScope->value();
    }

    public function setEnterpriseVoicePortalLicensed(xs:boolean $enterpriseVoicePortalLicensed = null)
    {
    }

    public function getEnterpriseVoicePortalLicensed()
    {
        return (!$this->enterpriseVoicePortalLicensed) ?: $this->enterpriseVoicePortalLicensed->value();
    }

    public function setNetworkWideMessaging(xs:boolean $networkWideMessaging = null)
    {
    }

    public function getNetworkWideMessaging()
    {
        return (!$this->networkWideMessaging) ?: $this->networkWideMessaging->value();
    }

    public function setUseExternalRouting(xs:boolean $useExternalRouting = null)
    {
    }

    public function getUseExternalRouting()
    {
        return (!$this->useExternalRouting) ?: $this->useExternalRouting->value();
    }

    public function setDefaultExternalRoutingAddress($defaultExternalRoutingAddress = null)
    {
        $this->defaultExternalRoutingAddress = ($defaultExternalRoutingAddress InstanceOf OutgoingDNorSIPURI)
             ? $defaultExternalRoutingAddress
             : new OutgoingDNorSIPURI($defaultExternalRoutingAddress);
    }

    public function getDefaultExternalRoutingAddress()
    {
        return (!$this->defaultExternalRoutingAddress) ?: $this->defaultExternalRoutingAddress->value();
    }
}
