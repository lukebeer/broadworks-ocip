<?php
/**
 * This file is part of http://github.com/LukeBeer/BroadworksOCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCallCenter; 

use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSearchCriteria\SearchCriteriaExactCallCenterScheduledReportCreatedBySupervisor;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSearchCriteria\SearchCriteriaExactCallCenterReportTemplateKey;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSearchCriteria\SearchCriteriaCallCenterScheduledReportName;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSearchCriteria\ResponseSizeLimit;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ServiceProviderId;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\GroupId;
use BroadworksOCIP\Builder\Types\ComplexInterface;
use BroadworksOCIP\Builder\Types\ComplexType;
use BroadworksOCIP\Response\ResponseOutput;
use BroadworksOCIP\Client\Client;


/**
 * Request to get a list of group level call center reporting scheduled reports.
 *         The response is either an GroupCallCenterEnhancedReportingScheduledReportGetListResponse or an ErrorResponse.
 */
class GroupCallCenterEnhancedReportingScheduledReportGetListRequest extends ComplexType implements ComplexInterface
{
    public    $responseType = 'BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCallCenter\GroupCallCenterEnhancedReportingScheduledReportGetListResponse';
    public    $elementName = 'GroupCallCenterEnhancedReportingScheduledReportGetListRequest';
    protected $serviceProviderId;
    protected $groupId;
    protected $responseSizeLimit;
    protected $searchCriteriaCallCenterScheduledReportName;
    protected $searchCriteriaExactCallCenterScheduledReportCreatedBySupervisor;
    protected $searchCriteriaExactCallCenterReportTemplateKey;

    public function __construct(
         $serviceProviderId = '',
         $groupId = '',
         $responseSizeLimit = null,
         $searchCriteriaCallCenterScheduledReportName = null,
         $searchCriteriaExactCallCenterScheduledReportCreatedBySupervisor = null,
         $searchCriteriaExactCallCenterReportTemplateKey = null
    ) {
        $this->setServiceProviderId($serviceProviderId);
        $this->setGroupId($groupId);
        $this->setResponseSizeLimit($responseSizeLimit);
        $this->setSearchCriteriaCallCenterScheduledReportName($searchCriteriaCallCenterScheduledReportName);
        $this->setSearchCriteriaExactCallCenterScheduledReportCreatedBySupervisor($searchCriteriaExactCallCenterScheduledReportCreatedBySupervisor);
        $this->setSearchCriteriaExactCallCenterReportTemplateKey($searchCriteriaExactCallCenterReportTemplateKey);
    }

    /**
     * @return \BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCallCenter\GroupCallCenterEnhancedReportingScheduledReportGetListResponse $response
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
    public function setSearchCriteriaCallCenterScheduledReportName(SearchCriteriaCallCenterScheduledReportName $searchCriteriaCallCenterScheduledReportName = null)
    {
        $this->searchCriteriaCallCenterScheduledReportName = ($searchCriteriaCallCenterScheduledReportName InstanceOf SearchCriteriaCallCenterScheduledReportName)
             ? $searchCriteriaCallCenterScheduledReportName
             : new SearchCriteriaCallCenterScheduledReportName($searchCriteriaCallCenterScheduledReportName);
        $this->searchCriteriaCallCenterScheduledReportName->setElementName('searchCriteriaCallCenterScheduledReportName');
        return $this;
    }

    /**
     * 
     * @return SearchCriteriaCallCenterScheduledReportName $searchCriteriaCallCenterScheduledReportName
     */
    public function getSearchCriteriaCallCenterScheduledReportName()
    {
        return $this->searchCriteriaCallCenterScheduledReportName;
    }

    /**
     * 
     */
    public function setSearchCriteriaExactCallCenterScheduledReportCreatedBySupervisor(SearchCriteriaExactCallCenterScheduledReportCreatedBySupervisor $searchCriteriaExactCallCenterScheduledReportCreatedBySupervisor = null)
    {
        $this->searchCriteriaExactCallCenterScheduledReportCreatedBySupervisor = ($searchCriteriaExactCallCenterScheduledReportCreatedBySupervisor InstanceOf SearchCriteriaExactCallCenterScheduledReportCreatedBySupervisor)
             ? $searchCriteriaExactCallCenterScheduledReportCreatedBySupervisor
             : new SearchCriteriaExactCallCenterScheduledReportCreatedBySupervisor($searchCriteriaExactCallCenterScheduledReportCreatedBySupervisor);
        $this->searchCriteriaExactCallCenterScheduledReportCreatedBySupervisor->setElementName('searchCriteriaExactCallCenterScheduledReportCreatedBySupervisor');
        return $this;
    }

    /**
     * 
     * @return SearchCriteriaExactCallCenterScheduledReportCreatedBySupervisor $searchCriteriaExactCallCenterScheduledReportCreatedBySupervisor
     */
    public function getSearchCriteriaExactCallCenterScheduledReportCreatedBySupervisor()
    {
        return $this->searchCriteriaExactCallCenterScheduledReportCreatedBySupervisor;
    }

    /**
     * 
     */
    public function setSearchCriteriaExactCallCenterReportTemplateKey(SearchCriteriaExactCallCenterReportTemplateKey $searchCriteriaExactCallCenterReportTemplateKey = null)
    {
        $this->searchCriteriaExactCallCenterReportTemplateKey = ($searchCriteriaExactCallCenterReportTemplateKey InstanceOf SearchCriteriaExactCallCenterReportTemplateKey)
             ? $searchCriteriaExactCallCenterReportTemplateKey
             : new SearchCriteriaExactCallCenterReportTemplateKey($searchCriteriaExactCallCenterReportTemplateKey);
        $this->searchCriteriaExactCallCenterReportTemplateKey->setElementName('searchCriteriaExactCallCenterReportTemplateKey');
        return $this;
    }

    /**
     * 
     * @return SearchCriteriaExactCallCenterReportTemplateKey $searchCriteriaExactCallCenterReportTemplateKey
     */
    public function getSearchCriteriaExactCallCenterReportTemplateKey()
    {
        return $this->searchCriteriaExactCallCenterReportTemplateKey;
    }
}
