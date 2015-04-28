<?php
/**
 * This file is part of http://github.com/LukeBeer/BroadworksOCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem; 

use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem\ScheduleCombinationType;
use BroadworksOCIP\Builder\Types\ComplexInterface;
use BroadworksOCIP\Builder\Types\ComplexType;
use BroadworksOCIP\Response\ResponseOutput;
use BroadworksOCIP\Client\Client;


/**
 * Response to SystemSelectiveServicesGetRequest.
 */
class SystemSelectiveServicesGetResponse extends ComplexType implements ComplexInterface
{
    public    $elementName = 'SystemSelectiveServicesGetResponse';
    protected $scheduleCombination;

    /**
     * @return \BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem\SystemSelectiveServicesGetResponse $response
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * 
     */
    public function setScheduleCombination($scheduleCombination = null)
    {
        $this->scheduleCombination = ($scheduleCombination InstanceOf ScheduleCombinationType)
             ? $scheduleCombination
             : new ScheduleCombinationType($scheduleCombination);
        $this->scheduleCombination->setElementName('scheduleCombination');
        return $this;
    }

    /**
     * 
     * @return ScheduleCombinationType $scheduleCombination
     */
    public function getScheduleCombination()
    {
        return ($this->scheduleCombination)
            ? $this->scheduleCombination->getElementValue()
            : null;
    }
}
