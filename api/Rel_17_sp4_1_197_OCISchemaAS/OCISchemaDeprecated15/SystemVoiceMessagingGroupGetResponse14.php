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
 * Response to SystemVoiceMessagingGroupGetRequest14.
 */
class SystemVoiceMessagingGroupGetResponse14 extends ComplexType implements ComplexInterface
{
    public    $name = 'SystemVoiceMessagingGroupGetResponse14';
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
    protected $enterpriseVoicePortalLicensed;
    protected $networkWideMessaging;
    protected $useExternalRouting;
    protected $defaultExternalRoutingAddress;

    /**
     * @return \Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated15\SystemVoiceMessagingGroupGetResponse14 $response
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
        $this->realDeleteForImap->setName('realDeleteForImap');
        return $this;
    }

    /**
     * 
     * @return boolean $realDeleteForImap
     */
    public function getRealDeleteForImap()
    {
        return ($this->realDeleteForImap) ? $this->realDeleteForImap->getValue() : null;
    }

    /**
     * 
     */
    public function setUseDnInMailBody($useDnInMailBody = null)
    {
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
        return ($this->useDnInMailBody) ? $this->useDnInMailBody->getValue() : null;
    }

    /**
     * 
     */
    public function setUseShortSubjectLine($useShortSubjectLine = null)
    {
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
        return ($this->useShortSubjectLine) ? $this->useShortSubjectLine->getValue() : null;
    }

    /**
     * 
     */
    public function setMaxGreetingLengthMinutes($maxGreetingLengthMinutes = null)
    {
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
        return ($this->maxGreetingLengthMinutes) ? $this->maxGreetingLengthMinutes->getValue() : null;
    }

    /**
     * 
     */
    public function setMaxMessageLengthMinutes($maxMessageLengthMinutes = null)
    {
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
        return ($this->maxMessageLengthMinutes) ? $this->maxMessageLengthMinutes->getValue() : null;
    }

    /**
     * 
     */
    public function setMaxMailboxLengthMinutes($maxMailboxLengthMinutes = null)
    {
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
        return ($this->maxMailboxLengthMinutes) ? $this->maxMailboxLengthMinutes->getValue() : null;
    }

    /**
     * 
     */
    public function setDoesMessageAge($doesMessageAge = null)
    {
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
        return ($this->doesMessageAge) ? $this->doesMessageAge->getValue() : null;
    }

    /**
     * 
     */
    public function setHoldPeriodDays($holdPeriodDays = null)
    {
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
        return ($this->holdPeriodDays) ? $this->holdPeriodDays->getValue() : null;
    }

    /**
     * 
     */
    public function setMailServerNetAddress($mailServerNetAddress = null)
    {
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
        return ($this->mailServerNetAddress) ? $this->mailServerNetAddress->getValue() : null;
    }

    /**
     * 
     */
    public function setMailServerProtocol($mailServerProtocol = null)
    {
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
        return ($this->mailServerProtocol) ? $this->mailServerProtocol->getValue() : null;
    }

    /**
     * 
     */
    public function setDefaultDeliveryFromAddress($defaultDeliveryFromAddress = null)
    {
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
        return ($this->defaultDeliveryFromAddress) ? $this->defaultDeliveryFromAddress->getValue() : null;
    }

    /**
     * 
     */
    public function setDefaultNotificationFromAddress($defaultNotificationFromAddress = null)
    {
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
        return ($this->defaultNotificationFromAddress) ? $this->defaultNotificationFromAddress->getValue() : null;
    }

    /**
     * 
     */
    public function setDefaultVoicePortalLockoutFromAddress($defaultVoicePortalLockoutFromAddress = null)
    {
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
        return ($this->defaultVoicePortalLockoutFromAddress) ? $this->defaultVoicePortalLockoutFromAddress->getValue() : null;
    }

    /**
     * 
     */
    public function setUseOutgoingMWIOnSMDI($useOutgoingMWIOnSMDI = null)
    {
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
        return ($this->useOutgoingMWIOnSMDI) ? $this->useOutgoingMWIOnSMDI->getValue() : null;
    }

    /**
     * 
     */
    public function setMwiDelayInSeconds($mwiDelayInSeconds = null)
    {
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
        return ($this->mwiDelayInSeconds) ? $this->mwiDelayInSeconds->getValue() : null;
    }

    /**
     * 
     */
    public function setVoicePortalScope($voicePortalScope = null)
    {
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
        return ($this->voicePortalScope) ? $this->voicePortalScope->getValue() : null;
    }

    /**
     * 
     */
    public function setEnterpriseVoicePortalLicensed($enterpriseVoicePortalLicensed = null)
    {
        $this->enterpriseVoicePortalLicensed = new PrimitiveType($enterpriseVoicePortalLicensed);
        $this->enterpriseVoicePortalLicensed->setName('enterpriseVoicePortalLicensed');
        return $this;
    }

    /**
     * 
     * @return boolean $enterpriseVoicePortalLicensed
     */
    public function getEnterpriseVoicePortalLicensed()
    {
        return ($this->enterpriseVoicePortalLicensed) ? $this->enterpriseVoicePortalLicensed->getValue() : null;
    }

    /**
     * 
     */
    public function setNetworkWideMessaging($networkWideMessaging = null)
    {
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
        return ($this->networkWideMessaging) ? $this->networkWideMessaging->getValue() : null;
    }

    /**
     * 
     */
    public function setUseExternalRouting($useExternalRouting = null)
    {
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
        return ($this->useExternalRouting) ? $this->useExternalRouting->getValue() : null;
    }

    /**
     * 
     */
    public function setDefaultExternalRoutingAddress($defaultExternalRoutingAddress = null)
    {
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
        return ($this->defaultExternalRoutingAddress) ? $this->defaultExternalRoutingAddress->getValue() : null;
    }
}
