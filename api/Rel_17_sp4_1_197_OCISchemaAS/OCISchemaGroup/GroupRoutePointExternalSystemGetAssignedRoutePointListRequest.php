<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaGroup; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSearchCriteria\SearchCriteriaRoutePointName;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\RoutePointExternalSystem;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSearchCriteria\ResponseSizeLimit;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ServiceProviderId;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\GroupId;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaGroup\GroupRoutePointExternalSystemGetAssignedRoutePointListResponse;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Request a list of route points within in a group that have a given external system assigned.
 *         The response is either GroupRoutePointExternalSystemGetAssignedRoutePointListResponse or ErrorResponse.
 */
class GroupRoutePointExternalSystemGetAssignedRoutePointListRequest extends ComplexType implements ComplexInterface
{
    public    $responseType                 = 'Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaGroup\GroupRoutePointExternalSystemGetAssignedRoutePointListResponse';
    public    $name                         = 'GroupRoutePointExternalSystemGetAssignedRoutePointListRequest';
    protected $serviceProviderId            = null;
    protected $groupId                      = null;
    protected $externalSystem               = null;
    protected $responseSizeLimit            = null;
    protected $searchCriteriaRoutePointName = null;

    public function __construct(
         $serviceProviderId,
         $groupId,
         $externalSystem,
         $responseSizeLimit = null,
         SearchCriteriaRoutePointName $searchCriteriaRoutePointName = null
    ) {
        $this->setServiceProviderId($serviceProviderId);
        $this->setGroupId($groupId);
        $this->setExternalSystem($externalSystem);
        $this->setResponseSizeLimit($responseSizeLimit);
        $this->setSearchCriteriaRoutePointName($searchCriteriaRoutePointName);
    }

    /**
     * @return GroupRoutePointExternalSystemGetAssignedRoutePointListResponse
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
    public function setExternalSystem($externalSystem = null)
    {
        if (!$externalSystem) return $this;
        $this->externalSystem = ($externalSystem InstanceOf RoutePointExternalSystem)
             ? $externalSystem
             : new RoutePointExternalSystem($externalSystem);
        $this->externalSystem->setName('externalSystem');
        return $this;
    }

    /**
     * 
     * @return RoutePointExternalSystem
     */
    public function getExternalSystem()
    {
        return $this->externalSystem->getValue();
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
    public function setSearchCriteriaRoutePointName(SearchCriteriaRoutePointName $searchCriteriaRoutePointName = null)
    {
        if (!$searchCriteriaRoutePointName) return $this;
        $this->searchCriteriaRoutePointName = ($searchCriteriaRoutePointName InstanceOf SearchCriteriaRoutePointName)
             ? $searchCriteriaRoutePointName
             : new SearchCriteriaRoutePointName($searchCriteriaRoutePointName);
        $this->searchCriteriaRoutePointName->setName('searchCriteriaRoutePointName');
        return $this;
    }

    /**
     * 
     * @return SearchCriteriaRoutePointName
     */
    public function getSearchCriteriaRoutePointName()
    {
        return $this->searchCriteriaRoutePointName;
    }
}
