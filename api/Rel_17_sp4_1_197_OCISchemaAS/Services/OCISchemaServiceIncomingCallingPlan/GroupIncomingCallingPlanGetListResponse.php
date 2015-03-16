<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceIncomingCallingPlan; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceIncomingCallingPlan\IncomingCallingPlanDepartmentPermissions;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceIncomingCallingPlan\IncomingCallingPlanPermissions;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Response to GroupIncomingCallingPlanGetListRequest.
 */
class GroupIncomingCallingPlanGetListResponse extends ComplexType implements ComplexInterface
{
    public    $name = 'GroupIncomingCallingPlanGetListResponse';
    protected $groupPermissions;
    protected $departmentPermissions;

    /**
     * @return \Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceIncomingCallingPlan\GroupIncomingCallingPlanGetListResponse $response
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * 
     */
    public function setGroupPermissions(IncomingCallingPlanPermissions $groupPermissions = null)
    {
        $this->groupPermissions = ($groupPermissions InstanceOf IncomingCallingPlanPermissions)
             ? $groupPermissions
             : new IncomingCallingPlanPermissions($groupPermissions);
        $this->groupPermissions->setName('groupPermissions');
        return $this;
    }

    /**
     * 
     * @return IncomingCallingPlanPermissions $groupPermissions
     */
    public function getGroupPermissions()
    {
        return $this->groupPermissions;
    }

    /**
     * 
     */
    public function setDepartmentPermissions(IncomingCallingPlanDepartmentPermissions $departmentPermissions = null)
    {
        $this->departmentPermissions = ($departmentPermissions InstanceOf IncomingCallingPlanDepartmentPermissions)
             ? $departmentPermissions
             : new IncomingCallingPlanDepartmentPermissions($departmentPermissions);
        $this->departmentPermissions->setName('departmentPermissions');
        return $this;
    }

    /**
     * 
     * @return IncomingCallingPlanDepartmentPermissions $departmentPermissions
     */
    public function getDepartmentPermissions()
    {
        return $this->departmentPermissions;
    }
}
