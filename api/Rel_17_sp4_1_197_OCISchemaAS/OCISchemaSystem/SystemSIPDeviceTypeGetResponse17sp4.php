<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\xs:boolean;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\UnboundedPositiveInt;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\SignalingAddressType;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\WebBasedConfigURL;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\CPEDeviceOptionsRead16sp1;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\AccessDeviceProtocol;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\EarlyMediaSupportType;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\AuthenticationMode;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\AccessDeviceResetEvent;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\TrunkMode;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\UnscreenedPresentationIdentityPolicy;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Response to SystemSIPDeviceTypeGetRequest17sp4.
 */
class SystemSIPDeviceTypeGetResponse17sp4 extends ComplexType implements ComplexInterface
{
    public    $name = __CLASS__;

    public function __construct(
             $isObsolete,
             UnboundedPositiveInt $numberOfPorts,
             $profile,
             $registrationCapable,
             $isConferenceDevice,
             $isMobilityManagerDevice,
             $isMusicOnHoldDevice,
             $RFC3264Hold,
             $isTrusted,
             $E164Capable,
             $routeAdvance,
             $forwardingOverride,
             $wirelessIntegration,
             $webBasedConfigURL=null,
             $isVideoCapable,
             $PBXIntegration,
             $staticRegistrationCapable,
             CPEDeviceOptionsRead16sp1 $cpeDeviceOptions=null,
             $protocolChoice,
             $earlyMediaSupport,
             $authenticateRefer,
             $autoConfigSoftClient,
             $authenticationMode,
             $requiresBroadWorksDigitCollection,
             $requiresBroadWorksCallWaitingTone,
             $requiresMWISubscription,
             $useHistoryInfoHeaderOnAccessSide,
             $adviceOfChargeCapable,
             $resetEvent=null,
             $supportCallCenterMIMEType,
             $trunkMode,
             $addPCalledPartyId,
             $supportIdentityInUpdateAndReInvite,
             $unscreenedPresentationIdentityPolicy
    ) {
        $this->isObsolete                           = $isObsolete;
        $this->numberOfPorts                        = $numberOfPorts;
        $this->profile                              = new SignalingAddressType($profile);
        $this->registrationCapable                  = $registrationCapable;
        $this->isConferenceDevice                   = $isConferenceDevice;
        $this->isMobilityManagerDevice              = $isMobilityManagerDevice;
        $this->isMusicOnHoldDevice                  = $isMusicOnHoldDevice;
        $this->RFC3264Hold                          = $RFC3264Hold;
        $this->isTrusted                            = $isTrusted;
        $this->E164Capable                          = $E164Capable;
        $this->routeAdvance                         = $routeAdvance;
        $this->forwardingOverride                   = $forwardingOverride;
        $this->wirelessIntegration                  = $wirelessIntegration;
        $this->webBasedConfigURL                    = new WebBasedConfigURL($webBasedConfigURL);
        $this->isVideoCapable                       = $isVideoCapable;
        $this->PBXIntegration                       = $PBXIntegration;
        $this->staticRegistrationCapable            = $staticRegistrationCapable;
        $this->cpeDeviceOptions                     = $cpeDeviceOptions;
        $this->protocolChoice                       = new AccessDeviceProtocol($protocolChoice);
        $this->earlyMediaSupport                    = $earlyMediaSupport;
        $this->authenticateRefer                    = $authenticateRefer;
        $this->autoConfigSoftClient                 = $autoConfigSoftClient;
        $this->authenticationMode                   = new AuthenticationMode($authenticationMode);
        $this->requiresBroadWorksDigitCollection    = $requiresBroadWorksDigitCollection;
        $this->requiresBroadWorksCallWaitingTone    = $requiresBroadWorksCallWaitingTone;
        $this->requiresMWISubscription              = $requiresMWISubscription;
        $this->useHistoryInfoHeaderOnAccessSide     = $useHistoryInfoHeaderOnAccessSide;
        $this->adviceOfChargeCapable                = $adviceOfChargeCapable;
        $this->resetEvent                           = new AccessDeviceResetEvent($resetEvent);
        $this->supportCallCenterMIMEType            = $supportCallCenterMIMEType;
        $this->trunkMode                            = $trunkMode;
        $this->addPCalledPartyId                    = $addPCalledPartyId;
        $this->supportIdentityInUpdateAndReInvite   = $supportIdentityInUpdateAndReInvite;
        $this->unscreenedPresentationIdentityPolicy = $unscreenedPresentationIdentityPolicy;
        $this->args                                 = func_get_args();
    }

