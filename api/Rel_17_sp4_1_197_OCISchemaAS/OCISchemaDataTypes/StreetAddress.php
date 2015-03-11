<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes; 

use Broadworks_OCIP\core\Builder\Restrictions\MaxLength;

use Broadworks_OCIP\core\Builder\Restrictions\MinLength;

use Broadworks_OCIP\core\Builder\Types\SimpleContent;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\StreetAddress;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Street address information.
 */
class StreetAddress extends ComplexType implements ComplexInterface
{
    public    $responseType               = 'Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\StreetAddress';
    public    $name                       = 'StreetAddress';
    protected $addressLine1               = null;
    protected $addressLine2               = null;
    protected $city                       = null;
    protected $stateOrProvince            = null;
    protected $stateOrProvinceDisplayName = null;
    protected $zipOrPostalCode            = null;
    protected $country                    = null;

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
     * @return StreetAddress
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
        if (!$addressLine1) return $this;
        $this->addressLine1 = new SimpleContent($addressLine1);
        $this->addressLine1->addRestriction(new MinLength("1"));
        $this->addressLine1->addRestriction(new MaxLength("80"));
        $this->addressLine1->setName('addressLine1');
        return $this;
    }

    /**
     * 
     * @return SimpleContent
     */
    public function getAddressLine1()
    {
        return $this->addressLine1->getValue();
    }

    /**
     * 
     */
    public function setAddressLine2($addressLine2 = null)
    {
        if (!$addressLine2) return $this;
        $this->addressLine2 = new SimpleContent($addressLine2);
        $this->addressLine2->addRestriction(new MinLength("1"));
        $this->addressLine2->addRestriction(new MaxLength("80"));
        $this->addressLine2->setName('addressLine2');
        return $this;
    }

    /**
     * 
     * @return SimpleContent
     */
    public function getAddressLine2()
    {
        return $this->addressLine2->getValue();
    }

    /**
     * 
     */
    public function setCity($city = null)
    {
        if (!$city) return $this;
        $this->city = new SimpleContent($city);
        $this->city->addRestriction(new MinLength("1"));
        $this->city->addRestriction(new MaxLength("50"));
        $this->city->setName('city');
        return $this;
    }

    /**
     * 
     * @return SimpleContent
     */
    public function getCity()
    {
        return $this->city->getValue();
    }

    /**
     * 
     */
    public function setStateOrProvince($stateOrProvince = null)
    {
        if (!$stateOrProvince) return $this;
        $this->stateOrProvince = new SimpleContent($stateOrProvince);
        $this->stateOrProvince->addRestriction(new MinLength("1"));
        $this->stateOrProvince->addRestriction(new MaxLength("50"));
        $this->stateOrProvince->setName('stateOrProvince');
        return $this;
    }

    /**
     * 
     * @return SimpleContent
     */
    public function getStateOrProvince()
    {
        return $this->stateOrProvince->getValue();
    }

    /**
     * 
     */
    public function setStateOrProvinceDisplayName($stateOrProvinceDisplayName = null)
    {
        if (!$stateOrProvinceDisplayName) return $this;
        $this->stateOrProvinceDisplayName = new SimpleContent($stateOrProvinceDisplayName);
        $this->stateOrProvinceDisplayName->addRestriction(new MinLength("1"));
        $this->stateOrProvinceDisplayName->addRestriction(new MaxLength("50"));
        $this->stateOrProvinceDisplayName->setName('stateOrProvinceDisplayName');
        return $this;
    }

    /**
     * 
     * @return SimpleContent
     */
    public function getStateOrProvinceDisplayName()
    {
        return $this->stateOrProvinceDisplayName->getValue();
    }

    /**
     * 
     */
    public function setZipOrPostalCode($zipOrPostalCode = null)
    {
        if (!$zipOrPostalCode) return $this;
        $this->zipOrPostalCode = new SimpleContent($zipOrPostalCode);
        $this->zipOrPostalCode->addRestriction(new MinLength("1"));
        $this->zipOrPostalCode->addRestriction(new MaxLength("50"));
        $this->zipOrPostalCode->setName('zipOrPostalCode');
        return $this;
    }

    /**
     * 
     * @return SimpleContent
     */
    public function getZipOrPostalCode()
    {
        return $this->zipOrPostalCode->getValue();
    }

    /**
     * 
     */
    public function setCountry($country = null)
    {
        if (!$country) return $this;
        $this->country = new SimpleContent($country);
        $this->country->addRestriction(new MinLength("1"));
        $this->country->addRestriction(new MaxLength("50"));
        $this->country->setName('country');
        return $this;
    }

    /**
     * 
     * @return SimpleContent
     */
    public function getCountry()
    {
        return $this->country->getValue();
    }
}
