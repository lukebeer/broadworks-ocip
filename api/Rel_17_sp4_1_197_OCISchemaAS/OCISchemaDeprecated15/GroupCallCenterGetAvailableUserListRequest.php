<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated15; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ServiceProviderId;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\GroupId;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ResponseSizeLimit;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\SearchCriteriaUserLastName;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\SearchCriteriaUserFirstName;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\SearchCriteriaExactUserDepartment;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\SearchCriteriaExactUserGroup;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Get a list of users that can be assigned to a Call Center group.
 *         Searching for users by group only makes sense when the call center is part of an Enterprise.
 *         The response is either GroupCallCenterGetAvailableUserListResponse or ErrorResponse.
 *         
 *         Replaced By: GroupCallCenterGetAvailableAgentListRequest
 */
class GroupCallCenterGetAvailableUserListRequest extends ComplexType implements ComplexInterface
{
    public    $name = __CLASS__;

    public function __construct(
             $serviceProviderId,
             $groupId,
             $responseSizeLimit=null,
             $searchCriteriaUserLastName=null,
             $searchCriteriaUserFirstName=null,
             $searchCriteriaExactUserDepartment=null,
             $searchCriteriaExactUserGroup=null
    ) {
        $this->serviceProviderId                 = new ServiceProviderId($serviceProviderId);
        $this->groupId                           = new GroupId($groupId);
        $this->responseSizeLimit                 = $responseSizeLimit;
        $this->searchCriteriaUserLastName        = $searchCriteriaUserLastName;
        $this->searchCriteriaUserFirstName       = $searchCriteriaUserFirstName;
        $this->searchCriteriaExactUserDepartment = $searchCriteriaExactUserDepartment;
        $this->searchCriteriaExactUserGroup      = $searchCriteriaExactUserGroup;
        $this->args                              = func_get_args();
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

    public function setResponseSizeLimit($responseSizeLimit)
    {
        $responseSizeLimit and $this->responseSizeLimit = new ResponseSizeLimit($responseSizeLimit);
    }

    public function getResponseSizeLimit()
    {
        return (!$this->responseSizeLimit) ?: $this->responseSizeLimit->value();
    }

    public function setSearchCriteriaUserLastName($searchCriteriaUserLastName)
    {
        $searchCriteriaUserLastName and $this->searchCriteriaUserLastName = new SearchCriteriaUserLastName($searchCriteriaUserLastName);
    }

    public function getSearchCriteriaUserLastName()
    {
        return (!$this->searchCriteriaUserLastName) ?: $this->searchCriteriaUserLastName->value();
    }

    public function setSearchCriteriaUserFirstName($searchCriteriaUserFirstName)
    {
        $searchCriteriaUserFirstName and $this->searchCriteriaUserFirstName = new SearchCriteriaUserFirstName($searchCriteriaUserFirstName);
    }

    public function getSearchCriteriaUserFirstName()
    {
        return (!$this->searchCriteriaUserFirstName) ?: $this->searchCriteriaUserFirstName->value();
    }

    public function setSearchCriteriaExactUserDepartment($searchCriteriaExactUserDepartment)
    {
        $searchCriteriaExactUserDepartment and $this->searchCriteriaExactUserDepartment = new SearchCriteriaExactUserDepartment($searchCriteriaExactUserDepartment);
    }

    public function getSearchCriteriaExactUserDepartment()
    {
        return (!$this->searchCriteriaExactUserDepartment) ?: $this->searchCriteriaExactUserDepartment->value();
    }

    public function setSearchCriteriaExactUserGroup($searchCriteriaExactUserGroup)
    {
        $searchCriteriaExactUserGroup and $this->searchCriteriaExactUserGroup = new SearchCriteriaExactUserGroup($searchCriteriaExactUserGroup);
    }

    public function getSearchCriteriaExactUserGroup()
    {
        return (!$this->searchCriteriaExactUserGroup) ?: $this->searchCriteriaExactUserGroup->value();
    }
}
