<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceOutgoingCallingPlan; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceOutgoingCallingPlan\OutgoingPinholeDigitPlanDigitPatternRedirectingDepartmentPermissions;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceOutgoingCallingPlan\OutgoingPinholeDigitPlanDigitPatternRedirectingPermissions;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Response to GroupOutgoingCallingPlanPinholeDigitPlanRedirectingGetListRequest.
 */
class GroupOutgoingCallingPlanPinholeDigitPlanRedirectingGetListResponse extends ComplexType implements ComplexInterface
{
    public    $name = 'GroupOutgoingCallingPlanPinholeDigitPlanRedirectingGetListResponse';
    protected $groupPermissions;
    protected $departmentPermissions;

    /**
     * @return \Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceOutgoingCallingPlan\GroupOutgoingCallingPlanPinholeDigitPlanRedirectingGetListResponse $response
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * 
     */
    public function setGroupPermissions(OutgoingPinholeDigitPlanDigitPatternRedirectingPermissions $groupPermissions = null)
    {
        $this->groupPermissions = ($groupPermissions InstanceOf OutgoingPinholeDigitPlanDigitPatternRedirectingPermissions)
             ? $groupPermissions
             : new OutgoingPinholeDigitPlanDigitPatternRedirectingPermissions($groupPermissions);
        $this->groupPermissions->setName('groupPermissions');
        return $this;
    }

    /**
     * 
     * @return OutgoingPinholeDigitPlanDigitPatternRedirectingPermissions $groupPermissions
     */
    public function getGroupPermissions()
    {
        return $this->groupPermissions;
    }

    /**
     * 
     */
    public function setDepartmentPermissions(OutgoingPinholeDigitPlanDigitPatternRedirectingDepartmentPermissions $departmentPermissions = null)
    {
        $this->departmentPermissions = ($departmentPermissions InstanceOf OutgoingPinholeDigitPlanDigitPatternRedirectingDepartmentPermissions)
             ? $departmentPermissions
             : new OutgoingPinholeDigitPlanDigitPatternRedirectingDepartmentPermissions($departmentPermissions);
        $this->departmentPermissions->setName('departmentPermissions');
        return $this;
    }

    /**
     * 
     * @return OutgoingPinholeDigitPlanDigitPatternRedirectingDepartmentPermissions $departmentPermissions
     */
    public function getDepartmentPermissions()
    {
        return $this->departmentPermissions;
    }
}
