<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem\UnscreenedPresentationIdentityPolicy;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\CPEDeviceModifyOptions16sp1;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\AccessDeviceResetEvent;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\AuthenticationMode;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem\EarlyMediaSupportType;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\WebBasedConfigURL;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\AccessDeviceType;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem\TrunkMode;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Request to modify a sip device type.
 *         The following elements are not changeable:
 *           numberOfPorts
 *           SignalingAddressType
 *           isConferenceDevice
 *           isMusicOnHoldDevice
 *           isMobilityManagerDevice
 *         The response is either SuccessResponse or ErrorResponse.
 */
class SystemSIPDeviceTypeModifyRequest17 extends ComplexType implements ComplexInterface
{
    public    $name                                  = __CLASS__;
    protected $deviceType                            = null;
    protected $isObsolete                            = null;
    protected $registrationCapable                   = null;
    protected $RFC3264Hold                           = null;
    protected $isTrusted                             = null;
    protected $E164Capable                           = null;
    protected $routeAdvance                          = null;
    protected $forwardingOverride                    = null;
    protected $wirelessIntegration                   = null;
    protected $webBasedConfigURL                     = null;
    protected $isVideoCapable                        = null;
    protected $PBXIntegration                        = null;
    protected $staticRegistrationCapable             = null;
    protected $cpeDeviceOptions                      = null;
    protected $earlyMediaSupport                     = null;
    protected $authenticateRefer                     = null;
    protected $autoConfigSoftClient                  = null;
    protected $authenticationMode                    = null;
    protected $requiresBroadWorksDigitCollection     = null;
    protected $requiresBroadWorksCallWaitingTone     = null;
    protected $requiresMWISubscription               = null;
    protected $useHistoryInfoHeaderOnAccessSide      = null;
    protected $adviceOfChargeCapable                 = null;
    protected $resetEvent                            = null;
    protected $supportCallCenterMIMEType             = null;
    protected $trunkMode                             = null;
    protected $addPCalledPartyId                     = null;
    protected $supportIdentityInUpdateAndReInvite    = null;
    protected $unscreenedPresentationIdentityPolicy  = null;

    public function __construct(
         $deviceType,
         $isObsolete = null,
         $registrationCapable = null,
         $RFC3264Hold = null,
         $isTrusted = null,
         $E164Capable = null,
         $routeAdvance = null,
         $forwardingOverride = null,
         $wirelessIntegration = null,
         $webBasedConfigURL = null,
         $isVideoCapable = null,
         $PBXIntegration = null,
         $staticRegistrationCapable = null,
         CPEDeviceModifyOptions16sp1 $cpeDeviceOptions = null,
         $earlyMediaSupport = null,
         $authenticateRefer = null,
         $autoConfigSoftClient = null,
         $authenticationMode = null,
         $requiresBroadWorksDigitCollection = null,
         $requiresBroadWorksCallWaitingTone = null,
         $requiresMWISubscription = null,
         $useHistoryInfoHeaderOnAccessSide = null,
         $adviceOfChargeCapable = null,
         $resetEvent = null,
         $supportCallCenterMIMEType = null,
         $trunkMode = null,
         $addPCalledPartyId = null,
         $supportIdentityInUpdateAndReInvite = null,
         $unscreenedPresentationIdentityPolicy = null
    ) {
        $this->setDeviceType($deviceType);
        $this->setIsObsolete($isObsolete);
        $this->setRegistrationCapable($registrationCapable);
        $this->setRFC3264Hold($RFC3264Hold);
        $this->setIsTrusted($isTrusted);
        $this->setE164Capable($E164Capable);
        $this->setRouteAdvance($routeAdvance);
        $this->setForwardingOverride($forwardingOverride);
        $this->setWirelessIntegration($wirelessIntegration);
        $this->setWebBasedConfigURL($webBasedConfigURL);
        $this->setIsVideoCapable($isVideoCapable);
        $this->setPBXIntegration($PBXIntegration);
        $this->setStaticRegistrationCapable($staticRegistrationCapable);
        $this->setCpeDeviceOptions($cpeDeviceOptions);
        $this->setEarlyMediaSupport($earlyMediaSupport);
        $this->setAuthenticateRefer($authenticateRefer);
        $this->setAutoConfigSoftClient($autoConfigSoftClient);
        $this->setAuthenticationMode($authenticationMode);
        $this->setRequiresBroadWorksDigitCollection($requiresBroadWorksDigitCollection);
        $this->setRequiresBroadWorksCallWaitingTone($requiresBroadWorksCallWaitingTone);
        $this->setRequiresMWISubscription($requiresMWISubscription);
        $this->setUseHistoryInfoHeaderOnAccessSide($useHistoryInfoHeaderOnAccessSide);
        $this->setAdviceOfChargeCapable($adviceOfChargeCapable);
        $this->setResetEvent($resetEvent);
        $this->setSupportCallCenterMIMEType($supportCallCenterMIMEType);
        $this->setTrunkMode($trunkMode);
        $this->setAddPCalledPartyId($addPCalledPartyId);
        $this->setSupportIdentityInUpdateAndReInvite($supportIdentityInUpdateAndReInvite);
        $this->setUnscreenedPresentationIdentityPolicy($unscreenedPresentationIdentityPolicy);
    }

