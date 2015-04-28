<?php
/**
 * This file is part of http://github.com/LukeBeer/BroadworksOCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaGroup; 

use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSearchCriteria\SearchCriteriaRoutePointName;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\RoutePointExternalSystem;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSearchCriteria\ResponseSizeLimit;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ServiceProviderId;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\GroupId;
use BroadworksOCIP\Builder\Types\ComplexInterface;
use BroadworksOCIP\Builder\Types\ComplexType;
use BroadworksOCIP\Response\ResponseOutput;
use BroadworksOCIP\Client\Client;


/**
 * Request a list of route points within in a group that have a given external system assigned.
 *         The response is either GroupRoutePointExternalSystemGetAssignedRoutePointListResponse or ErrorResponse.
 */
class GroupRoutePointExternalSystemGetAssignedRoutePointListRequest extends ComplexType implements ComplexInterface
{
    public    $responseType = 'BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaGroup\GroupRoutePointExternalSystemGetAssignedRoutePointListResponse';
    public    $elementName = 'GroupRoutePointExternalSystemGetAssignedRoutePointListRequest';
    protected $serviceProviderId;
    protected $groupId;
    protected $externalSystem;
    protected $responseSizeLimit;
    protected $searchCriteriaRoutePointName;

    public function __construct(
         $serviceProviderId = '',
         $groupId = '',
         $externalSystem = '',
         $responseSizeLimit = null,
         $searchCriteriaRoutePointName = null
    ) {
        $this->setServiceProviderId($serviceProviderId);
        $this->setGroupId($groupId);
        $this->setExternalSystem($externalSystem);
        $this->setResponseSizeLimit($responseSizeLimit);
        $this->setSearchCriteriaRoutePointName($searchCriteriaRoutePointName);
    }

    /**
     * @return \BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaGroup\GroupRoutePointExternalSystemGetAssignedRoutePointListResponse $response
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
    public function setExternalSystem($externalSystem = null)
    {
        $this->externalSystem = ($externalSystem InstanceOf RoutePointExternalSystem)
             ? $externalSystem
             : new RoutePointExternalSystem($externalSystem);
        $this->externalSystem->setElementName('externalSystem');
        return $this;
    }

    /**
     * 
     * @return RoutePointExternalSystem $externalSystem
     */
    public function getExternalSystem()
    {
        return ($this->externalSystem)
            ? $this->externalSystem->getElementValue()
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
    public function setSearchCriteriaRoutePointName(SearchCriteriaRoutePointName $searchCriteriaRoutePointName = null)
    {
        $this->searchCriteriaRoutePointName = ($searchCriteriaRoutePointName InstanceOf SearchCriteriaRoutePointName)
             ? $searchCriteriaRoutePointName
             : new SearchCriteriaRoutePointName($searchCriteriaRoutePointName);
        $this->searchCriteriaRoutePointName->setElementName('searchCriteriaRoutePointName');
        return $this;
    }

    /**
     * 
     * @return SearchCriteriaRoutePointName $searchCriteriaRoutePointName
     */
    public function getSearchCriteriaRoutePointName()
    {
        return $this->searchCriteriaRoutePointName;
    }
}
