<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated16; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated16\CPEDeviceOptionsRead16;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\AccessDeviceProtocol;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\SignalingAddressType;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\WebBasedConfigURL;
use Broadworks_OCIP\core\Builder\Types\PrimitiveType;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Response to SystemDeviceTypeGetRequest16.
 *         Replaced by: SystemDeviceTypeGetResponse16sp1
 */
class SystemDeviceTypeGetResponse16 extends ComplexType implements ComplexInterface
{
    public    $name                      = 'SystemDeviceTypeGetResponse16';
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
     * @return SystemDeviceTypeGetResponse16
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
        if (!$isObsolete) return $this;
        $this->isObsolete = new PrimitiveType($isObsolete);
        $this->isObsolete->setName('isObsolete');
        return $this;
    }

    /**
     * 
     * @return xs:boolean
     */
    public function getIsObsolete()
    {
        return $this->isObsolete->getValue();
    }

    /**
     * 
     */
    public function setProfile($profile = null)
    {
        if (!$profile) return $this;
        $this->profile = ($profile InstanceOf SignalingAddressType)
             ? $profile
             : new SignalingAddressType($profile);
        $this->profile->setName('profile');
        return $this;
    }

    /**
     * 
     * @return SignalingAddressType
     */
    public function getProfile()
    {
        return $this->profile->getValue();
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
     * @return WebBasedConfigURL
     */
    public function getWebBasedConfigURL()
    {
        return $this->webBasedConfigURL->getValue();
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
     * @return xs:boolean
     */
    public function getStaticRegistrationCapable()
    {
        return $this->staticRegistrationCapable->getValue();
    }

    /**
     * 
     */
    public function setCpeDeviceOptions(CPEDeviceOptionsRead16 $cpeDeviceOptions = null)
    {
        if (!$cpeDeviceOptions) return $this;
        $this->cpeDeviceOptions = $cpeDeviceOptions;
        $this->cpeDeviceOptions->setName('cpeDeviceOptions');
        return $this;
    }

    /**
     * 
     * @return CPEDeviceOptionsRead16
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
        if (!$protocolChoice) return $this;
        $this->protocolChoice = ($protocolChoice InstanceOf AccessDeviceProtocol)
             ? $protocolChoice
             : new AccessDeviceProtocol($protocolChoice);
        $this->protocolChoice->setName('protocolChoice');
        return $this;
    }

    /**
     * 
     * @return AccessDeviceProtocol
     */
    public function getProtocolChoice()
    {
        return $this->protocolChoice->getValue();
    }

    /**
     * 
     */
    public function setIsIpAddressOptional($isIpAddressOptional = null)
    {
        if (!$isIpAddressOptional) return $this;
        $this->isIpAddressOptional = new PrimitiveType($isIpAddressOptional);
        $this->isIpAddressOptional->setName('isIpAddressOptional');
        return $this;
    }

    /**
     * 
     * @return xs:boolean
     */
    public function getIsIpAddressOptional()
    {
        return $this->isIpAddressOptional->getValue();
    }

    /**
     * 
     */
    public function setUseDomain($useDomain = null)
    {
        if (!$useDomain) return $this;
        $this->useDomain = new PrimitiveType($useDomain);
        $this->useDomain->setName('useDomain');
        return $this;
    }

    /**
     * 
     * @return xs:boolean
     */
    public function getUseDomain()
    {
        return $this->useDomain->getValue();
    }

    /**
     * 
     */
    public function setIsMobilityManagerDevice($isMobilityManagerDevice = null)
    {
        if (!$isMobilityManagerDevice) return $this;
        $this->isMobilityManagerDevice = new PrimitiveType($isMobilityManagerDevice);
        $this->isMobilityManagerDevice->setName('isMobilityManagerDevice');
        return $this;
    }

    /**
     * 
     * @return xs:boolean
     */
    public function getIsMobilityManagerDevice()
    {
        return $this->isMobilityManagerDevice->getValue();
    }
}
