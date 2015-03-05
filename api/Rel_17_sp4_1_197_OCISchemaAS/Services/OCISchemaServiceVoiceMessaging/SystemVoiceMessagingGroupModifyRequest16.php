<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceVoiceMessaging; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\xs:boolean;
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
 * Modify the system level data associated with Voice Messaging.
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class SystemVoiceMessagingGroupModifyRequest16 extends ComplexType implements ComplexInterface
{
    public    $name = __CLASS__;

    public function __construct(
             $realDeleteForImap=null,
             $useDnInMailBody=null,
             $useShortSubjectLine=null,
             $maxMessageLengthMinutes=null,
             $maxMailboxLengthMinutes=null,
             $doesMessageAge=null,
             $holdPeriodDays=null,
             $mailServerNetAddress=null,
             $mailServerProtocol=null,
             $defaultDeliveryFromAddress=null,
             $defaultNotificationFromAddress=null,
             $defaultVoicePortalLockoutFromAddress=null,
             $useOutgoingMWIOnSMDI=null,
             $mwiDelayInSeconds=null,
             $voicePortalScope=null,
             $networkWideMessaging=null,
             $useExternalRouting=null,
             $defaultExternalRoutingAddress=null,
             $vmOnlySystem=null
    ) {
        $this->realDeleteForImap                    = $realDeleteForImap;
        $this->useDnInMailBody                      = $useDnInMailBody;
        $this->useShortSubjectLine                  = $useShortSubjectLine;
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
        $this->networkWideMessaging                 = $networkWideMessaging;
        $this->useExternalRouting                   = $useExternalRouting;
        $this->defaultExternalRoutingAddress        = new OutgoingDNorSIPURI($defaultExternalRoutingAddress);
        $this->vmOnlySystem                         = $vmOnlySystem;
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

    public function setVmOnlySystem($vmOnlySystem)
    {
        $vmOnlySystem and $this->vmOnlySystem = new xs:boolean($vmOnlySystem);
    }

    public function getVmOnlySystem()
    {
        return (!$this->vmOnlySystem) ?: $this->vmOnlySystem->value();
    }
}
