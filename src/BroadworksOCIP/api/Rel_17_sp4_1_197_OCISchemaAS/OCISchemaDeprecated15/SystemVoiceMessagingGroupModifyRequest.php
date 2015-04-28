<?php
/**
 * This file is part of http://github.com/LukeBeer/BroadworksOCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated15; 

use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceVoiceMessaging\VoiceMessagingMessageWaitingIndicatorDelayInSeconds;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceVoiceMessaging\VoiceMessagingMaxMessageLengthMinutes;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceVoiceMessaging\VoiceMessagingMailboxLengthMinutes;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceVoiceMessaging\VoiceMessagingMailServerProtocol;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceVoiceMessaging\VoiceMessagingHoldPeriodDays;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceVoiceMessaging\SystemVoicePortalScope;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated15\VoiceMessagingMaxGreetingLengthMinutes;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\OutgoingDNorSIPURI;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\EmailAddress;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\NetAddress;
use BroadworksOCIP\Builder\Types\PrimitiveType;
use BroadworksOCIP\Builder\Types\ComplexInterface;
use BroadworksOCIP\Builder\Types\ComplexType;
use BroadworksOCIP\Response\ResponseOutput;
use BroadworksOCIP\Client\Client;


/**
 * Modify the system level data associated with Voice Messaging.
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class SystemVoiceMessagingGroupModifyRequest extends ComplexType implements ComplexInterface
{
    public    $elementName = 'SystemVoiceMessagingGroupModifyRequest';
    protected $realDeleteForImap;
    protected $useDnInMailBody;
    protected $useShortSubjectLine;
    protected $maxGreetingLengthMinutes;
    protected $maxMessageLengthMinutes;
    protected $maxMailboxLengthMinutes;
    protected $doesMessageAge;
    protected $holdPeriodDays;
    protected $mailServerNetAddress;
    protected $mailServerProtocol;
    protected $defaultDeliveryFromAddress;
    protected $defaultNotificationFromAddress;
    protected $defaultVoicePortalLockoutFromAddress;
    protected $useOutgoingMWIOnSMDI;
    protected $mwiDelayInSeconds;
    protected $voicePortalScope;
    protected $networkWideMessaging;
    protected $useExternalRouting;
    protected $defaultExternalRoutingAddress;

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
        $this->realDeleteForImap = new PrimitiveType($realDeleteForImap);
        $this->realDeleteForImap->setElementName('realDeleteForImap');
        return $this;
    }

    /**
     * 
     * @return boolean $realDeleteForImap
     */
    public function getRealDeleteForImap()
    {
        return ($this->realDeleteForImap)
            ? $this->realDeleteForImap->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setUseDnInMailBody($useDnInMailBody = null)
    {
        $this->useDnInMailBody = new PrimitiveType($useDnInMailBody);
        $this->useDnInMailBody->setElementName('useDnInMailBody');
        return $this;
    }

    /**
     * 
     * @return boolean $useDnInMailBody
     */
    public function getUseDnInMailBody()
    {
        return ($this->useDnInMailBody)
            ? $this->useDnInMailBody->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setUseShortSubjectLine($useShortSubjectLine = null)
    {
        $this->useShortSubjectLine = new PrimitiveType($useShortSubjectLine);
        $this->useShortSubjectLine->setElementName('useShortSubjectLine');
        return $this;
    }

    /**
     * 
     * @return boolean $useShortSubjectLine
     */
    public function getUseShortSubjectLine()
    {
        return ($this->useShortSubjectLine)
            ? $this->useShortSubjectLine->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setMaxGreetingLengthMinutes($maxGreetingLengthMinutes = null)
    {
        $this->maxGreetingLengthMinutes = ($maxGreetingLengthMinutes InstanceOf VoiceMessagingMaxGreetingLengthMinutes)
             ? $maxGreetingLengthMinutes
             : new VoiceMessagingMaxGreetingLengthMinutes($maxGreetingLengthMinutes);
        $this->maxGreetingLengthMinutes->setElementName('maxGreetingLengthMinutes');
        return $this;
    }

    /**
     * 
     * @return VoiceMessagingMaxGreetingLengthMinutes $maxGreetingLengthMinutes
     */
    public function getMaxGreetingLengthMinutes()
    {
        return ($this->maxGreetingLengthMinutes)
            ? $this->maxGreetingLengthMinutes->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setMaxMessageLengthMinutes($maxMessageLengthMinutes = null)
    {
        $this->maxMessageLengthMinutes = ($maxMessageLengthMinutes InstanceOf VoiceMessagingMaxMessageLengthMinutes)
             ? $maxMessageLengthMinutes
             : new VoiceMessagingMaxMessageLengthMinutes($maxMessageLengthMinutes);
        $this->maxMessageLengthMinutes->setElementName('maxMessageLengthMinutes');
        return $this;
    }

    /**
     * 
     * @return VoiceMessagingMaxMessageLengthMinutes $maxMessageLengthMinutes
     */
    public function getMaxMessageLengthMinutes()
    {
        return ($this->maxMessageLengthMinutes)
            ? $this->maxMessageLengthMinutes->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setMaxMailboxLengthMinutes($maxMailboxLengthMinutes = null)
    {
        $this->maxMailboxLengthMinutes = ($maxMailboxLengthMinutes InstanceOf VoiceMessagingMailboxLengthMinutes)
             ? $maxMailboxLengthMinutes
             : new VoiceMessagingMailboxLengthMinutes($maxMailboxLengthMinutes);
        $this->maxMailboxLengthMinutes->setElementName('maxMailboxLengthMinutes');
        return $this;
    }

    /**
     * 
     * @return VoiceMessagingMailboxLengthMinutes $maxMailboxLengthMinutes
     */
    public function getMaxMailboxLengthMinutes()
    {
        return ($this->maxMailboxLengthMinutes)
            ? $this->maxMailboxLengthMinutes->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setDoesMessageAge($doesMessageAge = null)
    {
        $this->doesMessageAge = new PrimitiveType($doesMessageAge);
        $this->doesMessageAge->setElementName('doesMessageAge');
        return $this;
    }

    /**
     * 
     * @return boolean $doesMessageAge
     */
    public function getDoesMessageAge()
    {
        return ($this->doesMessageAge)
            ? $this->doesMessageAge->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setHoldPeriodDays($holdPeriodDays = null)
    {
        $this->holdPeriodDays = ($holdPeriodDays InstanceOf VoiceMessagingHoldPeriodDays)
             ? $holdPeriodDays
             : new VoiceMessagingHoldPeriodDays($holdPeriodDays);
        $this->holdPeriodDays->setElementName('holdPeriodDays');
        return $this;
    }

    /**
     * 
     * @return VoiceMessagingHoldPeriodDays $holdPeriodDays
     */
    public function getHoldPeriodDays()
    {
        return ($this->holdPeriodDays)
            ? $this->holdPeriodDays->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setMailServerNetAddress($mailServerNetAddress = null)
    {
        $this->mailServerNetAddress = ($mailServerNetAddress InstanceOf NetAddress)
             ? $mailServerNetAddress
             : new NetAddress($mailServerNetAddress);
        $this->mailServerNetAddress->setElementName('mailServerNetAddress');
        return $this;
    }

    /**
     * 
     * @return NetAddress $mailServerNetAddress
     */
    public function getMailServerNetAddress()
    {
        return ($this->mailServerNetAddress)
            ? $this->mailServerNetAddress->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setMailServerProtocol($mailServerProtocol = null)
    {
        $this->mailServerProtocol = ($mailServerProtocol InstanceOf VoiceMessagingMailServerProtocol)
             ? $mailServerProtocol
             : new VoiceMessagingMailServerProtocol($mailServerProtocol);
        $this->mailServerProtocol->setElementName('mailServerProtocol');
        return $this;
    }

    /**
     * 
     * @return VoiceMessagingMailServerProtocol $mailServerProtocol
     */
    public function getMailServerProtocol()
    {
        return ($this->mailServerProtocol)
            ? $this->mailServerProtocol->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setDefaultDeliveryFromAddress($defaultDeliveryFromAddress = null)
    {
        $this->defaultDeliveryFromAddress = ($defaultDeliveryFromAddress InstanceOf EmailAddress)
             ? $defaultDeliveryFromAddress
             : new EmailAddress($defaultDeliveryFromAddress);
        $this->defaultDeliveryFromAddress->setElementName('defaultDeliveryFromAddress');
        return $this;
    }

    /**
     * 
     * @return EmailAddress $defaultDeliveryFromAddress
     */
    public function getDefaultDeliveryFromAddress()
    {
        return ($this->defaultDeliveryFromAddress)
            ? $this->defaultDeliveryFromAddress->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setDefaultNotificationFromAddress($defaultNotificationFromAddress = null)
    {
        $this->defaultNotificationFromAddress = ($defaultNotificationFromAddress InstanceOf EmailAddress)
             ? $defaultNotificationFromAddress
             : new EmailAddress($defaultNotificationFromAddress);
        $this->defaultNotificationFromAddress->setElementName('defaultNotificationFromAddress');
        return $this;
    }

    /**
     * 
     * @return EmailAddress $defaultNotificationFromAddress
     */
    public function getDefaultNotificationFromAddress()
    {
        return ($this->defaultNotificationFromAddress)
            ? $this->defaultNotificationFromAddress->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setDefaultVoicePortalLockoutFromAddress($defaultVoicePortalLockoutFromAddress = null)
    {
        $this->defaultVoicePortalLockoutFromAddress = ($defaultVoicePortalLockoutFromAddress InstanceOf EmailAddress)
             ? $defaultVoicePortalLockoutFromAddress
             : new EmailAddress($defaultVoicePortalLockoutFromAddress);
        $this->defaultVoicePortalLockoutFromAddress->setElementName('defaultVoicePortalLockoutFromAddress');
        return $this;
    }

    /**
     * 
     * @return EmailAddress $defaultVoicePortalLockoutFromAddress
     */
    public function getDefaultVoicePortalLockoutFromAddress()
    {
        return ($this->defaultVoicePortalLockoutFromAddress)
            ? $this->defaultVoicePortalLockoutFromAddress->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setUseOutgoingMWIOnSMDI($useOutgoingMWIOnSMDI = null)
    {
        $this->useOutgoingMWIOnSMDI = new PrimitiveType($useOutgoingMWIOnSMDI);
        $this->useOutgoingMWIOnSMDI->setElementName('useOutgoingMWIOnSMDI');
        return $this;
    }

    /**
     * 
     * @return boolean $useOutgoingMWIOnSMDI
     */
    public function getUseOutgoingMWIOnSMDI()
    {
        return ($this->useOutgoingMWIOnSMDI)
            ? $this->useOutgoingMWIOnSMDI->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setMwiDelayInSeconds($mwiDelayInSeconds = null)
    {
        $this->mwiDelayInSeconds = ($mwiDelayInSeconds InstanceOf VoiceMessagingMessageWaitingIndicatorDelayInSeconds)
             ? $mwiDelayInSeconds
             : new VoiceMessagingMessageWaitingIndicatorDelayInSeconds($mwiDelayInSeconds);
        $this->mwiDelayInSeconds->setElementName('mwiDelayInSeconds');
        return $this;
    }

    /**
     * 
     * @return VoiceMessagingMessageWaitingIndicatorDelayInSeconds $mwiDelayInSeconds
     */
    public function getMwiDelayInSeconds()
    {
        return ($this->mwiDelayInSeconds)
            ? $this->mwiDelayInSeconds->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setVoicePortalScope($voicePortalScope = null)
    {
        $this->voicePortalScope = ($voicePortalScope InstanceOf SystemVoicePortalScope)
             ? $voicePortalScope
             : new SystemVoicePortalScope($voicePortalScope);
        $this->voicePortalScope->setElementName('voicePortalScope');
        return $this;
    }

    /**
     * 
     * @return SystemVoicePortalScope $voicePortalScope
     */
    public function getVoicePortalScope()
    {
        return ($this->voicePortalScope)
            ? $this->voicePortalScope->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setNetworkWideMessaging($networkWideMessaging = null)
    {
        $this->networkWideMessaging = new PrimitiveType($networkWideMessaging);
        $this->networkWideMessaging->setElementName('networkWideMessaging');
        return $this;
    }

    /**
     * 
     * @return boolean $networkWideMessaging
     */
    public function getNetworkWideMessaging()
    {
        return ($this->networkWideMessaging)
            ? $this->networkWideMessaging->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setUseExternalRouting($useExternalRouting = null)
    {
        $this->useExternalRouting = new PrimitiveType($useExternalRouting);
        $this->useExternalRouting->setElementName('useExternalRouting');
        return $this;
    }

    /**
     * 
     * @return boolean $useExternalRouting
     */
    public function getUseExternalRouting()
    {
        return ($this->useExternalRouting)
            ? $this->useExternalRouting->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setDefaultExternalRoutingAddress($defaultExternalRoutingAddress = null)
    {
        $this->defaultExternalRoutingAddress = ($defaultExternalRoutingAddress InstanceOf OutgoingDNorSIPURI)
             ? $defaultExternalRoutingAddress
             : new OutgoingDNorSIPURI($defaultExternalRoutingAddress);
        $this->defaultExternalRoutingAddress->setElementName('defaultExternalRoutingAddress');
        return $this;
    }

    /**
     * 
     * @return OutgoingDNorSIPURI $defaultExternalRoutingAddress
     */
    public function getDefaultExternalRoutingAddress()
    {
        return ($this->defaultExternalRoutingAddress)
            ? $this->defaultExternalRoutingAddress->getElementValue()
            : null;
    }
}