    public function setIsObsolete($isObsolete)
    {
        $isObsolete and $this->isObsolete = new xs:boolean($isObsolete);
    }

    public function getIsObsolete()
    {
        return (!$this->isObsolete) ?: $this->isObsolete->value();
    }

    public function setNumberOfPorts($numberOfPorts)
    {
        $numberOfPorts and $this->numberOfPorts = new UnboundedPositiveInt($numberOfPorts);
    }

    public function getNumberOfPorts()
    {
        return (!$this->numberOfPorts) ?: $this->numberOfPorts->value();
    }

    public function setProfile($profile)
    {
        $profile and $this->profile = new SignalingAddressType($profile);
    }

    public function getProfile()
    {
        return (!$this->profile) ?: $this->profile->value();
    }

    public function setRegistrationCapable($registrationCapable)
    {
        $registrationCapable and $this->registrationCapable = new xs:boolean($registrationCapable);
    }

    public function getRegistrationCapable()
    {
        return (!$this->registrationCapable) ?: $this->registrationCapable->value();
    }

    public function setIsConferenceDevice($isConferenceDevice)
    {
        $isConferenceDevice and $this->isConferenceDevice = new xs:boolean($isConferenceDevice);
    }

    public function getIsConferenceDevice()
    {
        return (!$this->isConferenceDevice) ?: $this->isConferenceDevice->value();
    }

    public function setIsMobilityManagerDevice($isMobilityManagerDevice)
    {
        $isMobilityManagerDevice and $this->isMobilityManagerDevice = new xs:boolean($isMobilityManagerDevice);
    }

    public function getIsMobilityManagerDevice()
    {
        return (!$this->isMobilityManagerDevice) ?: $this->isMobilityManagerDevice->value();
    }

    public function setIsMusicOnHoldDevice($isMusicOnHoldDevice)
    {
        $isMusicOnHoldDevice and $this->isMusicOnHoldDevice = new xs:boolean($isMusicOnHoldDevice);
    }

    public function getIsMusicOnHoldDevice()
    {
        return (!$this->isMusicOnHoldDevice) ?: $this->isMusicOnHoldDevice->value();
    }

    public function setRFC3264Hold($RFC3264Hold)
    {
        $RFC3264Hold and $this->RFC3264Hold = new xs:boolean($RFC3264Hold);
    }

    public function getRFC3264Hold()
    {
        return (!$this->RFC3264Hold) ?: $this->RFC3264Hold->value();
    }

    public function setIsTrusted($isTrusted)
    {
        $isTrusted and $this->isTrusted = new xs:boolean($isTrusted);
    }

    public function getIsTrusted()
    {
        return (!$this->isTrusted) ?: $this->isTrusted->value();
    }

    public function setE164Capable($E164Capable)
    {
        $E164Capable and $this->E164Capable = new xs:boolean($E164Capable);
    }

    public function getE164Capable()
    {
        return (!$this->E164Capable) ?: $this->E164Capable->value();
    }

    public function setRouteAdvance($routeAdvance)
    {
        $routeAdvance and $this->routeAdvance = new xs:boolean($routeAdvance);
    }

    public function getRouteAdvance()
    {
        return (!$this->routeAdvance) ?: $this->routeAdvance->value();
    }

    public function setForwardingOverride($forwardingOverride)
    {
        $forwardingOverride and $this->forwardingOverride = new xs:boolean($forwardingOverride);
    }

    public function getForwardingOverride()
    {
        return (!$this->forwardingOverride) ?: $this->forwardingOverride->value();
    }