    public function setDeviceType($deviceType = null)
    {
        $this->deviceType = ($deviceType InstanceOf AccessDeviceType)
             ? $deviceType
             : new AccessDeviceType($deviceType);
    }

    public function getDeviceType()
    {
        return (!$this->deviceType) ?: $this->deviceType->value();
    }

    public function setIsObsolete(xs:boolean $isObsolete = null)
    {
    }

    public function getIsObsolete()
    {
        return (!$this->isObsolete) ?: $this->isObsolete->value();
    }

    public function setRegistrationCapable(xs:boolean $registrationCapable = null)
    {
    }

    public function getRegistrationCapable()
    {
        return (!$this->registrationCapable) ?: $this->registrationCapable->value();
    }

    public function setRFC3264Hold(xs:boolean $RFC3264Hold = null)
    {
    }

    public function getRFC3264Hold()
    {
        return (!$this->RFC3264Hold) ?: $this->RFC3264Hold->value();
    }

    public function setIsTrusted(xs:boolean $isTrusted = null)
    {
    }

    public function getIsTrusted()
    {
        return (!$this->isTrusted) ?: $this->isTrusted->value();
    }

    public function setE164Capable(xs:boolean $E164Capable = null)
    {
    }

    public function getE164Capable()
    {
        return (!$this->E164Capable) ?: $this->E164Capable->value();
    }

    public function setRouteAdvance(xs:boolean $routeAdvance = null)
    {
    }

    public function getRouteAdvance()
    {
        return (!$this->routeAdvance) ?: $this->routeAdvance->value();
    }

    public function setForwardingOverride(xs:boolean $forwardingOverride = null)
    {
    }

    public function getForwardingOverride()
    {
        return (!$this->forwardingOverride) ?: $this->forwardingOverride->value();
    }

    public function setWirelessIntegration(xs:boolean $wirelessIntegration = null)
    {
    }

    public function getWirelessIntegration()
    {
        return (!$this->wirelessIntegration) ?: $this->wirelessIntegration->value();
    }

    public function setWebBasedConfigURL($webBasedConfigURL = null)
    {
        $this->webBasedConfigURL = ($webBasedConfigURL InstanceOf WebBasedConfigURL)
             ? $webBasedConfigURL
             : new WebBasedConfigURL($webBasedConfigURL);
    }

    public function getWebBasedConfigURL()
    {
        return (!$this->webBasedConfigURL) ?: $this->webBasedConfigURL->value();
    }

    public function setIsVideoCapable(xs:boolean $isVideoCapable = null)
    {
    }

    public function getIsVideoCapable()
    {
        return (!$this->isVideoCapable) ?: $this->isVideoCapable->value();
    }

    public function setPBXIntegration(xs:boolean $PBXIntegration = null)
    {
    }

    public function getPBXIntegration()
    {
        return (!$this->PBXIntegration) ?: $this->PBXIntegration->value();
    }

    public function setStaticRegistrationCapable(xs:boolean $staticRegistrationCapable = null)
    {
    }

    public function getStaticRegistrationCapable()
    {
        return (!$this->staticRegistrationCapable) ?: $this->staticRegistrationCapable->value();
    }

    public function setCpeDeviceOptions(CPEDeviceModifyOptions16sp1 $cpeDeviceOptions = null)
    {
    }

    public function getCpeDeviceOptions()
    {
        return (!$this->cpeDeviceOptions) ?: $this->cpeDeviceOptions->value();
    }

    public function setEarlyMediaSupport($earlyMediaSupport = null)
    {
        $this->earlyMediaSupport = ($earlyMediaSupport InstanceOf EarlyMediaSupportType)
             ? $earlyMediaSupport
             : new EarlyMediaSupportType($earlyMediaSupport);
    }

    public function getEarlyMediaSupport()
    {
        return (!$this->earlyMediaSupport) ?: $this->earlyMediaSupport->value();
    }

