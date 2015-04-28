<?php
/**
 * This file is part of http://github.com/LukeBeer/BroadworksOCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated14; 

use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\AccessDeviceProtocol;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\SignalingAddressType;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated14\CPEDeviceOptions;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\WebBasedConfigURL;
use BroadworksOCIP\Builder\Types\PrimitiveType;
use BroadworksOCIP\Builder\Types\ComplexInterface;
use BroadworksOCIP\Builder\Types\ComplexType;
use BroadworksOCIP\Response\ResponseOutput;
use BroadworksOCIP\Client\Client;


/**
 * Response to SystemDeviceTypeGetRequest.
 *         Replaced By: SystemDeviceTypeGetResponse14sp3
 */
class SystemDeviceTypeGetResponse extends ComplexType implements ComplexInterface
{
    public    $elementName = 'SystemDeviceTypeGetResponse';
    protected $isObsolete;
    protected $profile;
    protected $webBasedConfigURL;
    protected $staticRegistrationCapable;
    protected $cpeDeviceOptions;
    protected $protocolChoice;
    protected $isIpAddressOptional;
    protected $useDomain;

    /**
     * @return \BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated14\SystemDeviceTypeGetResponse $response
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
    public function setCpeDeviceOptions(CPEDeviceOptions $cpeDeviceOptions = null)
    {
        $this->cpeDeviceOptions = ($cpeDeviceOptions InstanceOf CPEDeviceOptions)
             ? $cpeDeviceOptions
             : new CPEDeviceOptions($cpeDeviceOptions);
        $this->cpeDeviceOptions->setElementName('cpeDeviceOptions');
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
    public function setIsIpAddressOptional($isIpAddressOptional = null)
    {
        $this->isIpAddressOptional = new PrimitiveType($isIpAddressOptional);
        $this->isIpAddressOptional->setElementName('isIpAddressOptional');
        return $this;
    }

    /**
     * 
     * @return boolean $isIpAddressOptional
     */
    public function getIsIpAddressOptional()
    {
        return ($this->isIpAddressOptional)
            ? $this->isIpAddressOptional->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setUseDomain($useDomain = null)
    {
        $this->useDomain = new PrimitiveType($useDomain);
        $this->useDomain->setElementName('useDomain');
        return $this;
    }

    /**
     * 
     * @return boolean $useDomain
     */
    public function getUseDomain()
    {
        return ($this->useDomain)
            ? $this->useDomain->getElementValue()
            : null;
    }
}
