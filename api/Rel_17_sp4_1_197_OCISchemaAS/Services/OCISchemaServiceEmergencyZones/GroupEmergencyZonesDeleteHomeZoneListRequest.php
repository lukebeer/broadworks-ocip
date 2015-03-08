<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceEmergencyZones; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ServiceProviderId;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\IPAddressRange;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\IPAddress;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\GroupId;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
     * Delete a list of home zones and/or home zone ranges to the the group.
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class GroupEmergencyZonesDeleteHomeZoneListRequest extends ComplexType implements ComplexInterface
{
    public    $name                   = __CLASS__;
    protected $serviceProviderId      = null;
    protected $groupId                = null;
    protected $homeZoneIpAddress      = null;
    protected $homeZoneIpAddressRange = null;

    public function __construct(
         $serviceProviderId,
         $groupId,
         $homeZoneIpAddress = null,
         IPAddressRange $homeZoneIpAddressRange = null
    ) {
        $this->setServiceProviderId($serviceProviderId);
        $this->setGroupId($groupId);
        $this->setHomeZoneIpAddress($homeZoneIpAddress);
        $this->setHomeZoneIpAddressRange($homeZoneIpAddressRange);
    }

    /**
     * Service Provider Id uniquely identifies a service provider.
     *         NOTE: The service provider id has a maximum length of 30 bytes, not 30 characters.
     */
    public function setServiceProviderId($serviceProviderId = null)
    {
        $this->serviceProviderId = ($serviceProviderId InstanceOf ServiceProviderId)
             ? $serviceProviderId
             : new ServiceProviderId($serviceProviderId);
    }

    /**
     * Service Provider Id uniquely identifies a service provider.
     *         NOTE: The service provider id has a maximum length of 30 bytes, not 30 characters.
     */
    public function getServiceProviderId()
    {
        return (!$this->serviceProviderId) ?: $this->serviceProviderId->getValue();
    }

    /**
     * Group Id identifies a group within a service provider or enterprise. The group id is not
     *         unique system wide. It must be combined with a service provider id to be unique across the system.
     */
    public function setGroupId($groupId = null)
    {
        $this->groupId = ($groupId InstanceOf GroupId)
             ? $groupId
             : new GroupId($groupId);
    }

    /**
     * Group Id identifies a group within a service provider or enterprise. The group id is not
     *         unique system wide. It must be combined with a service provider id to be unique across the system.
     */
    public function getGroupId()
    {
        return (!$this->groupId) ?: $this->groupId->getValue();
    }

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
