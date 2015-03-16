<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCallCenter; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSearchCriteria\SearchCriteriaExactCallCenterScheduledReportCreatedBySupervisor;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSearchCriteria\SearchCriteriaExactCallCenterReportTemplateKey;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSearchCriteria\SearchCriteriaCallCenterScheduledReportName;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSearchCriteria\ResponseSizeLimit;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ServiceProviderId;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\GroupId;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Request to get a list of active group level call center reporting scheduled reports.
 *         The response is either an GroupCallCenterEnhancedReportingScheduledReportGetActiveListResponse or an ErrorResponse.
 */
class GroupCallCenterEnhancedReportingScheduledReportGetActiveListRequest extends ComplexType implements ComplexInterface
{
    public    $responseType                                                    = 'Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCallCenter\GroupCallCenterEnhancedReportingScheduledReportGetActiveListResponse';
    public    $name = 'GroupCallCenterEnhancedReportingScheduledReportGetActiveListRequest';
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
         SearchCriteriaCallCenterScheduledReportName $searchCriteriaCallCenterScheduledReportName = null,
         SearchCriteriaExactCallCenterScheduledReportCreatedBySupervisor $searchCriteriaExactCallCenterScheduledReportCreatedBySupervisor = null,
         SearchCriteriaExactCallCenterReportTemplateKey $searchCriteriaExactCallCenterReportTemplateKey = null
    ) {
        $this->setServiceProviderId($serviceProviderId);
        $this->setGroupId($groupId);
        $this->setResponseSizeLimit($responseSizeLimit);
        $this->setSearchCriteriaCallCenterScheduledReportName($searchCriteriaCallCenterScheduledReportName);
        $this->setSearchCriteriaExactCallCenterScheduledReportCreatedBySupervisor($searchCriteriaExactCallCenterScheduledReportCreatedBySupervisor);
        $this->setSearchCriteriaExactCallCenterReportTemplateKey($searchCriteriaExactCallCenterReportTemplateKey);
    }

    /**
     * @return \Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCallCenter\GroupCallCenterEnhancedReportingScheduledReportGetActiveListResponse $response
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
        $this->serviceProviderId->setName('serviceProviderId');
        return $this;
    }

    /**
     * 
     * @return ServiceProviderId $serviceProviderId
     */
    public function getServiceProviderId()
    {
        return ($this->serviceProviderId) ? $this->serviceProviderId->getValue() : null;
    }

    /**
     * 
     */
    public function setGroupId($groupId = null)
    {
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
        return ($this->groupId) ? $this->groupId->getValue() : null;
    }

    /**
     * 
     */
    public function setResponseSizeLimit($responseSizeLimit = null)
    {
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
        return ($this->responseSizeLimit) ? $this->responseSizeLimit->getValue() : null;
    }

    /**
     * 
     */
    public function setSearchCriteriaCallCenterScheduledReportName(SearchCriteriaCallCenterScheduledReportName $searchCriteriaCallCenterScheduledReportName = null)
    {
        $this->searchCriteriaCallCenterScheduledReportName = ($searchCriteriaCallCenterScheduledReportName InstanceOf SearchCriteriaCallCenterScheduledReportName)
             ? $searchCriteriaCallCenterScheduledReportName
             : new SearchCriteriaCallCenterScheduledReportName($searchCriteriaCallCenterScheduledReportName);
        $this->searchCriteriaCallCenterScheduledReportName->setName('searchCriteriaCallCenterScheduledReportName');
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
        $this->searchCriteriaExactCallCenterScheduledReportCreatedBySupervisor->setName('searchCriteriaExactCallCenterScheduledReportCreatedBySupervisor');
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
        $this->searchCriteriaExactCallCenterReportTemplateKey->setName('searchCriteriaExactCallCenterReportTemplateKey');
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
