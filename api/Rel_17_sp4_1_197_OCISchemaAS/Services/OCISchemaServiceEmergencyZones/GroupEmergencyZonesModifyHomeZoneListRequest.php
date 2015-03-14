<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceEmergencyZones; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ServiceProviderId;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\GroupId;
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
    public    $name                       = 'GroupEmergencyZonesModifyHomeZoneListRequest';
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
        if (!$serviceProviderId) return $this;
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
        return $this->serviceProviderId->getValue();
    }

    /**
     * 
     */
    public function setGroupId($groupId = null)
    {
        if (!$groupId) return $this;
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
        return $this->groupId->getValue();
    }

    /**
     * 
     */
    public function setHomeZoneIpAddressList($homeZoneIpAddressList = null)
    {
        if (!$homeZoneIpAddressList) return $this;
        $this->homeZoneIpAddressList->setName('homeZoneIpAddressList');
        return $this;
    }

    /**
     * 
     * @return  $homeZoneIpAddressList
     */
    public function getHomeZoneIpAddressList()
    {
        return $this->homeZoneIpAddressList->getValue();
    }

    /**
     * 
     */
    public function setHomeZoneIpAddressRangeList($homeZoneIpAddressRangeList = null)
    {
        if (!$homeZoneIpAddressRangeList) return $this;
        $this->homeZoneIpAddressRangeList->setName('homeZoneIpAddressRangeList');
        return $this;
    }

    /**
     * 
     * @return  $homeZoneIpAddressRangeList
     */
    public function getHomeZoneIpAddressRangeList()
    {
        return $this->homeZoneIpAddressRangeList->getValue();
    }
}
