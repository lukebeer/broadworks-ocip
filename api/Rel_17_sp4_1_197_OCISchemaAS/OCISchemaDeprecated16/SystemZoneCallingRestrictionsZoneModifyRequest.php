<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated16; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\PhysicalLocation;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ZoneName;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
     * Modifies attributes of a zone in the system.
 *         The response is either a SuccessResponse or an ErrorResponse.
 *         Replaced by: SystemZonePhysicalLocationAddListRequest and
 *         SystemZonePhysicalLocationDeleteListRequest
 */
class SystemZoneCallingRestrictionsZoneModifyRequest extends ComplexType implements ComplexInterface
{
    public    $name             = __CLASS__;
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
     * Zone Name.
     */
    public function setZoneName($zoneName = null)
    {
        $this->zoneName = ($zoneName InstanceOf ZoneName)
             ? $zoneName
             : new ZoneName($zoneName);
    }

    /**
     * Zone Name.
     */
    public function getZoneName()
    {
        return (!$this->zoneName) ?: $this->zoneName->getValue();
    }

    /**
     * Physical geographic location of the zone
     */
    public function setPhysicalLocation($physicalLocation = null)
    {
        $this->physicalLocation = ($physicalLocation InstanceOf PhysicalLocation)
             ? $physicalLocation
             : new PhysicalLocation($physicalLocation);
    }

    /**
     * Physical geographic location of the zone
     */
    public function getPhysicalLocation()
    {
        return (!$this->physicalLocation) ?: $this->physicalLocation->getValue();
    }
}
