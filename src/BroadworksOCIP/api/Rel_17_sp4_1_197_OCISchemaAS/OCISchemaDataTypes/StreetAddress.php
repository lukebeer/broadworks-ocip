<?php
/**
 * This file is part of http://github.com/LukeBeer/BroadworksOCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes; 

use BroadworksOCIP\Builder\Restrictions\MaxLength;
use BroadworksOCIP\Builder\Restrictions\MinLength;
use BroadworksOCIP\Builder\Types\SimpleContent;
use BroadworksOCIP\Builder\Types\ComplexInterface;
use BroadworksOCIP\Builder\Types\ComplexType;
use BroadworksOCIP\Response\ResponseOutput;
use BroadworksOCIP\Client\Client;


/**
 * Street address information.
 */
class StreetAddress extends ComplexType implements ComplexInterface
{
    public    $elementName = 'StreetAddress';
    protected $addressLine1;
    protected $addressLine2;
    protected $city;
    protected $stateOrProvince;
    protected $stateOrProvinceDisplayName;
    protected $zipOrPostalCode;
    protected $country;

    public function __construct(
         $addressLine1 = null,
         $addressLine2 = null,
         $city = null,
         $stateOrProvince = null,
         $stateOrProvinceDisplayName = null,
         $zipOrPostalCode = null,
         $country = null
    ) {
        $this->setAddressLine1($addressLine1);
        $this->setAddressLine2($addressLine2);
        $this->setCity($city);
        $this->setStateOrProvince($stateOrProvince);
        $this->setStateOrProvinceDisplayName($stateOrProvinceDisplayName);
        $this->setZipOrPostalCode($zipOrPostalCode);
        $this->setCountry($country);
    }

    /**
     * @return mixed $response
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * 
     */
    public function setAddressLine1($addressLine1 = null)
    {
        $this->addressLine1 = new SimpleContent($addressLine1);
        $this->addressLine1->addRestriction(new MinLength("1"));
        $this->addressLine1->addRestriction(new MaxLength("80"));
        $this->addressLine1->setElementName('addressLine1');
        return $this;
    }

    /**
     * 
     * @return SimpleContent $addressLine1
     */
    public function getAddressLine1()
    {
        return ($this->addressLine1)
            ? $this->addressLine1->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setAddressLine2($addressLine2 = null)
    {
        $this->addressLine2 = new SimpleContent($addressLine2);
        $this->addressLine2->addRestriction(new MinLength("1"));
        $this->addressLine2->addRestriction(new MaxLength("80"));
        $this->addressLine2->setElementName('addressLine2');
        return $this;
    }

    /**
     * 
     * @return SimpleContent $addressLine2
     */
    public function getAddressLine2()
    {
        return ($this->addressLine2)
            ? $this->addressLine2->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setCity($city = null)
    {
        $this->city = new SimpleContent($city);
        $this->city->addRestriction(new MinLength("1"));
        $this->city->addRestriction(new MaxLength("50"));
        $this->city->setElementName('city');
        return $this;
    }

    /**
     * 
     * @return SimpleContent $city
     */
    public function getCity()
    {
        return ($this->city)
            ? $this->city->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setStateOrProvince($stateOrProvince = null)
    {
        $this->stateOrProvince = new SimpleContent($stateOrProvince);
        $this->stateOrProvince->addRestriction(new MinLength("1"));
        $this->stateOrProvince->addRestriction(new MaxLength("50"));
        $this->stateOrProvince->setElementName('stateOrProvince');
        return $this;
    }

    /**
     * 
     * @return SimpleContent $stateOrProvince
     */
    public function getStateOrProvince()
    {
        return ($this->stateOrProvince)
            ? $this->stateOrProvince->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setStateOrProvinceDisplayName($stateOrProvinceDisplayName = null)
    {
        $this->stateOrProvinceDisplayName = new SimpleContent($stateOrProvinceDisplayName);
        $this->stateOrProvinceDisplayName->addRestriction(new MinLength("1"));
        $this->stateOrProvinceDisplayName->addRestriction(new MaxLength("50"));
        $this->stateOrProvinceDisplayName->setElementName('stateOrProvinceDisplayName');
        return $this;
    }

    /**
     * 
     * @return SimpleContent $stateOrProvinceDisplayName
     */
    public function getStateOrProvinceDisplayName()
    {
        return ($this->stateOrProvinceDisplayName)
            ? $this->stateOrProvinceDisplayName->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setZipOrPostalCode($zipOrPostalCode = null)
    {
        $this->zipOrPostalCode = new SimpleContent($zipOrPostalCode);
        $this->zipOrPostalCode->addRestriction(new MinLength("1"));
        $this->zipOrPostalCode->addRestriction(new MaxLength("50"));
        $this->zipOrPostalCode->setElementName('zipOrPostalCode');
        return $this;
    }

    /**
     * 
     * @return SimpleContent $zipOrPostalCode
     */
    public function getZipOrPostalCode()
    {
        return ($this->zipOrPostalCode)
            ? $this->zipOrPostalCode->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setCountry($country = null)
    {
        $this->country = new SimpleContent($country);
        $this->country->addRestriction(new MinLength("1"));
        $this->country->addRestriction(new MaxLength("50"));
        $this->country->setElementName('country');
        return $this;
    }

    /**
     * 
     * @return SimpleContent $country
     */
    public function getCountry()
    {
        return ($this->country)
            ? $this->country->getElementValue()
            : null;
    }
}
