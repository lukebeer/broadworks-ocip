<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaGroup; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSearchCriteria\SearchCriteriaGroupCommonPhoneListNumber;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSearchCriteria\SearchCriteriaGroupCommonPhoneListName;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSearchCriteria\ResponseSizeLimit;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ServiceProviderId;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\GroupId;
use Broadworks_OCIP\core\Builder\Types\PrimitiveType;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaGroup\GroupCommonPhoneListGetListResponse;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Get a group's common phone list.
 *         The response is either a GroupCommonPhoneListGetListResponse or an ErrorResponse.
 *         The search can be done using multiple criterion.
 *         If the searchCriteriaModeOr is present, any result matching any one criteria is included in the results. 
 *         Otherwise, only results matching all the search criterion are included in the results. 
 *         If no search criteria is specified, all results are returned.
 *         Specifying searchCriteriaModeOr without any search criteria results in an ErrorResponse.
 *         In all cases, if a responseSizeLimit is specified and the number of matching results is more than this limit, then an
 *         ErrorResponse is returned.
 */
class GroupCommonPhoneListGetListRequest extends ComplexType implements ComplexInterface
{
    public    $responseType                             = 'Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaGroup\GroupCommonPhoneListGetListResponse';
    public    $name                                     = 'GroupCommonPhoneListGetListRequest';
    protected $serviceProviderId                        = null;
    protected $groupId                                  = null;
    protected $responseSizeLimit                        = null;
    protected $searchCriteriaModeOr                     = null;
    protected $searchCriteriaGroupCommonPhoneListName   = null;
    protected $searchCriteriaGroupCommonPhoneListNumber = null;

    public function __construct(
         $serviceProviderId,
         $groupId,
         $responseSizeLimit = null,
         $searchCriteriaModeOr = null,
         SearchCriteriaGroupCommonPhoneListName $searchCriteriaGroupCommonPhoneListName = null,
         SearchCriteriaGroupCommonPhoneListNumber $searchCriteriaGroupCommonPhoneListNumber = null
    ) {
        $this->setServiceProviderId($serviceProviderId);
        $this->setGroupId($groupId);
        $this->setResponseSizeLimit($responseSizeLimit);
        $this->setSearchCriteriaModeOr($searchCriteriaModeOr);
        $this->setSearchCriteriaGroupCommonPhoneListName($searchCriteriaGroupCommonPhoneListName);
        $this->setSearchCriteriaGroupCommonPhoneListNumber($searchCriteriaGroupCommonPhoneListNumber);
    }

    /**
     * @return GroupCommonPhoneListGetListResponse
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
     * @return ServiceProviderId
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
     * @return GroupId
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
     * @return ResponseSizeLimit
     */
    public function getResponseSizeLimit()
    {
        return $this->responseSizeLimit->getValue();
    }

    /**
     * 
     */
    public function setSearchCriteriaModeOr($searchCriteriaModeOr = null)
    {
        if (!$searchCriteriaModeOr) return $this;
        $this->searchCriteriaModeOr = new PrimitiveType($searchCriteriaModeOr);
        $this->searchCriteriaModeOr->setName('searchCriteriaModeOr');
        return $this;
    }

    /**
     * 
     * @return xs:boolean
     */
    public function getSearchCriteriaModeOr()
    {
        return $this->searchCriteriaModeOr->getValue();
    }

    /**
     * 
     */
    public function setSearchCriteriaGroupCommonPhoneListName(SearchCriteriaGroupCommonPhoneListName $searchCriteriaGroupCommonPhoneListName = null)
    {
        if (!$searchCriteriaGroupCommonPhoneListName) return $this;
        $this->searchCriteriaGroupCommonPhoneListName = ($searchCriteriaGroupCommonPhoneListName InstanceOf SearchCriteriaGroupCommonPhoneListName)
             ? $searchCriteriaGroupCommonPhoneListName
             : new SearchCriteriaGroupCommonPhoneListName($searchCriteriaGroupCommonPhoneListName);
        $this->searchCriteriaGroupCommonPhoneListName->setName('searchCriteriaGroupCommonPhoneListName');
        return $this;
    }

    /**
     * 
     * @return SearchCriteriaGroupCommonPhoneListName
     */
    public function getSearchCriteriaGroupCommonPhoneListName()
    {
        return $this->searchCriteriaGroupCommonPhoneListName;
    }

    /**
     * 
     */
    public function setSearchCriteriaGroupCommonPhoneListNumber(SearchCriteriaGroupCommonPhoneListNumber $searchCriteriaGroupCommonPhoneListNumber = null)
    {
        if (!$searchCriteriaGroupCommonPhoneListNumber) return $this;
        $this->searchCriteriaGroupCommonPhoneListNumber = ($searchCriteriaGroupCommonPhoneListNumber InstanceOf SearchCriteriaGroupCommonPhoneListNumber)
             ? $searchCriteriaGroupCommonPhoneListNumber
             : new SearchCriteriaGroupCommonPhoneListNumber($searchCriteriaGroupCommonPhoneListNumber);
        $this->searchCriteriaGroupCommonPhoneListNumber->setName('searchCriteriaGroupCommonPhoneListNumber');
        return $this;
    }

    /**
     * 
     * @return SearchCriteriaGroupCommonPhoneListNumber
     */
    public function getSearchCriteriaGroupCommonPhoneListNumber()
    {
        return $this->searchCriteriaGroupCommonPhoneListNumber;
    }
}
