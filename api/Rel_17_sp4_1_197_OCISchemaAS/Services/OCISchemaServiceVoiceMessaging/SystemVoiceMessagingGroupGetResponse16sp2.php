<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceVoiceMessaging; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceVoiceMessaging\VoiceMessagingMessageWaitingIndicatorDelayInSeconds;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceVoiceMessaging\VoiceMessagingMaxMessageLengthMinutes;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceVoiceMessaging\VoiceMessagingMailboxLengthMinutes;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceVoiceMessaging\VoiceMessagingMailServerProtocol;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceVoiceMessaging\VoiceMessagingHoldPeriodDays;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceVoiceMessaging\SystemVoicePortalScope;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\OutgoingDNorSIPURI;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\EmailAddress;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\NetAddress;
use Broadworks_OCIP\core\Builder\Types\PrimitiveType;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Response to SystemVoiceMessagingGroupGetRequest16sp2.
 */
class SystemVoiceMessagingGroupGetResponse16sp2 extends ComplexType implements ComplexInterface
{
    public    $name                                 = 'SystemVoiceMessagingGroupGetResponse16sp2';
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
     * @return SystemVoiceMessagingGroupGetResponse16sp2
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
     * @return xs:boolean
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
     * @return xs:boolean
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
     * @return xs:boolean
     */
    public function getUseShortSubjectLine()
    {
        return $this->useShortSubjectLine->getValue();
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
     * @return VoiceMessagingMaxMessageLengthMinutes
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
     * @return VoiceMessagingMailboxLengthMinutes
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
     * @return xs:boolean
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
     * @return VoiceMessagingHoldPeriodDays
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
     * @return NetAddress
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
     * @return VoiceMessagingMailServerProtocol
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
     * @return EmailAddress
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
     * @return EmailAddress
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
     * @return EmailAddress
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
     * @return xs:boolean
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
     * @return VoiceMessagingMessageWaitingIndicatorDelayInSeconds
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
     * @return SystemVoicePortalScope
     */
    public function getVoicePortalScope()
    {
        return $this->voicePortalScope->getValue();
    }

    /**
     * 
     */
    public function setEnterpriseVoicePortalLicensed($enterpriseVoicePortalLicensed = null)
    {
        if (!$enterpriseVoicePortalLicensed) return $this;
        $this->enterpriseVoicePortalLicensed = new PrimitiveType($enterpriseVoicePortalLicensed);
        $this->enterpriseVoicePortalLicensed->setName('enterpriseVoicePortalLicensed');
        return $this;
    }

    /**
     * 
     * @return xs:boolean
     */
    public function getEnterpriseVoicePortalLicensed()
    {
        return $this->enterpriseVoicePortalLicensed->getValue();
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
     * @return xs:boolean
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
     * @return xs:boolean
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
     * @return OutgoingDNorSIPURI
     */
    public function getDefaultExternalRoutingAddress()
    {
        return $this->defaultExternalRoutingAddress->getValue();
    }

    /**
     * 
     */
    public function setVmOnlySystem($vmOnlySystem = null)
    {
        if (!$vmOnlySystem) return $this;
        $this->vmOnlySystem = new PrimitiveType($vmOnlySystem);
        $this->vmOnlySystem->setName('vmOnlySystem');
        return $this;
    }

    /**
     * 
     * @return xs:boolean
     */
    public function getVmOnlySystem()
    {
        return $this->vmOnlySystem->getValue();
    }
}
