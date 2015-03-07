<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceEmergencyZones; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ServiceProviderId;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\GroupId;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Modify a list of home zones and/or home zone ranges.
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class GroupEmergencyZonesModifyHomeZoneListRequest extends ComplexType implements ComplexInterface
{
    public    $name                        = __CLASS__;
    protected $serviceProviderId           = null;
    protected $groupId                     = null;
    protected $homeZoneIpAddressList       = null;
    protected $homeZoneIpAddressRangeList  = null;

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

    public function setServiceProviderId($serviceProviderId = null)
    {
        $this->serviceProviderId = ($serviceProviderId InstanceOf ServiceProviderId)
             ? $serviceProviderId
             : new ServiceProviderId($serviceProviderId);
    }

    public function getServiceProviderId()
    {
        return (!$this->serviceProviderId) ?: $this->serviceProviderId->value();
    }

    public function setGroupId($groupId = null)
    {
        $this->groupId = ($groupId InstanceOf GroupId)
             ? $groupId
             : new GroupId($groupId);
    }

    public function getGroupId()
    {
        return (!$this->groupId) ?: $this->groupId->value();
    }

    public function setHomeZoneIpAddressList($homeZoneIpAddressList = null)
    {
        $this->homeZoneIpAddressList = $homeZoneIpAddressList;
    }

    public function getHomeZoneIpAddressList()
    {
        return (!$this->homeZoneIpAddressList) ?: $this->homeZoneIpAddressList->value();
    }

    public function setHomeZoneIpAddressRangeList($homeZoneIpAddressRangeList = null)
    {
        $this->homeZoneIpAddressRangeList = $homeZoneIpAddressRangeList;
    }

    public function getHomeZoneIpAddressRangeList()
    {
        return (!$this->homeZoneIpAddressRangeList) ?: $this->homeZoneIpAddressRangeList->value();
    }
}
