<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ZoneName;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Deletes a list of physical addresses from a zone
 *         The response is SuccessResponse or an ErrorResponse.
 */
class SystemZoneLocationBasedPhysicalLocationDeleteListRequest extends ComplexType implements ComplexInterface
{
    public    $name             = 'SystemZoneLocationBasedPhysicalLocationDeleteListRequest';
    protected $zoneName         = null;
    protected $physicalLocation = null;

    public function __construct(
         $zoneName,
         $physicalLocation = null
    ) {
        $this->setZoneName($zoneName);
        $this->setPhysicalLocation($physicalLocation);
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
    public function setZoneName($zoneName = null)
    {
        if (!$zoneName) return $this;
        $this->zoneName = ($zoneName InstanceOf ZoneName)
             ? $zoneName
             : new ZoneName($zoneName);
        $this->zoneName->setName('zoneName');
        return $this;
    }

    /**
     * 
     * @return ZoneName $zoneName
     */
    public function getZoneName()
    {
        return $this->zoneName->getValue();
    }

    /**
     * 
     */
    public function setPhysicalLocation($physicalLocation = null)
    {
        if (!$physicalLocation) return $this;
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
        return $this->physicalLocation->getValue();
    }
}
