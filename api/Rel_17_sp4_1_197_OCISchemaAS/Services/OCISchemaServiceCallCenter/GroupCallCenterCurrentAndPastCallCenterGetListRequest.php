<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCallCenter; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSearchCriteria\SearchCriteriaCallCenterName;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSearchCriteria\ResponseSizeLimit;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ServiceProviderId;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\GroupId;
use Broadworks_OCIP\core\Builder\Types\PrimitiveType;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCallCenter\GroupCallCenterCurrentAndPastCallCenterGetListResponse;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Request to get all the current and past call centers for the group.
 *         The response is either GroupCallCenterCurrentAndPastCallCenterGetListResponse or ErrorResponse.
 */
class GroupCallCenterCurrentAndPastCallCenterGetListRequest extends ComplexType implements ComplexInterface
{
    public    $responseType                 = 'Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCallCenter\GroupCallCenterCurrentAndPastCallCenterGetListResponse';
    public    $name                         = 'GroupCallCenterCurrentAndPastCallCenterGetListRequest';
    protected $serviceProviderId            = null;
    protected $isPremiumOnly                = null;
    protected $groupId                      = null;
    protected $responseSizeLimit            = null;
    protected $searchCriteriaCallCenterName = null;

    public function __construct(
         $serviceProviderId,
         $isPremiumOnly = null,
         $groupId,
         $responseSizeLimit = null,
         SearchCriteriaCallCenterName $searchCriteriaCallCenterName = null
    ) {
        $this->setServiceProviderId($serviceProviderId);
        $this->setIsPremiumOnly($isPremiumOnly);
        $this->setGroupId($groupId);
        $this->setResponseSizeLimit($responseSizeLimit);
        $this->setSearchCriteriaCallCenterName($searchCriteriaCallCenterName);
    }

    /**
     * @return GroupCallCenterCurrentAndPastCallCenterGetListResponse
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
    public function setIsPremiumOnly($isPremiumOnly = null)
    {
        if (!$isPremiumOnly) return $this;
        $this->isPremiumOnly = new PrimitiveType($isPremiumOnly);
        $this->isPremiumOnly->setName('isPremiumOnly');
        return $this;
    }

    /**
     * 
     * @return xs:boolean
     */
    public function getIsPremiumOnly()
    {
        return $this->isPremiumOnly->getValue();
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
    public function setSearchCriteriaCallCenterName(SearchCriteriaCallCenterName $searchCriteriaCallCenterName = null)
    {
        if (!$searchCriteriaCallCenterName) return $this;
        $this->searchCriteriaCallCenterName = ($searchCriteriaCallCenterName InstanceOf SearchCriteriaCallCenterName)
             ? $searchCriteriaCallCenterName
             : new SearchCriteriaCallCenterName($searchCriteriaCallCenterName);
        $this->searchCriteriaCallCenterName->setName('searchCriteriaCallCenterName');
        return $this;
    }

    /**
     * 
     * @return SearchCriteriaCallCenterName
     */
    public function getSearchCriteriaCallCenterName()
    {
        return $this->searchCriteriaCallCenterName;
    }
}
