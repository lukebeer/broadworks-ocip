<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\PhysicalLocation;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\IPAddressRange;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\IPAddress;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ZoneName;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
     * Add a Zone and optional Net Addresses and Physical Locations.
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class SystemZoneAddRequest extends ComplexType implements ComplexInterface
{
    public    $name                          = __CLASS__;
    protected $zoneName                      = null;
    protected $netAddress                    = null;
    protected $netAddressRange               = null;
    protected $locationBasedPhysicalLocation = null;
    protected $callingZonePhysicalLocation   = null;

    public function __construct(
         $zoneName,
         $netAddress = null,
         IPAddressRange $netAddressRange = null,
         $locationBasedPhysicalLocation = null,
         $callingZonePhysicalLocation = null
    ) {
        $this->setZoneName($zoneName);
        $this->setNetAddress($netAddress);
        $this->setNetAddressRange($netAddressRange);
        $this->setLocationBasedPhysicalLocation($locationBasedPhysicalLocation);
        $this->setCallingZonePhysicalLocation($callingZonePhysicalLocation);
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
     * Numeric IP Address.
     */
    public function setNetAddress($netAddress = null)
    {
        $this->netAddress = ($netAddress InstanceOf IPAddress)
             ? $netAddress
             : new IPAddress($netAddress);
    }

    /**
     * Numeric IP Address.
     */
    public function getNetAddress()
    {
        return (!$this->netAddress) ?: $this->netAddress->getValue();
    }

    /**
     * IP Address Range.
     */
    public function setNetAddressRange(IPAddressRange $netAddressRange = null)
    {
        $this->netAddressRange = IPAddressRange $netAddressRange;
    }

    /**
     * IP Address Range.
     */
    public function getNetAddressRange()
    {
        return (!$this->netAddressRange) ?: $this->netAddressRange->getValue();
    }

    /**
     * Physical geographic location of the zone
     */
    public function setLocationBasedPhysicalLocation($locationBasedPhysicalLocation = null)
    {
        $this->locationBasedPhysicalLocation = ($locationBasedPhysicalLocation InstanceOf PhysicalLocation)
             ? $locationBasedPhysicalLocation
             : new PhysicalLocation($locationBasedPhysicalLocation);
    }

    /**
     * Physical geographic location of the zone
     */
    public function getLocationBasedPhysicalLocation()
    {
        return (!$this->locationBasedPhysicalLocation) ?: $this->locationBasedPhysicalLocation->getValue();
    }

    /**
     * Physical geographic location of the zone
     */
    public function setCallingZonePhysicalLocation($callingZonePhysicalLocation = null)
    {
        $this->callingZonePhysicalLocation = ($callingZonePhysicalLocation InstanceOf PhysicalLocation)
             ? $callingZonePhysicalLocation
             : new PhysicalLocation($callingZonePhysicalLocation);
    }

    /**
     * Physical geographic location of the zone
     */
    public function getCallingZonePhysicalLocation()
    {
        return (!$this->callingZonePhysicalLocation) ?: $this->callingZonePhysicalLocation->getValue();
    }
}
