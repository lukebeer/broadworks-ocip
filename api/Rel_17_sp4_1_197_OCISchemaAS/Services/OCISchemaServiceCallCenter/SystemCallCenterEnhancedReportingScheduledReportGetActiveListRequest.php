<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceCallCenter; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ResponseSizeLimit;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\SearchCriteriaCallCenterScheduledReportName;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\SearchCriteriaGroupId;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\SearchCriteriaExactCallCenterScheduledReportServiceProvider;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\SearchCriteriaExactCallCenterScheduledReportCreatedBySupervisor;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\SearchCriteriaCallCenterReportTemplateName;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Request to get the list of all active call center reporting scheduled reports in the system.
 *         The response is either a SystemCallCenterEnhancedReportingScheduledReportGetActiveListResponse or an ErrorResponse.
 */
class SystemCallCenterEnhancedReportingScheduledReportGetActiveListRequest extends ComplexType implements ComplexInterface
{
    public    $name = __CLASS__;

    public function __construct(
             $responseSizeLimit=null,
             $searchCriteriaCallCenterScheduledReportName=null,
             $searchCriteriaGroupId=null,
             $searchCriteriaExactCallCenterScheduledReportServiceProvider=null,
             $searchCriteriaExactCallCenterScheduledReportCreatedBySupervisor=null,
             $searchCriteriaCallCenterReportTemplateName=null
    ) {
        $this->responseSizeLimit                                               = $responseSizeLimit;
        $this->searchCriteriaCallCenterScheduledReportName                     = $searchCriteriaCallCenterScheduledReportName;
        $this->searchCriteriaGroupId                                           = $searchCriteriaGroupId;
        $this->searchCriteriaExactCallCenterScheduledReportServiceProvider     = $searchCriteriaExactCallCenterScheduledReportServiceProvider;
        $this->searchCriteriaExactCallCenterScheduledReportCreatedBySupervisor = $searchCriteriaExactCallCenterScheduledReportCreatedBySupervisor;
        $this->searchCriteriaCallCenterReportTemplateName                      = $searchCriteriaCallCenterReportTemplateName;
        $this->args                                                            = func_get_args();
    }

    public function setResponseSizeLimit($responseSizeLimit)
    {
        $responseSizeLimit and $this->responseSizeLimit = new ResponseSizeLimit($responseSizeLimit);
    }

    public function getResponseSizeLimit()
    {
        return (!$this->responseSizeLimit) ?: $this->responseSizeLimit->value();
    }

    public function setSearchCriteriaCallCenterScheduledReportName($searchCriteriaCallCenterScheduledReportName)
    {
        $searchCriteriaCallCenterScheduledReportName and $this->searchCriteriaCallCenterScheduledReportName = new SearchCriteriaCallCenterScheduledReportName($searchCriteriaCallCenterScheduledReportName);
    }

    public function getSearchCriteriaCallCenterScheduledReportName()
    {
        return (!$this->searchCriteriaCallCenterScheduledReportName) ?: $this->searchCriteriaCallCenterScheduledReportName->value();
    }

    public function setSearchCriteriaGroupId($searchCriteriaGroupId)
    {
        $searchCriteriaGroupId and $this->searchCriteriaGroupId = new SearchCriteriaGroupId($searchCriteriaGroupId);
    }

    public function getSearchCriteriaGroupId()
    {
        return (!$this->searchCriteriaGroupId) ?: $this->searchCriteriaGroupId->value();
    }

    public function setSearchCriteriaExactCallCenterScheduledReportServiceProvider($searchCriteriaExactCallCenterScheduledReportServiceProvider)
    {
        $searchCriteriaExactCallCenterScheduledReportServiceProvider and $this->searchCriteriaExactCallCenterScheduledReportServiceProvider = new SearchCriteriaExactCallCenterScheduledReportServiceProvider($searchCriteriaExactCallCenterScheduledReportServiceProvider);
    }

    public function getSearchCriteriaExactCallCenterScheduledReportServiceProvider()
    {
        return (!$this->searchCriteriaExactCallCenterScheduledReportServiceProvider) ?: $this->searchCriteriaExactCallCenterScheduledReportServiceProvider->value();
    }

    public function setSearchCriteriaExactCallCenterScheduledReportCreatedBySupervisor($searchCriteriaExactCallCenterScheduledReportCreatedBySupervisor)
    {
        $searchCriteriaExactCallCenterScheduledReportCreatedBySupervisor and $this->searchCriteriaExactCallCenterScheduledReportCreatedBySupervisor = new SearchCriteriaExactCallCenterScheduledReportCreatedBySupervisor($searchCriteriaExactCallCenterScheduledReportCreatedBySupervisor);
    }

    public function getSearchCriteriaExactCallCenterScheduledReportCreatedBySupervisor()
    {
        return (!$this->searchCriteriaExactCallCenterScheduledReportCreatedBySupervisor) ?: $this->searchCriteriaExactCallCenterScheduledReportCreatedBySupervisor->value();
    }

    public function setSearchCriteriaCallCenterReportTemplateName($searchCriteriaCallCenterReportTemplateName)
    {
        $searchCriteriaCallCenterReportTemplateName and $this->searchCriteriaCallCenterReportTemplateName = new SearchCriteriaCallCenterReportTemplateName($searchCriteriaCallCenterReportTemplateName);
    }

    public function getSearchCriteriaCallCenterReportTemplateName()
    {
        return (!$this->searchCriteriaCallCenterReportTemplateName) ?: $this->searchCriteriaCallCenterReportTemplateName->value();
    }
}
