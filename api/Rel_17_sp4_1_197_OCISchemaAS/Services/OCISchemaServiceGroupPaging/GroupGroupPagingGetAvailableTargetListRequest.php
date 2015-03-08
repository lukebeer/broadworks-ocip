<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceGroupPaging; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSearchCriteria\SearchCriteriaExactUserDepartment;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSearchCriteria\SearchCriteriaExactUserGroup;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSearchCriteria\SearchCriteriaUserFirstName;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSearchCriteria\SearchCriteriaUserLastName;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSearchCriteria\ResponseSizeLimit;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\UserId;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
     * Get a list of users that can be assigned as targets to a given paging group.
 *         Searching for users by group only makes sense when the paging group is part of an Enterprise.
 *         The response is either GroupGroupPagingGetAvailableTargetListResponse or ErrorResponse.
 */
class GroupGroupPagingGetAvailableTargetListRequest extends ComplexType implements ComplexInterface
{
    const     RESPONSE_TYPE                      = 'Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceGroupPaging\GroupGroupPagingGetAvailableTargetListResponse';
    public    $name                              = __CLASS__;
    protected $serviceUserId                     = null;
    protected $responseSizeLimit                 = null;
    protected $searchCriteriaUserLastName        = null;
    protected $searchCriteriaUserFirstName       = null;
    protected $searchCriteriaExactUserDepartment = null;
    protected $searchCriteriaExactUserGroup      = null;

    public function __construct(
         $serviceUserId,
         $responseSizeLimit = null,
          $searchCriteriaUserLastName = null,
          $searchCriteriaUserFirstName = null,
          $searchCriteriaExactUserDepartment = null,
          $searchCriteriaExactUserGroup = null
    ) {
        $this->setServiceUserId($serviceUserId);
        $this->setResponseSizeLimit($responseSizeLimit);
        $this->setSearchCriteriaUserLastName($searchCriteriaUserLastName);
        $this->setSearchCriteriaUserFirstName($searchCriteriaUserFirstName);
        $this->setSearchCriteriaExactUserDepartment($searchCriteriaExactUserDepartment);
        $this->setSearchCriteriaExactUserGroup($searchCriteriaExactUserGroup);
    }

    /**
     * A user id consists of a user-portion optionally followed by an @ sign and a domain name.
     *         If the domain is not specified, it is assumed to be the system default domain.
     *         The domain is required when adding normal users and virtual users, i.e. Auto Attendants,
     *         Hunt Groups, Call Centers....
     *         The domain must not be specified for system-level and service-provider-level administrators.
     */
    public function setServiceUserId($serviceUserId = null)
    {
        $this->serviceUserId = ($serviceUserId InstanceOf UserId)
             ? $serviceUserId
             : new UserId($serviceUserId);
    }

    /**
     * A user id consists of a user-portion optionally followed by an @ sign and a domain name.
     *         If the domain is not specified, it is assumed to be the system default domain.
     *         The domain is required when adding normal users and virtual users, i.e. Auto Attendants,
     *         Hunt Groups, Call Centers....
     *         The domain must not be specified for system-level and service-provider-level administrators.
     */
    public function getServiceUserId()
    {
        return (!$this->serviceUserId) ?: $this->serviceUserId->getValue();
    }

    /**
     * Maximum number of rows to return in response to a search.
     *         By convention, elements of this type can be omitted to allow an
     *         unlimited number or rows in the search result.
     */
    public function setResponseSizeLimit($responseSizeLimit = null)
    {
        $this->responseSizeLimit = ($responseSizeLimit InstanceOf ResponseSizeLimit)
             ? $responseSizeLimit
             : new ResponseSizeLimit($responseSizeLimit);
    }

    /**
     * Maximum number of rows to return in response to a search.
     *         By convention, elements of this type can be omitted to allow an
     *         unlimited number or rows in the search result.
     */
    public function getResponseSizeLimit()
    {
        return (!$this->responseSizeLimit) ?: $this->responseSizeLimit->getValue();
    }

    /**
     * Criteria for searching for a user's last name.
     */
    public function setSearchCriteriaUserLastName(SearchCriteriaUserLastName $searchCriteriaUserLastName = null)
    {
        $this->searchCriteriaUserLastName =  $searchCriteriaUserLastName;
    }

    /**
     * Criteria for searching for a user's last name.
     */
    public function getSearchCriteriaUserLastName()
    {
        return (!$this->searchCriteriaUserLastName) ?: $this->searchCriteriaUserLastName->getValue();
    }

    /**
     * Criteria for searching for a user's first name.
     */
    public function setSearchCriteriaUserFirstName(SearchCriteriaUserFirstName $searchCriteriaUserFirstName = null)
    {
        $this->searchCriteriaUserFirstName =  $searchCriteriaUserFirstName;
    }

    /**
     * Criteria for searching for a user's first name.
     */
    public function getSearchCriteriaUserFirstName()
    {
        return (!$this->searchCriteriaUserFirstName) ?: $this->searchCriteriaUserFirstName->getValue();
    }

    /**
     * Criteria for searching for a particular fully specified user's department.
     */
    public function setSearchCriteriaExactUserDepartment(SearchCriteriaExactUserDepartment $searchCriteriaExactUserDepartment = null)
    {
        $this->searchCriteriaExactUserDepartment =  $searchCriteriaExactUserDepartment;
    }

    /**
     * Criteria for searching for a particular fully specified user's department.
     */
    public function getSearchCriteriaExactUserDepartment()
    {
        return (!$this->searchCriteriaExactUserDepartment) ?: $this->searchCriteriaExactUserDepartment->getValue();
    }

    /**
     * Criteria for searching for a particular fully specified user's group.
     */
    public function setSearchCriteriaExactUserGroup(SearchCriteriaExactUserGroup $searchCriteriaExactUserGroup = null)
    {
        $this->searchCriteriaExactUserGroup =  $searchCriteriaExactUserGroup;
    }

    /**
     * Criteria for searching for a particular fully specified user's group.
     */
    public function getSearchCriteriaExactUserGroup()
    {
        return (!$this->searchCriteriaExactUserGroup) ?: $this->searchCriteriaExactUserGroup->getValue();
    }
}
