<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceOutgoingCallingPlan; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceOutgoingCallingPlan\OutgoingPinholeDigitPlanDigitPatternOriginatingDepartmentPermissionsModify;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceOutgoingCallingPlan\OutgoingPinholeDigitPlanDigitPatternOriginatingPermissions;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ServiceProviderId;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\GroupId;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
     * Modify the originating permissions for Pinhole digit patterns for a group default and its departments.
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class GroupOutgoingCallingPlanPinholeDigitPlanOriginatingModifyListRequest extends ComplexType implements ComplexInterface
{
    public    $name                  = __CLASS__;
    protected $serviceProviderId     = null;
    protected $groupId               = null;
    protected $groupPermissions      = null;
    protected $departmentPermissions = null;

    public function __construct(
         $serviceProviderId,
         $groupId,
         OutgoingPinholeDigitPlanDigitPatternOriginatingPermissions $groupPermissions = null,
         OutgoingPinholeDigitPlanDigitPatternOriginatingDepartmentPermissionsModify $departmentPermissions = null
    ) {
        $this->setServiceProviderId($serviceProviderId);
        $this->setGroupId($groupId);
        $this->setGroupPermissions($groupPermissions);
        $this->setDepartmentPermissions($departmentPermissions);
    }

    /**
     * Service Provider Id uniquely identifies a service provider.
     *         NOTE: The service provider id has a maximum length of 30 bytes, not 30 characters.
     */
    public function setServiceProviderId($serviceProviderId = null)
    {
        $this->serviceProviderId = ($serviceProviderId InstanceOf ServiceProviderId)
             ? $serviceProviderId
             : new ServiceProviderId($serviceProviderId);
    }

    /**
     * Service Provider Id uniquely identifies a service provider.
     *         NOTE: The service provider id has a maximum length of 30 bytes, not 30 characters.
     */
    public function getServiceProviderId()
    {
        return (!$this->serviceProviderId) ?: $this->serviceProviderId->getValue();
    }

    /**
     * Group Id identifies a group within a service provider or enterprise. The group id is not
     *         unique system wide. It must be combined with a service provider id to be unique across the system.
     */
    public function setGroupId($groupId = null)
    {
        $this->groupId = ($groupId InstanceOf GroupId)
             ? $groupId
             : new GroupId($groupId);
    }

    /**
     * Group Id identifies a group within a service provider or enterprise. The group id is not
     *         unique system wide. It must be combined with a service provider id to be unique across the system.
     */
    public function getGroupId()
    {
        return (!$this->groupId) ?: $this->groupId->getValue();
    }

    /**
     * Outgoing Pinhole Digit Plan originating call permissions for specified digit patterns.
     */
    public function setGroupPermissions(OutgoingPinholeDigitPlanDigitPatternOriginatingPermissions $groupPermissions = null)
    {
        $this->groupPermissions = OutgoingPinholeDigitPlanDigitPatternOriginatingPermissions $groupPermissions;
    }

    /**
     * Outgoing Pinhole Digit Plan originating call permissions for specified digit patterns.
     */
    public function getGroupPermissions()
    {
        return (!$this->groupPermissions) ?: $this->groupPermissions->getValue();
    }

    /**
     * Modify Outgoing Pinhole Digit Plan originating call permissions for specified digit patterns.
     */
    public function setDepartmentPermissions(OutgoingPinholeDigitPlanDigitPatternOriginatingDepartmentPermissionsModify $departmentPermissions = null)
    {
        $this->departmentPermissions = OutgoingPinholeDigitPlanDigitPatternOriginatingDepartmentPermissionsModify $departmentPermissions;
    }

    /**
     * Modify Outgoing Pinhole Digit Plan originating call permissions for specified digit patterns.
     */
    public function getDepartmentPermissions()
    {
        return (!$this->departmentPermissions) ?: $this->departmentPermissions->getValue();
    }
}