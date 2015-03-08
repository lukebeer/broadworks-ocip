<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated16; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated16\CPEDeviceModifyOptions16;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\AuthenticationMode;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem\EarlyMediaSupportType;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\WebBasedConfigURL;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\AccessDeviceType;
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
 *         Replaced by: SystemSIPDeviceTypeModifyRequest16sp1
 */
class SystemSIPDeviceTypeModifyRequest16 extends ComplexType implements ComplexInterface
{
    public    $name                              = __CLASS__;
    protected $deviceType                        = null;
    protected $isObsolete                        = null;
    protected $registrationCapable               = null;
    protected $RFC3264Hold                       = null;
    protected $isTrusted                         = null;
    protected $E164Capable                       = null;
    protected $routeAdvance                      = null;
    protected $forwardingOverride                = null;
    protected $wirelessIntegration               = null;
    protected $webBasedConfigURL                 = null;
    protected $isVideoCapable                    = null;
    protected $PBXIntegration                    = null;
    protected $useBusinessTrunkingContact        = null;
    protected $staticRegistrationCapable         = null;
    protected $cpeDeviceOptions                  = null;
    protected $earlyMediaSupport                 = null;
    protected $authenticateRefer                 = null;
    protected $autoConfigSoftClient              = null;
    protected $authenticationMode                = null;
    protected $requiresBroadWorksDigitCollection = null;
    protected $requiresBroadWorksCallWaitingTone = null;
    protected $requiresMWISubscription           = null;
    protected $useHistoryInfoHeaderOnAccessSide  = null;
    protected $adviceOfChargeCapable             = null;

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
         $useBusinessTrunkingContact = null,
         $staticRegistrationCapable = null,
          $cpeDeviceOptions = null,
         $earlyMediaSupport = null,
         $authenticateRefer = null,
         $autoConfigSoftClient = null,
         $authenticationMode = null,
         $requiresBroadWorksDigitCollection = null,
         $requiresBroadWorksCallWaitingTone = null,
         $requiresMWISubscription = null,
         $useHistoryInfoHeaderOnAccessSide = null,
         $adviceOfChargeCapable = null
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
        $this->setUseBusinessTrunkingContact($useBusinessTrunkingContact);
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
     * 
     */
    public function setIsObsolete($isObsolete = null)
    {
        $this->isObsolete = (boolean) $isObsolete;
    }

    /**
     * 
     */
    public function getIsObsolete()
    {
        return (!$this->isObsolete) ?: $this->isObsolete->getValue();
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
        return (!$this->registrationCapable) ?: $this->registrationCapable->getValue();
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
        return (!$this->RFC3264Hold) ?: $this->RFC3264Hold->getValue();
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
        return (!$this->isTrusted) ?: $this->isTrusted->getValue();
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
        return (!$this->E164Capable) ?: $this->E164Capable->getValue();
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
        return (!$this->routeAdvance) ?: $this->routeAdvance->getValue();
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
        return (!$this->forwardingOverride) ?: $this->forwardingOverride->getValue();
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
        return (!$this->wirelessIntegration) ?: $this->wirelessIntegration->getValue();
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
        return (!$this->isVideoCapable) ?: $this->isVideoCapable->getValue();
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
        return (!$this->PBXIntegration) ?: $this->PBXIntegration->getValue();
    }

    /**
     * 
     */
    public function setUseBusinessTrunkingContact($useBusinessTrunkingContact = null)
    {
        $this->useBusinessTrunkingContact = (boolean) $useBusinessTrunkingContact;
    }

    /**
     * 
     */
    public function getUseBusinessTrunkingContact()
    {
        return (!$this->useBusinessTrunkingContact) ?: $this->useBusinessTrunkingContact->getValue();
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
        return (!$this->staticRegistrationCapable) ?: $this->staticRegistrationCapable->getValue();
    }

    /**
     * CPE device's options when used with a modify request.
     *         The following options are not changeable:
     *           configType
     *           systemFileName
     *           deviceFileFormat
     */
    public function setCpeDeviceOptions(CPEDeviceModifyOptions16 $cpeDeviceOptions = null)
    {
        $this->cpeDeviceOptions =  $cpeDeviceOptions;
    }

    /**
     * CPE device's options when used with a modify request.
     *         The following options are not changeable:
     *           configType
     *           systemFileName
     *           deviceFileFormat
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
        return (!$this->authenticateRefer) ?: $this->authenticateRefer->getValue();
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
        return (!$this->autoConfigSoftClient) ?: $this->autoConfigSoftClient->getValue();
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
        return (!$this->requiresBroadWorksDigitCollection) ?: $this->requiresBroadWorksDigitCollection->getValue();
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
        return (!$this->requiresBroadWorksCallWaitingTone) ?: $this->requiresBroadWorksCallWaitingTone->getValue();
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
        return (!$this->requiresMWISubscription) ?: $this->requiresMWISubscription->getValue();
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
        return (!$this->useHistoryInfoHeaderOnAccessSide) ?: $this->useHistoryInfoHeaderOnAccessSide->getValue();
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
        return (!$this->adviceOfChargeCapable) ?: $this->adviceOfChargeCapable->getValue();
    }
}
