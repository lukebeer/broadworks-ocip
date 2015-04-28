<?php
/**
 * This file is part of http://github.com/LukeBeer/BroadworksOCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaEnterprise; 

use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\BroadWorksMobileManagerHomeZoneNetworkCountryCode;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\BroadWorksMobileManagerHomeZoneMobileCountryCode;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\BroadWorksMobileManagerHomeZoneLocationAreaCode;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\BroadWorksMobileManagerHomeZoneCellId;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\BroadWorksMobileManagerDomainName;
use BroadworksOCIP\Builder\Types\ComplexInterface;
use BroadworksOCIP\Builder\Types\ComplexType;
use BroadworksOCIP\Response\ResponseOutput;
use BroadworksOCIP\Client\Client;


/**
 * Response to the EnterpriseBroadWorksMobileManagerGetHomeZoneRequest
 */
class EnterpriseBroadWorksMobileManagerGetHomeZoneResponse extends ComplexType implements ComplexInterface
{
    public    $elementName = 'EnterpriseBroadWorksMobileManagerGetHomeZoneResponse';
    protected $homeZoneDomainName;
    protected $mobileCountryCode;
    protected $mobileNetworkCode;
    protected $locationAreaCode;
    protected $cellIdentity;

    /**
     * @return \BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaEnterprise\EnterpriseBroadWorksMobileManagerGetHomeZoneResponse $response
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * 
     */
    public function setHomeZoneDomainName($homeZoneDomainName = null)
    {
        $this->homeZoneDomainName = ($homeZoneDomainName InstanceOf BroadWorksMobileManagerDomainName)
             ? $homeZoneDomainName
             : new BroadWorksMobileManagerDomainName($homeZoneDomainName);
        $this->homeZoneDomainName->setElementName('homeZoneDomainName');
        return $this;
    }

    /**
     * 
     * @return BroadWorksMobileManagerDomainName $homeZoneDomainName
     */
    public function getHomeZoneDomainName()
    {
        return ($this->homeZoneDomainName)
            ? $this->homeZoneDomainName->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setMobileCountryCode($mobileCountryCode = null)
    {
        $this->mobileCountryCode = ($mobileCountryCode InstanceOf BroadWorksMobileManagerHomeZoneMobileCountryCode)
             ? $mobileCountryCode
             : new BroadWorksMobileManagerHomeZoneMobileCountryCode($mobileCountryCode);
        $this->mobileCountryCode->setElementName('mobileCountryCode');
        return $this;
    }

    /**
     * 
     * @return BroadWorksMobileManagerHomeZoneMobileCountryCode $mobileCountryCode
     */
    public function getMobileCountryCode()
    {
        return ($this->mobileCountryCode)
            ? $this->mobileCountryCode->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setMobileNetworkCode($mobileNetworkCode = null)
    {
        $this->mobileNetworkCode = ($mobileNetworkCode InstanceOf BroadWorksMobileManagerHomeZoneNetworkCountryCode)
             ? $mobileNetworkCode
             : new BroadWorksMobileManagerHomeZoneNetworkCountryCode($mobileNetworkCode);
        $this->mobileNetworkCode->setElementName('mobileNetworkCode');
        return $this;
    }

    /**
     * 
     * @return BroadWorksMobileManagerHomeZoneNetworkCountryCode $mobileNetworkCode
     */
    public function getMobileNetworkCode()
    {
        return ($this->mobileNetworkCode)
            ? $this->mobileNetworkCode->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setLocationAreaCode($locationAreaCode = null)
    {
        $this->locationAreaCode = ($locationAreaCode InstanceOf BroadWorksMobileManagerHomeZoneLocationAreaCode)
             ? $locationAreaCode
             : new BroadWorksMobileManagerHomeZoneLocationAreaCode($locationAreaCode);
        $this->locationAreaCode->setElementName('locationAreaCode');
        return $this;
    }

    /**
     * 
     * @return BroadWorksMobileManagerHomeZoneLocationAreaCode $locationAreaCode
     */
    public function getLocationAreaCode()
    {
        return ($this->locationAreaCode)
            ? $this->locationAreaCode->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setCellIdentity($cellIdentity = null)
    {
        $this->cellIdentity = ($cellIdentity InstanceOf BroadWorksMobileManagerHomeZoneCellId)
             ? $cellIdentity
             : new BroadWorksMobileManagerHomeZoneCellId($cellIdentity);
        $this->cellIdentity->setElementName('cellIdentity');
        return $this;
    }

    /**
     * 
     * @return BroadWorksMobileManagerHomeZoneCellId $cellIdentity
     */
    public function getCellIdentity()
    {
        return ($this->cellIdentity)
            ? $this->cellIdentity->getElementValue()
            : null;
    }
}
