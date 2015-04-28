<?php
/**
 * This file is part of http://github.com/LukeBeer/BroadworksOCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceIncomingCallingPlan; 

use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceIncomingCallingPlan\IncomingCallingPlanDepartmentPermissionsModify;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceIncomingCallingPlan\IncomingCallingPlanPermissionsModify;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ServiceProviderId;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\GroupId;
use BroadworksOCIP\Builder\Types\ComplexInterface;
use BroadworksOCIP\Builder\Types\ComplexType;
use BroadworksOCIP\Response\ResponseOutput;
use BroadworksOCIP\Client\Client;


/**
 * Change the group's incoming calling plan settings.
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class GroupIncomingCallingPlanModifyListRequest extends ComplexType implements ComplexInterface
{
    public    $elementName = 'GroupIncomingCallingPlanModifyListRequest';
    protected $serviceProviderId;
    protected $groupId;
    protected $groupPermissions;
    protected $departmentPermissions;

    public function __construct(
         $serviceProviderId = '',
         $groupId = '',
         $groupPermissions = null,
         $departmentPermissions = null
    ) {
        $this->setServiceProviderId($serviceProviderId);
        $this->setGroupId($groupId);
        $this->setGroupPermissions($groupPermissions);
        $this->setDepartmentPermissions($departmentPermissions);
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
    public function setGroupPermissions(IncomingCallingPlanPermissionsModify $groupPermissions = null)
    {
        $this->groupPermissions = ($groupPermissions InstanceOf IncomingCallingPlanPermissionsModify)
             ? $groupPermissions
             : new IncomingCallingPlanPermissionsModify($groupPermissions);
        $this->groupPermissions->setElementName('groupPermissions');
        return $this;
    }

    /**
     * 
     * @return IncomingCallingPlanPermissionsModify $groupPermissions
     */
    public function getGroupPermissions()
    {
        return $this->groupPermissions;
    }

    /**
     * 
     */
    public function setDepartmentPermissions(IncomingCallingPlanDepartmentPermissionsModify $departmentPermissions = null)
    {
        $this->departmentPermissions = ($departmentPermissions InstanceOf IncomingCallingPlanDepartmentPermissionsModify)
             ? $departmentPermissions
             : new IncomingCallingPlanDepartmentPermissionsModify($departmentPermissions);
        $this->departmentPermissions->setElementName('departmentPermissions');
        return $this;
    }

    /**
     * 
     * @return IncomingCallingPlanDepartmentPermissionsModify $departmentPermissions
     */
    public function getDepartmentPermissions()
    {
        return $this->departmentPermissions;
    }
}
