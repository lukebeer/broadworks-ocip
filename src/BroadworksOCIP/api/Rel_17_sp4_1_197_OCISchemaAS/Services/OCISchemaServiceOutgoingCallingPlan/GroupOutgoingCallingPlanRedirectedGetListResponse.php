<?php
/**
 * This file is part of http://github.com/LukeBeer/BroadworksOCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceOutgoingCallingPlan; 

use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceOutgoingCallingPlan\OutgoingCallingPlanRedirectedDepartmentPermissions;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceOutgoingCallingPlan\OutgoingCallingPlanRedirectedPermissions;
use BroadworksOCIP\Builder\Types\ComplexInterface;
use BroadworksOCIP\Builder\Types\ComplexType;
use BroadworksOCIP\Response\ResponseOutput;
use BroadworksOCIP\Client\Client;


/**
 * Response to GroupOutgoingCallingPlanRedirectedGetListRequest.
 */
class GroupOutgoingCallingPlanRedirectedGetListResponse extends ComplexType implements ComplexInterface
{
    public    $elementName = 'GroupOutgoingCallingPlanRedirectedGetListResponse';
    protected $groupPermissions;
    protected $departmentPermissions;

    /**
     * @return \BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceOutgoingCallingPlan\GroupOutgoingCallingPlanRedirectedGetListResponse $response
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * 
     */
    public function setGroupPermissions(OutgoingCallingPlanRedirectedPermissions $groupPermissions = null)
    {
        $this->groupPermissions = ($groupPermissions InstanceOf OutgoingCallingPlanRedirectedPermissions)
             ? $groupPermissions
             : new OutgoingCallingPlanRedirectedPermissions($groupPermissions);
        $this->groupPermissions->setElementName('groupPermissions');
        return $this;
    }

    /**
     * 
     * @return OutgoingCallingPlanRedirectedPermissions $groupPermissions
     */
    public function getGroupPermissions()
    {
        return $this->groupPermissions;
    }

    /**
     * 
     */
    public function setDepartmentPermissions(OutgoingCallingPlanRedirectedDepartmentPermissions $departmentPermissions = null)
    {
        $this->departmentPermissions = ($departmentPermissions InstanceOf OutgoingCallingPlanRedirectedDepartmentPermissions)
             ? $departmentPermissions
             : new OutgoingCallingPlanRedirectedDepartmentPermissions($departmentPermissions);
        $this->departmentPermissions->setElementName('departmentPermissions');
        return $this;
    }

    /**
     * 
     * @return OutgoingCallingPlanRedirectedDepartmentPermissions $departmentPermissions
     */
    public function getDepartmentPermissions()
    {
        return $this->departmentPermissions;
    }
}
