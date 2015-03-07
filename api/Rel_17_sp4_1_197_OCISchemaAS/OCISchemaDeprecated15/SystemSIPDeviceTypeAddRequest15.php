<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated15; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated15\CPEDeviceOptions14sp6;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\SignalingAddressType;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\UnboundedPositiveInt;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\AuthenticationMode;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem\EarlyMediaSupportType;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\WebBasedConfigURL;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\AccessDeviceType;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Request to add a sip device type.
 *             The response is either SuccessResponse or ErrorResponse.
 *             Replaced By : SystemSIPDeviceTypeAddRequest16
 */
class SystemSIPDeviceTypeAddRequest15 extends ComplexType implements ComplexInterface
{
    public    $name                               = __CLASS__;
    protected $deviceType                         = null;
    protected $numberOfPorts                      = null;
    protected $profile                            = null;
    protected $registrationCapable                = null;
    protected $isConferenceDevice                 = null;
    protected $isMobilityManagerDevice            = null;
    protected $isMusicOnHoldDevice                = null;
    protected $RFC3264Hold                        = null;
    protected $isTrusted                          = null;
    protected $E164Capable                        = null;
    protected $routeAdvance                       = null;
    protected $forwardingOverride                 = null;
    protected $wirelessIntegration                = null;
    protected $webBasedConfigURL                  = null;
    protected $isVideoCapable                     = null;
    protected $PBXIntegration                     = null;
    protected $useBusinessTrunkingContact         = null;
    protected $staticRegistrationCapable          = null;
    protected $cpeDeviceOptions                   = null;
    protected $earlyMediaSupport                  = null;
    protected $authenticateRefer                  = null;
    protected $autoConfigSoftClient               = null;
    protected $authenticationMode                 = null;
    protected $tdmOverlay                         = null;
    protected $requiresBroadWorksCallWaitingTone  = null;
    protected $requiresMWISubscription            = null;
    protected $useHistoryInfoHeaderOnAccessSide   = null;

    public function __construct(
         $deviceType,
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
         $webBasedConfigURL = null,
         $isVideoCapable,
         $PBXIntegration,
         $useBusinessTrunkingContact,
         $staticRegistrationCapable,
         CPEDeviceOptions14sp6 $cpeDeviceOptions = null,
         $earlyMediaSupport,
         $authenticateRefer,
         $autoConfigSoftClient,
         $authenticationMode,
         $tdmOverlay,
         $requiresBroadWorksCallWaitingTone,
         $requiresMWISubscription,
         $useHistoryInfoHeaderOnAccessSide
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
        $this->setUseBusinessTrunkingContact($useBusinessTrunkingContact);
        $this->setStaticRegistrationCapable($staticRegistrationCapable);
        $this->setCpeDeviceOptions($cpeDeviceOptions);
        $this->setEarlyMediaSupport($earlyMediaSupport);
        $this->setAuthenticateRefer($authenticateRefer);
        $this->setAutoConfigSoftClient($autoConfigSoftClient);
        $this->setAuthenticationMode($authenticationMode);
        $this->setTdmOverlay($tdmOverlay);
        $this->setRequiresBroadWorksCallWaitingTone($requiresBroadWorksCallWaitingTone);
        $this->setRequiresMWISubscription($requiresMWISubscription);
        $this->setUseHistoryInfoHeaderOnAccessSide($useHistoryInfoHeaderOnAccessSide);
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

    public function setNumberOfPorts(UnboundedPositiveInt $numberOfPorts = null)
    {
    }

    public function getNumberOfPorts()
    {
        return (!$this->numberOfPorts) ?: $this->numberOfPorts->value();
    }

    public function setProfile($profile = null)
    {
        $this->profile = ($profile InstanceOf SignalingAddressType)
             ? $profile
             : new SignalingAddressType($profile);
    }

    public function getProfile()
    {
        return (!$this->profile) ?: $this->profile->value();
    }

    public function setRegistrationCapable(xs:boolean $registrationCapable = null)
    {
    }

    public function getRegistrationCapable()
    {
        return (!$this->registrationCapable) ?: $this->registrationCapable->value();
    }

    public function setIsConferenceDevice(xs:boolean $isConferenceDevice = null)
    {
    }

    public function getIsConferenceDevice()
    {
        return (!$this->isConferenceDevice) ?: $this->isConferenceDevice->value();
    }

    public function setIsMobilityManagerDevice(xs:boolean $isMobilityManagerDevice = null)
    {
    }

    public function getIsMobilityManagerDevice()
    {
        return (!$this->isMobilityManagerDevice) ?: $this->isMobilityManagerDevice->value();
    }

    public function setIsMusicOnHoldDevice(xs:boolean $isMusicOnHoldDevice = null)
    {
    }

    public function getIsMusicOnHoldDevice()
    {
        return (!$this->isMusicOnHoldDevice) ?: $this->isMusicOnHoldDevice->value();
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

    public function setUseBusinessTrunkingContact(xs:boolean $useBusinessTrunkingContact = null)
    {
    }

    public function getUseBusinessTrunkingContact()
    {
        return (!$this->useBusinessTrunkingContact) ?: $this->useBusinessTrunkingContact->value();
    }

    public function setStaticRegistrationCapable(xs:boolean $staticRegistrationCapable = null)
    {
    }

    public function getStaticRegistrationCapable()
    {
        return (!$this->staticRegistrationCapable) ?: $this->staticRegistrationCapable->value();
    }

    public function setCpeDeviceOptions(CPEDeviceOptions14sp6 $cpeDeviceOptions = null)
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

    public function setTdmOverlay(xs:boolean $tdmOverlay = null)
    {
    }

    public function getTdmOverlay()
    {
        return (!$this->tdmOverlay) ?: $this->tdmOverlay->value();
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
}
