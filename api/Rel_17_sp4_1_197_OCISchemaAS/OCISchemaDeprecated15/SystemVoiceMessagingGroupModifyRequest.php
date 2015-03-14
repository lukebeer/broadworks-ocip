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
use Broadworks_OCIP\core\Builder\Types\PrimitiveType;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Modify the system level data associated with Voice Messaging.
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class SystemVoiceMessagingGroupModifyRequest extends ComplexType implements ComplexInterface
{
    public    $name                                 = 'SystemVoiceMessagingGroupModifyRequest';
    protected $realDeleteForImap                    = null;
    protected $useDnInMailBody                      = null;
    protected $useShortSubjectLine                  = null;
    protected $maxGreetingLengthMinutes             = null;
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
    protected $networkWideMessaging                 = null;
    protected $useExternalRouting                   = null;
    protected $defaultExternalRoutingAddress        = null;

    public function __construct(
         $realDeleteForImap = null,
         $useDnInMailBody = null,
         $useShortSubjectLine = null,
         $maxGreetingLengthMinutes = null,
         $maxMessageLengthMinutes = null,
         $maxMailboxLengthMinutes = null,
         $doesMessageAge = null,
         $holdPeriodDays = null,
         $mailServerNetAddress = null,
         $mailServerProtocol = null,
         $defaultDeliveryFromAddress = null,
         $defaultNotificationFromAddress = null,
         $defaultVoicePortalLockoutFromAddress = null,
         $useOutgoingMWIOnSMDI = null,
         $mwiDelayInSeconds = null,
         $voicePortalScope = null,
         $networkWideMessaging = null,
         $useExternalRouting = null,
         $defaultExternalRoutingAddress = null
    ) {
        $this->setRealDeleteForImap($realDeleteForImap);
        $this->setUseDnInMailBody($useDnInMailBody);
        $this->setUseShortSubjectLine($useShortSubjectLine);
        $this->setMaxGreetingLengthMinutes($maxGreetingLengthMinutes);
        $this->setMaxMessageLengthMinutes($maxMessageLengthMinutes);
        $this->setMaxMailboxLengthMinutes($maxMailboxLengthMinutes);
        $this->setDoesMessageAge($doesMessageAge);
        $this->setHoldPeriodDays($holdPeriodDays);
        $this->setMailServerNetAddress($mailServerNetAddress);
        $this->setMailServerProtocol($mailServerProtocol);
        $this->setDefaultDeliveryFromAddress($defaultDeliveryFromAddress);
        $this->setDefaultNotificationFromAddress($defaultNotificationFromAddress);
        $this->setDefaultVoicePortalLockoutFromAddress($defaultVoicePortalLockoutFromAddress);
        $this->setUseOutgoingMWIOnSMDI($useOutgoingMWIOnSMDI);
        $this->setMwiDelayInSeconds($mwiDelayInSeconds);
        $this->setVoicePortalScope($voicePortalScope);
        $this->setNetworkWideMessaging($networkWideMessaging);
        $this->setUseExternalRouting($useExternalRouting);
        $this->setDefaultExternalRoutingAddress($defaultExternalRoutingAddress);
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
    public function setRealDeleteForImap($realDeleteForImap = null)
    {
        if (!$realDeleteForImap) return $this;
        $this->realDeleteForImap = new PrimitiveType($realDeleteForImap);
        $this->realDeleteForImap->setName('realDeleteForImap');
        return $this;
    }

    /**
     * 
     * @return boolean $realDeleteForImap
     */
    public function getRealDeleteForImap()
    {
        return $this->realDeleteForImap->getValue();
    }

    /**
     * 
     */
    public function setUseDnInMailBody($useDnInMailBody = null)
    {
        if (!$useDnInMailBody) return $this;
        $this->useDnInMailBody = new PrimitiveType($useDnInMailBody);
        $this->useDnInMailBody->setName('useDnInMailBody');
        return $this;
    }

    /**
     * 
     * @return boolean $useDnInMailBody
     */
    public function getUseDnInMailBody()
    {
        return $this->useDnInMailBody->getValue();
    }

    /**
     * 
     */
    public function setUseShortSubjectLine($useShortSubjectLine = null)
    {
        if (!$useShortSubjectLine) return $this;
        $this->useShortSubjectLine = new PrimitiveType($useShortSubjectLine);
        $this->useShortSubjectLine->setName('useShortSubjectLine');
        return $this;
    }

    /**
     * 
     * @return boolean $useShortSubjectLine
     */
    public function getUseShortSubjectLine()
    {
        return $this->useShortSubjectLine->getValue();
    }

    /**
     * 
     */
    public function setMaxGreetingLengthMinutes($maxGreetingLengthMinutes = null)
    {
        if (!$maxGreetingLengthMinutes) return $this;
        $this->maxGreetingLengthMinutes = ($maxGreetingLengthMinutes InstanceOf VoiceMessagingMaxGreetingLengthMinutes)
             ? $maxGreetingLengthMinutes
             : new VoiceMessagingMaxGreetingLengthMinutes($maxGreetingLengthMinutes);
        $this->maxGreetingLengthMinutes->setName('maxGreetingLengthMinutes');
        return $this;
    }

    /**
     * 
     * @return VoiceMessagingMaxGreetingLengthMinutes $maxGreetingLengthMinutes
     */
    public function getMaxGreetingLengthMinutes()
    {
        return $this->maxGreetingLengthMinutes->getValue();
    }

    /**
     * 
     */
    public function setMaxMessageLengthMinutes($maxMessageLengthMinutes = null)
    {
        if (!$maxMessageLengthMinutes) return $this;
        $this->maxMessageLengthMinutes = ($maxMessageLengthMinutes InstanceOf VoiceMessagingMaxMessageLengthMinutes)
             ? $maxMessageLengthMinutes
             : new VoiceMessagingMaxMessageLengthMinutes($maxMessageLengthMinutes);
        $this->maxMessageLengthMinutes->setName('maxMessageLengthMinutes');
        return $this;
    }

    /**
     * 
     * @return VoiceMessagingMaxMessageLengthMinutes $maxMessageLengthMinutes
     */
    public function getMaxMessageLengthMinutes()
    {
        return $this->maxMessageLengthMinutes->getValue();
    }

    /**
     * 
     */
    public function setMaxMailboxLengthMinutes($maxMailboxLengthMinutes = null)
    {
        if (!$maxMailboxLengthMinutes) return $this;
        $this->maxMailboxLengthMinutes = ($maxMailboxLengthMinutes InstanceOf VoiceMessagingMailboxLengthMinutes)
             ? $maxMailboxLengthMinutes
             : new VoiceMessagingMailboxLengthMinutes($maxMailboxLengthMinutes);
        $this->maxMailboxLengthMinutes->setName('maxMailboxLengthMinutes');
        return $this;
    }

    /**
     * 
     * @return VoiceMessagingMailboxLengthMinutes $maxMailboxLengthMinutes
     */
    public function getMaxMailboxLengthMinutes()
    {
        return $this->maxMailboxLengthMinutes->getValue();
    }

    /**
     * 
     */
    public function setDoesMessageAge($doesMessageAge = null)
    {
        if (!$doesMessageAge) return $this;
        $this->doesMessageAge = new PrimitiveType($doesMessageAge);
        $this->doesMessageAge->setName('doesMessageAge');
        return $this;
    }

    /**
     * 
     * @return boolean $doesMessageAge
     */
    public function getDoesMessageAge()
    {
        return $this->doesMessageAge->getValue();
    }

    /**
     * 
     */
    public function setHoldPeriodDays($holdPeriodDays = null)
    {
        if (!$holdPeriodDays) return $this;
        $this->holdPeriodDays = ($holdPeriodDays InstanceOf VoiceMessagingHoldPeriodDays)
             ? $holdPeriodDays
             : new VoiceMessagingHoldPeriodDays($holdPeriodDays);
        $this->holdPeriodDays->setName('holdPeriodDays');
        return $this;
    }

    /**
     * 
     * @return VoiceMessagingHoldPeriodDays $holdPeriodDays
     */
    public function getHoldPeriodDays()
    {
        return $this->holdPeriodDays->getValue();
    }

    /**
     * 
     */
    public function setMailServerNetAddress($mailServerNetAddress = null)
    {
        if (!$mailServerNetAddress) return $this;
        $this->mailServerNetAddress = ($mailServerNetAddress InstanceOf NetAddress)
             ? $mailServerNetAddress
             : new NetAddress($mailServerNetAddress);
        $this->mailServerNetAddress->setName('mailServerNetAddress');
        return $this;
    }

    /**
     * 
     * @return NetAddress $mailServerNetAddress
     */
    public function getMailServerNetAddress()
    {
        return $this->mailServerNetAddress->getValue();
    }

    /**
     * 
     */
    public function setMailServerProtocol($mailServerProtocol = null)
    {
        if (!$mailServerProtocol) return $this;
        $this->mailServerProtocol = ($mailServerProtocol InstanceOf VoiceMessagingMailServerProtocol)
             ? $mailServerProtocol
             : new VoiceMessagingMailServerProtocol($mailServerProtocol);
        $this->mailServerProtocol->setName('mailServerProtocol');
        return $this;
    }

    /**
     * 
     * @return VoiceMessagingMailServerProtocol $mailServerProtocol
     */
    public function getMailServerProtocol()
    {
        return $this->mailServerProtocol->getValue();
    }

    /**
     * 
     */
    public function setDefaultDeliveryFromAddress($defaultDeliveryFromAddress = null)
    {
        if (!$defaultDeliveryFromAddress) return $this;
        $this->defaultDeliveryFromAddress = ($defaultDeliveryFromAddress InstanceOf EmailAddress)
             ? $defaultDeliveryFromAddress
             : new EmailAddress($defaultDeliveryFromAddress);
        $this->defaultDeliveryFromAddress->setName('defaultDeliveryFromAddress');
        return $this;
    }

    /**
     * 
     * @return EmailAddress $defaultDeliveryFromAddress
     */
    public function getDefaultDeliveryFromAddress()
    {
        return $this->defaultDeliveryFromAddress->getValue();
    }

    /**
     * 
     */
    public function setDefaultNotificationFromAddress($defaultNotificationFromAddress = null)
    {
        if (!$defaultNotificationFromAddress) return $this;
        $this->defaultNotificationFromAddress = ($defaultNotificationFromAddress InstanceOf EmailAddress)
             ? $defaultNotificationFromAddress
             : new EmailAddress($defaultNotificationFromAddress);
        $this->defaultNotificationFromAddress->setName('defaultNotificationFromAddress');
        return $this;
    }

    /**
     * 
     * @return EmailAddress $defaultNotificationFromAddress
     */
    public function getDefaultNotificationFromAddress()
    {
        return $this->defaultNotificationFromAddress->getValue();
    }

    /**
     * 
     */
    public function setDefaultVoicePortalLockoutFromAddress($defaultVoicePortalLockoutFromAddress = null)
    {
        if (!$defaultVoicePortalLockoutFromAddress) return $this;
        $this->defaultVoicePortalLockoutFromAddress = ($defaultVoicePortalLockoutFromAddress InstanceOf EmailAddress)
             ? $defaultVoicePortalLockoutFromAddress
             : new EmailAddress($defaultVoicePortalLockoutFromAddress);
        $this->defaultVoicePortalLockoutFromAddress->setName('defaultVoicePortalLockoutFromAddress');
        return $this;
    }

    /**
     * 
     * @return EmailAddress $defaultVoicePortalLockoutFromAddress
     */
    public function getDefaultVoicePortalLockoutFromAddress()
    {
        return $this->defaultVoicePortalLockoutFromAddress->getValue();
    }

    /**
     * 
     */
    public function setUseOutgoingMWIOnSMDI($useOutgoingMWIOnSMDI = null)
    {
        if (!$useOutgoingMWIOnSMDI) return $this;
        $this->useOutgoingMWIOnSMDI = new PrimitiveType($useOutgoingMWIOnSMDI);
        $this->useOutgoingMWIOnSMDI->setName('useOutgoingMWIOnSMDI');
        return $this;
    }

    /**
     * 
     * @return boolean $useOutgoingMWIOnSMDI
     */
    public function getUseOutgoingMWIOnSMDI()
    {
        return $this->useOutgoingMWIOnSMDI->getValue();
    }

    /**
     * 
     */
    public function setMwiDelayInSeconds($mwiDelayInSeconds = null)
    {
        if (!$mwiDelayInSeconds) return $this;
        $this->mwiDelayInSeconds = ($mwiDelayInSeconds InstanceOf VoiceMessagingMessageWaitingIndicatorDelayInSeconds)
             ? $mwiDelayInSeconds
             : new VoiceMessagingMessageWaitingIndicatorDelayInSeconds($mwiDelayInSeconds);
        $this->mwiDelayInSeconds->setName('mwiDelayInSeconds');
        return $this;
    }

    /**
     * 
     * @return VoiceMessagingMessageWaitingIndicatorDelayInSeconds $mwiDelayInSeconds
     */
    public function getMwiDelayInSeconds()
    {
        return $this->mwiDelayInSeconds->getValue();
    }

    /**
     * 
     */
    public function setVoicePortalScope($voicePortalScope = null)
    {
        if (!$voicePortalScope) return $this;
        $this->voicePortalScope = ($voicePortalScope InstanceOf SystemVoicePortalScope)
             ? $voicePortalScope
             : new SystemVoicePortalScope($voicePortalScope);
        $this->voicePortalScope->setName('voicePortalScope');
        return $this;
    }

    /**
     * 
     * @return SystemVoicePortalScope $voicePortalScope
     */
    public function getVoicePortalScope()
    {
        return $this->voicePortalScope->getValue();
    }

    /**
     * 
     */
    public function setNetworkWideMessaging($networkWideMessaging = null)
    {
        if (!$networkWideMessaging) return $this;
        $this->networkWideMessaging = new PrimitiveType($networkWideMessaging);
        $this->networkWideMessaging->setName('networkWideMessaging');
        return $this;
    }

    /**
     * 
     * @return boolean $networkWideMessaging
     */
    public function getNetworkWideMessaging()
    {
        return $this->networkWideMessaging->getValue();
    }

    /**
     * 
     */
    public function setUseExternalRouting($useExternalRouting = null)
    {
        if (!$useExternalRouting) return $this;
        $this->useExternalRouting = new PrimitiveType($useExternalRouting);
        $this->useExternalRouting->setName('useExternalRouting');
        return $this;
    }

    /**
     * 
     * @return boolean $useExternalRouting
     */
    public function getUseExternalRouting()
    {
        return $this->useExternalRouting->getValue();
    }

    /**
     * 
     */
    public function setDefaultExternalRoutingAddress($defaultExternalRoutingAddress = null)
    {
        if (!$defaultExternalRoutingAddress) return $this;
        $this->defaultExternalRoutingAddress = ($defaultExternalRoutingAddress InstanceOf OutgoingDNorSIPURI)
             ? $defaultExternalRoutingAddress
             : new OutgoingDNorSIPURI($defaultExternalRoutingAddress);
        $this->defaultExternalRoutingAddress->setName('defaultExternalRoutingAddress');
        return $this;
    }

    /**
     * 
     * @return OutgoingDNorSIPURI $defaultExternalRoutingAddress
     */
    public function getDefaultExternalRoutingAddress()
    {
        return $this->defaultExternalRoutingAddress->getValue();
    }
}
