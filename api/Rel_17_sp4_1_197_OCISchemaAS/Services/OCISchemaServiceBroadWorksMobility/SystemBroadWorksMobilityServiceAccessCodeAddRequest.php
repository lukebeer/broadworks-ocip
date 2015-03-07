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
    public    $name               = __CLASS__;
    protected $serviceAccessCode  = null;
    protected $countryCode        = null;
    protected $description        = null;

    public function __construct(
         $serviceAccessCode,
         $countryCode,
         $description = null
    ) {
        $this->setServiceAccessCode($serviceAccessCode);
        $this->setCountryCode($countryCode);
        $this->setDescription($description);
    }

    public function setServiceAccessCode($serviceAccessCode = null)
    {
        $this->serviceAccessCode = ($serviceAccessCode InstanceOf ServiceAccessCode)
             ? $serviceAccessCode
             : new ServiceAccessCode($serviceAccessCode);
    }

    public function getServiceAccessCode()
    {
        return (!$this->serviceAccessCode) ?: $this->serviceAccessCode->value();
    }

    public function setCountryCode($countryCode = null)
    {
        $this->countryCode = ($countryCode InstanceOf CountryCode)
             ? $countryCode
             : new CountryCode($countryCode);
    }

    public function getCountryCode()
    {
        return (!$this->countryCode) ?: $this->countryCode->value();
    }

    public function setDescription($description = null)
    {
        $this->description = ($description InstanceOf ServiceAccessCodeDescription)
             ? $description
             : new ServiceAccessCodeDescription($description);
    }

    public function getDescription()
    {
        return (!$this->description) ?: $this->description->value();
    }
}
