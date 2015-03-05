<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ZoneName;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\IPAddress;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\IPAddressRange;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\PhysicalLocation;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Add a Zone and optional Net Addresses and Physical Locations.
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class SystemZoneAddRequest extends ComplexType implements ComplexInterface
{
    public    $name = __CLASS__;

    public function __construct(
             $zoneName,
             $netAddress=null,
             IPAddressRange $netAddressRange=null,
             $locationBasedPhysicalLocation=null,
             $callingZonePhysicalLocation=null
    ) {
        $this->zoneName                      = new ZoneName($zoneName);
        $this->netAddress                    = new IPAddress($netAddress);
        $this->netAddressRange               = $netAddressRange;
        $this->locationBasedPhysicalLocation = new PhysicalLocation($locationBasedPhysicalLocation);
        $this->callingZonePhysicalLocation   = new PhysicalLocation($callingZonePhysicalLocation);
        $this->args                          = func_get_args();
    }

    public function setZoneName($zoneName)
    {
        $zoneName and $this->zoneName = new ZoneName($zoneName);
    }

    public function getZoneName()
    {
        return (!$this->zoneName) ?: $this->zoneName->value();
    }

    public function setNetAddress($netAddress)
    {
        $netAddress and $this->netAddress = new IPAddress($netAddress);
    }

    public function getNetAddress()
    {
        return (!$this->netAddress) ?: $this->netAddress->value();
    }

    public function setNetAddressRange($netAddressRange)
    {
        $netAddressRange and $this->netAddressRange = new IPAddressRange($netAddressRange);
    }

    public function getNetAddressRange()
    {
        return (!$this->netAddressRange) ?: $this->netAddressRange->value();
    }

    public function setLocationBasedPhysicalLocation($locationBasedPhysicalLocation)
    {
        $locationBasedPhysicalLocation and $this->locationBasedPhysicalLocation = new PhysicalLocation($locationBasedPhysicalLocation);
    }

    public function getLocationBasedPhysicalLocation()
    {
        return (!$this->locationBasedPhysicalLocation) ?: $this->locationBasedPhysicalLocation->value();
    }

    public function setCallingZonePhysicalLocation($callingZonePhysicalLocation)
    {
        $callingZonePhysicalLocation and $this->callingZonePhysicalLocation = new PhysicalLocation($callingZonePhysicalLocation);
    }

    public function getCallingZonePhysicalLocation()
    {
        return (!$this->callingZonePhysicalLocation) ?: $this->callingZonePhysicalLocation->value();
    }
}
