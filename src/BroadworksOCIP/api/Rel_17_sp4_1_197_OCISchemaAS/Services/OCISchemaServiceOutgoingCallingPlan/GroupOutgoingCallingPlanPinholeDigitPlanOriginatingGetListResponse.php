<?php
/**
 * This file is part of http://github.com/LukeBeer/BroadworksOCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceOutgoingCallingPlan; 

use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceOutgoingCallingPlan\OutgoingPinholeDigitPlanDigitPatternOriginatingDepartmentPermissions;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceOutgoingCallingPlan\OutgoingPinholeDigitPlanDigitPatternOriginatingPermissions;
use BroadworksOCIP\Builder\Types\ComplexInterface;
use BroadworksOCIP\Builder\Types\ComplexType;
use BroadworksOCIP\Response\ResponseOutput;
use BroadworksOCIP\Client\Client;


/**
 * Response to GroupOutgoingCallingPlanPinholeDigitPlanOriginatingGetListRequest.
 */
class GroupOutgoingCallingPlanPinholeDigitPlanOriginatingGetListResponse extends ComplexType implements ComplexInterface
{
    public    $elementName = 'GroupOutgoingCallingPlanPinholeDigitPlanOriginatingGetListResponse';
    protected $groupPermissions;
    protected $departmentPermissions;

    /**
     * @return \BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceOutgoingCallingPlan\GroupOutgoingCallingPlanPinholeDigitPlanOriginatingGetListResponse $response
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * 
     */
    public function setGroupPermissions(OutgoingPinholeDigitPlanDigitPatternOriginatingPermissions $groupPermissions = null)
    {
        $this->groupPermissions = ($groupPermissions InstanceOf OutgoingPinholeDigitPlanDigitPatternOriginatingPermissions)
             ? $groupPermissions
             : new OutgoingPinholeDigitPlanDigitPatternOriginatingPermissions($groupPermissions);
        $this->groupPermissions->setElementName('groupPermissions');
        return $this;
    }

    /**
     * 
     * @return OutgoingPinholeDigitPlanDigitPatternOriginatingPermissions $groupPermissions
     */
    public function getGroupPermissions()
    {
        return $this->groupPermissions;
    }

    /**
     * 
     */
    public function setDepartmentPermissions(OutgoingPinholeDigitPlanDigitPatternOriginatingDepartmentPermissions $departmentPermissions = null)
    {
        $this->departmentPermissions = ($departmentPermissions InstanceOf OutgoingPinholeDigitPlanDigitPatternOriginatingDepartmentPermissions)
             ? $departmentPermissions
             : new OutgoingPinholeDigitPlanDigitPatternOriginatingDepartmentPermissions($departmentPermissions);
        $this->departmentPermissions->setElementName('departmentPermissions');
        return $this;
    }

    /**
     * 
     * @return OutgoingPinholeDigitPlanDigitPatternOriginatingDepartmentPermissions $departmentPermissions
     */
    public function getDepartmentPermissions()
    {
        return $this->departmentPermissions;
    }
}
