<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceOutgoingCallingPlan; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceOutgoingCallingPlan\OutgoingCallingPlanDigitPatternOriginatingDepartmentPermissions;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceOutgoingCallingPlan\OutgoingCallingPlanDigitPatternOriginatingPermissions;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Response to GroupOutgoingCallingPlanDigitPlanOriginatingGetListRequest.
 */
class GroupOutgoingCallingPlanDigitPlanOriginatingGetListResponse extends ComplexType implements ComplexInterface
{
    public    $name = 'GroupOutgoingCallingPlanDigitPlanOriginatingGetListResponse';
    protected $groupPermissions;
    protected $departmentPermissions;

    /**
     * @return \Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceOutgoingCallingPlan\GroupOutgoingCallingPlanDigitPlanOriginatingGetListResponse $response
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * 
     */
    public function setGroupPermissions(OutgoingCallingPlanDigitPatternOriginatingPermissions $groupPermissions = null)
    {
        $this->groupPermissions = ($groupPermissions InstanceOf OutgoingCallingPlanDigitPatternOriginatingPermissions)
             ? $groupPermissions
             : new OutgoingCallingPlanDigitPatternOriginatingPermissions($groupPermissions);
        $this->groupPermissions->setName('groupPermissions');
        return $this;
    }

    /**
     * 
     * @return OutgoingCallingPlanDigitPatternOriginatingPermissions $groupPermissions
     */
    public function getGroupPermissions()
    {
        return $this->groupPermissions;
    }

    /**
     * 
     */
    public function setDepartmentPermissions(OutgoingCallingPlanDigitPatternOriginatingDepartmentPermissions $departmentPermissions = null)
    {
        $this->departmentPermissions = ($departmentPermissions InstanceOf OutgoingCallingPlanDigitPatternOriginatingDepartmentPermissions)
             ? $departmentPermissions
             : new OutgoingCallingPlanDigitPatternOriginatingDepartmentPermissions($departmentPermissions);
        $this->departmentPermissions->setName('departmentPermissions');
        return $this;
    }

    /**
     * 
     * @return OutgoingCallingPlanDigitPatternOriginatingDepartmentPermissions $departmentPermissions
     */
    public function getDepartmentPermissions()
    {
        return $this->departmentPermissions;
    }
}
