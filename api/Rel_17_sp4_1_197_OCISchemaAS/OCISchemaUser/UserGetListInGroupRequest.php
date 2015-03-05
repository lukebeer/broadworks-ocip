<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaUser; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ServiceProviderId;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\GroupId;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ResponseSizeLimit;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\SearchCriteriaUserLastName;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\SearchCriteriaUserFirstName;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\SearchCriteriaDn;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\SearchCriteriaEmailAddress;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\SearchCriteriaExactUserDepartment;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\SearchCriteriaExactUserInTrunkGroup;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Request the list of users in a group.
 *         It is possible to search by various criteria to restrict the number of rows returned.
 *         Multiple search criteria are logically ANDed together.
 *         The response is either a UserGetListInGroupResponse or an ErrorResponse.
 */
class UserGetListInGroupRequest extends ComplexType implements ComplexInterface
{
    public    $name = __CLASS__;

    public function __construct(
             $serviceProviderId,
             $GroupId,
             $responseSizeLimit=null,
             $searchCriteriaUserLastName=null,
             $searchCriteriaUserFirstName=null,
             $searchCriteriaDn=null,
             $searchCriteriaEmailAddress=null,
             $searchCriteriaExactUserDepartment=null,
             $searchCriteriaExactUserInTrunkGroup=null
    ) {
        $this->serviceProviderId                   = new ServiceProviderId($serviceProviderId);
        $this->GroupId                             = new GroupId($GroupId);
        $this->responseSizeLimit                   = $responseSizeLimit;
        $this->searchCriteriaUserLastName          = $searchCriteriaUserLastName;
        $this->searchCriteriaUserFirstName         = $searchCriteriaUserFirstName;
        $this->searchCriteriaDn                    = $searchCriteriaDn;
        $this->searchCriteriaEmailAddress          = $searchCriteriaEmailAddress;
        $this->searchCriteriaExactUserDepartment   = $searchCriteriaExactUserDepartment;
        $this->searchCriteriaExactUserInTrunkGroup = $searchCriteriaExactUserInTrunkGroup;
        $this->args                                = func_get_args();
    }

    public function setServiceProviderId($serviceProviderId)
    {
        $serviceProviderId and $this->serviceProviderId = new ServiceProviderId($serviceProviderId);
    }

    public function getServiceProviderId()
    {
        return (!$this->serviceProviderId) ?: $this->serviceProviderId->value();
    }

    public function setGroupId($GroupId)
    {
        $GroupId and $this->GroupId = new GroupId($GroupId);
    }

    public function getGroupId()
    {
        return (!$this->GroupId) ?: $this->GroupId->value();
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

    public function setSearchCriteriaDn($searchCriteriaDn)
    {
        $searchCriteriaDn and $this->searchCriteriaDn = new SearchCriteriaDn($searchCriteriaDn);
    }

    public function getSearchCriteriaDn()
    {
        return (!$this->searchCriteriaDn) ?: $this->searchCriteriaDn->value();
    }

    public function setSearchCriteriaEmailAddress($searchCriteriaEmailAddress)
    {
        $searchCriteriaEmailAddress and $this->searchCriteriaEmailAddress = new SearchCriteriaEmailAddress($searchCriteriaEmailAddress);
    }

    public function getSearchCriteriaEmailAddress()
    {
        return (!$this->searchCriteriaEmailAddress) ?: $this->searchCriteriaEmailAddress->value();
    }

    public function setSearchCriteriaExactUserDepartment($searchCriteriaExactUserDepartment)
    {
        $searchCriteriaExactUserDepartment and $this->searchCriteriaExactUserDepartment = new SearchCriteriaExactUserDepartment($searchCriteriaExactUserDepartment);
    }

    public function getSearchCriteriaExactUserDepartment()
    {
        return (!$this->searchCriteriaExactUserDepartment) ?: $this->searchCriteriaExactUserDepartment->value();
    }

    public function setSearchCriteriaExactUserInTrunkGroup($searchCriteriaExactUserInTrunkGroup)
    {
        $searchCriteriaExactUserInTrunkGroup and $this->searchCriteriaExactUserInTrunkGroup = new SearchCriteriaExactUserInTrunkGroup($searchCriteriaExactUserInTrunkGroup);
    }

    public function getSearchCriteriaExactUserInTrunkGroup()
    {
        return (!$this->searchCriteriaExactUserInTrunkGroup) ?: $this->searchCriteriaExactUserInTrunkGroup->value();
    }
}
