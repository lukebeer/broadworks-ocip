<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceCallCenter; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSearchCriteria\SearchCriteriaExactCallCenterScheduledReportCreatedBySupervisor;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSearchCriteria\SearchCriteriaExactCallCenterReportTemplateKey;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSearchCriteria\SearchCriteriaCallCenterScheduledReportName;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSearchCriteria\ResponseSizeLimit;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ServiceProviderId;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\GroupId;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
     * Request to get a list of active group level call center reporting scheduled reports.
 *         The response is either an GroupCallCenterEnhancedReportingScheduledReportGetActiveListResponse or an ErrorResponse.
 */
class GroupCallCenterEnhancedReportingScheduledReportGetActiveListRequest extends ComplexType implements ComplexInterface
{
    const     RESPONSE_TYPE                                                    = 'Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceCallCenter\GroupCallCenterEnhancedReportingScheduledReportGetActiveListResponse';
    public    $name                                                            = __CLASS__;
    protected $serviceProviderId                                               = null;
    protected $groupId                                                         = null;
    protected $responseSizeLimit                                               = null;
    protected $searchCriteriaCallCenterScheduledReportName                     = null;
    protected $searchCriteriaExactCallCenterScheduledReportCreatedBySupervisor = null;
    protected $searchCriteriaExactCallCenterReportTemplateKey                  = null;

    public function __construct(
         $serviceProviderId,
         $groupId,
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
     * Service Provider Id uniquely identifies a service provider.
     *         NOTE: The service provider id has a maximum length of 30 bytes, not 30 characters.
     */
    public function setServiceProviderId($serviceProviderId = null)
    {
        $this->serviceProviderId = ($serviceProviderId InstanceOf ServiceProviderId)
             ? $serviceProviderId
             : new ServiceProviderId($serviceProviderId);
    }

    /**
     * Service Provider Id uniquely identifies a service provider.
     *         NOTE: The service provider id has a maximum length of 30 bytes, not 30 characters.
     */
    public function getServiceProviderId()
    {
        return (!$this->serviceProviderId) ?: $this->serviceProviderId->getValue();
    }

    /**
     * Group Id identifies a group within a service provider or enterprise. The group id is not
     *         unique system wide. It must be combined with a service provider id to be unique across the system.
     */
    public function setGroupId($groupId = null)
    {
        $this->groupId = ($groupId InstanceOf GroupId)
             ? $groupId
             : new GroupId($groupId);
    }

    /**
     * Group Id identifies a group within a service provider or enterprise. The group id is not
     *         unique system wide. It must be combined with a service provider id to be unique across the system.
     */
    public function getGroupId()
    {
        return (!$this->groupId) ?: $this->groupId->getValue();
    }

    /**
     * Maximum number of rows to return in response to a search.
     *         By convention, elements of this type can be omitted to allow an
     *         unlimited number or rows in the search result.
     */
    public function setResponseSizeLimit($responseSizeLimit = null)
    {
        $this->responseSizeLimit = ($responseSizeLimit InstanceOf ResponseSizeLimit)
             ? $responseSizeLimit
             : new ResponseSizeLimit($responseSizeLimit);
    }

    /**
     * Maximum number of rows to return in response to a search.
     *         By convention, elements of this type can be omitted to allow an
     *         unlimited number or rows in the search result.
     */
    public function getResponseSizeLimit()
    {
        return (!$this->responseSizeLimit) ?: $this->responseSizeLimit->getValue();
    }

    /**
     * Criteria for searching for a call center enhanced reporting scheduled report name.
     */
    public function setSearchCriteriaCallCenterScheduledReportName(SearchCriteriaCallCenterScheduledReportName $searchCriteriaCallCenterScheduledReportName = null)
    {
        $this->searchCriteriaCallCenterScheduledReportName =  $searchCriteriaCallCenterScheduledReportName;
    }

    /**
     * Criteria for searching for a call center enhanced reporting scheduled report name.
     */
    public function getSearchCriteriaCallCenterScheduledReportName()
    {
        return (!$this->searchCriteriaCallCenterScheduledReportName) ?: $this->searchCriteriaCallCenterScheduledReportName->getValue();
    }

    /**
     * Criteria for searching for call center scheduled report created by a
     *         supervisor or administrator.
     */
    public function setSearchCriteriaExactCallCenterScheduledReportCreatedBySupervisor(SearchCriteriaExactCallCenterScheduledReportCreatedBySupervisor $searchCriteriaExactCallCenterScheduledReportCreatedBySupervisor = null)
    {
        $this->searchCriteriaExactCallCenterScheduledReportCreatedBySupervisor =  $searchCriteriaExactCallCenterScheduledReportCreatedBySupervisor;
    }

    /**
     * Criteria for searching for call center scheduled report created by a
     *         supervisor or administrator.
     */
    public function getSearchCriteriaExactCallCenterScheduledReportCreatedBySupervisor()
    {
        return (!$this->searchCriteriaExactCallCenterScheduledReportCreatedBySupervisor) ?: $this->searchCriteriaExactCallCenterScheduledReportCreatedBySupervisor->getValue();
    }

    /**
     * Criteria for searching for a particular call center enhanced reporting report template.
     */
    public function setSearchCriteriaExactCallCenterReportTemplateKey(SearchCriteriaExactCallCenterReportTemplateKey $searchCriteriaExactCallCenterReportTemplateKey = null)
    {
        $this->searchCriteriaExactCallCenterReportTemplateKey =  $searchCriteriaExactCallCenterReportTemplateKey;
    }

    /**
     * Criteria for searching for a particular call center enhanced reporting report template.
     */
    public function getSearchCriteriaExactCallCenterReportTemplateKey()
    {
        return (!$this->searchCriteriaExactCallCenterReportTemplateKey) ?: $this->searchCriteriaExactCallCenterReportTemplateKey->getValue();
    }
}
