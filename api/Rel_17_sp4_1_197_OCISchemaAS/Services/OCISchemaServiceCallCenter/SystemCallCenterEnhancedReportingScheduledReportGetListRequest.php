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
    public    $name                                                             = __CLASS__;
    protected $responseSizeLimit                                                = null;
    protected $searchCriteriaCallCenterScheduledReportName                      = null;
    protected $searchCriteriaGroupId                                            = null;
    protected $searchCriteriaExactCallCenterScheduledReportServiceProvider      = null;
    protected $searchCriteriaExactCallCenterScheduledReportCreatedBySupervisor  = null;
    protected $searchCriteriaCallCenterReportTemplateName                       = null;

    public function __construct(
         $responseSizeLimit = null,
         SearchCriteriaCallCenterScheduledReportName $searchCriteriaCallCenterScheduledReportName = null,
         SearchCriteriaGroupId $searchCriteriaGroupId = null,
         SearchCriteriaExactCallCenterScheduledReportServiceProvider $searchCriteriaExactCallCenterScheduledReportServiceProvider = null,
         SearchCriteriaExactCallCenterScheduledReportCreatedBySupervisor $searchCriteriaExactCallCenterScheduledReportCreatedBySupervisor = null,
         SearchCriteriaCallCenterReportTemplateName $searchCriteriaCallCenterReportTemplateName = null
    ) {
        $this->setResponseSizeLimit($responseSizeLimit);
        $this->setSearchCriteriaCallCenterScheduledReportName($searchCriteriaCallCenterScheduledReportName);
        $this->setSearchCriteriaGroupId($searchCriteriaGroupId);
        $this->setSearchCriteriaExactCallCenterScheduledReportServiceProvider($searchCriteriaExactCallCenterScheduledReportServiceProvider);
        $this->setSearchCriteriaExactCallCenterScheduledReportCreatedBySupervisor($searchCriteriaExactCallCenterScheduledReportCreatedBySupervisor);
        $this->setSearchCriteriaCallCenterReportTemplateName($searchCriteriaCallCenterReportTemplateName);
    }

    public function setResponseSizeLimit($responseSizeLimit = null)
    {
        $this->responseSizeLimit = ($responseSizeLimit InstanceOf ResponseSizeLimit)
             ? $responseSizeLimit
             : new ResponseSizeLimit($responseSizeLimit);
    }

    public function getResponseSizeLimit()
    {
        return (!$this->responseSizeLimit) ?: $this->responseSizeLimit->value();
    }

    public function setSearchCriteriaCallCenterScheduledReportName(SearchCriteriaCallCenterScheduledReportName $searchCriteriaCallCenterScheduledReportName = null)
    {
    }

    public function getSearchCriteriaCallCenterScheduledReportName()
    {
        return (!$this->searchCriteriaCallCenterScheduledReportName) ?: $this->searchCriteriaCallCenterScheduledReportName->value();
    }

    public function setSearchCriteriaGroupId(SearchCriteriaGroupId $searchCriteriaGroupId = null)
    {
    }

    public function getSearchCriteriaGroupId()
    {
        return (!$this->searchCriteriaGroupId) ?: $this->searchCriteriaGroupId->value();
    }

    public function setSearchCriteriaExactCallCenterScheduledReportServiceProvider(SearchCriteriaExactCallCenterScheduledReportServiceProvider $searchCriteriaExactCallCenterScheduledReportServiceProvider = null)
    {
    }

    public function getSearchCriteriaExactCallCenterScheduledReportServiceProvider()
    {
        return (!$this->searchCriteriaExactCallCenterScheduledReportServiceProvider) ?: $this->searchCriteriaExactCallCenterScheduledReportServiceProvider->value();
    }

    public function setSearchCriteriaExactCallCenterScheduledReportCreatedBySupervisor(SearchCriteriaExactCallCenterScheduledReportCreatedBySupervisor $searchCriteriaExactCallCenterScheduledReportCreatedBySupervisor = null)
    {
    }

    public function getSearchCriteriaExactCallCenterScheduledReportCreatedBySupervisor()
    {
        return (!$this->searchCriteriaExactCallCenterScheduledReportCreatedBySupervisor) ?: $this->searchCriteriaExactCallCenterScheduledReportCreatedBySupervisor->value();
    }

    public function setSearchCriteriaCallCenterReportTemplateName(SearchCriteriaCallCenterReportTemplateName $searchCriteriaCallCenterReportTemplateName = null)
    {
    }

    public function getSearchCriteriaCallCenterReportTemplateName()
    {
        return (!$this->searchCriteriaCallCenterReportTemplateName) ?: $this->searchCriteriaCallCenterReportTemplateName->value();
    }
}
