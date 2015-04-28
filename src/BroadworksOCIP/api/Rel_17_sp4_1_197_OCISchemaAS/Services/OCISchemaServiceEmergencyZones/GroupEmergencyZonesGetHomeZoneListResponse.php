<?php
/**
 * This file is part of http://github.com/LukeBeer/BroadworksOCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceEmergencyZones; 

use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\IPAddressRange;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\IPAddress;
use BroadworksOCIP\Builder\Types\ComplexInterface;
use BroadworksOCIP\Builder\Types\ComplexType;
use BroadworksOCIP\Response\ResponseOutput;
use BroadworksOCIP\Client\Client;


/**
 * Response to GroupEmergencyZonesGetHomeZoneListRequest.
 */
class GroupEmergencyZonesGetHomeZoneListResponse extends ComplexType implements ComplexInterface
{
    public    $elementName = 'GroupEmergencyZonesGetHomeZoneListResponse';
    protected $homeZoneIpAddress;
    protected $homeZoneIpAddressRange;

    /**
     * @return \BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceEmergencyZones\GroupEmergencyZonesGetHomeZoneListResponse $response
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
        $this->homeZoneIpAddress = ($homeZoneIpAddress InstanceOf IPAddress)
             ? $homeZoneIpAddress
             : new IPAddress($homeZoneIpAddress);
        $this->homeZoneIpAddress->setElementName('homeZoneIpAddress');
        return $this;
    }

    /**
     * 
     * @return IPAddress $homeZoneIpAddress
     */
    public function getHomeZoneIpAddress()
    {
        return ($this->homeZoneIpAddress)
            ? $this->homeZoneIpAddress->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setHomeZoneIpAddressRange(IPAddressRange $homeZoneIpAddressRange = null)
    {
        $this->homeZoneIpAddressRange = ($homeZoneIpAddressRange InstanceOf IPAddressRange)
             ? $homeZoneIpAddressRange
             : new IPAddressRange($homeZoneIpAddressRange);
        $this->homeZoneIpAddressRange->setElementName('homeZoneIpAddressRange');
        return $this;
    }

    /**
     * 
     * @return IPAddressRange $homeZoneIpAddressRange
     */
    public function getHomeZoneIpAddressRange()
    {
        return $this->homeZoneIpAddressRange;
    }
}
