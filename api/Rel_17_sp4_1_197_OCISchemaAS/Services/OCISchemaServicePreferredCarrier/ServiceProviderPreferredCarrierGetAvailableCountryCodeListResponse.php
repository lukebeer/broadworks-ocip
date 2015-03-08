<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServicePreferredCarrier; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\CountryCode;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
     * Response to a ServiceProviderPreferredCarrierGetAvailableCountryCodeListRequest.
 *         Contains the default country code and the list of unused country codes for a service provider / enterprise.
 */
class ServiceProviderPreferredCarrierGetAvailableCountryCodeListResponse extends ComplexType implements ComplexInterface
{
    const     RESPONSE_TYPE       = 'Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServicePreferredCarrier\ServiceProviderPreferredCarrierGetAvailableCountryCodeListResponse';
    public    $name               = __CLASS__;
    protected $defaultCountryCode = null;
    protected $countryCode        = null;


    /**
     * Country dialing code.
     */
    public function setDefaultCountryCode($defaultCountryCode = null)
    {
        $this->defaultCountryCode = ($defaultCountryCode InstanceOf CountryCode)
             ? $defaultCountryCode
             : new CountryCode($defaultCountryCode);
    }

    /**
     * Country dialing code.
     */
    public function getDefaultCountryCode()
    {
        return (!$this->defaultCountryCode) ?: $this->defaultCountryCode->getValue();
    }

    /**
     * Country dialing code.
     */
    public function setCountryCode($countryCode = null)
    {
        $this->countryCode = ($countryCode InstanceOf CountryCode)
             ? $countryCode
             : new CountryCode($countryCode);
    }

    /**
     * Country dialing code.
     */
    public function getCountryCode()
    {
        return (!$this->countryCode) ?: $this->countryCode->getValue();
    }
}
