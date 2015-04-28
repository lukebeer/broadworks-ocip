<?php
/**
 * This file is part of http://github.com/LukeBeer/BroadworksOCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCallCenter; 

use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSearchCriteria\SearchCriteriaCallCenterName;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSearchCriteria\ResponseSizeLimit;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ServiceProviderId;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\GroupId;
use BroadworksOCIP\Builder\Types\PrimitiveType;
use BroadworksOCIP\Builder\Types\ComplexInterface;
use BroadworksOCIP\Builder\Types\ComplexType;
use BroadworksOCIP\Response\ResponseOutput;
use BroadworksOCIP\Client\Client;


/**
 * Request to get all the current and past call centers for the group.
 *         The response is either GroupCallCenterCurrentAndPastCallCenterGetListResponse or ErrorResponse.
 */
class GroupCallCenterCurrentAndPastCallCenterGetListRequest extends ComplexType implements ComplexInterface
{
    public    $responseType = 'BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCallCenter\GroupCallCenterCurrentAndPastCallCenterGetListResponse';
    public    $elementName = 'GroupCallCenterCurrentAndPastCallCenterGetListRequest';
    protected $serviceProviderId;
    protected $isPremiumOnly;
    protected $groupId;
    protected $responseSizeLimit;
    protected $searchCriteriaCallCenterName;

    public function __construct(
         $serviceProviderId = '',
         $isPremiumOnly = null,
         $groupId = '',
         $responseSizeLimit = null,
         $searchCriteriaCallCenterName = null
    ) {
        $this->setServiceProviderId($serviceProviderId);
        $this->setIsPremiumOnly($isPremiumOnly);
        $this->setGroupId($groupId);
        $this->setResponseSizeLimit($responseSizeLimit);
        $this->setSearchCriteriaCallCenterName($searchCriteriaCallCenterName);
    }

    /**
     * @return \BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCallCenter\GroupCallCenterCurrentAndPastCallCenterGetListResponse $response
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
    public function setIsPremiumOnly($isPremiumOnly = null)
    {
        $this->isPremiumOnly = new PrimitiveType($isPremiumOnly);
        $this->isPremiumOnly->setElementName('isPremiumOnly');
        return $this;
    }

    /**
     * 
     * @return boolean $isPremiumOnly
     */
    public function getIsPremiumOnly()
    {
        return ($this->isPremiumOnly)
            ? $this->isPremiumOnly->getElementValue()
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
    public function setSearchCriteriaCallCenterName(SearchCriteriaCallCenterName $searchCriteriaCallCenterName = null)
    {
        $this->searchCriteriaCallCenterName = ($searchCriteriaCallCenterName InstanceOf SearchCriteriaCallCenterName)
             ? $searchCriteriaCallCenterName
             : new SearchCriteriaCallCenterName($searchCriteriaCallCenterName);
        $this->searchCriteriaCallCenterName->setElementName('searchCriteriaCallCenterName');
        return $this;
    }

    /**
     * 
     * @return SearchCriteriaCallCenterName $searchCriteriaCallCenterName
     */
    public function getSearchCriteriaCallCenterName()
    {
        return $this->searchCriteriaCallCenterName;
    }
}
