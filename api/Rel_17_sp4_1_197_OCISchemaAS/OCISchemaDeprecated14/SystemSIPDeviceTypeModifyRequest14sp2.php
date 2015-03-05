<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated14; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\AccessDeviceType;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\xs:boolean;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\WebBasedConfigURL;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\CPEDeviceModifyOptions;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\EarlyMediaSupportType;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\AuthenticationMode;
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
 *         Replaced By : SystemSIPDeviceTypeModifyRequest15
 */
class SystemSIPDeviceTypeModifyRequest14sp2 extends ComplexType implements ComplexInterface
{
    public    $name = __CLASS__;

    public function __construct(
             $deviceType,
             $isObsolete=null,
             $registrationCapable=null,
             $RFC3264Hold=null,
             $isTrusted=null,
             $E164Capable=null,
             $routeAdvance=null,
             $forwardingOverride=null,
             $wirelessIntegration=null,
             $webBasedConfigURL=null,
             $isVideoCapable=null,
             $PBXIntegration=null,
             $useBusinessTrunkingContact=null,
             $staticRegistrationCapable=null,
             $cpeDeviceOptions=null,
             $earlyMediaSupport=null,
             $authenticateRefer=null,
             $autoConfigSoftClient=null,
             $authenticationMode=null,
             $tdmOverlay=null,
             $supportsBroadWorksINFOForCallWaiting=null
    ) {
        $this->deviceType                           = new AccessDeviceType($deviceType);
        $this->isObsolete                           = $isObsolete;
        $this->registrationCapable                  = $registrationCapable;
        $this->RFC3264Hold                          = $RFC3264Hold;
        $this->isTrusted                            = $isTrusted;
        $this->E164Capable                          = $E164Capable;
        $this->routeAdvance                         = $routeAdvance;
        $this->forwardingOverride                   = $forwardingOverride;
        $this->wirelessIntegration                  = $wirelessIntegration;
        $this->webBasedConfigURL                    = new WebBasedConfigURL($webBasedConfigURL);
        $this->isVideoCapable                       = $isVideoCapable;
        $this->PBXIntegration                       = $PBXIntegration;
        $this->useBusinessTrunkingContact           = $useBusinessTrunkingContact;
        $this->staticRegistrationCapable            = $staticRegistrationCapable;
        $this->cpeDeviceOptions                     = $cpeDeviceOptions;
        $this->earlyMediaSupport                    = $earlyMediaSupport;
        $this->authenticateRefer                    = $authenticateRefer;
        $this->autoConfigSoftClient                 = $autoConfigSoftClient;
        $this->authenticationMode                   = new AuthenticationMode($authenticationMode);
        $this->tdmOverlay                           = $tdmOverlay;
        $this->supportsBroadWorksINFOForCallWaiting = $supportsBroadWorksINFOForCallWaiting;
        $this->args                                 = func_get_args();
    }

    public function setDeviceType($deviceType)
    {
        $deviceType and $this->deviceType = new AccessDeviceType($deviceType);
    }

    public function getDeviceType()
    {
        return (!$this->deviceType) ?: $this->deviceType->value();
    }

    public function setIsObsolete($isObsolete)
    {
        $isObsolete and $this->isObsolete = new xs:boolean($isObsolete);
    }

    public function getIsObsolete()
    {
        return (!$this->isObsolete) ?: $this->isObsolete->value();
    }

    public function setRegistrationCapable($registrationCapable)
    {
        $registrationCapable and $this->registrationCapable = new xs:boolean($registrationCapable);
    }

    public function getRegistrationCapable()
    {
        return (!$this->registrationCapable) ?: $this->registrationCapable->value();
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

    public function setUseBusinessTrunkingContact($useBusinessTrunkingContact)
    {
        $useBusinessTrunkingContact and $this->useBusinessTrunkingContact = new xs:boolean($useBusinessTrunkingContact);
    }

    public function getUseBusinessTrunkingContact()
    {
        return (!$this->useBusinessTrunkingContact) ?: $this->useBusinessTrunkingContact->value();
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
        $cpeDeviceOptions and $this->cpeDeviceOptions = new CPEDeviceModifyOptions($cpeDeviceOptions);
    }

    public function getCpeDeviceOptions()
    {
        return (!$this->cpeDeviceOptions) ?: $this->cpeDeviceOptions->value();
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

    public function setTdmOverlay($tdmOverlay)
    {
        $tdmOverlay and $this->tdmOverlay = new xs:boolean($tdmOverlay);
    }

    public function getTdmOverlay()
    {
        return (!$this->tdmOverlay) ?: $this->tdmOverlay->value();
    }

    public function setSupportsBroadWorksINFOForCallWaiting($supportsBroadWorksINFOForCallWaiting)
    {
        $supportsBroadWorksINFOForCallWaiting and $this->supportsBroadWorksINFOForCallWaiting = new xs:boolean($supportsBroadWorksINFOForCallWaiting);
    }

    public function getSupportsBroadWorksINFOForCallWaiting()
    {
        return (!$this->supportsBroadWorksINFOForCallWaiting) ?: $this->supportsBroadWorksINFOForCallWaiting->value();
    }
}
