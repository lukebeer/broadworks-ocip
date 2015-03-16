<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServicePreferredCarrier; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServicePreferredCarrier\PreferredCarrierName;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Response to a ServiceProviderPreferredCarrierGetRequest.
 *         Contains the currently configured carriers for a specified country code for a service provider / enterprise.
 */
class ServiceProviderPreferredCarrierGetResponse extends ComplexType implements ComplexInterface
{
    public    $name = 'ServiceProviderPreferredCarrierGetResponse';
    protected $intraLataCarrier;
    protected $interLataCarrier;
    protected $internationalCarrier;

    /**
     * @return \Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServicePreferredCarrier\ServiceProviderPreferredCarrierGetResponse $response
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
        $this->intraLataCarrier->setName('intraLataCarrier');
        return $this;
    }

    /**
     * 
     * @return PreferredCarrierName $intraLataCarrier
     */
    public function getIntraLataCarrier()
    {
        return ($this->intraLataCarrier) ? $this->intraLataCarrier->getValue() : null;
    }

    /**
     * 
     */
    public function setInterLataCarrier($interLataCarrier = null)
    {
        $this->interLataCarrier = ($interLataCarrier InstanceOf PreferredCarrierName)
             ? $interLataCarrier
             : new PreferredCarrierName($interLataCarrier);
        $this->interLataCarrier->setName('interLataCarrier');
        return $this;
    }

    /**
     * 
     * @return PreferredCarrierName $interLataCarrier
     */
    public function getInterLataCarrier()
    {
        return ($this->interLataCarrier) ? $this->interLataCarrier->getValue() : null;
    }

    /**
     * 
     */
    public function setInternationalCarrier($internationalCarrier = null)
    {
        $this->internationalCarrier = ($internationalCarrier InstanceOf PreferredCarrierName)
             ? $internationalCarrier
             : new PreferredCarrierName($internationalCarrier);
        $this->internationalCarrier->setName('internationalCarrier');
        return $this;
    }

    /**
     * 
     * @return PreferredCarrierName $internationalCarrier
     */
    public function getInternationalCarrier()
    {
        return ($this->internationalCarrier) ? $this->internationalCarrier->getValue() : null;
    }
}
