<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated15; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated15\CPEDeviceOptionsRead;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\SignalingAddressType;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\AccessDeviceProtocol;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\WebBasedConfigURL;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Response to SystemDeviceTypeGetRequest14sp6.
 *         Replaced by: SystemDeviceTypeGetResponse16
 */
class SystemDeviceTypeGetResponse14sp6 extends ComplexType implements ComplexInterface
{
    public    $name                       = __CLASS__;
    protected $isObsolete                 = null;
    protected $profile                    = null;
    protected $webBasedConfigURL          = null;
    protected $staticRegistrationCapable  = null;
    protected $cpeDeviceOptions           = null;
    protected $protocolChoice             = null;
    protected $isIpAddressOptional        = null;
    protected $useDomain                  = null;
    protected $isMobilityManagerDevice    = null;


    public function setIsObsolete(xs:boolean $isObsolete = null)
    {
    }

    public function getIsObsolete()
    {
        return (!$this->isObsolete) ?: $this->isObsolete->value();
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

    public function setStaticRegistrationCapable(xs:boolean $staticRegistrationCapable = null)
    {
    }

    public function getStaticRegistrationCapable()
    {
        return (!$this->staticRegistrationCapable) ?: $this->staticRegistrationCapable->value();
    }

    public function setCpeDeviceOptions(CPEDeviceOptionsRead $cpeDeviceOptions = null)
    {
    }

    public function getCpeDeviceOptions()
    {
        return (!$this->cpeDeviceOptions) ?: $this->cpeDeviceOptions->value();
    }

    public function setProtocolChoice($protocolChoice = null)
    {
        $this->protocolChoice = ($protocolChoice InstanceOf AccessDeviceProtocol)
             ? $protocolChoice
             : new AccessDeviceProtocol($protocolChoice);
    }

    public function getProtocolChoice()
    {
        return (!$this->protocolChoice) ?: $this->protocolChoice->value();
    }

    public function setIsIpAddressOptional(xs:boolean $isIpAddressOptional = null)
    {
    }

    public function getIsIpAddressOptional()
    {
        return (!$this->isIpAddressOptional) ?: $this->isIpAddressOptional->value();
    }

    public function setUseDomain(xs:boolean $useDomain = null)
    {
    }

    public function getUseDomain()
    {
        return (!$this->useDomain) ?: $this->useDomain->value();
    }

    public function setIsMobilityManagerDevice(xs:boolean $isMobilityManagerDevice = null)
    {
    }

    public function getIsMobilityManagerDevice()
    {
        return (!$this->isMobilityManagerDevice) ?: $this->isMobilityManagerDevice->value();
    }
}
