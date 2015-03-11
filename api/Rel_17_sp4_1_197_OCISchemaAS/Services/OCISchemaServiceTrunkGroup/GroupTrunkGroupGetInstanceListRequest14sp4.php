<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceTrunkGroup; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ServiceProviderId;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\GroupId;
use Broadworks_OCIP\core\Builder\Types\PrimitiveType;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceTrunkGroup\GroupTrunkGroupGetInstanceListResponse14sp4;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Get a list of Trunk Groups for the group or enterprise.
 *         It is possible to restrict the results to a particular department, or expand the list to the entire enterprise.
 *         The response is either a GroupTrunkGroupGetInstanceListResponse14sp4 or an ErrorResponse.
 */
class GroupTrunkGroupGetInstanceListRequest14sp4 extends ComplexType implements ComplexInterface
{
    public    $responseType              = 'Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceTrunkGroup\GroupTrunkGroupGetInstanceListResponse14sp4';
    public    $name                      = 'GroupTrunkGroupGetInstanceListRequest14sp4';
    protected $serviceProviderId         = null;
    protected $groupId                   = null;
    protected $onlyTrunkGroupsWithDevice = null;

    public function __construct(
         $serviceProviderId,
         $groupId,
         $onlyTrunkGroupsWithDevice = null
    ) {
        $this->setServiceProviderId($serviceProviderId);
        $this->setGroupId($groupId);
        $this->setOnlyTrunkGroupsWithDevice($onlyTrunkGroupsWithDevice);
    }

    /**
     * @return GroupTrunkGroupGetInstanceListResponse14sp4
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
     * @return ServiceProviderId
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
     * @return GroupId
     */
    public function getGroupId()
    {
        return $this->groupId->getValue();
    }

    /**
     * 
     */
    public function setOnlyTrunkGroupsWithDevice($onlyTrunkGroupsWithDevice = null)
    {
        if (!$onlyTrunkGroupsWithDevice) return $this;
        $this->onlyTrunkGroupsWithDevice = new PrimitiveType($onlyTrunkGroupsWithDevice);
        $this->onlyTrunkGroupsWithDevice->setName('onlyTrunkGroupsWithDevice');
        return $this;
    }

    /**
     * 
     * @return xs:boolean
     */
    public function getOnlyTrunkGroupsWithDevice()
    {
        return $this->onlyTrunkGroupsWithDevice->getValue();
    }
}
