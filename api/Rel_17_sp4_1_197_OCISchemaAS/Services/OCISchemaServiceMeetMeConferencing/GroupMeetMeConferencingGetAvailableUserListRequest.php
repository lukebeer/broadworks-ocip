<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceMeetMeConferencing; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSearchCriteria\SearchCriteriaExactUserDepartment;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSearchCriteria\SearchCriteriaExactUserGroup;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSearchCriteria\SearchCriteriaUserFirstName;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSearchCriteria\SearchCriteriaUserLastName;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSearchCriteria\SearchCriteriaExtension;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSearchCriteria\SearchCriteriaUserId;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSearchCriteria\ResponseSizeLimit;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSearchCriteria\SearchCriteriaDn;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ServiceProviderId;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\GroupId;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
     * Get a list of users that can be assigned to a Meet-Me Conferencing bridge.
 *         Searching for users by group only makes sense when the Meet-Me Conferencing is part of an Enterprise.
 *         The response is either GroupMeetMeConferencingGetAvailableUserListResponse or ErrorResponse.
 */
class GroupMeetMeConferencingGetAvailableUserListRequest extends ComplexType implements ComplexInterface
{
    const     RESPONSE_TYPE                      = 'Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceMeetMeConferencing\GroupMeetMeConferencingGetAvailableUserListResponse';
    public    $name                              = __CLASS__;
    protected $serviceProviderId                 = null;
    protected $groupId                           = null;
    protected $responseSizeLimit                 = null;
    protected $searchCriteriaUserLastName        = null;
    protected $searchCriteriaUserFirstName       = null;
    protected $searchCriteriaUserId              = null;
    protected $searchCriteriaExactUserDepartment = null;
    protected $searchCriteriaExactUserGroup      = null;
    protected $searchCriteriaDn                  = null;
    protected $searchCriteriaExtension           = null;

    public function __construct(
         $serviceProviderId,
         $groupId,
         $responseSizeLimit = null,
         SearchCriteriaUserLastName $searchCriteriaUserLastName = null,
         SearchCriteriaUserFirstName $searchCriteriaUserFirstName = null,
         SearchCriteriaUserId $searchCriteriaUserId = null,
         SearchCriteriaExactUserDepartment $searchCriteriaExactUserDepartment = null,
         SearchCriteriaExactUserGroup $searchCriteriaExactUserGroup = null,
         SearchCriteriaDn $searchCriteriaDn = null,
         SearchCriteriaExtension $searchCriteriaExtension = null
    ) {
        $this->setServiceProviderId($serviceProviderId);
        $this->setGroupId($groupId);
        $this->setResponseSizeLimit($responseSizeLimit);
        $this->setSearchCriteriaUserLastName($searchCriteriaUserLastName);
        $this->setSearchCriteriaUserFirstName($searchCriteriaUserFirstName);
        $this->setSearchCriteriaUserId($searchCriteriaUserId);
        $this->setSearchCriteriaExactUserDepartment($searchCriteriaExactUserDepartment);
        $this->setSearchCriteriaExactUserGroup($searchCriteriaExactUserGroup);
        $this->setSearchCriteriaDn($searchCriteriaDn);
        $this->setSearchCriteriaExtension($searchCriteriaExtension);
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
        $this->searchCriteriaUserLastName = SearchCriteriaUserLastName $searchCriteriaUserLastName;
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
        $this->searchCriteriaUserFirstName = SearchCriteriaUserFirstName $searchCriteriaUserFirstName;
    }

    /**
     * Criteria for searching for a user's first name.
     */
    public function getSearchCriteriaUserFirstName()
    {
        return (!$this->searchCriteriaUserFirstName) ?: $this->searchCriteriaUserFirstName->getValue();
    }

    /**
     * Criteria for searching for a user's userId.
     */
    public function setSearchCriteriaUserId(SearchCriteriaUserId $searchCriteriaUserId = null)
    {
        $this->searchCriteriaUserId = SearchCriteriaUserId $searchCriteriaUserId;
    }

    /**
     * Criteria for searching for a user's userId.
     */
    public function getSearchCriteriaUserId()
    {
        return (!$this->searchCriteriaUserId) ?: $this->searchCriteriaUserId->getValue();
    }

    /**
     * Criteria for searching for a particular fully specified user's department.
     */
    public function setSearchCriteriaExactUserDepartment(SearchCriteriaExactUserDepartment $searchCriteriaExactUserDepartment = null)
    {
        $this->searchCriteriaExactUserDepartment = SearchCriteriaExactUserDepartment $searchCriteriaExactUserDepartment;
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
        $this->searchCriteriaExactUserGroup = SearchCriteriaExactUserGroup $searchCriteriaExactUserGroup;
    }

    /**
     * Criteria for searching for a particular fully specified user's group.
     */
    public function getSearchCriteriaExactUserGroup()
    {
        return (!$this->searchCriteriaExactUserGroup) ?: $this->searchCriteriaExactUserGroup->getValue();
    }

    /**
     * Criteria for searching for a DN.
     */
    public function setSearchCriteriaDn(SearchCriteriaDn $searchCriteriaDn = null)
    {
        $this->searchCriteriaDn = SearchCriteriaDn $searchCriteriaDn;
    }

    /**
     * Criteria for searching for a DN.
     */
    public function getSearchCriteriaDn()
    {
        return (!$this->searchCriteriaDn) ?: $this->searchCriteriaDn->getValue();
    }

    /**
     * Criteria for searching for an extension.
     */
    public function setSearchCriteriaExtension(SearchCriteriaExtension $searchCriteriaExtension = null)
    {
        $this->searchCriteriaExtension = SearchCriteriaExtension $searchCriteriaExtension;
    }

    /**
     * Criteria for searching for an extension.
     */
    public function getSearchCriteriaExtension()
    {
        return (!$this->searchCriteriaExtension) ?: $this->searchCriteriaExtension->getValue();
    }
}
