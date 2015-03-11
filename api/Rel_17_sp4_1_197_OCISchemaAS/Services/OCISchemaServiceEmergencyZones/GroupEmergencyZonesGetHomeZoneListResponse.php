<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceEmergencyZones; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\IPAddressRange;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\IPAddress;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Response to GroupEmergencyZonesGetHomeZoneListRequest.
 */
class GroupEmergencyZonesGetHomeZoneListResponse extends ComplexType implements ComplexInterface
{
    public    $name                   = 'GroupEmergencyZonesGetHomeZoneListResponse';
    protected $homeZoneIpAddress      = null;
    protected $homeZoneIpAddressRange = null;

    /**
     * @return GroupEmergencyZonesGetHomeZoneListResponse
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * 
     */
    public function setHomeZoneIpAddress($homeZoneIpAddress = null)
    {
        if (!$homeZoneIpAddress) return $this;
        $this->homeZoneIpAddress = ($homeZoneIpAddress InstanceOf IPAddress)
             ? $homeZoneIpAddress
             : new IPAddress($homeZoneIpAddress);
        $this->homeZoneIpAddress->setName('homeZoneIpAddress');
        return $this;
    }

    /**
     * 
     * @return IPAddress
     */
    public function getHomeZoneIpAddress()
    {
        return $this->homeZoneIpAddress->getValue();
    }

    /**
     * 
     */
    public function setHomeZoneIpAddressRange(IPAddressRange $homeZoneIpAddressRange = null)
    {
        if (!$homeZoneIpAddressRange) return $this;
        $this->homeZoneIpAddressRange = $homeZoneIpAddressRange;
        $this->homeZoneIpAddressRange->setName('homeZoneIpAddressRange');
        return $this;
    }

    /**
     * 
     * @return IPAddressRange
     */
    public function getHomeZoneIpAddressRange()
    {
        return $this->homeZoneIpAddressRange;
    }
}
