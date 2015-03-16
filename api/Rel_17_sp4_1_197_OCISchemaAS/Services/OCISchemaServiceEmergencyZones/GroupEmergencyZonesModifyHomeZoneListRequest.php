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
    public    $elementName = 'GroupEmergencyZonesModifyHomeZoneListRequest';
    protected $serviceProviderId;
    protected $groupId;
    protected $homeZoneIpAddressList;
    protected $homeZoneIpAddressRangeList;

    public function __construct(
         $serviceProviderId = '',
         $groupId = '',
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
        $this->serviceProviderId = ($serviceProviderId InstanceOf ServiceProviderId)
             ? $serviceProviderId
             : new ServiceProviderId($serviceProviderId);
        $this->serviceProviderId->setElementName('serviceProviderId');
        return $this;
    }

    /**
     * 
     * @return ServiceProviderId $serviceProviderId
     */
    public function getServiceProviderId()
    {
        return ($this->serviceProviderId)
            ? $this->serviceProviderId->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setGroupId($groupId = null)
    {
        $this->groupId = ($groupId InstanceOf GroupId)
             ? $groupId
             : new GroupId($groupId);
        $this->groupId->setElementName('groupId');
        return $this;
    }

    /**
     * 
     * @return GroupId $groupId
     */
    public function getGroupId()
    {
        return ($this->groupId)
            ? $this->groupId->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setHomeZoneIpAddressList($homeZoneIpAddressList = null)
    {
        $this->homeZoneIpAddressList->setElementName('homeZoneIpAddressList');
        return $this;
    }

    /**
     * 
     * @return  $homeZoneIpAddressList
     */
    public function getHomeZoneIpAddressList()
    {
        return ($this->homeZoneIpAddressList)
            ? $this->homeZoneIpAddressList->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setHomeZoneIpAddressRangeList($homeZoneIpAddressRangeList = null)
    {
        $this->homeZoneIpAddressRangeList->setElementName('homeZoneIpAddressRangeList');
        return $this;
    }

    /**
     * 
     * @return  $homeZoneIpAddressRangeList
     */
    public function getHomeZoneIpAddressRangeList()
    {
        return ($this->homeZoneIpAddressRangeList)
            ? $this->homeZoneIpAddressRangeList->getElementValue()
            : null;
    }
}
