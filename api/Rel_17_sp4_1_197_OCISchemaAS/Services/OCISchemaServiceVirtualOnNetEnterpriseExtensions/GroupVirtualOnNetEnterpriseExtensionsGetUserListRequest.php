<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceVirtualOnNetEnterpriseExtensions; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSearchCriteria\SearchCriteriaExactVirtualOnNetCallTypeName;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSearchCriteria\SearchCriteriaUserFirstName;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSearchCriteria\SearchCriteriaUserLastName;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSearchCriteria\SearchCriteriaExtension;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSearchCriteria\ResponseSizeLimit;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSearchCriteria\SearchCriteriaDn;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ServiceProviderId;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\GroupId;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
     * Request the list of Virtual On-Net users in a Group.
 *         It is possible to search by various criteria to restrict the number 
 *         of rows returned.
 *         Multiple search criteria are logically ANDed together.
 *         The response is either a 
 *         GroupVirtualOnNetEnterpriseExtensionsGetUserListResponse or an 
 *         ErrorResponse.
 */
class GroupVirtualOnNetEnterpriseExtensionsGetUserListRequest extends ComplexType implements ComplexInterface
{
    const     RESPONSE_TYPE                                = 'Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceVirtualOnNetEnterpriseExtensions\GroupVirtualOnNetEnterpriseExtensionsGetUserListResponse';
    public    $name                                        = __CLASS__;
    protected $serviceProviderId                           = null;
    protected $groupId                                     = null;
    protected $responseSizeLimit                           = null;
    protected $searchCriteriaUserLastName                  = null;
    protected $searchCriteriaUserFirstName                 = null;
    protected $searchCriteriaDn                            = null;
    protected $searchCriteriaExtension                     = null;
    protected $searchCriteriaExactVirtualOnNetCallTypeName = null;

    public function __construct(
         $serviceProviderId,
         $groupId,
         $responseSizeLimit = null,
         SearchCriteriaUserLastName $searchCriteriaUserLastName = null,
         SearchCriteriaUserFirstName $searchCriteriaUserFirstName = null,
         SearchCriteriaDn $searchCriteriaDn = null,
         SearchCriteriaExtension $searchCriteriaExtension = null,
         SearchCriteriaExactVirtualOnNetCallTypeName $searchCriteriaExactVirtualOnNetCallTypeName = null
    ) {
        $this->setServiceProviderId($serviceProviderId);
        $this->setGroupId($groupId);
        $this->setResponseSizeLimit($responseSizeLimit);
        $this->setSearchCriteriaUserLastName($searchCriteriaUserLastName);
        $this->setSearchCriteriaUserFirstName($searchCriteriaUserFirstName);
        $this->setSearchCriteriaDn($searchCriteriaDn);
        $this->setSearchCriteriaExtension($searchCriteriaExtension);
        $this->setSearchCriteriaExactVirtualOnNetCallTypeName($searchCriteriaExactVirtualOnNetCallTypeName);
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

    /**
     * Criteria for searching for a particular fully specified Virtual On-Net Call Type Name.
     */
    public function setSearchCriteriaExactVirtualOnNetCallTypeName(SearchCriteriaExactVirtualOnNetCallTypeName $searchCriteriaExactVirtualOnNetCallTypeName = null)
    {
        $this->searchCriteriaExactVirtualOnNetCallTypeName = SearchCriteriaExactVirtualOnNetCallTypeName $searchCriteriaExactVirtualOnNetCallTypeName;
    }

    /**
     * Criteria for searching for a particular fully specified Virtual On-Net Call Type Name.
     */
    public function getSearchCriteriaExactVirtualOnNetCallTypeName()
    {
        return (!$this->searchCriteriaExactVirtualOnNetCallTypeName) ?: $this->searchCriteriaExactVirtualOnNetCallTypeName->getValue();
    }
}
