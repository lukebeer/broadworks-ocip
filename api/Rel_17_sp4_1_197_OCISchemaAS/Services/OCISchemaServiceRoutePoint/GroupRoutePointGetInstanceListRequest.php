<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceRoutePoint; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSearchCriteria\SearchCriteriaRoutePointName;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSearchCriteria\ResponseSizeLimit;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ServiceProviderId;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\DepartmentName;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\GroupId;
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
    const     RESPONSE_TYPE                 = 'Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceRoutePoint\GroupRoutePointGetInstanceListResponse';
    public    $name                         = __CLASS__;
    protected $serviceProviderId            = null;
    protected $groupId                      = null;
    protected $groupDepartmentName          = null;
    protected $responseSizeLimit            = null;
    protected $searchCriteriaRoutePointName = null;

    public function __construct(
         $serviceProviderId,
         $groupId,
         $groupDepartmentName = null,
         $responseSizeLimit = null,
         SearchCriteriaRoutePointName $searchCriteriaRoutePointName = null
    ) {
        $this->setServiceProviderId($serviceProviderId);
        $this->setGroupId($groupId);
        $this->setGroupDepartmentName($groupDepartmentName);
        $this->setResponseSizeLimit($responseSizeLimit);
        $this->setSearchCriteriaRoutePointName($searchCriteriaRoutePointName);
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
     * Department name. This is only the name of the department itself, not the full path name
     *         of the department and all its parents.
     */
    public function setGroupDepartmentName($groupDepartmentName = null)
    {
        $this->groupDepartmentName = ($groupDepartmentName InstanceOf DepartmentName)
             ? $groupDepartmentName
             : new DepartmentName($groupDepartmentName);
    }

    /**
     * Department name. This is only the name of the department itself, not the full path name
     *         of the department and all its parents.
     */
    public function getGroupDepartmentName()
    {
        return (!$this->groupDepartmentName) ?: $this->groupDepartmentName->getValue();
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
     * Criteria for searching for a route point
     */
    public function setSearchCriteriaRoutePointName(SearchCriteriaRoutePointName $searchCriteriaRoutePointName = null)
    {
        $this->searchCriteriaRoutePointName = SearchCriteriaRoutePointName $searchCriteriaRoutePointName;
    }

    /**
     * Criteria for searching for a route point
     */
    public function getSearchCriteriaRoutePointName()
    {
        return (!$this->searchCriteriaRoutePointName) ?: $this->searchCriteriaRoutePointName->getValue();
    }
}
