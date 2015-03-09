<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceEmergencyZones; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ServiceProviderId;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\GroupId;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceEmergencyZones\GroupEmergencyZonesModifyHomeZoneListResponse;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Modify a list of home zones and/or home zone ranges.
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class GroupEmergencyZonesModifyHomeZoneListRequest extends ComplexType implements ComplexInterface
{
    public    $name                       = __CLASS__;
    protected $serviceProviderId          = null;
    protected $groupId                    = null;
    protected $homeZoneIpAddressList      = null;
    protected $homeZoneIpAddressRangeList = null;

    public function __construct(
         $serviceProviderId,
         $groupId,
         $homeZoneIpAddressList = null,
         $homeZoneIpAddressRangeList = null
    ) {
        $this->setServiceProviderId($serviceProviderId);
        $this->setGroupId($groupId);
        $this->setHomeZoneIpAddressList($homeZoneIpAddressList);
        $this->setHomeZoneIpAddressRangeList($homeZoneIpAddressRangeList);
    }

    /**
     * @return GroupEmergencyZonesModifyHomeZoneListResponse
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
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
     * 
     */
    public function setHomeZoneIpAddressList($homeZoneIpAddressList = null)
    {
        $this->homeZoneIpAddressList = $homeZoneIpAddressList;
    }

    /**
     * 
     */
    public function getHomeZoneIpAddressList()
    {
        return (!$this->homeZoneIpAddressList) ?: $this->homeZoneIpAddressList;
    }

    /**
     * 
     */
    public function setHomeZoneIpAddressRangeList($homeZoneIpAddressRangeList = null)
    {
        $this->homeZoneIpAddressRangeList = $homeZoneIpAddressRangeList;
    }

    /**
     * 
     */
    public function getHomeZoneIpAddressRangeList()
    {
        return (!$this->homeZoneIpAddressRangeList) ?: $this->homeZoneIpAddressRangeList;
    }
}
