<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated15; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\xs:boolean;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\VoiceMessagingMaxGreetingLengthMinutes;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\VoiceMessagingMaxMessageLengthMinutes;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\VoiceMessagingMailboxLengthMinutes;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\VoiceMessagingHoldPeriodDays;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\NetAddress;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\VoiceMessagingMailServerProtocol;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\EmailAddress;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\VoiceMessagingMessageWaitingIndicatorDelayInSeconds;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\SystemVoicePortalScope;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\OutgoingDNorSIPURI;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Response to SystemVoiceMessagingGroupGetRequest14.
 */
class SystemVoiceMessagingGroupGetResponse14 extends ComplexType implements ComplexInterface
{
    public    $name = __CLASS__;

    public function __construct(
             $realDeleteForImap,
             $useDnInMailBody,
             $useShortSubjectLine,
             $maxGreetingLengthMinutes,
             $maxMessageLengthMinutes,
             $maxMailboxLengthMinutes,
             $doesMessageAge,
             $holdPeriodDays,
             $mailServerNetAddress=null,
             $mailServerProtocol,
             $defaultDeliveryFromAddress,
             $defaultNotificationFromAddress,
             $defaultVoicePortalLockoutFromAddress,
             $useOutgoingMWIOnSMDI,
             $mwiDelayInSeconds,
             $voicePortalScope,
             $enterpriseVoicePortalLicensed,
             $networkWideMessaging,
             $useExternalRouting,
             $defaultExternalRoutingAddress=null
    ) {
        $this->realDeleteForImap                    = $realDeleteForImap;
        $this->useDnInMailBody                      = $useDnInMailBody;
        $this->useShortSubjectLine                  = $useShortSubjectLine;
        $this->maxGreetingLengthMinutes             = $maxGreetingLengthMinutes;
        $this->maxMessageLengthMinutes              = $maxMessageLengthMinutes;
        $this->maxMailboxLengthMinutes              = $maxMailboxLengthMinutes;
        $this->doesMessageAge                       = $doesMessageAge;
        $this->holdPeriodDays                       = $holdPeriodDays;
        $this->mailServerNetAddress                 = new NetAddress($mailServerNetAddress);
        $this->mailServerProtocol                   = $mailServerProtocol;
        $this->defaultDeliveryFromAddress           = new EmailAddress($defaultDeliveryFromAddress);
        $this->defaultNotificationFromAddress       = new EmailAddress($defaultNotificationFromAddress);
        $this->defaultVoicePortalLockoutFromAddress = new EmailAddress($defaultVoicePortalLockoutFromAddress);
        $this->useOutgoingMWIOnSMDI                 = $useOutgoingMWIOnSMDI;
        $this->mwiDelayInSeconds                    = $mwiDelayInSeconds;
        $this->voicePortalScope                     = $voicePortalScope;
        $this->enterpriseVoicePortalLicensed        = $enterpriseVoicePortalLicensed;
        $this->networkWideMessaging                 = $networkWideMessaging;
        $this->useExternalRouting                   = $useExternalRouting;
        $this->defaultExternalRoutingAddress        = new OutgoingDNorSIPURI($defaultExternalRoutingAddress);
        $this->args                                 = func_get_args();
    }

    public function setRealDeleteForImap($realDeleteForImap)
    {
        $realDeleteForImap and $this->realDeleteForImap = new xs:boolean($realDeleteForImap);
    }

    public function getRealDeleteForImap()
    {
        return (!$this->realDeleteForImap) ?: $this->realDeleteForImap->value();
    }

    public function setUseDnInMailBody($useDnInMailBody)
    {
        $useDnInMailBody and $this->useDnInMailBody = new xs:boolean($useDnInMailBody);
    }

    public function getUseDnInMailBody()
    {
        return (!$this->useDnInMailBody) ?: $this->useDnInMailBody->value();
    }

    public function setUseShortSubjectLine($useShortSubjectLine)
    {
        $useShortSubjectLine and $this->useShortSubjectLine = new xs:boolean($useShortSubjectLine);
    }

    public function getUseShortSubjectLine()
    {
        return (!$this->useShortSubjectLine) ?: $this->useShortSubjectLine->value();
    }

    public function setMaxGreetingLengthMinutes($maxGreetingLengthMinutes)
    {
        $maxGreetingLengthMinutes and $this->maxGreetingLengthMinutes = new VoiceMessagingMaxGreetingLengthMinutes($maxGreetingLengthMinutes);
    }

    public function getMaxGreetingLengthMinutes()
    {
        return (!$this->maxGreetingLengthMinutes) ?: $this->maxGreetingLengthMinutes->value();
    }

    public function setMaxMessageLengthMinutes($maxMessageLengthMinutes)
    {
        $maxMessageLengthMinutes and $this->maxMessageLengthMinutes = new VoiceMessagingMaxMessageLengthMinutes($maxMessageLengthMinutes);
    }

    public function getMaxMessageLengthMinutes()
    {
        return (!$this->maxMessageLengthMinutes) ?: $this->maxMessageLengthMinutes->value();
    }

    public function setMaxMailboxLengthMinutes($maxMailboxLengthMinutes)
    {
        $maxMailboxLengthMinutes and $this->maxMailboxLengthMinutes = new VoiceMessagingMailboxLengthMinutes($maxMailboxLengthMinutes);
    }

    public function getMaxMailboxLengthMinutes()
    {
        return (!$this->maxMailboxLengthMinutes) ?: $this->maxMailboxLengthMinutes->value();
    }

