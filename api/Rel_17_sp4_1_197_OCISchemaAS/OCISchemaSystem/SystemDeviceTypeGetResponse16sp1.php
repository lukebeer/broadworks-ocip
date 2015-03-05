<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\xs:boolean;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\SignalingAddressType;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\WebBasedConfigURL;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\CPEDeviceOptionsRead16sp1;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\AccessDeviceProtocol;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Response to SystemDeviceTypeGetRequest16sp1.
 */
class SystemDeviceTypeGetResponse16sp1 extends ComplexType implements ComplexInterface
{
    public    $name = __CLASS__;

    public function __construct(
             $isObsolete,
             $profile,
             $webBasedConfigURL=null,
             $staticRegistrationCapable,
             CPEDeviceOptionsRead16sp1 $cpeDeviceOptions=null,
             $protocolChoice,
             $isIpAddressOptional,
             $useDomain,
             $isMobilityManagerDevice
    ) {
        $this->isObsolete                = $isObsolete;
        $this->profile                   = new SignalingAddressType($profile);
        $this->webBasedConfigURL         = new WebBasedConfigURL($webBasedConfigURL);
        $this->staticRegistrationCapable = $staticRegistrationCapable;
        $this->cpeDeviceOptions          = $cpeDeviceOptions;
        $this->protocolChoice            = new AccessDeviceProtocol($protocolChoice);
        $this->isIpAddressOptional       = $isIpAddressOptional;
        $this->useDomain                 = $useDomain;
        $this->isMobilityManagerDevice   = $isMobilityManagerDevice;
        $this->args                      = func_get_args();
    }

    public function setIsObsolete($isObsolete)
    {
        $isObsolete and $this->isObsolete = new xs:boolean($isObsolete);
    }

    public function getIsObsolete()
    {
        return (!$this->isObsolete) ?: $this->isObsolete->value();
    }

    public function setProfile($profile)
    {
        $profile and $this->profile = new SignalingAddressType($profile);
    }

    public function getProfile()
    {
        return (!$this->profile) ?: $this->profile->value();
    }

    public function setWebBasedConfigURL($webBasedConfigURL)
    {
        $webBasedConfigURL and $this->webBasedConfigURL = new WebBasedConfigURL($webBasedConfigURL);
    }

    public function getWebBasedConfigURL()
    {
        return (!$this->webBasedConfigURL) ?: $this->webBasedConfigURL->value();
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
        $cpeDeviceOptions and $this->cpeDeviceOptions = new CPEDeviceOptionsRead16sp1($cpeDeviceOptions);
    }

    public function getCpeDeviceOptions()
    {
        return (!$this->cpeDeviceOptions) ?: $this->cpeDeviceOptions->value();
    }

    public function setProtocolChoice($protocolChoice)
    {
        $protocolChoice and $this->protocolChoice = new AccessDeviceProtocol($protocolChoice);
    }

    public function getProtocolChoice()
    {
        return (!$this->protocolChoice) ?: $this->protocolChoice->value();
    }

    public function setIsIpAddressOptional($isIpAddressOptional)
    {
        $isIpAddressOptional and $this->isIpAddressOptional = new xs:boolean($isIpAddressOptional);
    }

    public function getIsIpAddressOptional()
    {
        return (!$this->isIpAddressOptional) ?: $this->isIpAddressOptional->value();
    }

    public function setUseDomain($useDomain)
    {
        $useDomain and $this->useDomain = new xs:boolean($useDomain);
    }

    public function getUseDomain()
    {
        return (!$this->useDomain) ?: $this->useDomain->value();
    }

    public function setIsMobilityManagerDevice($isMobilityManagerDevice)
    {
        $isMobilityManagerDevice and $this->isMobilityManagerDevice = new xs:boolean($isMobilityManagerDevice);
    }

    public function getIsMobilityManagerDevice()
    {
        return (!$this->isMobilityManagerDevice) ?: $this->isMobilityManagerDevice->value();
    }
}
