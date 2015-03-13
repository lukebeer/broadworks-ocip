<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServicePreferredCarrier; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\CountryCode;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Response to a ServiceProviderPreferredCarrierGetAvailableCountryCodeListRequest.
 *         Contains the default country code and the list of unused country codes for a service provider / enterprise.
 */
class ServiceProviderPreferredCarrierGetAvailableCountryCodeListResponse extends ComplexType implements ComplexInterface
{
    public    $name               = 'ServiceProviderPreferredCarrierGetAvailableCountryCodeListResponse';
    protected $defaultCountryCode = null;
    protected $countryCode        = null;

    /**
     * @return \Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServicePreferredCarrier\ServiceProviderPreferredCarrierGetAvailableCountryCodeListResponse $response
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
        if (!$defaultCountryCode) return $this;
        $this->defaultCountryCode = ($defaultCountryCode InstanceOf CountryCode)
             ? $defaultCountryCode
             : new CountryCode($defaultCountryCode);
        $this->defaultCountryCode->setName('defaultCountryCode');
        return $this;
    }

    /**
     * 
     * @return CountryCode $defaultCountryCode
     */
    public function getDefaultCountryCode()
    {
        return $this->defaultCountryCode->getValue();
    }

    /**
     * 
     */
    public function setCountryCode($countryCode = null)
    {
        if (!$countryCode) return $this;
        $this->countryCode = ($countryCode InstanceOf CountryCode)
             ? $countryCode
             : new CountryCode($countryCode);
        $this->countryCode->setName('countryCode');
        return $this;
    }

    /**
     * 
     * @return CountryCode $countryCode
     */
    public function getCountryCode()
    {
        return $this->countryCode->getValue();
    }
}
