<?php
/**
 * This file is part of http://github.com/LukeBeer/BroadworksOCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceOutgoingCallingPlan; 

use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceOutgoingCallingPlan\OutgoingCallingPlanDigitPatternRedirectingDepartmentPermissions;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceOutgoingCallingPlan\OutgoingCallingPlanDigitPatternRedirectingPermissions;
use BroadworksOCIP\Builder\Types\ComplexInterface;
use BroadworksOCIP\Builder\Types\ComplexType;
use BroadworksOCIP\Response\ResponseOutput;
use BroadworksOCIP\Client\Client;


/**
 * Response to GroupOutgoingCallingPlanDigitPlanRedirectingGetListRequest.
 */
class GroupOutgoingCallingPlanDigitPlanRedirectingGetListResponse extends ComplexType implements ComplexInterface
{
    public    $elementName = 'GroupOutgoingCallingPlanDigitPlanRedirectingGetListResponse';
    protected $groupPermissions;
    protected $departmentPermissions;

    /**
     * @return \BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceOutgoingCallingPlan\GroupOutgoingCallingPlanDigitPlanRedirectingGetListResponse $response
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * 
     */
    public function setGroupPermissions(OutgoingCallingPlanDigitPatternRedirectingPermissions $groupPermissions = null)
    {
        $this->groupPermissions = ($groupPermissions InstanceOf OutgoingCallingPlanDigitPatternRedirectingPermissions)
             ? $groupPermissions
             : new OutgoingCallingPlanDigitPatternRedirectingPermissions($groupPermissions);
        $this->groupPermissions->setElementName('groupPermissions');
        return $this;
    }

    /**
     * 
     * @return OutgoingCallingPlanDigitPatternRedirectingPermissions $groupPermissions
     */
    public function getGroupPermissions()
    {
        return $this->groupPermissions;
    }

    /**
     * 
     */
    public function setDepartmentPermissions(OutgoingCallingPlanDigitPatternRedirectingDepartmentPermissions $departmentPermissions = null)
    {
        $this->departmentPermissions = ($departmentPermissions InstanceOf OutgoingCallingPlanDigitPatternRedirectingDepartmentPermissions)
             ? $departmentPermissions
             : new OutgoingCallingPlanDigitPatternRedirectingDepartmentPermissions($departmentPermissions);
        $this->departmentPermissions->setElementName('departmentPermissions');
        return $this;
    }

    /**
     * 
     * @return OutgoingCallingPlanDigitPatternRedirectingDepartmentPermissions $departmentPermissions
     */
    public function getDepartmentPermissions()
    {
        return $this->departmentPermissions;
    }
}