    public function setWirelessIntegration($wirelessIntegration)
    {
        $wirelessIntegration and $this->wirelessIntegration = new xs:boolean($wirelessIntegration);
    }

    public function getWirelessIntegration()
    {
        return (!$this->wirelessIntegration) ?: $this->wirelessIntegration->value();
    }

    public function setWebBasedConfigURL($webBasedConfigURL)
    {
        $webBasedConfigURL and $this->webBasedConfigURL = new WebBasedConfigURL($webBasedConfigURL);
    }

    public function getWebBasedConfigURL()
    {
        return (!$this->webBasedConfigURL) ?: $this->webBasedConfigURL->value();
    }

    public function setIsVideoCapable($isVideoCapable)
    {
        $isVideoCapable and $this->isVideoCapable = new xs:boolean($isVideoCapable);
    }

    public function getIsVideoCapable()
    {
        return (!$this->isVideoCapable) ?: $this->isVideoCapable->value();
    }

    public function setPBXIntegration($PBXIntegration)
    {
        $PBXIntegration and $this->PBXIntegration = new xs:boolean($PBXIntegration);
    }

    public function getPBXIntegration()
    {
        return (!$this->PBXIntegration) ?: $this->PBXIntegration->value();
    }

    public function setStaticRegistrationCapable($staticRegistrationCapable)
    {
        $staticRegistrationCapable and $this->staticRegistrationCapable = new xs:boolean($staticRegistrationCapable);
    }

    public function getStaticRegistrationCapable()
    {
        return (!$this->staticRegistrationCapable) ?: $this->staticRegistrationCapable->value();
    }

    public function setCpeDeviceOptions($cpeDeviceOptions)
    {
        $cpeDeviceOptions and $this->cpeDeviceOptions = new CPEDeviceOptionsRead16sp1($cpeDeviceOptions);
    }

    public function getCpeDeviceOptions()
    {
        return (!$this->cpeDeviceOptions) ?: $this->cpeDeviceOptions->value();
    }

    public function setProtocolChoice($protocolChoice)
    {
        $protocolChoice and $this->protocolChoice = new AccessDeviceProtocol($protocolChoice);
    }

    public function getProtocolChoice()
    {
        return (!$this->protocolChoice) ?: $this->protocolChoice->value();
    }

    public function setEarlyMediaSupport($earlyMediaSupport)
    {
        $earlyMediaSupport and $this->earlyMediaSupport = new EarlyMediaSupportType($earlyMediaSupport);
    }

    public function getEarlyMediaSupport()
    {
        return (!$this->earlyMediaSupport) ?: $this->earlyMediaSupport->value();
    }

    public function setAuthenticateRefer($authenticateRefer)
    {
        $authenticateRefer and $this->authenticateRefer = new xs:boolean($authenticateRefer);
    }

    public function getAuthenticateRefer()
    {
        return (!$this->authenticateRefer) ?: $this->authenticateRefer->value();
    }

    public function setAutoConfigSoftClient($autoConfigSoftClient)
    {
        $autoConfigSoftClient and $this->autoConfigSoftClient = new xs:boolean($autoConfigSoftClient);
    }

    public function getAutoConfigSoftClient()
    {
        return (!$this->autoConfigSoftClient) ?: $this->autoConfigSoftClient->value();
    }

    public function setAuthenticationMode($authenticationMode)
    {
        $authenticationMode and $this->authenticationMode = new AuthenticationMode($authenticationMode);
    }

    public function getAuthenticationMode()
    {
        return (!$this->authenticationMode) ?: $this->authenticationMode->value();
    }

    public function setRequiresBroadWorksDigitCollection($requiresBroadWorksDigitCollection)
    {
        $requiresBroadWorksDigitCollection and $this->requiresBroadWorksDigitCollection = new xs:boolean($requiresBroadWorksDigitCollection);
    }

    public function getRequiresBroadWorksDigitCollection()
    {
        return (!$this->requiresBroadWorksDigitCollection) ?: $this->requiresBroadWorksDigitCollection->value();
    }

