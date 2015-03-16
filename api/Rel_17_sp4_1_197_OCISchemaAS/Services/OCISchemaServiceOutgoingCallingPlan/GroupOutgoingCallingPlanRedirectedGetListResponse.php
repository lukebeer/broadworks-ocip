<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceOutgoingCallingPlan; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceOutgoingCallingPlan\OutgoingCallingPlanRedirectedDepartmentPermissions;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceOutgoingCallingPlan\OutgoingCallingPlanRedirectedPermissions;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Response to GroupOutgoingCallingPlanRedirectedGetListRequest.
 */
class GroupOutgoingCallingPlanRedirectedGetListResponse extends ComplexType implements ComplexInterface
{
    public    $name = 'GroupOutgoingCallingPlanRedirectedGetListResponse';
    protected $groupPermissions;
    protected $departmentPermissions;

    /**
     * @return \Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceOutgoingCallingPlan\GroupOutgoingCallingPlanRedirectedGetListResponse $response
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
        $this->groupPermissions->setName('groupPermissions');
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
        $this->departmentPermissions->setName('departmentPermissions');
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