    public function setDoesMessageAge($doesMessageAge)
    {
        $doesMessageAge and $this->doesMessageAge = new xs:boolean($doesMessageAge);
    }

    public function getDoesMessageAge()
    {
        return (!$this->doesMessageAge) ?: $this->doesMessageAge->value();
    }

    public function setHoldPeriodDays($holdPeriodDays)
    {
        $holdPeriodDays and $this->holdPeriodDays = new VoiceMessagingHoldPeriodDays($holdPeriodDays);
    }

    public function getHoldPeriodDays()
    {
        return (!$this->holdPeriodDays) ?: $this->holdPeriodDays->value();
    }

    public function setMailServerNetAddress($mailServerNetAddress)
    {
        $mailServerNetAddress and $this->mailServerNetAddress = new NetAddress($mailServerNetAddress);
    }

    public function getMailServerNetAddress()
    {
        return (!$this->mailServerNetAddress) ?: $this->mailServerNetAddress->value();
    }

    public function setMailServerProtocol($mailServerProtocol)
    {
        $mailServerProtocol and $this->mailServerProtocol = new VoiceMessagingMailServerProtocol($mailServerProtocol);
    }

    public function getMailServerProtocol()
    {
        return (!$this->mailServerProtocol) ?: $this->mailServerProtocol->value();
    }

    public function setDefaultDeliveryFromAddress($defaultDeliveryFromAddress)
    {
        $defaultDeliveryFromAddress and $this->defaultDeliveryFromAddress = new EmailAddress($defaultDeliveryFromAddress);
    }

    public function getDefaultDeliveryFromAddress()
    {
        return (!$this->defaultDeliveryFromAddress) ?: $this->defaultDeliveryFromAddress->value();
    }

    public function setDefaultNotificationFromAddress($defaultNotificationFromAddress)
    {
        $defaultNotificationFromAddress and $this->defaultNotificationFromAddress = new EmailAddress($defaultNotificationFromAddress);
    }

    public function getDefaultNotificationFromAddress()
    {
        return (!$this->defaultNotificationFromAddress) ?: $this->defaultNotificationFromAddress->value();
    }

    public function setDefaultVoicePortalLockoutFromAddress($defaultVoicePortalLockoutFromAddress)
    {
        $defaultVoicePortalLockoutFromAddress and $this->defaultVoicePortalLockoutFromAddress = new EmailAddress($defaultVoicePortalLockoutFromAddress);
    }

    public function getDefaultVoicePortalLockoutFromAddress()
    {
        return (!$this->defaultVoicePortalLockoutFromAddress) ?: $this->defaultVoicePortalLockoutFromAddress->value();
    }

    public function setUseOutgoingMWIOnSMDI($useOutgoingMWIOnSMDI)
    {
        $useOutgoingMWIOnSMDI and $this->useOutgoingMWIOnSMDI = new xs:boolean($useOutgoingMWIOnSMDI);
    }

    public function getUseOutgoingMWIOnSMDI()
    {
        return (!$this->useOutgoingMWIOnSMDI) ?: $this->useOutgoingMWIOnSMDI->value();
    }

    public function setMwiDelayInSeconds($mwiDelayInSeconds)
    {
        $mwiDelayInSeconds and $this->mwiDelayInSeconds = new VoiceMessagingMessageWaitingIndicatorDelayInSeconds($mwiDelayInSeconds);
    }

    public function getMwiDelayInSeconds()
    {
        return (!$this->mwiDelayInSeconds) ?: $this->mwiDelayInSeconds->value();
    }

    public function setVoicePortalScope($voicePortalScope)
    {
        $voicePortalScope and $this->voicePortalScope = new SystemVoicePortalScope($voicePortalScope);
    }

    public function getVoicePortalScope()
    {
        return (!$this->voicePortalScope) ?: $this->voicePortalScope->value();
    }

    public function setEnterpriseVoicePortalLicensed($enterpriseVoicePortalLicensed)
    {
        $enterpriseVoicePortalLicensed and $this->enterpriseVoicePortalLicensed = new xs:boolean($enterpriseVoicePortalLicensed);
    }

    public function getEnterpriseVoicePortalLicensed()
    {
        return (!$this->enterpriseVoicePortalLicensed) ?: $this->enterpriseVoicePortalLicensed->value();
    }

    public function setNetworkWideMessaging($networkWideMessaging)
    {
        $networkWideMessaging and $this->networkWideMessaging = new xs:boolean($networkWideMessaging);
    }

    public function getNetworkWideMessaging()
    {
        return (!$this->networkWideMessaging) ?: $this->networkWideMessaging->value();
    }

    public function setUseExternalRouting($useExternalRouting)
    {
        $useExternalRouting and $this->useExternalRouting = new xs:boolean($useExternalRouting);
    }

    public function getUseExternalRouting()
    {
        return (!$this->useExternalRouting) ?: $this->useExternalRouting->value();
    }

    public function setDefaultExternalRoutingAddress($defaultExternalRoutingAddress)
    {
        $defaultExternalRoutingAddress and $this->defaultExternalRoutingAddress = new OutgoingDNorSIPURI($defaultExternalRoutingAddress);
    }

    public function getDefaultExternalRoutingAddress()
    {
        return (!$this->defaultExternalRoutingAddress) ?: $this->defaultExternalRoutingAddress->value();
    }
}
