<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem\UnscreenedPresentationIdentityPolicy;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\AccessDeviceResetEvent;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\CPEDeviceOptions16sp1;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\UnboundedPositiveInt;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\SignalingAddressType;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem\EarlyMediaSupportType;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\AuthenticationMode;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\WebBasedConfigURL;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem\TrunkMode;
use Broadworks_OCIP\core\Builder\Types\PrimitiveType;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Request to add a sip device type.
 *         The response is either SuccessResponse or ErrorResponse.
 */
class SystemSIPDeviceTypeAddRequest17sp4 extends ComplexType implements ComplexInterface
{
    public    $name = 'SystemSIPDeviceTypeAddRequest17sp4';
    protected $deviceType;
    protected $numberOfPorts;
    protected $profile;
    protected $registrationCapable;
    protected $isConferenceDevice;
    protected $isMobilityManagerDevice;
    protected $isMusicOnHoldDevice;
    protected $RFC3264Hold;
    protected $isTrusted;
    protected $E164Capable;
    protected $routeAdvance;
    protected $forwardingOverride;
    protected $wirelessIntegration;
    protected $webBasedConfigURL;
    protected $isVideoCapable;
    protected $PBXIntegration;
    protected $staticRegistrationCapable;
    protected $cpeDeviceOptions;
    protected $earlyMediaSupport;
    protected $authenticateRefer;
    protected $autoConfigSoftClient;
    protected $authenticationMode;
    protected $requiresBroadWorksDigitCollection;
    protected $requiresBroadWorksCallWaitingTone;
    protected $requiresMWISubscription;
    protected $useHistoryInfoHeaderOnAccessSide;
    protected $adviceOfChargeCapable;
    protected $resetEvent;
    protected $supportCallCenterMIMEType;
    protected $trunkMode;
    protected $addPCalledPartyId;
    protected $supportIdentityInUpdateAndReInvite;
    protected $unscreenedPresentationIdentityPolicy;

    public function __construct(
         $deviceType = '',
         UnboundedPositiveInt $numberOfPorts = '',
         $profile = '',
         $registrationCapable = '',
         $isConferenceDevice = '',
         $isMobilityManagerDevice = '',
         $isMusicOnHoldDevice = '',
         $RFC3264Hold = '',
         $isTrusted = '',
         $E164Capable = '',
         $routeAdvance = '',
         $forwardingOverride = '',
         $wirelessIntegration = '',
         $webBasedConfigURL = null,
         $isVideoCapable = '',
         $PBXIntegration = '',
         $staticRegistrationCapable = '',
         CPEDeviceOptions16sp1 $cpeDeviceOptions = null,
         $earlyMediaSupport = '',
         $authenticateRefer = '',
         $autoConfigSoftClient = '',
         $authenticationMode = '',
         $requiresBroadWorksDigitCollection = '',
         $requiresBroadWorksCallWaitingTone = '',
         $requiresMWISubscription = '',
         $useHistoryInfoHeaderOnAccessSide = '',
         $adviceOfChargeCapable = '',
         $resetEvent = null,
         $supportCallCenterMIMEType = '',
         $trunkMode = '',
         $addPCalledPartyId = '',
         $supportIdentityInUpdateAndReInvite = '',
         $unscreenedPresentationIdentityPolicy = ''
    ) {
        $this->setDeviceType($deviceType);
        $this->setNumberOfPorts($numberOfPorts);
        $this->setProfile($profile);
        $this->setRegistrationCapable($registrationCapable);
        $this->setIsConferenceDevice($isConferenceDevice);
        $this->setIsMobilityManagerDevice($isMobilityManagerDevice);
        $this->setIsMusicOnHoldDevice($isMusicOnHoldDevice);
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
        return ($this->deviceType) ? $this->deviceType->getValue() : null;
    }

    /**
     * 
     */
    public function setNumberOfPorts(UnboundedPositiveInt $numberOfPorts = null)
    {
        $this->numberOfPorts = ($numberOfPorts InstanceOf UnboundedPositiveInt)
             ? $numberOfPorts
             : new UnboundedPositiveInt($numberOfPorts);
        $this->numberOfPorts->setName('numberOfPorts');
        return $this;
    }

