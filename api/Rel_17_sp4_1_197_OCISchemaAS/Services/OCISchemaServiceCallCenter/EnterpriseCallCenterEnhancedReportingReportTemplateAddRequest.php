<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceCallCenter; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCallCenter\CallCenterReportInputParameterOption;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCallCenter\CallCenterReportTemplateAccessOption;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCallCenter\CallCenterReportTemplateDescription;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\CallCenterReportAbandonedCallInputParameterNumber;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCallCenter\CallCenterReportDataTemplateName;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\CallCenterReportServiceLevelInputParameterNumber;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\CallCenterReportDataTemplateQueryFilterValue;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\CallCenterReportDataTemplateFilterNumber;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\CallCenterReportTemplateName;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\LabeledFileResource;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ServiceProviderId;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Request to add an Enterprise level call center report template.
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class EnterpriseCallCenterEnhancedReportingReportTemplateAddRequest extends ComplexType implements ComplexInterface
{
    public    $name                                 = __CLASS__;
    protected $serviceProviderId                    = null;
    protected $name                                 = null;
    protected $description                          = null;
    protected $dataTemplate                         = null;
    protected $filterNumber                         = null;
    protected $xsltTemplate                         = null;
    protected $scope                                = null;
    protected $isEnabled                            = null;
    protected $isRealtimeReport                     = null;
    protected $callCompletionThresholdParam         = null;
    protected $shortDurationThresholdParam          = null;
    protected $serviceLevelThresholdParam           = null;
    protected $serviceLevelInclusionsParam          = null;
    protected $serviceLevelObjectiveThresholdParam  = null;
    protected $abandonedCallThresholdParam          = null;
    protected $serviceLevelThresholdParamNumber     = null;
    protected $abandonedCallThresholdParamNumber    = null;
    protected $filterValue                          = null;

    public function __construct(
         $serviceProviderId,
         $name,
         $description = null,
         $dataTemplate,
         $filterNumber = null,
         LabeledFileResource $xsltTemplate,
         $scope,
         $isEnabled,
         $isRealtimeReport = null,
         $callCompletionThresholdParam = null,
         $shortDurationThresholdParam = null,
         $serviceLevelThresholdParam = null,
         $serviceLevelInclusionsParam = null,
         $serviceLevelObjectiveThresholdParam = null,
         $abandonedCallThresholdParam = null,
         $serviceLevelThresholdParamNumber = null,
         $abandonedCallThresholdParamNumber = null,
         $filterValue = null
    ) {
        $this->setServiceProviderId($serviceProviderId);
        $this->setName($name);
        $this->setDescription($description);
        $this->setDataTemplate($dataTemplate);
        $this->setFilterNumber($filterNumber);
        $this->setXsltTemplate($xsltTemplate);
        $this->setScope($scope);
        $this->setIsEnabled($isEnabled);
        $this->setIsRealtimeReport($isRealtimeReport);
        $this->setCallCompletionThresholdParam($callCompletionThresholdParam);
        $this->setShortDurationThresholdParam($shortDurationThresholdParam);
        $this->setServiceLevelThresholdParam($serviceLevelThresholdParam);
        $this->setServiceLevelInclusionsParam($serviceLevelInclusionsParam);
        $this->setServiceLevelObjectiveThresholdParam($serviceLevelObjectiveThresholdParam);
        $this->setAbandonedCallThresholdParam($abandonedCallThresholdParam);
        $this->setServiceLevelThresholdParamNumber($serviceLevelThresholdParamNumber);
        $this->setAbandonedCallThresholdParamNumber($abandonedCallThresholdParamNumber);
        $this->setFilterValue($filterValue);
    }

    public function setServiceProviderId($serviceProviderId = null)
    {
        $this->serviceProviderId = ($serviceProviderId InstanceOf ServiceProviderId)
             ? $serviceProviderId
             : new ServiceProviderId($serviceProviderId);
    }

    public function getServiceProviderId()
    {
        return (!$this->serviceProviderId) ?: $this->serviceProviderId->value();
    }

    public function setName($name = null)
    {
        $this->name = ($name InstanceOf CallCenterReportTemplateName)
             ? $name
             : new CallCenterReportTemplateName($name);
    }

    public function getName()
    {
        return (!$this->name) ?: $this->name->value();
    }

    public function setDescription($description = null)
    {
        $this->description = ($description InstanceOf CallCenterReportTemplateDescription)
             ? $description
             : new CallCenterReportTemplateDescription($description);
    }

    public function getDescription()
    {
        return (!$this->description) ?: $this->description->value();
    }

    public function setDataTemplate($dataTemplate = null)
    {
        $this->dataTemplate = ($dataTemplate InstanceOf CallCenterReportDataTemplateName)
             ? $dataTemplate
             : new CallCenterReportDataTemplateName($dataTemplate);
    }

    public function getDataTemplate()
    {
        return (!$this->dataTemplate) ?: $this->dataTemplate->value();
    }

    public function setFilterNumber($filterNumber = null)
    {
        $this->filterNumber = ($filterNumber InstanceOf CallCenterReportDataTemplateFilterNumber)
             ? $filterNumber
             : new CallCenterReportDataTemplateFilterNumber($filterNumber);
    }

    public function getFilterNumber()
    {
        return (!$this->filterNumber) ?: $this->filterNumber->value();
    }

    public function setXsltTemplate(LabeledFileResource $xsltTemplate = null)
    {
    }

    public function getXsltTemplate()
    {
        return (!$this->xsltTemplate) ?: $this->xsltTemplate->value();
    }

    public function setScope($scope = null)
    {
        $this->scope = ($scope InstanceOf CallCenterReportTemplateAccessOption)
             ? $scope
             : new CallCenterReportTemplateAccessOption($scope);
    }

    public function getScope()
    {
        return (!$this->scope) ?: $this->scope->value();
    }

    public function setIsEnabled(xs:boolean $isEnabled = null)
    {
    }

    public function getIsEnabled()
    {
        return (!$this->isEnabled) ?: $this->isEnabled->value();
    }

    public function setIsRealtimeReport(xs:boolean $isRealtimeReport = null)
    {
    }

    public function getIsRealtimeReport()
    {
        return (!$this->isRealtimeReport) ?: $this->isRealtimeReport->value();
    }

    public function setCallCompletionThresholdParam($callCompletionThresholdParam = null)
    {
        $this->callCompletionThresholdParam = ($callCompletionThresholdParam InstanceOf CallCenterReportInputParameterOption)
             ? $callCompletionThresholdParam
             : new CallCenterReportInputParameterOption($callCompletionThresholdParam);
    }

    public function getCallCompletionThresholdParam()
    {
        return (!$this->callCompletionThresholdParam) ?: $this->callCompletionThresholdParam->value();
    }

    public function setShortDurationThresholdParam($shortDurationThresholdParam = null)
    {
        $this->shortDurationThresholdParam = ($shortDurationThresholdParam InstanceOf CallCenterReportInputParameterOption)
             ? $shortDurationThresholdParam
             : new CallCenterReportInputParameterOption($shortDurationThresholdParam);
    }

    public function getShortDurationThresholdParam()
    {
        return (!$this->shortDurationThresholdParam) ?: $this->shortDurationThresholdParam->value();
    }

    public function setServiceLevelThresholdParam($serviceLevelThresholdParam = null)
    {
        $this->serviceLevelThresholdParam = ($serviceLevelThresholdParam InstanceOf CallCenterReportInputParameterOption)
             ? $serviceLevelThresholdParam
             : new CallCenterReportInputParameterOption($serviceLevelThresholdParam);
    }

    public function getServiceLevelThresholdParam()
    {
        return (!$this->serviceLevelThresholdParam) ?: $this->serviceLevelThresholdParam->value();
    }

    public function setServiceLevelInclusionsParam($serviceLevelInclusionsParam = null)
    {
        $this->serviceLevelInclusionsParam = ($serviceLevelInclusionsParam InstanceOf CallCenterReportInputParameterOption)
             ? $serviceLevelInclusionsParam
             : new CallCenterReportInputParameterOption($serviceLevelInclusionsParam);
    }

    public function getServiceLevelInclusionsParam()
    {
        return (!$this->serviceLevelInclusionsParam) ?: $this->serviceLevelInclusionsParam->value();
    }

    public function setServiceLevelObjectiveThresholdParam($serviceLevelObjectiveThresholdParam = null)
    {
        $this->serviceLevelObjectiveThresholdParam = ($serviceLevelObjectiveThresholdParam InstanceOf CallCenterReportInputParameterOption)
             ? $serviceLevelObjectiveThresholdParam
             : new CallCenterReportInputParameterOption($serviceLevelObjectiveThresholdParam);
    }

    public function getServiceLevelObjectiveThresholdParam()
    {
        return (!$this->serviceLevelObjectiveThresholdParam) ?: $this->serviceLevelObjectiveThresholdParam->value();
    }

    public function setAbandonedCallThresholdParam($abandonedCallThresholdParam = null)
    {
        $this->abandonedCallThresholdParam = ($abandonedCallThresholdParam InstanceOf CallCenterReportInputParameterOption)
             ? $abandonedCallThresholdParam
             : new CallCenterReportInputParameterOption($abandonedCallThresholdParam);
    }

    public function getAbandonedCallThresholdParam()
    {
        return (!$this->abandonedCallThresholdParam) ?: $this->abandonedCallThresholdParam->value();
    }

    public function setServiceLevelThresholdParamNumber($serviceLevelThresholdParamNumber = null)
    {
        $this->serviceLevelThresholdParamNumber = ($serviceLevelThresholdParamNumber InstanceOf CallCenterReportServiceLevelInputParameterNumber)
             ? $serviceLevelThresholdParamNumber
             : new CallCenterReportServiceLevelInputParameterNumber($serviceLevelThresholdParamNumber);
    }

    public function getServiceLevelThresholdParamNumber()
    {
        return (!$this->serviceLevelThresholdParamNumber) ?: $this->serviceLevelThresholdParamNumber->value();
    }

    public function setAbandonedCallThresholdParamNumber($abandonedCallThresholdParamNumber = null)
    {
        $this->abandonedCallThresholdParamNumber = ($abandonedCallThresholdParamNumber InstanceOf CallCenterReportAbandonedCallInputParameterNumber)
             ? $abandonedCallThresholdParamNumber
             : new CallCenterReportAbandonedCallInputParameterNumber($abandonedCallThresholdParamNumber);
    }

    public function getAbandonedCallThresholdParamNumber()
    {
        return (!$this->abandonedCallThresholdParamNumber) ?: $this->abandonedCallThresholdParamNumber->value();
    }

    public function setFilterValue($filterValue = null)
    {
        $this->filterValue = ($filterValue InstanceOf CallCenterReportDataTemplateQueryFilterValue)
             ? $filterValue
             : new CallCenterReportDataTemplateQueryFilterValue($filterValue);
    }

    public function getFilterValue()
    {
        return (!$this->filterValue) ?: $this->filterValue->value();
    }
}
