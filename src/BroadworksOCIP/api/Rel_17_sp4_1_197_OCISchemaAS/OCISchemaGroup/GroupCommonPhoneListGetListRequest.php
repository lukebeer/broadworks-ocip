<?php
/**
 * This file is part of http://github.com/LukeBeer/BroadworksOCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaGroup; 

use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSearchCriteria\SearchCriteriaGroupCommonPhoneListNumber;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSearchCriteria\SearchCriteriaGroupCommonPhoneListName;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSearchCriteria\ResponseSizeLimit;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ServiceProviderId;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\GroupId;
use BroadworksOCIP\Builder\Types\PrimitiveType;
use BroadworksOCIP\Builder\Types\ComplexInterface;
use BroadworksOCIP\Builder\Types\ComplexType;
use BroadworksOCIP\Response\ResponseOutput;
use BroadworksOCIP\Client\Client;


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
    public    $responseType = 'BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaGroup\GroupCommonPhoneListGetListResponse';
    public    $elementName = 'GroupCommonPhoneListGetListRequest';
    protected $serviceProviderId;
    protected $groupId;
    protected $responseSizeLimit;
    protected $searchCriteriaModeOr;
    protected $searchCriteriaGroupCommonPhoneListName;
    protected $searchCriteriaGroupCommonPhoneListNumber;

    public function __construct(
         $serviceProviderId = '',
         $groupId = '',
         $responseSizeLimit = null,
         $searchCriteriaModeOr = null,
         $searchCriteriaGroupCommonPhoneListName = null,
         $searchCriteriaGroupCommonPhoneListNumber = null
    ) {
        $this->setServiceProviderId($serviceProviderId);
        $this->setGroupId($groupId);
        $this->setResponseSizeLimit($responseSizeLimit);
        $this->setSearchCriteriaModeOr($searchCriteriaModeOr);
        $this->setSearchCriteriaGroupCommonPhoneListName($searchCriteriaGroupCommonPhoneListName);
        $this->setSearchCriteriaGroupCommonPhoneListNumber($searchCriteriaGroupCommonPhoneListNumber);
    }

    /**
     * @return \BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaGroup\GroupCommonPhoneListGetListResponse $response
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
        $this->serviceProviderId = ($serviceProviderId InstanceOf ServiceProviderId)
             ? $serviceProviderId
             : new ServiceProviderId($serviceProviderId);
        $this->serviceProviderId->setElementName('serviceProviderId');
        return $this;
    }

    /**
     * 
     * @return ServiceProviderId $serviceProviderId
     */
    public function getServiceProviderId()
    {
        return ($this->serviceProviderId)
            ? $this->serviceProviderId->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setGroupId($groupId = null)
    {
        $this->groupId = ($groupId InstanceOf GroupId)
             ? $groupId
             : new GroupId($groupId);
        $this->groupId->setElementName('groupId');
        return $this;
    }

    /**
     * 
     * @return GroupId $groupId
     */
    public function getGroupId()
    {
        return ($this->groupId)
            ? $this->groupId->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setResponseSizeLimit($responseSizeLimit = null)
    {
        $this->responseSizeLimit = ($responseSizeLimit InstanceOf ResponseSizeLimit)
             ? $responseSizeLimit
             : new ResponseSizeLimit($responseSizeLimit);
        $this->responseSizeLimit->setElementName('responseSizeLimit');
        return $this;
    }

    /**
     * 
     * @return ResponseSizeLimit $responseSizeLimit
     */
    public function getResponseSizeLimit()
    {
        return ($this->responseSizeLimit)
            ? $this->responseSizeLimit->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setSearchCriteriaModeOr($searchCriteriaModeOr = null)
    {
        $this->searchCriteriaModeOr = new PrimitiveType($searchCriteriaModeOr);
        $this->searchCriteriaModeOr->setElementName('searchCriteriaModeOr');
        return $this;
    }

    /**
     * 
     * @return boolean $searchCriteriaModeOr
     */
    public function getSearchCriteriaModeOr()
    {
        return ($this->searchCriteriaModeOr)
            ? $this->searchCriteriaModeOr->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setSearchCriteriaGroupCommonPhoneListName(SearchCriteriaGroupCommonPhoneListName $searchCriteriaGroupCommonPhoneListName = null)
    {
        $this->searchCriteriaGroupCommonPhoneListName = ($searchCriteriaGroupCommonPhoneListName InstanceOf SearchCriteriaGroupCommonPhoneListName)
             ? $searchCriteriaGroupCommonPhoneListName
             : new SearchCriteriaGroupCommonPhoneListName($searchCriteriaGroupCommonPhoneListName);
        $this->searchCriteriaGroupCommonPhoneListName->setElementName('searchCriteriaGroupCommonPhoneListName');
        return $this;
    }

    /**
     * 
     * @return SearchCriteriaGroupCommonPhoneListName $searchCriteriaGroupCommonPhoneListName
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
        $this->searchCriteriaGroupCommonPhoneListNumber = ($searchCriteriaGroupCommonPhoneListNumber InstanceOf SearchCriteriaGroupCommonPhoneListNumber)
             ? $searchCriteriaGroupCommonPhoneListNumber
             : new SearchCriteriaGroupCommonPhoneListNumber($searchCriteriaGroupCommonPhoneListNumber);
        $this->searchCriteriaGroupCommonPhoneListNumber->setElementName('searchCriteriaGroupCommonPhoneListNumber');
        return $this;
    }

    /**
     * 
     * @return SearchCriteriaGroupCommonPhoneListNumber $searchCriteriaGroupCommonPhoneListNumber
     */
    public function getSearchCriteriaGroupCommonPhoneListNumber()
    {
        return $this->searchCriteriaGroupCommonPhoneListNumber;
    }
}
