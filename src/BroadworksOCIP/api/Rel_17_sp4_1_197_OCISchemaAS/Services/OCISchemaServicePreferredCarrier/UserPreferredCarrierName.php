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
 * User can either use it's group's preferred carrier or use it's own.
 *         The user carrier name is exposed if it was previously configured.
 */
class UserPreferredCarrierName extends ComplexType implements ComplexInterface
{
    public    $elementName = 'UserPreferredCarrierName';
    protected $useGroupPreferredCarrier;
    protected $carrier;

    public function __construct(
         $useGroupPreferredCarrier = '',
         $carrier = null
    ) {
        $this->setUseGroupPreferredCarrier($useGroupPreferredCarrier);
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
    public function setUseGroupPreferredCarrier($useGroupPreferredCarrier = null)
    {
        $this->useGroupPreferredCarrier = new SimpleContent($useGroupPreferredCarrier);
        $this->useGroupPreferredCarrier->setElementName('useGroupPreferredCarrier');
        return $this;
    }

    /**
     * 
     * @return SimpleContent $useGroupPreferredCarrier
     */
    public function getUseGroupPreferredCarrier()
    {
        return ($this->useGroupPreferredCarrier)
            ? $this->useGroupPreferredCarrier->getElementValue()
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
