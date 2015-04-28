<?php
/**
 * This file is part of http://github.com/LukeBeer/BroadworksOCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceInstantGroupCall; 

use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ServiceProviderId;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\DepartmentName;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\GroupId;
use BroadworksOCIP\Builder\Types\ComplexInterface;
use BroadworksOCIP\Builder\Types\ComplexType;
use BroadworksOCIP\Response\ResponseOutput;
use BroadworksOCIP\Client\Client;


/**
 * Request to get a list of Instant Group Call service instances within a group.
 *         The response is either GroupInstantGroupCallGetInstanceListResponse or ErrorResponse.
 *         It is possible to get the service instances within a specified department.
 */
class GroupInstantGroupCallGetInstanceListRequest extends ComplexType implements ComplexInterface
{
    public    $responseType = 'BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceInstantGroupCall\GroupInstantGroupCallGetInstanceListResponse';
    public    $elementName = 'GroupInstantGroupCallGetInstanceListRequest';
    protected $serviceProviderId;
    protected $groupId;
    protected $groupDepartmentName;

    public function __construct(
         $serviceProviderId = '',
         $groupId = '',
         $groupDepartmentName = null
    ) {
        $this->setServiceProviderId($serviceProviderId);
        $this->setGroupId($groupId);
        $this->setGroupDepartmentName($groupDepartmentName);
    }

    /**
     * @return \BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceInstantGroupCall\GroupInstantGroupCallGetInstanceListResponse $response
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
    public function setGroupDepartmentName($groupDepartmentName = null)
    {
        $this->groupDepartmentName = ($groupDepartmentName InstanceOf DepartmentName)
             ? $groupDepartmentName
             : new DepartmentName($groupDepartmentName);
        $this->groupDepartmentName->setElementName('groupDepartmentName');
        return $this;
    }

    /**
     * 
     * @return DepartmentName $groupDepartmentName
     */
    public function getGroupDepartmentName()
    {
        return ($this->groupDepartmentName)
            ? $this->groupDepartmentName->getElementValue()
            : null;
    }
}
