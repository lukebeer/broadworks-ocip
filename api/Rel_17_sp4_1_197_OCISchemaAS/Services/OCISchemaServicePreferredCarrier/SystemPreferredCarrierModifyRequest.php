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
 * Modify the attributes of a carrier.
 *         The response is either a SuccessResponse or an ErrorResponse.
 *         An ErrorResponse is returned if countryCode modification is attempted while the carrier is assigned to a service provider.
 *         An ErrorResponse is returned if an attempt to set isIntraLata to false is made while the carrier is used as an intra-LATA carrier.
 *         An ErrorResponse is returned if an attempt to set isInternational to false is made while the carrier is used as an international carrier.
 */
class SystemPreferredCarrierModifyRequest extends ComplexType implements ComplexInterface
{
    public    $elementName = 'SystemPreferredCarrierModifyRequest';
    protected $carrier;
    protected $cic;
    protected $countryCode;
    protected $isIntraLata;
    protected $isInterLata;
    protected $isInternational;

    public function __construct(
         $carrier = '',
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
     * @return mixed $response
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
        $this->carrier = ($carrier InstanceOf PreferredCarrierName)
             ? $carrier
             : new PreferredCarrierName($carrier);
        $this->carrier->setElementName('carrier');
        return $this;
    }

    /**
     * 
     * @return PreferredCarrierName $carrier
     */
    public function getCarrier()
    {
        return ($this->carrier)
            ? $this->carrier->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setCic($cic = null)
    {
        $this->cic = ($cic InstanceOf PreferredCarrierIdCode)
             ? $cic
             : new PreferredCarrierIdCode($cic);
        $this->cic->setElementName('cic');
        return $this;
    }

    /**
     * 
     * @return PreferredCarrierIdCode $cic
     */
    public function getCic()
    {
        return ($this->cic)
            ? $this->cic->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setCountryCode($countryCode = null)
    {
        $this->countryCode = ($countryCode InstanceOf CountryCode)
             ? $countryCode
             : new CountryCode($countryCode);
        $this->countryCode->setElementName('countryCode');
        return $this;
    }

    /**
     * 
     * @return CountryCode $countryCode
     */
    public function getCountryCode()
    {
        return ($this->countryCode)
            ? $this->countryCode->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setIsIntraLata($isIntraLata = null)
    {
        $this->isIntraLata = new PrimitiveType($isIntraLata);
        $this->isIntraLata->setElementName('isIntraLata');
        return $this;
    }

    /**
     * 
     * @return boolean $isIntraLata
     */
    public function getIsIntraLata()
    {
        return ($this->isIntraLata)
            ? $this->isIntraLata->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setIsInterLata($isInterLata = null)
    {
        $this->isInterLata = new PrimitiveType($isInterLata);
        $this->isInterLata->setElementName('isInterLata');
        return $this;
    }

    /**
     * 
     * @return boolean $isInterLata
     */
    public function getIsInterLata()
    {
        return ($this->isInterLata)
            ? $this->isInterLata->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setIsInternational($isInternational = null)
    {
        $this->isInternational = new PrimitiveType($isInternational);
        $this->isInternational->setElementName('isInternational');
        return $this;
    }

    /**
     * 
     * @return boolean $isInternational
     */
    public function getIsInternational()
    {
        return ($this->isInternational)
            ? $this->isInternational->getElementValue()
            : null;
    }
}
