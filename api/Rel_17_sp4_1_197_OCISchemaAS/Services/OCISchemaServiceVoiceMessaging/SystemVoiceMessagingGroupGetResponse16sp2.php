<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceVoiceMessaging; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceVoiceMessaging\VoiceMessagingMessageWaitingIndicatorDelayInSeconds;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceVoiceMessaging\VoiceMessagingMaxMessageLengthMinutes;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceVoiceMessaging\VoiceMessagingMailboxLengthMinutes;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceVoiceMessaging\VoiceMessagingMailServerProtocol;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceVoiceMessaging\VoiceMessagingHoldPeriodDays;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceVoiceMessaging\SystemVoicePortalScope;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\OutgoingDNorSIPURI;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\EmailAddress;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\NetAddress;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
     * Response to SystemVoiceMessagingGroupGetRequest16sp2.
 */
class SystemVoiceMessagingGroupGetResponse16sp2 extends ComplexType implements ComplexInterface
{
    public    $name                                 = __CLASS__;
    protected $realDeleteForImap                    = null;
    protected $useDnInMailBody                      = null;
    protected $useShortSubjectLine                  = null;
    protected $maxMessageLengthMinutes              = null;
    protected $maxMailboxLengthMinutes              = null;
    protected $doesMessageAge                       = null;
    protected $holdPeriodDays                       = null;
    protected $mailServerNetAddress                 = null;
    protected $mailServerProtocol                   = null;
    protected $defaultDeliveryFromAddress           = null;
    protected $defaultNotificationFromAddress       = null;
    protected $defaultVoicePortalLockoutFromAddress = null;
    protected $useOutgoingMWIOnSMDI                 = null;
    protected $mwiDelayInSeconds                    = null;
    protected $voicePortalScope                     = null;
    protected $enterpriseVoicePortalLicensed        = null;
    protected $networkWideMessaging                 = null;
    protected $useExternalRouting                   = null;
    protected $defaultExternalRoutingAddress        = null;
    protected $vmOnlySystem                         = null;


    /**
     * 
     */
    public function setRealDeleteForImap($realDeleteForImap = null)
    {
        $this->realDeleteForImap = (boolean) $realDeleteForImap;
    }

    /**
     * 
     */
    public function getRealDeleteForImap()
    {
        return (!$this->realDeleteForImap) ?: $this->realDeleteForImap->getValue();
    }

    /**
     * 
     */
    public function setUseDnInMailBody($useDnInMailBody = null)
    {
        $this->useDnInMailBody = (boolean) $useDnInMailBody;
    }

    /**
     * 
     */
    public function getUseDnInMailBody()
    {
        return (!$this->useDnInMailBody) ?: $this->useDnInMailBody->getValue();
    }

    /**
     * 
     */
    public function setUseShortSubjectLine($useShortSubjectLine = null)
    {
        $this->useShortSubjectLine = (boolean) $useShortSubjectLine;
    }

    /**
     * 
     */
    public function getUseShortSubjectLine()
    {
        return (!$this->useShortSubjectLine) ?: $this->useShortSubjectLine->getValue();
    }

    /**
     * Maximum length of message in minutes.
     */
    public function setMaxMessageLengthMinutes($maxMessageLengthMinutes = null)
    {
        $this->maxMessageLengthMinutes = ($maxMessageLengthMinutes InstanceOf VoiceMessagingMaxMessageLengthMinutes)
             ? $maxMessageLengthMinutes
             : new VoiceMessagingMaxMessageLengthMinutes($maxMessageLengthMinutes);
    }

    /**
     * Maximum length of message in minutes.
     */
    public function getMaxMessageLengthMinutes()
    {
        return (!$this->maxMessageLengthMinutes) ?: $this->maxMessageLengthMinutes->getValue();
    }

    /**
     * Mailbox length for voice messages
     */
    public function setMaxMailboxLengthMinutes($maxMailboxLengthMinutes = null)
    {
        $this->maxMailboxLengthMinutes = ($maxMailboxLengthMinutes InstanceOf VoiceMessagingMailboxLengthMinutes)
             ? $maxMailboxLengthMinutes
             : new VoiceMessagingMailboxLengthMinutes($maxMailboxLengthMinutes);
    }

    /**
     * Mailbox length for voice messages
     */
    public function getMaxMailboxLengthMinutes()
    {
        return (!$this->maxMailboxLengthMinutes) ?: $this->maxMailboxLengthMinutes->getValue();
    }

