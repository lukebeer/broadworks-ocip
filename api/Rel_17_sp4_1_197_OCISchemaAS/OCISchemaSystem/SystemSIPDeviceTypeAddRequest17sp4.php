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
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\AuthenticationMode;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem\EarlyMediaSupportType;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\WebBasedConfigURL;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\AccessDeviceType;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem\TrunkMode;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem\SystemSIPDeviceTypeAddResponse17sp4;
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
    public    $name                                 = __CLASS__;
    protected $deviceType                           = null;
    protected $numberOfPorts                        = null;
    protected $profile                              = null;
    protected $registrationCapable                  = null;
    protected $isConferenceDevice                   = null;
    protected $isMobilityManagerDevice              = null;
    protected $isMusicOnHoldDevice                  = null;
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
          $numberOfPorts,
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
         $webBasedConfigURL = null,
         $isVideoCapable,
         $PBXIntegration,
         $staticRegistrationCapable,
          $cpeDeviceOptions = null,
         $earlyMediaSupport,
         $authenticateRefer,
         $autoConfigSoftClient,
         $authenticationMode,
         $requiresBroadWorksDigitCollection,
         $requiresBroadWorksCallWaitingTone,
         $requiresMWISubscription,
         $useHistoryInfoHeaderOnAccessSide,
         $adviceOfChargeCapable,
         $resetEvent = null,
         $supportCallCenterMIMEType,
         $trunkMode,
         $addPCalledPartyId,
         $supportIdentityInUpdateAndReInvite,
         $unscreenedPresentationIdentityPolicy
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
     * @return SystemSIPDeviceTypeAddResponse17sp4
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * Access device type.
     */
    public function setDeviceType($deviceType = null)
    {
        $this->deviceType = ($deviceType InstanceOf AccessDeviceType)
             ? $deviceType
             : new AccessDeviceType($deviceType);
    }

    /**
     * Access device type.
     */
    public function getDeviceType()
    {
        return (!$this->deviceType) ?: $this->deviceType->getValue();
    }

    /**
     * Unbounded Quantity. Can either be unlimited or a positive int quantity.
     */
    public function setNumberOfPorts(UnboundedPositiveInt $numberOfPorts = null)
    {
        $this->numberOfPorts =  $numberOfPorts;
    }

    /**
     * Unbounded Quantity. Can either be unlimited or a positive int quantity.
     */
    public function getNumberOfPorts()
    {
        return (!$this->numberOfPorts) ?: $this->numberOfPorts->getValue();
    }

    /**
     * Device type signaling address types.
     */
    public function setProfile($profile = null)
    {
        $this->profile = ($profile InstanceOf SignalingAddressType)
             ? $profile
             : new SignalingAddressType($profile);
    }

    /**
     * Device type signaling address types.
     */
    public function getProfile()
    {
        return (!$this->profile) ?: $this->profile->getValue();
    }

    /**
     * 
     */
    public function setRegistrationCapable($registrationCapable = null)
    {
        $this->registrationCapable = (boolean) $registrationCapable;
    }

    /**
     * 
     */
    public function getRegistrationCapable()
    {
        return (!$this->registrationCapable) ?: $this->registrationCapable;
    }

    /**
     * 
     */
    public function setIsConferenceDevice($isConferenceDevice = null)
    {
        $this->isConferenceDevice = (boolean) $isConferenceDevice;
    }

    /**
     * 
     */
    public function getIsConferenceDevice()
    {
        return (!$this->isConferenceDevice) ?: $this->isConferenceDevice;
    }

    /**
     * 
     */
    public function setIsMobilityManagerDevice($isMobilityManagerDevice = null)
    {
        $this->isMobilityManagerDevice = (boolean) $isMobilityManagerDevice;
    }

    /**
     * 
     */
    public function getIsMobilityManagerDevice()
    {
        return (!$this->isMobilityManagerDevice) ?: $this->isMobilityManagerDevice;
    }

    /**
     * 
     */
    public function setIsMusicOnHoldDevice($isMusicOnHoldDevice = null)
    {
        $this->isMusicOnHoldDevice = (boolean) $isMusicOnHoldDevice;
    }

    /**
     * 
     */
    public function getIsMusicOnHoldDevice()
    {
        return (!$this->isMusicOnHoldDevice) ?: $this->isMusicOnHoldDevice;
    }

    /**
     * 
     */
    public function setRFC3264Hold($RFC3264Hold = null)
    {
        $this->RFC3264Hold = (boolean) $RFC3264Hold;
    }

    /**
     * 
     */
    public function getRFC3264Hold()
    {
        return (!$this->RFC3264Hold) ?: $this->RFC3264Hold;
    }

    /**
     * 
     */
    public function setIsTrusted($isTrusted = null)
    {
        $this->isTrusted = (boolean) $isTrusted;
    }

    /**
     * 
     */
    public function getIsTrusted()
    {
        return (!$this->isTrusted) ?: $this->isTrusted;
    }

    /**
     * 
     */
    public function setE164Capable($E164Capable = null)
    {
        $this->E164Capable = (boolean) $E164Capable;
    }

    /**
     * 
     */
    public function getE164Capable()
    {
        return (!$this->E164Capable) ?: $this->E164Capable;
    }

    /**
     * 
     */
    public function setRouteAdvance($routeAdvance = null)
    {
        $this->routeAdvance = (boolean) $routeAdvance;
    }

    /**
     * 
     */
    public function getRouteAdvance()
    {
        return (!$this->routeAdvance) ?: $this->routeAdvance;
    }

    /**
     * 
     */
    public function setForwardingOverride($forwardingOverride = null)
    {
        $this->forwardingOverride = (boolean) $forwardingOverride;
    }

    /**
     * 
     */
    public function getForwardingOverride()
    {
        return (!$this->forwardingOverride) ?: $this->forwardingOverride;
    }

    /**
     * 
     */
    public function setWirelessIntegration($wirelessIntegration = null)
    {
        $this->wirelessIntegration = (boolean) $wirelessIntegration;
    }

    /**
     * 
     */
    public function getWirelessIntegration()
    {
        return (!$this->wirelessIntegration) ?: $this->wirelessIntegration;
    }

    /**
     * Web based configuration URL.
     */
    public function setWebBasedConfigURL($webBasedConfigURL = null)
    {
        $this->webBasedConfigURL = ($webBasedConfigURL InstanceOf WebBasedConfigURL)
             ? $webBasedConfigURL
             : new WebBasedConfigURL($webBasedConfigURL);
    }

    /**
     * Web based configuration URL.
     */
    public function getWebBasedConfigURL()
    {
        return (!$this->webBasedConfigURL) ?: $this->webBasedConfigURL->getValue();
    }

    /**
     * 
     */
    public function setIsVideoCapable($isVideoCapable = null)
    {
        $this->isVideoCapable = (boolean) $isVideoCapable;
    }

    /**
     * 
     */
    public function getIsVideoCapable()
    {
        return (!$this->isVideoCapable) ?: $this->isVideoCapable;
    }

    /**
     * 
     */
    public function setPBXIntegration($PBXIntegration = null)
    {
        $this->PBXIntegration = (boolean) $PBXIntegration;
    }

    /**
     * 
     */
    public function getPBXIntegration()
    {
        return (!$this->PBXIntegration) ?: $this->PBXIntegration;
    }

    /**
     * 
     */
    public function setStaticRegistrationCapable($staticRegistrationCapable = null)
    {
        $this->staticRegistrationCapable = (boolean) $staticRegistrationCapable;
    }

    /**
     * 
     */
    public function getStaticRegistrationCapable()
    {
        return (!$this->staticRegistrationCapable) ?: $this->staticRegistrationCapable;
    }

    /**
     * CPE device's options.
     */
    public function setCpeDeviceOptions(CPEDeviceOptions16sp1 $cpeDeviceOptions = null)
    {
        $this->cpeDeviceOptions =  $cpeDeviceOptions;
    }

    /**
     * CPE device's options.
     */
    public function getCpeDeviceOptions()
    {
        return (!$this->cpeDeviceOptions) ?: $this->cpeDeviceOptions->getValue();
    }

    /**
     * Early Media Support types. This is typically used to configure the ringback tone delivery mode.
     *         When there is no early media, the call originator typically supplies ringback tone locally.
     *         RTP - Early Session refers to RFC 3959.
     */
    public function setEarlyMediaSupport($earlyMediaSupport = null)
    {
        $this->earlyMediaSupport = ($earlyMediaSupport InstanceOf EarlyMediaSupportType)
             ? $earlyMediaSupport
             : new EarlyMediaSupportType($earlyMediaSupport);
    }

    /**
     * Early Media Support types. This is typically used to configure the ringback tone delivery mode.
     *         When there is no early media, the call originator typically supplies ringback tone locally.
     *         RTP - Early Session refers to RFC 3959.
     */
    public function getEarlyMediaSupport()
    {
        return (!$this->earlyMediaSupport) ?: $this->earlyMediaSupport->getValue();
    }

    /**
     * 
     */
    public function setAuthenticateRefer($authenticateRefer = null)
    {
        $this->authenticateRefer = (boolean) $authenticateRefer;
    }

    /**
     * 
     */
    public function getAuthenticateRefer()
    {
        return (!$this->authenticateRefer) ?: $this->authenticateRefer;
    }

    /**
     * 
     */
    public function setAutoConfigSoftClient($autoConfigSoftClient = null)
    {
        $this->autoConfigSoftClient = (boolean) $autoConfigSoftClient;
    }

    /**
     * 
     */
    public function getAutoConfigSoftClient()
    {
        return (!$this->autoConfigSoftClient) ?: $this->autoConfigSoftClient;
    }

    /**
     * Choices for SIP Device Authentication
     */
    public function setAuthenticationMode($authenticationMode = null)
    {
        $this->authenticationMode = ($authenticationMode InstanceOf AuthenticationMode)
             ? $authenticationMode
             : new AuthenticationMode($authenticationMode);
    }

    /**
     * Choices for SIP Device Authentication
     */
    public function getAuthenticationMode()
    {
        return (!$this->authenticationMode) ?: $this->authenticationMode->getValue();
    }

    /**
     * 
     */
    public function setRequiresBroadWorksDigitCollection($requiresBroadWorksDigitCollection = null)
    {
        $this->requiresBroadWorksDigitCollection = (boolean) $requiresBroadWorksDigitCollection;
    }

    /**
     * 
     */
    public function getRequiresBroadWorksDigitCollection()
    {
        return (!$this->requiresBroadWorksDigitCollection) ?: $this->requiresBroadWorksDigitCollection;
    }

    /**
     * 
     */
    public function setRequiresBroadWorksCallWaitingTone($requiresBroadWorksCallWaitingTone = null)
    {
        $this->requiresBroadWorksCallWaitingTone = (boolean) $requiresBroadWorksCallWaitingTone;
    }

    /**
     * 
     */
    public function getRequiresBroadWorksCallWaitingTone()
    {
        return (!$this->requiresBroadWorksCallWaitingTone) ?: $this->requiresBroadWorksCallWaitingTone;
    }

    /**
     * 
     */
    public function setRequiresMWISubscription($requiresMWISubscription = null)
    {
        $this->requiresMWISubscription = (boolean) $requiresMWISubscription;
    }

    /**
     * 
     */
    public function getRequiresMWISubscription()
    {
        return (!$this->requiresMWISubscription) ?: $this->requiresMWISubscription;
    }

    /**
     * 
     */
    public function setUseHistoryInfoHeaderOnAccessSide($useHistoryInfoHeaderOnAccessSide = null)
    {
        $this->useHistoryInfoHeaderOnAccessSide = (boolean) $useHistoryInfoHeaderOnAccessSide;
    }

    /**
     * 
     */
    public function getUseHistoryInfoHeaderOnAccessSide()
    {
        return (!$this->useHistoryInfoHeaderOnAccessSide) ?: $this->useHistoryInfoHeaderOnAccessSide;
    }

    /**
     * 
     */
    public function setAdviceOfChargeCapable($adviceOfChargeCapable = null)
    {
        $this->adviceOfChargeCapable = (boolean) $adviceOfChargeCapable;
    }

    /**
     * 
     */
    public function getAdviceOfChargeCapable()
    {
        return (!$this->adviceOfChargeCapable) ?: $this->adviceOfChargeCapable;
    }

    /**
     * Choices for the reset event of an access device.
     */
    public function setResetEvent($resetEvent = null)
    {
        $this->resetEvent = ($resetEvent InstanceOf AccessDeviceResetEvent)
             ? $resetEvent
             : new AccessDeviceResetEvent($resetEvent);
    }

    /**
     * Choices for the reset event of an access device.
     */
    public function getResetEvent()
    {
        return (!$this->resetEvent) ?: $this->resetEvent->getValue();
    }

    /**
     * 
     */
    public function setSupportCallCenterMIMEType($supportCallCenterMIMEType = null)
    {
        $this->supportCallCenterMIMEType = (boolean) $supportCallCenterMIMEType;
    }

    /**
     * 
     */
    public function getSupportCallCenterMIMEType()
    {
        return (!$this->supportCallCenterMIMEType) ?: $this->supportCallCenterMIMEType;
    }

    /**
     * Trunk Mode Options
     */
    public function setTrunkMode($trunkMode = null)
    {
        $this->trunkMode = ($trunkMode InstanceOf TrunkMode)
             ? $trunkMode
             : new TrunkMode($trunkMode);
    }

    /**
     * Trunk Mode Options
     */
    public function getTrunkMode()
    {
        return (!$this->trunkMode) ?: $this->trunkMode->getValue();
    }

    /**
     * 
     */
    public function setAddPCalledPartyId($addPCalledPartyId = null)
    {
        $this->addPCalledPartyId = (boolean) $addPCalledPartyId;
    }

    /**
     * 
     */
    public function getAddPCalledPartyId()
    {
        return (!$this->addPCalledPartyId) ?: $this->addPCalledPartyId;
    }

    /**
     * 
     */
    public function setSupportIdentityInUpdateAndReInvite($supportIdentityInUpdateAndReInvite = null)
    {
        $this->supportIdentityInUpdateAndReInvite = (boolean) $supportIdentityInUpdateAndReInvite;
    }

    /**
     * 
     */
    public function getSupportIdentityInUpdateAndReInvite()
    {
        return (!$this->supportIdentityInUpdateAndReInvite) ?: $this->supportIdentityInUpdateAndReInvite;
    }

    /**
     * Unscreened Presentation Identity Policy Options
     */
    public function setUnscreenedPresentationIdentityPolicy($unscreenedPresentationIdentityPolicy = null)
    {
        $this->unscreenedPresentationIdentityPolicy = ($unscreenedPresentationIdentityPolicy InstanceOf UnscreenedPresentationIdentityPolicy)
             ? $unscreenedPresentationIdentityPolicy
             : new UnscreenedPresentationIdentityPolicy($unscreenedPresentationIdentityPolicy);
    }

    /**
     * Unscreened Presentation Identity Policy Options
     */
    public function getUnscreenedPresentationIdentityPolicy()
    {
        return (!$this->unscreenedPresentationIdentityPolicy) ?: $this->unscreenedPresentationIdentityPolicy->getValue();
    }
}
