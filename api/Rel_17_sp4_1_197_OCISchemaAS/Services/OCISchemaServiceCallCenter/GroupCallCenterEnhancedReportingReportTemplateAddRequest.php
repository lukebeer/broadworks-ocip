<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceCallCenter; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ServiceProviderId;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\GroupId;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\CallCenterReportTemplateName;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\CallCenterReportTemplateDescription;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\CallCenterReportDataTemplateName;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\CallCenterReportDataTemplateFilterNumber;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\LabeledFileResource;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\CallCenterReportTemplateAccessOption;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\xs:boolean;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\CallCenterReportInputParameterOption;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\CallCenterReportServiceLevelInputParameterNumber;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\CallCenterReportAbandonedCallInputParameterNumber;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\CallCenterReportDataTemplateQueryFilterValue;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Request to add a group level call center report template.
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class GroupCallCenterEnhancedReportingReportTemplateAddRequest extends ComplexType implements ComplexInterface
{
    public    $name = __CLASS__;

    public function __construct(
             $serviceProviderId,
             $groupId,
             $name,
             $description=null,
             $dataTemplate,
             $filterNumber=null,
             LabeledFileResource $xsltTemplate,
             $scope,
             $isEnabled,
             $isRealtimeReport=null,
             $callCompletionThresholdParam=null,
             $shortDurationThresholdParam=null,
             $serviceLevelThresholdParam=null,
             $serviceLevelInclusionsParam=null,
             $serviceLevelObjectiveThresholdParam=null,
             $abandonedCallThresholdParam=null,
             $serviceLevelThresholdParamNumber=null,
             $abandonedCallThresholdParamNumber=null,
             $filterValue=null
    ) {
        $this->serviceProviderId                   = new ServiceProviderId($serviceProviderId);
        $this->groupId                             = new GroupId($groupId);
        $this->name                                = new CallCenterReportTemplateName($name);
        $this->description                         = $description;
        $this->dataTemplate                        = $dataTemplate;
        $this->filterNumber                        = new CallCenterReportDataTemplateFilterNumber($filterNumber);
        $this->xsltTemplate                        = $xsltTemplate;
        $this->scope                               = $scope;
        $this->isEnabled                           = $isEnabled;
        $this->isRealtimeReport                    = $isRealtimeReport;
        $this->callCompletionThresholdParam        = $callCompletionThresholdParam;
        $this->shortDurationThresholdParam         = $shortDurationThresholdParam;
        $this->serviceLevelThresholdParam          = $serviceLevelThresholdParam;
        $this->serviceLevelInclusionsParam         = $serviceLevelInclusionsParam;
        $this->serviceLevelObjectiveThresholdParam = $serviceLevelObjectiveThresholdParam;
        $this->abandonedCallThresholdParam         = $abandonedCallThresholdParam;
        $this->serviceLevelThresholdParamNumber    = new CallCenterReportServiceLevelInputParameterNumber($serviceLevelThresholdParamNumber);
        $this->abandonedCallThresholdParamNumber   = new CallCenterReportAbandonedCallInputParameterNumber($abandonedCallThresholdParamNumber);
        $this->filterValue                         = new CallCenterReportDataTemplateQueryFilterValue($filterValue);
        $this->args                                = func_get_args();
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

    public function setName($name)
    {
        $name and $this->name = new CallCenterReportTemplateName($name);
    }

    public function getName()
    {
        return (!$this->name) ?: $this->name->value();
    }

    public function setDescription($description)
    {
        $description and $this->description = new CallCenterReportTemplateDescription($description);
    }

    public function getDescription()
    {
        return (!$this->description) ?: $this->description->value();
    }

    public function setDataTemplate($dataTemplate)
    {
        $dataTemplate and $this->dataTemplate = new CallCenterReportDataTemplateName($dataTemplate);
    }

    public function getDataTemplate()
    {
        return (!$this->dataTemplate) ?: $this->dataTemplate->value();
    }

    public function setFilterNumber($filterNumber)
    {
        $filterNumber and $this->filterNumber = new CallCenterReportDataTemplateFilterNumber($filterNumber);
    }

    public function getFilterNumber()
    {
        return (!$this->filterNumber) ?: $this->filterNumber->value();
    }

    public function setXsltTemplate($xsltTemplate)
    {
        $xsltTemplate and $this->xsltTemplate = new LabeledFileResource($xsltTemplate);
    }

    public function getXsltTemplate()
    {
        return (!$this->xsltTemplate) ?: $this->xsltTemplate->value();
    }

    public function setScope($scope)
    {
        $scope and $this->scope = new CallCenterReportTemplateAccessOption($scope);
    }

    public function getScope()
    {
        return (!$this->scope) ?: $this->scope->value();
    }

    public function setIsEnabled($isEnabled)
    {
        $isEnabled and $this->isEnabled = new xs:boolean($isEnabled);
    }

    public function getIsEnabled()
    {
        return (!$this->isEnabled) ?: $this->isEnabled->value();
    }

    public function setIsRealtimeReport($isRealtimeReport)
    {
        $isRealtimeReport and $this->isRealtimeReport = new xs:boolean($isRealtimeReport);
    }

    public function getIsRealtimeReport()
    {
        return (!$this->isRealtimeReport) ?: $this->isRealtimeReport->value();
    }

    public function setCallCompletionThresholdParam($callCompletionThresholdParam)
    {
        $callCompletionThresholdParam and $this->callCompletionThresholdParam = new CallCenterReportInputParameterOption($callCompletionThresholdParam);
    }

    public function getCallCompletionThresholdParam()
    {
        return (!$this->callCompletionThresholdParam) ?: $this->callCompletionThresholdParam->value();
    }

    public function setShortDurationThresholdParam($shortDurationThresholdParam)
    {
        $shortDurationThresholdParam and $this->shortDurationThresholdParam = new CallCenterReportInputParameterOption($shortDurationThresholdParam);
    }

    public function getShortDurationThresholdParam()
    {
        return (!$this->shortDurationThresholdParam) ?: $this->shortDurationThresholdParam->value();
    }

    public function setServiceLevelThresholdParam($serviceLevelThresholdParam)
    {
        $serviceLevelThresholdParam and $this->serviceLevelThresholdParam = new CallCenterReportInputParameterOption($serviceLevelThresholdParam);
    }

    public function getServiceLevelThresholdParam()
    {
        return (!$this->serviceLevelThresholdParam) ?: $this->serviceLevelThresholdParam->value();
    }

    public function setServiceLevelInclusionsParam($serviceLevelInclusionsParam)
    {
        $serviceLevelInclusionsParam and $this->serviceLevelInclusionsParam = new CallCenterReportInputParameterOption($serviceLevelInclusionsParam);
    }

    public function getServiceLevelInclusionsParam()
    {
        return (!$this->serviceLevelInclusionsParam) ?: $this->serviceLevelInclusionsParam->value();
    }

    public function setServiceLevelObjectiveThresholdParam($serviceLevelObjectiveThresholdParam)
    {
        $serviceLevelObjectiveThresholdParam and $this->serviceLevelObjectiveThresholdParam = new CallCenterReportInputParameterOption($serviceLevelObjectiveThresholdParam);
    }

    public function getServiceLevelObjectiveThresholdParam()
    {
        return (!$this->serviceLevelObjectiveThresholdParam) ?: $this->serviceLevelObjectiveThresholdParam->value();
    }

    public function setAbandonedCallThresholdParam($abandonedCallThresholdParam)
    {
        $abandonedCallThresholdParam and $this->abandonedCallThresholdParam = new CallCenterReportInputParameterOption($abandonedCallThresholdParam);
    }

    public function getAbandonedCallThresholdParam()
    {
        return (!$this->abandonedCallThresholdParam) ?: $this->abandonedCallThresholdParam->value();
    }

    public function setServiceLevelThresholdParamNumber($serviceLevelThresholdParamNumber)
    {
        $serviceLevelThresholdParamNumber and $this->serviceLevelThresholdParamNumber = new CallCenterReportServiceLevelInputParameterNumber($serviceLevelThresholdParamNumber);
    }

    public function getServiceLevelThresholdParamNumber()
    {
        return (!$this->serviceLevelThresholdParamNumber) ?: $this->serviceLevelThresholdParamNumber->value();
    }

    public function setAbandonedCallThresholdParamNumber($abandonedCallThresholdParamNumber)
    {
        $abandonedCallThresholdParamNumber and $this->abandonedCallThresholdParamNumber = new CallCenterReportAbandonedCallInputParameterNumber($abandonedCallThresholdParamNumber);
    }

    public function getAbandonedCallThresholdParamNumber()
    {
        return (!$this->abandonedCallThresholdParamNumber) ?: $this->abandonedCallThresholdParamNumber->value();
    }

    public function setFilterValue($filterValue)
    {
        $filterValue and $this->filterValue = new CallCenterReportDataTemplateQueryFilterValue($filterValue);
    }

    public function getFilterValue()
    {
        return (!$this->filterValue) ?: $this->filterValue->value();
    }
}
