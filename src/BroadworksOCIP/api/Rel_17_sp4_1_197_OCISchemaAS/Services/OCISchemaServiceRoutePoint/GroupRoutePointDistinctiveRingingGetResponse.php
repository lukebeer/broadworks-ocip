<?php
/**
 * This file is part of http://github.com/LukeBeer/BroadworksOCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceRoutePoint; 

use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\RingPattern;
use BroadworksOCIP\Builder\Types\PrimitiveType;
use BroadworksOCIP\Builder\Types\ComplexInterface;
use BroadworksOCIP\Builder\Types\ComplexType;
use BroadworksOCIP\Response\ResponseOutput;
use BroadworksOCIP\Client\Client;


/**
 * Response to the GroupRoutePointDistinctiveRingingGetRequest.
 */
class GroupRoutePointDistinctiveRingingGetResponse extends ComplexType implements ComplexInterface
{
    public    $elementName = 'GroupRoutePointDistinctiveRingingGetResponse';
    protected $enableDistinctiveRinging;
    protected $distinctiveRingingRingPattern;
    protected $distinctiveRingingForceDeliveryRingPattern;

    /**
     * @return \BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceRoutePoint\GroupRoutePointDistinctiveRingingGetResponse $response
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * 
     */
    public function setEnableDistinctiveRinging($enableDistinctiveRinging = null)
    {
        $this->enableDistinctiveRinging = new PrimitiveType($enableDistinctiveRinging);
        $this->enableDistinctiveRinging->setElementName('enableDistinctiveRinging');
        return $this;
    }

    /**
     * 
     * @return boolean $enableDistinctiveRinging
     */
    public function getEnableDistinctiveRinging()
    {
        return ($this->enableDistinctiveRinging)
            ? $this->enableDistinctiveRinging->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setDistinctiveRingingRingPattern($distinctiveRingingRingPattern = null)
    {
        $this->distinctiveRingingRingPattern = ($distinctiveRingingRingPattern InstanceOf RingPattern)
             ? $distinctiveRingingRingPattern
             : new RingPattern($distinctiveRingingRingPattern);
        $this->distinctiveRingingRingPattern->setElementName('distinctiveRingingRingPattern');
        return $this;
    }

    /**
     * 
     * @return RingPattern $distinctiveRingingRingPattern
     */
    public function getDistinctiveRingingRingPattern()
    {
        return ($this->distinctiveRingingRingPattern)
            ? $this->distinctiveRingingRingPattern->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setDistinctiveRingingForceDeliveryRingPattern($distinctiveRingingForceDeliveryRingPattern = null)
    {
        $this->distinctiveRingingForceDeliveryRingPattern = ($distinctiveRingingForceDeliveryRingPattern InstanceOf RingPattern)
             ? $distinctiveRingingForceDeliveryRingPattern
             : new RingPattern($distinctiveRingingForceDeliveryRingPattern);
        $this->distinctiveRingingForceDeliveryRingPattern->setElementName('distinctiveRingingForceDeliveryRingPattern');
        return $this;
    }

    /**
     * 
     * @return RingPattern $distinctiveRingingForceDeliveryRingPattern
     */
    public function getDistinctiveRingingForceDeliveryRingPattern()
    {
        return ($this->distinctiveRingingForceDeliveryRingPattern)
            ? $this->distinctiveRingingForceDeliveryRingPattern->getElementValue()
            : null;
    }
}