    /**
     * 
     * @return UnboundedPositiveInt $numberOfPorts
     */
    public function getNumberOfPorts()
    {
        return $this->numberOfPorts;
    }

    /**
     * 
     */
    public function setProfile($profile = null)
    {
        $this->profile = ($profile InstanceOf SignalingAddressType)
             ? $profile
             : new SignalingAddressType($profile);
        $this->profile->setName('profile');
        return $this;
    }

    /**
     * 
     * @return SignalingAddressType $profile
     */
    public function getProfile()
    {
        return ($this->profile) ? $this->profile->getValue() : null;
    }

    /**
     * 
     */
    public function setRegistrationCapable($registrationCapable = null)
    {
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
        return ($this->registrationCapable) ? $this->registrationCapable->getValue() : null;
    }

    /**
     * 
     */
    public function setIsConferenceDevice($isConferenceDevice = null)
    {
        $this->isConferenceDevice = new PrimitiveType($isConferenceDevice);
        $this->isConferenceDevice->setName('isConferenceDevice');
        return $this;
    }

    /**
     * 
     * @return boolean $isConferenceDevice
     */
    public function getIsConferenceDevice()
    {
        return ($this->isConferenceDevice) ? $this->isConferenceDevice->getValue() : null;
    }

    /**
     * 
     */
    public function setIsMobilityManagerDevice($isMobilityManagerDevice = null)
    {
        $this->isMobilityManagerDevice = new PrimitiveType($isMobilityManagerDevice);
        $this->isMobilityManagerDevice->setName('isMobilityManagerDevice');
        return $this;
    }

    /**
     * 
     * @return boolean $isMobilityManagerDevice
     */
    public function getIsMobilityManagerDevice()
    {
        return ($this->isMobilityManagerDevice) ? $this->isMobilityManagerDevice->getValue() : null;
    }

    /**
     * 
     */
    public function setIsMusicOnHoldDevice($isMusicOnHoldDevice = null)
    {
        $this->isMusicOnHoldDevice = new PrimitiveType($isMusicOnHoldDevice);
        $this->isMusicOnHoldDevice->setName('isMusicOnHoldDevice');
        return $this;
    }

    /**
     * 
     * @return boolean $isMusicOnHoldDevice
     */
    public function getIsMusicOnHoldDevice()
    {
        return ($this->isMusicOnHoldDevice) ? $this->isMusicOnHoldDevice->getValue() : null;
    }

    /**
     * 
     */
    public function setRFC3264Hold($RFC3264Hold = null)
    {
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
        return ($this->RFC3264Hold) ? $this->RFC3264Hold->getValue() : null;
    }

    /**
     * 
     */
    public function setIsTrusted($isTrusted = null)
    {
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
        return ($this->isTrusted) ? $this->isTrusted->getValue() : null;
    }

    /**
     * 
     */
    public function setE164Capable($E164Capable = null)
    {
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
        return ($this->E164Capable) ? $this->E164Capable->getValue() : null;
    }

    /**
     * 
     */
    public function setRouteAdvance($routeAdvance = null)
    {
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
        return ($this->routeAdvance) ? $this->routeAdvance->getValue() : null;
    }

    /**
     * 
     */
    public function setForwardingOverride($forwardingOverride = null)
    {
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
        return ($this->forwardingOverride) ? $this->forwardingOverride->getValue() : null;
    }

    /**
     * 
     */
    public function setWirelessIntegration($wirelessIntegration = null)
    {
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
        return ($this->wirelessIntegration) ? $this->wirelessIntegration->getValue() : null;
    }

    /**
     * 
     */
    public function setWebBasedConfigURL($webBasedConfigURL = null)
    {
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
        return ($this->webBasedConfigURL) ? $this->webBasedConfigURL->getValue() : null;
    }

    /**
     * 
     */
    public function setIsVideoCapable($isVideoCapable = null)
    {
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
        return ($this->isVideoCapable) ? $this->isVideoCapable->getValue() : null;
    }

    /**
     * 
     */
    public function setPBXIntegration($PBXIntegration = null)
    {
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
        return ($this->PBXIntegration) ? $this->PBXIntegration->getValue() : null;
    }

