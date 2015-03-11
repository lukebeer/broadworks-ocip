<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServicePreferredCarrier; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServicePreferredCarrier\PreferredCarrierIdCode;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServicePreferredCarrier\PreferredCarrierName;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\CountryCode;
use Broadworks_OCIP\core\Builder\Types\PrimitiveType;
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
    public    $name            = 'SystemPreferredCarrierAddRequest';
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
     * @return 
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * 
     */
    public function setCarrier($carrier = null)
    {
        if (!$carrier) return $this;
        $this->carrier = ($carrier InstanceOf PreferredCarrierName)
             ? $carrier
             : new PreferredCarrierName($carrier);
        $this->carrier->setName('carrier');
        return $this;
    }

    /**
     * 
     * @return PreferredCarrierName
     */
    public function getCarrier()
    {
        return $this->carrier->getValue();
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
