<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaGroup; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ServiceProviderId;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\GroupId;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ResponseSizeLimit;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\SearchCriteriaDn;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\SearchCriteriaUserFirstName;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\SearchCriteriaUserLastName;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\SearchCriteriaExactDnDepartment;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\SearchCriteriaExactDnActivation;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Get the list of assigned and unassigned DNs in a group. Each DN can be assigned
 *   to a user and/or department. Ranges of DNs with identical assignment and activation properties
 *   are coalesced to a single table row entry.
 *   The response is either a GroupDnGetAssignmentListResponse or an ErrorResponse.
 */
class GroupDnGetAssignmentListRequest extends ComplexType implements ComplexInterface
{
    public    $name = __CLASS__;

    public function __construct(
             $serviceProviderId,
             $groupId,
             $responseSizeLimit=null,
             $searchCriteriaDn=null,
             $searchCriteriaUserFirstName=null,
             $searchCriteriaUserLastName=null,
             $searchCriteriaExactDnDepartment=null,
             $searchCriteriaExactDnActivation=null
    ) {
        $this->serviceProviderId               = new ServiceProviderId($serviceProviderId);
        $this->groupId                         = new GroupId($groupId);
        $this->responseSizeLimit               = $responseSizeLimit;
        $this->searchCriteriaDn                = $searchCriteriaDn;
        $this->searchCriteriaUserFirstName     = $searchCriteriaUserFirstName;
        $this->searchCriteriaUserLastName      = $searchCriteriaUserLastName;
        $this->searchCriteriaExactDnDepartment = $searchCriteriaExactDnDepartment;
        $this->searchCriteriaExactDnActivation = $searchCriteriaExactDnActivation;
        $this->args                            = func_get_args();
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

    public function setSearchCriteriaDn($searchCriteriaDn)
    {
        $searchCriteriaDn and $this->searchCriteriaDn = new SearchCriteriaDn($searchCriteriaDn);
    }

    public function getSearchCriteriaDn()
    {
        return (!$this->searchCriteriaDn) ?: $this->searchCriteriaDn->value();
    }

    public function setSearchCriteriaUserFirstName($searchCriteriaUserFirstName)
    {
        $searchCriteriaUserFirstName and $this->searchCriteriaUserFirstName = new SearchCriteriaUserFirstName($searchCriteriaUserFirstName);
    }

    public function getSearchCriteriaUserFirstName()
    {
        return (!$this->searchCriteriaUserFirstName) ?: $this->searchCriteriaUserFirstName->value();
    }

    public function setSearchCriteriaUserLastName($searchCriteriaUserLastName)
    {
        $searchCriteriaUserLastName and $this->searchCriteriaUserLastName = new SearchCriteriaUserLastName($searchCriteriaUserLastName);
    }

    public function getSearchCriteriaUserLastName()
    {
        return (!$this->searchCriteriaUserLastName) ?: $this->searchCriteriaUserLastName->value();
    }

    public function setSearchCriteriaExactDnDepartment($searchCriteriaExactDnDepartment)
    {
        $searchCriteriaExactDnDepartment and $this->searchCriteriaExactDnDepartment = new SearchCriteriaExactDnDepartment($searchCriteriaExactDnDepartment);
    }

    public function getSearchCriteriaExactDnDepartment()
    {
        return (!$this->searchCriteriaExactDnDepartment) ?: $this->searchCriteriaExactDnDepartment->value();
    }

    public function setSearchCriteriaExactDnActivation($searchCriteriaExactDnActivation)
    {
        $searchCriteriaExactDnActivation and $this->searchCriteriaExactDnActivation = new SearchCriteriaExactDnActivation($searchCriteriaExactDnActivation);
    }

    public function getSearchCriteriaExactDnActivation()
    {
        return (!$this->searchCriteriaExactDnActivation) ?: $this->searchCriteriaExactDnActivation->value();
    }
}
