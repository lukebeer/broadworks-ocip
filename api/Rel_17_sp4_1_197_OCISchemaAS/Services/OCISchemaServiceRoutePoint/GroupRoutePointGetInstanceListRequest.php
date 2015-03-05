<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceRoutePoint; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ServiceProviderId;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\GroupId;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\DepartmentName;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ResponseSizeLimit;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\SearchCriteriaRoutePointName;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Get a list of Route Point instances within a group. 
 *         It is possible to search by various criteria to restrict the number of rows returned.
 *         The response is either GroupRoutePointGetInstanceListResponse or ErrorResponse.
 *         It is possible to get the instances within a specified department.
 */
class GroupRoutePointGetInstanceListRequest extends ComplexType implements ComplexInterface
{
    public    $name = __CLASS__;

    public function __construct(
             $serviceProviderId,
             $groupId,
             $groupDepartmentName=null,
             $responseSizeLimit=null,
             $searchCriteriaRoutePointName=null
    ) {
        $this->serviceProviderId            = new ServiceProviderId($serviceProviderId);
        $this->groupId                      = new GroupId($groupId);
        $this->groupDepartmentName          = new DepartmentName($groupDepartmentName);
        $this->responseSizeLimit            = $responseSizeLimit;
        $this->searchCriteriaRoutePointName = $searchCriteriaRoutePointName;
        $this->args                         = func_get_args();
    }

    public function setServiceProviderId($serviceProviderId)
    {
        $serviceProviderId and $this->serviceProviderId = new ServiceProviderId($serviceProviderId);
    }

    public function getServiceProviderId()
    {
        return (!$this->serviceProviderId) ?: $this->serviceProviderId->value();
    }

    public function setGroupId($groupId)
    {
        $groupId and $this->groupId = new GroupId($groupId);
    }

    public function getGroupId()
    {
        return (!$this->groupId) ?: $this->groupId->value();
    }

    public function setGroupDepartmentName($groupDepartmentName)
    {
        $groupDepartmentName and $this->groupDepartmentName = new DepartmentName($groupDepartmentName);
    }

    public function getGroupDepartmentName()
    {
        return (!$this->groupDepartmentName) ?: $this->groupDepartmentName->value();
    }

    public function setResponseSizeLimit($responseSizeLimit)
    {
        $responseSizeLimit and $this->responseSizeLimit = new ResponseSizeLimit($responseSizeLimit);
    }

    public function getResponseSizeLimit()
    {
        return (!$this->responseSizeLimit) ?: $this->responseSizeLimit->value();
    }

    public function setSearchCriteriaRoutePointName($searchCriteriaRoutePointName)
    {
        $searchCriteriaRoutePointName and $this->searchCriteriaRoutePointName = new SearchCriteriaRoutePointName($searchCriteriaRoutePointName);
    }

    public function getSearchCriteriaRoutePointName()
    {
        return (!$this->searchCriteriaRoutePointName) ?: $this->searchCriteriaRoutePointName->value();
    }
}
