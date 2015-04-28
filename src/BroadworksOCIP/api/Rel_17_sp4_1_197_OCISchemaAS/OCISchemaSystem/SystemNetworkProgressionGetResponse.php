<?php
/**
 * This file is part of http://github.com/LukeBeer/BroadworksOCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem; 

use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem\NetworkProgressionWaitPeriodSeconds;
use BroadworksOCIP\Builder\Types\PrimitiveType;
use BroadworksOCIP\Builder\Types\ComplexInterface;
use BroadworksOCIP\Builder\Types\ComplexType;
use BroadworksOCIP\Response\ResponseOutput;
use BroadworksOCIP\Client\Client;


/**
 * Response to SystemNetworkProgressionGetRequest.
 */
class SystemNetworkProgressionGetResponse extends ComplexType implements ComplexInterface
{
    public    $elementName = 'SystemNetworkProgressionGetResponse';
    protected $isActive;
    protected $waitPeriodSeconds;

    /**
     * @return \BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem\SystemNetworkProgressionGetResponse $response
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
    public function setWaitPeriodSeconds($waitPeriodSeconds = null)
    {
        $this->waitPeriodSeconds = ($waitPeriodSeconds InstanceOf NetworkProgressionWaitPeriodSeconds)
             ? $waitPeriodSeconds
             : new NetworkProgressionWaitPeriodSeconds($waitPeriodSeconds);
        $this->waitPeriodSeconds->setElementName('waitPeriodSeconds');
        return $this;
    }

    /**
     * 
     * @return NetworkProgressionWaitPeriodSeconds $waitPeriodSeconds
     */
    public function getWaitPeriodSeconds()
    {
        return ($this->waitPeriodSeconds)
            ? $this->waitPeriodSeconds->getElementValue()
            : null;
    }
}
