<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceCallCenter; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSearchCriteria\SearchCriteriaExactCallCenterScheduledReportCreatedBySupervisor;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSearchCriteria\SearchCriteriaExactCallCenterScheduledReportServiceProvider;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSearchCriteria\SearchCriteriaCallCenterScheduledReportName;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSearchCriteria\SearchCriteriaCallCenterReportTemplateName;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSearchCriteria\SearchCriteriaGroupId;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSearchCriteria\ResponseSizeLimit;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
     * Request to get the list of all call center reporting scheduled reports in the system.
 *         The response is either an SystemCallCenterEnhancedReportingScheduledReportGetListResponse or an ErrorResponse.
 */
class SystemCallCenterEnhancedReportingScheduledReportGetListRequest extends ComplexType implements ComplexInterface
{
    const     RESPONSE_TYPE                                                    = 'Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceCallCenter\SystemCallCenterEnhancedReportingScheduledReportGetListResponse';
    public    $name                                                            = __CLASS__;
    protected $responseSizeLimit                                               = null;
    protected $searchCriteriaCallCenterScheduledReportName                     = null;
    protected $searchCriteriaGroupId                                           = null;
    protected $searchCriteriaExactCallCenterScheduledReportServiceProvider     = null;
    protected $searchCriteriaExactCallCenterScheduledReportCreatedBySupervisor = null;
    protected $searchCriteriaCallCenterReportTemplateName                      = null;

    public function __construct(
         $responseSizeLimit = null,
          $searchCriteriaCallCenterScheduledReportName = null,
          $searchCriteriaGroupId = null,
          $searchCriteriaExactCallCenterScheduledReportServiceProvider = null,
          $searchCriteriaExactCallCenterScheduledReportCreatedBySupervisor = null,
          $searchCriteriaCallCenterReportTemplateName = null
    ) {
        $this->setResponseSizeLimit($responseSizeLimit);
        $this->setSearchCriteriaCallCenterScheduledReportName($searchCriteriaCallCenterScheduledReportName);
        $this->setSearchCriteriaGroupId($searchCriteriaGroupId);
        $this->setSearchCriteriaExactCallCenterScheduledReportServiceProvider($searchCriteriaExactCallCenterScheduledReportServiceProvider);
        $this->setSearchCriteriaExactCallCenterScheduledReportCreatedBySupervisor($searchCriteriaExactCallCenterScheduledReportCreatedBySupervisor);
        $this->setSearchCriteriaCallCenterReportTemplateName($searchCriteriaCallCenterReportTemplateName);
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
     * Criteria for searching for a group ID.
     */
    public function setSearchCriteriaGroupId(SearchCriteriaGroupId $searchCriteriaGroupId = null)
    {
        $this->searchCriteriaGroupId =  $searchCriteriaGroupId;
    }

    /**
     * Criteria for searching for a group ID.
     */
    public function getSearchCriteriaGroupId()
    {
        return (!$this->searchCriteriaGroupId) ?: $this->searchCriteriaGroupId->getValue();
    }

    /**
     * Criteria for searching for a particular call center scheduled report's service provider.
     */
    public function setSearchCriteriaExactCallCenterScheduledReportServiceProvider(SearchCriteriaExactCallCenterScheduledReportServiceProvider $searchCriteriaExactCallCenterScheduledReportServiceProvider = null)
    {
        $this->searchCriteriaExactCallCenterScheduledReportServiceProvider =  $searchCriteriaExactCallCenterScheduledReportServiceProvider;
    }

    /**
     * Criteria for searching for a particular call center scheduled report's service provider.
     */
    public function getSearchCriteriaExactCallCenterScheduledReportServiceProvider()
    {
        return (!$this->searchCriteriaExactCallCenterScheduledReportServiceProvider) ?: $this->searchCriteriaExactCallCenterScheduledReportServiceProvider->getValue();
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
    public function setSearchCriteriaCallCenterReportTemplateName(SearchCriteriaCallCenterReportTemplateName $searchCriteriaCallCenterReportTemplateName = null)
    {
        $this->searchCriteriaCallCenterReportTemplateName =  $searchCriteriaCallCenterReportTemplateName;
    }

    /**
     * Criteria for searching for a particular call center enhanced reporting report template.
     */
    public function getSearchCriteriaCallCenterReportTemplateName()
    {
        return (!$this->searchCriteriaCallCenterReportTemplateName) ?: $this->searchCriteriaCallCenterReportTemplateName->getValue();
    }
}
