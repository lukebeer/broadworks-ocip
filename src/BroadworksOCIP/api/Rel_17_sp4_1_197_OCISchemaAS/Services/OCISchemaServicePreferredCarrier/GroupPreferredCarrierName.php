<?php
/**
 * This file is part of http://github.com/LukeBeer/BroadworksOCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServicePreferredCarrier; 

use BroadworksOCIP\Builder\Types\SimpleContent;
use BroadworksOCIP\Builder\Types\ComplexInterface;
use BroadworksOCIP\Builder\Types\ComplexType;
use BroadworksOCIP\Response\ResponseOutput;
use BroadworksOCIP\Client\Client;


/**
 * Group can either use it's service provider/enterprise's preferred carrier or use it's own.
 *         The group carrier name is exposed if it was previously configured.
 */
class GroupPreferredCarrierName extends ComplexType implements ComplexInterface
{
    public    $elementName = 'GroupPreferredCarrierName';
    protected $useServiceProviderPreferredCarrier;
    protected $carrier;

    public function __construct(
         $useServiceProviderPreferredCarrier = '',
         $carrier = null
    ) {
        $this->setUseServiceProviderPreferredCarrier($useServiceProviderPreferredCarrier);
        $this->setCarrier($carrier);
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
    public function setUseServiceProviderPreferredCarrier($useServiceProviderPreferredCarrier = null)
    {
        $this->useServiceProviderPreferredCarrier = new SimpleContent($useServiceProviderPreferredCarrier);
        $this->useServiceProviderPreferredCarrier->setElementName('useServiceProviderPreferredCarrier');
        return $this;
    }

    /**
     * 
     * @return SimpleContent $useServiceProviderPreferredCarrier
     */
    public function getUseServiceProviderPreferredCarrier()
    {
        return ($this->useServiceProviderPreferredCarrier)
            ? $this->useServiceProviderPreferredCarrier->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setCarrier($carrier = null)
    {
        $this->carrier = new SimpleContent($carrier);
        $this->carrier->setElementName('carrier');
        return $this;
    }

    /**
     * 
     * @return SimpleContent $carrier
     */
    public function getCarrier()
    {
        return ($this->carrier)
            ? $this->carrier->getElementValue()
            : null;
    }
}
