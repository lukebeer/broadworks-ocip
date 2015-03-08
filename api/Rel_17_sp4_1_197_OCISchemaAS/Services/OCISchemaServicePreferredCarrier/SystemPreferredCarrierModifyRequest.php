<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServicePreferredCarrier; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServicePreferredCarrier\PreferredCarrierIdCode;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServicePreferredCarrier\PreferredCarrierName;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\CountryCode;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
     * Modify the attributes of a carrier.
 *         The response is either a SuccessResponse or an ErrorResponse.
 *         An ErrorResponse is returned if countryCode modification is attempted while the carrier is assigned to a service provider.
 *         An ErrorResponse is returned if an attempt to set isIntraLata to false is made while the carrier is used as an intra-LATA carrier.
 *         An ErrorResponse is returned if an attempt to set isInternational to false is made while the carrier is used as an international carrier.
 */
class SystemPreferredCarrierModifyRequest extends ComplexType implements ComplexInterface
{
    public    $name            = __CLASS__;
    protected $carrier         = null;
    protected $cic             = null;
    protected $countryCode     = null;
    protected $isIntraLata     = null;
    protected $isInterLata     = null;
    protected $isInternational = null;

    public function __construct(
         $carrier,
         $cic = null,
         $countryCode = null,
         $isIntraLata = null,
         $isInterLata = null,
         $isInternational = null
    ) {
        $this->setCarrier($carrier);
        $this->setCic($cic);
        $this->setCountryCode($countryCode);
        $this->setIsIntraLata($isIntraLata);
        $this->setIsInterLata($isInterLata);
        $this->setIsInternational($isInternational);
    }

    /**
     * Uniquely identifies a carrier.
     */
    public function setCarrier($carrier = null)
    {
        $this->carrier = ($carrier InstanceOf PreferredCarrierName)
             ? $carrier
             : new PreferredCarrierName($carrier);
    }

    /**
     * Uniquely identifies a carrier.
     */
    public function getCarrier()
    {
        return (!$this->carrier) ?: $this->carrier->getValue();
    }

    /**
     * A digit code used by network signaling to identifiy a carrier.
     */
    public function setCic($cic = null)
    {
        $this->cic = ($cic InstanceOf PreferredCarrierIdCode)
             ? $cic
             : new PreferredCarrierIdCode($cic);
    }

    /**
     * A digit code used by network signaling to identifiy a carrier.
     */
    public function getCic()
    {
        return (!$this->cic) ?: $this->cic->getValue();
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
     * 
     */
    public function setIsIntraLata($isIntraLata = null)
    {
        $this->isIntraLata = (boolean) $isIntraLata;
    }

    /**
     * 
     */
    public function getIsIntraLata()
    {
        return (!$this->isIntraLata) ?: $this->isIntraLata->getValue();
    }

    /**
     * 
     */
    public function setIsInterLata($isInterLata = null)
    {
        $this->isInterLata = (boolean) $isInterLata;
    }

    /**
     * 
     */
    public function getIsInterLata()
    {
        return (!$this->isInterLata) ?: $this->isInterLata->getValue();
    }

    /**
     * 
     */
    public function setIsInternational($isInternational = null)
    {
        $this->isInternational = (boolean) $isInternational;
    }

    /**
     * 
     */
    public function getIsInternational()
    {
        return (!$this->isInternational) ?: $this->isInternational->getValue();
    }
}
