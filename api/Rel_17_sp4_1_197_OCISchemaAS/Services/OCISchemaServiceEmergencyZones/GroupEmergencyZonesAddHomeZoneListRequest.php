<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceEmergencyZones; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ServiceProviderId;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\IPAddressRange;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\IPAddress;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\GroupId;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Add a list of home zones and/or home zone ranges to the the group.
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class GroupEmergencyZonesAddHomeZoneListRequest extends ComplexType implements ComplexInterface
{
    public    $name = 'GroupEmergencyZonesAddHomeZoneListRequest';
    protected $serviceProviderId;
    protected $groupId;
    protected $homeZoneIpAddress;
    protected $homeZoneIpAddressRange;

    public function __construct(
         $serviceProviderId = '',
         $groupId = '',
         $homeZoneIpAddress = null,
         IPAddressRange $homeZoneIpAddressRange = null
    ) {
        $this->setServiceProviderId($serviceProviderId);
        $this->setGroupId($groupId);
        $this->setHomeZoneIpAddress($homeZoneIpAddress);
        $this->setHomeZoneIpAddressRange($homeZoneIpAddressRange);
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
    public function setServiceProviderId($serviceProviderId = null)
    {
        $this->serviceProviderId = ($serviceProviderId InstanceOf ServiceProviderId)
             ? $serviceProviderId
             : new ServiceProviderId($serviceProviderId);
        $this->serviceProviderId->setName('serviceProviderId');
        return $this;
    }

    /**
     * 
     * @return ServiceProviderId $serviceProviderId
     */
    public function getServiceProviderId()
    {
        return ($this->serviceProviderId) ? $this->serviceProviderId->getValue() : null;
    }

    /**
     * 
     */
    public function setGroupId($groupId = null)
    {
        $this->groupId = ($groupId InstanceOf GroupId)
             ? $groupId
             : new GroupId($groupId);
        $this->groupId->setName('groupId');
        return $this;
    }

    /**
     * 
     * @return GroupId $groupId
     */
    public function getGroupId()
    {
        return ($this->groupId) ? $this->groupId->getValue() : null;
    }

    /**
     * 
     */
    public function setHomeZoneIpAddress($homeZoneIpAddress = null)
    {
        $this->homeZoneIpAddress = ($homeZoneIpAddress InstanceOf IPAddress)
             ? $homeZoneIpAddress
             : new IPAddress($homeZoneIpAddress);
        $this->homeZoneIpAddress->setName('homeZoneIpAddress');
        return $this;
    }

    /**
     * 
     * @return IPAddress $homeZoneIpAddress
     */
    public function getHomeZoneIpAddress()
    {
        return ($this->homeZoneIpAddress) ? $this->homeZoneIpAddress->getValue() : null;
    }

    /**
     * 
     */
    public function setHomeZoneIpAddressRange(IPAddressRange $homeZoneIpAddressRange = null)
    {
        $this->homeZoneIpAddressRange = ($homeZoneIpAddressRange InstanceOf IPAddressRange)
             ? $homeZoneIpAddressRange
             : new IPAddressRange($homeZoneIpAddressRange);
        $this->homeZoneIpAddressRange->setName('homeZoneIpAddressRange');
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
