<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem; 


use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Response to SystemZoneCallingZonePhysicalLocationGetRequest.
 */
class SystemZoneCallingZonePhysicalLocationGetResponse extends ComplexType implements ComplexInterface
{
    public    $name = 'SystemZoneCallingZonePhysicalLocationGetResponse';
    protected $physicalLocation;

    /**
     * @return \Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem\SystemZoneCallingZonePhysicalLocationGetResponse $response
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
        $this->physicalLocation->setName('physicalLocation');
        return $this;
    }

    /**
     * 
     * @return PhysicalLocation $physicalLocation
     */
    public function getPhysicalLocation()
    {
        return ($this->physicalLocation) ? $this->physicalLocation->getValue() : null;
    }
}
