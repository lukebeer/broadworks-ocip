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
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServicePreferredCarrier\SystemPreferredCarrierAddResponse;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Add a carrier to the system.
 *         More than one carrier may be assigned to each country code.
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class SystemPreferredCarrierAddRequest extends ComplexType implements ComplexInterface
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
         $cic,
         $countryCode,
         $isIntraLata,
         $isInterLata,
         $isInternational
    ) {
        $this->setCarrier($carrier);
        $this->setCic($cic);
        $this->setCountryCode($countryCode);
        $this->setIsIntraLata($isIntraLata);
        $this->setIsInterLata($isInterLata);
        $this->setIsInternational($isInternational);
    }

    /**
     * @return SystemPreferredCarrierAddResponse
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
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
        return (!$this->isIntraLata) ?: $this->isIntraLata;
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
        return (!$this->isInterLata) ?: $this->isInterLata;
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
        return (!$this->isInternational) ?: $this->isInternational;
    }
}
