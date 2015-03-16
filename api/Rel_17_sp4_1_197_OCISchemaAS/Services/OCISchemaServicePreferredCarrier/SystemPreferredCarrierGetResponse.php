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
    public    $elementName = 'SystemPreferredCarrierGetResponse';
    protected $cic;
    protected $countryCode;
    protected $isIntraLata;
    protected $isInterLata;
    protected $isInternational;

    /**
     * @return \Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServicePreferredCarrier\SystemPreferredCarrierGetResponse $response
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
