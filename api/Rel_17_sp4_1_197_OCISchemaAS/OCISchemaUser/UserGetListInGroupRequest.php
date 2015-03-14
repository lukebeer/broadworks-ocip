<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaUser; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSearchCriteria\SearchCriteriaExactUserInTrunkGroup;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSearchCriteria\SearchCriteriaExactUserDepartment;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSearchCriteria\SearchCriteriaUserFirstName;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSearchCriteria\SearchCriteriaEmailAddress;
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
 * Request the list of users in a group.
 *         It is possible to search by various criteria to restrict the number of rows returned.
 *         Multiple search criteria are logically ANDed together.
 *         The response is either a UserGetListInGroupResponse or an ErrorResponse.
 */
class UserGetListInGroupRequest extends ComplexType implements ComplexInterface
{
    public    $responseType                        = 'Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaUser\UserGetListInGroupResponse';
    public    $name                                = 'UserGetListInGroupRequest';
    protected $serviceProviderId                   = null;
    protected $GroupId                             = null;
    protected $responseSizeLimit                   = null;
    protected $searchCriteriaUserLastName          = null;
    protected $searchCriteriaUserFirstName         = null;
    protected $searchCriteriaDn                    = null;
    protected $searchCriteriaEmailAddress          = null;
    protected $searchCriteriaExactUserDepartment   = null;
    protected $searchCriteriaExactUserInTrunkGroup = null;

    public function __construct(
         $serviceProviderId,
         $GroupId,
         $responseSizeLimit = null,
         SearchCriteriaUserLastName $searchCriteriaUserLastName = null,
         SearchCriteriaUserFirstName $searchCriteriaUserFirstName = null,
         SearchCriteriaDn $searchCriteriaDn = null,
         SearchCriteriaEmailAddress $searchCriteriaEmailAddress = null,
         SearchCriteriaExactUserDepartment $searchCriteriaExactUserDepartment = null,
         SearchCriteriaExactUserInTrunkGroup $searchCriteriaExactUserInTrunkGroup = null
    ) {
        $this->setServiceProviderId($serviceProviderId);
        $this->setGroupId($GroupId);
        $this->setResponseSizeLimit($responseSizeLimit);
        $this->setSearchCriteriaUserLastName($searchCriteriaUserLastName);
        $this->setSearchCriteriaUserFirstName($searchCriteriaUserFirstName);
        $this->setSearchCriteriaDn($searchCriteriaDn);
        $this->setSearchCriteriaEmailAddress($searchCriteriaEmailAddress);
        $this->setSearchCriteriaExactUserDepartment($searchCriteriaExactUserDepartment);
        $this->setSearchCriteriaExactUserInTrunkGroup($searchCriteriaExactUserInTrunkGroup);
    }

    /**
     * @return \Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaUser\UserGetListInGroupResponse $response
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
    public function setGroupId($GroupId = null)
    {
        if (!$GroupId) return $this;
        $this->GroupId = ($GroupId InstanceOf GroupId)
             ? $GroupId
             : new GroupId($GroupId);
        $this->GroupId->setName('GroupId');
        return $this;
    }

    /**
     * 
     * @return GroupId $GroupId
     */
    public function getGroupId()
    {
        return $this->GroupId->getValue();
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
    public function setSearchCriteriaEmailAddress(SearchCriteriaEmailAddress $searchCriteriaEmailAddress = null)
    {
        if (!$searchCriteriaEmailAddress) return $this;
        $this->searchCriteriaEmailAddress = ($searchCriteriaEmailAddress InstanceOf SearchCriteriaEmailAddress)
             ? $searchCriteriaEmailAddress
             : new SearchCriteriaEmailAddress($searchCriteriaEmailAddress);
        $this->searchCriteriaEmailAddress->setName('searchCriteriaEmailAddress');
        return $this;
    }

    /**
     * 
     * @return SearchCriteriaEmailAddress $searchCriteriaEmailAddress
     */
    public function getSearchCriteriaEmailAddress()
    {
        return $this->searchCriteriaEmailAddress;
    }

    /**
     * 
     */
    public function setSearchCriteriaExactUserDepartment(SearchCriteriaExactUserDepartment $searchCriteriaExactUserDepartment = null)
    {
        if (!$searchCriteriaExactUserDepartment) return $this;
        $this->searchCriteriaExactUserDepartment = ($searchCriteriaExactUserDepartment InstanceOf SearchCriteriaExactUserDepartment)
             ? $searchCriteriaExactUserDepartment
             : new SearchCriteriaExactUserDepartment($searchCriteriaExactUserDepartment);
        $this->searchCriteriaExactUserDepartment->setName('searchCriteriaExactUserDepartment');
        return $this;
    }

    /**
     * 
     * @return SearchCriteriaExactUserDepartment $searchCriteriaExactUserDepartment
     */
    public function getSearchCriteriaExactUserDepartment()
    {
        return $this->searchCriteriaExactUserDepartment;
    }

    /**
     * 
     */
    public function setSearchCriteriaExactUserInTrunkGroup(SearchCriteriaExactUserInTrunkGroup $searchCriteriaExactUserInTrunkGroup = null)
    {
        if (!$searchCriteriaExactUserInTrunkGroup) return $this;
        $this->searchCriteriaExactUserInTrunkGroup = ($searchCriteriaExactUserInTrunkGroup InstanceOf SearchCriteriaExactUserInTrunkGroup)
             ? $searchCriteriaExactUserInTrunkGroup
             : new SearchCriteriaExactUserInTrunkGroup($searchCriteriaExactUserInTrunkGroup);
        $this->searchCriteriaExactUserInTrunkGroup->setName('searchCriteriaExactUserInTrunkGroup');
        return $this;
    }

    /**
     * 
     * @return SearchCriteriaExactUserInTrunkGroup $searchCriteriaExactUserInTrunkGroup
     */
    public function getSearchCriteriaExactUserInTrunkGroup()
    {
        return $this->searchCriteriaExactUserInTrunkGroup;
    }
}
