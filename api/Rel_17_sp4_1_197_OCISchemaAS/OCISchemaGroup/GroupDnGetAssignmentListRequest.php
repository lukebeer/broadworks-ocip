<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaGroup; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSearchCriteria\SearchCriteriaExactDnDepartment;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSearchCriteria\SearchCriteriaExactDnActivation;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSearchCriteria\SearchCriteriaUserFirstName;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSearchCriteria\SearchCriteriaUserLastName;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSearchCriteria\ResponseSizeLimit;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSearchCriteria\SearchCriteriaDn;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ServiceProviderId;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\GroupId;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Get the list of assigned and unassigned DNs in a group. Each DN can be assigned
 *   to a user and/or department. Ranges of DNs with identical assignment and activation properties
 *   are coalesced to a single table row entry.
 *   The response is either a GroupDnGetAssignmentListResponse or an ErrorResponse.
 */
class GroupDnGetAssignmentListRequest extends ComplexType implements ComplexInterface
{
    public    $responseType                    = 'Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaGroup\GroupDnGetAssignmentListResponse';
    public    $name                            = 'GroupDnGetAssignmentListRequest';
    protected $serviceProviderId               = null;
    protected $groupId                         = null;
    protected $responseSizeLimit               = null;
    protected $searchCriteriaDn                = null;
    protected $searchCriteriaUserFirstName     = null;
    protected $searchCriteriaUserLastName      = null;
    protected $searchCriteriaExactDnDepartment = null;
    protected $searchCriteriaExactDnActivation = null;

    public function __construct(
         $serviceProviderId,
         $groupId,
         $responseSizeLimit = null,
         SearchCriteriaDn $searchCriteriaDn = null,
         SearchCriteriaUserFirstName $searchCriteriaUserFirstName = null,
         SearchCriteriaUserLastName $searchCriteriaUserLastName = null,
         SearchCriteriaExactDnDepartment $searchCriteriaExactDnDepartment = null,
         SearchCriteriaExactDnActivation $searchCriteriaExactDnActivation = null
    ) {
        $this->setServiceProviderId($serviceProviderId);
        $this->setGroupId($groupId);
        $this->setResponseSizeLimit($responseSizeLimit);
        $this->setSearchCriteriaDn($searchCriteriaDn);
        $this->setSearchCriteriaUserFirstName($searchCriteriaUserFirstName);
        $this->setSearchCriteriaUserLastName($searchCriteriaUserLastName);
        $this->setSearchCriteriaExactDnDepartment($searchCriteriaExactDnDepartment);
        $this->setSearchCriteriaExactDnActivation($searchCriteriaExactDnActivation);
    }

    /**
     * @return \Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaGroup\GroupDnGetAssignmentListResponse $response
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
        if (!$serviceProviderId) return $this;
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
        return $this->serviceProviderId->getValue();
    }

    /**
     * 
     */
    public function setGroupId($groupId = null)
    {
        if (!$groupId) return $this;
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
        return $this->groupId->getValue();
    }

    /**
     * 
     */
    public function setResponseSizeLimit($responseSizeLimit = null)
    {
        if (!$responseSizeLimit) return $this;
        $this->responseSizeLimit = ($responseSizeLimit InstanceOf ResponseSizeLimit)
             ? $responseSizeLimit
             : new ResponseSizeLimit($responseSizeLimit);
        $this->responseSizeLimit->setName('responseSizeLimit');
        return $this;
    }

    /**
     * 
     * @return ResponseSizeLimit $responseSizeLimit
     */
    public function getResponseSizeLimit()
    {
        return $this->responseSizeLimit->getValue();
    }

    /**
     * 
     */
    public function setSearchCriteriaDn(SearchCriteriaDn $searchCriteriaDn = null)
    {
        if (!$searchCriteriaDn) return $this;
        $this->searchCriteriaDn = ($searchCriteriaDn InstanceOf SearchCriteriaDn)
             ? $searchCriteriaDn
             : new SearchCriteriaDn($searchCriteriaDn);
        $this->searchCriteriaDn->setName('searchCriteriaDn');
        return $this;
    }

    /**
     * 
     * @return SearchCriteriaDn $searchCriteriaDn
     */
    public function getSearchCriteriaDn()
    {
        return $this->searchCriteriaDn;
    }

    /**
     * 
     */
    public function setSearchCriteriaUserFirstName(SearchCriteriaUserFirstName $searchCriteriaUserFirstName = null)
    {
        if (!$searchCriteriaUserFirstName) return $this;
        $this->searchCriteriaUserFirstName = ($searchCriteriaUserFirstName InstanceOf SearchCriteriaUserFirstName)
             ? $searchCriteriaUserFirstName
             : new SearchCriteriaUserFirstName($searchCriteriaUserFirstName);
        $this->searchCriteriaUserFirstName->setName('searchCriteriaUserFirstName');
        return $this;
    }

    /**
     * 
     * @return SearchCriteriaUserFirstName $searchCriteriaUserFirstName
     */
    public function getSearchCriteriaUserFirstName()
    {
        return $this->searchCriteriaUserFirstName;
    }

    /**
     * 
     */
    public function setSearchCriteriaUserLastName(SearchCriteriaUserLastName $searchCriteriaUserLastName = null)
    {
        if (!$searchCriteriaUserLastName) return $this;
        $this->searchCriteriaUserLastName = ($searchCriteriaUserLastName InstanceOf SearchCriteriaUserLastName)
             ? $searchCriteriaUserLastName
             : new SearchCriteriaUserLastName($searchCriteriaUserLastName);
        $this->searchCriteriaUserLastName->setName('searchCriteriaUserLastName');
        return $this;
    }

    /**
     * 
     * @return SearchCriteriaUserLastName $searchCriteriaUserLastName
     */
    public function getSearchCriteriaUserLastName()
    {
        return $this->searchCriteriaUserLastName;
    }

    /**
     * 
     */
    public function setSearchCriteriaExactDnDepartment(SearchCriteriaExactDnDepartment $searchCriteriaExactDnDepartment = null)
    {
        if (!$searchCriteriaExactDnDepartment) return $this;
        $this->searchCriteriaExactDnDepartment = ($searchCriteriaExactDnDepartment InstanceOf SearchCriteriaExactDnDepartment)
             ? $searchCriteriaExactDnDepartment
             : new SearchCriteriaExactDnDepartment($searchCriteriaExactDnDepartment);
        $this->searchCriteriaExactDnDepartment->setName('searchCriteriaExactDnDepartment');
        return $this;
    }

    /**
     * 
     * @return SearchCriteriaExactDnDepartment $searchCriteriaExactDnDepartment
     */
    public function getSearchCriteriaExactDnDepartment()
    {
        return $this->searchCriteriaExactDnDepartment;
    }

    /**
     * 
     */
    public function setSearchCriteriaExactDnActivation(SearchCriteriaExactDnActivation $searchCriteriaExactDnActivation = null)
    {
        if (!$searchCriteriaExactDnActivation) return $this;
        $this->searchCriteriaExactDnActivation = ($searchCriteriaExactDnActivation InstanceOf SearchCriteriaExactDnActivation)
             ? $searchCriteriaExactDnActivation
             : new SearchCriteriaExactDnActivation($searchCriteriaExactDnActivation);
        $this->searchCriteriaExactDnActivation->setName('searchCriteriaExactDnActivation');
        return $this;
    }

    /**
     * 
     * @return SearchCriteriaExactDnActivation $searchCriteriaExactDnActivation
     */
    public function getSearchCriteriaExactDnActivation()
    {
        return $this->searchCriteriaExactDnActivation;
    }
}
