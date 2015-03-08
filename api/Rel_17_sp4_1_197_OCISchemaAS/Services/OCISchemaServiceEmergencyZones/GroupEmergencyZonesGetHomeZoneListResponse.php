<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceEmergencyZones; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\IPAddressRange;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\IPAddress;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
     * Response to GroupEmergencyZonesGetHomeZoneListRequest.
 */
class GroupEmergencyZonesGetHomeZoneListResponse extends ComplexType implements ComplexInterface
{
    const     RESPONSE_TYPE           = 'Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceEmergencyZones\GroupEmergencyZonesGetHomeZoneListResponse';
    public    $name                   = __CLASS__;
    protected $homeZoneIpAddress      = null;
    protected $homeZoneIpAddressRange = null;


    /**
     * Numeric IP Address.
     */
    public function setHomeZoneIpAddress($homeZoneIpAddress = null)
    {
        $this->homeZoneIpAddress = ($homeZoneIpAddress InstanceOf IPAddress)
             ? $homeZoneIpAddress
             : new IPAddress($homeZoneIpAddress);
    }

    /**
     * Numeric IP Address.
     */
    public function getHomeZoneIpAddress()
    {
        return (!$this->homeZoneIpAddress) ?: $this->homeZoneIpAddress->getValue();
    }

    /**
     * IP Address Range.
     */
    public function setHomeZoneIpAddressRange(IPAddressRange $homeZoneIpAddressRange = null)
    {
        $this->homeZoneIpAddressRange = IPAddressRange $homeZoneIpAddressRange;
    }

    /**
     * IP Address Range.
     */
    public function getHomeZoneIpAddressRange()
    {
        return (!$this->homeZoneIpAddressRange) ?: $this->homeZoneIpAddressRange->getValue();
    }
}
