<?php
/**
 * This file is part of http://github.com/LukeBeer/BroadworksOCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCallCenter; 

use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\RingPattern;
use BroadworksOCIP\Builder\Types\PrimitiveType;
use BroadworksOCIP\Builder\Types\ComplexInterface;
use BroadworksOCIP\Builder\Types\ComplexType;
use BroadworksOCIP\Response\ResponseOutput;
use BroadworksOCIP\Client\Client;


/**
 * Response to the GroupCallCenterDistinctiveRingingGetRequest.
 */
class GroupCallCenterDistinctiveRingingGetResponse extends ComplexType implements ComplexInterface
{
    public    $elementName = 'GroupCallCenterDistinctiveRingingGetResponse';
    protected $distinctiveRingingCallCenterCalls;
    protected $distinctiveRingingRingPatternForCallCenter;
    protected $distinctiveRingingForceDeliveryRingPattern;

    /**
     * @return \BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCallCenter\GroupCallCenterDistinctiveRingingGetResponse $response
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * 
     */
    public function setDistinctiveRingingCallCenterCalls($distinctiveRingingCallCenterCalls = null)
    {
        $this->distinctiveRingingCallCenterCalls = new PrimitiveType($distinctiveRingingCallCenterCalls);
        $this->distinctiveRingingCallCenterCalls->setElementName('distinctiveRingingCallCenterCalls');
        return $this;
    }

    /**
     * 
     * @return boolean $distinctiveRingingCallCenterCalls
     */
    public function getDistinctiveRingingCallCenterCalls()
    {
        return ($this->distinctiveRingingCallCenterCalls)
            ? $this->distinctiveRingingCallCenterCalls->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setDistinctiveRingingRingPatternForCallCenter($distinctiveRingingRingPatternForCallCenter = null)
    {
        $this->distinctiveRingingRingPatternForCallCenter = ($distinctiveRingingRingPatternForCallCenter InstanceOf RingPattern)
             ? $distinctiveRingingRingPatternForCallCenter
             : new RingPattern($distinctiveRingingRingPatternForCallCenter);
        $this->distinctiveRingingRingPatternForCallCenter->setElementName('distinctiveRingingRingPatternForCallCenter');
        return $this;
    }

    /**
     * 
     * @return RingPattern $distinctiveRingingRingPatternForCallCenter
     */
    public function getDistinctiveRingingRingPatternForCallCenter()
    {
        return ($this->distinctiveRingingRingPatternForCallCenter)
            ? $this->distinctiveRingingRingPatternForCallCenter->getElementValue()
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
