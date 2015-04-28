<?php
/**
 * This file is part of http://github.com/LukeBeer/BroadworksOCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceTrunkGroup; 

use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSearchCriteria\SearchCriteriaTrunkGroupName;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSearchCriteria\SearchCriteriaGroupId;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSearchCriteria\ResponseSizeLimit;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ServiceProviderId;
use BroadworksOCIP\Builder\Types\ComplexInterface;
use BroadworksOCIP\Builder\Types\ComplexType;
use BroadworksOCIP\Response\ResponseOutput;
use BroadworksOCIP\Client\Client;


/**
 * Request to get the list of all available trunk groups defined in an enterprise.  It is possible to search by various criteria to restrict the number of rows returned.
 *         Multiple search criteria are logically ANDed together.
 *         The response is either a EnterpriseEnterpriseTrunkGetAvailableTrunkGroupListResponse or an ErrorResponse.
 */
class EnterpriseEnterpriseTrunkGetAvailableTrunkGroupListRequest extends ComplexType implements ComplexInterface
{
    public    $responseType = 'BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceTrunkGroup\EnterpriseEnterpriseTrunkGetAvailableTrunkGroupListResponse';
    public    $elementName = 'EnterpriseEnterpriseTrunkGetAvailableTrunkGroupListRequest';
    protected $serviceProviderId;
    protected $responseSizeLimit;
    protected $searchCriteriaTrunkGroupName;
    protected $searchCriteriaGroupId;

    public function __construct(
         $serviceProviderId = '',
         $responseSizeLimit = null,
         $searchCriteriaTrunkGroupName = null,
         $searchCriteriaGroupId = null
    ) {
        $this->setServiceProviderId($serviceProviderId);
        $this->setResponseSizeLimit($responseSizeLimit);
        $this->setSearchCriteriaTrunkGroupName($searchCriteriaTrunkGroupName);
        $this->setSearchCriteriaGroupId($searchCriteriaGroupId);
    }

    /**
     * @return \BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceTrunkGroup\EnterpriseEnterpriseTrunkGetAvailableTrunkGroupListResponse $response
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
    public function setSearchCriteriaTrunkGroupName(SearchCriteriaTrunkGroupName $searchCriteriaTrunkGroupName = null)
    {
        $this->searchCriteriaTrunkGroupName = ($searchCriteriaTrunkGroupName InstanceOf SearchCriteriaTrunkGroupName)
             ? $searchCriteriaTrunkGroupName
             : new SearchCriteriaTrunkGroupName($searchCriteriaTrunkGroupName);
        $this->searchCriteriaTrunkGroupName->setElementName('searchCriteriaTrunkGroupName');
        return $this;
    }

    /**
     * 
     * @return SearchCriteriaTrunkGroupName $searchCriteriaTrunkGroupName
     */
    public function getSearchCriteriaTrunkGroupName()
    {
        return $this->searchCriteriaTrunkGroupName;
    }

    /**
     * 
     */
    public function setSearchCriteriaGroupId(SearchCriteriaGroupId $searchCriteriaGroupId = null)
    {
        $this->searchCriteriaGroupId = ($searchCriteriaGroupId InstanceOf SearchCriteriaGroupId)
             ? $searchCriteriaGroupId
             : new SearchCriteriaGroupId($searchCriteriaGroupId);
        $this->searchCriteriaGroupId->setElementName('searchCriteriaGroupId');
        return $this;
    }

    /**
     * 
     * @return SearchCriteriaGroupId $searchCriteriaGroupId
     */
    public function getSearchCriteriaGroupId()
    {
        return $this->searchCriteriaGroupId;
    }
}
