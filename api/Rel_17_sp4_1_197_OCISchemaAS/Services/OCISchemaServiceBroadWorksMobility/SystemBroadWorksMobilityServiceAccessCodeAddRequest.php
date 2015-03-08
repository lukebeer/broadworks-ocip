<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceBroadWorksMobility; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceBroadWorksMobility\ServiceAccessCodeDescription;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceBroadWorksMobility\ServiceAccessCode;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\CountryCode;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
     * Add a system service access code.
 *         The response is either SuccessResponse or ErrorResponse.
 */
class SystemBroadWorksMobilityServiceAccessCodeAddRequest extends ComplexType implements ComplexInterface
{
    public    $name              = __CLASS__;
    protected $serviceAccessCode = null;
    protected $countryCode       = null;
    protected $description       = null;

    public function __construct(
         $serviceAccessCode,
         $countryCode,
         $description = null
    ) {
        $this->setServiceAccessCode($serviceAccessCode);
        $this->setCountryCode($countryCode);
        $this->setDescription($description);
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
     * Service Access Code description.
     */
    public function setDescription($description = null)
    {
        $this->description = ($description InstanceOf ServiceAccessCodeDescription)
             ? $description
             : new ServiceAccessCodeDescription($description);
    }

    /**
     * Service Access Code description.
     */
    public function getDescription()
    {
        return (!$this->description) ?: $this->description->getValue();
    }
}
