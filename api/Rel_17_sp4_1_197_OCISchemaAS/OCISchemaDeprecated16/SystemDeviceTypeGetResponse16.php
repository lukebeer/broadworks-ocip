<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated16; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated16\CPEDeviceOptionsRead16;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\SignalingAddressType;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\AccessDeviceProtocol;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\WebBasedConfigURL;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
     * Response to SystemDeviceTypeGetRequest16.
 *         Replaced by: SystemDeviceTypeGetResponse16sp1
 */
class SystemDeviceTypeGetResponse16 extends ComplexType implements ComplexInterface
{
    const     RESPONSE_TYPE              = 'Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated16\SystemDeviceTypeGetResponse16';
    public    $name                      = __CLASS__;
    protected $isObsolete                = null;
    protected $profile                   = null;
    protected $webBasedConfigURL         = null;
    protected $staticRegistrationCapable = null;
    protected $cpeDeviceOptions          = null;
    protected $protocolChoice            = null;
    protected $isIpAddressOptional       = null;
    protected $useDomain                 = null;
    protected $isMobilityManagerDevice   = null;


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
     * CPE device's options.
     */
    public function setCpeDeviceOptions(CPEDeviceOptionsRead16 $cpeDeviceOptions = null)
    {
        $this->cpeDeviceOptions = CPEDeviceOptionsRead16 $cpeDeviceOptions;
    }

    /**
     * CPE device's options.
     */
    public function getCpeDeviceOptions()
    {
        return (!$this->cpeDeviceOptions) ?: $this->cpeDeviceOptions->getValue();
    }

    /**
     * Access device protocol.
     */
    public function setProtocolChoice($protocolChoice = null)
    {
        $this->protocolChoice = ($protocolChoice InstanceOf AccessDeviceProtocol)
             ? $protocolChoice
             : new AccessDeviceProtocol($protocolChoice);
    }

    /**
     * Access device protocol.
     */
    public function getProtocolChoice()
    {
        return (!$this->protocolChoice) ?: $this->protocolChoice->getValue();
    }

    /**
     * 
     */
    public function setIsIpAddressOptional($isIpAddressOptional = null)
    {
        $this->isIpAddressOptional = (boolean) $isIpAddressOptional;
    }

    /**
     * 
     */
    public function getIsIpAddressOptional()
    {
        return (!$this->isIpAddressOptional) ?: $this->isIpAddressOptional->getValue();
    }

    /**
     * 
     */
    public function setUseDomain($useDomain = null)
    {
        $this->useDomain = (boolean) $useDomain;
    }

    /**
     * 
     */
    public function getUseDomain()
    {
        return (!$this->useDomain) ?: $this->useDomain->getValue();
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
        return (!$this->isMobilityManagerDevice) ?: $this->isMobilityManagerDevice->getValue();
    }
}