    /**
     * 
     */
    public function setStaticRegistrationCapable($staticRegistrationCapable = null)
    {
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
        return ($this->staticRegistrationCapable) ? $this->staticRegistrationCapable->getValue() : null;
    }

    /**
     * 
     */
    public function setCpeDeviceOptions(CPEDeviceOptions16sp1 $cpeDeviceOptions = null)
    {
        $this->cpeDeviceOptions = ($cpeDeviceOptions InstanceOf CPEDeviceOptions16sp1)
             ? $cpeDeviceOptions
             : new CPEDeviceOptions16sp1($cpeDeviceOptions);
        $this->cpeDeviceOptions->setName('cpeDeviceOptions');
        return $this;
    }

    /**
     * 
     * @return CPEDeviceOptions16sp1 $cpeDeviceOptions
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
        return ($this->earlyMediaSupport) ? $this->earlyMediaSupport->getValue() : null;
    }

    /**
     * 
     */
    public function setAuthenticateRefer($authenticateRefer = null)
    {
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
        return ($this->authenticateRefer) ? $this->authenticateRefer->getValue() : null;
    }

    /**
     * 
     */
    public function setAutoConfigSoftClient($autoConfigSoftClient = null)
    {
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
        return ($this->autoConfigSoftClient) ? $this->autoConfigSoftClient->getValue() : null;
    }

    /**
     * 
     */
    public function setAuthenticationMode($authenticationMode = null)
    {
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
        return ($this->authenticationMode) ? $this->authenticationMode->getValue() : null;
    }

    /**
     * 
     */
    public function setRequiresBroadWorksDigitCollection($requiresBroadWorksDigitCollection = null)
    {
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
        return ($this->requiresBroadWorksDigitCollection) ? $this->requiresBroadWorksDigitCollection->getValue() : null;
    }

    /**
     * 
     */
    public function setRequiresBroadWorksCallWaitingTone($requiresBroadWorksCallWaitingTone = null)
    {
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
        return ($this->requiresBroadWorksCallWaitingTone) ? $this->requiresBroadWorksCallWaitingTone->getValue() : null;
    }

    /**
     * 
     */
    public function setRequiresMWISubscription($requiresMWISubscription = null)
    {
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
        return ($this->requiresMWISubscription) ? $this->requiresMWISubscription->getValue() : null;
    }

    /**
     * 
     */
    public function setUseHistoryInfoHeaderOnAccessSide($useHistoryInfoHeaderOnAccessSide = null)
    {
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
        return ($this->useHistoryInfoHeaderOnAccessSide) ? $this->useHistoryInfoHeaderOnAccessSide->getValue() : null;
    }

    /**
     * 
     */
    public function setAdviceOfChargeCapable($adviceOfChargeCapable = null)
    {
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
        return ($this->adviceOfChargeCapable) ? $this->adviceOfChargeCapable->getValue() : null;
    }

    /**
     * 
     */
    public function setResetEvent($resetEvent = null)
    {
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
        return ($this->resetEvent) ? $this->resetEvent->getValue() : null;
    }

    /**
     * 
     */
    public function setSupportCallCenterMIMEType($supportCallCenterMIMEType = null)
    {
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
        return ($this->supportCallCenterMIMEType) ? $this->supportCallCenterMIMEType->getValue() : null;
    }

    /**
     * 
     */
    public function setTrunkMode($trunkMode = null)
    {
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
        return ($this->trunkMode) ? $this->trunkMode->getValue() : null;
    }

    /**
     * 
     */
    public function setAddPCalledPartyId($addPCalledPartyId = null)
    {
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
        return ($this->addPCalledPartyId) ? $this->addPCalledPartyId->getValue() : null;
    }

    /**
     * 
     */
    public function setSupportIdentityInUpdateAndReInvite($supportIdentityInUpdateAndReInvite = null)
    {
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
        return ($this->supportIdentityInUpdateAndReInvite) ? $this->supportIdentityInUpdateAndReInvite->getValue() : null;
    }

    /**
     * 
     */
    public function setUnscreenedPresentationIdentityPolicy($unscreenedPresentationIdentityPolicy = null)
    {
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
        return ($this->unscreenedPresentationIdentityPolicy) ? $this->unscreenedPresentationIdentityPolicy->getValue() : null;
    }
}
