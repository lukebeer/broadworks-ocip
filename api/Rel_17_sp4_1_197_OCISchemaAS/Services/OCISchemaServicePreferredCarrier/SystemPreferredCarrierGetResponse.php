<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServicePreferredCarrier; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServicePreferredCarrier\PreferredCarrierIdCode;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\CountryCode;
use Broadworks_OCIP\core\Builder\Types\PrimitiveType;
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
    public    $name            = 'SystemPreferredCarrierGetResponse';
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
     * 
     */
    public function setCic($cic = null)
    {
        if (!$cic) return $this;
        $this->cic = ($cic InstanceOf PreferredCarrierIdCode)
             ? $cic
             : new PreferredCarrierIdCode($cic);
        $this->cic->setName('cic');
        return $this;
    }

    /**
     * 
     * @return PreferredCarrierIdCode
     */
    public function getCic()
    {
        return $this->cic->getValue();
    }

    /**
     * 
     */
    public function setCountryCode($countryCode = null)
    {
        if (!$countryCode) return $this;
        $this->countryCode = ($countryCode InstanceOf CountryCode)
             ? $countryCode
             : new CountryCode($countryCode);
        $this->countryCode->setName('countryCode');
        return $this;
    }

    /**
     * 
     * @return CountryCode
     */
    public function getCountryCode()
    {
        return $this->countryCode->getValue();
    }

    /**
     * 
     */
    public function setIsIntraLata($isIntraLata = null)
    {
        if (!$isIntraLata) return $this;
        $this->isIntraLata = new PrimitiveType($isIntraLata);
        $this->isIntraLata->setName('isIntraLata');
        return $this;
    }

    /**
     * 
     * @return xs:boolean
     */
    public function getIsIntraLata()
    {
        return $this->isIntraLata->getValue();
    }

    /**
     * 
     */
    public function setIsInterLata($isInterLata = null)
    {
        if (!$isInterLata) return $this;
        $this->isInterLata = new PrimitiveType($isInterLata);
        $this->isInterLata->setName('isInterLata');
        return $this;
    }

    /**
     * 
     * @return xs:boolean
     */
    public function getIsInterLata()
    {
        return $this->isInterLata->getValue();
    }

    /**
     * 
     */
    public function setIsInternational($isInternational = null)
    {
        if (!$isInternational) return $this;
        $this->isInternational = new PrimitiveType($isInternational);
        $this->isInternational->setName('isInternational');
        return $this;
    }

    /**
     * 
     * @return xs:boolean
     */
    public function getIsInternational()
    {
        return $this->isInternational->getValue();
    }
}
