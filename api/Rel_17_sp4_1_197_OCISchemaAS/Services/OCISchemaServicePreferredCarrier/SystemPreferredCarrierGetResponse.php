<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServicePreferredCarrier; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServicePreferredCarrier\PreferredCarrierIdCode;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\CountryCode;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServicePreferredCarrier\SystemPreferredCarrierGetResponse;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Response to a SystemPreferredCarrierGetRequest.
 *         Contains the attributes of a carrier.
 */
class SystemPreferredCarrierGetResponse extends ComplexType implements ComplexInterface
{
    public    $name            = __CLASS__;
    protected $cic             = null;
    protected $countryCode     = null;
    protected $isIntraLata     = null;
    protected $isInterLata     = null;
    protected $isInternational = null;

    /**
     * @return SystemPreferredCarrierGetResponse
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
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
