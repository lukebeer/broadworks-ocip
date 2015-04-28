<?php
/**
 * This file is part of http://github.com/LukeBeer/BroadworksOCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated15; 

use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated15\CPEDeviceOptionsRead;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\SignalingAddressType;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\UnboundedPositiveInt;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\AccessDeviceProtocol;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\AuthenticationMode;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem\EarlyMediaSupportType;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\WebBasedConfigURL;
use BroadworksOCIP\Builder\Types\PrimitiveType;
use BroadworksOCIP\Builder\Types\ComplexInterface;
use BroadworksOCIP\Builder\Types\ComplexType;
use BroadworksOCIP\Response\ResponseOutput;
use BroadworksOCIP\Client\Client;


/**
 * Response to SystemSIPDeviceTypeGetRequest15.
 *             Replaced By : SystemSIPDeviceTypeAddResponse16
 */
class SystemSIPDeviceTypeGetResponse15 extends ComplexType implements ComplexInterface
{
    public    $elementName = 'SystemSIPDeviceTypeGetResponse15';
    protected $isObsolete;
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
    protected $useBusinessTrunkingContact;
    protected $staticRegistrationCapable;
    protected $cpeDeviceOptions;
    protected $protocolChoice;
    protected $earlyMediaSupport;
    protected $authenticateRefer;
    protected $autoConfigSoftClient;
    protected $authenticationMode;
    protected $tdmOverlay;
    protected $requiresBroadWorksCallWaitingTone;
    protected $requiresMWISubscription;
    protected $useHistoryInfoHeaderOnAccessSide;

    /**
     * @return \BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated15\SystemSIPDeviceTypeGetResponse15 $response
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * 
     */
    public function setIsObsolete($isObsolete = null)
    {
        $this->isObsolete = new PrimitiveType($isObsolete);
        $this->isObsolete->setElementName('isObsolete');
        return $this;
    }

