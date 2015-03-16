<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceOutgoingCallingPlan; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceOutgoingCallingPlan\OutgoingCallingPlanDigitPatternRedirectingDepartmentPermissionsModify;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceOutgoingCallingPlan\OutgoingCallingPlanDigitPatternRedirectingPermissions;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ServiceProviderId;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\GroupId;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Modify the redirecting permissions for digit patterns for a group default and it's departments.
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class GroupOutgoingCallingPlanDigitPlanRedirectingModifyListRequest extends ComplexType implements ComplexInterface
{
    public    $name = 'GroupOutgoingCallingPlanDigitPlanRedirectingModifyListRequest';
    protected $serviceProviderId;
    protected $groupId;
    protected $groupPermissions;
    protected $departmentPermissions;

    public function __construct(
         $serviceProviderId = '',
         $groupId = '',
         OutgoingCallingPlanDigitPatternRedirectingPermissions $groupPermissions = null,
         OutgoingCallingPlanDigitPatternRedirectingDepartmentPermissionsModify $departmentPermissions = null
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
        $this->serviceProviderId->setName('serviceProviderId');
        return $this;
    }

    /**
     * 
     * @return ServiceProviderId $serviceProviderId
     */
    public function getServiceProviderId()
    {
        return ($this->serviceProviderId) ? $this->serviceProviderId->getValue() : null;
    }

    /**
     * 
     */
    public function setGroupId($groupId = null)
    {
        $this->groupId = ($groupId InstanceOf GroupId)
             ? $groupId
             : new GroupId($groupId);
        $this->groupId->setName('groupId');
        return $this;
    }

    /**
     * 
     * @return GroupId $groupId
     */
    public function getGroupId()
    {
        return ($this->groupId) ? $this->groupId->getValue() : null;
    }

    /**
     * 
     */
    public function setGroupPermissions(OutgoingCallingPlanDigitPatternRedirectingPermissions $groupPermissions = null)
    {
        $this->groupPermissions = ($groupPermissions InstanceOf OutgoingCallingPlanDigitPatternRedirectingPermissions)
             ? $groupPermissions
             : new OutgoingCallingPlanDigitPatternRedirectingPermissions($groupPermissions);
        $this->groupPermissions->setName('groupPermissions');
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
    public function setDepartmentPermissions(OutgoingCallingPlanDigitPatternRedirectingDepartmentPermissionsModify $departmentPermissions = null)
    {
        $this->departmentPermissions = ($departmentPermissions InstanceOf OutgoingCallingPlanDigitPatternRedirectingDepartmentPermissionsModify)
             ? $departmentPermissions
             : new OutgoingCallingPlanDigitPatternRedirectingDepartmentPermissionsModify($departmentPermissions);
        $this->departmentPermissions->setName('departmentPermissions');
        return $this;
    }

    /**
     * 
     * @return OutgoingCallingPlanDigitPatternRedirectingDepartmentPermissionsModify $departmentPermissions
     */
    public function getDepartmentPermissions()
    {
        return $this->departmentPermissions;
    }
}