    /**
     * 
     */
    public function setDoesMessageAge($doesMessageAge = null)
    {
        $this->doesMessageAge = (boolean) $doesMessageAge;
    }

    /**
     * 
     */
    public function getDoesMessageAge()
    {
        return (!$this->doesMessageAge) ?: $this->doesMessageAge->getValue();
    }

    /**
     * Hold period for voice messages
     */
    public function setHoldPeriodDays($holdPeriodDays = null)
    {
        $this->holdPeriodDays = ($holdPeriodDays InstanceOf VoiceMessagingHoldPeriodDays)
             ? $holdPeriodDays
             : new VoiceMessagingHoldPeriodDays($holdPeriodDays);
    }

    /**
     * Hold period for voice messages
     */
    public function getHoldPeriodDays()
    {
        return (!$this->holdPeriodDays) ?: $this->holdPeriodDays->getValue();
    }

    /**
     * IP Address, hostname, or domain.
     */
    public function setMailServerNetAddress($mailServerNetAddress = null)
    {
        $this->mailServerNetAddress = ($mailServerNetAddress InstanceOf NetAddress)
             ? $mailServerNetAddress
             : new NetAddress($mailServerNetAddress);
    }

    /**
     * IP Address, hostname, or domain.
     */
    public function getMailServerNetAddress()
    {
        return (!$this->mailServerNetAddress) ?: $this->mailServerNetAddress->getValue();
    }

    /**
     * Protocol used by mail server holding voice messages
     */
    public function setMailServerProtocol($mailServerProtocol = null)
    {
        $this->mailServerProtocol = ($mailServerProtocol InstanceOf VoiceMessagingMailServerProtocol)
             ? $mailServerProtocol
             : new VoiceMessagingMailServerProtocol($mailServerProtocol);
    }

    /**
     * Protocol used by mail server holding voice messages
     */
    public function getMailServerProtocol()
    {
        return (!$this->mailServerProtocol) ?: $this->mailServerProtocol->getValue();
    }

    /**
     * Email Address
     */
    public function setDefaultDeliveryFromAddress($defaultDeliveryFromAddress = null)
    {
        $this->defaultDeliveryFromAddress = ($defaultDeliveryFromAddress InstanceOf EmailAddress)
             ? $defaultDeliveryFromAddress
             : new EmailAddress($defaultDeliveryFromAddress);
    }

    /**
     * Email Address
     */
    public function getDefaultDeliveryFromAddress()
    {
        return (!$this->defaultDeliveryFromAddress) ?: $this->defaultDeliveryFromAddress->getValue();
    }

    /**
     * Email Address
     */
    public function setDefaultNotificationFromAddress($defaultNotificationFromAddress = null)
    {
        $this->defaultNotificationFromAddress = ($defaultNotificationFromAddress InstanceOf EmailAddress)
             ? $defaultNotificationFromAddress
             : new EmailAddress($defaultNotificationFromAddress);
    }

    /**
     * Email Address
     */
    public function getDefaultNotificationFromAddress()
    {
        return (!$this->defaultNotificationFromAddress) ?: $this->defaultNotificationFromAddress->getValue();
    }

    /**
     * Email Address
     */
    public function setDefaultVoicePortalLockoutFromAddress($defaultVoicePortalLockoutFromAddress = null)
    {
        $this->defaultVoicePortalLockoutFromAddress = ($defaultVoicePortalLockoutFromAddress InstanceOf EmailAddress)
             ? $defaultVoicePortalLockoutFromAddress
             : new EmailAddress($defaultVoicePortalLockoutFromAddress);
    }

    /**
     * Email Address
     */
    public function getDefaultVoicePortalLockoutFromAddress()
    {
        return (!$this->defaultVoicePortalLockoutFromAddress) ?: $this->defaultVoicePortalLockoutFromAddress->getValue();
    }

    /**
     * 
     */
    public function setUseOutgoingMWIOnSMDI($useOutgoingMWIOnSMDI = null)
    {
        $this->useOutgoingMWIOnSMDI = (boolean) $useOutgoingMWIOnSMDI;
    }

    /**
     * 
     */
    public function getUseOutgoingMWIOnSMDI()
    {
        return (!$this->useOutgoingMWIOnSMDI) ?: $this->useOutgoingMWIOnSMDI->getValue();
    }

