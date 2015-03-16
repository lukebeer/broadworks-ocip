<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated14; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\AccessDeviceProtocol;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\SignalingAddressType;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated14\CPEDeviceOptions;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\WebBasedConfigURL;
use Broadworks_OCIP\core\Builder\Types\PrimitiveType;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Response to SystemDeviceTypeGetRequest.
 *         Replaced By: SystemDeviceTypeGetResponse14sp3
 */
class SystemDeviceTypeGetResponse extends ComplexType implements ComplexInterface
{
    public    $name = 'SystemDeviceTypeGetResponse';
    protected $isObsolete;
    protected $profile;
    protected $webBasedConfigURL;
    protected $staticRegistrationCapable;
    protected $cpeDeviceOptions;
    protected $protocolChoice;
    protected $isIpAddressOptional;
    protected $useDomain;

    /**
     * @return \Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated14\SystemDeviceTypeGetResponse $response
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
        $this->isObsolete->setName('isObsolete');
        return $this;
    }

    /**
     * 
     * @return boolean $isObsolete
     */
    public function getIsObsolete()
    {
        return ($this->isObsolete) ? $this->isObsolete->getValue() : null;
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
    public function setCpeDeviceOptions(CPEDeviceOptions $cpeDeviceOptions = null)
    {
        $this->cpeDeviceOptions = ($cpeDeviceOptions InstanceOf CPEDeviceOptions)
             ? $cpeDeviceOptions
             : new CPEDeviceOptions($cpeDeviceOptions);
        $this->cpeDeviceOptions->setName('cpeDeviceOptions');
        return $this;
    }

    /**
     * 
     * @return CPEDeviceOptions $cpeDeviceOptions
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
        $this->protocolChoice->setName('protocolChoice');
        return $this;
    }

    /**
     * 
     * @return AccessDeviceProtocol $protocolChoice
     */
    public function getProtocolChoice()
    {
        return ($this->protocolChoice) ? $this->protocolChoice->getValue() : null;
    }

    /**
     * 
     */
    public function setIsIpAddressOptional($isIpAddressOptional = null)
    {
        $this->isIpAddressOptional = new PrimitiveType($isIpAddressOptional);
        $this->isIpAddressOptional->setName('isIpAddressOptional');
        return $this;
    }

    /**
     * 
     * @return boolean $isIpAddressOptional
     */
    public function getIsIpAddressOptional()
    {
        return ($this->isIpAddressOptional) ? $this->isIpAddressOptional->getValue() : null;
    }

    /**
     * 
     */
    public function setUseDomain($useDomain = null)
    {
        $this->useDomain = new PrimitiveType($useDomain);
        $this->useDomain->setName('useDomain');
        return $this;
    }

    /**
     * 
     * @return boolean $useDomain
     */
    public function getUseDomain()
    {
        return ($this->useDomain) ? $this->useDomain->getValue() : null;
    }
}