    public function setAuthenticateRefer(xs:boolean $authenticateRefer = null)
    {
    }

    public function getAuthenticateRefer()
    {
        return (!$this->authenticateRefer) ?: $this->authenticateRefer->value();
    }

    public function setAutoConfigSoftClient(xs:boolean $autoConfigSoftClient = null)
    {
    }

    public function getAutoConfigSoftClient()
    {
        return (!$this->autoConfigSoftClient) ?: $this->autoConfigSoftClient->value();
    }

    public function setAuthenticationMode($authenticationMode = null)
    {
        $this->authenticationMode = ($authenticationMode InstanceOf AuthenticationMode)
             ? $authenticationMode
             : new AuthenticationMode($authenticationMode);
    }

    public function getAuthenticationMode()
    {
        return (!$this->authenticationMode) ?: $this->authenticationMode->value();
    }

    public function setRequiresBroadWorksDigitCollection(xs:boolean $requiresBroadWorksDigitCollection = null)
    {
    }

    public function getRequiresBroadWorksDigitCollection()
    {
        return (!$this->requiresBroadWorksDigitCollection) ?: $this->requiresBroadWorksDigitCollection->value();
    }

    public function setRequiresBroadWorksCallWaitingTone(xs:boolean $requiresBroadWorksCallWaitingTone = null)
    {
    }

    public function getRequiresBroadWorksCallWaitingTone()
    {
        return (!$this->requiresBroadWorksCallWaitingTone) ?: $this->requiresBroadWorksCallWaitingTone->value();
    }

    public function setRequiresMWISubscription(xs:boolean $requiresMWISubscription = null)
    {
    }

    public function getRequiresMWISubscription()
    {
        return (!$this->requiresMWISubscription) ?: $this->requiresMWISubscription->value();
    }

    public function setUseHistoryInfoHeaderOnAccessSide(xs:boolean $useHistoryInfoHeaderOnAccessSide = null)
    {
    }

    public function getUseHistoryInfoHeaderOnAccessSide()
    {
        return (!$this->useHistoryInfoHeaderOnAccessSide) ?: $this->useHistoryInfoHeaderOnAccessSide->value();
    }

    public function setAdviceOfChargeCapable(xs:boolean $adviceOfChargeCapable = null)
    {
    }

    public function getAdviceOfChargeCapable()
    {
        return (!$this->adviceOfChargeCapable) ?: $this->adviceOfChargeCapable->value();
    }

    public function setResetEvent($resetEvent = null)
    {
        $this->resetEvent = ($resetEvent InstanceOf AccessDeviceResetEvent)
             ? $resetEvent
             : new AccessDeviceResetEvent($resetEvent);
    }

    public function getResetEvent()
    {
        return (!$this->resetEvent) ?: $this->resetEvent->value();
    }

    public function setSupportCallCenterMIMEType(xs:boolean $supportCallCenterMIMEType = null)
    {
    }

    public function getSupportCallCenterMIMEType()
    {
        return (!$this->supportCallCenterMIMEType) ?: $this->supportCallCenterMIMEType->value();
    }

    public function setTrunkMode($trunkMode = null)
    {
        $this->trunkMode = ($trunkMode InstanceOf TrunkMode)
             ? $trunkMode
             : new TrunkMode($trunkMode);
    }

    public function getTrunkMode()
    {
        return (!$this->trunkMode) ?: $this->trunkMode->value();
    }

    public function setAddPCalledPartyId(xs:boolean $addPCalledPartyId = null)
    {
    }

    public function getAddPCalledPartyId()
    {
        return (!$this->addPCalledPartyId) ?: $this->addPCalledPartyId->value();
    }

    public function setSupportIdentityInUpdateAndReInvite(xs:boolean $supportIdentityInUpdateAndReInvite = null)
    {
    }

    public function getSupportIdentityInUpdateAndReInvite()
    {
        return (!$this->supportIdentityInUpdateAndReInvite) ?: $this->supportIdentityInUpdateAndReInvite->value();
    }

    public function setUnscreenedPresentationIdentityPolicy($unscreenedPresentationIdentityPolicy = null)
    {
        $this->unscreenedPresentationIdentityPolicy = ($unscreenedPresentationIdentityPolicy InstanceOf UnscreenedPresentationIdentityPolicy)
             ? $unscreenedPresentationIdentityPolicy
             : new UnscreenedPresentationIdentityPolicy($unscreenedPresentationIdentityPolicy);
    }

    public function getUnscreenedPresentationIdentityPolicy()
    {
        return (!$this->unscreenedPresentationIdentityPolicy) ?: $this->unscreenedPresentationIdentityPolicy->value();
    }
}
