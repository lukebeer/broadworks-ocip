<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceCallCenter; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ServiceProviderId;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\GroupId;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ResponseSizeLimit;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\SearchCriteriaCallCenterScheduledReportName;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\SearchCriteriaExactCallCenterScheduledReportCreatedBySupervisor;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\SearchCriteriaExactCallCenterReportTemplateKey;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Request to get a list of completed group level call center reporting scheduled reports.
 *         The response is either an GroupCallCenterEnhancedReportingScheduledReportGetCompletedListResponse or an ErrorResponse.
 */
class GroupCallCenterEnhancedReportingScheduledReportGetCompletedListRequest extends ComplexType implements ComplexInterface
{
    public    $name = __CLASS__;

    public function __construct(
             $serviceProviderId,
             $groupId,
             $responseSizeLimit=null,
             $searchCriteriaCallCenterScheduledReportName=null,
             $searchCriteriaExactCallCenterScheduledReportCreatedBySupervisor=null,
             $searchCriteriaExactCallCenterReportTemplateKey=null
    ) {
        $this->serviceProviderId                                               = new ServiceProviderId($serviceProviderId);
        $this->groupId                                                         = new GroupId($groupId);
        $this->responseSizeLimit                                               = $responseSizeLimit;
        $this->searchCriteriaCallCenterScheduledReportName                     = $searchCriteriaCallCenterScheduledReportName;
        $this->searchCriteriaExactCallCenterScheduledReportCreatedBySupervisor = $searchCriteriaExactCallCenterScheduledReportCreatedBySupervisor;
        $this->searchCriteriaExactCallCenterReportTemplateKey                  = $searchCriteriaExactCallCenterReportTemplateKey;
        $this->args                                                            = func_get_args();
    }

    public function setServiceProviderId($serviceProviderId)
    {
        $serviceProviderId and $this->serviceProviderId = new ServiceProviderId($serviceProviderId);
    }

    public function getServiceProviderId()
    {
        return (!$this->serviceProviderId) ?: $this->serviceProviderId->value();
    }

    public function setGroupId($groupId)
    {
        $groupId and $this->groupId = new GroupId($groupId);
    }

    public function getGroupId()
    {
        return (!$this->groupId) ?: $this->groupId->value();
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

    public function setSearchCriteriaExactCallCenterScheduledReportCreatedBySupervisor($searchCriteriaExactCallCenterScheduledReportCreatedBySupervisor)
    {
        $searchCriteriaExactCallCenterScheduledReportCreatedBySupervisor and $this->searchCriteriaExactCallCenterScheduledReportCreatedBySupervisor = new SearchCriteriaExactCallCenterScheduledReportCreatedBySupervisor($searchCriteriaExactCallCenterScheduledReportCreatedBySupervisor);
    }

    public function getSearchCriteriaExactCallCenterScheduledReportCreatedBySupervisor()
    {
        return (!$this->searchCriteriaExactCallCenterScheduledReportCreatedBySupervisor) ?: $this->searchCriteriaExactCallCenterScheduledReportCreatedBySupervisor->value();
    }

    public function setSearchCriteriaExactCallCenterReportTemplateKey($searchCriteriaExactCallCenterReportTemplateKey)
    {
        $searchCriteriaExactCallCenterReportTemplateKey and $this->searchCriteriaExactCallCenterReportTemplateKey = new SearchCriteriaExactCallCenterReportTemplateKey($searchCriteriaExactCallCenterReportTemplateKey);
    }

    public function getSearchCriteriaExactCallCenterReportTemplateKey()
    {
        return (!$this->searchCriteriaExactCallCenterReportTemplateKey) ?: $this->searchCriteriaExactCallCenterReportTemplateKey->value();
    }
}