    public function setRequiresBroadWorksCallWaitingTone($requiresBroadWorksCallWaitingTone)
    {
        $requiresBroadWorksCallWaitingTone and $this->requiresBroadWorksCallWaitingTone = new xs:boolean($requiresBroadWorksCallWaitingTone);
    }

    public function getRequiresBroadWorksCallWaitingTone()
    {
        return (!$this->requiresBroadWorksCallWaitingTone) ?: $this->requiresBroadWorksCallWaitingTone->value();
    }

    public function setRequiresMWISubscription($requiresMWISubscription)
    {
        $requiresMWISubscription and $this->requiresMWISubscription = new xs:boolean($requiresMWISubscription);
    }

    public function getRequiresMWISubscription()
    {
        return (!$this->requiresMWISubscription) ?: $this->requiresMWISubscription->value();
    }

    public function setUseHistoryInfoHeaderOnAccessSide($useHistoryInfoHeaderOnAccessSide)
    {
        $useHistoryInfoHeaderOnAccessSide and $this->useHistoryInfoHeaderOnAccessSide = new xs:boolean($useHistoryInfoHeaderOnAccessSide);
    }

    public function getUseHistoryInfoHeaderOnAccessSide()
    {
        return (!$this->useHistoryInfoHeaderOnAccessSide) ?: $this->useHistoryInfoHeaderOnAccessSide->value();
    }

    public function setAdviceOfChargeCapable($adviceOfChargeCapable)
    {
        $adviceOfChargeCapable and $this->adviceOfChargeCapable = new xs:boolean($adviceOfChargeCapable);
    }

    public function getAdviceOfChargeCapable()
    {
        return (!$this->adviceOfChargeCapable) ?: $this->adviceOfChargeCapable->value();
    }

    public function setResetEvent($resetEvent)
    {
        $resetEvent and $this->resetEvent = new AccessDeviceResetEvent($resetEvent);
    }

    public function getResetEvent()
    {
        return (!$this->resetEvent) ?: $this->resetEvent->value();
    }

    public function setSupportCallCenterMIMEType($supportCallCenterMIMEType)
    {
        $supportCallCenterMIMEType and $this->supportCallCenterMIMEType = new xs:boolean($supportCallCenterMIMEType);
    }

    public function getSupportCallCenterMIMEType()
    {
        return (!$this->supportCallCenterMIMEType) ?: $this->supportCallCenterMIMEType->value();
    }

    public function setTrunkMode($trunkMode)
    {
        $trunkMode and $this->trunkMode = new TrunkMode($trunkMode);
    }

    public function getTrunkMode()
    {
        return (!$this->trunkMode) ?: $this->trunkMode->value();
    }

    public function setAddPCalledPartyId($addPCalledPartyId)
    {
        $addPCalledPartyId and $this->addPCalledPartyId = new xs:boolean($addPCalledPartyId);
    }

    public function getAddPCalledPartyId()
    {
        return (!$this->addPCalledPartyId) ?: $this->addPCalledPartyId->value();
    }

    public function setSupportIdentityInUpdateAndReInvite($supportIdentityInUpdateAndReInvite)
    {
        $supportIdentityInUpdateAndReInvite and $this->supportIdentityInUpdateAndReInvite = new xs:boolean($supportIdentityInUpdateAndReInvite);
    }

    public function getSupportIdentityInUpdateAndReInvite()
    {
        return (!$this->supportIdentityInUpdateAndReInvite) ?: $this->supportIdentityInUpdateAndReInvite->value();
    }

    public function setUnscreenedPresentationIdentityPolicy($unscreenedPresentationIdentityPolicy)
    {
        $unscreenedPresentationIdentityPolicy and $this->unscreenedPresentationIdentityPolicy = new UnscreenedPresentationIdentityPolicy($unscreenedPresentationIdentityPolicy);
    }

    public function getUnscreenedPresentationIdentityPolicy()
    {
        return (!$this->unscreenedPresentationIdentityPolicy) ?: $this->unscreenedPresentationIdentityPolicy->value();
    }
}
