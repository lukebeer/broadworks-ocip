<?php
/**
 * This file is part of http://github.com/LukeBeer/BroadworksOCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceMaliciousCallTrace; 

use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceMaliciousCallTrace\MaliciousCallTraceCallTypeSelection;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceMaliciousCallTrace\MaliciousCallTraceTimePeriod;
use BroadworksOCIP\Builder\Types\PrimitiveType;
use BroadworksOCIP\Builder\Types\ComplexInterface;
use BroadworksOCIP\Builder\Types\ComplexType;
use BroadworksOCIP\Response\ResponseOutput;
use BroadworksOCIP\Client\Client;


/**
 * Response to UserMaliciousCallTraceGetRequest.
 */
class UserMaliciousCallTraceGetResponse extends ComplexType implements ComplexInterface
{
    public    $elementName = 'UserMaliciousCallTraceGetResponse';
    protected $isActive;
    protected $traceTypeSelection;
    protected $traceForTimePeriod;
    protected $traceTimePeriod;

    /**
     * @return \BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceMaliciousCallTrace\UserMaliciousCallTraceGetResponse $response
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * 
     */
    public function setIsActive($isActive = null)
    {
        $this->isActive = new PrimitiveType($isActive);
        $this->isActive->setElementName('isActive');
        return $this;
    }

    /**
     * 
     * @return boolean $isActive
     */
    public function getIsActive()
    {
        return ($this->isActive)
            ? $this->isActive->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setTraceTypeSelection($traceTypeSelection = null)
    {
        $this->traceTypeSelection = ($traceTypeSelection InstanceOf MaliciousCallTraceCallTypeSelection)
             ? $traceTypeSelection
             : new MaliciousCallTraceCallTypeSelection($traceTypeSelection);
        $this->traceTypeSelection->setElementName('traceTypeSelection');
        return $this;
    }

    /**
     * 
     * @return MaliciousCallTraceCallTypeSelection $traceTypeSelection
     */
    public function getTraceTypeSelection()
    {
        return ($this->traceTypeSelection)
            ? $this->traceTypeSelection->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setTraceForTimePeriod($traceForTimePeriod = null)
    {
        $this->traceForTimePeriod = new PrimitiveType($traceForTimePeriod);
        $this->traceForTimePeriod->setElementName('traceForTimePeriod');
        return $this;
    }

    /**
     * 
     * @return boolean $traceForTimePeriod
     */
    public function getTraceForTimePeriod()
    {
        return ($this->traceForTimePeriod)
            ? $this->traceForTimePeriod->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setTraceTimePeriod(MaliciousCallTraceTimePeriod $traceTimePeriod = null)
    {
        $this->traceTimePeriod = ($traceTimePeriod InstanceOf MaliciousCallTraceTimePeriod)
             ? $traceTimePeriod
             : new MaliciousCallTraceTimePeriod($traceTimePeriod);
        $this->traceTimePeriod->setElementName('traceTimePeriod');
        return $this;
    }

    /**
     * 
     * @return MaliciousCallTraceTimePeriod $traceTimePeriod
     */
    public function getTraceTimePeriod()
    {
        return $this->traceTimePeriod;
    }
}
