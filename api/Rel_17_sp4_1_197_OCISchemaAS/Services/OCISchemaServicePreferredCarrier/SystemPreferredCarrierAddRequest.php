<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServicePreferredCarrier; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\PreferredCarrierName;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\PreferredCarrierIdCode;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\CountryCode;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\xs:boolean;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Add a carrier to the system.
 *         More than one carrier may be assigned to each country code.
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class SystemPreferredCarrierAddRequest extends ComplexType implements ComplexInterface
{
    public    $name = __CLASS__;

    public function __construct(
             $carrier,
             $cic,
             $countryCode,
             $isIntraLata,
             $isInterLata,
             $isInternational
    ) {
        $this->carrier         = $carrier;
        $this->cic             = $cic;
        $this->countryCode     = new CountryCode($countryCode);
        $this->isIntraLata     = $isIntraLata;
        $this->isInterLata     = $isInterLata;
        $this->isInternational = $isInternational;
        $this->args            = func_get_args();
    }

    public function setCarrier($carrier)
    {
        $carrier and $this->carrier = new PreferredCarrierName($carrier);
    }

    public function getCarrier()
    {
        return (!$this->carrier) ?: $this->carrier->value();
    }

    public function setCic($cic)
    {
        $cic and $this->cic = new PreferredCarrierIdCode($cic);
    }

    public function getCic()
    {
        return (!$this->cic) ?: $this->cic->value();
    }

    public function setCountryCode($countryCode)
    {
        $countryCode and $this->countryCode = new CountryCode($countryCode);
    }

    public function getCountryCode()
    {
        return (!$this->countryCode) ?: $this->countryCode->value();
    }

    public function setIsIntraLata($isIntraLata)
    {
        $isIntraLata and $this->isIntraLata = new xs:boolean($isIntraLata);
    }

    public function getIsIntraLata()
    {
        return (!$this->isIntraLata) ?: $this->isIntraLata->value();
    }

    public function setIsInterLata($isInterLata)
    {
        $isInterLata and $this->isInterLata = new xs:boolean($isInterLata);
    }

    public function getIsInterLata()
    {
        return (!$this->isInterLata) ?: $this->isInterLata->value();
    }

    public function setIsInternational($isInternational)
    {
        $isInternational and $this->isInternational = new xs:boolean($isInternational);
    }

    public function getIsInternational()
    {
        return (!$this->isInternational) ?: $this->isInternational->value();
    }
}