    /**
     * 
     * @return boolean $isObsolete
     */
    public function getIsObsolete()
    {
        return ($this->isObsolete)
            ? $this->isObsolete->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setNumberOfPorts(UnboundedPositiveInt $numberOfPorts = null)
    {
        $this->numberOfPorts = ($numberOfPorts InstanceOf UnboundedPositiveInt)
             ? $numberOfPorts
             : new UnboundedPositiveInt($numberOfPorts);
        $this->numberOfPorts->setElementName('numberOfPorts');
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
        $this->profile->setElementName('profile');
        return $this;
    }

    /**
     * 
     * @return SignalingAddressType $profile
     */
    public function getProfile()
    {
        return ($this->profile)
            ? $this->profile->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setRegistrationCapable($registrationCapable = null)
    {
        $this->registrationCapable = new PrimitiveType($registrationCapable);
        $this->registrationCapable->setElementName('registrationCapable');
        return $this;
    }

    /**
     * 
     * @return boolean $registrationCapable
     */
    public function getRegistrationCapable()
    {
        return ($this->registrationCapable)
            ? $this->registrationCapable->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setIsConferenceDevice($isConferenceDevice = null)
    {
        $this->isConferenceDevice = new PrimitiveType($isConferenceDevice);
        $this->isConferenceDevice->setElementName('isConferenceDevice');
        return $this;
    }

    /**
     * 
     * @return boolean $isConferenceDevice
     */
    public function getIsConferenceDevice()
    {
        return ($this->isConferenceDevice)
            ? $this->isConferenceDevice->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setIsMobilityManagerDevice($isMobilityManagerDevice = null)
    {
        $this->isMobilityManagerDevice = new PrimitiveType($isMobilityManagerDevice);
        $this->isMobilityManagerDevice->setElementName('isMobilityManagerDevice');
        return $this;
    }

    /**
     * 
     * @return boolean $isMobilityManagerDevice
     */
    public function getIsMobilityManagerDevice()
    {
        return ($this->isMobilityManagerDevice)
            ? $this->isMobilityManagerDevice->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setIsMusicOnHoldDevice($isMusicOnHoldDevice = null)
    {
        $this->isMusicOnHoldDevice = new PrimitiveType($isMusicOnHoldDevice);
        $this->isMusicOnHoldDevice->setElementName('isMusicOnHoldDevice');
        return $this;
    }

    /**
     * 
     * @return boolean $isMusicOnHoldDevice
     */
    public function getIsMusicOnHoldDevice()
    {
        return ($this->isMusicOnHoldDevice)
            ? $this->isMusicOnHoldDevice->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setRFC3264Hold($RFC3264Hold = null)
    {
        $this->RFC3264Hold = new PrimitiveType($RFC3264Hold);
        $this->RFC3264Hold->setElementName('RFC3264Hold');
        return $this;
    }

    /**
     * 
     * @return boolean $RFC3264Hold
     */
    public function getRFC3264Hold()
    {
        return ($this->RFC3264Hold)
            ? $this->RFC3264Hold->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setIsTrusted($isTrusted = null)
    {
        $this->isTrusted = new PrimitiveType($isTrusted);
        $this->isTrusted->setElementName('isTrusted');
        return $this;
    }

    /**
     * 
     * @return boolean $isTrusted
     */
    public function getIsTrusted()
    {
        return ($this->isTrusted)
            ? $this->isTrusted->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setE164Capable($E164Capable = null)
    {
        $this->E164Capable = new PrimitiveType($E164Capable);
        $this->E164Capable->setElementName('E164Capable');
        return $this;
    }

    /**
     * 
     * @return boolean $E164Capable
     */
    public function getE164Capable()
    {
        return ($this->E164Capable)
            ? $this->E164Capable->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setRouteAdvance($routeAdvance = null)
    {
        $this->routeAdvance = new PrimitiveType($routeAdvance);
        $this->routeAdvance->setElementName('routeAdvance');
        return $this;
    }

    /**
     * 
     * @return boolean $routeAdvance
     */
    public function getRouteAdvance()
    {
        return ($this->routeAdvance)
            ? $this->routeAdvance->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setForwardingOverride($forwardingOverride = null)
    {
        $this->forwardingOverride = new PrimitiveType($forwardingOverride);
        $this->forwardingOverride->setElementName('forwardingOverride');
        return $this;
    }

    /**
     * 
     * @return boolean $forwardingOverride
     */
    public function getForwardingOverride()
    {
        return ($this->forwardingOverride)
            ? $this->forwardingOverride->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setWirelessIntegration($wirelessIntegration = null)
    {
        $this->wirelessIntegration = new PrimitiveType($wirelessIntegration);
        $this->wirelessIntegration->setElementName('wirelessIntegration');
        return $this;
    }

    /**
     * 
     * @return boolean $wirelessIntegration
     */
    public function getWirelessIntegration()
    {
        return ($this->wirelessIntegration)
            ? $this->wirelessIntegration->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setWebBasedConfigURL($webBasedConfigURL = null)
    {
        $this->webBasedConfigURL = ($webBasedConfigURL InstanceOf WebBasedConfigURL)
             ? $webBasedConfigURL
             : new WebBasedConfigURL($webBasedConfigURL);
        $this->webBasedConfigURL->setElementName('webBasedConfigURL');
        return $this;
    }

    /**
     * 
     * @return WebBasedConfigURL $webBasedConfigURL
     */
    public function getWebBasedConfigURL()
    {
        return ($this->webBasedConfigURL)
            ? $this->webBasedConfigURL->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setIsVideoCapable($isVideoCapable = null)
    {
        $this->isVideoCapable = new PrimitiveType($isVideoCapable);
        $this->isVideoCapable->setElementName('isVideoCapable');
        return $this;
    }

    /**
     * 
     * @return boolean $isVideoCapable
     */
    public function getIsVideoCapable()
    {
        return ($this->isVideoCapable)
            ? $this->isVideoCapable->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setPBXIntegration($PBXIntegration = null)
    {
        $this->PBXIntegration = new PrimitiveType($PBXIntegration);
        $this->PBXIntegration->setElementName('PBXIntegration');
        return $this;
    }

    /**
     * 
     * @return boolean $PBXIntegration
     */
    public function getPBXIntegration()
    {
        return ($this->PBXIntegration)
            ? $this->PBXIntegration->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setUseBusinessTrunkingContact($useBusinessTrunkingContact = null)
    {
        $this->useBusinessTrunkingContact = new PrimitiveType($useBusinessTrunkingContact);
        $this->useBusinessTrunkingContact->setElementName('useBusinessTrunkingContact');
        return $this;
    }

    /**
     * 
     * @return boolean $useBusinessTrunkingContact
     */
    public function getUseBusinessTrunkingContact()
    {
        return ($this->useBusinessTrunkingContact)
            ? $this->useBusinessTrunkingContact->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setStaticRegistrationCapable($staticRegistrationCapable = null)
    {
        $this->staticRegistrationCapable = new PrimitiveType($staticRegistrationCapable);
        $this->staticRegistrationCapable->setElementName('staticRegistrationCapable');
        return $this;
    }

    /**
     * 
     * @return boolean $staticRegistrationCapable
     */
    public function getStaticRegistrationCapable()
    {
        return ($this->staticRegistrationCapable)
            ? $this->staticRegistrationCapable->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setCpeDeviceOptions(CPEDeviceOptionsRead $cpeDeviceOptions = null)
    {
        $this->cpeDeviceOptions = ($cpeDeviceOptions InstanceOf CPEDeviceOptionsRead)
             ? $cpeDeviceOptions
             : new CPEDeviceOptionsRead($cpeDeviceOptions);
        $this->cpeDeviceOptions->setElementName('cpeDeviceOptions');
        return $this;
    }

    /**
     * 
     * @return CPEDeviceOptionsRead $cpeDeviceOptions
     */
    public function getCpeDeviceOptions()
    {
        return $this->cpeDeviceOptions;
    }

    /**
     * 
     */
    public function setProtocolChoice($protocolChoice = null)
    {
        $this->protocolChoice = ($protocolChoice InstanceOf AccessDeviceProtocol)
             ? $protocolChoice
             : new AccessDeviceProtocol($protocolChoice);
        $this->protocolChoice->setElementName('protocolChoice');
        return $this;
    }

    /**
     * 
     * @return AccessDeviceProtocol $protocolChoice
     */
    public function getProtocolChoice()
    {
        return ($this->protocolChoice)
            ? $this->protocolChoice->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setEarlyMediaSupport($earlyMediaSupport = null)
    {
        $this->earlyMediaSupport = ($earlyMediaSupport InstanceOf EarlyMediaSupportType)
             ? $earlyMediaSupport
             : new EarlyMediaSupportType($earlyMediaSupport);
        $this->earlyMediaSupport->setElementName('earlyMediaSupport');
        return $this;
    }

    /**
     * 
     * @return EarlyMediaSupportType $earlyMediaSupport
     */
    public function getEarlyMediaSupport()
    {
        return ($this->earlyMediaSupport)
            ? $this->earlyMediaSupport->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setAuthenticateRefer($authenticateRefer = null)
    {
        $this->authenticateRefer = new PrimitiveType($authenticateRefer);
        $this->authenticateRefer->setElementName('authenticateRefer');
        return $this;
    }

    /**
     * 
     * @return boolean $authenticateRefer
     */
    public function getAuthenticateRefer()
    {
        return ($this->authenticateRefer)
            ? $this->authenticateRefer->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setAutoConfigSoftClient($autoConfigSoftClient = null)
    {
        $this->autoConfigSoftClient = new PrimitiveType($autoConfigSoftClient);
        $this->autoConfigSoftClient->setElementName('autoConfigSoftClient');
        return $this;
    }

    /**
     * 
     * @return boolean $autoConfigSoftClient
     */
    public function getAutoConfigSoftClient()
    {
        return ($this->autoConfigSoftClient)
            ? $this->autoConfigSoftClient->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setAuthenticationMode($authenticationMode = null)
    {
        $this->authenticationMode = ($authenticationMode InstanceOf AuthenticationMode)
             ? $authenticationMode
             : new AuthenticationMode($authenticationMode);
        $this->authenticationMode->setElementName('authenticationMode');
        return $this;
    }

    /**
     * 
     * @return AuthenticationMode $authenticationMode
     */
    public function getAuthenticationMode()
    {
        return ($this->authenticationMode)
            ? $this->authenticationMode->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setTdmOverlay($tdmOverlay = null)
    {
        $this->tdmOverlay = new PrimitiveType($tdmOverlay);
        $this->tdmOverlay->setElementName('tdmOverlay');
        return $this;
    }

    /**
     * 
     * @return boolean $tdmOverlay
     */
    public function getTdmOverlay()
    {
        return ($this->tdmOverlay)
            ? $this->tdmOverlay->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setRequiresBroadWorksCallWaitingTone($requiresBroadWorksCallWaitingTone = null)
    {
        $this->requiresBroadWorksCallWaitingTone = new PrimitiveType($requiresBroadWorksCallWaitingTone);
        $this->requiresBroadWorksCallWaitingTone->setElementName('requiresBroadWorksCallWaitingTone');
        return $this;
    }

    /**
     * 
     * @return boolean $requiresBroadWorksCallWaitingTone
     */
    public function getRequiresBroadWorksCallWaitingTone()
    {
        return ($this->requiresBroadWorksCallWaitingTone)
            ? $this->requiresBroadWorksCallWaitingTone->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setRequiresMWISubscription($requiresMWISubscription = null)
    {
        $this->requiresMWISubscription = new PrimitiveType($requiresMWISubscription);
        $this->requiresMWISubscription->setElementName('requiresMWISubscription');
        return $this;
    }

    /**
     * 
     * @return boolean $requiresMWISubscription
     */
    public function getRequiresMWISubscription()
    {
        return ($this->requiresMWISubscription)
            ? $this->requiresMWISubscription->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setUseHistoryInfoHeaderOnAccessSide($useHistoryInfoHeaderOnAccessSide = null)
    {
        $this->useHistoryInfoHeaderOnAccessSide = new PrimitiveType($useHistoryInfoHeaderOnAccessSide);
        $this->useHistoryInfoHeaderOnAccessSide->setElementName('useHistoryInfoHeaderOnAccessSide');
        return $this;
    }

    /**
     * 
     * @return boolean $useHistoryInfoHeaderOnAccessSide
     */
    public function getUseHistoryInfoHeaderOnAccessSide()
    {
        return ($this->useHistoryInfoHeaderOnAccessSide)
            ? $this->useHistoryInfoHeaderOnAccessSide->getElementValue()
            : null;
    }
}
