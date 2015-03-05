<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServicePreferredCarrier; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ServiceProviderId;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\CountryCode;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Delete the country code preferred carriers for a service provider or enterprise.
 *         Note that this is different from unassigning all 3 types of carriers with
 *         the ServiceProviderPreferredCarrierModifyRequest.
 *         The response is either a SuccessResponse or an ErrorResponse.
 *         An ErrorResponse will be returned if the country code preferred carriers were never added or
 *         were already deleted.
 */
class ServiceProviderPreferredCarrierDeleteRequest extends ComplexType implements ComplexInterface
{
    public    $name = __CLASS__;

    public function __construct(
             $serviceProviderId,
             $countryCode
    ) {
        $this->serviceProviderId = new ServiceProviderId($serviceProviderId);
        $this->countryCode       = new CountryCode($countryCode);
        $this->args              = func_get_args();
    }

    public function setServiceProviderId($serviceProviderId)
    {
        $serviceProviderId and $this->serviceProviderId = new ServiceProviderId($serviceProviderId);
    }

    public function getServiceProviderId()
    {
        return (!$this->serviceProviderId) ?: $this->serviceProviderId->value();
    }

    public function setCountryCode($countryCode)
    {
        $countryCode and $this->countryCode = new CountryCode($countryCode);
    }

    public function getCountryCode()
    {
        return (!$this->countryCode) ?: $this->countryCode->value();
    }
}
