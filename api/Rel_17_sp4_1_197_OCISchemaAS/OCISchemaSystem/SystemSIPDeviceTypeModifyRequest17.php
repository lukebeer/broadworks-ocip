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
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem\TrunkMode;
use Broadworks_OCIP\core\Builder\Types\PrimitiveType;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


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
    public    $name                                 = 'SystemSIPDeviceTypeModifyRequest17';
    protected $deviceType                           = null;
    protected $isObsolete                           = null;
    protected $registrationCapable                  = null;
    protected $RFC3264Hold                          = null;
    protected $isTrusted                            = null;
    protected $E164Capable                          = null;
    protected $routeAdvance                         = null;
    protected $forwardingOverride                   = null;
    protected $wirelessIntegration                  = null;
    protected $webBasedConfigURL                    = null;
    protected $isVideoCapable                       = null;
    protected $PBXIntegration                       = null;
    protected $staticRegistrationCapable            = null;
    protected $cpeDeviceOptions                     = null;
    protected $earlyMediaSupport                    = null;
    protected $authenticateRefer                    = null;
    protected $autoConfigSoftClient                 = null;
    protected $authenticationMode                   = null;
    protected $requiresBroadWorksDigitCollection    = null;
    protected $requiresBroadWorksCallWaitingTone    = null;
    protected $requiresMWISubscription              = null;
    protected $useHistoryInfoHeaderOnAccessSide     = null;
    protected $adviceOfChargeCapable                = null;
    protected $resetEvent                           = null;
    protected $supportCallCenterMIMEType            = null;
    protected $trunkMode                            = null;
    protected $addPCalledPartyId                    = null;
    protected $supportIdentityInUpdateAndReInvite   = null;
    protected $unscreenedPresentationIdentityPolicy = null;

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
    public function setDeviceType($deviceType = null)
    {
        if (!$deviceType) return $this;
        $this->deviceType = ($deviceType InstanceOf AccessDeviceType)
             ? $deviceType
             : new AccessDeviceType($deviceType);
        $this->deviceType->setName('deviceType');
        return $this;
    }

    /**
     * 
     * @return AccessDeviceType $deviceType
     */
    public function getDeviceType()
    {
        return $this->deviceType->getValue();
    }

    /**
     * 
     */
    public function setIsObsolete($isObsolete = null)
    {
        if (!$isObsolete) return $this;
        $this->isObsolete = new PrimitiveType($isObsolete);
        $this->isObsolete->setName('isObsolete');
        return $this;
    }

    /**
     * 
     * @return boolean $isObsolete
     */
    public function getIsObsolete()
    {
        return $this->isObsolete->getValue();
    }

    /**
     * 
     */
    public function setRegistrationCapable($registrationCapable = null)
    {
        if (!$registrationCapable) return $this;
        $this->registrationCapable = new PrimitiveType($registrationCapable);
        $this->registrationCapable->setName('registrationCapable');
        return $this;
    }

    /**
     * 
     * @return boolean $registrationCapable
     */
    public function getRegistrationCapable()
    {
        return $this->registrationCapable->getValue();
    }

    /**
     * 
     */
    public function setRFC3264Hold($RFC3264Hold = null)
    {
        if (!$RFC3264Hold) return $this;
        $this->RFC3264Hold = new PrimitiveType($RFC3264Hold);
        $this->RFC3264Hold->setName('RFC3264Hold');
        return $this;
    }

    /**
     * 
     * @return boolean $RFC3264Hold
     */
    public function getRFC3264Hold()
    {
        return $this->RFC3264Hold->getValue();
    }

    /**
     * 
     */
    public function setIsTrusted($isTrusted = null)
    {
        if (!$isTrusted) return $this;
        $this->isTrusted = new PrimitiveType($isTrusted);
        $this->isTrusted->setName('isTrusted');
        return $this;
    }

    /**
     * 
     * @return boolean $isTrusted
     */
    public function getIsTrusted()
    {
        return $this->isTrusted->getValue();
    }

    /**
     * 
     */
    public function setE164Capable($E164Capable = null)
    {
        if (!$E164Capable) return $this;
        $this->E164Capable = new PrimitiveType($E164Capable);
        $this->E164Capable->setName('E164Capable');
        return $this;
    }

    /**
     * 
     * @return boolean $E164Capable
     */
    public function getE164Capable()
    {
        return $this->E164Capable->getValue();
    }

    /**
     * 
     */
    public function setRouteAdvance($routeAdvance = null)
    {
        if (!$routeAdvance) return $this;
        $this->routeAdvance = new PrimitiveType($routeAdvance);
        $this->routeAdvance->setName('routeAdvance');
        return $this;
    }

    /**
     * 
     * @return boolean $routeAdvance
     */
    public function getRouteAdvance()
    {
        return $this->routeAdvance->getValue();
    }

    /**
     * 
     */
    public function setForwardingOverride($forwardingOverride = null)
    {
        if (!$forwardingOverride) return $this;
        $this->forwardingOverride = new PrimitiveType($forwardingOverride);
        $this->forwardingOverride->setName('forwardingOverride');
        return $this;
    }

    /**
     * 
     * @return boolean $forwardingOverride
     */
    public function getForwardingOverride()
    {
        return $this->forwardingOverride->getValue();
    }

    /**
     * 
     */
    public function setWirelessIntegration($wirelessIntegration = null)
    {
        if (!$wirelessIntegration) return $this;
        $this->wirelessIntegration = new PrimitiveType($wirelessIntegration);
        $this->wirelessIntegration->setName('wirelessIntegration');
        return $this;
    }

    /**
     * 
     * @return boolean $wirelessIntegration
     */
    public function getWirelessIntegration()
    {
        return $this->wirelessIntegration->getValue();
    }

    /**
     * 
     */
    public function setWebBasedConfigURL($webBasedConfigURL = null)
    {
        if (!$webBasedConfigURL) return $this;
        $this->webBasedConfigURL = ($webBasedConfigURL InstanceOf WebBasedConfigURL)
             ? $webBasedConfigURL
             : new WebBasedConfigURL($webBasedConfigURL);
        $this->webBasedConfigURL->setName('webBasedConfigURL');
        return $this;
    }

    /**
     * 
     * @return WebBasedConfigURL $webBasedConfigURL
     */
    public function getWebBasedConfigURL()
    {
        return $this->webBasedConfigURL->getValue();
    }

    /**
     * 
     */
    public function setIsVideoCapable($isVideoCapable = null)
    {
        if (!$isVideoCapable) return $this;
        $this->isVideoCapable = new PrimitiveType($isVideoCapable);
        $this->isVideoCapable->setName('isVideoCapable');
        return $this;
    }

    /**
     * 
     * @return boolean $isVideoCapable
     */
    public function getIsVideoCapable()
    {
        return $this->isVideoCapable->getValue();
    }

    /**
     * 
     */
    public function setPBXIntegration($PBXIntegration = null)
    {
        if (!$PBXIntegration) return $this;
        $this->PBXIntegration = new PrimitiveType($PBXIntegration);
        $this->PBXIntegration->setName('PBXIntegration');
        return $this;
    }

    /**
     * 
     * @return boolean $PBXIntegration
     */
    public function getPBXIntegration()
    {
        return $this->PBXIntegration->getValue();
    }

    /**
     * 
     */
    public function setStaticRegistrationCapable($staticRegistrationCapable = null)
    {
        if (!$staticRegistrationCapable) return $this;
        $this->staticRegistrationCapable = new PrimitiveType($staticRegistrationCapable);
        $this->staticRegistrationCapable->setName('staticRegistrationCapable');
        return $this;
    }

    /**
     * 
     * @return boolean $staticRegistrationCapable
     */
    public function getStaticRegistrationCapable()
    {
        return $this->staticRegistrationCapable->getValue();
    }

    /**
     * 
     */
    public function setCpeDeviceOptions(CPEDeviceModifyOptions16sp1 $cpeDeviceOptions = null)
    {
        if (!$cpeDeviceOptions) return $this;
        $this->cpeDeviceOptions = $cpeDeviceOptions;
        $this->cpeDeviceOptions->setName('cpeDeviceOptions');
        return $this;
    }

    /**
     * 
     * @return CPEDeviceModifyOptions16sp1 $cpeDeviceOptions
     */
    public function getCpeDeviceOptions()
    {
        return $this->cpeDeviceOptions;
    }

    /**
     * 
     */
    public function setEarlyMediaSupport($earlyMediaSupport = null)
    {
        if (!$earlyMediaSupport) return $this;
        $this->earlyMediaSupport = ($earlyMediaSupport InstanceOf EarlyMediaSupportType)
             ? $earlyMediaSupport
             : new EarlyMediaSupportType($earlyMediaSupport);
        $this->earlyMediaSupport->setName('earlyMediaSupport');
        return $this;
    }

    /**
     * 
     * @return EarlyMediaSupportType $earlyMediaSupport
     */
    public function getEarlyMediaSupport()
    {
        return $this->earlyMediaSupport->getValue();
    }

    /**
     * 
     */
    public function setAuthenticateRefer($authenticateRefer = null)
    {
        if (!$authenticateRefer) return $this;
        $this->authenticateRefer = new PrimitiveType($authenticateRefer);
        $this->authenticateRefer->setName('authenticateRefer');
        return $this;
    }

    /**
     * 
     * @return boolean $authenticateRefer
     */
    public function getAuthenticateRefer()
    {
        return $this->authenticateRefer->getValue();
    }

    /**
     * 
     */
    public function setAutoConfigSoftClient($autoConfigSoftClient = null)
    {
        if (!$autoConfigSoftClient) return $this;
        $this->autoConfigSoftClient = new PrimitiveType($autoConfigSoftClient);
        $this->autoConfigSoftClient->setName('autoConfigSoftClient');
        return $this;
    }

    /**
     * 
     * @return boolean $autoConfigSoftClient
     */
    public function getAutoConfigSoftClient()
    {
        return $this->autoConfigSoftClient->getValue();
    }

    /**
     * 
     */
    public function setAuthenticationMode($authenticationMode = null)
    {
        if (!$authenticationMode) return $this;
        $this->authenticationMode = ($authenticationMode InstanceOf AuthenticationMode)
             ? $authenticationMode
             : new AuthenticationMode($authenticationMode);
        $this->authenticationMode->setName('authenticationMode');
        return $this;
    }

    /**
     * 
     * @return AuthenticationMode $authenticationMode
     */
    public function getAuthenticationMode()
    {
        return $this->authenticationMode->getValue();
    }

    /**
     * 
     */
    public function setRequiresBroadWorksDigitCollection($requiresBroadWorksDigitCollection = null)
    {
        if (!$requiresBroadWorksDigitCollection) return $this;
        $this->requiresBroadWorksDigitCollection = new PrimitiveType($requiresBroadWorksDigitCollection);
        $this->requiresBroadWorksDigitCollection->setName('requiresBroadWorksDigitCollection');
        return $this;
    }

    /**
     * 
     * @return boolean $requiresBroadWorksDigitCollection
     */
    public function getRequiresBroadWorksDigitCollection()
    {
        return $this->requiresBroadWorksDigitCollection->getValue();
    }

    /**
     * 
     */
    public function setRequiresBroadWorksCallWaitingTone($requiresBroadWorksCallWaitingTone = null)
    {
        if (!$requiresBroadWorksCallWaitingTone) return $this;
        $this->requiresBroadWorksCallWaitingTone = new PrimitiveType($requiresBroadWorksCallWaitingTone);
        $this->requiresBroadWorksCallWaitingTone->setName('requiresBroadWorksCallWaitingTone');
        return $this;
    }

    /**
     * 
     * @return boolean $requiresBroadWorksCallWaitingTone
     */
    public function getRequiresBroadWorksCallWaitingTone()
    {
        return $this->requiresBroadWorksCallWaitingTone->getValue();
    }

    /**
     * 
     */
    public function setRequiresMWISubscription($requiresMWISubscription = null)
    {
        if (!$requiresMWISubscription) return $this;
        $this->requiresMWISubscription = new PrimitiveType($requiresMWISubscription);
        $this->requiresMWISubscription->setName('requiresMWISubscription');
        return $this;
    }

    /**
     * 
     * @return boolean $requiresMWISubscription
     */
    public function getRequiresMWISubscription()
    {
        return $this->requiresMWISubscription->getValue();
    }

    /**
     * 
     */
    public function setUseHistoryInfoHeaderOnAccessSide($useHistoryInfoHeaderOnAccessSide = null)
    {
        if (!$useHistoryInfoHeaderOnAccessSide) return $this;
        $this->useHistoryInfoHeaderOnAccessSide = new PrimitiveType($useHistoryInfoHeaderOnAccessSide);
        $this->useHistoryInfoHeaderOnAccessSide->setName('useHistoryInfoHeaderOnAccessSide');
        return $this;
    }

    /**
     * 
     * @return boolean $useHistoryInfoHeaderOnAccessSide
     */
    public function getUseHistoryInfoHeaderOnAccessSide()
    {
        return $this->useHistoryInfoHeaderOnAccessSide->getValue();
    }

    /**
     * 
     */
    public function setAdviceOfChargeCapable($adviceOfChargeCapable = null)
    {
        if (!$adviceOfChargeCapable) return $this;
        $this->adviceOfChargeCapable = new PrimitiveType($adviceOfChargeCapable);
        $this->adviceOfChargeCapable->setName('adviceOfChargeCapable');
        return $this;
    }

    /**
     * 
     * @return boolean $adviceOfChargeCapable
     */
    public function getAdviceOfChargeCapable()
    {
        return $this->adviceOfChargeCapable->getValue();
    }

    /**
     * 
     */
    public function setResetEvent($resetEvent = null)
    {
        if (!$resetEvent) return $this;
        $this->resetEvent = ($resetEvent InstanceOf AccessDeviceResetEvent)
             ? $resetEvent
             : new AccessDeviceResetEvent($resetEvent);
        $this->resetEvent->setName('resetEvent');
        return $this;
    }

    /**
     * 
     * @return AccessDeviceResetEvent $resetEvent
     */
    public function getResetEvent()
    {
        return $this->resetEvent->getValue();
    }

    /**
     * 
     */
    public function setSupportCallCenterMIMEType($supportCallCenterMIMEType = null)
    {
        if (!$supportCallCenterMIMEType) return $this;
        $this->supportCallCenterMIMEType = new PrimitiveType($supportCallCenterMIMEType);
        $this->supportCallCenterMIMEType->setName('supportCallCenterMIMEType');
        return $this;
    }

    /**
     * 
     * @return boolean $supportCallCenterMIMEType
     */
    public function getSupportCallCenterMIMEType()
    {
        return $this->supportCallCenterMIMEType->getValue();
    }

    /**
     * 
     */
    public function setTrunkMode($trunkMode = null)
    {
        if (!$trunkMode) return $this;
        $this->trunkMode = ($trunkMode InstanceOf TrunkMode)
             ? $trunkMode
             : new TrunkMode($trunkMode);
        $this->trunkMode->setName('trunkMode');
        return $this;
    }

    /**
     * 
     * @return TrunkMode $trunkMode
     */
    public function getTrunkMode()
    {
        return $this->trunkMode->getValue();
    }

    /**
     * 
     */
    public function setAddPCalledPartyId($addPCalledPartyId = null)
    {
        if (!$addPCalledPartyId) return $this;
        $this->addPCalledPartyId = new PrimitiveType($addPCalledPartyId);
        $this->addPCalledPartyId->setName('addPCalledPartyId');
        return $this;
    }

    /**
     * 
     * @return boolean $addPCalledPartyId
     */
    public function getAddPCalledPartyId()
    {
        return $this->addPCalledPartyId->getValue();
    }

    /**
     * 
     */
    public function setSupportIdentityInUpdateAndReInvite($supportIdentityInUpdateAndReInvite = null)
    {
        if (!$supportIdentityInUpdateAndReInvite) return $this;
        $this->supportIdentityInUpdateAndReInvite = new PrimitiveType($supportIdentityInUpdateAndReInvite);
        $this->supportIdentityInUpdateAndReInvite->setName('supportIdentityInUpdateAndReInvite');
        return $this;
    }

    /**
     * 
     * @return boolean $supportIdentityInUpdateAndReInvite
     */
    public function getSupportIdentityInUpdateAndReInvite()
    {
        return $this->supportIdentityInUpdateAndReInvite->getValue();
    }

    /**
     * 
     */
    public function setUnscreenedPresentationIdentityPolicy($unscreenedPresentationIdentityPolicy = null)
    {
        if (!$unscreenedPresentationIdentityPolicy) return $this;
        $this->unscreenedPresentationIdentityPolicy = ($unscreenedPresentationIdentityPolicy InstanceOf UnscreenedPresentationIdentityPolicy)
             ? $unscreenedPresentationIdentityPolicy
             : new UnscreenedPresentationIdentityPolicy($unscreenedPresentationIdentityPolicy);
        $this->unscreenedPresentationIdentityPolicy->setName('unscreenedPresentationIdentityPolicy');
        return $this;
    }

    /**
     * 
     * @return UnscreenedPresentationIdentityPolicy $unscreenedPresentationIdentityPolicy
     */
    public function getUnscreenedPresentationIdentityPolicy()
    {
        return $this->unscreenedPresentationIdentityPolicy->getValue();
    }
}