    /**
     * Message Waiting Indicator delay in seconds.
     */
    public function setMwiDelayInSeconds($mwiDelayInSeconds = null)
    {
        $this->mwiDelayInSeconds = ($mwiDelayInSeconds InstanceOf VoiceMessagingMessageWaitingIndicatorDelayInSeconds)
             ? $mwiDelayInSeconds
             : new VoiceMessagingMessageWaitingIndicatorDelayInSeconds($mwiDelayInSeconds);
    }

    /**
     * Message Waiting Indicator delay in seconds.
     */
    public function getMwiDelayInSeconds()
    {
        return (!$this->mwiDelayInSeconds) ?: $this->mwiDelayInSeconds->getValue();
    }

    /**
     * Voice Portal Scope.
     *         When set to System, users can call any group voice portal hosted on the same Application Server
     *         as themselves rather than only the voice portal of their own group to initiate the login process.
     *         When set to Service Providers, the voice portal scope is configured within the Service Provider.
     */
    public function setVoicePortalScope($voicePortalScope = null)
    {
        $this->voicePortalScope = ($voicePortalScope InstanceOf SystemVoicePortalScope)
             ? $voicePortalScope
             : new SystemVoicePortalScope($voicePortalScope);
    }

    /**
     * Voice Portal Scope.
     *         When set to System, users can call any group voice portal hosted on the same Application Server
     *         as themselves rather than only the voice portal of their own group to initiate the login process.
     *         When set to Service Providers, the voice portal scope is configured within the Service Provider.
     */
    public function getVoicePortalScope()
    {
        return (!$this->voicePortalScope) ?: $this->voicePortalScope->getValue();
    }

    /**
     * 
     */
    public function setEnterpriseVoicePortalLicensed($enterpriseVoicePortalLicensed = null)
    {
        $this->enterpriseVoicePortalLicensed = (boolean) $enterpriseVoicePortalLicensed;
    }

    /**
     * 
     */
    public function getEnterpriseVoicePortalLicensed()
    {
        return (!$this->enterpriseVoicePortalLicensed) ?: $this->enterpriseVoicePortalLicensed->getValue();
    }

    /**
     * 
     */
    public function setNetworkWideMessaging($networkWideMessaging = null)
    {
        $this->networkWideMessaging = (boolean) $networkWideMessaging;
    }

    /**
     * 
     */
    public function getNetworkWideMessaging()
    {
        return (!$this->networkWideMessaging) ?: $this->networkWideMessaging->getValue();
    }

    /**
     * 
     */
    public function setUseExternalRouting($useExternalRouting = null)
    {
        $this->useExternalRouting = (boolean) $useExternalRouting;
    }

    /**
     * 
     */
    public function getUseExternalRouting()
    {
        return (!$this->useExternalRouting) ?: $this->useExternalRouting->getValue();
    }

    /**
     * Phone Number or SIP URI that can be used to dial.
     *         URI Validation:
     *         - must be of the format string@string where string is at least one valid character and there is one and only one @.
     *         - don't allow sip:
     *         - allow the following characters in the user portions:
     *           alphanumeric   -   _   .   !   ~   *   '   (   )
     *         - allow the following characters in the host portion:
     *           alphanumeric   -   .
     */
    public function setDefaultExternalRoutingAddress($defaultExternalRoutingAddress = null)
    {
        $this->defaultExternalRoutingAddress = ($defaultExternalRoutingAddress InstanceOf OutgoingDNorSIPURI)
             ? $defaultExternalRoutingAddress
             : new OutgoingDNorSIPURI($defaultExternalRoutingAddress);
    }

    /**
     * Phone Number or SIP URI that can be used to dial.
     *         URI Validation:
     *         - must be of the format string@string where string is at least one valid character and there is one and only one @.
     *         - don't allow sip:
     *         - allow the following characters in the user portions:
     *           alphanumeric   -   _   .   !   ~   *   '   (   )
     *         - allow the following characters in the host portion:
     *           alphanumeric   -   .
     */
    public function getDefaultExternalRoutingAddress()
    {
        return (!$this->defaultExternalRoutingAddress) ?: $this->defaultExternalRoutingAddress->getValue();
    }

    /**
     * 
     */
    public function setVmOnlySystem($vmOnlySystem = null)
    {
        $this->vmOnlySystem = (boolean) $vmOnlySystem;
    }

    /**
     * 
     */
    public function getVmOnlySystem()
    {
        return (!$this->vmOnlySystem) ?: $this->vmOnlySystem->getValue();
    }
}
