<?php
/**
 * This file is part of http://github.com/LukeBeer/BroadworksOCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServicePreferredCarrier; 

use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServicePreferredCarrier\PreferredCarrierName;
use BroadworksOCIP\Builder\Types\ComplexInterface;
use BroadworksOCIP\Builder\Types\ComplexType;
use BroadworksOCIP\Response\ResponseOutput;
use BroadworksOCIP\Client\Client;


/**
 * Response to a ServiceProviderPreferredCarrierGetCarrierListRequest.
 *         Contains the lists of carriers for a specified country code for a service provider / enterprise.
 */
class ServiceProviderPreferredCarrierGetCarrierListResponse extends ComplexType implements ComplexInterface
{
    public    $elementName = 'ServiceProviderPreferredCarrierGetCarrierListResponse';
    protected $intraLataCarrier;
    protected $interLataCarrier;
    protected $internationalCarrier;

    /**
     * @return \BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServicePreferredCarrier\ServiceProviderPreferredCarrierGetCarrierListResponse $response
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * 
     */
    public function setIntraLataCarrier($intraLataCarrier = null)
    {
        $this->intraLataCarrier = ($intraLataCarrier InstanceOf PreferredCarrierName)
             ? $intraLataCarrier
             : new PreferredCarrierName($intraLataCarrier);
        $this->intraLataCarrier->setElementName('intraLataCarrier');
        return $this;
    }

    /**
     * 
     * @return PreferredCarrierName $intraLataCarrier
     */
    public function getIntraLataCarrier()
    {
        return ($this->intraLataCarrier)
            ? $this->intraLataCarrier->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setInterLataCarrier($interLataCarrier = null)
    {
        $this->interLataCarrier = ($interLataCarrier InstanceOf PreferredCarrierName)
             ? $interLataCarrier
             : new PreferredCarrierName($interLataCarrier);
        $this->interLataCarrier->setElementName('interLataCarrier');
        return $this;
    }

    /**
     * 
     * @return PreferredCarrierName $interLataCarrier
     */
    public function getInterLataCarrier()
    {
        return ($this->interLataCarrier)
            ? $this->interLataCarrier->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setInternationalCarrier($internationalCarrier = null)
    {
        $this->internationalCarrier = ($internationalCarrier InstanceOf PreferredCarrierName)
             ? $internationalCarrier
             : new PreferredCarrierName($internationalCarrier);
        $this->internationalCarrier->setElementName('internationalCarrier');
        return $this;
    }

    /**
     * 
     * @return PreferredCarrierName $internationalCarrier
     */
    public function getInternationalCarrier()
    {
        return ($this->internationalCarrier)
            ? $this->internationalCarrier->getElementValue()
            : null;
    }
}
