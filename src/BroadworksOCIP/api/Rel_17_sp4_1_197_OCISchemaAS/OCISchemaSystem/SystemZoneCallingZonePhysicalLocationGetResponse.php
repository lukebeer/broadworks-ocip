<?php
/**
 * This file is part of http://github.com/LukeBeer/BroadworksOCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem; 

use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\PhysicalLocation;
use BroadworksOCIP\Builder\Types\ComplexInterface;
use BroadworksOCIP\Builder\Types\ComplexType;
use BroadworksOCIP\Response\ResponseOutput;
use BroadworksOCIP\Client\Client;


/**
 * Response to SystemZoneCallingZonePhysicalLocationGetRequest.
 */
class SystemZoneCallingZonePhysicalLocationGetResponse extends ComplexType implements ComplexInterface
{
    public    $elementName = 'SystemZoneCallingZonePhysicalLocationGetResponse';
    protected $physicalLocation;

    /**
     * @return \BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem\SystemZoneCallingZonePhysicalLocationGetResponse $response
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * 
     */
    public function setPhysicalLocation($physicalLocation = null)
    {
        $this->physicalLocation = ($physicalLocation InstanceOf PhysicalLocation)
             ? $physicalLocation
             : new PhysicalLocation($physicalLocation);
        $this->physicalLocation->setElementName('physicalLocation');
        return $this;
    }

    /**
     * 
     * @return PhysicalLocation $physicalLocation
     */
    public function getPhysicalLocation()
    {
        return ($this->physicalLocation)
            ? $this->physicalLocation->getElementValue()
            : null;
    }
}
