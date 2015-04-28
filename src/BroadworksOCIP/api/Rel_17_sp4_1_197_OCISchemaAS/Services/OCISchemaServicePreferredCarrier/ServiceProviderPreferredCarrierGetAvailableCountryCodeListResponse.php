<?php
/**
 * This file is part of http://github.com/LukeBeer/BroadworksOCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServicePreferredCarrier; 

use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\CountryCode;
use BroadworksOCIP\Builder\Types\ComplexInterface;
use BroadworksOCIP\Builder\Types\ComplexType;
use BroadworksOCIP\Response\ResponseOutput;
use BroadworksOCIP\Client\Client;


/**
 * Response to a ServiceProviderPreferredCarrierGetAvailableCountryCodeListRequest.
 *         Contains the default country code and the list of unused country codes for a service provider / enterprise.
 */
class ServiceProviderPreferredCarrierGetAvailableCountryCodeListResponse extends ComplexType implements ComplexInterface
{
    public    $elementName = 'ServiceProviderPreferredCarrierGetAvailableCountryCodeListResponse';
    protected $defaultCountryCode;
    protected $countryCode;

    /**
     * @return \BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServicePreferredCarrier\ServiceProviderPreferredCarrierGetAvailableCountryCodeListResponse $response
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * 
     */
    public function setDefaultCountryCode($defaultCountryCode = null)
    {
        $this->defaultCountryCode = ($defaultCountryCode InstanceOf CountryCode)
             ? $defaultCountryCode
             : new CountryCode($defaultCountryCode);
        $this->defaultCountryCode->setElementName('defaultCountryCode');
        return $this;
    }

    /**
     * 
     * @return CountryCode $defaultCountryCode
     */
    public function getDefaultCountryCode()
    {
        return ($this->defaultCountryCode)
            ? $this->defaultCountryCode->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setCountryCode($countryCode = null)
    {
        $this->countryCode = ($countryCode InstanceOf CountryCode)
             ? $countryCode
             : new CountryCode($countryCode);
        $this->countryCode->setElementName('countryCode');
        return $this;
    }

    /**
     * 
     * @return CountryCode $countryCode
     */
    public function getCountryCode()
    {
        return ($this->countryCode)
            ? $this->countryCode->getElementValue()
            : null;
    }
}
