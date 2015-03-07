<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServicePreferredCarrier; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServicePreferredCarrier\PreferredCarrierIdCode;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\CountryCode;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Response to a SystemPreferredCarrierGetRequest.
 *         Contains the attributes of a carrier.
 */
class SystemPreferredCarrierGetResponse extends ComplexType implements ComplexInterface
{
    public    $name             = __CLASS__;
    protected $cic              = null;
    protected $countryCode      = null;
    protected $isIntraLata      = null;
    protected $isInterLata      = null;
    protected $isInternational  = null;


    public function setCic($cic = null)
    {
        $this->cic = ($cic InstanceOf PreferredCarrierIdCode)
             ? $cic
             : new PreferredCarrierIdCode($cic);
    }

    public function getCic()
    {
        return (!$this->cic) ?: $this->cic->value();
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

    public function setIsIntraLata(xs:boolean $isIntraLata = null)
    {
    }

    public function getIsIntraLata()
    {
        return (!$this->isIntraLata) ?: $this->isIntraLata->value();
    }

    public function setIsInterLata(xs:boolean $isInterLata = null)
    {
    }

    public function getIsInterLata()
    {
        return (!$this->isInterLata) ?: $this->isInterLata->value();
    }

    public function setIsInternational(xs:boolean $isInternational = null)
    {
    }

    public function getIsInternational()
    {
        return (!$this->isInternational) ?: $this->isInternational->value();
    }
}
