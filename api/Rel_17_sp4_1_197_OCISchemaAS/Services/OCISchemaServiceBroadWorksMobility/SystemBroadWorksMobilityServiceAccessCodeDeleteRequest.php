<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceBroadWorksMobility; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceBroadWorksMobility\ServiceAccessCode;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\CountryCode;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
     * Delete a system service access code.
 *         The response is either SuccessResponse or ErrorResponse.
 */
class SystemBroadWorksMobilityServiceAccessCodeDeleteRequest extends ComplexType implements ComplexInterface
{
    public    $name              = __CLASS__;
    protected $countryCode       = null;
    protected $serviceAccessCode = null;

    public function __construct(
         $countryCode,
         $serviceAccessCode
    ) {
        $this->setCountryCode($countryCode);
        $this->setServiceAccessCode($serviceAccessCode);
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

    /**
     * The Service Access Code composed of DTMF digits 0-9, # or *.
     */
    public function setServiceAccessCode($serviceAccessCode = null)
    {
        $this->serviceAccessCode = ($serviceAccessCode InstanceOf ServiceAccessCode)
             ? $serviceAccessCode
             : new ServiceAccessCode($serviceAccessCode);
    }

    /**
     * The Service Access Code composed of DTMF digits 0-9, # or *.
     */
    public function getServiceAccessCode()
    {
        return (!$this->serviceAccessCode) ?: $this->serviceAccessCode->getValue();
    }
}
